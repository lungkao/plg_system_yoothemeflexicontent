# Continuation Guide

เอกสารนี้เขียนไว้สำหรับคนที่จะมาพัฒนาต่อ หรือกลับมาทำต่อหลังจากทิ้งช่วงไปนาน จุดประสงค์คือให้อ่านแล้วเข้าใจเร็วว่า plugin นี้แก้ปัญหาอะไร โครงสร้างอยู่ตรงไหน ทดสอบอย่างไร และจุดไหนห้ามพลาด

## 1. Project Goal

plugin นี้เพิ่ม FLEXIContent integration ให้ YOOtheme Pro 5 บน Joomla 5 โดยเน้น 3 เรื่องหลัก

1. ให้ YOOtheme Dynamic Content เลือกข้อมูลจาก FLEXIContent ได้
2. ให้ YOOtheme Template Assignment ใช้กับ FLEXIContent item/category ได้
3. ให้ FLEXIContent custom fields เช่น image, file, mediafile, sharedmedia, relation, weblink และ address แสดงผลใน YOOtheme ได้จริง

repository:

```text
https://github.com/lungkao/plg_system_yoothemeflexicontent
```

local development path:

```text
/Users/pisan/Sites/joomla54/installers/plg_system_yoothemeflexicontent
```

active package path ที่ Joomla/YOOtheme ใช้งานจริง:

```text
/Users/pisan/Sites/joomla54/templates/yootheme/packages/builder-source-flexicontent
```

เมื่อต้องแก้ code source package ให้แก้ทั้ง 2 ที่นี้ หรือแก้ใน installer package แล้ว sync ไป active package ก่อนทดสอบ

## 2. Current Version

version ล่าสุดที่ release แล้ว:

```text
v2.0.5
```

release URL:

```text
https://github.com/lungkao/plg_system_yoothemeflexicontent/releases/tag/v2.0.5
```

installer zip:

```text
/Users/pisan/Sites/joomla54/installers/dist/plg_system_yoothemeflexicontent-2.0.5.zip
```

latest release แก้เรื่อง field เลือกได้แต่ไม่แสดงค่า โดยเพิ่ม fallback resolver สำหรับ FLEXIContent complex fields

## 3. Important Files

main plugin:

```text
yoothemeflexicontent.php
script.php
yoothemeflexicontent.xml
```

YOOtheme source package:

```text
packages/builder-source-flexicontent/bootstrap.php
packages/builder-source-flexicontent/src/Listener/LoadSourceTypes.php
packages/builder-source-flexicontent/src/Listener/LoadBuilderConfig.php
packages/builder-source-flexicontent/src/Listener/MatchTemplate.php
packages/builder-source-flexicontent/src/Listener/LoadTemplateUrl.php
packages/builder-source-flexicontent/src/Type/FlexicontentFieldsType.php
packages/builder-source-flexicontent/src/Type/FlexicontentValueType.php
packages/builder-source-flexicontent/src/SourceController.php
```

เอกสาร:

```text
README.md
CHANGELOG.md
docs/USER_GUIDE.md
docs/DEVELOPER_NOTES.md
docs/CONTINUATION_GUIDE.md
```

## 4. Architecture Summary

plugin เป็น Joomla system plugin ที่ทำ 2 งานพร้อมกัน

1. ติดตั้ง/sync package `builder-source-flexicontent` เข้าไปใน YOOtheme
2. patch compatibility บางจุดของ YOOtheme Pro 5 เพื่อเลี่ยง circular dependency และ memory exhausted

YOOtheme integration ทำผ่าน event:

```php
'source.init' => [
    Listener\LoadSourceTypes::class => ['handle', -20],
],

\YOOtheme\Builder\BuilderConfig::class => [
    Listener\LoadBuilderConfig::class => ['handle', -10],
],
```

ข้อสำคัญ: listener ของ `BuilderConfig` ต้องเป็น static callback และ handler ต้องไม่ type-hint `BuilderConfig` ไม่เช่นนั้น YOOtheme 5 จะเกิด circular reference หรือ memory exhausted

## 5. Dynamic Content Sources

plugin เพิ่ม sources เหล่านี้ให้ YOOtheme

Page sources:

```text
FLEXIContent Item
FLEXIContent Category
FLEXIContent Items
```

Custom sources:

```text
Custom FLEXIContent Item
Custom FLEXIContent Items
Custom FLEXIContent Category
Custom FLEXIContent Categories
```

category source ใช้ YOOtheme `Category` object type เดิม ส่วน item source ใช้ YOOtheme `Article` object type เดิมเพื่อ compatibility กับ field มาตรฐานของ YOOtheme

## 6. Custom Field Handling

FLEXIContent custom fields ถูกโหลดจาก:

```sql
#__flexicontent_fields
```

เงื่อนไข:

```text
published = 1
iscore = 0
```

field values ถูกอ่านจาก:

```sql
#__flexicontent_fields_item_relations
```

file/media metadata ถูกอ่านจาก:

```sql
#__flexicontent_files
```

field ที่รองรับ fallback แล้ว:

```text
image
file
mediafile
sharedmedia
weblink
relation
addressint
```

หลักคิดของ resolver:

- image ใช้ public thumbnail เช่น `l_filename.png` แทน `original/filename.png` เพราะ original folder มักถูก `.htaccess` block
- file ใช้ FLEXIContent download route เพราะ `components/com_flexicontent/uploads` ถูก block โดย `.htaccess`
- mediafile ใช้ direct media path ถ้า public ได้ เช่น `components/com_flexicontent/medias/file.mp4`
- sharedmedia คืน `embed_url`, `url` หรือ `thumb`
- weblink คืน `link` หรือ URL ใน serialized value
- relation แปลง item id เป็น article title
- addressint คืน `addr_display`

## 7. Known Pitfalls

### YOOtheme memory exhausted

ถ้าเจอ error ประมาณนี้:

```text
Allowed memory size exhausted
Circular reference detected
YOOtheme\Builder\Listener\LoadBuilderData => ...
```

ให้เช็คก่อนว่า installer patch ยังอยู่หรือไม่ โดยเฉพาะหลังอัปเดต YOOtheme Pro

แนวทางแก้เร็ว:

1. reinstall plugin zip version ล่าสุด
2. ล้าง YOOtheme schema cache
3. ปิดและเปิด YOOtheme Customizer ใหม่

### Field มีให้เลือกแต่ไม่แสดง

ให้เช็คตามนี้:

1. source ต้องเป็น item source ไม่ใช่ category source ถ้าจะ map FLEXIContent item fields
2. field มี value จริงใน `#__flexicontent_fields_item_relations`
3. field type นั้นมี fallback resolver แล้วหรือยัง
4. URL ที่คืนต้องได้ HTTP 200 ไม่ใช่ 403

ตัวอย่างปัญหาที่เจอแล้ว:

```text
images/stories/flexicontent/.../original/file.png => 403
components/com_flexicontent/uploads/file.png => 403
```

จึงต้องใช้:

```text
images/stories/flexicontent/.../l_file.png
index.php?option=com_flexicontent&task=download&id=FILE_ID&cid=ITEM_ID&fid=FIELD_ID&method=view
```

### YOOtheme schema ไม่อัปเดต

ลบ cache:

```bash
rm -f /Users/pisan/Sites/joomla54/templates/yootheme/cache/schema-*.gql
```

แล้วปิด/เปิด Customizer ใหม่

## 8. Development Workflow

เข้า repo:

```bash
cd /Users/pisan/Sites/joomla54/installers/plg_system_yoothemeflexicontent
```

เช็คสถานะ:

```bash
git status --short --branch
```

แก้ไฟล์ใน:

```text
packages/builder-source-flexicontent
```

แล้ว sync ไป active package:

```bash
rsync -a --delete \
  /Users/pisan/Sites/joomla54/installers/plg_system_yoothemeflexicontent/packages/builder-source-flexicontent/ \
  /Users/pisan/Sites/joomla54/templates/yootheme/packages/builder-source-flexicontent/
```

ล้าง schema cache:

```bash
rm -f /Users/pisan/Sites/joomla54/templates/yootheme/cache/schema-*.gql
```

## 9. Test Commands

PHP syntax:

```bash
/Applications/MAMP/bin/php/php8.3.30/bin/php -l yoothemeflexicontent.php
/Applications/MAMP/bin/php/php8.3.30/bin/php -l script.php
find packages/builder-source-flexicontent -name '*.php' -print -exec /Applications/MAMP/bin/php/php8.3.30/bin/php -l {} \;
```

manifest XML:

```bash
xmllint --noout yoothemeflexicontent.xml
```

schema smoke test:

```bash
curl -sk 'https://joomla54/administrator/index.php?option=com_ajax&templateStyle=12&p=%2Fbuilder%2Fschema&format=json' -o /tmp/builder_schema.json
```

ตรวจคำสำคัญใน schema:

```bash
grep -oF 'FLEXIContent Fields' /tmp/builder_schema.json | wc -l
grep -oF 'test_file_url' /tmp/builder_schema.json | wc -l
grep -oF 'test_mediafile_url' /tmp/builder_schema.json | wc -l
grep -oF 'Allowed memory' /tmp/builder_schema.json | wc -l
```

ทดสอบ URL ที่ resolver ควรคืน:

```bash
curl -skI 'https://joomla54/images/stories/flexicontent/item_32_field_40/l_2026-04-17_16.08.56.png'
curl -skI 'https://joomla54/index.php?option=com_flexicontent&task=download&id=1&cid=32&fid=41&method=view'
curl -skI 'https://joomla54/components/com_flexicontent/medias/untitled-video--3--8.mp4'
```

expected:

```text
HTTP/1.1 200 OK
```

## 10. Build Package

update version ใน:

```text
yoothemeflexicontent.xml
README.md
CHANGELOG.md
docs/USER_GUIDE.md
docs/DEVELOPER_NOTES.md
docs/CONTINUATION_GUIDE.md
```

build zip:

```bash
cd /Users/pisan/Sites/joomla54/installers/plg_system_yoothemeflexicontent
zip -qr ../dist/plg_system_yoothemeflexicontent-2.0.6.zip . -x '.git/*' -x '.DS_Store'
```

ติดตั้ง zip ผ่าน Joomla Administrator:

```text
System > Install > Extensions > Upload Package File
```

หลังติดตั้ง:

1. ปิด YOOtheme Customizer
2. ล้าง cache ถ้าจำเป็น
3. เปิด Customizer ใหม่
4. ทดสอบ Dynamic Content และ Template Assignment

## 11. Git And Release Workflow

commit:

```bash
git add .
git commit -m "Describe the change"
git push origin main
```

create release:

```bash
gh release create v2.0.6 \
  /Users/pisan/Sites/joomla54/installers/dist/plg_system_yoothemeflexicontent-2.0.6.zip \
  --repo lungkao/plg_system_yoothemeflexicontent \
  --target main \
  --title "v2.0.6" \
  --notes "Release notes here"
```

ตรวจ release:

```bash
gh release view v2.0.6 --repo lungkao/plg_system_yoothemeflexicontent
```

## 12. Suggested Next Work

รายการที่ควรทำต่อถ้ามีเวลา:

1. เพิ่ม field type fallback เพิ่มเติม เช่น select, checkbox, radio, date, textarea, gallery หรือ field custom เฉพาะของเว็บ
2. เพิ่ม GraphQL object type สำหรับ file/media แทนคืน string อย่างเดียว เช่น URL, title, filename, extension, size
3. เพิ่ม automated smoke test สำหรับ resolver โดยอ่าน value จริงจาก database
4. เพิ่ม admin debug page หรือ CLI command ตรวจว่า YOOtheme patch ยังอยู่หลังอัปเดต theme
5. แยก active package sync เป็น command ชัดเจน เพื่อไม่ต้องแก้สองที่ด้วยมือ

## 13. Quick Mental Model

ถ้าจะ debug ให้คิดเป็นลำดับนี้:

```text
YOOtheme UI เห็น source หรือไม่
-> schema มี field หรือไม่
-> source resolver คืน item/category ถูกตัวหรือไม่
-> field resolver อ่าน value ได้หรือไม่
-> field type ต้อง decode serialized/json/id หรือไม่
-> URL/text ที่คืน browser ใช้ได้จริงหรือไม่
```

ถ้า UI เห็น field แต่หน้าเว็บไม่แสดง ให้เริ่มจาก resolver และ HTTP status ของ URL ไม่ใช่ schema


# YOOtheme FLEXIContent Source

Joomla system plugin สำหรับเพิ่ม FLEXIContent Dynamic Content และ Template Assignment ให้ YOOtheme Pro 5.

## รองรับ

- Joomla 5.x
- YOOtheme Pro 5.x
- FLEXIContent ที่ใช้ category จาก `#__categories`

## สิ่งที่เพิ่มให้ YOOtheme

Dynamic Content sources:

- Page: `FLEXIContent Item`
- Page: `FLEXIContent Category`
- Custom: `Custom FLEXIContent Item`
- Custom: `Custom FLEXIContent Category`
- Custom: `Custom FLEXIContent Categories`

FLEXIContent custom fields:

- Item fields are available under `FLEXIContent Fields` when the source is `FLEXIContent Item`, `Custom FLEXIContent Item`, or a FLEXIContent items list.
- Image, file, mediafile and sharedmedia fields also expose a clean `URL` field for YOOtheme Image, Video and link mappings.
- Complex fields such as relation, weblink and address have fallback text output when FLEXIContent's renderer does not return simple display text.

Template Assignment:

- `FLEXIContent Item`
- `FLEXIContent Category`

## ติดตั้ง

ติดตั้งไฟล์ zip ผ่าน Joomla Administrator:

```text
System > Install > Extensions > Upload Package File
```

ไฟล์ build ปัจจุบันอยู่ที่:

```text
installers/dist/plg_system_yoothemeflexicontent-2.0.5.zip
```

หลังติดตั้ง ให้ปิดและเปิด YOOtheme Customizer ใหม่ เพื่อให้ schema และ builder config โหลดใหม่

## วิธีใช้งานเร็ว

1. สร้างเมนู FLEXIContent category หรือ item
2. เปิด YOOtheme Customizer
3. ไปที่ Templates
4. สร้าง template ใหม่
5. เลือก assignment เป็น `FLEXIContent Category` หรือ `FLEXIContent Item`
6. ใน Builder เลือก Dynamic Content source ที่ต้องการ

ดูคู่มือเต็มได้ที่ [docs/USER_GUIDE.md](docs/USER_GUIDE.md)

## ดูแลต่อ

ดูรายละเอียด architecture, patch ที่ installer ทำกับ YOOtheme และ troubleshooting ได้ที่ [docs/DEVELOPER_NOTES.md](docs/DEVELOPER_NOTES.md)

ถ้าจะกลับมาพัฒนาต่อหรือส่งต่อให้คนอื่นอ่าน ให้เริ่มจาก [docs/CONTINUATION_GUIDE.md](docs/CONTINUATION_GUIDE.md)

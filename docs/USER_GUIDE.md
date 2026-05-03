# คู่มือใช้งาน YOOtheme FLEXIContent Source

## 1. เป้าหมาย

ปลั๊กอินนี้ทำให้ YOOtheme Pro ใช้ข้อมูลจาก FLEXIContent ได้ใกล้เคียงกับ `com_content` ทั้งหน้า item, category และ custom source.

## 2. การติดตั้ง

1. เข้า Joomla Administrator
2. ไปที่ `System > Install > Extensions`
3. อัปโหลดไฟล์ `plg_system_yoothemeflexicontent-2.0.4.zip`
4. เมื่อติดตั้งเสร็จ ระบบจะเปิด plugin ให้อัตโนมัติ
5. ถ้า YOOtheme Customizer เปิดค้างอยู่ ให้ปิดแล้วเปิดใหม่

## 3. การสร้าง Template สำหรับ FLEXIContent Category

1. สร้างเมนู FLEXIContent category ใน Joomla ก่อน
2. เปิด YOOtheme Customizer
3. ไปที่ `Templates`
4. กดสร้าง template ใหม่
5. เลือก type เป็น `FLEXIContent Category`
6. เลือก category ที่ต้องการ หรือปล่อยว่างถ้าต้องการใช้กับทุก FLEXIContent category
7. กด Save

เมื่อเข้าเมนู FLEXIContent category จริง YOOtheme จะใช้ category ปัจจุบันเป็น context ของหน้า

## 4. การใช้ Dynamic Content

### Page source

ใช้เมื่อหน้าเว็บอยู่บน FLEXIContent view จริง

- `FLEXIContent Item`: ดึง item ปัจจุบัน
- `FLEXIContent Category`: ดึง category ปัจจุบัน

เหมาะกับ title, description, image, link และ field ของหน้าที่กำลังเปิดอยู่

Custom fields ของ FLEXIContent จะแสดงใต้ field ชื่อ `FLEXIContent Fields` ของ item source เช่น `รูปภาพ`, `รูปภาพ URL`, `Test File URL`, `Test MediaFile URL`

### Custom source

ใช้เมื่อต้องการเลือกข้อมูลเอง ไม่อิงหน้า current page

- `Custom FLEXIContent Item`: เลือก item เดี่ยว
- `Custom FLEXIContent Category`: เลือก category เดี่ยว
- `Custom FLEXIContent Categories`: เลือก parent category แล้ว map child categories เป็น list

## 5. แสดงรายการบทความใน Category

ใน YOOtheme ให้ใช้ element ที่รองรับ multiple items เช่น Grid, List, Gallery หรือ Slider แล้วเลือก multiple items source เป็น FLEXIContent items/category source ที่ปลั๊กอินเพิ่มให้

แนวทางแนะนำ:

1. ใช้ `Grid`
2. ตั้ง Dynamic Content ของ grid item เป็น item source
3. map `Title`, `Content`, `Image`, `Link`
4. ถ้าต้องการแบ่งหน้า ให้ใช้ Pagination element ของ YOOtheme ร่วมกับ source ที่มาจากหน้า category จริง

## 6. รูปภาพไม่แสดง

ตรวจตามลำดับนี้:

1. field รูปภาพของ FLEXIContent มีค่า path จริง
2. path อยู่ในโฟลเดอร์ที่ Joomla/YOOtheme อ่านได้ เช่น `images`
3. เลือก dynamic field ที่เป็น `รูปภาพ URL` หรือ `รูปภาพ Image URL` ไม่ใช่ label หรือ raw object
4. ใน Image element ให้ map ที่ช่อง `Image`
5. ถ้าใช้ custom field ซับซ้อน ให้ทดสอบด้วย Title ก่อน เพื่อยืนยัน source ถูกต้อง

## 7. หลังอัปเดต YOOtheme

ให้ติดตั้ง zip ปลั๊กอินนี้ซ้ำหนึ่งครั้ง เพื่อ sync package และ patch compatibility กลับเข้า `templates/yootheme/packages`

## 8. วิธีแก้เบื้องต้นเมื่อ Customizer ไม่เห็น FLEXIContent

1. Reinstall zip
2. Clear Joomla cache
3. ลบ schema cache ที่ `templates/yootheme/cache/schema-*.gql`
4. ปิดและเปิด YOOtheme Customizer ใหม่

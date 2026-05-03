# Developer Notes

## Architecture

ปลั๊กอินนี้เป็น Joomla system plugin ที่ sync package ชื่อ `builder-source-flexicontent` เข้า YOOtheme:

```text
templates/yootheme/packages/builder-source-flexicontent
```

package นี้ register:

- GraphQL source types ผ่าน event `source.init`
- Template assignment ผ่าน `YOOtheme\Builder\BuilderConfig`
- Template matching สำหรับ `com_flexicontent` item/category
- Template preview URL สำหรับ YOOtheme Customizer

## Important YOOtheme 5 compatibility fixes

YOOtheme Pro 5 สร้าง `BuilderConfig` ระหว่างโหลด customizer ถ้า listener ของ `BuilderConfig` ใช้ instance callback แบบ `@handle` และ method type-hint `BuilderConfig` จะทำให้ container พยายาม resolve `BuilderConfig` ซ้ำจนเกิด circular dependency หรือ memory exhausted

ดังนั้น listener ของ FLEXIContent ต้องใช้ static callback:

```php
\YOOtheme\Builder\BuilderConfig::class => [
    Listener\LoadBuilderConfig::class => ['handle', -10],
],
```

และ handler ต้องไม่ type-hint `BuilderConfig`:

```php
public static function handle($config): void
```

## Installer patches

`script.php` ทำงานหลัง install/upgrade เพื่อ:

- sync `builder-source-flexicontent` ไปที่ YOOtheme package directory
- sync `builder-elements.cache.php` ไปที่ `Builder/elements.cache.php`
- patch `BuilderConfig` ให้ไม่ inject `Builder`
- patch `builder-source` service ให้ไม่ init source ซ้ำ
- patch Joomla source config listener ให้เป็น static callback
- clear YOOtheme schema cache
- enable plugin และ order ก่อน YOOtheme system plugin

## Build package

จาก Joomla root:

```bash
cd installers/plg_system_yoothemeflexicontent
zip -qr ../dist/plg_system_yoothemeflexicontent-2.0.3.zip . -x '.git/*'
```

## Test checklist

```bash
/Applications/MAMP/bin/php/php8.3.30/bin/php -l yoothemeflexicontent.php
/Applications/MAMP/bin/php/php8.3.30/bin/php -l script.php
find packages/builder-source-flexicontent -name '*.php' -print -exec /Applications/MAMP/bin/php/php8.3.30/bin/php -l {} \;
```

YOOtheme Customizer smoke test:

```text
https://joomla54/administrator/index.php?option=com_ajax&templateStyle=12&p=customizer&format=html
```

Expected:

- HTTP 200
- page title `Website Builder - joomla54`
- no `Allowed memory exhausted`
- no circular reference
- `templateOptions` contains `FLEXIContent Item` and `FLEXIContent Category`

## Known constraints

- FLEXIContent category source อ่านจาก `#__categories`
- category extension อ่านจาก `com_flexicontent.flexi_cat_extension`
- ถ้าไม่มี config จะ fallback เป็น `com_content`
- หลังอัปเดต YOOtheme ควร reinstall plugin เพื่อ sync patch อีกครั้ง

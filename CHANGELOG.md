# Changelog

## 2.0.3 - 2026-05-03

- Fixed unresolved `${builder.*}` placeholders in cached element configs.
- Resolved imported YOOtheme builder config so elements can be added from the Customizer library without JavaScript errors.
- Fixed remaining `${url:*}` placeholders that could produce `icon.svg%7D` and `iconSmall.svg%7D` 404 requests.

## 2.0.2 - 2026-05-03

- Fixed broken YOOtheme element icons in the Customizer library by normalizing cached element icon paths to real site URLs.
- Kept the lightweight BuilderConfig memory patch compatible with cached element data.

## 2.0.1 - 2026-05-02

- Added FLEXIContent category template assignment for YOOtheme Pro 5.
- Added FLEXIContent category options for BuilderConfig.
- Fixed YOOtheme 5 circular `BuilderConfig` resolution by using static config listeners.
- Fixed Customizer memory exhaustion caused by recursive source/builder config loading.
- Added installer sync for YOOtheme package and builder element cache.
- Added user and developer documentation.

Template Simple Dashboard with Mustache - PHP
============

Plantilla simple para la construccion de Dashboards bajo PHP implementando Mustache como procesador de templates para simplificar la generacion de codigo frontend.

Documentación oficial:

- [@bobthecow/mustache.php](https://github.com/bobthecow/mustache.php) para Mustache en PHP.
- [Template Mazer HTML](https://zuramai.github.io/mazer/) como plantilla de dashboard.

## 🚀 Project Structure

Dentro de este proyecto verás la siguiente estructura de carpetas y archivos:

```text
/
├── assets/
│   └── /* files for template HTML */
├── js/
│   ├── base/
│   │   └── script_base.js
│   └── you_module/
│       └── /* you files js */
├── lib/
│   └── Mustache/
│       └── /* files core Mustache lib */
├── templates/
│   ├── partials/
│   │   └── /* structure base modules HTML - Mustache */
│   └── /* structure base HTML - Mustache */
├── views/
│   └── /* you files view */
└── config.php
└── index.php

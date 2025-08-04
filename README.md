# Al-Buldani Online

Al-Buldani Online adalah website artikel dari Pondok Pesantren Al-Buldani asal Pamekasan, Madura.

**Note**: Project ini menggunakan konsep MVC (Model, View, Controller).

## Clone Repository

Pastikan di komputer anda sudah terinstall `Git` dan `Composer`.

1. Buka terminal/powershell, lalu ketik perintah:
    ```bash
    git clone https://github.com/evanalifian/al-buldani-onliine.git
    ```
2. Ketik perintah di bawah untuk menginstall dependency:
    ```bash
    composer update
    ```
3. Selanjutnya ketik perintah di bawah untuk men-generate file `autoload.php:
    ```bash
    composer dump-autoload
    ```

## Folder Structer

```bash
al-buldani_online
|   .gitignore
|   composer.json
|   composer.lock
|   README.md
|
+---app
|   +---Controllers
|   |       HomeController.php
|   |
|   +---Core
|   |       Router.php
|   |       View.php
|   |
|   \---Views
|       |   404.php
|       |
|       +---home
|       |       index.php
|       |
|       \---templates
|               footer.php
|               header.php
|
+---public
|   |   .htaccess
|   |   index.php
|   |
|   \---assets
\---vendor
    |   autoload.php
    |
    \---composer
            autoload_classmap.php
            autoload_namespaces.php
            autoload_psr4.php
            autoload_real.php
            autoload_static.php
            ClassLoader.php
            installed.json
            installed.php
            InstalledVersions.php
            LICENSE
```
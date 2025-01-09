<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



## Pasos de Instalación

Para configurar la aplicación Laravel, sigue estos pasos:

1. **Instalar dependencias con Composer**
   ```bash
   composer install
   ```

2. **Generar la clave de aplicación**
   ```bash
   php artisan key:generate
   ```

3. **Configurar la conexión a la base de datos**
    - Actualiza tu archivo `.env` con las credenciales de tu base de datos:
      ```
      DB_CONNECTION=sqlsrv
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=nombre_de_tu_base_de_datos
      DB_USERNAME=tu_usuario
      DB_PASSWORD=tu_contraseña
      ```

4. **Ejecutar las migraciones y seeder**
   ```bash
   php artisan migrate --seed
   ```


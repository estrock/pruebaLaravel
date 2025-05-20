# Proyecto Laravel de Tareas Prueba api

Este es un proyecto Laravel simple que gestiona una lista de tareas a través de una API REST. Permite crear, leer, actualizar y eliminar tareas.

## Requisitos Previos

Asegúrate de tener instalado lo siguiente en tu entorno de desarrollo:

*   PHP >= 8.1 (o la versión requerida por tu Laravel)
*   Composer
*   Node.js y npm (si planeas usar assets frontend, aunque para una API pura podría no ser estrictamente necesario)
*   Un servidor de base de datos (MySQL, PostgreSQL, SQLite, etc.)
*   Git

## Instalación y Configuración

Sigue estos pasos para poner en marcha el proyecto en tu entorno local:

1.  **Clonar el repositorio:**
    ```bash
    git clone (https://github.com/estrock/pruebaLaravel.git)
    cd pruebaLaravel
    ```

2.  **Instalar dependencias de PHP:**
    ```bash
    composer install
    ```

3.  **Configurar el archivo de entorno:**
    Copia el archivo `.env.example` a `.env`:
    ```bash
    cp .env.example .env
    ```
    Luego, genera la clave de la aplicación:
    ```bash
    php artisan key:generate
    ```

4.  **Configurar la base de datos en `.env`:**
    El archivo de .env ya se encuentra denntro del repositorio, se debe asegurar correr la version de la bd con los siguientes parametros:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
    **Importante:** Asegúrate de que la base de datos (`laravel`) exista en tu servidor de base de datos. Si no existe, créala.

5.  **Ejecutar las migraciones:**
    Esto creará las tablas necesarias en tu base de datos.
    ```bash
    php artisan migrate
    ```
    Opcionalmente, si tienes seeders para datos iniciales:
    ```bash
    php artisan db:seed
    ```


## Iniciar el Servidor de Desarrollo

Una vez configurado, puedes iniciar el servidor de desarrollo de Laravel:

```bash
php artisan serve

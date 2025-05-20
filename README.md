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
    git clone https://URL_DE_TU_REPOSITORIO.git
    cd nombre-del-directorio-del-proyecto
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
    Abre el archivo `.env` y configura las variables de conexión a tu base de datos:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombre_de_tu_base_de_datos
    DB_USERNAME=tu_usuario_de_bd
    DB_PASSWORD=tu_contraseña_de_bd
    ```
    **Importante:** Asegúrate de que la base de datos (`nombre_de_tu_base_de_datos`) exista en tu servidor de base de datos. Si no existe, créala.

5.  **Ejecutar las migraciones:**
    Esto creará las tablas necesarias en tu base de datos.
    ```bash
    php artisan migrate
    ```
    Opcionalmente, si tienes seeders para datos iniciales:
    ```bash
    php artisan db:seed
    ```

6.  **(Opcional) Instalar dependencias de Node.js y compilar assets:**
    Si tu proyecto tiene assets frontend gestionados con Vite o Mix:
    ```bash
    npm install
    npm run dev # o npm run build para producción
    ```

## Iniciar el Servidor de Desarrollo

Una vez configurado, puedes iniciar el servidor de desarrollo de Laravel:

```bash
php artisan serve

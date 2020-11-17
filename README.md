# Proyecto Establecimientos en Laravel 8

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Clonar el Repositorio de git

```bash
git clone https://github.com/darkedg/establecimientos.git
```

## Moverse al Directorio del Proyecto

```bash
cd establecimientos
```

## Descargar Dependencias del Proyecto

Como las dependencias del proyecto las maneja **composer** debemos ejecutar el comando:

```bash
composer install
```

Se usa la libreria de Vue.js, tambien ejecutamos las Dependencias de **npm** con el siguiente comando:

```bash
npm install
```

## Configurar Entorno

La configuración del entorno se hace en el archivo **.env** pero esé archivo no se puede versionar según las restricciones del archivo **.gitignore**, igualmente en el proyecto hay un archivo de ejemplo  **.env.example** debemos copiarlo con el siguiente comando:

```bash
cp .env.example .env
```

Luego es necesario modificar los valores de las variables de entorno para adecuar la configuración a nuestro entorno de desarrollo, por ejemplo los parámetros de conexión a la base de datos.

## Generar Clave de Seguridad de la Aplicación

```bash
php artisan key:generate
```

## Migrar la Base de Datos

El proyecto ya tiene los modelos, migraciones y seeders generados. Entonces lo único que nos hace falta es ejecutar la migración y ejecutar el siguiente comando:

```bash
php artisan migrate:fresh --seed
```

- **migrate:fresh**: Ejecuta la migración **eliminando** todas las tablas y volviendo a generarlas.
- **--seed**: Ejecuta los Seeders habilitados


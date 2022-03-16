# CeliaCity
_CMS que permite crear una página web para recoger los diferentes puntos de un pueblo_



## Comenzando 🚀

### Pre-requisitos 📋

_Que cosas necesitas para instalar el software y como instalarlas_

```
php >=8.1
mysql o mariadb
composer
...
```

### Instalación 🔧
_Instalación paso a paso_

```
git clone https://github.com/abdell1999/CeliaCity.git
cd CeliaCity
composer install
cp .env.example .env //(Establecemos en .env nuestras credenciales de bd)
php artisan key:generate

```

_Una forma más simplificada es usar docker. Tendriamos que meter los archivos que hay [aquí](https://github.com/abdell1999/laravel-docker)
en la carpeta donde hemos clonado el proyecto, asi nos ahorramos configurar la base de datos e instalar php._

```
git clone https://github.com/abdell1999/CeliaCity.git
cd CeliaCity
-docker compose up -d

```

 
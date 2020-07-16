# ALGODEPRUEBA.TK

### Un lugar de programas y programadores.
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
</p>


## Como correr en local
#### Requirements:
    
Nodejs >=11.15.1

composer

mysql server

git

------------------------------

git clone https://github.com/gustavovaler/algodeprueba.git



#### Desde la carpeta del proyecto una vez clonado

composer install

npm install

#### archivo env laravel

Renombrar el archivo  .env.example  por  -->   .env

y modificar :

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306 (si tienes mariaDB y rechaza la conexion cambiar a 3307)
DB_DATABASE=tu_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_password

#### Iniciar la base de datos.

php artisan migrate

php artisan serve

-->> localhost:8000



## Como colaborar

Si creas un layout en html y css hacer una carpeta con tu nombre y archivos dentro de  la carpeta Colaboraciones  y hacer el Pull Request



## Security Vulnerabilities


## License
[MIT license](https://opensource.org/licenses/MIT).

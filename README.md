# Para la instalación de la parte del Backend primero abriremos la carpeta donde vamos a clonar el repositorio y abrimos el cmd.
# Una vez adentro ejecutaremos el siguiente comando, el cual añadirá todos los archivos del repositorio

git clone https://github.com/dannywilches/backend-test-choho

# Luego navegaremos hasta la carpeta creada al realizar la clonación y abriremos el archivo .env
# Allí debemos configurar el host y el puerto en el caso de ser distinto al localhost y al puerto 3306 respectivamente.
# También debemos indicar el user y password para la conexión a MySQL y en el motor de BD creamos una base de datos llamada "test_choho"

# Ya configurada la base de datos y lo demás procederemos a ejecutar los siguientes comando en el orden que van
# Este comando instalará todas las dependencias de la aplicación
composer install
# Luego los siguientes los realizaran las migraciones de las tablas y creará los datos de prueba
php artisan migrate:fresh
php artisan db:seed
php artisan optimize:clear

# Y ya para finalizar y poner a ejecutar el servidor ejecutamos
php artisan serve

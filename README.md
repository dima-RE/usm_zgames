### Comandos de uso comun

## Para desplegar con docker
``
    docker-compose build
    docker-compose up -d
``
## Para desplegar con xampp importante que se respete la estructura y se guarde
## todo en htdocs

## Para crear un proyecto de cero:
``
  composer create-project laravel/laravel  nombreApp
``

## Para instalar (recien se descarga de github, cuando el proyecto ya existe):
``
    composer install
``

### Para Laravel:

## Para crear controladores (dentro del contenedor):

``
    php artisan make:controller NombreController
``
## En los controladores metemos la logica de la aplicacion (el acceso a base de datos, etc)

### Base de datos

## para actualizar la base de datos

``
    php artisan migrate
``

## Para crear una migracion de una tabla
``
    php artisan make:migration nombre_da_lo_mismo --create=nombre_tabla_siempre_en_plural
``

## Para crear un modelo (un modelo es un archivo que permite efectuar operaciones
## con la base de datos)
``
    php artisan make:model Nombre
``
## Importante siempre el nombre en SINGULAR

## Entorno de prueba en PHP
```
    php artisan tinker
    
    Example: route + command;
```




## funciones window =
    window = referencias de la ventana
    windows.alert("texto") = alerta en ventana emergente
    window.location = busca y entrega caracteristica del servidor
    window.location.search = URL
    window.location.hostname = Nombre del host
    window.location.hred = URL completa. Tambien cambia entre paginas dentro de la web.
    window.open("texto", "_blank") = abre una nueva pestanna

##############################################################################
################################ CLASE DEL 22 ################################
##############################################################################

...
 ## MIGRACION DE UNA TABLA
    buscar la tabla juegos y migrar

crear tabla juegos ....
    Schema create ...
        $table->id();
#        ///1. - definir los campos de  la tabla juegos
#       // $table->tipoDato("nombre_dato")->primary(); se usa para crear la clave primaria.
#       //https://laravel.com/docs/8.x/migrations#creating-indexes
        table->string("nombre",100)
        table->string("descripcion",200)
        table->tinyInteger("apto_ninnos")->default(0)
        table->integer("precio",)->unsigned()
        table->date("fecha_lanzamiento");

#        //Eloquent = aparecen los tipos de datos en https://laravel.com/docs/8.x/migrations#available-column-types
#        //migrar un Boolean de un MySQL a un Oracle  se cae el programa
#        //tinyInteger es más fácil de migrar
#        // preferible usar lo más general que lo específico. (ejemplo, ni polygon ni boolean ni nada binario, pero varchar si)
#        //tambien existen los modificadores, como default o unsigned

#        //2. agregar la columna foranea
#        //copia y pega de la otra tabla
#        //las claves primarias de laravel (autoincrementales) por defecto sson bigInteger y unsigned
        table-biginteger("consolaid)-unsigned()

#        //3. agregar la relacion
#        //alter table add constraint foreign key blah bla
        tbale-foreign(consolaif)-references("id")-on(consolas)-onDelete(cascade)
        //ondelete(restrict) es el default del cascade, no se puede borrar si tiene elementos asociados

        table->timestamps();

        ....
## Definición de una tabla en español plural
```
    protected $table= "nombre_en_plural"
```
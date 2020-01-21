# FRAMEWORK - MANUAL

Este sistema está desarrollado con un framework desarrollado por mi autoría. Muchas de las funcionalidades son inspiradas en las funcionales del framework LARAVEL por lo que si ya estás familiarizado con ese framework te será más facil trabajar con este.

## Programación orientada a objetos

El framework está pensado para trabajar bajo el paradigma de programación orientada a objetos (POO) por lo que es importante entender cómo es que funciona la POO para poder aproverchar o mejorar el framework.

## Patrón Front controller

El framewor se basa en el patrón de diseño front controller que dice que lo óptimo para los sistemas Web es que solo tengan una entrada a la aplicación. Esa entrada casi siempre es el 'index.php'. Es ahí donde se cargan todos los recursos y controladores necesarios para que el sistema esté disponible.

La principal ventaja de este patron de diseño, es que ayuda en la administración de la urls internas del software, logrando así a que todas las rutas deban comenzar desde la dirección raiz del proyecto, ejem. '/'.

## Patrón MVC

Como en muchos otros frameworks, este se basa en el patrón de diseño MVC que separa los proyectos de software en 3 capas.

    Modelo - Capa de base de datos.
    Vista - Capa de precentación. Donde se lleva a cabo todo lo visual y que el usuario visualiza desde su navegador ejemp. HTML, CSS y JavaScript.
    Controlador - Capa de negocio, es donde se realiza la mayor parte del trabajo.

Esta separación es de suma importancia debido a que evita el famoso código espagetti que es cuando se mezcla diferentes tipos de lenguajes de programación y código que no siempre es necesario. Este tipo de patrón permite abstaer el código dependiendo su funcionalidad por lo que facilita la programación y el mantenimiento del software.

## Uso del Framework

Para poder usar este framwork es necesario primero configurarlo de acuerdo al proyecto a realizar. Para realizar esta configuración es necesario acceder a la carpeta 'config/' de la raiz. Los archivos principales de configuracion son 3. 'database.php', 'global.php' y 'views.php'.

    database.php - Contiene toda la configuración relacionada a la base de datos del software. El framework utiliza la librería de PHP llamada PDO por lo que es recomendable conocer sobre las opciones de configuración de PDO.

    global.php - Contiene toda la configuración de básica de la aplicación. Este archivo es lo primero que se debe configurar puesto que si no se hace lo mas provable es que el framwork no funcione ya que son la rutas de la aplicación.

    views.php - Contiene una constante que apunta a la carpeta de las vistas HTML. Si desea cambiar la ruta de las vistas se debe actualizar este archivo. Esta constante es usable dentro de las vistas con el motor de plantillas que utiliza el framwork. 

### Modelo

Los modelos se encuentran dentro de la carpeta 'App/Models' y para generar uno, solo basta con crear un archivo con el nombre del modelo y dentro del archivo una clase que extienda del modelo base 'Model.php'. En caso de querer crear el modelo de forma manual, se le debe de escribir su nombre de espacio que tiene que hacer referencia a la carpeta en la que está alojado el modelo ejem. 'App\Models'.

Importante! El nombre de la clase debe ser idéntico al nombre del archivo y es sensible a mayusculas.

El modelo es quien lleva el objeto de conexión a la base de datos por lo que el modelo base es quien instancia esta clase. Para ver todas las funciones que realiza la clase 'Conexion' se debe acceder al archivo que se encuentra el la carpeta 'App/Helpers/Conexion.php'. Es un archivo con la clase documentada y que utiliza el patrón de diseño Singleton para evitar problemas de rendimiento. Si quieres editar este archivo debes entender el patrón Singleton y la extención de PHP PDO para no causar fallas de rendimiento o seguridad.

Todos los métodos de la clase 'Conexion' ya estan listos para usarse en los controladores a través de la variable '$con'.

### Vista

Las vistas se encuentran por defecto en la carpeta 'public/views/' y trabajan bajo las librerías Smarty por lo que para editar el diseño sin afectar la funcionalidad, es necesario comprender Smarty. Por defecto el framework tiene cargado un template. Una herramienta muy útil de Smarty es la herencia de plantillas, por lo que puedes generar un diseño base y sobre eso diseñar las demás pantallas del software. La plantilla por defecto del framework se encuentra en la carpeta 'public/templates/default-layout.html'. Esa plantilla ya tiene cargadados pluging de front-end como lo son bootstrap 4, jquery, font-awesome y unos modales de alertas. Todos ellos se encuentran en la carpeta 'public/extra' cada uno en su respectiva carpeta.

Dentro de la carpeta 'public' se encuentra una carpeta llamada 'includes'. Esta carpeta está pensada para almacenar secciones de código HTML que pueda ser reutilizable.

### Controlador

Los controladores se encuentran en la ruta 'App/Controllers' y la forma de crearlo es casi identica a la de un controllador. Se debe crear su nombre de espacio referente a la carpeta en la que se encuentra alojado y debe extender del controlador base 'Controller.php'.

Los controladores por lo general deben retornar siempre algo. Por buenas practicas el controlador recibe una petición, la procesa, llama a un modelo en caso de necesitar acceder a la base de datos y devuelve una vista. El modo en que un controlador recibe una petición HTTP es mediante una URL que se explicará a continuación.

### Sistema de rutas

De forma similar a LARAVEL este framework tiene un sistema de rutas que permite asociar una URL específica a un cotrolador y a su método.

Para crear una ruta solo basta con programar el archivo que se encuentra en la carpeta 'routes/web.php'. Este archivo almacena todas la rutas a las cuales se puede acceder desde el navegador.

Para crear una ruta solo es necesario ejecutar el método 'add' del objeto '$route', que recibe dos parametros. El primero debe ser un string con la ruta a crear ejem. '/home' sin variable o '/home/:var' con variable. El segundo parámetro puede ser un string o un callback.

Si es un collback lo que hará será ejecutar el collback una ves ejecutada esa URL.

Si por el contrario es un string, significa que va a ser referencia a un controlador y su método. Para crear esta referencia se debe seguir la siguiente sintaxis. 'NombreControlador@metodo'. De éste modo se ejecutará el método cada que se haga una petición a la URL declarada.

Para mandar variables por la URL se deben mandar en el siguiente formato. '/peticion/:variable'. De ese modo lo que recibirá por parámetro el método o callback según sea el caso, será un array asociativo con las variables que se hayan mandado ejem. '$mi_array = ['variable' => 'valor de mi variable']'. Se pueden enviar todas la variables que queramos.

Nota: Por el momento el framework solo admite variables obligatorias y no opcionales por lo que si quieres mejorar esta funcionalidad solo basta editar los archivos de rutas que se encuentran como: 'App/Core/Route.php' y 'App/Core/Router.php'.

## Permiso a carpetas

El framework está pensado en poder almacenar archivos al servidor en caso de ser necesario. Por seguridad todos esos archivos de los usuarios se guardarán en la carpeta 'uploads'. Otra carpeta que almacena informacion es la carpeta storage que es una carpeta dedicada a archivos del sistema como iconos y caches. Para limpiar la cache de Smarty por ejemplo se puede solo eliminando la carpeta 'templates_c' que se encuentra en 'storage/templates_c'.

## Plugins PHP

El framework trabaja con composer por lo que tiene plugins pre instalados como Smarty, PHPMailer, etc. Para ver todos los plugins de PHP se debe dirigir a la carpeta 'App/composer.json'.

Bueno, eso es todo lo que necesitas saber para poder utilizar este framework el cual es de uso libre. Ahora si a programar!

Por. Jesús Adame Sandoval - Licenciado en Informática.
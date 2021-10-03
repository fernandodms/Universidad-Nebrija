# Universidad-Nebrija

La base de datos utilizada ha sido MySQL. En la raíz del proyecto se encuentra el fichero 'dump_base_datos.sql', que contiene el código para la creación de las tablas y la inserción de unos cuantos datos de ejemplo, para poder chequear la aplicación.
Al tratarse de una aplicación de prueba no se ha realizado ningún tipo de control de autenticaciones, sesiones, cookies, etc.
Se ha realizado una implementación siguiendo los principios MVC. Los modelos devuelven los datos en formato json, y en la vista son decodificados para poder trabajar con ellos.

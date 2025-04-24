TODO: URL for testing in Postman

<!-- getCategoria -->
http://127.0.0.1:8000/categoria

<!-- getCategoriaById -->
http://127.0.0.1:8000/categoria/1

TODO: Solicitar datos (token CSRF) con métodos POST, PUT, PATCH, DELETE. No funciona por web.php permite solo solicitudes tipo GET. api.php permite realizar dichas solicitudes

<!-- insertCategoria -->
POST -> Body -> raw -> JSON

http://127.0.0.1:8000/api/addCategoria

{
    "cat_nombre": "Postman",
    "cat_obs": "Postman Obs"
}

<!-- updateCategoria -->
PUT -> Body -> raw -> JSON

http://127.0.0.1:8000/api/updateCategoria/4

{
    "cat_nombre": "Update Postman",
    "cat_obs": "Update Postman Obs"
}

<!-- deleteCategoria (actualiza el estado = 0, pasando de activo = 1 a no_activo = 0). Es recomendable actualizar el estado y no eliminar el registro de la base de datos -->
DELETE -> Body -> raw -> JSON

http://127.0.0.1:8000/api/deleteCategoria/4

{
    "estado": "0"
}
TODO: Para agregar un campo extra en una base de datos desde Laravel, lo más común y recomendado es usar migraciones. Aquí te explico el proceso paso a paso:

TODO: ✅ 1. Crear una nueva migración

<!-- En la terminal, dentro de tu proyecto Laravel, ejecuta: -->
    php artisan make:migration add_nombre_campo_to_nombre_tabla --table=nombre_tabla

<!-- Reemplaza:

nombre_campo por el nombre del nuevo campo.

nombre_tabla por el nombre de la tabla a la que deseas agregarlo. -->


<!-- Ejemplo: -->
    php artisan make:migration add_edad_to_users_table --table=users

TODO: ✅ 2. Editar la migración

<!-- Después de crearla, abre el archivo que se genera en database/migrations/.

Dentro del método up(), agrega algo como: -->
    Schema::table('users', function (Blueprint $table) {
        $table->integer('edad')->nullable(); // O el tipo de dato que necesites
    });

<!-- Y en el método down() (para revertir la migración): -->
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('edad');
    });

TODO: ✅ 3. Ejecutar la migración

<!-- Después de editarla, corre la migración con: -->
    php artisan migrate
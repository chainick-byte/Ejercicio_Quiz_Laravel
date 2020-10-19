<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>el nombre del documante - @yield('titulo') </title>
    <!--yield se refiere que es  una variable a la que se guarda en -->
</head>
<body>
    @section('barralateral')
        esto es un barra lateral
    @show
    <div class="container">
    @yield('contenido')
    </div>
</body>
</html>
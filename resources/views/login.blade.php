<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        <!-- Styles -->
        <style>

        </style>

        <style>

        </style>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">  
                <a  class="navbar-brand" href="/">Tienda.com</a>
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="/registro">Registro</a>   
            </div>
        </nav>
        <br>
        <h4>Inicio de sesion</h4>
            <form action="/login" method="POST" class="form-control">           
                <div> 
                    <div class="">
                        <label class="form-label" for="">Usuario:</label>
                        <input class="form-control" type="text" name="usuario" id="usuario">
                    </div>
                    <label class="form-label" for="contra">Contraseña:</label>
                    <div class="">
                        <input class="form-control" type="password" name="contra" id="contra">
                    </div>
                    <br>
                    <div class="d-grid gap-2">
                        <input type="submit" value="INICIAR SESION" class="btn btn-primary">
                    </div>
                </div>
            </form>
    </body>
</html>
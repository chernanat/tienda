@extends('nav');
<!DOCTYPE html>
<html lang="en">
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
    </head>
<body>
    <form class="form-control" action="/insertar" method="post">
        @csrf
        <div>
            <label class="form-label" for="">Nombre:</label>
            <input class="form-control" type="text" name="name">
        </div>
        <div>
            <label class="form-label" for="">Correo:</label>
            <input class="form-control" type="text" name="email">
        </div>
        <div>
            <label class="form-label" for="">Contrasena:</label>
            <input class="form-control" type="password" name="password">
        </div>
        <br>
        <div class="d-grid gap-2">
            <input class="btn btn-success" type="submit" value="Crear Usuario">
        </div>
    </form>
</body>
</html>
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
                <a  class="navbar-brand" href="">Tienda.com</a>
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="">Carrito</a>   
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="/registro">Log out</a>   
            </div>
        </nav>

        <div>
            <h1>Tienda.com</h1>
            <h2>Productos</h2>
            @foreach ($category as $category)
                <h3 >CATEGORIA: {{$category->name}}</h3>
            @endforeach
        </div>
        <div class="col-3">
            @foreach ($product as $product)
            <div class="card border-secondary mb-3" style="max-width: 20rem;">
                <div class="card-header">{{$product->name}}</div>
                <div class="card-body">
                  <h4 class="card-title">Secondary card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div>
                    <input class="btn btn-outline-success" type="button" value="AGREGAR AL CARRITO">
                </div>
            </div>
            @endforeach
        </div>
    </body>
</html>
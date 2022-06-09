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
                <a  class="navbar-brand" href="/home">Tienda.com</a>
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="">Carrito</a>   
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="/registro">Log out</a>   
            </div>
        </nav> 
        <form action="" method="" class="form-control">
            <table class="table">
                <thead>
                    <tr  class="table-active">
                        <th>NOMBRE_PRODUCTO</th>
                        <th>VALOR_UNITARIO</th>
                        <th>CANTIDAD</th>
                        <th>SUBTOTAL</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>CARRO</th>
                            <input type="hidden" name="precio" value="" id="precio">
                        <th>$</th>
                        <th><input class="form-input" type="number" name="cantidad" min="0" step="1" id="cantidad" value=""></th>
                        <th>$</th>
                        <th><a href ="" class="btn btn-danger btn-delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg></a>
                        </th>
                    </tr>
                </tbody>
            </table>
            <div class="d-grid gap-2">
                <input type="submit" value="ACTUALIZAR CARRITO" class="btn btn-outline-warning">
            </div>
        </form>
    </body>
</html>
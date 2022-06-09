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
                    <a class="navbar-brand" href="/carrito">Carrito</a>   
                </div>
                <div class="container-fluid">
                    <a class="navbar-brand" href="/registro">Log out</a>   
                </div>
            </nav>

            <div>
                <h1>Tienda.com</h1>
                <h2>Productos</h2>
            </div>
            <div class="col-3">
                @foreach ($product as $product)
                    <h3>CATEGORIA: {{ $product->category}}</h3>
                <div class="card border-secondary mb-3" style="max-width: 20rem;">
                    <h4 class="card-header">{{$product->name}}</h4>
                    <div class="card-body">
                    <h6 class="card-title">Descripcion: Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste dolorem cupiditate earum magnam ad. Ad deleniti rem, sapiente, ducimus maiores reprehenderit natus incidunt, veritatis eligendi adipisci inventore cumque voluptas nesciunt.</h6>
                    <p class="card-text">Cantidad: {{$product->quantity}}</p>
                    <p class="card-text">Precio: $ {{$product->price}}</p>
                    </div>
                    <form action="" method="post">
                        
                        <div>
                            <input class="btn btn-outline-success" type="button" value="AGREGAR AL CARRITO">
                        </div>
                    </form>
                </div>
                @endforeach
            </div>
        </body>
    </html>
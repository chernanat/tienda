<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{mix('css/app.css')}}">   
        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
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
                <a class="navbar-brand" href="/registro">Log out</a>   
            </div>
        </nav>
        <h1>Categorias</h1>
        <h2>Crear Categoria</h2>
        <form class="form" action="/insertar_categoria" method="POST">
            @csrf
            <div>
                <label class="form-label" for="">Nombre Categoria:</label>
                <input class="form-control" type="text" name="name">
            </div>
            <br>
            <div>
                <input class="btn btn-success" type="submit" value="Crear Categoria">
            </div>
        </form>
        <br>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Categoria</th>
                <th scope="col">Operaciones</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($category as $category)
            <tr class="table-primary">
                <td>{{ $category->name }}</td>
                <td> <a href="/editar_categoria/{{$category->id}}" class="btn btn-secondary">Modificar</a>
                    <a href ="/eliminar_categoria/{{$category->id}}" class="btn btn-danger btn-delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg></a>
                </td>
            @endforeach
            </tr>
            </tbody>
          </table>
        <h1>Productos</h1>
        <h2>Crear Producto</h2>
        <form class="form" action="/insertar_producto" method="post">
            @csrf
            <div>
                <label class="form-label" for="">Nombre del Producto:</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div>
                <label class="form-label" for="">Categoria:</label>
                <select class="form-control" name="category">
                    <option value="">Escoge la categoria:</option>
                    @foreach ($category2 as $category2)
                        <option value="{{ $category2->name }}">{{ $category2->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="form-label" for="">Cantidad:</label>
                <input class="form-control" type="number" name="quantity">
            </div>  
            <div>
                <label class="form-label" for="">Valor:</label>
                <input class="form-control" type="number" name="price">
            </div>  
            <br>
            <div>
                <input class="btn btn-success" type="submit" value="Crear Producto">    
            </div>              
        </form>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Categoria</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Valor</th>
                <th scope="col">Operaciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($product as $product)
                <tr class="table-primary">
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td> <a href="/editar_producto/{{$product->id}}" class="btn btn-secondary">Modificar</a>
                        <a href ="/eliminar_producto/{{$product->id}}" class="btn btn-danger btn-delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg></a>
                    </td>
                </tr>
                @endforeach
                </tr>
            </tbody>
          </table>
    </body>
    {{-- <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
        $(document).ready(function () {
        $('#example').DataTable();
        });
    </script> --}}
</html>
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
        <form class="form" action="">
            <div>
                <label class="form-label" for="">Nombre Categoria:</label>
                <input class="form-control" type="text" name="producto">
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
              <tr class="table-primary">
                <td>Column content</td>
                <td>Column content</td>
              </tr>
            </tbody>
          </table>
        <h1>Productos</h1>
        <h2>Crear Producto</h2>
        <form class="form" action="">
            <div>
                <label class="form-label" for="">Nombre del Producto:</label>
                <input class="form-control" type="text" name="producto">
            </div>
            <div>
                <label class="form-label" for="">Categoria:</label>
                <select class="form-control" name="categoria">
                    <option value=""></option>
                </select>
            </div>
            <div>
                <label class="form-label" for="">Cantidad:</label>
                <input class="form-control" type="number" name="quantity">
            </div>  
            <div>
                <label class="form-label" for="">Valor:</label>
                <input class="form-control" type="number" name="precio">
            </div>  
            <br>
            <div>
                <input class="btn btn-success" type="submit" value="Crear Producto">    
            </div>              
        </form>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Categoria</th>
                <th scope="col">Operaciones</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-primary">
                <td>Column content</td>
                <td>Column content</td>
              </tr>
            </tbody>
          </table>
    </body>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
        $(document).ready(function () {
        $('#example').DataTable();
        });
    </script>
</html>
@extends('auth.admin')
<h1>Editar Producto: {{$product->name}}</h1>

<form action="/editar_producto/{{$product->id}}" method="POST">
    @csrf
    <label for="">Nombre:</label>
    <input class="form-control" type="text" name="name" id="" value="{{$product->name}}">
    <br>
    <div>
        <label class="form-label" for="">Categoria:</label>
        <select class="form-control" name="category">
            @foreach ($category2 as $category2)
            <option value="">Escoge la categoria:</option>
                <option value="{{ $category2->name }}">{{ $category2->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="form-label" for="">Cantidad:</label>
        <input class="form-control" type="number" name="quantity" value="{{$product->quantity}}">
    </div>  
    <div>
        <label class="form-label" for="">Valor:</label>
        <input class="form-control" type="number" name="price" value="{{$product->price}}">
    </div>  
    <input type="submit" value="Actualizar">
</form>
<br>
<a href="/">Volver</a>
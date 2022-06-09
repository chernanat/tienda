{{-- @extends('admin') --}}
<h1>Editar Producto: {{$product->name}}</h1>

<form action="/editar_producto/{{$product->name}}" method="POST">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" id="" value="{{$product->name}}">
    <br>
    <label for="">Phone</label>
    <input type="number" name="phone" id="" value="">
    <br>
    <label for="">Lastname</label>
    <input type="text" name="lastname" id="" value="">
    <br>
    <input type="submit" value="UPDATE">
</form>
<br>

<a href="/">Volver</a>
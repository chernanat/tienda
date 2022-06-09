@extends('auth.admin')
<h1>Editar Categoria: {{$category->name}}</h1>

<form action="/editar_categoria/{{$category->id}}" method="POST">
    @csrf
    <label for="">Nombre:</label>
    <input class="form-control" type="text" name="name" id="" value="{{$category->name}}">
    <br>
    <input type="submit" value="Actualizar">
</form>
<br>
<a href="/">Volver</a>
@extends('admin')
<h1>EDIT USER: {{$category->name}}</h1>

<form action="/editar_categoria/{{$person->id}}" method="POST">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" id="" value="{{$person->name}}">
    <br>
    <label for="">Phone</label>
    <input type="number" name="phone" id="" value="{{$person->phone}}">
    <br>
    <label for="">Lastname</label>
    <input type="text" name="lastname" id="" value="{{$person->lastname}}">
    <br>
    <input type="submit" value="UPDATE">
</form>
<br>

<a href="/">Volver</a>
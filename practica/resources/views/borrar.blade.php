@extends('layout')
<h1>Eliminacion de registro</h1>
<h3>¿Está seguro que desea eliminar este registro?</h3>
<form action="" method="">
    @csrf
    <p>Nombre: {{alumno.nombre}}</p>
    <button type="submit" class="btn btn-danger">Eliminar Registro</button>
</form>
<a href="{{route('index')}}" class="btn btn-info">Cancelar</a>


@section('contenido')
@endsection
@extends('layout')
  
    <div class="container">
    <div class="col-md-4 offst-md-4">
        <h1>Ingreso de datos</h1>
    <form action="/alumnos" method="POST">
    @csrf
        <div class="form-group">
        <input type="text" placeholder="Nombre" name="nombre">
        </div>
        <div class="form-group">
        <input type="text" placeholder="Apellido" name="apellido">
        </div>
        <div class="form-group">
        <input type="number" placeholder="Edad" name="edad">
        </div>
        <div>
        <input type="text" placeholder="Sexo" step="1" name="sexo">
        </div>     
      
        <button class="btn btn-info">Ingresar datos</button>
    </form>
    <a href="{{route('index')}}" class="btn btn-danger">Cancelar</a>
    </div>

    </div>
    
    
@section('contenido')
@endsection
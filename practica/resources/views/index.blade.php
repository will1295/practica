@extends('layout')

@section('contenido')
<a href="{{route('crear')}}" class="btn btn-success">Crear nuevo registro</a>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Opciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach($alumnos as $alumno)
        <tr>
            
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->apellido}}</td>
            <td>{{$alumno->edad}}</td>
            <td>{{$alumno->sexo}}</td>
            <td><a href="{{route('editar'),$alumno->id}}" class="btn btn-warning">Editar</a></td>
            <td><a href="{{route('borrar'),$alumno->id}}" class="btn btn-danger">Eliminar</a></td>

        </tr>
        @endforeach

    </tbody>
</table>
@endsection
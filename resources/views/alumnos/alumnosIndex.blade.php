@extends('layouts.mi-tema')

@section('contenido')

<h1>
  Aqui esta el listado de materias
</h1>

<a href="{{action('AlumnoController@create')}}">Nuevo Alumno(action)</a>
<a href="{{route('alumno.create')}}" class="btn btn-success">Nuevo Alumno(route)</a>

@if($alumnos->count()==0)
<div class="alert alert-warming">
  No hay alumnos registrados
</div>
@else

<table class='table'>
  <thead>
  <tr>
    <th>Nombre</th>
    <th>Codigo</th>
    <th>Carrera</th>
    <th>Ultima Actualizacion</th>
    </tr>
  </thead>
  
  <body>
    
    @foreach($alumnos as $alumno)
    
    <tr>
    <td>{{$alumno->id}}</td>
    <td>{{$alumno->nombre}}</td>
    <td>{{$alumno->codigo}}</td>
    <td>{{$alumno->carrera}}</td>
    <td>{{$materia->updated_at}}</td>
    </tr>
    
    @endforeach
  </body>
</table>
@endif
@endsection
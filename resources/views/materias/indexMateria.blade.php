@extends('layouts.mi-tema')
@section('contenido')

<h1>
  Aqui esta el listado de materias
</h1>

<a href="{{action('MateriaController@create')}}">Nueva Materia(action)</a>
<a href="{{route('materia.create')}}" class="btn btn-success">Nueva Materia(route)</a>

@if($materias->count()==0)
<div class="alert alert-warming">
  No tienes materias registradas
</div>
@else

<table class='table'>
  <thead>
  <tr>
    <th>Materia</th>
    <th>NRC</th>
    <th>Seccion</th>
    <th>Horario</th>
    <th>Ultima Actualizacion</th>
    </tr>
  </thead>
  
  <body>
    
    @foreach($materias as $materia)
    
    <tr>
    <td>{{$materia->materia}}</td>
    <td>{{$materia->nrc}}</td>
    <td>{{$materia->seccion}}</td>
    <td>{{$materia->horario}}</td>
    <td>{{$materia->updated_at}}</td>
    </tr>
    
    @endforeach
  </body>
</table>
@endif
@endsection
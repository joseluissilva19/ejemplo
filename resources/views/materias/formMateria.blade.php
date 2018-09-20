@extends('layouts.mi-tema')
@section('contenido')

<form action="{{ route('materia.store') }}" method="POST">
  {{ csrf_field() }}
  <label for="materia">Materia:</label>
  <input type="text" name="Nombre_materia">
  <br>
  <label for="nrc">NRC:</label>
  <input type="text" name="NRC">
   <br>
  <label for="seccion">Seccion:</label>
  <input type="text" name="Seccion">
  <br>
  <label for="horario">Horario:</label>
  <input type="time" name="Horario">
  <br>
  <input type="submit" name="Guardar">
</form>

@endsection
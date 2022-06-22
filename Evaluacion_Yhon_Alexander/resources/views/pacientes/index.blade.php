<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<br>
@extends('layouts.app')
@section('content')

<center><h1>Lista de Pacientes</h1></center>

<div class="alert alert-primary" role="alert">
@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif
</div>

<a href="{{ url('paciente/create') }}" class="btn btn-success">Registrar Paciente</a>
<br><br>

<table class="table table-striped">

  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Documento</th>
      <th scope="col">Tipo Documento</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Dirección</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Género</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Estado Civil</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <tbody>
   @foreach( $pacientes as $paciente)
    <tr>
      <th scope="row">{{$paciente->id}}</th>
      <td>{{$paciente->Documento}}</td>
      <td>{{$paciente->TipoDocumento}}</td>
      <td>{{$paciente->Nombre}}</td>
      <td>{{$paciente->Apellido}}</td>
      <td>{{$paciente->Direccion}}</td>
      <td>{{$paciente->Telefono}}</td>
      <td>{{$paciente->Genero}}</td>
      <td>{{$paciente->FechaNacimiento}}</td>
      <td>{{$paciente->EstadoCivil}}</td>
      <td>
        <a href="{{ url('/paciente/'.$paciente->id.'/edit') }}" class="btn btn-info">Editar</a>         

        <form action="{{ url('/paciente/'.$paciente->id) }}" method="POST">
        @csrf
        {{ method_field('DELETE') }}
            <input type='submit' onclick="return confirm('¿Quieres Borrar?')" class="btn btn-danger" value="Borrar">
        </form>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
@endsection
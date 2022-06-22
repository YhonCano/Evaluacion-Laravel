<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<br>
@extends('layouts.app')
@section('content')
<div class="container">

<center><h1>Edición de Pacientes</h1></center>

<form action="{{ url('/paciente/'.$paciente->id) }}" method="POST">
@csrf
{{ method_field('PATCH') }}
@include('pacientes.form',['modo'=>'Editar']);
</form>
<div>
@endsection
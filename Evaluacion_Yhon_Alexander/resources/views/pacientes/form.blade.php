@if(count($errors)>0)

  <div class="alert alert-danger" role="alert">
    <ul> 
      @foreach($errors->all() as $error)
        <li> {{ $error }} </li>
      @endforeach
    </ul> 
  </div>  

@endif
<div class="mb-3">
  <label class="form-label">Documento</label>
  <input type="number" value="{{ isset($paciente->Documento)?$paciente->Documento:'' }}" class="form-control" id="Documento" name="Documento">
</div>

<div class="mb-3">
  <label class="form-label">Tipo de Documento</label>
  <input type="text" value="{{ isset($paciente->TipoDocumento)?$paciente->TipoDocumento:'' }}" class="form-control" id="TipoDocumento" name="TipoDocumento">
</div>

<div class="mb-3">
  <label class="form-label">Nombre</label>
  <input type="text" value="{{ isset($paciente->Nombre)?$paciente->Nombre:'' }}" class="form-control" id="Nombre" name="Nombre">
</div>

<div class="mb-3">
  <label class="form-label">Apellido</label>
  <input type="text" value="{{ isset($paciente->Apellido)?$paciente->Apellido:'' }}" class="form-control" id="Apellido" name="Apellido">
</div>

<div class="mb-3">
  <label class="form-label">Direccion</label>
  <input type="text" value="{{ isset($paciente->Direccion)?$paciente->Direccion:'' }}" class="form-control" id="Direccion" name="Direccion">
</div>

<div class="mb-3">
  <label class="form-label">Teléfono</label>
  <input type="number" value="{{ isset($paciente->Telefono)?$paciente->Telefono:'' }}" class="form-control" id="Telefono" name="Telefono">
</div>

<div class="mb-3">
  <label class="form-label">Género</label>
  <input type="text" value="{{ isset($paciente->Genero)?$paciente->Genero:'' }}" class="form-control" id="Genero" name="Genero">
</div>

<div class="mb-3">
  <label class="form-label">Fecha de Nacimiento</label>
  <input type="date" value="{{ isset($paciente->FechaNacimiento)?$paciente->FechaNacimiento:'' }}" class="form-control" id="FechaNacimiento" name="FechaNacimiento">
</div>

<div class="mb-3">
  <label class="form-label">Estado Civil</label>
  <input type="text" value="{{ isset($paciente->EstadoCivil)?$paciente->EstadoCivil:'' }}" class="form-control" id="EstadoCivil" name="EstadoCivil">
</div>

<input type="submit" value="{{$modo}}" class="btn btn-primary">
<a href="{{ url('paciente') }}" class="btn btn-warning" >Regresar</a>


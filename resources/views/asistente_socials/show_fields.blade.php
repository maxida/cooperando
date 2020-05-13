<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $asistenteSocial->nombre }}</p>
</div>

<!-- Dni Field -->
<div class="form-group">
    {!! Form::label('dni', 'Dni:') !!}
    <p>{{ $asistenteSocial->dni }}</p>
</div>

<!-- Matricula Field -->
<div class="form-group">
    {!! Form::label('matricula', 'Matricula:') !!}
    <p>{{ $asistenteSocial->matricula }}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $asistenteSocial->direccion }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $asistenteSocial->telefono }}</p>
</div>

<!-- Foto Field -->
<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p>{{ $asistenteSocial->foto }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $asistenteSocial->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $asistenteSocial->updated_at }}</p>
</div>


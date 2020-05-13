<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $niño->nombre }}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $niño->direccion }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $niño->telefono }}</p>
</div>

<!-- Dni Field -->
<div class="form-group">
    {!! Form::label('dni', 'Dni:') !!}
    <p>{{ $niño->dni }}</p>
</div>

<!-- Peso Field -->
<div class="form-group">
    {!! Form::label('peso', 'Peso:') !!}
    <p>{{ $niño->peso }}</p>
</div>

<!-- Talla Field -->
<div class="form-group">
    {!! Form::label('talla', 'Talla:') !!}
    <p>{{ $niño->talla }}</p>
</div>

<!-- Foto Field -->
<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p>{{ $niño->foto }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $niño->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $niño->updated_at }}</p>
</div>


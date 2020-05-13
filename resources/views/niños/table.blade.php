<div class="table-responsive">
    <table class="table" id="niños-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Dni</th>
        <th>Peso</th>
        <th>Talla</th>
        <th>Foto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($niños as $niño)
            <tr>
                <td>{{ $niño->nombre }}</td>
            <td>{{ $niño->direccion }}</td>
            <td>{{ $niño->telefono }}</td>
            <td>{{ $niño->dni }}</td>
            <td>{{ $niño->peso }}</td>
            <td>{{ $niño->talla }}</td>
            <td>{{ $niño->foto }}</td>
                <td>
                    {!! Form::open(['route' => ['niños.destroy', $niño->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('niños.show', [$niño->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('niños.edit', [$niño->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

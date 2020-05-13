<div class="table-responsive">
    <table class="table" id="encargados-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Dni</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Foto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($encargados as $encargado)
            <tr>
                <td>{{ $encargado->name }}</td>
            <td>{{ $encargado->dni }}</td>
            <td>{{ $encargado->direccion }}</td>
            <td>{{ $encargado->telefono }}</td>
            <td>{{ $encargado->foto }}</td>
                <td>
                    {!! Form::open(['route' => ['encargados.destroy', $encargado->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('encargados.show', [$encargado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('encargados.edit', [$encargado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

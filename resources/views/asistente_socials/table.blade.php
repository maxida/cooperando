<div class="table-responsive">
    <table class="table" id="asistente_socials-table">
        <thead>
            <tr>
        <th>nombre</th>
        <th>Dni</th>
        <th>Matricula</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Foto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($asistenteSocials as $asistenteSocials)
            <tr>
            <td>{{ $asistenteSocials->nombre }}</td>
            <td>{{ $asistenteSocials->dni }}</td>
            <td>{{ $asistenteSocials->matricula }}</td>
            <td>{{ $asistenteSocials->direccion }}</td>
            <td>{{ $asistenteSocials->telefono }}</td>
            <td>{{ $asistenteSocials->foto }}</td>
            <td>
                    {!! Form::open(['route' => ['asistenteSocials.destroy', $asistenteSocials->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                        <a href="{{ route('asistenteSocials.show', [$asistenteSocials->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('asistenteSocials.edit', [$asistenteSocials->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
            </td>
            
                
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<li class="{{ Request::is('encargados*') ? 'active' : '' }}">
    <a href="{{ route('encargados.index') }}"><i class="fa fa-edit"></i><span>Encargados</span></a>
</li>

<li class="{{ Request::is('niños*') ? 'active' : '' }}">
    <a href="{{ route('niños.index') }}"><i class="fa fa-edit"></i><span>Niños</span></a>
</li>

<li class="{{ Request::is('asistenteSocials*') ? 'active' : '' }}">
    <a href="{{ route('asistenteSocials.index') }}"><i class="fa fa-edit"></i><span>Asistente Social</span></a>
</li>


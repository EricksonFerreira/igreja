<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('membro.index') }}" class="nav-link {{ Request::is('membro') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>Membros</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('culto.index') }}" class="nav-link {{ Request::is('culto') ? 'active' : '' }}">
        <i class="nav-icon fas  fa-school"></i>
        <p>Cultos</p>
    </a>
</li>

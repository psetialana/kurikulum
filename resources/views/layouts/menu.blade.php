<li class="nav-item">
    <a href="{{ route('individus.index') }}"
       class="nav-link {{ Request::is('individus*') ? 'active' : '' }}">
        <p>Individus</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('dokumens.index') }}"
       class="nav-link {{ Request::is('dokumens*') ? 'active' : '' }}">
        <p>Dokumens</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('keluargas.index') }}"
       class="nav-link {{ Request::is('keluargas*') ? 'active' : '' }}">
        <p>Keluargas</p>
    </a>
</li>



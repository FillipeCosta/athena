<div>
    <div id="sidebar-links" style="color: #fff">
        <span> Formulários </span>
        <hr>
        <a href="{{ route('dados-pessoais') }}" class="{{ request()->routeIs('dados-pessoais') ? 'active-link' : '' }}">Dados Pessoais</a>
        <a href="{{ route('dados-profissionais') }}" class="{{ request()->routeIs('dados-profissionais') ? 'active-link' : '' }}">Dados Profissionais</a>
        <a href="{{ route('endereco') }}" class="{{ request()->routeIs('endereco') ? 'active-link' : '' }}">Endereço</a>
        <a href="{{ route('academico') }}" class="{{ request()->routeIs('academico') ? 'active-link' : '' }}">Formação acadêmica</a>
        <a href="{{ route('unidades') }}" class="{{ request()->routeIs('unidades') ? 'active-link' : '' }}">Unidades de trabalho</a>
    </div>
</div>

<div>
    <div id="main-layout">
        <div class="sidebar">
            @livewire('sections.sidebar')
        </div>

        @if (request()->routeIs('dados-pessoais'))
            <div class="form-section">
                @livewire('sections.forms.user')
            </div>
        @endif

        @if (request()->routeIs('dados-profissionais'))
            <div class="form-section">
                @livewire('sections.forms.professional')
            </div>
        @endif

        @if (request()->routeIs('endereco'))
            <div class="form-section">
                @livewire('sections.forms.address')
            </div>
        @endif

        @if (request()->routeIs('academico'))
            <div class="form-section">
                @livewire('sections.forms.academic')
            </div>
        @endif

        @if (request()->routeIs('unidades'))
            <div class="form-section">
                @livewire('sections.forms.unitys')
            </div>
        @endif
    </div>
</div>

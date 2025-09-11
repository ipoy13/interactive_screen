<header>
    @if (request()->segment(1) == 'sefas')
        <img src="{{ asset('images/logo_sefas.png') }}" alt="Logo Sefas" style="width: 223px; height: 46px;">
    @else
        <img src="{{ asset('images/logo_bci_header.png') }}" alt="Logo BCI" style="width: 177.5px; height: 50px;">
    @endif
</header>
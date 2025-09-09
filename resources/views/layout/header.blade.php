<header>
    @if (request()->segment(1) == 'sefas')
        <img src="{{ asset('images/logo_sefas.png') }}" alt="Logo Sefas" style="width: 440px; height: 90.75px;">
    @else
        <img src="{{ asset('images/logo_bci_header.png') }}" alt="Logo BCI" style="width: 355px; height: 100px;">
    @endif
</header>
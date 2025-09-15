<header>
    @if (request()->segment(1) == 'sefas')
        <img class="header-logo-sefas" src="{{ asset('images/logo_sefas.webp') }}" alt="Logo Sefas">
    @else
        <img class="header-logo-bci" src="{{ asset('images/logo_bci_header.webp') }}" alt="Logo BCI">
    @endif
</header>
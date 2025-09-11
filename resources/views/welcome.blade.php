<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="INTERACTIVE SCREEN">
  <meta name="keywords" content="HTML, CSS, Laravel">
  <meta name="author" content="SEFAS, SAMOEDERA">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @include('layout.assets')
  <title>@yield('title', 'INTERACTIVE SCREEN')</title>
</head>

 <body class="contents">
    <div class="body-content">
        <div class="title-content">
        <h1>Discover our companies</h1>
        <p>Tap to explore who we are</p>
        </div>
        <div class="menu-content">
            <a href="{{ route('sefas.about')}}">
                <div class="card-content shadow-sefas">
                    <img src="{{ asset('../images/logo_sefas.png')}}">
                </div>
            </a>
            
            <a href="{{ route('bci.about')}}">
                <div class="card-content shadow-bci">
                    <img src="{{ asset('../images/logo_bci_home.png')}}" style="height: 104px;">
                </div>
            </a>
        </div>
    </div>
    <div class="footer-content">
        <h1>SEFAS Group Companies</h1>
        <div class="icon-group-content">
            <div class="icon-content">
                <img src="{{ asset('../images/logo_sp.png')}}">
            </div>
            <div class="icon-content">
                <img src="{{ asset('../images/logo_sk.png')}}">
            </div>
            <div class="icon-content">
                <img src="{{ asset('../images/logo_tp.png')}}">
            </div>
        </div>
        <div class="icon-group-content">
            <div class="icon-content">
                <img src="{{ asset('../images/logo_ssp.png')}}">
            </div>
            <div class="icon-content">
                <img src="{{ asset('../images/logo_pmm.png')}}">
            </div>
            <div class="icon-content">
                <img src="{{ asset('../images/logo_bci_small.png')}}">
            </div>
        </div>
        <div class="icon-group-content">
            <div class="icon-content">
                <img src="{{ asset('../images/logo_csb.png')}}">
            </div>
            <div class="icon-content">
                <img src="{{ asset('../images/logo_ehsb.png')}}">
            </div>
        </div>
    </div>
</body>

</html>

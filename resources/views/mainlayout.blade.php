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

 <body>
    @include('layout.header')
    @yield('content')
    @include('layout.navbar')
</body>

{{-- <div body>
  <div container>
    <header></header>
  </div>
</div> --}}

</html>

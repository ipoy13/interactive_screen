<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="INTERACTIVE SCREEN">
  <meta name="keywords" content="HTML, CSS, Laravel">
  <meta name="author" content="SEFAS, SAMOEDERA">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  @include('layout.assets')
  <title>@yield('title', 'INTERACTIVE SCREEN')</title>
</head>

 <body>
    @include('layout.header')
    {{-- <div class="preloader" id="preloader">
      <div class="preloader-inner">
        <div class="lds-ripple {{ request()->segment(1) }}"><div></div><div></div></div>
      </div>
    </div> --}}
    @yield('content')
    @include('layout.navbar')
</body>

<script>
  // Wait for the entire page (including images) to load
  // window.addEventListener('load', function() {
  //     const preloader = document.querySelector('.preloader');

  //     if (preloader) {
  //         preloader.style.display = 'none';
  //     }
  // });
</script>

</html>

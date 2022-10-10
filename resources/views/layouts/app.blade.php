
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name','Laravel') }}</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('battambang/battambang.css') }}">
  @livewireStyles()
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
 @include('layouts.partials.navbar')

  @include('layouts.partials.sidebar')

   {{ $slot }}

 @include('layouts.partials.footer')

  {{-- <aside class="control-sidebar control-sidebar-dark">
  </aside> --}}
</div>

<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('template/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

@livewireScripts()

<script>
    window.addEventListener('swal',(event)=>{
        Swal.fire(event.detail);
    });
</script>

</body>
</html>



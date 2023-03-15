<!DOCTYPE html>
<html lang="{{ App::getLocale() }}" dir="{{ trans('all.dir')}}">
<head>
    <!-- Title -->
    <title> @yield('title')</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Description">
    <meta name="Keywords" content="Keywords,Keywords"/>
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- swipper --}}
    <link rel="stylesheet"  href="{{asset('assets/css/swiper-bundle.min.css')}}" />
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <!-- Template Main CSS File -->
    @if(trans('all.dir') != 'rtl')
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

    @else

        <link rel="stylesheet" href="{{ asset('css/style-ar.css')}}"/>
    @endif
</head>
<body class="main-body">
   @include('layouts.nav')
   <section class="content">
    @yield('content')
   </section>
   @include('layouts.footer')

</body>
</html>

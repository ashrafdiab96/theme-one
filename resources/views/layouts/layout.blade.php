<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="http://www.jqueryscript.net/css/jquerysctipttop.css" type="text/css">
    <link rel="icon" href="{{ url('assets/icons/main_icon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/splide/dist/css/splide.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lightgallery.js-master/dist/css/lightgallery.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.4.1/css/bootstrap.min.css" integrity="sha384-yQ02IR5BzpO2LZ70lJP2g4opr8tX6KzCmaELFzmNqlwtvTgtDJHQvuc43zCRMf1T" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ url('assets/css/style-ar.css') }}">
    @else
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ url('assets/css/style-en.css') }}">
    @endif

</head>
<body>
    {{-- @include('layouts.topNav') --}}
    @include('layouts.navbar')

    <section class="page">
        @yield('content')
    </section>

    @include('layouts.footer')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.rtlcss.com/bootstrap/v4.4.1/js/bootstrap.min.js" integrity="sha384-8RqFNshIrK8FARYG0cBLv7D4Y2hXNUPHVWohv3STbDMZh6BU4LNoAJUA3mjCH6Zx" crossorigin="anonymous"></script>
    <script src="{{ url('assets/splide/dist/js/splide.min.js') }}"></script>

    @yield('project-js')

    <script src="{{ url('assets/js/main.js') }}"></script>

</body>
</html>

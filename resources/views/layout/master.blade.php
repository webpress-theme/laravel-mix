<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet preload" as="style" type="text/css" media="screen" href="{{url('/css/app.css')}}" /> --}}
    <link rel="stylesheet" href="{{ mix('/css/' . View::getSection('file') . '.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/vendor.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/global.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/header.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/footer.css') }}" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="./css/owl.carousel.min.css" />
    <link rel="stylesheet" href="./css/owl.theme.default.min.css" />



</head>

</head>

<body>
    <div class="wrapper @yield('page')">
        @section('header')
        @include('layout.header')
        @show
        @yield('content')
        @section('footer')
        @include('layout.footer')
        @show
    </div>
</body>
<script rel="preload" as="script" src="{{url('js/app.js')}}" async></script>
{{-- jquery --}}
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous">
</script>
{{-- JS BOOTSTRAP --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>

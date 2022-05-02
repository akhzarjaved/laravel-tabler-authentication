<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/demo.min.css') }}" rel="stylesheet"/>
    @stack('css')
</head>
<body class="theme-light">
<div class="page">

    @include('inc.header')

    <div class="page-wrapper">

        @yield('content')

        @include('inc.footer')

    </div>

</div>
<!-- Libs JS -->
<!-- Tabler Core -->
<script src="{{ asset('assets/js/tabler.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

<script !src="">
    document.body.style.display = "block";
</script>

@stack('script')
</body>
</html>

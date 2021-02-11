<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cv Automation') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/custom-side.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

</head>
<body>
    {{-- top navigation --}}
    @include('inc.top-nav')    
    @if (!auth()->guest())
        <div id="app">
            <div class="page-wrapper chiller-theme toggled">
                <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                    <i class="fa fa-arrow-right"></i>
                </a>
                <!-- sidebar-wrapper  -->
                @include('inc.side-nav')
                <main class="page-content">
                    <div class="container-fluid body-custom">
                        @isset($success)
                            <div class="alert alert-success">{{ $success }}</div>
                        @endisset
                        @isset($error)
                            <div class="alert alert-success">{{ $success }}</div>
                        @endisset
                        @yield('content')           
                    </div>
                </main>
            </div>
        </div>
    @else
        <main class="m-4 body-custom">
            @yield('content')           
        </main>
    @endif
    {{-- footer --}}
    @include('inc.footer')
    <!-- page-wrapper -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/custom-side.js') }}"></script>
</body>
</html>

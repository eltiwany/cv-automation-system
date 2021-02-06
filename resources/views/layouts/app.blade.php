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
    @include('inc.top-nav')    
    @if (!auth()->guest())
    <div id="app">
        <div class="page-wrapper chiller-theme toggled">
            <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                <i class="fa fa-bars"></i>
            </a>
            @include('inc.side-nav')
            <!-- sidebar-wrapper  -->
            <main class="page-content">
                <div class="container-fluid">
                    {{-- main content here --}}
                    @endif
                    
                    @yield('content')

                        @if (!auth()->guest())  
                                @include('inc.footer')
                                </div>
                            </main>
                        @endif
        <!-- page-content" -->
        </div>
    </div>
    <!-- page-wrapper -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/custom-side.js') }}"></script>
</body>
</html>

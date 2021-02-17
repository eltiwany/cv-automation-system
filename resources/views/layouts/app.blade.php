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
    <?php 
        $full_url = url()->current();
        $break_url = explode('/', $full_url);
        $url = end($break_url);
    ?>
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
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                @foreach ($errors->all() as $error)
                                    {{ $error }} <br/>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
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
    <script>
        function confirmDeletion(formID, message) {
          var confirmed = confirm(message);
          if (confirmed) {
            document.getElementById(formID).submit();
          }
        }

        function enableScroll(divID) {
            document.getElementById(divID).style.overflowY = 'scroll';
            document.getElementById(divID).style.cursor = 'default';
        }
    </script>
</body>
</html>

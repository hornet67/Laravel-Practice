<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
    <!-- Font Awesome CDN -->
    <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jQuery-3.7.1.js') }}"></script>

    <script>
        var token = localStorage.getItem('token');
        if (token) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Authorization': 'Bearer ' + token,
                    'Accept': 'application/json',
                },
            });
        };
    </script>
    


    @yield('css')
    @yield('js')
    <title>Layout</title>
</head>
<body>
    <div class="main-container">
        <!-- Sidebar Container -->
        @include('layouts.sidebar')

        <!-- Body Wrapper. Contains main content -->
        <div class="body-wrapper">
            <!-- include header file --> 
            @include('layouts.header')
            

            <!-- Dynamic Content will be added here -->
            <div class="main-content">
                @yield('main-content')
            </div>


            <!-- Include Footer file --> 
            @include('layouts.footer')
        </div>
    </div>
    {{-- <div class="main-body">
        @include('layouts.sidebar')
        
        <div>
            @include('layouts.header')

            <div class="main-content">
                @yield('main-content')
            </div>

            @include('layouts.footer')
        </div>
    </div> --}}

    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
    <script>
        $(document).ready(function () {
            SidebarAjax()
        });
    </script>
</body>
</html>
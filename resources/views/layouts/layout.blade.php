<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')
    @yield('js')
    <title>Layout</title>
</head>
<body>
    <div class="main-body">
        @include('layouts.sidebar')
        
        <div>
            @include('layouts.header')
            
            <div class="main-content">
                @yield('main-content')
            </div>
    
            
            @include('layouts.footer')
        </div>
    </div>

</body>
</html>
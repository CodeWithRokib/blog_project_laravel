<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('frontend.layouts.css')
    <title>Document</title>
</head>
<body>
    
    {{-- navbar included --}}
    @include('frontend.layouts.navbar')
    
    {{-- full body tag --}}
    @yield('content')
    
    {{-- footer included --}}
    @include('frontend.layouts.footer')


    @include('frontend.layouts.js')

    @yield('js')

</body>
</html>
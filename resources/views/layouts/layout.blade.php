<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
     <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    <!-- header  -->
    @include('partials.header')

    {{-- @include('partials.jumpo') --}}

   <!-- main  -->
    @yield('content')

   <!-- footer  -->
   @include('partials.footer')
    
</body>
</html>
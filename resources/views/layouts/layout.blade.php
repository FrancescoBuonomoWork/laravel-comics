<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- header  -->
    @include('partials.header')

   <!-- main  -->
    @yield('content')

   <!-- footer  -->
   @include('partials.footer')
    
</body>
</html>
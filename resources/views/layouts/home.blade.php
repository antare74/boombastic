<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boombastic</title>
    @include('includes.user.style')
</head>
<body>
    
    @include('includes.user.header')

    @include('includes.user.sidebar')

    @yield('content')

    <h1>HELLOW WORLD</h1>

    @include('includes.user.footer')
</body>

    @include('includes.user.script')
</html>
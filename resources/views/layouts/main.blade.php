<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Boolando - Laravel</title>
       <!-- Styles -->
       @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')
    @yield('content')

</body>
</html>

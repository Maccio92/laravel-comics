<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body>
        @include('guest.partials.header')
<main>
    @yield ('content')
</main>
<footer>
    @include('guest.partials.footer')
</footer>
</body>
</html>
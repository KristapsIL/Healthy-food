<!DOCTYPE html>
<html lang="en" id="html" data-togl="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="/js/script.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
</head>
<body>
    <x-navbar></x-navbar>
    {{ $slot }}
    @auth
        <script src="/js/dropdown.js"></script>
    @endauth
</body>
</html>
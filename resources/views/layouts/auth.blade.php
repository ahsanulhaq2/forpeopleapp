<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title : 'Website' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('build/assets/app-BErWYskJ.css ') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app-DgjkFXs7.css') }}">
    <script src="{{ asset('build/assets/app-DdYQcrJ8.js') }}"></script>
</head>
<body>
<main class="grow">
    @yield('content')
</main>
</body>
</html>

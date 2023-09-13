<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    <main class="container">
        @yield('main')
    </main>
</body>

</html>

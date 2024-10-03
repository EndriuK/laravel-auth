<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StitchPress</title>

    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')

    <main>
        <h1 class="text-center">StitchPress</h1>

        @yield('content')
    </main>
</body>
</html>
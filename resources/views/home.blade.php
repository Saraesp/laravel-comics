<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics</title>

    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <div class="container">
        <h5>CURRENT SERIES</h5>
    </div>
    @include('partials.footer')
</body>

</html>

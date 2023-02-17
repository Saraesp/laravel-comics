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
    <div class="background-black">
        <div class="container">
            <h5 class="text-white">CURRENT SERIES</h5>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>

</html>

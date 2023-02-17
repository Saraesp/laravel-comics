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
        <div class="jumbotron"></div>
        <div class="container">
            <h5 class="text-white">CURRENT SERIES</h5>
            <div class="row d-flex flex-wrap">
                @foreach($comics as $comic)  
                <div class="col">
                    <div class="card-comics">
                        <img class="card-img-top" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    </div>
                    <div class="card-body-comics text-white text-uppercase">
                        <p style="font-size: 12px" class="pt-2">{{ $comic['series'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>

</html>

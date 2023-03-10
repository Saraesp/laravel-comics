@extends('layouts.app')

@section('content')
<div class="background-black">
     <div class="container">
         <div class="position">
             <h5 class="text-white">CURRENT SERIES</h5>
         </div>
         <div class="row pt-5 ms-2">
             @foreach($comics as $comic)  
             <div class="col">
                <a class="text-decoration-none text-white" href="{{ route('comics-details', ['series' => $comic['series']])}}">
                    <div class="card-comics">
                        <img class="card-img-top" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    </div>
                    <div class="card-body-comics text-white text-uppercase">
                        <p style="font-size: 12px" class="pt-2 ">{{ $comic['series'] }}</p>
                    </div>
                </a> 
             </div>
             @endforeach
         </div>
     </div>
 </div> 
@endsection

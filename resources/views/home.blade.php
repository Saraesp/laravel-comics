@extends('layouts.app')

@section('content')
<div class="background-black">
     <div class="jumbotron"></div>
     <div class="container">
         <div class="position">
             <h5 class="text-white">CURRENT SERIES</h5>
         </div>
         <div class="row pt-5 ms-2">
             @foreach($comics as $comic)  
             <div class="col">
                 <div class="card-comics">
                    <a href=""><img class="card-img-top" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}"></a> 
                 </div>
                 <div class="card-body-comics text-white text-uppercase">
                    <a class="text-decoration-none text-white" href=""><p style="font-size: 12px" class="pt-2">{{ $comic['series'] }}</p></a> 
                 </div>
             </div>
             @endforeach
         </div>
     </div>
 </div>
@endsection 


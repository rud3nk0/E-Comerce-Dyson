@extends('layouts.app')

@section('content')
<div class="container">

        @foreach($posts as $element)
            <div class="card" id="{{ $element->id }}" style="width: 28rem;">
                <img src="{{$element->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$element->name}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach

</div>
@endsection

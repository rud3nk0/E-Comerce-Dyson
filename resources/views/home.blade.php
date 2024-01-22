@extends('layouts.app')

@section('content')
<div class="container">

        @foreach($posts as $element)
            <div class="card" id="{{ $element->id }}" style="width: 28rem;">
                <img src="{{$element->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$element->name}}</h5>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Description
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                     <p class="card-text">{{$element->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach


</div>
@endsection

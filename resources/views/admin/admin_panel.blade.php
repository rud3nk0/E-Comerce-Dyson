@extends('layouts.app')

@section('content')
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href={{route('post')}}>Product</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
@endsection

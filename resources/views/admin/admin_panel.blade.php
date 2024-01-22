@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="container" style="display: flex">
                <button style="border: none; background-color: inherit; font-size: 24px; ">
                    <a style="text-decoration: none; color: #1a202c"
                       href="{{route('home')}}">
                        <
                    </a>
                </button>
                <h2 style="margin: 10px 10px">Hello <span style="font-weight: bold">{{ Auth::user()->name }}</span> it's Admin Panel</h2>
            </div>

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

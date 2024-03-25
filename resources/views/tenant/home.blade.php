@extends('layouts.master')

@section('contents')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="#">{{tenant()->id}} Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <form class="d-flex gap-3">
                    <a class="nav-link" href="">Cart</a>
                    <a class="nav-link" href="">Login</a>
                </form>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="welcome-wrapper">
                    <h2 class="text-capitalize">Hello, Welcome to {{ tenant()->id }} shop</h2>
                </div>
            </div>
        </div>
    </div>
@endsection

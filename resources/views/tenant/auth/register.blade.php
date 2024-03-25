@extends('layouts.master')

@section('contents')
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

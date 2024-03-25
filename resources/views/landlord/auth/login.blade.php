@extends('layouts.master')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="form-wrapper my-5">
                    <h2 class="text-center">Login</h2>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="m-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('msg'))
                        <div class="alert alert-{{session('type')}}">
                            {{ session('msg') }}
                        </div>
                    @endif

                    <form method="POST" action="{{route('landlord.auth.login')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" name="email" value="{{old('email')}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

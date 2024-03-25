@extends('layouts.master')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="form-wrapper my-5">
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

                    <div class=" text-center">
                        <h1 class="text-capitalize">Welcome to User Dashboard</h1>
                        <p>To make the process simple as possible we did not restrict for email verification</p>
                    </div>

                    <hr>

                    <div class="my-5 text-center">
                        <h4>You can manage tenants from here.</h4>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary mt-2" href="{{route('landlord.manage.tenant.create')}}">{{__('Manage Tenants')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

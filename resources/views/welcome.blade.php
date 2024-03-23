@extends('layouts.master')

@section('styles')
    <style>
        .welcome-wrapper{
            margin-top: 100px;
            margin-bottom: 100px;
        }
    </style>
@endsection

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="welcome-wrapper text-center">
                    <h2>{{__('Landlord Section')}}</h2>
                    <p>Introducing the Landlord Dashboard, a centralized platform for efficient tenant management.</p>
                    <a class="btn btn-primary mt-2" href="{{route('manage.tenant.create')}}">{{__('Manage Tenants')}}</a>
                </div>
            </div>
        </div>
    </div>
@endsection

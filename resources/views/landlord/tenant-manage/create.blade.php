@extends('layouts.master')

@section('styles')
    <style>
        .form-wrapper{
            margin-top: 100px;
            margin-bottom: 100px;
        }
    </style>
@endsection

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="form-wrapper">
                    <h3 class="text-center">{{__('Tenant Manage')}}</h3>

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

                    <form method="POST" action="{{route('manage.tenant.store')}}">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="formGroupExampleInput">{{__('Tenant Username')}}</label>
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                   placeholder="{{__('Eq: super-shop')}}" name="username" value="{{old('username')}}">
                        </div>

                        <div class="form-group mt-3">
                            <label for="formGroupExampleInput">{{__('Tenant Email')}}</label>
                            <input type="email" class="form-control" id="formGroupExampleInput"
                                   placeholder="{{__('Eq: supershop@email.com')}}" name="email" value="{{old('email')}}">
                        </div>

                        <div class="form-group my-3">
                            <div class="button-wrapper d-flex justify-content-end">
                                <button type="submit" class="btn btn-success">{{__('Create')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-6 offset-3">
                <h3>All Tenants</h3>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{__('Username')}}</th>
                        <th scope="col">{{__('Email')}}</th>
                        <th scope="col">{{__('Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($tenants as $tenant)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$tenant->id}}</td>
                            <td>{{$tenant->email}}</td>
                            <td>
                                <div class="button-wrapper d-flex justify-content-center">
                                    <a class="btn btn-primary btn-sm" href="{{tenant_url_with_protocol($tenant->tenantDomain?->domain)}}">{{__('Open')}}</a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">{{__('No Tenant Found')}}</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

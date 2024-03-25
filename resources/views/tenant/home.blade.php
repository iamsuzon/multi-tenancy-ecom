@extends('layouts.master-tenant')

@section('head-bottom')
    @vite('resources/css/app.css')
@endsection

@section('contents')
    <div id="app"></div>
@endsection

@section('body-bottom')
    @vite('resources/js/app.js')
@endsection

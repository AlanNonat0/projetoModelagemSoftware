@extends('layouts.layout_base')

@section('title', 'login')

@section('content')
    <div class="row mx-auto d-flex justify-content-around mt-4">

        @include('site._components.form_login')
        @include('site._components.form_register')

    </div>
@endsection

@section('script')
    <script src="{{ asset('js/auth/register.js', true) }}"></script>
    <script src="{{ asset('js/auth/login.js', true) }}"></script>
@endsection

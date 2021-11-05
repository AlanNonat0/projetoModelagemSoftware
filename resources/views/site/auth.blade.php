@extends('layouts.layout_base')

@section('title', 'login')

@section('content')
    <div class="row mx-auto d-flex justify-content-around mt-4">

        @include('site._components.form_login')
        @include('site._components.form_register')

    </div>
@endsection

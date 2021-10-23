@extends('layouts.layout_base')

@section('title', 'login')

@section('content')
    <div class="row mx-auto d-flex justify-content-around mt-4">

        @include('_components.form_login')
        @include('_components.form_register')

    </div>
@endsection

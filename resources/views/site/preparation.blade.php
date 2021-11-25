@extends('layouts.layout_base')

@section('title', 'Receita')
@section('nav_aux')
    @include('site._partials.nav_global')
@endsection
@section('content')
    <div class="container-fluid">

    @if ($recipe)
        <div class="row mx-autod-flex  justify-content-center">
            <div class="col-lg-6 col-xl-6 col-sm-8 col-12  mt-4">
                <div class="card  bg bg-light mt-2">

                    <div class="card-header ">
                        <div class="row-12">
                            <div class=" mb-auto float-start mx-auto col-2">
                            <form class="save-recipe">
                                <input type="hidden" value="{{$recipe->id}}" name="recipe_id"/>
                                <button type="submit"  class="btn btn-outline-light"><img class="img-fluid save-recipe-image float-left" src="{{asset('img/salvar.png', true)}}" alt="Salvar" width="24" height="24"></button>
                            </form>
                            </div>
                            <div class="col-10">
                                <h3 class="text-dark text-center mx-auto">{{$recipe->name}}</h3>
                            </div>

                        </div>

                        <div class="row-12">
                            <div class="col-12 d-flex justify-content-center">
                                <h5 class="text-dark">{{$recipe->description}}</h5>
                            </div>
                        </div>
                        <div class="row-12 mt-4">
                            <div class="col-12">
                                <div class="d-flex float-start"><small class="text-dark"> Enviado por: {{$recipe->created_by}}</small></div>
                                <div class="d-flex float-end"><small class="text-dark">{{date('d-m-Y', strtotime($recipe->created_at))}}</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body mb-4">
                        <h3 class="mt-4">Ingredientes</h3>
                        <ul class="mt-3">
                            @foreach ($recipe->ingredients as $ingredient)
                                <li class="fw-bold mt-1">{{ $ingredient }}</li>
                            @endforeach

                        </ul>
                        <h3 class="mt-4">Preparo</h3>
                        <ol class="mt-3">
                            @foreach ($recipe->preparation as $preparation)
                                <li class="fw-bold mt-1">{{ $preparation }}</li>
                            @endforeach
                        </ol>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
@endsection

@section('script')
    <script src="{{ asset('js/book/recipe_save.js', true) }}"></script>
@endsection

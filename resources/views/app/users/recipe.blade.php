@extends('layouts.layout_base')

@section('title', 'Enviar Receita')

@section('nav_aux')
    @include('app.users._partials.nav_user')
@endsection

@section('content')

    <div class="container-fluid">

        <div class="row d-flex justify-content-around mt-4">
            <div class=" col-lg-8 col-12 col-sm-12 col-xl-8">
                <form action="{{ route('receita.store')}}" method="post" name="form-new-recipe">
                    @csrf
                    <h3 class="text-white text-center">Enviar receita</h3>

                    <div class="row">
                        <div class="col-12">
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Nome da receita" maxlength="40" required>

                        </div>
                    </div>

                    <div class='row mt-3'>
                        <div class="col-lg-8 col-12">
                            <input type="text" name="description" id="description" class="form-control"
                                placeholder="Digite uma breve descrição" maxlength="255" required>
                        </div>
                        <div class="col-lg-4 col-12 mt-lg-0 mt-xl-0 mt-sm-3 mt-3">

                            <select name="category" id="category" class="form-select">
                                <option value="" disabled selected>Selecione a categoria</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class='row mt-3'>
                        <div class='col-12'>
                            <textarea name="ingredients" id="ingredients" cols="10" rows="4" class="form-control"
                                placeholder="Liste os ingredientes"></textarea>
                            <label for="ingredients"><small class="text-white">Escreva cada ingrediente por linha, não
                                    ultilize marcadores</small></label>
                        </div>

                    </div>

                    <div class='row mt-3'>
                        <div class='col-12'>
                            <textarea name="preparation" id="preparation" cols="10" rows="4" class="form-control"
                                placeholder="Descreva o passo a passo"></textarea>
                            <label for="preparation"><small class="text-white">Descreva o passo a passo por linha e não
                                    utilize hífem, numeração ou qualquer outro marcador</small></label>
                        </div>

                    </div>


                    <div class="d-flex justify-content-center mt-4">

                        <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('js/book/recipe_new.js', true) }}"></script>
@endsection

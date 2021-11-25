@extends('layouts.layout_base')

@section('title', 'Caderno')

@section('nav_aux')
    @include('app.users._partials.nav_user')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center mt-4">
        <div class=" col-lg-8 col-12 col-sm-12 col-xl-8">
            <h4 class="text-white text-center">Encontre aqui suas receitas salvas</h4>
            <form class="form-control" action="" method="get" name="book-search">
                <div class="row">

                    <div class="col-lg-3 col-xl-3 col-sm-3 d-none d-sm-block">
                        <select name="category" id="category" class="form-select">
                            <option value="">Todos</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->category}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-7 col-xl-8 col-sm-7 col-9">
                        <input type="text" class="form-control mx-auto search-input" placeholder="Digite aqui sua busca" name="search" />
                    </div>
                    <div class="col-lg-2 col-xl-1 col-sm-2 col-3">
                        <button type="submit" class="form-control btn btn-outline-secondary" name="submit-book-search"><img src="{{ asset('img/search.png'), true }}" alt="Buscar" width="24" height="24" class="img-fluid"></button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <!-- Recipes -->
    <div class="row mt-4" id="recipeRender">

    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination">

        </ul>
    </nav>


</div>
@endsection

@section('script')
    <script src="{{ asset('js/book/book_search.js', true) }}"></script>
    <script src="{{ asset('js/book/book_onload.js', true) }}"></script>
    <script src="{{ asset('js/book/recipe_save.js', true) }}"></script>
    <script src="{{ asset('js/search/search.js', true) }}"></script>
@endsection

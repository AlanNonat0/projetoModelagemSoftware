@extends('layouts.layout_base')

@section('title', 'login')

@section('nav_user')
    @include('app.users._partials.nav_user')
@endsection

@section('content')
    <div class="row d-flex justify-content-center mt-4">
        <div class=" col-lg-8 col-12 col-sm-12 col-xl-8">
            <h4 class="text-white text-center">Encontre aqui suas receitas salvas</h4>
            <form class="form-control" action="" method="get">
                <div class="row">
                    <div class="col-lg-9 col-xl-9 col-sm-8 col-12">
                        <input type="text" class="form-control mx-auto" placeholder="Digite aqui sua busca" name="buscar" />
                    </div>

                    <div class="col-lg-3 col-xl-3 col-sm-4 col-12">
                        <select name="categoria" id="categoria" class="form-select">
                            <option value="">Todos</option>
                            <option value="refeicao">Refeição</option>
                            <option value="salada">Salada</option>
                            <option value="confeitaria">Confeitaria</option>
                            <option value="bebida">Bebida</option>
                        </select>
                    </div>
                    <button type="submit" hidden="true" class="form-control" name="busca-caderno" value="search"></button>

                </div>
            </form>
        </div>
    </div>

    <div class="row mt-4">
        {{-- @forelse ( as ) --}}
        <div class="col-lg-3 col-sm-6 pb-2">
            <div class="card bg bg-light">
                <div class="card-header ">
                    <h5 class="card-title">Nome da receita</h5>
                </div>
                <div class="card-body">

                    <p class="card-text">Descricao</p>
                    <div class="d-flex justify-content-end">
                        <a href="" class="btn-block btn btn-outline-dark btn-sm">Confira aqui</a>
                    </div>

                </div>
            </div>
        </div>
        {{-- @empty --}}

        {{-- <div class="row d-flex justify-content-center mt-4">
        <div class=" col-lg-8 col-12 col-sm-12 col-xl-8">
            <h4 class="text-white text-center">Não foram encontradas receitas salvas</h4>
        </div>
    </div> --}}
        {{-- @endforelse --}}

    </div>
@endsection

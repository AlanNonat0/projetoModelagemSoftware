@extends('layouts.layout_base')

@section('title', 'Receita')

@section('content')
    <div class="container-fluid">

        <div class="row mx-autod-flex  justify-content-center">
            <div class="col-lg-6 col-xl-6 col-sm-8 col-12  mt-4">
                <div class="card  bg bg-light mt-2">

                    <div class="card-header ">
                        <h3 class="text-dark text-center">nome receita</h3>
                        <h5 class="text-dark text-center">descricao</h5>
                        <div class="d-flex justify-content-end"><small class="text-dark"> Enviado por: criador</small>
                        </div>
                    </div>
                    <div class="card-body mb-4">
                        <h3 class=" mt-4">Ingredientes</h3>
                        <ul>
                            <li>ingredientes</li>
                        </ul>
                        <h3 class=" mt-4">Preparo</h3>
                        <ol>
                            <li>preparo</li>
                        </ol>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

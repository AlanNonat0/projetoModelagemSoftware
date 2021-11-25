@extends('layouts.layout_base')

@section('title', 'Atualizar')

@section('nav_aux')
    @include('app.users._partials.nav_user')
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row mt-4">
            <div class="col-12 col-xl-7 col-lg-7 mx-auto d-flex justify-content-center">
                @component('app.users._components.form_user_update', ['user' => $user])

                @endcomponent
            </div>

            <div class="col-12 col-lg-5 col-xl-5 mx-auto">
                <div class="card bg-dark border-transparent">
                    <div class="card-header p-0">
                        <h3 class="card-title text-white text-center">Dados pessoais</h3>
                    </div>
                    <div class="card-body pb-0 pt-4 px-0 text-white">

                        <ul class="list-group list-group-flush ">
                            <li class="list-group-item list-group-item-secondary pe-0 "><span class='fw-bold'>Nome:</span>
                                {{ $user->name }} </li>
                            <li class="list-group-item list-group-item-secondary pe-0"><span class='fw-bold'>E-mail:</span>
                                {{ $user->email }} </li>
                            <li class="list-group-item list-group-item-secondary pe-0"><span
                                    class='fw-bold'>Telefone:</span><span class="user-telephone"> {{ $user->telephone }}</span> </li>
                            <li class="list-group-item list-group-item-secondary pe-0"><span class="fw-bold">Última
                                    Atualização:</span><span class="user-update"> {{ date('d-m-Y', strtotime($user->updated_at))  }}</span></li>
                            <li class="list-group-item list-group-item-secondary pe-0"><span
                                    class="fw-bold"><small>Mantenha seus dados sempre atualizados*</small></li>
                        </ul>


                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/book/personal_data_update.js', true) }}"></script>
@endsection

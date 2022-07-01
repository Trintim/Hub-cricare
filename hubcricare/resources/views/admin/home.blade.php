@extends('layout.admin')

@section('title', 'Dashbord | Admin')

@section('content')

<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Seja bem vindo {{$user->name}}</h4>
                </div>
            </div>
        </div> <!-- end container -->
        <!-- Modal -->
        @if($aniversariante)
            @foreach($aniversariante as $aniversario)
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Aniversariantes Do Dia</h4>
                            </div>
                            <div class="modal-body" style=" display: flex; justify-content: center; align-items: center; flex-direction: column; " >
                                @foreach($aniversariante as $aniversario)
                                    @if($aniversario->dt_nasc != null)
                                        <h5 style="font-size: 16px;">{{$aniversario->name}} do setor {{$aniversario->setor}} faz {{ $aniversario->dt_nasc->diffInYears($dataAtual)}} Anos</h5>
                                        <h6 style="font-size: 14px;">Hoje <span style="color: #660c0c;">{{$aniversario->dt_nasc->format('d/m')}}/{{$ano}}</span></h6>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        {{-- @if($aniversariantesDoMes)
            @foreach($aniversariantesDoMes as $aniversariantes)
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Aniversariantes Do Mês</h4>
                            </div>
                            <div class="modal-body"  style=" display: flex; justify-content: center; align-items: center; flex-direction: column; " >
                                @foreach($aniversariantesDoMes as $aniversariantes)
                                    @if($aniversariantes->dt_nasc)
                                        <h5 style="font-size: 16px;">{{$aniversariantes->name}} do setor {{$aniversariantes->setor}}</h5>
                                        <h6 style="font-size: 14px;">No dia <span style="color: #660c0c;">{{$aniversariantes->dt_nasc->format('d/m')}}/{{$ano}}</span></h6>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif --}}
        @if(isset($aniversariantesDoMes))
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3" style="display: flex;justify-content: space-between; align-items:baseline;">
                                    <h6 class="text-white text-capitalize ps-3">Lista de Aniversariantes do Mês</h6>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">

                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aniverario</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Setor</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($aniversariantesDoMes as $funcionario)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="/storage/{{ $funcionario->image}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$funcionario->name}}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="badge badge-sm bg-gradient-success">{{$funcionario->dt_nasc->format('d/m')}}/{{$ano}}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$funcionario->setor}}</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div> <!-- end wrapper -->


@endsection


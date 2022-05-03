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
        @if($aniversariantesDoMes)
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
        @endif
    </div>
</div> <!-- end wrapper -->


@endsection


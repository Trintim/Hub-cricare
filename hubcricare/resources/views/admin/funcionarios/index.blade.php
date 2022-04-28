@extends('layout.admin')

@section('title', 'Funcionarios | admin')

@section('style')

<!-- DataTables -->
<link href="{{ asset('assets/sistema/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/sistema/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive datatable -->
<link href="{{ asset('assets/sistema/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Funcionarios</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        @include('components.alerts')

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3" style="display: flex;justify-content: space-between; align-items:baseline;">
                                <h6 class="text-white text-capitalize ps-3">Lista de Funcionarios</h6>
                                <a href="{{ route('admin.produtos.create') }}" class="btn btn-primary" style="margin-right: 1rem !important">Adicionar novo Funcionarios</a>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">

                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">WhatsApp</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data de Aniversario</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Setor</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($funcionarios as $funcionario)
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

                                            <td class="align-middle">
                                                <p class="text-xs font-weight-bold mb-0">{!! Str::limit($funcionario->whatsapp ?? '', 70, '...') !!}</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">{{$funcionario->dt_nasc->locale('pt-BR')->translatedFormat('d F Y')}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{$funcionario->setor}}</span>
                                            </td>
                                            <td class="align-middle">
                                                <button type="button" title="Detalhes do Funcionario" class="btn btn-info" data-toggle="modal" data-target="#modal-detalhes" data-id="{{ $funcionario->id }}"><i class="dripicons-italic"></i></button>
                                                <!-- botao editar -->
                                                <a type="button" title="Editar Produto" class="btn btn-warning" href="{{ route('admin.funcionarios.edit', $funcionario->id ) }}"><i class="dripicons-pencil"></i></a>
                                                <!-- Botao apagar -->
                                                <button type="button" title="Apagar Funcionario" class="btn btn-danger" data-toggle="modal" data-target="#modal-excluir" data-id="{{ $funcionario->id }}"><i class="dripicons-trash"></i></button>
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

        <!-- end row -->

        <!-- Modal Detalhes -->
        <div id="modal-detalhes" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detalhes do Funcionario</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="form-group col-md-12 col-sm-12">
                                <label for="name">Nome</label>
                                <input type="text" id="detalhes-name" name="detalhes-name" class="form-control" readonly>
                            </div>

                            <div class="form-group col-md-12 col-sm-12">
                                <label for="keywords">Categoria</label>
                                <input id="detalhes-categorie" name="detalhes-categorie" class="form-control" readonly>
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="description">Descrição</label>
                                <p type="text" style="word-break: break-all" id="detalhes-description" name="detalhes-description" class="form-control" readonly></p>
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="image">Imagem</label>
                                <div><img id="detalhes-image" alt="image" style="max-height: 275px; max-width: 220px; object-fit: cover;"></div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal excluir -->
        <div id="modal-excluir" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-12 text-dark" id="postModalLabel">Confirmação</h5>
                    </div>
                    <div class="modal-body" align="center">Tem certeza de que quer excluir esse Produto?</div>
                    <div class="modal-footer">
                        <form id="form-excluir" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')

                            <button type="submit" form="form-excluir" class="btn btn-danger">Excluir</button>
                        </form>
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end container -->
</div>
<!-- end wrapper -->

@endsection

@section('script')

<!-- Required datatable js -->
<script src="{{ asset('assets/sistema/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/sistema/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('assets/sistema/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/sistema/datatables/buttons.bootstrap4.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('assets/sistema/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/sistema/datatables/responsive.bootstrap4.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var table = $('.datatable').DataTable({
            "language": {
                "sProcessing": "Aguarde enquanto os dados são carregados ...",
                "sLengthMenu": "Mostrar _MENU_ registros por pagina",
                "sZeroRecords": "Nenhum registro correspondente ao criterio encontrado",
                "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
                "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
                "sInfoFiltered": "",
                "sSearch": "Procurar",
                "oPaginate": {
                    "sFirst": "Primeiro",
                    "sPrevious": "Anterior",
                    "sNext": "Próximo",
                    "sLast": "Último"
                }
            }
        });
        /* js para abrir Modal de Detalhes de forma dinâmica com as informações desejadas */
        $('#modal-detalhes').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            let modal = $(this)
            const id = button.data('id')
            const url = 'produtos/' + id
            $.getJSON(url, (resposta) => {
                $("#detalhes-name").val(resposta[0].name);
                $("#detalhes-description").html(resposta[0].description);
                $('#detalhes-image').attr('src', '/storage/' + resposta[0].image);
                $("#detalhes-categorie").val(resposta[1].categorie);
            });
        })
        /* js para abrir Modal de excluir de forma dinâmica */
        $('#modal-excluir').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            const id = button.data('id')
            $('#form-excluir').attr('action', 'produtos/' + id)
        })
    });
</script>

@endsection
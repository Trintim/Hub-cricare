@extends('layout.admin')

@section('title', 'Funcionários | Admin')

@section('content')

<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Funcionários</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->


        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    @if (isset($funcionario))
                        <h4 class="m-t-0 header-title"><b>Editar Funcionários</b></h4>
                        <p class="text-muted font-14 m-b-30">
                            Formulário para edição do Funcionário.
                        </p>
                    @else
                        <h4 class="m-t-0 header-title"><b>Criar novo Funcionário</b></h4>
                        <p class="text-muted font-14 m-b-30">
                            Formulário para criar um novo Funcionário.
                        </p>
                    @endif

                    <form id="form-funcionarios" method="POST" action=" {{ isset($funcionario) ? route("admin.funcionarios.update", $funcionario->id) : route("admin.funcionarios.store")}} " enctype="multipart/form-data">

                        @csrf
                        @isset($funcionario)
                            @method("PUT")
                        @else
                            @method("post")
                        @endisset

                        @component('admin.funcionarios.form', [ "funcionario" => isset($funcionario) ? $funcionario : null])
                        @endcomponent

                    </form>

                    <div class="d-flex justify-content-end mt-3">
                    <button type="submit" form="form-funcionarios" class="btn btn-success mr-2">Salvar</button>
                        <a href=" {{ route('admin.funcionarios.index') }}" class="btn btn-secondary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- end container -->
</div>
<!-- end wrapper -->

@endsection

@section('style')

@endsection

@section('script')
    @yield('script')
@endsection
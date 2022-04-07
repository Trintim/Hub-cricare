@extends('layout.admin')

@section('title', 'Projetos | Admin')

@section('content')

<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Projetos</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->


        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    @if (isset($portfolio))
                        <h4 class="m-t-0 header-title"><b>Editar Projeto</b></h4>
                        <p class="text-muted font-14 m-b-30">
                            Formulário para edição do Projeto.
                        </p>
                        @else
                            <h4 class="m-t-0 header-title"><b>Criar novo Projeto</b></h4>
                            <p class="text-muted font-14 m-b-30">
                                Formulário para criar um novo Projeto.
                            </p>

                    @endif

                    <form id="form-portfolio" method="POST" action=" {{ isset($portfolio) ? route("admin.portfolio.update", $portfolio->id) : route("admin.portfolio.store")}} " enctype="multipart/form-data">

                        @csrf
                        @isset($portfolio)
                            @method("PUT")
                        @else
                            @method("post")
                        @endisset

                        @component('admin.portfolio.form', [ "portfolio" => isset($portfolio) ? $portfolio : null, "categories" => $categories ])
                        @endcomponent

                    </form>

                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" form="form-portfolio" class="btn btn-success mr-2">Salvar</button>
                        <a href=" {{ route('admin.portfolio.index') }}" class="btn btn-secondary">Voltar</a>
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
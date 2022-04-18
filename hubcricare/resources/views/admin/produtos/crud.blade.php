@extends('layout.admin')

@section('title', 'Produtos | Admin')

@section('content')

<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Produtos</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->


        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    @if (isset($product))
                        <h4 class="m-t-0 header-title"><b>Editar Produto</b></h4>
                        <p class="text-muted font-14 m-b-30">
                            Formulário para edição do Produto.
                        </p>
                    @else
                        <h4 class="m-t-0 header-title"><b>Criar novo Produto</b></h4>
                        <p class="text-muted font-14 m-b-30">
                                Formulário para criar um novo Produto.
                        </p>
                    @endif

                    <form id="form-produtos" method="POST" action=" {{ isset($product) ? route("admin.produtos.update", $product->id) : route("admin.produtos.store")}} " enctype="multipart/form-data">

                        @csrf
                        @isset($product)
                            @method("PUT")
                        @else
                            @method("post")
                        @endisset

                        @component('admin.produtos.form', [ "product" => isset($product) ? $product : null, "categories" => $categories ])
                        @endcomponent

                    </form>

                    <div class="d-flex justify-content-end mt-3">
                    <button type="submit" form="form-produtos" class="btn btn-success mr-2">Salvar</button>
                        <a href=" {{ route('admin.produtos.index') }}" class="btn btn-secondary">Voltar</a>
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
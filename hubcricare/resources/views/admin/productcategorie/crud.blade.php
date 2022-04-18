@extends('layout.admin')

@section('title', 'Categorias | Admin')

@section('content')

<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Categorias de Produto</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->


        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    @if (isset($productcategorie))
                        <h4 class="m-t-0 header-title"><b>Editar Categoria</b></h4>
                        <p class="text-muted font-14 m-b-30">
                            Formulário para editar categoria.
                        </p>
                    @else
                        <h4 class="m-t-0 header-title"><b>Criar nova Categoria</b></h4>
                        <p class="text-muted font-14 m-b-30">
                            Formulário para criar nova categoria.
                        </p>
                    @endif

                    <form id="form-productcategorie" method="POST" action=" {{ isset($productcategorie) ? route("admin.productCategories.update", $productcategorie->id) : route("admin.productCategories.store")}} " enctype="multipart/form-data">

                        @csrf
                        @isset($productcategorie)
                        @method("PUT")
                        @else
                        @method("post")
                        @endisset

                        @component('admin.productcategorie.form', [ "productcategorie" => isset($productcategorie) ? $productcategorie : null ])
                        @endcomponent

                    </form>

                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" form="form-productcategorie" class="btn btn-success mr-2">Salvar</button>
                        <a href=" {{ route('admin.productCategories.index') }}" class="btn btn-secondary">Voltar</a>
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
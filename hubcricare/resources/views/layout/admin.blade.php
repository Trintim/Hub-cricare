<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link href="{{asset('assets/img/logobrancah.png')}}" rel="icon" style="width: 16px; height: 16px;">

    <!-- App css -->
    <link href="{{ asset('assets/sistema/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/sistema/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/sistema/css/style.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('assets/sistema/js/modernizr.min.js') }}"></script>

    @yield('style')
</head>

<body>

    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">

                <!-- Logo container-->
                <div class="logo">
                    <!-- Text Logo -->
                    <a href="{{route('admin.home')}}" class="logo me-auto me-lg-0">
                        <img src="{{asset('assets/img/logobrancah.png')}}" alt="" class="img-fluid logo logo-sm">
                    </a>
                </div>
                <!-- End Logo container-->

                <div class="menu-extras topbar-custom">

                    <ul class="list-unstyled topbar-right-menu float-right mb-0">

                        <li class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                        <li class="dropdown notification-list">

                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" style="display: flex; align-items:center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="width: 24px; height:24px;">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg></i><span class="ml-1 pro-user-name"><i class="mdi mdi-chevron-down"></i> </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                                <!-- item-->
                                <a href="" data-toggle="modal" data-target="#modal-user" data-id="{{ Auth::user()->id }}" class="dropdown-item notify-item">
                                    <i class="fi-head"></i> <span>Atualizar perfil</span>
                                </a>

                                <!-- item-->
                                <a href=" {{ route('admin.logout') }} " class="dropdown-item notify-item">
                                    <i class="fi-power"></i> <span>Sair</span>
                                </a>

                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end menu-extras -->

                <div class="clearfix"></div>

            </div> <!-- end container -->
        </div>
        <!-- end topbar-main -->

        <div class="navbar-custom">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href=" {{route('admin.home')}} "><i class="fi-air-play"></i>Dashboard</a>
                        </li>

                        <li class="has-submenu">
                            <a href=" {{route('admin.produtos.index')}} "><i class="fi-briefcase"></i>Produtos</a>
                        </li>

                        <li class="has-submenu">
                            <a href=" {{route('admin.productCategories.index')}} "><i class="fi-tag"></i>Categoria Dos Produtos</a>
                        </li>

                    </ul>
                    <!-- End navigation menu -->
                </div> <!-- end #navigation -->
            </div> <!-- end container -->
        </div> <!-- end navbar-custom -->
    </header>
    <!-- End Navigation Bar-->
    @include('components.alerts')
    @yield('content')

    <div id="modal-user" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Atualizar Meus Dados</h5>
                </div>
                <div class="modal-body">
                    <div class="row" style="justify-content: center;">
                        <form id="form-post" method="POST" class="user-form" action="{{ route('admin.user.update', Auth::user()->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="name">Nome</label>
                                    <input type="text" id="user-name" name="name" class="form-control user-form @error('name') is-invalid @enderror" placeholder="Nome de usuário" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <label for="email">Email</label>
                                    <input type="text" id="user-email" name="email" class="form-control user-form @error('email') is-invalid @enderror" placeholder="Email" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6">
                                    <label for="oldpassword">Senha Atual</label>
                                    <input type="password" name="oldpassword" class="form-control user-form @error('oldpassword') is-invalid @enderror" placeholder="Digite a senha atual" required>
                                    @error('oldpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <label for="password">Nova Senha</label>
                                    <input type="password" name="password" class="form-control user-form @error('password') is-invalid @enderror" placeholder="Digite a nova senha">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" form="form-post" class="btn btn-success mr-2">Salvar</button>
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    2022 Hub do Cricaré - Soluções Tecnologicas
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- jQuery  -->
    <script src="{{ asset('assets/sistema/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/sistema/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/sistema/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/sistema/js/waves.js') }}"></script>
    <script src="{{ asset('assets/sistema/js/jquery.slimscroll.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/sistema/js/jquery.core.js') }}"></script>
    <script src="{{ asset('assets/sistema/js/jquery.app.js') }}"></script>

    <!-- CKEDITOR -->
    <!-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.ckeditor').ckeditor();
            });
        </script> -->

    @yield('script')
</body>

</html>
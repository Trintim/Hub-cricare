<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Login</title>
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

    </head>


    <body class="bg-accpunt-pages bg-gray-200" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80'); background-size:cover; background-position: center;">

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
                                                <img src="{{asset('assets/img/logobrancah.png')}}" alt="" class="img-fluid logo logo-sm">
                                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Login Admin</h4>
                                            </div>
                                        </div>
                                        <div class="account-content">
                                            <form class="form-horizontal" action="{{ route('admin.login.post') }}" method="post">
                                                @csrf
                                                <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" required="" placeholder="Email">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <i class="fi-circle-cross"></i><strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" required="" placeholder="Senha">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <i class="fi-circle-cross"></i><strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-block btn-gradient waves-effect waves-light" type="submit">Entrar</button>
                                                </div>
                                            </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <!-- end card-box-->
                            </div>
                            <!-- end wrapper -->
                        </div>
                    </div>
                </div>
        </section>
        <!-- END HOME -->


        <!-- jQuery  -->
        <script src="{{ asset('assets/sistema/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/sistema/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/sistema/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/sistema/js/waves.js') }}"></script>
        <script src="{{ asset('assets/sistema/js/jquery.slimscroll.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/sistema/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/sistema/js/jquery.app.js') }}"></script>

    </body>

</html>
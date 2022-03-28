<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> Hub do Cricaré</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/icon.png" rel="icon">
    <link href="assets/img/icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- =======================================================
  * Template Name: Gp - v4.6.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <!-- <h1 class="logo me-auto me-lg-0"><a href="">HUB do Cricaré.</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="/" class="logo me-auto me-lg-0"><img src="assets/img/logo3.png" alt="" class="img-fluid"></a>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Sobre Nós</a></li>
                    <li><a class="nav-link scrollto" href="#services">Serviços</a></li>
                    <li><a class="nav-link scrollto " href="#clients">Clientes</a></li>
                    <li><a class="nav-link scrollto" href="#clients">Parceiros</a></li>
                    <li><a class="nav-link scrollto" href="#team">Perguntas</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

            <a href="#contact" class="get-started-btn scrollto">Contato</a>

        </div>
    </header>


    @yield('content')


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 mb-6 mb-md-0 footer-links">
                        <div class="footer-info">
                            <h3>HUB do Cricaré.</h3>
                            <p>
                                Rua Humberto de Almeida Francklin, 217, <br> B. Universitário São Mateus - Espírito Santo | CEP:
                                29.933.415<br><br>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-6 mb-6 mb-md-0 footer-links">
                        <div class="footer-info">

                            <h3>Contato</h3>
                            <p>
                                <strong>Telefone:</strong> (27) 3313-0000<br>
                                <strong>Email:</strong> contato@hubdocricare.com<br>
                            </p>
                            <div class="social-links mt-3" style="text-align: -webkit-center;">
                                <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                                <!-- <a href="https://www.facebook.com/hubdocricare" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                                <a href="https://instagram.com/hubcricare?utm_medium=copy_link" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a> -->
                                <a href="https://www.facebook.com/hubdocricare" target="_blank"><img src="https://img.icons8.com/color/36/000000/facebook-new.png" /></a>
                                <a href="https://instagram.com/hubcricare?utm_medium=copy_link" target="_blank"><img src="https://img.icons8.com/color/36/000000/instagram-new--v1.png" /></a>
                                <a href="https://wa.me/5527998028696?text=Ol%C3%A1%2C+venha+tirar+suas+d%C3%BAvidas+com+a+gente" target="_blank"><img src="https://img.icons8.com/color/36/000000/whatsapp--v1.png" /></a>
                                <!-- <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a> -->
                                <!--
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                -->
                                <a href=""><img src="" alt=""></a>
                            </div>
                        </div>
                    </div>


                    <!-- <div class="col-md-7 ms-auto footer-links">
                        <div class="row site-section pt-0">
                            <div class="col-md-4 mb-4 mb-md-0">
                                <h3>Navegação</h3>
                                <ul class="list-unstyled">
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#about">Sobre Nós</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#services">Serviços</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#clients">Clientes</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#clients">Parceiros</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#team">Perguntas</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-0">
                                <h3>Serviços</h3>
                                <ul class="list-unstyled">
                                    <br>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#services">Serviços Corporativos</a></li><br>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#services">Assessoria Juridica</a></li><br>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#services">Plataformas Educacionais</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-0">
                                <h3></h3>
                                <ul class="list-unstyled">
                                    <br><br>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#services">Gerenciamento de Transmissões</a></li>
                                    <br>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#services">Marketing Digital</a></li><br>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#services">Servidores</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>HUB</span></strong>. Todos os Direitos Reservados
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                Desenvolvido por <a href="https://hubdocricare.com.br/">Hub do Cricaré</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $("#btn-mensagem").click(function() {
            $("#modal-mensagem").modal();
        });
    </script>
    <script>
        var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
        var alertTrigger = document.getElementById('liveAlertBtn')

        function alert(message, type) {
            var wrapper = document.createElement('div')
            wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

            alertPlaceholder.append(wrapper)
        }

        if (alertTrigger) {
            alertTrigger.addEventListener('click', function() {
                alert('Obrigado, recebemos sua mensagem com sucesso!', 'success')
            })
        }
    </script>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
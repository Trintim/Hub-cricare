@extends('layout.site')

@section('title')
    Hub do Cricaré
@endsection

@section('content')


<!--=======Hero Section=======-->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>Conheça o HUB do Cricaré.</h1>
                <h2 class="type-animation">Inovar é mudar. Fazer diferente.</h2>
            </div>
        </div>
    </div>

    <a href="https://wa.me/5527998028696?text=Ol%C3%A1%2C+venha+tirar+suas+d%C3%BAvidas+com+a+gente" class="float" target="_blank">
        <div class="whatsapp">
            <i class="bi bi-whatsapp"></i>
        </div>
    </a>
</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img//team/time1.jpg" class="d-block w-100" alt="..." style="width: 100%; height: 360px; object-fit:cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img//team/time3.jpg" class="d-block w-100" alt="..." style="width: 100%; height: 360px; object-fit:cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img//team/time0.jpg" class="d-block w-100" alt="..." style="width: 100%; height: 360px; object-fit:cover;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <h3>Sobre o Hub do Cricaré.</h3>
                    <p class="fst-italic">
                        O Hub do cricaré é um espaço de conexão em prol da inovação, onde construímos valores e desenvolvemos ideias.
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Onde a inovação é nossa inspiração</li>
                        <li><i class="ri-check-double-line"></i> Acesso a uma estrutura física adequada</li>
                        <li><i class="ri-check-double-line"></i> Oportunidade para empresas e investidores</li>
                        <li><i class="ri-check-double-line"></i> Cultura inovadora e com ampla colaboração entre os membros</li>
                        <li><i class="ri-check-double-line"></i> Desenvolver soluções com o envolvimento direto de vários setores
                            da empresa.</li>
                    </ul>
                    <p>
                        Temos como finalidade solucionar desafios tecnológicos de instituições e/ou empresas, públicas ou
                        privadas.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">
            <div class="section-title">
                <h2>Clientes</h2>
                <p>Veja quem são nossos clientes e parceiros</p>
            </div>

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-10.png" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="image col-lg-6" style='background-image: url("assets/img/features.jpg");' data-aos="fade-right">
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                        <i class="bi bi-people"></i>
                        <h4>O que é um HUB?</h4>
                        <p>Os hubs de inovação são espaços que recebem negócios ainda pouco maduros e oferecem oportunidades de
                            transformá-los em startups.</p>
                    </div>
                    <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Criando Conexões</h4>
                        <p>Os hubs possuem espaços compartilhados e realizam diversos eventos que propiciam trocas entre as
                            pessoas que transitam pelo local.</p>
                    </div>
                    <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                        <i class="bi bi-bar-chart"></i>
                        <h4>Oportunidades</h4>
                        <p>Quando integram a rede de um hub de inovação, os empreendedores se tornam visíveis a quem pode
                            disponibilizar recursos para fazer o negócio prosperar.</p>
                    </div>
                    <!--
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-shield"></i>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
            -->
                </div>
            </div>

        </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>Agende uma visita agora mesmo</h3>
                <p>Deseja conhecer nosso espaço, marque agora mesmo... e venha nos conhecer pessoalmente :)</p>
                <a class="cta-btn" href="#contact">Marcar</a>
            </div>

        </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Serviços</h2>
                <p>O que temos no Hub do Cricaré</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card">
                        <div class="content">
                            <div class="front">
                                <img style="width: 100%; height: 100%;" src="{{ asset('assets/img/drones.jpg') }}" alt="Imagem drone">
                            </div>
                            <div class="back">
                                <div class="icon-back">
                                    <p>Aluguel de Impressoras e Projetores, Telefonia Via IP, Mapeamento de Drones, Tour Virtual e Manutenção de computadores</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card">
                        <div class="content">
                            <div class="front">
                                <div class="icon-front">
                                    <div class="icon">
                                        <i class="bi bi-laptop"></i>
                                    </div>
                                    <h4><a>Desenvolvimento de Plataformas Educacionais</a></h4>
                                </div>
                            </div>
                            <div class="back">
                                <div class="icon-back">
                                    <p>Moodle (Instalação, Customização Ava), Revistas Eletrônicas OJS, Repositório Institucional e Processo de Digitação de Arquivos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card">
                        <div class="content">
                            <div class="front">
                                <div class="icon-front">
                                    <div class="icon">
                                        <i class="bi bi-camera-reels"></i>
                                    </div>
                                    <h4><a>Gerenciamento de Transmissões</a></h4>
                                </div>
                            </div>
                            <div class="back">
                                <div class="icon-back">
                                    <p>Gestão de Lives, OBS Studio, YouTube, Facebook e Instagram</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card">
                        <div class="content">
                            <div class="front">
                                <div class="icon-front">
                                    <div class="icon">
                                        <i class="bx bx-arch"></i>
                                    </div>
                                    <h4><a>Assessoria Jurídica</a></h4>
                                </div>
                            </div>
                            <div class="back">
                                <div class="icon-back">
                                    <p>Segurança Jurídica para seu Negócio, Disputas Judiciais, Divisão Societária, Problemas com contrato, entre outros tipos de serviços Jurídicos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card">
                        <div class="content">
                            <div class="front">
                                <img style="width: 100%; height: 100%;" src="{{ asset('assets/img/desenvolvimento.jpg') }}" alt="Desenvolvimento">
                            </div>
                            <div class="back">
                                <div class="icon-back">
                                    <p>Gerenciamento de Mídia Social, Desenvolvimento de Sites, Criação e Edição de Vídeos Institucionais, Trafego Pago e Material Gráfico</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card">
                        <div class="content">
                            <div class="front">
                                <img style="width: 100%; height: 100%;" src="{{ asset('assets/img/servidorw.jpg') }}" alt="Servidor">
                            </div>
                            <div class="back">
                                <div class="icon-back">
                                    <p>Implantação de Servidores Linux, Windows Server e Apache</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>

    </div>
    </div>

    </div>
    </section>



    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Dúvidas</h2>
                <p>Perguntas Frequentes</p>
            </div>

            <div class="container">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- F.A.Q List 1-->
                            <div class="accordion accordion-flush" id="faqlist1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1" style="font-size: 1.5rem;">
                                            Qualquer pessoa pode ter acesso ao HUB do Cricaré?
                                        </button>
                                    </h2>
                                    <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                        <div class="accordion-body">
                                            Sim, quais quer pessoas, instituições de ensino, empresas que tenham uma ideia inovadora e
                                            queira tira-la do papel são bem vindas!
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2" style="font-size: 1.5rem;">
                                            Qual é o horário de funcionamento do HUB?
                                        </button>
                                    </h2>
                                    <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                        <div class="accordion-body">
                                            O local físico do HUB funciona de 08:00 as 18:00 horas. Mas você pode nos contatar a qualquer hora
                                            pelas redes sociais.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">

                            <!-- F.A.Q List 2-->
                            <div class="accordion accordion-flush" id="faqlist2">

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1" style="font-size: 1.5rem;">
                                            Posso utilizar a estrutura do HUB à qualquer momento?
                                        </button>
                                    </h2>
                                    <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                        <div class="accordion-body">
                                            Sim, porem com agendamento de horário previo, pois nossas equipes estão trabalhando em
                                            determinados momentos.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2" style="font-size: 1.5rem;">
                                            Quais são as vantagens de ser um parceiro do HUB do Cricaré?
                                        </button>
                                    </h2>
                                    <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                        <div class="accordion-body">
                                            Sua marca será divulgada por nós e pela Universidade Vale do Cricaré dando mais visibilidade a
                                            sua empresa.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


            </div>
    </section>
    <!-- End Team Section -->

    <!-- <section id="team" class="team">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>Equipe</h2>
                <p>Nossos membros</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img"> <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            <div class="social"> 
                                <a href=""><i class="bi bi-twitter"></i></a> 
                                <a href=""><i class="bi bi-facebook"></i></a> 
                                <a href=""><i class="bi bi-instagram"></i></a> 
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Victor Trintim</h4> <span>Desenvolvedor Web</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img"> <img src="assets/img/vitor.jpg" class="img-fluid" alt="">
                            <div class="social"> 
                                <a href=""><i class="bi bi-twitter"></i></a> 
                                <a href=""><i class="bi bi-facebook"></i></a> 
                                <a href=""><i class="bi bi-instagram"></i></a> 
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Victor Trintim</h4> <span>Desenvolvedor Web</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img"> <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            <div class="social"> 
                                <a href=""><i class="bi bi-twitter"></i></a> 
                                <a href=""><i class="bi bi-facebook"></i></a> 
                                <a href=""><i class="bi bi-instagram"></i></a> 
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Victor Trintim</h4> <span>Desenvolvedor Web</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img"> <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            <div class="social"> 
                                <a href=""><i class="bi bi-twitter"></i></a> 
                                <a href=""><i class="bi bi-facebook"></i></a> 
                                <a href=""><i class="bi bi-instagram"></i></a> 
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Victor Trintim</h4> <span>Desenvolvedor Web</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section> -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contato</h2>
                <p>Contate-nos</p>
            </div>
            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Endereço:</h4>
                            <p>Rua Humberto de Almeida Francklin, 217, B. Universitário São Mateus - Espírito Santo | CEP:
                                29.933.415
                            </p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>E-mail:</h4>
                            <p>contato@hubdocricare.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Telefone:</h4>
                            <p>(27) 3313-0000</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0" style="margin-bottom: 20px;">
                    <form action="{{ route('site.contato') }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div id="liveAlertPlaceholder"></div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Seu melhor E-mail" required>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6 form-group">
                                <br>
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Motivo do contato" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <br>
                                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone/ Celular" required>
                            </div>
                        </div>


                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Mensagem"></textarea>
                            <br>
                        </div>

                        <!-- <button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button> -->

                        <div class="text-center">
                            <button style="background: #35ecbe;
                                    border: 0;
                                    padding: 10px 24px;
                                    color: #151515;
                                    transition: 0.4s;
                                    border-radius: 4px;" type="submit" class="btn btn-primary" id="liveAlertBtn">Enviar</button>
                        </div>


                    </form>
                    <!-- Button trigger modal -->
                </div>

            </div>
            <div>
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3778.687821542588!2d-39.847391984617346!3d-18.722789487291642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xca0d386e92b0fd%3A0x55b36ec246ae1e91!2sR.%20Humberto%20de%20Almeida%20Franklin%2C%20217%20-%20Universit%C3%A1rio%2C%20S%C3%A3o%20Mateus%20-%20ES%2C%2029941-360!5e0!3m2!1spt-BR!2sbr!4v1636569031498!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen></iframe>
            </div>

        </div>

    </section>

    <!-- End Contact Section -->

</main>
<!-- End #main -->
@endsection
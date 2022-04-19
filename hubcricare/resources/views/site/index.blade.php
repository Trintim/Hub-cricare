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
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><svg id="Layer_1" height="32" viewBox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m7 14a1 1 0 0 1 -1 1h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 1 1zm4-1h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2zm-5 4h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2zm5 0h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2zm-5-12h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2zm5 0h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2zm-5 4h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2zm5 0h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2zm13 1v9a5.006 5.006 0 0 1 -5 5h-14a5.006 5.006 0 0 1 -5-5v-14a5.006 5.006 0 0 1 5-5h6a5.006 5.006 0 0 1 5 5h3a5.006 5.006 0 0 1 5 5zm-19 12h9v-17a3 3 0 0 0 -3-3h-6a3 3 0 0 0 -3 3v14a3 3 0 0 0 3 3zm17-12a3 3 0 0 0 -3-3h-3v15h3a3 3 0 0 0 3-3zm-3 3a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm0 4a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm0-8a1 1 0 1 0 1 1 1 1 0 0 0 -1-1z"/></svg></div>
                        <h4><a>Serviços Corporativos</a></h4>
                        <p>Aluguel de Impressoras e Projetores, Telefonia Via IP, Mapeamento de Drones, Tour Virtual e Manutenção de computadores</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><svg id="Layer_1" height="32" viewBox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m19 1h-14a5.006 5.006 0 0 0 -5 5v12a5.006 5.006 0 0 0 5 5h14a5.006 5.006 0 0 0 5-5v-12a5.006 5.006 0 0 0 -5-5zm-14 2h14a3 3 0 0 1 3 3v1h-20v-1a3 3 0 0 1 3-3zm14 18h-14a3 3 0 0 1 -3-3v-9h20v9a3 3 0 0 1 -3 3zm0-8a1 1 0 0 1 -1 1h-12a1 1 0 0 1 0-2h12a1 1 0 0 1 1 1zm-4 4a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 1 1zm-12-12a1 1 0 1 1 1 1 1 1 0 0 1 -1-1zm3 0a1 1 0 1 1 1 1 1 1 0 0 1 -1-1zm3 0a1 1 0 1 1 1 1 1 1 0 0 1 -1-1z"/></svg></div>
                        <h4><a>Desenvolvimento de Plataformas Educacionais</a></h4>
                        <p>Moodle (Instalação, Customização Ava), Revistas Eletrônicas OJS, Repositório Institucional e Processo de Digitação de Arquivos</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Outline" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="32" height="32">
                            <path d="M488.533,191.04c-14.409-7.302-31.716-5.78-44.629,3.925L404.8,224c-5.544-54.472-51.38-95.931-106.133-96h-1.813  l-87.936-87.915c-11.967-12.051-28.264-18.805-45.248-18.752H21.333C9.551,21.333,0,30.885,0,42.667S9.551,64,21.333,64h142.336  c5.655,0.015,11.075,2.261,15.083,6.251L236.501,128H106.667C47.786,128.071,0.071,175.786,0,234.667v170.667  C0.071,464.214,47.786,511.93,106.667,512h192c54.754-0.069,100.589-41.528,106.133-96l39.04,29.099  c18.851,14.138,45.595,10.318,59.733-8.533c5.539-7.385,8.533-16.368,8.533-25.6V229.184  C512.162,213.015,503.02,198.222,488.533,191.04z M362.667,405.333c0,35.346-28.654,64-64,64h-192c-35.346,0-64-28.654-64-64  V234.667c0-35.346,28.654-64,64-64h192c35.346,0,64,28.654,64,64V405.333z M469.333,410.816l-64-47.701v-86.229l64-47.701V410.816z"/>
                            </svg>
                        </div>
                        <h4><a>Gerenciamaneto de Transmissõs</a></h4>
                        <p>Gestão de Lives, OBS Studio, YouTube, Facebook e Instagram</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32"><title>Businessman</title><g id="Business_Man" data-name="Business Man"><path d="M22.67,8.878a1.989,1.989,0,0,1-.3-.022A11.017,11.017,0,0,1,18,7.208,10.954,10.954,0,0,1,12,9a10.925,10.925,0,0,1-2.978-.427C9.013,8.715,9,8.856,9,9A7,7,0,0,0,23,9c0-.053-.007-.1-.008-.157A2.033,2.033,0,0,1,22.67,8.878Z"/><path d="M12,7a8.955,8.955,0,0,0,6-2.3,8.971,8.971,0,0,0,4.67,2.183A6.994,6.994,0,0,0,9.427,6.613,8.925,8.925,0,0,0,12,7Z"/><path d="M18,17l-1,2,1.677,5.868a2,2,0,0,1-.509,1.964l-1.461,1.461a1,1,0,0,1-1.414,0l-1.461-1.461a2,2,0,0,1-.509-1.964L15,19l-1-2a9,9,0,0,0-9,9v1a3,3,0,0,0,3,3H24a3,3,0,0,0,3-3V26A9,9,0,0,0,18,17Z"/></g></svg></i></div>
                        <h4><a>Assessoria Jurídica</a></h4>
                        <p>Segurança Jurídica para seu Negócio, Disputas Judiciais, Divisão Societária, Problemas com contrato, entre outros tipos de serviços Jurídicos.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="32" height="32"><path d="M12,0A12.013,12.013,0,0,0,0,12c-.126,9.573,11.159,15.429,18.9,9.817a1,1,0,1,0-1.152-1.634C11.3,24.856,1.9,19.978,2,12,2.549-1.266,21.453-1.263,22,12v2a2,2,0,0,1-4,0V12C17.748,4.071,6.251,4.072,6,12a6.017,6.017,0,0,0,10.52,3.933A4,4,0,0,0,24,14V12A12.013,12.013,0,0,0,12,0Zm0,16a4,4,0,0,1,0-8A4,4,0,0,1,12,16Z"/></svg></div>
                        <h4><a>Marketing Digital</a></h4>
                        <p>Gerenciamento de Mídia Social, Desenvolvimento de Sites, Criação e Edição de Vídeos Institucionais, Trafego Pago e Material Gráfico</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><svg id="Layer_1" height="32" viewBox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m21 17h-11v2a1 1 0 0 1 -2 0v-2h-2v2a1 1 0 0 1 -2 0v-2h-1a3 3 0 0 0 0 6h18a3 3 0 0 0 0-6z"/><path d="m21 9h-11v2a1 1 0 0 1 -2 0v-2h-2v2a1 1 0 0 1 -2 0v-2h-1a3 3 0 0 0 0 6h18a3 3 0 0 0 0-6z"/><path d="m21 1h-11v2a1 1 0 0 1 -2 0v-2h-2v2a1 1 0 0 1 -2 0v-2h-1a3 3 0 0 0 0 6h18a3 3 0 0 0 0-6z"/></svg></i></div>
                        <h4><a>Implantação de Servidores</a></h4>
                        <p>Implantação de Servidores Linux, Windows Server e Apache</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

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

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Produtos</h2>
                <p>Nossos Produtos</p>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @for ($i = (count($products)-1); $i >= (count($products) - ((count($products)>=3) ? 3 : count($products))); $i--)
                    @foreach ($products as $status => $product)
                        @if (!$status)
                            <div class="col-lg-4 col-md-6 portfolio-item">
                                <div class="portfolio-wrap">
                                    <img src="{{ url('storage/' . $products[$i]->image) }}" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <a href="{{ route('site.product', $products[$i]->id) }}" title="Mais Detalhes">
                                            <h4>{{$products[$i]->name}}</h4>
                                            @foreach ($categories as $categorie)
                                                @if ($categorie->id == $products[$i]->productcategorie_id)
                                                    <p>{!! $categorie->categorie !!}</p>
                                                @endif
                                            @endforeach
                                            <div class="portfolio-links">
                                                <a href="{{ route('site.product', $products[$i]->id) }}" title="Mais Detalhes"><i class="bx bx-plus"></i></a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endfor
            </div>
            <div style="display: flex; align-items: center; justify-content:center; padding:30px 30px 0 30px;">
                <a class="btn btn-product" href="{{ route('site.produtos') }}" role="button">Veja Mais</a>
            </div>
        </div>
    </section><!-- End Portfolio Section -->

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
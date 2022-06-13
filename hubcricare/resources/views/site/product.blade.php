@extends('layout.site')

@section('content')

<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

        <div class="text-center">
            <h3>Detalhes do Produto</h3>
        </div>

    </div>
</section>

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <img src="/storage/{{$product->image}}" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div style="display: flex; align-items: center; justify-content:center; padding: 20px 0;">
                    <a class="btn btn-product" href="https://api.whatsapp.com/send?phone=5527998028696&text=Olá,%20gostaria%20de%20saber%20mais%20informações%20sobre%20os%20valores%20de%20determinado%20produto..." role="button">Solicite um Orçamento</a>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Informações do Serviço</h3>
                    <ul>
                        <li><strong>Categoria</strong>: {{$categorie->categorie}}</li>
                        {{-- <li><strong>Data de Inclusão do Produto</strong>: {{$product->created_at->locale('pt-BR')->translatedFormat('d F Y')}}</li> --}}
                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>Detalhes do produto - {{$product->name}}</h2>
                    <p>
                        {{$product->description}}
                    </p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Details Section -->

@endsection
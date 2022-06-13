@extends('layout.site')

@section('content')

    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>Confira Nosso Catálogo de Serviços</h3>
            </div>

        </div>
    </section>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Serviços</h2>
                <p>Todos Os Nossos Serviços</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach($categories as $categorie)
                        <li data-filter=".filter-{{$categorie->id}}">{{ $categorie->categorie }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @for ($i = (count($products)-1); $i >= 0; $i--)
                    @foreach ($products as $status => $product)
                        @if(!$status)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-{{$products[$i]->productcategorie_id}}">
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

        </div>
    </section><!-- End Portfolio Section -->

@endsection
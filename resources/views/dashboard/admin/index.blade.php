@section('css-aux')
    <link href="{{ asset('assets/template/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

<div>

    <style>
        .hero-page {
            margin-top: 20px;

        }

        .hero-page .card {
            border-radius: 20px;
        }

        .cards-ano {
            display: flex;
            justify-content: stretch;
            margin-bottom: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 15px;
        }

        .cards-ano a {
            padding: 15px;
            text-decoration: none;
            color: #000;
            margin-right: 10px;
            background-color: #fff;
            border-radius: 10px;
            font-weight: bold;
            border: #cccccc solid 1px;
        }

        .cards-ano a:hover {
            background-color: #FFDD01;
            color: #fff;
            border: none;
        }

        .dash-nft .card-body .row {
            padding: 10px 0px;
        }

        .dash-nft .card-body .row .col {
            border: #cccccc solid 1px;
            border-radius: 10px;
            margin-left: 10px;
            width: 230px;
        }
    </style>

    <div class="row hero-page">
        <div class="col-lg-12">
            <div class="card bg-soft-primary">
                <div class="px-4">
                    <div class="row">
                        <div class="col-xxl-12 align-self-center text-center">
                            <div class="py-4">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/abwrkdvl.json" trigger="loop" stroke="regular"
                                    state="loop-all" colors="primary:#4030e8,secondary:#4030e8"
                                    style="width:100px;height:100px">
                                </lord-icon>
                                <h5 class="display-6">CEFOnline | Painel do Administrador</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!--end col-->.
    </div>

    <div class="row dash-nft">
        <div class="col-xxl-9">
            <div class="row">
                <div class="col-xl-9">
                    <div class="card overflow-hidden">
                        <div class="card-body bg-marketplace d-flex">
                            <div class="flex-grow-1">
                                <h4 class="fs-18 lh-base fw-bold mb-0">{{ Auth::user()->getPessoa->nome }}, bem-vindo ao
                                    painel de controle das
                                    <br><span class="text-success">Formações.</span>
                                </h4>
                                {{-- <p class="mb-0 mt-2 pt-1 text-muted">The world's first and largest digital
                                    marketplace.</p> --}}
                                <div class="d-flex gap-3 mt-4">
                                    <a href="{{ route('admin.formacoes.cadastrar') }}" class="btn btn-primary">Cadastrar
                                        Nova
                                        Formação </a>
                                    {{-- <a href="" class="btn btn-success">Candidaturas</a> --}}
                                </div>
                            </div>
                            <img src="assets/images/bg-d.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xl-3 col-md-3">
                    <div class="card card-height-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 ps-3">
                                    <h5 class="text-muted text-uppercase fs-13 mb-0">Total Formações</h5>
                                </div>
                            </div>
                            <div class="mt-4 pt-1">
                                <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value"
                                        data-target="{{ count($formacoes) }}"></span> </h4>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h5>Candidaturas Por Ano</h5>
                    <div class="cards-ano">
                        <a href="{{ route('admin.formandos.antigos') }}">Formandos Antigos</a>
                        @foreach ($lista_anos as $ano)
                            <a href="{{ route('candidaturas.todas', $ano->id) }}">Candidaturas {{ $ano->descricao }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row dash-nft">
                <div class="col-xxl-12">

                    <h5>Dados de Resumo Geral</h5>
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                                <div class="col mb-3">
                                    <div class="py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Formações
                                        </h5>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0"><span class="counter-value"
                                                        data-target="{{ count($formacoes) }}">0</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col mb-3">
                                    <div class="mt-3 mt-md-0 py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Candidaturas pagas
                                        </h5>
                                        <div class="d-flex align-items-center">
                                      
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0"><span class="counter-value"
                                                        data-target="{{ $total[0] }}">0</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col mb-3">
                                    <a href="{{ route('candidaturas.pendentes', 'masc') }}">
                                        <div class="mt-3 mt-md-0 py-4 px-3">
                                            <h5 class="text-muted text-uppercase fs-13">Candidaturas Pendentes
                                                (Masculino)
                                            </h5>
                                            <div class="d-flex align-items-center">
                                            
                                                <div class="flex-grow-1 ms-3">
                                                    <h2 class="mb-0"><span class="counter-value"
                                                            data-target="{{ $total[1] }}">0</span>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-3">
                                    <a href="{{ route('candidaturas.pendentes', 'fem') }}">
                                        <div class="mt-3 mt-md-0 py-4 px-3">
                                            <h5 class="text-muted text-uppercase fs-13">Candidaturas Pendentes
                                                (FemInino)
                                            </h5>
                                            <div class="d-flex align-items-center">
                                        
                                                <div class="flex-grow-1 ms-3">
                                                    <h2 class="mb-0"><span class="counter-value"
                                                            data-target="{{ $total[2] }}">0</span>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-3">
                                    <div class="mt-3 mt-lg-0 py-4 px-3">
                                        <h5 class="text-muted text-uppercase fs-13">Formandos
                                        </h5>
                                        <div class="d-flex align-items-center">
                                      
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="mb-0"><span class="counter-value"
                                                        data-target="{{ $total[3] }}">0</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>
                    </div>

                </div><!--end col-->
            </div>


            <div class="row">
                <div class="col-xxl-12">
                    <div class="swiper marketplace-swiper rounded gallery-light">
                        <div class="d-flex pt-2 pb-4">
                            <h5 class="card-title fs-18 mb-1">Formações</h5>
                        </div>
                        <div class="swiper-wrapper">
                            @foreach ($formacoes as $item)
                                <div class="swiper-slide">
                                    <div class="card explore-box card-animate rounded">
                                        <div class="explore-place-bid-img">
                                            <img src="{{ asset('assets/template/images/demos/cartaz_fio_2025.jpg') }}" alt=""
                                                class="img-fluid card-img-top explore-img" />
                                            <div class="bg-overlay"></div>
                                        </div>
                                        <div class="card-body">
                                            {{-- <p class="fw-medium mb-0 float-end"><i
                                                    class="mdi mdi-heart text-danger align-middle"></i> 37.41k </p> --}}
                                            <h5 class="mb-1"><a href="apps-nft-item-details.html"
                                                    class="link-dark">{{ $item->descricao }}</a></h5>
                                            <p class="text-muted mb-0">{{ $item->getTipoformacao->descricao }}</p>
                                        </div>
                                        <div class="card-footer border-top border-top-dashed">
                                            <div class="d-flex align-items-center">
                                                {{-- <div class="flex-grow-1 fs-14">
                                                    <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i>
                                                    Highest: <span class="fw-medium">10.35ETH</span>
                                                </div> --}}
                                                <h5 class="flex-shrink-0 fs-14 text-primary mb-0">
                                                    Formandos: {{ count($item->getAlunos) }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> --}}
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end col-->
    </div>
    <!--end row-->

</div>

@section('script-aux')
    <!-- apexcharts -->
    <script src="{{ asset('assets/template/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('assets/template/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('assets/template/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/template/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!-- Countdown js -->
    <script src="{{ asset('assets/template/js/pages/coming-soon.init.js') }}"></script>

    <!-- Marketplace init -->
    <script src="{{ asset('assets/template/js/pages/dashboard-nft.init.js') }}"></script>
@endsection
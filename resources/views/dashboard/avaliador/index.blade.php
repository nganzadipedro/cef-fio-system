@section('css-aux')
    <link href="{{ asset('assets/template/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

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

<div>
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
                                <h5 class="display-6">PAINEL DO CPL<br>VERIFICAÇÃO DE DECLARAÇÕES</h5>
                                <h4>Seja Bem-Vindo, {{ Auth::user()->getpessoa->nome }}</h4>
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
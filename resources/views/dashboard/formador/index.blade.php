<!-- start page title -->
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

    .item-turma {
        padding: 10px;
        border: solid 1px #000000;
        border-radius: 15px;
    }

    .item-turma h3 {
        font-weight: bold;
        font-size: 16px;
    }

    .item-turma h4 {
        font-weight: bold;
        font-size: 14px;
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
                                <h5 class="display-6">CEFOnline | PAINEL DO FORMADOR</h5>
                                <h4>Seja Bem-Vindo de volta, {{ Auth::user()->getpessoa->nome }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!--end col-->

    <div class="row">
        <div class="col-xxl-12">
            <div class="d-flex flex-column h-100">
                <div class="row h-100">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="alert alert-success border-0 rounded-0 m-0 d-flex align-items-center"
                                    role="alert">

                                    <div class="flex-grow-1 text-truncate">
                                        Bem-vindo ao CEFOnline || Visualize a seguir as suas turmas
                                    </div>

                                </div>

                                <div class="row align-items-end">
                                    @foreach ($turmas as $item)
                                        @if ($item->getTurma->ativo == 'sim')
                                            <div class="col-sm-12 col-lg-3 col-xs-12 col-md-3">
                                                <div class="p-3 text-center">

                                                    <div class="mt-4">

                                                        <div class="item-turma mb-2">

                                                            <h3>{{ $item->getFormacao->nome }}</h3>
                                                            <h4>
                                                                {{ $item->getTurma->descricao }}
                                                            </h4>

                                                            <a href="{{ route('formador.verturma', $item->getTurma->id) }}"
                                                                class="btn btn-primary">Gerenciar Turma</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div> <!-- end card-body-->
                        </div>
                    </div> <!-- end col-->
                </div> <!-- end row-->
            </div>
        </div> <!-- end col-->
    </div> <!-- end row-->



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
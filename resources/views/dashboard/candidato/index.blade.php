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

    .negativa {
        display: inline-block;
        background-color: #fff;
        font-size: 16px;
        color: #bd453aff;
        border-radius: 5px;
    }

    .positiva {
        display: inline-block;
        background-color: #fff;
        font-size: 16px;
        color: #3a82bdff;
        border-radius: 5px;
    }
</style>

<div class="row hero-page">
    <div class="col-lg-12">
        <div class="card bg-soft-primary">
            <div class="px-4">
                <div class="row">
                    <div class="col-xxl-12 align-self-center text-center">
                        <div class="py-4">
                            <h5 class="display-6">CEFOnline | PAINEL DO FORMANDO</h5>
                            <h4>Bem-vindo de volta, {{ Auth::user()->getpessoa->nome }}</h4>

                            <div class="text-center">

                            </div>
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
<!-- end page title -->

<div class="row">
    <div class="col-xxl-6 col-md-6 col-sm-12 col-xs-12">

        @if($tem_aviso == true)
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="alert alert-danger border-0 rounded-0 m-0 d-flex align-items-center" role="alert">
                                <div class="flex-grow-1 text-truncate">
                                    AVISOS / INCONFORMIDADES
                                </div>
                            </div>
                            <div class="p-3">
                                <h6>
                                    <ul style="font-size: 14px;">
                                        @foreach ($avisos as $av)
                                            @if($av != null)
                                                <li>{{$av}}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="alert alert-success border-0 rounded-0 m-0 d-flex align-items-center" role="alert">

                            <div class="flex-grow-1 text-truncate">
                                CEFOnline | Área de acesso rápido
                            </div>

                        </div>

                        <div class="row align-items-end">
                            <div class="col-sm-12">
                                <div class="p-3">
                                    <p class="fs-16 lh-base">Clique nos botões que se seguem para ir à página que
                                        desejas.
                                    </p>
                                    <div class="mt-3">
                                        <a href="{{ route('candidato.minhasformacoes') }}"
                                            class="btn btn-success mb-3">Acessar Formação</a>
                                        <a href="{{ route('candidato.provas') }}" class="btn btn-primary mb-3">Provas
                                            Online</a>
                                        <a href="{{ route('perfil') }}" class="btn btn-primary mb-3">Actualização de
                                            Dados</a><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div> <!-- end col-->
        </div> <!-- end row-->
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="alert alert-primary border-0 rounded-0 m-0 d-flex align-items-center" role="alert">
                    <div class="flex-grow-1 text-truncate">
                        Avaliações do Formando
                    </div>
                </div>

                <div class="row p-3 align-items-end">
                    <div class="col-sm-12 col-12 col-md-12">

                        @if($aluno != null && count($avaliacao_aluno) > 0)
                            <!-- Notas -->
                            <h6 class="mb-3">
                                Classificações
                            </h6>

                            <div class="table-responsive">

                                <table class="table table-bordered align-middle">

                                    <thead class="table-light">
                                        <tr>
                                            <th>Módulo</th>
                                            <th style="width: 180px;">
                                                Nota
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>
                                                Prática Processual Penal
                                            </td>

                                            <td>
                                                <label>{{ $this->notas_finais[1] }}</label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Prática Processual Civil
                                            </td>

                                            <td>
                                                <label>{{ $this->notas_finais[2] }}</label>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                Ética e Deontologia Profissional
                                            </td>

                                            <td>
                                                <label>{{ $this->notas_finais[3] }}</label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Práticas Jurídicas Multidisciplinares e Notariado
                                            </td>

                                            <td>
                                                <label>{{ $this->notas_finais[4] }}</label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Laboral
                                            </td>
                                            <td>
                                                <label>{{ $this->notas_finais[5] }}</label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Média Final do Formando
                                            </td>
                                            <td>
                                                <label
                                                    class="{{ $nota_final >= 10 ? 'positiva' : 'negativa' }}">{{ number_format($nota_final, 2, ',', '.') }}</label>
                                            </td>
                                        </tr>


                                    </tbody>

                                </table>
                            </div>
                        @else
                            <div class="alert alert-warning text-center">
                                Ainda não existem informações sobre as notas finais do Formando.
                            </div>
                        @endif

                        <hr>
                        <h6 class="mb-3 mt-3">
                            Emitir Declaração Final
                        </h6>

                        @if((count($avaliacao_aluno) >= 5 && $tem_aviso == false && $nota_final >= 9.5 && $aluno != null && $aluno_formacao->turma_id < 13))
                            <label for="" class="mt-3 mb-3">Antes de Emitir a declaração, tenha a certeza que os seus dados
                                estão
                                correctamente actualizados.</label>
                            <a target="_blank" href="{{ route('emitirdec', [$candidatura->hash, $aluno->hash]) }}"
                                class="btn btn-success text-center">Clique aqui para emitir a sua declaração</a>
                        @else
                            @if($tem_aviso == true)
                                Caríssimo(a) Formando(a), verifique as inconformidades.
                            @endif
                            @if(count($avaliacao_aluno) < 5)
                                Caríssimo(a) Formando(a), não tem todas as notas inseridas na plataforma.
                            @endif
                            @if(count($avaliacao_aluno) >= 5 && $nota_final < 9.5)
                                Caríssimo(a) Formando(a), a sua classificação final não permite emitir a declaração.
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
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
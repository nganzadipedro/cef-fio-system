<style>
    .title-page {
        margin-top: 10px;
        display: block;
        text-align: center;
        background-color: #fff;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .title-page:hover {
        transform: translateY(-10px);
        /* Levita a div para cima */
        box-shadow: 0px 12px 20px rgba(0, 0, 0, 0.3);
        /* Aumenta a sombra */
    }

    .title-page h5 {
        font-weight: bold;
        font-size: 24px;
    }

    .dv-formacoes .card-body {
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        border: solid 1px #000000;
    }
</style>


<div>



    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">ACESSAR FORMAÇÃO</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CEF-OAA</a></li>
                        <li class="breadcrumb-item active">Acessar Formação</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="title-page">
                <h5 class="">Visualize aqui os dados da formação em que se inscreveu
                </h5>
            </div>
        </div><!-- end col -->
    </div><!-- end row -->


    <div class="row mt-5 dv-formacoes">
        @foreach ($candidaturas as $item)
            <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card card-body text-center">

                    <h4>{{ $item->getFormacao->descricao }}</h4>
                    <h4 class="card-title">{{ $item->getFormacao->nome }}</h4>
                    <h4 class="card-title">Código da Candidatura: {{ $item->codigo }}</h4>
                    <p class="card-text text-center">
                        Data de Inscrição: {{ $item->created_at }} <br>
                        Estado da candidatura: {{ $item->estado }} | Situação de Pagamento: {{ $item->pago }} <br>
                        {{ $item->getturma->descricao }} | Ano: {{ $item->getAno->descricao }} <br>
                    </p>
                    <div class="row mt-3">
                        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 mb-3">
                            <a href="{{ route('vercandidatura', $item->hash) }}" class="btn btn-success">Clique para ver +
                                detalhes</a>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 mb-3">
                            <a href="{{ route('candidato.dashboard') }}" class="btn btn-warning">Retroceder à página
                                inicial</a>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 mb-3">

                            <a href="{{ route('perfil') }}" class="btn btn-primary">Actualização de Dados</a>
                        </div>


                    </div>

                </div>
            </div><!-- end col -->
        @endforeach
    </div><!-- end row -->


</div>
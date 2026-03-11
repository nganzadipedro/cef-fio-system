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

    .dv-provas .card-body {
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        border: solid 1px #000000;
    }

    .dv-provas .card-body h3 {
        font-weight: bold;
        color: #000;
        background-color: rgba(248, 248, 248, 0.95);
        border-radius: 10px;
        width: 100%;
        padding: 7px;
        font-size: 20px;
        display: flex;
        align-items: center;
    }

    .dv-provas .informacao {
        background-color: #108cbd20;
        color: #000;
        font-size: 14px;
        line-height: 1.7;
        border-radius: 10px;
        padding: 10px;
        font-style: italic;
        margin-bottom: 10px;
    }

    .dv-provas .card-body h4 {
        margin-top: 5px;
        font-weight: bold;
        color: #000;
        font-size: 16px;
    }

    .dv-provas .card-body h5 {
        color: #000;
        font-size: 14px;
        text-decoration: underline;
    }
</style>



<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">PROVAS</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CEF-online</a></li>
                    <li class="breadcrumb-item active">Provas</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="title-page">
            <h5 class="">Visualize aqui todas as provas disponíveis para si
            </h5>
        </div>
    </div><!-- end col -->
</div><!-- end row -->

<div class="row mt-3 dv-provas">

    @if (count($provas) == 0)

        <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h4 class="alert alert-danger text-center">
                Ainda não existem provas disponíveis.
            </h4>
        </div>

    @else

        <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p class="informacao mt-3">
                Caro candidato, tenha em atenção que as provas apresentadas nesta secção, são aquelas que foram ou serão
                realizadas de forma online pela plataforma do
                CEF-OAA. Qualquer prova que não foi realizada por meio desta plataforma, não estará visível nesta secção.
                Para visualizares as notas de todas as provas, clique <a href="{{ route('vercandidatura', $candidatura->hash) }}">neste link</a> e aceda ao item "Notas Finais".
            </p>
        </div>

        <div class="row mt-3">
            @foreach ($provas as $item)
                <div class="col-xxl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="card card-body text-center">

                        <h3>{{ $item->getprova->nome }} </h3>
                        <h4>Disciplina: {{ $item->getprova->getdisciplina->descricao }}</h4>
                        <h5>Data da Prova: {{ $item->getprova->data_prova }}</h5>
                        <p class="card-text text-center">
                            {{ $item->getprova->getturma->descricao }} <br>
                            {{ $item->getprova->getturma->getformacao->nome }} <br>
                            Hora de Início: {{ $item->getprova->hora_inicio }} <br>
                            Hora de Término: {{ $item->getprova->hora_fim }} <br>
                            Professor(a): {{ $item->getprova->getprofessor->getpessoa->nome }} <br><br>
                            @if($item->estado == 'realizada' || $item->estado == 'realizando')
                                Resultado: {{ $this->calcula_resultado($item->prova_id) }}
                            @endif
                        </p>

                        @if($this->verifica_data($item->prova_id) == 'true')
                            <a href="{{ route('candidato.fazerprova', [$item->getprova->hash, $aluno->hash]) }}"
                                class="btn btn-primary">Fazer a prova agora</a>
                        @else
                            <label for="" class="text-danger">A prova está indisponível neste momento.</label>
                        @endif
                    </div>
                </div><!-- end col -->
            @endforeach
        </div>



    @endif


</div><!-- end row -->
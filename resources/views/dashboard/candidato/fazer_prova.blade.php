<div>

    @php
        $pergunta = $pergunta_inicial;
        if ($pergunta_seguir) {
            $pergunta = $pergunta_seguir;
        }
    @endphp

    <style>
        .corpo-pergunta {
            font-size: 16px;
            line-height: 1.5;
            font-family: 'Times New Roman', Times, serif !important;
        }

        .corpo-pergunta p {
            margin-bottom: 10px;
            text-align: justify;
            font-size: 16px;
            line-height: 1.5;
        }

        .corpo-pergunta span {
            font-size: 16px !important;
            font-family: 'Times New Roman', Times, serif !important;
             line-height: 1.5 !important;
        }

        .corpo-pergunta strong {
            font-weight: bold;
        }
    </style>

    <div class="row" style="margin-top: -80px;">
        <div class="col-lg-12">
            <div class="card mx-n4">
                <div class="bg-soft-success">
                    <div class="card-body pb-0 px-4 mb-3">
                        <div class="row mb-5">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="row align-items-center g-3">
                                    <!-- <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">
                                        <div class="avatar-md">
                                            <div class="avatar-title bg-white rounded-circle">

                                                @if ($pessoa->avatar == null)
                                                    <img src="{{ asset('assets/template/images/users/user_default.jpg') }}"
                                                        alt="" class="avatar-xs">
                                                @else

                                                    <img src="{{ asset('sysapp/storage/app/public/' . $user->getpessoa->avatar) }}"
                                                        alt="" class="avatar-xs">
                                                @endif

                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div>
                                            <h4 class="fw-bold">{{ $pessoa->nome }}</h4>
                                            <h4 class="fw-bold">CÓDIGO: {{ $aluno->codigo }}</h4>
                                            <h4 class="fw-bold">DISCIPLINA: {{ $prova->getdisciplina->descricao }}</h4>
                                            <h5 class="fw-bold">{{ $prova->nome }}</h5>
                                            <div class="hstack gap-3 flex-wrap">
                                                <!-- <div><i class="ri-building-line align-bottom me-1"></i>
                                                    {{ $pessoa->email }}
                                                </div> -->
                                                <!-- <div class="vr"></div> -->
                                                <div>Data da prova: <span
                                                        class="fw-medium">{{ $prova->data_prova }}</span></div>
                                                <div class="vr"></div>
                                                <div>Início: <span class="fw-medium">{{ $prova->hora_inicio }}</span>
                                                </div>
                                                <div class="vr"></div>
                                                <div class="badge rounded-pill bg-danger fs-12">
                                                    Término:{{ $prova->hora_fim }}
                                                </div>
                                                <!-- @if (Auth::user()->permission_id == 5)
                                                <a href="" class="btn btn-primary rounded-pill">Actualizar
                                                    minha
                                                    candidatura</a>
                                                @endif -->

                                                @csrf
                                                <input type="hidden" id="prova_id" value="{{$prova->id}}">
                                                <a id="botao_terminar" wire:click="verifica_tempo" hidden>Terminar
                                                    Prova</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <ul class="nav nav-tabs-custom border-bottom-0 mt-3" role="tablist">
                            @foreach ($perguntas as $perg)
                                <li class="nav-item p-1">
                                    <a class="btn btn-{{ $perg->id == $pergunta->id ? 'info' : 'primary' }} btn-primary"
                                        class="nav-link fw-bold" data-bs-toggle="tab"
                                        wire:click.prevent="getpergunta({{$perg->id}})" role="tab">
                                        Pergunta Nº {{$perg->numero < 10 ? '0' . $perg->numero : $perg->numero}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- end card body -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="row" style="min-height: 500px; height: 100%">
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <h4 class="alert alert-info text-center">
                                PERGUNTA Nº {{ $pergunta->numero }} (Cotação: {{ $pergunta->cotacao }} Valores)
                            </h4>

                            <div class="corpo-pergunta">
                                {!! $pergunta->corpo_pergunta !!}
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-4">
                            <p>
                                Escolha a opção correcta:
                            </p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="opcao" wire:model="opcao" id="opcao1"
                                    value="opcao1">
                                <label class="form-check-label" for="opcao1">{{ $pergunta->opcao1 }}</label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="opcao" wire:model="opcao" id="opcao2"
                                    value="opcao2">
                                <label class="form-check-label" for="opcao2">{{ $pergunta->opcao2 }}</label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="opcao" wire:model="opcao" id="opcao3"
                                    value="opcao3">
                                <label class="form-check-label" for="opcao3">{{ $pergunta->opcao3 }}</label>
                            </div>
                            <br>
                            @if($pergunta->opcao4 != null)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="opcao" wire:model="opcao" id="opcao4"
                                        value="opcao4">
                                    <label class="form-check-label" for="opcao4">{{ $pergunta->opcao4 }}</label>
                                </div>
                                <br>
                            @endif
                            @if($pergunta->opcao5 != null)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="opcao" wire:model="opcao" id="opcao5"
                                        value="opcao5">
                                    <label class="form-check-label" for="opcao5">{{ $pergunta->opcao5 }}</label>
                                </div>
                                <br>
                            @endif
                            <br>
                            <br>
                            <a wire:click="salvar_pergunta" class="btn btn-success">Confirmar Resposta</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end col -->
    </div>

    <div class="row">
        <div class="col-xxl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="pt-3 border-top border-top-dashed mt-4">
                        <div class="row">

                            <!-- <div class="col-lg-4 col-sm-6">
                                <div>
                                    <p class="mb-2 text-uppercase fw-medium fs-13">
                                        Tempo restante (em minutos):</p>
                                    <h5 class="fs-15 mb-0 text-danger" id="timer">

                                    </h5>
                                </div>
                            </div> -->
                            <div class="col-lg-4 col-sm-6">
                                <div>
                                    <a class="btn btn-success" wire:click="concluir_prova()">CONCLUIR A PROVA</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div>
                                    <label for="">Hora de término da prova:</label>
                                    <h3 class="text-danger">{{ $prova->hora_fim }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>


<script src="{{ asset('assets/system/js/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/system/js/fazer-prova.js') }}"></script>
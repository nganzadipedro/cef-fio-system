<div>

    <style>
        .hero-page .bg-soft-primary {
            border-radius: 20px;
            padding: 10px;
        }

        .hero-page .card {
            border-radius: 20px;
        }

        .notas-finais h5 {
            text-align: center;
            font-size: 1.4rem;
            text-decoration: underline;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .observacao {
            padding: 10px;
            font-size: 14px;
            background-color: #fafafaff;
            color: #000;
            line-height: 1.7;
            border-radius: 5px;
        }

        .notas-finais .nota-modulo {
            border: solid 1px #c0c0c0ff;
            padding: 10px;
            background-color: #407b9137;
            font-size: 16px;
            border-radius: 5px;
            color: #000;
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .notas-finais .media-final {
            border: solid 1px #000;
            padding: 10px;
            background-color: #efefefff;
            font-weight: bold;
            font-size: 16px;
            border-radius: 5px;
            color: #000;
        }

        .notas-finais .nota-modulo span {
            display: inline-block;
            float: right;
            background-color: #fff;
            font-size: 16px;
            color: #000;
            border-radius: 5px;
            padding: 3px;
            margin-top: 5px;
            text-align: center;
        }

        .notas-finais .media-final .negativa {
            display: inline-block;
            float: right;
            background-color: #fff;
            font-size: 16px;
            color: #bd453aff;
            border-radius: 5px;
            padding: 3px;
        }

        .notas-finais .media-final .positiva {
            display: inline-block;
            float: right;
            background-color: #fff;
            font-size: 16px;
            color: #3a82bdff;
            border-radius: 5px;
            padding: 3px;
        }
    </style>

    <div class="row hero-page">
        <div class="col-lg-12">
            <div class="card">
                <div class="bg-soft-primary">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md">
                                <div class="row align-items-center g-3">
                                    <div class="col-md-auto">
                                        <div class="avatar-md">
                                            <div class="avatar-title bg-white rounded-circle">

                                                @if ($candidatura->getPessoa->avatar == null)
                                                    <img src="{{ asset('assets/template/images/users/user_default.jpg') }}"
                                                        alt="" class="avatar-xs" width="100%">
                                                @else

                                                    <img src="{{ asset('sysapp/storage/app/public/' . Auth::user()->getPessoa->avatar) }}"
                                                        alt="" width="100%" style="border-radius: 50%;" class="">
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div>
                                            <h4 class="fw-bold">{{ $candidatura->getPessoa->nome }}</h4>
                                            <h4 class="fw-bold">CÓDIGO: {{ $candidatura->codigo }}</h4>
                                            <div class="hstack gap-3 flex-wrap">
                                                <div>
                                                    {{ $candidatura->getPessoa->email }}
                                                </div>
                                                <div class="vr"></div>
                                                <div class="badge rounded-pill bg-info fs-12">
                                                    {{ $candidatura->getFormacao->nome }}
                                                </div>
                                                <div class="vr"></div>
                                                <div><span
                                                        class="fw-medium">{{ $candidatura->getTurma->descricao  }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <ul class="nav nav-tabs-custom border-bottom-0" role="tablist">
                            <li class="nav-item">
                                <a wire:ignore.self class="nav-link active fw-bold" data-bs-toggle="tab"
                                    href="#project-notas-finais" role="tab">
                                    Notas Finais
                                </a>
                            </li>
                            <li class="nav-item">
                                <a wire:ignore.self class="nav-link fw-bold" data-bs-toggle="tab"
                                    href="#project-declaracao" role="tab">
                                    Emitir Declaração
                                </a>
                            </li>
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
            <div class="tab-content text-muted">

                <div wire:ignore.self class="tab-pane fade show active" id="project-notas-finais" role="tabpanel">
                    <div class="card" style="min-height: 600px;">
                        <div class="card-body" style="min-height: 500px;">
                            <div class="d-flex align-items-center mb-4">

                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                    @if($aluno != null && count($avaliacao_aluno) > 0)
                                        <div class="notas-finais">
                                            <h5 class="mb-5">Notas Finais do Formando</h5>

                                            <p class="observacao">
                                                As notas apresentadas aqui correspondem as notas finais de cada módulo ou
                                                disciplina.
                                                Caso a nota final seja diferente da nota obtida na prova online realizada na
                                                plataforma do CEF-OAA,
                                                significa que o Professor/Formador, além da prova, usou um determinado
                                                critério para obtenção da nota final.
                                            </p>
                                            <p class="observacao">
                                                Os módulos/disciplinas que aparecem nesta secção e que não constam na página
                                                das Provas Online, são aquelas cujas provas não foram realizadas na
                                                plataforma do CEF-OAA.
                                            </p>

                                            <h6 class="nota-modulo">Prática Processual Penal
                                                <span>{{ isset($notas_finais[1]) ? $notas_finais[1] : 'Sem Nota' }}</span>
                                            </h6>
                                            <h6 class="nota-modulo">Prática Processual Civil
                                                <span>{{ isset($notas_finais[2]) ? $notas_finais[2] : 'Sem Nota' }}</span>
                                            </h6>
                                            <h6 class="nota-modulo">Ética e Deontologia Profissional
                                                <span>{{ isset($notas_finais[3]) ? $notas_finais[3] : 'Sem Nota' }}</span>
                                            </h6>
                                            <h6 class="nota-modulo">Práticas Jurídicas Multidisciplinares e Notariado
                                                <span>{{ isset($notas_finais[4]) ? $notas_finais[4] : 'Sem Nota' }}</span>
                                            </h6>
                                            <h6 class="nota-modulo">Laboral
                                                <span>{{ isset($notas_finais[5]) ? $notas_finais[5] : 'Sem Nota' }}</span>
                                            </h6>
                                            <h6 class="media-final">Média Final do Formando <span
                                                    class="{{ $nota_final >= 10 ? 'positiva' : 'negativa' }}">{{ number_format($nota_final, 2, ',', '.') }}</span>
                                            </h6>

                                        </div>
                                    @else
                                        <div class="alert alert-warning text-center">
                                            Ainda não existem informações sobre as notas finais do Formando.
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div wire:ignore.self class="tab-pane fade" id="project-declaracao" role="tabpanel">
                    <div class="card" style="height: 600px;">
                        <div class="card-body" style="height: 500px;">
                            <div class="d-flex align-items-center mb-4">
                                <h5 class="card-title flex-grow-1">Emitir Declaração</h5>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                    <h4 class="text-center">PROCEDIMENTOS PARA EMISSÃO DA DECLARAÇÃO</h4>
                                    <p>
                                    <ol style="font-size: 14px;">
                                        <li>Ter os dados actualizados na plataforma;</li>
                                        <li>Fazer todas as provas / ter todas as notas na plataforma;</li>
                                        <li>Obter uma nota final igual ou superior a 10;</li>
                                        <li>Emitir a declaração.</li>
                                    </ol>
                                    </p>

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">


                                    @if($tem_aviso == true)
                                        <div class="alert alert-warning">
                                            <h4 class="text-center mb-3">AVISOS / INCONFORMIDADES</h4>
                                            <ul style="font-size: 14px;">
                                                @foreach ($avisos as $av)
                                                    @if($av != null)
                                                        <li>{{$av}}</li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    @if($tem_aviso == false)
                                        <div class="alert alert-info text-center">
                                            <h5>
                                                {{ $pessoa->nome }} <br>
                                                {{ $turma->descricao }} <br>
                                                {{ $turma->getFormacao->nome }} <br>
                                                Nota Final: {{ number_format($nota_final, 2, ',', '.') }} <br>
                                            </h5>

                                            <br>
                                            <br>

                                            @if((count($avaliacao_aluno) >= 5 && $pessoa->id != 6173 && $tem_aviso == false && $nota_final >= 9.5 && $aluno != null && $aluno_formacao->turma_id < 13))
                                                <a target="_blank"
                                                    href="{{ route('emitirdec', [$candidatura->hash, $aluno->hash]) }}"
                                                    class="btn btn-success">Clique aqui para emitir a sua declaração</a>
                                            @else
                                                @if($tem_aviso == true)
                                                    Caríssimo(a) Formando(a), verifique as inconformidades.
                                                @endif
                                                @if(count($avaliacao_aluno) < 5)
                                                    Caríssimo(a) Formando(a), não tem todas as notas inseridas na plataforma.
                                                @endif
                                                @if(count($avaliacao_aluno) >= 5 && $nota_final < 9.5)
                                                    Caríssimo(a) Formando(a), a sua classificação final não permite emitir a
                                                    declaração.
                                                @endif
                                            @endif

                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end col -->
        </div>

    </div>
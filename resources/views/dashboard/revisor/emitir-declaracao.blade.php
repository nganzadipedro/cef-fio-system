<div>
    <div class="row">
        <!--end col-->
        <div class="col-xl-3">

            <div class="card">
                <div class="card-header">
                    <div class="d-flex">
                        <h5 class="card-title flex-grow-1 mb-0">Meus dados</h5>
                        <!-- <div class="flex-shrink-0">
                            <a href="{{ route('perfil') }}" class="link-secondary">Ver Perfil</a>
                        </div> -->
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0 vstack gap-3">
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <i class="ri-user-2-fill ri-2x"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="fs-14 mb-1">{{ Auth::user()->getPessoa->nome }}</h6>
                                    <p class="text-muted mb-0">{{ Auth::user()->getPermissao->descricao }}</p>
                                </div>
                            </div>
                        </li>
                        <li><i class="ri-mail-line me-2 align-middle text-muted fs-16"></i>{{
    Auth::user()->getPessoa->email }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-9">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title flex-grow-1 mb-0">Emissão de Declaração | Formandos antigos</h5>
                        <div class="flex-shrink-0">
                            {{-- <a href="#" class="btn btn-success btn-sm"><i
                                    class="ri-download-2-fill align-middle me-1"></i> Descarregar Referencia</a> --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">



                    <div class="text-left alert alert-info">
                        <h3> {{ $pessoa->nome }}</h3>
                        <h4>
                            Nº documento de Identificação: {{ $pessoa->num_documento }} <br>
                            Nº Cédula: {{ $aluno->num_cedula_advogado }} <br>
                            Formação: {{ $aluno->formacao }} <br>
                            Turma: {{ $aluno->turma }}
                        </h4>
                    </div>
                    <hr>

                    <div class="alert alert-info text-center mt-3">

                        <h5>
                            Nota Final: {{ $aluno->media_final }} <br>
                        </h5>
                        <br>
                        @if($aluno->media_final >= 9.5)
                            <a target="_blank" href="{{ route('revisor.emitirdec_antigo', [$aluno->hash]) }}"
                                class="btn btn-success">Clique aqui para emitir a declaração</a>
                        @else
                            Caro candidato, a sua classificação não permite emitir a declaração.
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
</div>
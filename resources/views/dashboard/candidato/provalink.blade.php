<div>
    <div class="row" style="margin-top: -70px;">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <img src="{{ asset('assets/system/logos/logo_oaa_cor.png') }}" alt="" width="100px" height="100px">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <strong>
                        <h1 class="">CEF<span class="text-primary">Online</span>.</h1>
                    </strong>
                    <h2 class="">Plataforma de gestão de formações | CEF-OAA <br>Realização de Provas Online</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card mx-n4">
                <div class="bg-soft-primary">
                    <div class="card-body pb-0 px-4">
                        <div class="row mb-3">
                            <div class="col-md">
                                <div class="row align-items-center g-3 text-center">
                                    <div class="col-md">
                                        <div>
                                            <h4 class="fw-bold">DISCIPLINA: {{ $prova->getdisciplina->descricao }}</h4>
                                            <h5 class="fw-bold">{{ $prova->nome }}</h5>
                                            <h5 class="fw-bold">Data da prova: {{ $prova->data_prova }}</h5>
                                            <h5 class="fw-bold">Hora de Início: {{ $prova->hora_inicio }}</h5>
                                            <h5 class="fw-bold">Hora de término: {{ $prova->hora_fim }}</h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form method="POST">
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                    <label for="username" class="form-label">Email</label>
                                    <input type="text" name="email" wire:model="email_aluno" class="form-control"
                                        id="username" placeholder="Digite o seu email">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                    <label class="form-label" for="password-input">Código de Formando</label>
                                    <input type="text" name="codigo" wire:model="codigo_aluno" class="form-control"
                                        id="username" placeholder="Digite o seu código, exemplo: FIOXXX-2024">
                                </div>
                            </div>


                            <div class="mt-4">
                                <button class="btn btn-success w-100" type="button"
                                    wire:click="autenticar">Confirmar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end col -->
</div>


<!-- <script src="{{ asset('assets/system/js/libs/jquery/jquery.min.js') }}"></script> -->
<!-- <script src="{{ asset('assets/system/js/fazer-prova.js') }}"></script> -->
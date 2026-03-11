<div>
    <div class="row" style="margin-top: -50px;">
        <div class="col-lg-12">
            <div class="card mx-n4">
                <div class="bg-soft-success">
                    <div class="card-body pb-0 px-4">
                        <div class="row mb-3">
                            <div class="col-md">
                                <div class="row align-items-center g-3">
                                    
                                    <div class="col-md">
                                        <div>
                                           
                                            <h4 class="fw-bold">DISCIPLINA: {{ $prova->getdisciplina->descricao }}</h4>
                                            <h5 class="fw-bold">{{ $prova->nome }}</h5>
                                            <div class="hstack gap-3 flex-wrap">
                                                <div>Data da prova: <span
                                                        class="fw-medium">{{ $prova->data_prova }}</span></div>
                                                <div class="vr"></div>
                                                <div>Início: <span class="fw-medium">{{ $prova->hora_inicio }}</span>
                                                </div>
                                                <div class="vr"></div>
                                                <div class="badge rounded-pill bg-danger fs-12">
                                                    Término:{{ $prova->hora_fim }}
                                                </div>
                                            </div>
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
            <div class="row" style="min-height: 500px; height: 100%">
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end col -->
    </div>
</div>


<!-- <script src="{{ asset('assets/system/js/libs/jquery/jquery.min.js') }}"></script> -->
<!-- <script src="{{ asset('assets/system/js/fazer-prova.js') }}"></script> -->
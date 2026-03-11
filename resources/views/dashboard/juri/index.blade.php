<div>
    <div class="row">
        <div class="">
            <div class="page-title-box-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Resumo </h4>
                <div class="page-title-right">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Visão Geral
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <h3>
        Candidaturas
        <script src="https://cdn.lordicon.com/lordicon.js"></script>
        <lord-icon src="https://cdn.lordicon.com/xzalkbkz.json" trigger="loop" style="width:50px;height:50px">
        </lord-icon>
    </h3>
    <div class="row">
        <div class="col-xxl-8">
            <div class="row">
                <div class="col-md-4">
                    <a href="#">
                        <div class="card card-animate bg-marketplace bg-marketplace">
                            <div class="position-absolute start-0" style="z-index: 0;">
                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120"
                                    width="100" height="80">
                                    <style>
                                        .s0 {
                                            opacity: .05;
                                            fill: var(--vz-secondary)
                                        }
                                    </style>
                                    <path id="Shape 8" class="s0"
                                        d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z">
                                    </path>
                                </svg>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-bolt mb-0">Total de candidaturas</p>

                                    </div>
                                    <div>
                                        <div class="flex-shrink-0">

                                            <h1>{{ $total[0] }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div> <!-- end card-->
                    </a>

                </div> <!-- end col-->
                <div class="col-md-4">
                    <a href="{{ route('candidaturas.pendentes') }}">
                        <div class="card card-animate bg-marketplace">
                            <div class="position-absolute start-0" style="z-index: 0;">
                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120"
                                    width="100" height="80">
                                    <style>
                                        .s0 {
                                            opacity: .05;
                                            fill: var(--vz-secondary)
                                        }
                                    </style>
                                    <path id="Shape 8" class="s0"
                                        d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z">
                                    </path>
                                </svg>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-bolt mb-0">Candidaturas pendentes</p>

                                    </div>
                                    <div>
                                        <div class="flex-shrink-0">
                                            <h1>{{ $total[1] }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div> <!-- end card-->
                    </a>

                </div> <!-- end col-->
                <div class="col-md-4">
                    <a href="{{ route('candidaturas.aprovadas') }}">

                        <div class="card card-animate bg-marketplace">
                            <div class="position-absolute start-0" style="z-index: 0;">
                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120"
                                    width="100" height="80">
                                    <style>
                                        .s0 {
                                            opacity: .05;
                                            fill: var(--vz-secondary)
                                        }
                                    </style>
                                    <path id="Shape 8" class="s0"
                                        d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z">
                                    </path>
                                </svg>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-bolt mb-0">Candidaturas aprovadas</p>

                                    </div>
                                    <div>
                                        <div class="flex-shrink-0">
                                            <h1>{{ $total[3] }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div> <!-- end card-->

                    </a>

                </div> <!-- end col-->
                <div class="col-md-4">
                    <a href="{{ route('candidaturas.suspensas') }}">
                        <div class="card card-animate bg-marketplace">
                            <div class="position-absolute start-0" style="z-index: 0;">
                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="100"
                                    height="80">
                                    <style>
                                        .s0 {
                                            opacity: .05;
                                            fill: var(--vz-secondary)
                                        }
                                    </style>
                                    <path id="Shape 8" class="s0"
                                        d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z">
                                    </path>
                                </svg>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-bolt mb-0">Candidaturas suspensas</p>
    
                                    </div>
                                    <div>
                                        <div class="flex-shrink-0">
    
                                            <h1>{{ $total[2] }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div> <!-- end card-->
                    </a>
                    
                </div> <!-- end col-->
                <div class="col-md-4">
                    <a href="{{ route('candidaturas.pagas') }}">

                        <div class="card card-animate bg-marketplace">
                            <div class="position-absolute start-0" style="z-index: 0;">
                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="100"
                                    height="80">
                                    <style>
                                        .s0 {
                                            opacity: .05;
                                            fill: var(--vz-secondary)
                                        }
                                    </style>
                                    <path id="Shape 8" class="s0"
                                        d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z">
                                    </path>
                                </svg>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-bolt mb-0">Candidaturas pagas</p>
    
                                    </div>
                                    <div>
                                        <div class="flex-shrink-0">
    
                                            <h1>{{ $total[4] }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div> <!-- end card-->

                    </a>
                  
                </div> <!-- end col-->
                <div class="col-md-4">
                    <a href="{{ route('juri.perguntas.corrigidos') }}">

                        <div class="card card-animate bg-marketplace">
                            <div class="position-absolute start-0" style="z-index: 0;">
                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="100"
                                    height="80">
                                    <style>
                                        .s0 {
                                            opacity: .05;
                                            fill: var(--vz-secondary)
                                        }
                                    </style>
                                    <path id="Shape 8" class="s0"
                                        d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z">
                                    </path>
                                </svg>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-bolt mb-0">Exames corrigidos</p>
    
                                    </div>
                                    <div>
                                        <div class="flex-shrink-0">
    
                                            <h1>{{ $total[5] }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div> <!-- end card-->

                    </a>
                  
                </div> <!-- end col-->
            </div> <!-- end col-->
        </div>
    
    </div>


</div>

@extends('layouts.app')
@section('conteudo')
    <style>
        .obrigatorio {
            color: red;
            font-size: 14px !important;
        }

        .opcional {
            color: #000000;
            font-size: 14px !important;
        }
    </style>
    <div class="mt-3">
        <div class="profile-foreground position-relative mx-n4 mt-n4">
            <div class="profile-wid-bg">
                {{-- <img src="{{ asset('assets/template/images/profile-bg.jpg') }}" alt="" class="profile-wid-img" /> --}}
            </div>
        </div>
        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
            <div class="row g-4">
                <div class="col-auto">
                    <div class="avatar-lg">
                        @if ($candidato->getPessoa->avatar == null)
                            <img src="{{ asset('assets/template/images/users/user_default.jpg') }}" alt="Header Avatar"
                                class="img-thumbnail rounded-circle">
                        @else
                            <img src="{{ asset('sysapp/storage/app/public/' . Auth::user()->getPessoa->avatar) }}" alt="user-img"
                                class="img-thumbnail rounded-circle" />
                        @endif
                    </div>
                </div>
                <!--end col-->
                <div class="col">
                    <div class="p-2">
                        <h3 class="text-white mb-1">{{ $candidato->getPessoa->nome }}</h3>
                        <p class="text-white-75">Candidato</p>
                        <div class="hstack text-white-50 gap-1">
                            <div class="me-2"><i
                                    class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>{{ $candidato->endereco }}
                            </div>
                            {{-- <div>
                            <i class="ri-building-line me-1 text-white-75 fs-16 align-middle"></i>Themesbrand
                        </div> --}}
                        </div>
                    </div>
                </div>
                <!--end col-->
                {{-- <div class="col-12 col-lg-auto order-last order-lg-0">
                <div class="row text text-white-50 text-center">
                    <div class="col-lg-6 col-4">
                        <div class="p-2">
                            <h4 class="text-white mb-1">24.3K</h4>
                            <p class="fs-15 mb-0">Followers</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-4">
                        <div class="p-2">
                            <h4 class="text-white mb-1">1.3K</h4>
                            <p class="fs-15 mb-0">Following</p>
                        </div>
                    </div>
                </div>
            </div> --}}
                <!--end col-->

            </div>
            <!--end row-->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="d-flex">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                    <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span
                                        class="d-none d-md-inline-block">Editar dados da candidatura</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content pt-4 text-muted">

                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                            <div class="row">

                                <!--end col-->
                                <div class="col-xxl-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="alert alert-warning text-center">
                                                <h4>Só poderá editar a sua candidatura, caso ainda esteja pendente ou esteja
                                                    suspensa. Se estiver aprovada, já não poderá editar a sua candidatura.
                                                </h4>
                                            </div>

                                            {{-- <h4 class="card-title mb-3">Dados da Candidatura</h4> --}}


                                            <form action="">

                                                @csrf

                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12 col-xs-12">
                                                        <div class="page-title-box align-items-center text-center">
                                                            <h4 class="mb-sm-0 alert alert-primary text-center">Preencha
                                                                devidamente os campos a
                                                                seguir com as suas informações</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end page title -->

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header align-items-center d-flex">
                                                                <h4 class="card-title mb-0 flex-grow-1">Dados Iniciais</h4>
                                                                <br>
                                                                <span class="obrigatorio">** Todos os campos são
                                                                    obrigatórios **</span>

                                                                <div class="flex-shrink-0">

                                                                </div>
                                                            </div><!-- end card header -->
                                                            <div class="card-body">
                                                                <div class="live-preview">
                                                                    <div class="row gy-4">
                                                                        <div
                                                                            class="col-xxl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                                            <div>
                                                                                <label for="nome_completo"
                                                                                    class="form-label">Nome completo</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="nome_completo"
                                                                                    value="{{ $candidato->getPessoa->nome }}"
                                                                                    id="nome_completo">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->

                                                                        @if (
                                                                            $candidato->getPessoa->documento != 'Bilhete de Identidade' &&
                                                                                $candidato->getPessoa->documento != 'Passaporte' &&
                                                                                $candidato->getPessoa->documento != 'Carta de Condução')
                                                                            <div class="col-xxl-3 col-md-3">
                                                                                <label class=""
                                                                                    for="documento">Documento de
                                                                                    identificação</label>
                                                                                <select id="documento" name="documento"
                                                                                    class="form-control" required>
                                                                                    <option value="0">Selecione...
                                                                                    </option>
                                                                                    <option value="Bilhete de Identidade">
                                                                                        Bilhete de Identidade</option>
                                                                                    <option value="Passaporte">Passaporte
                                                                                    </option>
                                                                                    <option value="Carta de Condução">Carta
                                                                                        de
                                                                                        Condução</option>
                                                                                    <option selected value="Outro">Outro
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        @else
                                                                            <div class="col-xxl-3 col-md-3">
                                                                                <div>
                                                                                    <label for="documento"
                                                                                        class="form-label">Documento de
                                                                                        Identificação</label>
                                                                                    <select class="form-select"
                                                                                        id="documento" name="documento">
                                                                                        <option>Nenhum...</option>
                                                                                        <option
                                                                                            {{ $candidato->getPessoa->documento == 'Bilhete de Identidade' ? 'selected' : '' }}
                                                                                            value="Bilhete de Identidade">
                                                                                            Bilhete de
                                                                                            Identidade</option>
                                                                                        <option
                                                                                            {{ $candidato->getPessoa->documento == 'Passaporte' ? 'selected' : '' }}
                                                                                            value="Passaporte">Passaporte
                                                                                        </option>
                                                                                        <option
                                                                                            {{ $candidato->getPessoa->documento == 'Carta de Condução' ? 'selected' : '' }}
                                                                                            value="Carta de Condução">Carta
                                                                                            de Condução</option>
                                                                                        <option value="Outro">Outro
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        <div class="col-xxl-3 col-md-3">
                                                                            <div id="dv-documento">
                                                                                <label for="documento2"
                                                                                    class="form-label">Outro
                                                                                    Documento</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="documento2" name="documento2"
                                                                                    placeholder="Informe o documento"
                                                                                    value="{{ $candidato->getPessoa->documento }}">
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="row gy-4 mt-2">
                                                                        <div
                                                                            class="col-xxl-3 col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                                                            <div>
                                                                                <label for="num_documento"
                                                                                    class="form-label">Nº do Documento de
                                                                                    Identificação </label>
                                                                                <input
                                                                                    type="text"value="{{ $candidato->getPessoa->num_documento }}"
                                                                                    class="form-control"
                                                                                    id="num_documento"
                                                                                    name="num_documento">
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="col-xxl-3 col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                                                            <div>
                                                                                <label for="basiInput"
                                                                                    class="form-label">Género </label> <br>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input
                                                                                        {{ $candidato->getPessoa->genero == 'Masculino' ? 'checked' : '' }}
                                                                                        class="form-check-input"
                                                                                        type="radio" name="genero"
                                                                                        id="genero_m" value="Masculino">
                                                                                    <label class="form-check-label"
                                                                                        for="genero_m">Masculino</label>
                                                                                </div>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input
                                                                                        {{ $candidato->getPessoa->genero == 'Feminino' ? 'checked' : '' }}
                                                                                        class="form-check-input"
                                                                                        type="radio" name="genero"
                                                                                        id="genero_f" value="Feminino">
                                                                                    <label class="form-check-label"
                                                                                        for="genero_f">Feminino</label>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        @if ($candidato->nacionalidade != 'Angola')
                                                                            <div class="col-xxl-3 col-md-3">

                                                                                <label>Nacionalidade </label>
                                                                                <select id="nacionalidade"
                                                                                    name="nacionalidade"
                                                                                    class="form-control" required>
                                                                                    <option value="0">Selecione...
                                                                                    </option>
                                                                                    <option value="Angola">Angola</option>
                                                                                    <option selected value="Outra">Outra
                                                                                    </option>
                                                                                </select>

                                                                            </div>
                                                                        @else
                                                                            <div class="col-xxl-3 col-md-3">
                                                                                <div>
                                                                                    <label for="nacionalidade"
                                                                                        class="form-label">Nacionalidade</label>
                                                                                    <select class="form-select"
                                                                                        id="nacionalidade"
                                                                                        name="nacionalidade">
                                                                                        <option value="0" selected>
                                                                                            Nenhuma...</option>
                                                                                        <option
                                                                                            {{ $candidato->nacionalidade == 'Angola' ? 'selected' : '' }}
                                                                                            value="Angola">Angola</option>
                                                                                        <option
                                                                                            {{ $candidato->nacionalidade != 'Angola' ? 'selected' : '' }}
                                                                                            value="Outra">Outra</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        <input type="hidden" id="f_nacionalidade"
                                                                            value="{{ $candidato->nacionalidade }}">
                                                                        <input type="hidden" id="f_documento"
                                                                            value="{{ $candidato->getPessoa->documento }}">
                                                                        <input type="hidden" id="candidato_id"
                                                                            value="{{ $candidato->id }}">
                                                                        <input type="hidden" id="candidatura_id"
                                                                            value="{{ $candidatura->id }}">


                                                                        <div class="col-lg-3 col-md-3"
                                                                            id="dv-nacionalidade">
                                                                            <label>Outra Nacionalidade </label>
                                                                            <input type="text" class="form-control"
                                                                                name="nacionalidade2" id="nacionalidade2"
                                                                                value="{{ $candidato->nacionalidade }}">
                                                                        </div>

                                                                    </div>

                                                                    <div class="row gy-4 mt-2">
                                                                        <div
                                                                            class="col-xxl-3 col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                                                            <div>
                                                                                <label for="naturalidade"
                                                                                    class="form-label">Naturalidade
                                                                                </label>
                                                                                <input
                                                                                    value="{{ $candidato->naturalidade }}"
                                                                                    type="text" class="form-control"
                                                                                    id="naturalidade" name="naturalidade">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xxl-3 col-md-3">
                                                                            <div>
                                                                                <label for="provincia_id"
                                                                                    class="form-label">Província</label>
                                                                                <select class="form-select"
                                                                                    id="provincia_id" name="provincia_id">
                                                                                    <option value="0" selected>
                                                                                        Nenhuma...</option>
                                                                                    @foreach ($provincias as $item)
                                                                                        <option
                                                                                            {{ $item->id == $candidato->provincia_id ? 'selected' : '' }}
                                                                                            value="{{ $item->id }}">
                                                                                            {{ $item->descricao }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="col-xxl-3 col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                                                            <div>
                                                                                <label for="municipio"
                                                                                    class="form-label">Município </label>
                                                                                <input value="{{ $candidato->municipio }}"
                                                                                    type="text" class="form-control"
                                                                                    id="municipio" name="municipio">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xxl-3 col-md-3">
                                                                            <div>
                                                                                <label for="necessidade_especial"
                                                                                    class="form-label">É portador de
                                                                                    alguma
                                                                                    deficiência?</label>
                                                                                <select class="form-select"
                                                                                    id="necessidade_especial"
                                                                                    name="necessidade_especial">
                                                                                    <option value="0" selected>
                                                                                        Nenhuma...</option>
                                                                                    <option
                                                                                        {{ $candidato->necessidade_especial == 'Não' ? 'selected' : '' }}
                                                                                        value="Não">Não</option>
                                                                                    <option
                                                                                        {{ $candidato->necessidade_especial == 'Deficiente' ? 'selected' : '' }}
                                                                                        value="Deficiente">Deficiente
                                                                                    </option>
                                                                                    <option
                                                                                        {{ $candidato->necessidade_especial == 'Cadeirante' ? 'selected' : '' }}
                                                                                        value="Cadeirante">Cadeirante
                                                                                    </option>
                                                                                    <option
                                                                                        {{ $candidato->necessidade_especial == 'Outra deficiência' ? 'selected' : '' }}
                                                                                        value="Outra deficiência">Outra
                                                                                        deficiência</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                    <div class="row gy-4 mt-2">
                                                                        <div
                                                                            class="col-xxl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                                            <div>
                                                                                <label for="instituicao_estudo"
                                                                                    class="form-label">Instituição do
                                                                                    ensino
                                                                                    superior em que frequentou o curso de
                                                                                    direito</label>
                                                                                <input
                                                                                    value="{{ $candidato->instituicao_estudo }}"
                                                                                    type="text" class="form-control"
                                                                                    id="instituicao_estudo"
                                                                                    name="instituicao_estudo">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xxl-6 col-md-6">
                                                                            <div>
                                                                                <label for="provincia_exame"
                                                                                    class="form-label">Onde pretende fazer
                                                                                    o
                                                                                    exame?</label>
                                                                                <select class="form-select"
                                                                                    id="provincia_exame"
                                                                                    name="provincia_exame">
                                                                                    <option value="0" selected>
                                                                                        Nenhuma...</option>
                                                                                    @foreach ($provincias as $item)
                                                                                        <option
                                                                                            {{ $item->id == $candidato->provincia_exame ? 'selected' : '' }}
                                                                                            value="{{ $item->id }}">
                                                                                            {{ $item->descricao }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header align-items-center d-flex">
                                                                <h4 class="card-title mb-0 flex-grow-1">Informações de
                                                                    Contacto</h4>
                                                                <span class="obrigatorio">** Todos os campos são
                                                                    obrigatórios **</span>
                                                                <div class="flex-shrink-0">

                                                                </div>
                                                            </div><!-- end card header -->
                                                            <div class="card-body">
                                                                <div class="live-preview">
                                                                    <div class="row gy-4">
                                                                        <div
                                                                            class="col-xxl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                                            <div>
                                                                                <label for="endereco"
                                                                                    class="form-label">Endereço</label>
                                                                                <input value="{{ $candidato->endereco }}"
                                                                                    type="text" class="form-control"
                                                                                    id="endereco" name="endereco">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-xxl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                                            <div>
                                                                                <label for="email"
                                                                                    class="form-label">Email</label>
                                                                                <input
                                                                                    value="{{ $candidato->getPessoa->email }}"
                                                                                    type="email" disabled
                                                                                    class="form-control" id="email"
                                                                                    name="email">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row gy-4 mt-2">
                                                                        <div
                                                                            class="col-xxl-3 col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                                                            <div>
                                                                                <label for="tel1"
                                                                                    class="form-label">Nº de telefone
                                                                                    principal</label>
                                                                                <input
                                                                                    value="{{ $candidato->getPessoa->telefone1 }}"
                                                                                    type="text" minlength="9" maxlength="9"
                                                                                    class="form-control" id="tel1"
                                                                                    name="tel1">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-xxl-3 col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                                                            <div>
                                                                                <label for="tel2"
                                                                                    class="form-label">Nº de telefone
                                                                                    alternativo</label>
                                                                                <input
                                                                                    value="{{ $candidato->getPessoa->telefone2 }}"
                                                                                    type="email" minlength="9" maxlength="9"
                                                                                    class="form-control" id="tel2"
                                                                                    name="tel2">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header align-items-center d-flex">
                                                                <h4 class="card-title mb-0 flex-grow-1">Documentos</h4>
                                                                <span class="opcional">** Os campos de sbmissão de
                                                                    documentos são opcionais **</span>
                                                                <div class="flex-shrink-0">

                                                                </div>
                                                            </div><!-- end card header -->
                                                            <div class="card-body">
                                                                <div class="live-preview">
                                                                    <div class="row gy-4">
                                                                        <div
                                                                            class="col-xxl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                                            <div>
                                                                                <label for="doc_bi"
                                                                                    class="form-label">Documento de
                                                                                    Identificação</label>
                                                                                <input type="file" class="form-control"
                                                                                    id="doc_bi" name="doc_bi">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-xxl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                                            <div>
                                                                                <label for="doc_diploma"
                                                                                    class="form-label">Documento que atesta o grau de licenciatura</label>
                                                                                <input type="file" class="form-control"
                                                                                    id="doc_diploma" name="doc_diploma">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a id="btn-submeter" class="btn btn-success">Actualizar Candidatura</a>

                                            </form>
                                        </div>
                                        <!--end card-body-->
                                    </div><!-- end card -->

                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <!--end tab-content-->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
@endsection
@section('script-aux')
    <script src="{{ URL::asset('assets/system/js/update-candidatura.js') }} "></script>
@endsection

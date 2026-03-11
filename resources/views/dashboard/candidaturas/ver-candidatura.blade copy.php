<div>

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Plataforma de Inscrição | ENOAA</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Candidatura</a>
                        </li>
                        <li class="breadcrumb-item active">Ver Candidatura</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="mt-4">
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
                            <img src="{{ asset('sysapp/storage/app/public/' . Auth::user()->getPessoa->avatar) }}"
                                alt="user-img" class="img-thumbnail rounded-circle" />
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
                                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab"
                                    role="tab">
                                    <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span
                                        class="d-none d-md-inline-block">Visão Geral</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab">
                                    <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span
                                        class="d-none d-md-inline-block">Documentos</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#actividade" role="tab">
                                    <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span
                                        class="d-none d-md-inline-block">Histórico</span>
                                </a>
                            </li>
                        </ul>
                        @if ($candidatura->getAno->estado == 'Activo' && $candidatura->estado != 'aprovado' && Auth::user()->permission_id == 5)
                            <div class="flex-shrink-0">
                                <a href="{{ route('candidato.editarcandidatura', $candidatura->hash) }}"
                                    class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Editar
                                    Candidatura</a>
                            </div>
                        @endif

                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content pt-4 text-muted">

                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                            <div class="row">
                                <div class="col-xxl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-5 text-center">Estado da Candidatura: <br>
                                                @if ($candidatura->estado == 'aprovado')
                                                    APROVADA
                                                @endif
                                                @if ($candidatura->estado == 'suspenso')
                                                    SUSPENSA
                                                @endif
                                                @if ($candidatura->estado == 'pendente')
                                                    PENDENTE
                                                @endif

                                            </h5>
                                            <div class="progress animated-progress custom-progress progress-label">
                                                @if ($candidatura->estado == 'aprovado')
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100">

                                                    </div>
                                                @endif

                                                @if ($candidatura->estado == 'pendente')
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100">

                                                    </div>
                                                @endif

                                                @if ($candidatura->estado == 'suspenso')
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100">

                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                    @if ($candidatura->getAno->estado == 'Inactivo')
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">Informação</h5>
                                                <h3 class="alert alert-warning">
                                                    Esta candidatura já não pode ser editada ou actualizada.
                                                </h3>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    @endif

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-4">
                                                <div class="flex-grow-1">
                                                    <h5 class="card-title mb-0">Dados Gerais</h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-4">

                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                    <a href="javascript:void(0);">
                                                        <h6 class="text-truncate fs-15">Ano da Candidatura</h6>
                                                    </a>
                                                    <p class="text-muted mb-0">{{ $candidatura->getAno->descricao }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-4">

                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                    <a href="javascript:void(0);">
                                                        <h6 class="text-truncate fs-15">Data de Inscrição</h6>
                                                    </a>
                                                    <p class="text-muted mb-0">{{ $candidatura->created_at }}</p>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-4">

                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                    <a href="javascript:void(0);">
                                                        <h6 class="text-truncate fs-15">Referência de pagamento</h6>
                                                    </a>
                                                    <p class="text-muted mb-0">{{ $candidatura->referencia }}</p>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-4">

                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                    <a href="javascript:void(0);">
                                                        <h6 class="text-truncate fs-15">Pagamento feito</h6>
                                                    </a>
                                                    <p class="text-muted mb-0">{{ $candidatura->pago }}</p>
                                                </div>
                                            </div>
                                            <div class="d-flex">

                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                    <a href="javascript:void(0);">
                                                        <h6 class="text-truncate fs-15">Código da Candidatura</h6>
                                                    </a>
                                                    <p class="text-muted mb-0">{{ $candidatura->codigo }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3">Dados da Candidatura</h4>

                                            <div class="row">
                                                <div class="col-6 col-md-4">
                                                    <p class="mb-1">Documento de identificação:</p>
                                                    <h6 class="text-truncate mb-0">
                                                        {{ $candidato->getPessoa->documento }}</h6>
                                                    <br>

                                                    <p class="mb-1">Nº do documento:</p>
                                                    <h6 class="text-truncate mb-0">
                                                        {{ $candidato->getPessoa->num_documento }}</h6>
                                                    <br>

                                                    <p class="mb-1">Género:</p>
                                                    <h6 class="text-truncate mb-0">
                                                        {{ $candidato->getPessoa->genero }}</h6>
                                                    <br>

                                                    <p class="mb-1">Telefone principal:</p>
                                                    <h6 class="text-truncate mb-0">
                                                        {{ $candidato->getPessoa->telefone1 }}</h6>
                                                    <br>

                                                    <p class="mb-1">Telefone alternativo:</p>
                                                    <h6 class="text-truncate mb-0">
                                                        {{ $candidato->getPessoa->telefone1 }}</h6>
                                                    <br>

                                                    <p class="mb-1">Email:</p>
                                                    <h6 class="text-truncate mb-0">
                                                        {{ $candidato->getPessoa->email }}</h6>
                                                    <br>

                                                    <p class="mb-1">Instituição onde estudou:</p>
                                                    <h6 class="text-truncate mb-0">
                                                        {{ $candidato->instituicao_estudo }}</h6>
                                                    <br>

                                                    <p>Documentos</p>
                                                    <h6 class="fs-16 mb-0"><a target="_blank"
                                                            href="{{ route('verdocumento', [$candidatura->id, 'identificação']) }}">Documento
                                                            de Identificação</a>
                                                    </h6>
                                                    <h6 class="fs-16 mb-0"><a target="_blank"
                                                            href="{{ route('verdocumento', [$candidatura->id, 'diploma']) }}">Documento
                                                            que atesta o grau de licenciatura</a>
                                                    </h6>
                                                    @if ($candidatura->estado == 'aprovado' && $candidatura->pago == 'pago')
                                                        <h6 class="fs-16 mb-0"><a target="_blank"
                                                                href="{{ route('verdocumento', [$candidatura->id, 'ficha']) }}">Ficha
                                                                do Candidato</a>
                                                        </h6>
                                                    @endif
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <p class="mb-1">Nacionalidade:</p>
                                                    <h6 class="text-truncate mb-0">
                                                        {{ $candidato->nacionalidade }}</h6>
                                                    <br>

                                                    <p class="mb-1">Naturalidade:</p>
                                                    <h6 class="text-truncate mb-0">
                                                        {{ $candidato->naturalidade }}</h6>
                                                    <br>

                                                    <p class="mb-1">Necessidade especial:</p>
                                                    <h6 class="text-truncate mb-0">
                                                        {{ $candidato->necessidade_especial }}</h6>
                                                    <br>

                                                    <p class="mb-1">Província:</p>
                                                    <h6 class="text-truncate mb-0">
                                                        {{ $candidato->getProvincia->descricao }}</h6>
                                                    <br>

                                                    <p class="mb-1">Município:</p>
                                                    <h6 class="text-truncate mb-0">
                                                        {{ $candidato->municipio }}</h6>
                                                    <br>

                                                    <p class="mb-1">Endereço:</p>
                                                    <h6 class="text-truncate mb-0">
                                                        {{ $candidato->endereco }}</h6>
                                                    <br>

                                                    <p class="mb-1">Província onde vai fazer o exame:</p>
                                                    <h6 class="text-truncate mb-0">
                                                        {{ $candidato->getProvinciaExame->descricao }}</h6>
                                                    <br>
                                                </div>
                                                <!--end col-->
                                            </div>

                                            <hr>

                                            @if ($candidatura->estado == 'pendente' && $candidatura->getAno->estado == 'Activo' && Auth::user()->permission_id != 5)
                                                <div class="row mt-3">
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-success"
                                                            data-bs-toggle="modal" data-bs-target="#myModal">Aprovar
                                                            Candidatura</button>
                                                        <div id="myModal" class="modal fade" tabindex="-1"
                                                            aria-labelledby="myModalLabel" aria-hidden="true"
                                                            style="display: none;">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="myModalLabel">
                                                                            Confirmar aprovação</h5>
                                                                        <button type="button"
                                                                            class="btn-close fecharModal"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close">
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h5 class="fs-15">
                                                                            Tem certeza que pretende aprovar esta
                                                                            candidatura?
                                                                        </h5>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger"
                                                                            data-bs-dismiss="modal">Cancelar</button>
                                                                        <a wire:click="aprovar()" type="button"
                                                                            class="btn btn-success">Confirmar</a>
                                                                    </div>

                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div><!-- /.modal -->
                                                    </div>
                                                    <div class="col-6">
                                                        <form>
                                                            <label for="">Motivo da suspensão</label>
                                                            <select class="form-control" required
                                                                wire:model="motivo_suspensao" name=""
                                                                id="">
                                                                <option value="">Selecione</option>
                                                                @foreach ($motivos as $item)
                                                                    <option value="{{ $item->descricao }}">
                                                                        {{ $item->descricao }}</option>
                                                                @endforeach
                                                            </select>
                                                            <br>
                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#myModal2">Suspender
                                                                Candidatura</button>
                                                            <div id="myModal2" class="modal fade" tabindex="-1"
                                                                aria-labelledby="myModalLabel2" aria-hidden="true"
                                                                style="display: none;">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="myModalLabel2">
                                                                                Confirmar aprovação</h5>
                                                                            <button type="button"
                                                                                class="btn-close fecharModal"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close">
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h5 class="fs-15">
                                                                                Tem certeza que pretende aprovar esta
                                                                                candidatura?
                                                                            </h5>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-danger"
                                                                                data-bs-dismiss="modal">Cancelar</button>
                                                                            <button wire:click="suspender()"
                                                                                type="button"
                                                                                class="btn btn-success">Confirmar</button>
                                                                        </div>

                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div><!-- /.modal -->
                                                        </form>
                                                    </div>
                                                </div>
                                            @endif

                                            @if ($candidatura->estado == 'suspenso' && $candidatura->getAno->estado == 'Activo' && Auth::user()->permission_id != 5)
                                                <div class="row mt-3">
                                                    <div class="col-12">
                                                        <label for="">Motivo da supensão:</label>
                                                        <div class="alert alert-warning">
                                                            <h5>{{ $candidatura->motivo_suspensao }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div><!-- end card -->

                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>

                        <!--end tab-pane-->
                        <div class="tab-pane fade" id="documents" role="tabpanel">
                            <div class="card">
                                <div class="card-body" style="height: 800px">
                                    <div class="d-flex align-items-center mb-4">
                                        <h5 class="card-title flex-grow-1 mb-0">Documentos</h5>
                                    </div>
                                    <div class="row" style="height: 100%">

                                        @if (Auth::user()->permission_id == 5)
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                                    <table class="table table-borderless align-middle mb-0">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th scope="col">Documento</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm">
                                                                            <div
                                                                                class="avatar-title bg-soft-primary text-primary rounded fs-20">
                                                                                <i class="ri-file-zip-fill"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ms-3 flex-grow-1">
                                                                            <h6 class="fs-16 mb-0"><a target="_blank"
                                                                                    href="{{ route('verdocumento', [$candidatura->id, 'identificação']) }}">Documento
                                                                                    de Identificação</a>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm">
                                                                            <div
                                                                                class="avatar-title bg-soft-primary text-primary rounded fs-20">
                                                                                <i class="ri-file-zip-fill"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ms-3 flex-grow-1">
                                                                            <h6 class="fs-16 mb-0"><a target="_blank"
                                                                                    href="{{ route('verdocumento', [$candidatura->id, 'diploma']) }}">Diploma
                                                                                    de Licenciatura</a>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @if ($candidatura->estado == 'aprovado' && $candidatura->pago == 'pago')
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-sm">
                                                                                <div
                                                                                    class="avatar-title bg-soft-primary text-primary rounded fs-20">
                                                                                    <i class="ri-file-zip-fill"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ms-3 flex-grow-1">
                                                                                <h6 class="fs-16 mb-0"><a
                                                                                        target="_blank"
                                                                                        href="{{ route('verdocumento', [$candidatura->id, 'ficha']) }}">Ficha
                                                                                        do Candidato</a>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        @endif

                                        @if (Auth::user()->permission_id != 5)
                                            <div class="col-lg-6">
                                                <iframe width="100%" height="100%"
                                                    src="{{ asset('sysapp/storage/app/public/' . $candidato->doc_diploma) }}"
                                                    frameborder="0"></iframe>
                                            </div>
                                            <div class="col-lg-6">
                                                <iframe width="100%" height="100%"
                                                    src="{{ asset('sysapp/storage/app/public/' . $candidato->doc_bi) }}"
                                                    frameborder="0"></iframe>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end tab-pane-->

                        <div class="tab-pane fade" id="actividade" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Histórico da candidatura</h5>
                                    <div class="acitivity-timeline py-3">
                                        @foreach ($historico as $item)
                                            @if ($item->destino != 'conta')
                                                @if (Auth::user()->permission_id != 5)
                                                    <div class="acitivity-item py-3 d-flex">
                                                        <div class="flex-shrink-0">
                                                            @if ($item->origem == 'Candidato')
                                                                @if ($item->getUser->getPessoa->avatar == null)
                                                                    <img src="{{ asset('assets/template/images/users/user_default.jpg') }}"
                                                                        alt=""
                                                                        class="avatar-xs rounded-circle acitivity-avatar">
                                                                @else
                                                                    <img src="{{ asset('sysapp/storage/app/public/' . Auth::user()->getPessoa->avatar) }}"
                                                                        alt=""
                                                                        class="avatar-xs rounded-circle acitivity-avatar">
                                                                @endif
                                                            @endif

                                                            @if ($item->origem == 'Sistema')
                                                                <img src="{{ asset('assets/template/images/sistema.jpg') }}"
                                                                    alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            @endif

                                                            @if ($item->origem == 'CEF')
                                                                <img src="https://demo.cef-oaa.org/images/logo_oaa_cor.png"
                                                                    alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            @endif
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-1">
                                                                {{ $item->origem == 'Sistema' ? 'Plataforma' : $item->getUser->getPessoa->nome }}
                                                                @if ($item->origem == 'CEF')
                                                                    <span
                                                                        class="badge bg-soft-primary text-primary align-middle">CEF-OAA</span>
                                                                @endif
                                                                @if ($item->origem == 'Sistema')
                                                                    <span
                                                                        class="badge bg-soft-info text-primary align-middle">Plataforma</span>
                                                                @endif

                                                            </h6>
                                                            <p class="text-muted mb-2">{{ $item->operacao }}</p>
                                                            <small
                                                                class="mb-0 text-muted">{{ $item->created_at }}</small>
                                                        </div>
                                                    </div>
                                                @endif

                                                @if (Auth::user()->permission_id == 5)
                                                    <div class="acitivity-item py-3 d-flex">
                                                        <div class="flex-shrink-0">
                                                            @if ($item->origem == 'Candidato')
                                                                @if ($item->getUser->getPessoa->avatar == null)
                                                                    <img src="{{ asset('assets/template/images/users/user_default.jpg') }}"
                                                                        alt=""
                                                                        class="avatar-xs rounded-circle acitivity-avatar">
                                                                @else
                                                                    <img src="{{ asset('sysapp/storage/app/public/' . Auth::user()->getPessoa->avatar) }}"
                                                                        alt=""
                                                                        class="avatar-xs rounded-circle acitivity-avatar">
                                                                @endif
                                                            @endif

                                                            @if ($item->origem == 'Sistema')
                                                                <img src="{{ asset('assets/template/images/sistema.jpg') }}"
                                                                    alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            @endif

                                                            @if ($item->origem == 'CEF')
                                                                <img src="https://demo.cef-oaa.org/images/logo_oaa_cor.png"
                                                                    alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            @endif

                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            @if ($item->origem == 'CEF')
                                                                <h6 class="mb-1">Funcionário CEF-OAA
                                                                    <span
                                                                        class="badge bg-soft-primary text-primary align-middle">CEF-OAA</span>
                                                                </h6>
                                                            @endif
                                                            @if ($item->origem == 'Sistema')
                                                                <h6 class="mb-1">Plataforma
                                                                    <span
                                                                        class="badge bg-soft-info text-primary align-middle">Plataforma</span>
                                                                </h6>
                                                            @endif
                                                            @if ($item->origem == 'Candidato')
                                                                <h6 class="mb-1">
                                                                    {{ $item->getUser->getPessoa->nome }}
                                                                </h6>
                                                            @endif

                                                            <p class="text-muted mb-2">{{ $item->operacao }}</p>
                                                            <small
                                                                class="mb-0 text-muted">{{ $item->created_at }}</small>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end tab-content-->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>

</div>

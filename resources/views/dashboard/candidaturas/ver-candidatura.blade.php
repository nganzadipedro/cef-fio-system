<div>

    <style>

        .hero-page .bg-soft-primary {
            border-radius: 20px;
            padding: 10px;
        }

        .hero-page .card {
            border-radius: 20px;
        }

        .notas-finais h5{
            text-align: center;
            font-size: 1.4rem;
            text-decoration: underline;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .observacao{
            padding: 10px;
            font-size: 14px;
            background-color: #fafafaff;
            color: #000;
            line-height: 1.7;
            border-radius: 5px;
        }

        .notas-finais .nota-modulo{
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

         .notas-finais .media-final{
            border: solid 1px #000;
            padding: 10px;
            background-color: #efefefff;
            font-weight: bold;
            font-size: 16px;
            border-radius: 5px;
            color: #000;
        }

        .notas-finais .nota-modulo span{
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

        .notas-finais .media-final .negativa{
            display: inline-block;
            float: right;
            background-color: #fff;
            font-size: 16px;
            color: #bd453aff;
            border-radius: 5px;
            padding: 3px;
        }

        .notas-finais .media-final .positiva{
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
                                                        alt="" class="avatar-xs">
                                                @else

                                                    <img src="{{ asset('sysapp/storage/app/public/' . Auth::user()->getPessoa->avatar) }}"
                                                        alt="" class="avatar-xs">
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div>
                                            <h4 class="fw-bold">{{ $candidatura->getPessoa->nome }}</h4>
                                            <h4 class="fw-bold">CÓDIGO: {{ $candidatura->codigo }}</h4>
                                            <div class="hstack gap-3 flex-wrap">
                                                <div><i class="ri-building-line align-bottom me-1"></i>
                                                    {{ $candidatura->getPessoa->email }}
                                                </div>
                                                <div class="vr"></div>
                                                <div>Data de inscrição: <span
                                                        class="fw-medium">{{ $candidatura->created_at }}</span></div>
                                                <div class="vr"></div>
                                                <div>Data de actualização: <span
                                                        class="fw-medium">{{ $candidatura->updated_at }}</span></div>
                                                <div class="vr"></div>
                                                <div class="badge rounded-pill bg-info fs-12">
                                                    {{ $candidatura->getFormacao->nome }}
                                                </div>
                                                <!-- @if (Auth::user()->permission_id == 5)
                                                <a href="" class="btn btn-primary rounded-pill">Actualizar
                                                    minha
                                                    candidatura</a>
                                                @endif -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <ul class="nav nav-tabs-custom border-bottom-0" role="tablist">
                            <li class="nav-item">
                                <a wire:ignore.self class="nav-link active fw-bold" data-bs-toggle="tab"
                                    href="#project-overview" role="tab">
                                    Visão geral
                                </a>
                            </li>
                            <li class="nav-item">
                                <a wire:ignore.self class="nav-link fw-bold" data-bs-toggle="tab"
                                    href="#project-documents" role="tab">
                                    Documentos
                                </a>
                            </li>
                           
                            <li class="nav-item">
                                    <a wire:ignore.self class="nav-link fw-bold" data-bs-toggle="tab"
                                        href="#project-notas-finais" role="tab">
                                        Notas Finais
                                    </a>
                                </li>
                             @if(Auth::user()->permission_id == 5)
                                <li class="nav-item">
                                    <a wire:ignore.self class="nav-link fw-bold" data-bs-toggle="tab"
                                        href="#project-declaracao" role="tab">
                                        Emitir Declaração
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a wire:ignore.self class="nav-link fw-bold" data-bs-toggle="tab"
                                    href="#project-activities" role="tab">
                                    Histórico
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link fw-bold" data-bs-toggle="tab" href="#project-team" role="tab">
                                    Team
                                </a>
                            </li> --}}
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
                <div wire:ignore.self class="tab-pane fade show active" id="project-overview" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xl-12 col-md-12 col-xs-12">
                            <div class="card">

                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-xl-9 col-lg-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="">
                                                                <h6 class="mb-3 fw-bold text-uppercase">Dados da
                                                                    Formação</h6>
                                                                <p>Formação em que se inscreveu:</p>

                                                                <ul class="vstack gap-2">
                                                                    <li>{{ $candidatura->getFormacao->nome }}</li>
                                                                    <li>{{ $candidatura->getFormacao->descricao }}</li>
                                                                    <li>{{ $candidatura->getTurma->descricao }}
                                                                    </li>
                                                                </ul>

                                                                <br>
                                                                <!-- @if (Auth::user()->permission_id == 5)
                                                                    <a href=""
                                                                        class="btn btn-primary rounded-pill">Actualizar
                                                                        minha
                                                                        candidatura</a>
                                                                @endif -->

                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="">
                                                                <h5 class="mb-3 fw-bold text-uppercase">Dados do
                                                                    Candidato</h5>
                                                                <h6>
                                                                    Género: {{ $candidatura->getPessoa->genero }} <br>
                                                                    <br>
                                                                    Documento de Identificação:
                                                                    {{ $candidatura->getPessoa->documento }} <br> <br>
                                                                    Nº do Documento de Identificação:
                                                                    {{ $candidatura->getPessoa->num_documento }} <br>
                                                                    <br>
                                                                    Género: {{ $candidatura->getPessoa->genero }} <br>
                                                                    <br>
                                                                    Email: {{ $candidatura->getPessoa->email }} <br>
                                                                    <br>
                                                                    Nº Telefone principal:
                                                                    {{ $candidatura->getPessoa->telefone1 }}
                                                                    <br> <br>
                                                                    Nº Telefone alternativo:
                                                                    {{ $candidatura->getPessoa->telefone2 }}

                                                                </h6>
                                                            </div>
                                                        </div>

                                                        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="">
                                                                <h5 class="mb-3 fw-bold text-uppercase">Outros dados
                                                                </h5>
                                                                <h6>
                                                                    Nº da Cédula: {{ $candidatura->num_cedula }}
                                                                    <br> <br>
                                                                    Nome do Patrono: {{ $candidatura->nome_patrono }}
                                                                    <br> <br>
                                                                    Email do patrono: {{ $candidatura->email_patrono }}
                                                                    <br> <br>
                                                                    Nº Telefone do patrono:
                                                                    {{ $candidatura->telefone_patrono }}
                                                                    <br> <br>
                                                                    Escritório: {{ $candidatura->nome_escritorio }}
                                                                    <br> <br>
                                                                    Endereço do escritório:
                                                                    {{ $candidatura->endereco_escritorio }}
                                                                    <br> <br>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xxl-12 col-lg-12">
                                                            <div class="text-muted">

                                                                <div class="pt-3 border-top border-top-dashed mt-4">
                                                                    <div class="row">

                                                                        <div class="col-lg-4 col-sm-6">
                                                                            <div>
                                                                                <p
                                                                                    class="mb-2 text-uppercase fw-medium fs-13">
                                                                                    Data de inscrição:</p>
                                                                                <h5 class="fs-15 mb-0">
                                                                                    {{ $candidatura->created_at }}
                                                                                </h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4 col-sm-6">
                                                                            <div>
                                                                                <p
                                                                                    class="mb-2 text-uppercase fw-medium fs-13">
                                                                                    Data de actualização:</p>
                                                                                <h5 class="fs-15 mb-0">
                                                                                    {{ $candidatura->updated_at }}
                                                                                </h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4 col-sm-6">
                                                                            <div>
                                                                                <p
                                                                                    class="mb-2 text-uppercase fw-medium fs-13">
                                                                                    Estado da candidatura:</p>
                                                                                @if ($candidatura->estado == 'suspenso')
                                                                                    <div class="badge bg-danger fs-12">
                                                                                        Suspensa</div>
                                                                                @endif

                                                                                @if ($candidatura->estado == 'pendente')
                                                                                    <div class="badge bg-warning fs-12">
                                                                                        Pendente</div>
                                                                                @endif

                                                                                @if ($candidatura->estado == 'aprovado')
                                                                                    <div class="badge bg-success fs-12">
                                                                                        Aprovada</div>
                                                                                @endif

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                @if ($candidatura->estado == 'suspenso')
                                                                    <div class="pt-3 border-top border-top-dashed mt-4">
                                                                        <h6 class="mb-3 fw-bold text-uppercase">Motivo da
                                                                            suspensão</h6>
                                                                        <div class="row g-3">
                                                                            <div class="col-xxl-12 col-lg-12">
                                                                                <h5 class="alert alert-warning">
                                                                                    {{ $candidatura->motivo_suspensao }}
                                                                                </h5>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end row -->
                                                                    </div>
                                                                @endif


                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end card body -->
                                            </div>
                                        </div>
                                        <!-- ene col -->

                                        <div class="col-xl-3 col-lg-4">
                                            @if ((Auth::user()->permission_id == 2 || Auth::user()->permission_id == 1) && $candidatura->estado == 'pendente')
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-4">Aprovar / Destacar</h5>
                                                        <div class="d-flex flex-wrap gap-2 fs-16">
                                                            <button type="button" class="btn btn-success"
                                                                data-bs-toggle="modal" data-bs-target="#myModal">Aprovar
                                                                Candidatura</button>
                                                            <a class="btn btn-warning" wire:click="destacar()">Destacar
                                                                candidatura</a>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->

                                                <div class="card">
                                                    <div class="card-header align-items-center d-flex border-bottom-dashed">
                                                        <h4 class="card-title mb-0 flex-grow-1">Suspender</h4>
                                                        <div class="flex-shrink-0">
                                                            {{-- <button type="button" class="btn btn-soft-danger btn-sm"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#inviteMembersModal"><i
                                                                    class="ri-share-line me-1 align-bottom"></i> Invite
                                                                Member</button> --}}
                                                        </div>
                                                    </div>

                                                    <div class="card-body">
                                                        <div data-simplebar style="height: 235px;" class="mx-n3 px-3">

                                                            <label for="">Motivo da suspensão</label>
                                                            <select wire:model="motivo_suspensao" name="motivo_suspensao"
                                                                id="motivo_suspensao" class="form-control">
                                                                <option value="">Selecione...</option>
                                                                @foreach ($motivos as $item)
                                                                    <option value="{{ $item->descricao }}">
                                                                        {{ $item->descricao }}
                                                                    </option>
                                                                @endforeach
                                                                <option value="Outro">Outro</option>
                                                            </select>

                                                            <br>
                                                            @if ($motivo_suspensao == 'Outro')
                                                                <label for="">Outro motivo</label>
                                                                <textarea placeholder="Digite aqui o outro motivo"
                                                                    class="form-control" wire:model="motivo_suspensao2" name=""
                                                                    id="" cols="30" rows="3"></textarea>
                                                            @endif



                                                            <br>
                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-toggle="modal" data-bs-target="#myModal2">Suspender
                                                                Candidatura</button>

                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            @endif

                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>



                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end tab pane -->
                <div wire:ignore.self class="tab-pane fade" id="project-documents" role="tabpanel">
                    <div class="card" style="height: 600px;">
                        <div class="card-body" style="height: 500px;">
                            <div class="d-flex align-items-center mb-4">
                                <h5 class="card-title flex-grow-1">Documentos</h5>
                            </div>
                            <div class="row" style="height: 100%">

                                <!-- @if (Auth::user()->permission_id == 5)
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
                                                                            href="{{ route('verdocumento', [$candidatura->id, 'cedula']) }}">Cédula
                                                                            de Advogado Estagiário</a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                @endif -->


                                @if (Auth::user()->permission_id >= 1)
                                    <div class="col-lg-6 col-md-6 col-xl-6 col-sm-6 col-xs-6">
                                        @if($doc_ced == false)
                                            <h5 class="alert alert-warning text-center">
                                                Documento indisponível
                                            </h5>
                                        @else
                                            <iframe width="100%" height="100%"
                                                src="{{ asset('sysapp/storage/app/public/' . $candidatura->cedula_advogado) }}"
                                                frameborder="0"></iframe>
                                        @endif

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-xl-6 col-sm-6 col-xs-6">

                                        @if ($doc_bi == false)
                                            <h5 class="alert alert-warning text-center">
                                                Documento indisponível.
                                            </h5>
                                        @else
                                            <iframe width="100%" height="100%"
                                                src="{{ asset('sysapp/storage/app/public/' . $candidatura->bilhete_identidade) }}"
                                                frameborder="0"></iframe>
                                        @endif

                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <!-- end tab pane -->

                    <!-- end tab pane -->
                    {{-- <div class="tab-pane fade" id="project-team" role="tabpanel">
                        <div class="row g-4 mb-3">
                            <div class="col-sm">
                                <div class="d-flex">
                                    <div class="search-box me-2">
                                        <input type="text" class="form-control" placeholder="Search member...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <div>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#inviteMembersModal"><i
                                            class="ri-share-line me-1 align-bottom"></i> Invite
                                        Member</button>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="team-list list-view-filter">
                            <div class="card team-box">
                                <div class="card-body px-4">
                                    <div class="row align-items-center team-row">
                                        <div class="col team-settings">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="flex-shrink-0 me-2">
                                                        <button type="button" class="btn fs-16 p-0 favourite-btn">
                                                            <i class="ri-star-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col text-end dropdown">
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill fs-17"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="team-profile-img">
                                                <div class="avatar-lg img-thumbnail rounded-circle">
                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="img-fluid d-block rounded-circle" />
                                                </div>
                                                <div class="team-content">
                                                    <a href="#" class="d-block">
                                                        <h5 class="fs-16 mb-1">Nancy Martino</h5>
                                                    </a>
                                                    <p class="text-muted mb-0">Team Leader & HR</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="row text-muted text-center">
                                                <div class="col-6 border-end border-end-dashed">
                                                    <h5 class="mb-1">225</h5>
                                                    <p class="text-muted mb-0">Projects</p>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="mb-1">197</h5>
                                                    <p class="text-muted mb-0">Tasks</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col">
                                            <div class="text-end">
                                                <a href="pages-profile.html" class="btn btn-light view-btn">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card team-box">
                                <div class="card-body px-4">
                                    <div class="row align-items-center team-row">
                                        <div class="col team-settings">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="flex-shrink-0 me-2">
                                                        <button type="button"
                                                            class="btn fs-16 p-0 favourite-btn active">
                                                            <i class="ri-star-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col text-end dropdown">
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill fs-17"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="team-profile-img">
                                                <div class="avatar-lg img-thumbnail rounded-circle">
                                                    <div class="avatar-title bg-soft-danger text-danger rounded-circle">
                                                        HB
                                                    </div>
                                                </div>
                                                <div class="team-content">
                                                    <a href="#" class="d-block">
                                                        <h5 class="fs-16 mb-1">Henry Baird</h5>
                                                    </a>
                                                    <p class="text-muted mb-0">Full Stack Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="row text-muted text-center">
                                                <div class="col-6 border-end border-end-dashed">
                                                    <h5 class="mb-1">352</h5>
                                                    <p class="text-muted mb-0">Projects</p>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="mb-1">376</h5>
                                                    <p class="text-muted mb-0">Tasks</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col">
                                            <div class="text-end">
                                                <a href="pages-profile.html" class="btn btn-light view-btn">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card team-box">
                                <div class="card-body px-4">
                                    <div class="row align-items-center team-row">
                                        <div class="col team-settings">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="flex-shrink-0 me-2">
                                                        <button type="button"
                                                            class="btn fs-16 p-0 favourite-btn active">
                                                            <i class="ri-star-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col text-end dropdown">
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill fs-17"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="team-profile-img">
                                                <div class="avatar-lg img-thumbnail rounded-circle">
                                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                                        class="img-fluid d-block rounded-circle" />
                                                </div>
                                                <div class="team-content">
                                                    <a href="#" class="d-block">
                                                        <h5 class="fs-16 mb-1">Frank Hook</h5>
                                                    </a>
                                                    <p class="text-muted mb-0">Project Manager</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="row text-muted text-center">
                                                <div class="col-6 border-end border-end-dashed">
                                                    <h5 class="mb-1">164</h5>
                                                    <p class="text-muted mb-0">Projects</p>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="mb-1">182</h5>
                                                    <p class="text-muted mb-0">Tasks</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col">
                                            <div class="text-end">
                                                <a href="pages-profile.html" class="btn btn-light view-btn">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card team-box">
                                <div class="card-body px-4">
                                    <div class="row align-items-center team-row">
                                        <div class="col team-settings">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="flex-shrink-0 me-2">
                                                        <button type="button" class="btn fs-16 p-0 favourite-btn">
                                                            <i class="ri-star-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col text-end dropdown">
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill fs-17"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="team-profile-img">
                                                <div class="avatar-lg img-thumbnail rounded-circle">
                                                    <img src="assets/images/users/avatar-8.jpg" alt=""
                                                        class="img-fluid d-block rounded-circle" />
                                                </div>
                                                <div class="team-content">
                                                    <a href="#" class="d-block">
                                                        <h5 class="fs-16 mb-1">Jennifer Carter</h5>
                                                    </a>
                                                    <p class="text-muted mb-0">UI/UX Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="row text-muted text-center">
                                                <div class="col-6 border-end border-end-dashed">
                                                    <h5 class="mb-1">225</h5>
                                                    <p class="text-muted mb-0">Projects</p>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="mb-1">197</h5>
                                                    <p class="text-muted mb-0">Tasks</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col">
                                            <div class="text-end">
                                                <a href="pages-profile.html" class="btn btn-light view-btn">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card team-box">
                                <div class="card-body px-4">
                                    <div class="row align-items-center team-row">
                                        <div class="col team-settings">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="flex-shrink-0 me-2">
                                                        <button type="button" class="btn fs-16 p-0 favourite-btn">
                                                            <i class="ri-star-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col text-end dropdown">
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill fs-17"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="team-profile-img">
                                                <div class="avatar-lg img-thumbnail rounded-circle">
                                                    <div
                                                        class="avatar-title bg-soft-success text-success rounded-circle">
                                                        ME
                                                    </div>
                                                </div>
                                                <div class="team-content">
                                                    <a href="#" class="d-block">
                                                        <h5 class="fs-16 mb-1">Megan Elmore</h5>
                                                    </a>
                                                    <p class="text-muted mb-0">Team Leader & Web Developer
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="row text-muted text-center">
                                                <div class="col-6 border-end border-end-dashed">
                                                    <h5 class="mb-1">201</h5>
                                                    <p class="text-muted mb-0">Projects</p>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="mb-1">263</h5>
                                                    <p class="text-muted mb-0">Tasks</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col">
                                            <div class="text-end">
                                                <a href="pages-profile.html" class="btn btn-light view-btn">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card team-box">
                                <div class="card-body px-4">
                                    <div class="row align-items-center team-row">
                                        <div class="col team-settings">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="flex-shrink-0 me-2">
                                                        <button type="button" class="btn fs-16 p-0 favourite-btn">
                                                            <i class="ri-star-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col text-end dropdown">
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill fs-17"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="team-profile-img">
                                                <div class="avatar-lg img-thumbnail rounded-circle">
                                                    <img src="assets/images/users/avatar-4.jpg" alt=""
                                                        class="img-fluid d-block rounded-circle" />
                                                </div>
                                                <div class="team-content">
                                                    <a href="#" class="d-block">
                                                        <h5 class="fs-16 mb-1">Alexis Clarke</h5>
                                                    </a>
                                                    <p class="text-muted mb-0">Backend Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="row text-muted text-center">
                                                <div class="col-6 border-end border-end-dashed">
                                                    <h5 class="mb-1">132</h5>
                                                    <p class="text-muted mb-0">Projects</p>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="mb-1">147</h5>
                                                    <p class="text-muted mb-0">Tasks</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col">
                                            <div class="text-end">
                                                <a href="pages-profile.html" class="btn btn-light view-btn">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card team-box">
                                <div class="card-body px-4">
                                    <div class="row align-items-center team-row">
                                        <div class="col team-settings">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="flex-shrink-0 me-2">
                                                        <button type="button" class="btn fs-16 p-0 favourite-btn">
                                                            <i class="ri-star-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col text-end dropdown">
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill fs-17"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="team-profile-img">
                                                <div class="avatar-lg img-thumbnail rounded-circle">
                                                    <div class="avatar-title bg-soft-info text-info rounded-circle">
                                                        NC
                                                    </div>
                                                </div>
                                                <div class="team-content">
                                                    <a href="#" class="d-block">
                                                        <h5 class="fs-16 mb-1">Nathan Cole</h5>
                                                    </a>
                                                    <p class="text-muted mb-0">Front-End Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="row text-muted text-center">
                                                <div class="col-6 border-end border-end-dashed">
                                                    <h5 class="mb-1">352</h5>
                                                    <p class="text-muted mb-0">Projects</p>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="mb-1">376</h5>
                                                    <p class="text-muted mb-0">Tasks</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col">
                                            <div class="text-end">
                                                <a href="pages-profile.html" class="btn btn-light view-btn">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card team-box">
                                <div class="card-body px-4">
                                    <div class="row align-items-center team-row">
                                        <div class="col team-settings">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="flex-shrink-0 me-2">
                                                        <button type="button" class="btn fs-16 p-0 favourite-btn">
                                                            <i class="ri-star-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col text-end dropdown">
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill fs-17"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="team-profile-img">
                                                <div class="avatar-lg img-thumbnail rounded-circle">
                                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                                        class="img-fluid d-block rounded-circle" />
                                                </div>
                                                <div class="team-content">
                                                    <a href="#" class="d-block">
                                                        <h5 class="fs-16 mb-1">Joseph Parker</h5>
                                                    </a>
                                                    <p class="text-muted mb-0">Team Leader & HR</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="row text-muted text-center">
                                                <div class="col-6 border-end border-end-dashed">
                                                    <h5 class="mb-1">64</h5>
                                                    <p class="text-muted mb-0">Projects</p>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="mb-1">93</h5>
                                                    <p class="text-muted mb-0">Tasks</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col">
                                            <div class="text-end">
                                                <a href="pages-profile.html" class="btn btn-light view-btn">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card team-box">
                                <div class="card-body px-4">
                                    <div class="row align-items-center team-row">
                                        <div class="col team-settings">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="flex-shrink-0 me-2">
                                                        <button type="button" class="btn fs-16 p-0 favourite-btn">
                                                            <i class="ri-star-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col text-end dropdown">
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill fs-17"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="team-profile-img">
                                                <div class="avatar-lg img-thumbnail rounded-circle">
                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="img-fluid d-block rounded-circle" />
                                                </div>
                                                <div class="team-content">
                                                    <a href="#" class="d-block">
                                                        <h5 class="fs-16 mb-1">Erica Kernan</h5>
                                                    </a>
                                                    <p class="text-muted mb-0">Web Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="row text-muted text-center">
                                                <div class="col-6 border-end border-end-dashed">
                                                    <h5 class="mb-1">345</h5>
                                                    <p class="text-muted mb-0">Projects</p>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="mb-1">298</h5>
                                                    <p class="text-muted mb-0">Tasks</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col">
                                            <div class="text-end">
                                                <a href="pages-profile.html" class="btn btn-light view-btn">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card team-box">
                                <div class="card-body px-4">
                                    <div class="row align-items-center team-row">
                                        <div class="col team-settings">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="flex-shrink-0 me-2">
                                                        <button type="button" class="btn fs-16 p-0 favourite-btn">
                                                            <i class="ri-star-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col text-end dropdown">
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill fs-17"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-star-fill text-muted me-2 align-bottom"></i>Favourite</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="ri-delete-bin-5-fill text-muted me-2 align-bottom"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="team-profile-img">
                                                <div class="avatar-lg img-thumbnail rounded-circle">
                                                    <div
                                                        class="avatar-title border bg-light text-primary rounded-circle">
                                                        DP
                                                    </div>
                                                </div>
                                                <div class="team-content">
                                                    <a href="#" class="d-block">
                                                        <h5 class="fs-16 mb-1">Donald Palmer</h5>
                                                    </a>
                                                    <p class="text-muted mb-0">Wed Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col">
                                            <div class="row text-muted text-center">
                                                <div class="col-6 border-end border-end-dashed">
                                                    <h5 class="mb-1">97</h5>
                                                    <p class="text-muted mb-0">Projects</p>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="mb-1">135</h5>
                                                    <p class="text-muted mb-0">Tasks</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col">
                                            <div class="text-end">
                                                <a href="pages-profile.html" class="btn btn-light view-btn">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!-- end team list -->

                        <div class="row g-0 text-center text-sm-start align-items-center mb-3">
                            <div class="col-sm-6">
                                <div>
                                    <p class="mb-sm-0">Showing 1 to 10 of 12 entries</p>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-sm-6">
                                <ul
                                    class="pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                                    <li class="page-item disabled"> <a href="#" class="page-link"><i
                                                class="mdi mdi-chevron-left"></i></a> </li>
                                    <li class="page-item"> <a href="#" class="page-link">1</a> </li>
                                    <li class="page-item active"> <a href="#" class="page-link">2</a> </li>
                                    <li class="page-item"> <a href="#" class="page-link">3</a> </li>
                                    <li class="page-item"> <a href="#" class="page-link">4</a> </li>
                                    <li class="page-item"> <a href="#" class="page-link">5</a> </li>
                                    <li class="page-item"> <a href="#" class="page-link"><i
                                                class="mdi mdi-chevron-right"></i></a> </li>
                                </ul>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div> --}}
                    <!-- end tab pane -->
                </div>

                
                <div wire:ignore.self class="tab-pane fade" id="project-notas-finais" role="tabpanel">
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
                                                    As notas apresentadas aqui correspondem as notas finais de cada módulo ou disciplina.
                                                    Caso a nota final seja diferente da nota obtida na prova online realizada na plataforma do CEF-OAA,
                                                    significa que o Professor/Formador, além da prova, usou um determinado critério para obtenção da nota final.
                                                </p>
                                                <p class="observacao">
                                                    Os módulos/disciplinas que aparecem nesta secção e que não constam na página das Provas Online, são aquelas cujas provas não foram realizadas na plataforma do CEF-OAA.
                                                </p>

                                                <h6 class="nota-modulo">Prática Processual Penal <span>{{ isset($notas_finais[1]) ? $notas_finais[1] : 'Sem Nota' }}</span> </h6>
                                                <h6 class="nota-modulo">Prática Processual Civil <span>{{ isset($notas_finais[2]) ? $notas_finais[2] : 'Sem Nota' }}</span> </h6>
                                                <h6 class="nota-modulo">Ética e Deontologia Profissional <span>{{ isset($notas_finais[3]) ? $notas_finais[3] : 'Sem Nota' }}</span> </h6>
                                                <h6 class="nota-modulo">Práticas Jurídicas Multidisciplinares e Notariado <span>{{ isset($notas_finais[4]) ? $notas_finais[4] : 'Sem Nota' }}</span> </h6>
                                                <h6 class="nota-modulo">Laboral <span>{{ isset($notas_finais[5]) ? $notas_finais[5] : 'Sem Nota' }}</span> </h6>
                                                <h6 class="media-final">Média Final do Formando <span class="{{ $nota_final >= 10 ? 'positiva' : 'negativa' }}">{{ number_format($nota_final, 2, ',', '.') }}</span> </h6>

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
                    @if(Auth::user()->permission_id == 5)
                    <div wire:ignore.self class="tab-pane fade" id="project-declaracao" role="tabpanel">
                        <div class="card" style="height: 600px;">
                            <div class="card-body" style="height: 500px;">
                                <div class="d-flex align-items-center mb-4">
                                    <h5 class="card-title flex-grow-1">Emitir Declaração</h5>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="alert alert-primary">
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
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">


                                        @if($tem_aviso == true)
                                            <div class="alert alert-warning">
                                                <h4 class="text-center mb-3">AVISOS / INCONFORMIDADES</h4>
                                                <h6>
                                                    <p>
                                                    <ul style="font-size: 14px;">
                                                        @foreach ($avisos as $av)
                                                            @if($av != null)
                                                                <li>{{$av}}</li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                    </p>

                                                </h6>
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

                                                @if($solicitacao != null)
                                                    @if($solicitacao->estado == 'pendente' && ($dia_actual <= $solicitacao->validade_referencia))
                                                        Ainda não efectuou o pagamento da referência solicitada. Efectue o pagamento.
                                                    @endif
                                                    @if($solicitacao->estado == 'pendente' && ($dia_actual > $solicitacao->validade_referencia))
                                                        <a wire:click="solicitar_ref_declaracao()" class="btn btn-success">Solicitar
                                                            Nova Referência de Pagamento</a>
                                                    @endif
                                                    @if($solicitacao->estado == 'aprovado' && $aluno != null)
                                                        <a target="_blank"
                                                            href="{{ route('emitirdec', [$candidatura->hash, $aluno->hash]) }}"
                                                            class="btn btn-success">Clique aqui para emitir a sua declaração</a>
                                                    @endif
                                                @endif

                                                @if($solicitacao == null)
                                                    @if((count($avaliacao_aluno) >= 5 && $nota_final >= 9.5 && $aluno != null && $aluno_formacao->turma_id < 10) || (count($avaliacao_aluno) >= 5 && $nota_final >= 9.5 && $aluno != null && $aluno_formacao->turma_id == 10 && $aluno->id == 1341))
                                                        <a target="_blank"
                                                            href="{{ route('emitirdec', [$candidatura->hash, $aluno->hash]) }}"
                                                            class="btn btn-success">Clique aqui para emitir a sua declaração</a>
                                                    @else
                                                        @if(count($avaliacao_aluno) < 5)
                                                            Caro candidato, não tem todas as notas inseridas na plataforma.
                                                        @endif
                                                        @if(count($avaliacao_aluno) >= 5 && $nota_final < 9.5)
                                                            Caro candidato, a sua classificação final não permite emitir a declaração.
                                                        @endif
                                                    @endif
                                                @endif

                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div wire:ignore.self class="tab-pane fade" id="project-activities" role="tabpanel">
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
                                                            <img src="{{ asset('assets/template/images/users/user_default.jpg') }}" alt=""
                                                                class="avatar-xs rounded-circle acitivity-avatar">
                                                        @else

                                                            <img src="{{ asset('sysapp/storage/app/public/' . Auth::user()->getPessoa->avatar) }}"
                                                                alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                        @endif

                                                    @endif


                                                    @if ($item->origem == 'Sistema')
                                                        <img src="{{ asset('assets/template/images/sistema.jpg') }}" alt=""
                                                            class="avatar-xs rounded-circle acitivity-avatar">
                                                    @endif


                                                    @if ($item->origem == 'CEF')
                                                        <img src="https://demo.cef-oaa.org/images/logo_oaa_cor.png" alt=""
                                                            class="avatar-xs rounded-circle acitivity-avatar">
                                                    @endif

                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1">
                                                        {{ $item->origem == 'Sistema' ? 'Plataforma' : $item->getUser->getPessoa->nome }}
                                                        @if ($item->origem == 'CEF')
                                                            <span class="badge bg-soft-primary text-primary align-middle">CEF-OAA</span>
                                                        @endif

                                                        @if ($item->origem == 'Sistema')
                                                            <span class="badge bg-soft-info text-primary align-middle">Plataforma</span>
                                                        @endif


                                                    </h6>
                                                    <p class="text-muted mb-2">{{ $item->operacao }}</p>
                                                    <small class="mb-0 text-muted">{{ $item->created_at }}</small>
                                                </div>
                                            </div>
                                        @endif


                                        @if (Auth::user()->permission_id == 5)
                                            <div class="acitivity-item py-3 d-flex">
                                                <div class="flex-shrink-0">
                                                    @if ($item->origem == 'Candidato')
                                                        @if ($item->getUser->getPessoa->avatar == null)
                                                            <img src="{{ asset('assets/template/images/users/user_default.jpg') }}" alt=""
                                                                class="avatar-xs rounded-circle acitivity-avatar">
                                                        @else

                                                            <img src="{{ asset('sysapp/storage/app/public/' . Auth::user()->getPessoa->avatar) }}"
                                                                alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                        @endif

                                                    @endif


                                                    @if ($item->origem == 'Sistema')
                                                        <img src="{{ asset('assets/template/images/sistema.jpg') }}" alt=""
                                                            class="avatar-xs rounded-circle acitivity-avatar">
                                                    @endif


                                                    @if ($item->origem == 'CEF')
                                                        <img src="https://demo.cef-oaa.org/images/logo_oaa_cor.png" alt=""
                                                            class="avatar-xs rounded-circle acitivity-avatar">
                                                    @endif


                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    @if ($item->origem == 'CEF')
                                                        <h6 class="mb-1">Funcionário CEF-OAA
                                                            <span class="badge bg-soft-primary text-primary align-middle">CEF-OAA</span>
                                                        </h6>
                                                    @endif

                                                    @if ($item->origem == 'Sistema')
                                                        <h6 class="mb-1">Plataforma
                                                            <span class="badge bg-soft-info text-primary align-middle">Plataforma</span>
                                                        </h6>
                                                    @endif

                                                    @if ($item->origem == 'Candidato')
                                                        <h6 class="mb-1">
                                                            {{ $item->getUser->getPessoa->nome }}
                                                        </h6>
                                                    @endif


                                                    <p class="text-muted mb-2">{{ $item->operacao }}</p>
                                                    <small class="mb-0 text-muted">{{ $item->created_at }}</small>
                                                </div>
                                            </div>
                                        @endif

                                    @endif

                                @endforeach
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
            </div>
            <!-- end col -->
        </div>

        <div id="myModal2" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel2" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel2">
                            Confirmar suspensão</h5>
                        <button type="button" class="btn-close fecharModal" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="fs-15">
                            Tem certeza que pretende suspender
                            esta
                            candidatura?
                        </h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <a wire:click="suspender()" class="btn btn-success">Confirmar</a>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- end row -->

        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">
                            Confirmar aprovação</h5>
                        <button type="button" class="btn-close fecharModal" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="fs-15">
                            Tem certeza que pretende aprovar
                            esta
                            candidatura?
                        </h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <a wire:click="aprovar()" type="button" class="btn btn-success">Confirmar</a>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

    </div>
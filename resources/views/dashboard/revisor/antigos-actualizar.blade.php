<div>
        <div class="row  mt-2 mb-4">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Plataforma de gestão da Formação Inicial Obrigatória </h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Actualização de Dados de Formandos Antigos</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="profile-foreground position-relative mx-n4 mt-n4 mt-5">
            <div class="profile-wid-bg">
                <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
            </div>
        </div>
        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
            <div class="row g-4">
                <div class="col-auto">
                    <div class="avatar-lg">
                        @if ($pessoa->avatar == null)
                            <img src="{{ asset('assets/template/images/users/user_default.jpg') }}" alt="user-img"
                                class="img-thumbnail rounded-circle" />
                        @else
                            <img src="{{ asset('storage/' . $pessoa->avatar) }}" alt="user-img"
                                class="img-thumbnail rounded-circle" />
                        @endif

                    </div>
                </div>
                <!--end col-->
                <div class="col">
                    <div class="p-2">
                        <h3 class="text-white mb-1">{{ $pessoa->nome }}</h3>
                        <div class="hstack text-white-50 gap-1">

                        </div>
                    </div>
                </div>
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
                                    <a wire:ignore class="nav-link fs-14 active" data-bs-toggle="tab" href="#actualizar"
                                        role="tab">
                                        <i class="ri-list-unordered d-inline-block d-md-none"></i> <span
                                            class="d-none d-md-inline-block">Actualização de dados</span>
                                    </a>
                                </li>
                        </ul>
                    </div>
                    <!-- Tab panes -->
                    <div wire:ignore class="tab-content pt-4 text-muted">
                    
                     
                            <div wire:ignore class="tab-pane active" id="actualizar" role="tabpanel">
                                <div class="row">

                                    <!--end col-->
                                    <div class="col-xxl-12">
                                        <div class="card">
                                            <div class="card-body">

                                                <form action="">

                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12 col-xs-12">
                                                            <div class="page-title-box align-items-center text-center">
                                                                <h4 class="mb-sm-0 alert alert-primary text-center">
                                                                    Preencha
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
                                                                    <h4 class="card-title mb-0 flex-grow-1">Dados Iniciais
                                                                    </h4>
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
                                                                                class="col-xxl-12 col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                                                <div>
                                                                                    <label for="nome_completo"
                                                                                        class="form-label">Nome
                                                                                        completo</label>
                                                                                    <input required type="text"
                                                                                        class="form-control"
                                                                                        name="nome_completo" wire:model="nome"
                                                                                        value="{{ $pessoa->nome }}"
                                                                                        id="nome_completo">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xxl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                                                <div>
                                                                                    <label for="email"
                                                                                        class="form-label">Email</label>
                                                                                    <input required wire:model="email"
                                                                                        value="{{ $pessoa->email }}"
                                                                                        type="email" 
                                                                                        class="form-control"
                                                                                        id="email" name="email">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xxl-3 col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                                                                <div>
                                                                                    <label for="tel1"
                                                                                        class="form-label">Nº de telefone
                                                                                        principal</label>
                                                                                    <input required wire:model="telefone1"
                                                                                        value="{{ $pessoa->telefone1 }}"
                                                                                        type="text" minlength="9"
                                                                                        maxlength="9"
                                                                                        class="form-control"
                                                                                        id="telefone1" name="telefone1">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-xxl-3 col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                                                                <div>
                                                                                    <label for="tel2"
                                                                                        class="form-label">Nº de telefone
                                                                                        alternativo</label>
                                                                                    <input required wire:model="telefone2"
                                                                                        value="{{ $pessoa->telefone2 }}"
                                                                                        type="email" minlength="9"
                                                                                        maxlength="9"
                                                                                        class="form-control"
                                                                                        id="telefone2" name="telefone2">
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                            class="col-xxl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                                            <div>
                                                                                <label for="num_cedula"
                                                                                    class="form-label">N.º da Cédula de
                                                                                    Advogado(a) Estagiário(a)
                                                                                </label>
                                                                                <input required type="text" wire:model="num_cedula"
                                                                                    class="form-control"
                                                                                    id="num_cedula" name="num_cedula" value="{{ $aluno->num_cedula_advogado }}">
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="col-xxl-3 col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                                                            <div>
                                                                                <label for="basiInput"
                                                                                    class="form-label">Género </label>
                                                                                <br>
                                                                                <div
                                                                                    class="form-check form-check-inline">
                                                                                    <input class="form-check-input"
                                                                                        type="radio" name="genero" wire:model="genero"
                                                                                        id="genero_m"
                                                                                        value="Masculino" {{ $pessoa->genero == 'Masculino' ? 'checked' : '' }}>
                                                                                    <label class="form-check-label"
                                                                                        for="genero_m">Masculino</label>
                                                                                </div>
                                                                                <div
                                                                                    class="form-check form-check-inline">
                                                                                    <input class="form-check-input"
                                                                                        type="radio" name="genero"
                                                                                        id="genero_f" wire:model="genero"
                                                                                        value="Feminino" {{ $pessoa->genero != 'Masculino' ? 'checked' : '' }}>
                                                                                    <label class="form-check-label"
                                                                                        for="genero_f">Feminino</label>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div
                                                                            class="col-xxl-3 col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                                                            <div>
                                                                                <label for="num_cedula"
                                                                                    class="form-label">Nº. Bilhete de Identidade
                                                                                </label>
                                                                                <input type="text" wire:model="num_documento"
                                                                                    class="form-control"
                                                                                    id="num_documento2" name="num_documento" maxlength="14" value="{{ $pessoa->num_documento }}">
                                                                            </div>
                                                                        </div>
                                                                            <!--end col-->
                                                                        </div>
                                                                   
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a wire:click="salvar_dados" class="btn btn-success">Confirmar Actualização</a>

                                                </form>
                                            </div>
                                            <!--end card-body-->
                                        </div><!-- end card -->

                                    </div>
                                    <!--end col-->
                                </div>
                            </div>
                   
                    </div>
                    <!--end tab-content-->
                </div>
            </div>
            <!--end col-->
        </div>
    </div>

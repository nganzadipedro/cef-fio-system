<div class="app-menu navbar-menu" style="background-color: #ccc">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>

            {{-- menu para o candidato --}}
            @if (Auth::user()->permission_id == 5)
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Início</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarDashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('candidato.dashboard') }}" class="nav-link" data-key="t-crm">
                                        Dashboard </a>
                                </li>
                            </ul>
                        </div>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarLayouts">
                            <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Formação</span> <span
                                class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarLayouts">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('candidato.minhasformacoes') }}" class="nav-link"
                                        data-key="t-horizontal">Acessar Formação</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('candidato.provas') }}" class="nav-link"
                                        data-key="t-horizontal">Provas Online</a>
                                </li>
                            </ul>
                        </div>
                    </li> <!-- end Dashboard Menu -->

                </ul>
            @endif

            @if (Auth::user()->permission_id == 6)
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Início</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarDashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('formador.dashboard') }}" class="nav-link" data-key="t-crm">
                                        Dashboard </a>
                                </li>
                            </ul>
                        </div>
                    </li> <!-- end Dashboard Menu -->


                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAuth">
                            <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Provas</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarAuth">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('provas.cadastrar') }}" class="nav-link"
                                        data-key="t-horizontal">Cadastrar prova</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('provas.listar') }}" class="nav-link"
                                        data-key="t-horizontal">Listar provas</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>
            @endif

            @if (Auth::user()->permission_id == 2)
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Início</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarDashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('revisor.dashboard') }}" class="nav-link" data-key="t-crm">
                                        Dashboard </a>
                                </li>
                            </ul>
                        </div>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarLayouts">
                            <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Candidaturas</span> <span
                                class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarLayouts">
                            <ul class="nav nav-sm flex-column">

                                <li class="nav-item">
                                    <a href="{{ route('candidaturas.pendentes', 'masc') }}" class="nav-link"
                                        data-key="t-horizontal">Pendentes (Masculino)</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('candidaturas.pendentes', 'fem') }}" class="nav-link"
                                        data-key="t-horizontal">Pendentes (Femenino)</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('candidaturas.suspensas') }}" class="nav-link"
                                        data-key="t-horizontal">Suspensas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('candidaturas.destacadas') }}" class="nav-link"
                                        data-key="t-horizontal">Destacadas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('candidaturas.aprovadas') }}" class="nav-link"
                                        data-key="t-horizontal">Aprovadas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('candidaturas.pagas') }}" class="nav-link"
                                        data-key="t-horizontal">Pagas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('candidaturas.nova.referencia') }}" class="nav-link"
                                        data-key="t-horizontal">Nova referência de pagamento</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAuth">
                            <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Formandos</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarAuth">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('revisor.formandos.listar') }}" class="nav-link"
                                        data-key="t-horizontal">Listar formandos</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('revisor.formandos.declaracoes') }}" class="nav-link"
                                        data-key="t-horizontal">Declarações emitidas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('revisor.formandos.turmas') }}" class="nav-link"
                                        data-key="t-horizontal">Turmas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('revisor.formandos.trocarturma') }}" class="nav-link"
                                        data-key="t-horizontal">Trocar de turma</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('revisor.formandos.emitirdeclaracao') }}" class="nav-link"
                                        data-key="t-horizontal">Emitir Declaração</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('revisor.formandos.validardeclaracao') }}" class="nav-link"
                                        data-key="t-horizontal">Validar Declaração</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarLanding">
                            <i class="ri-rocket-line"></i> <span data-key="t-landing">Usuários</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarLanding">
                            <ul class="nav nav-sm flex-column">
                                <!-- <li class="nav-item">
                                    <a href="{{ route('revisor.usuarios.cadastrar') }}" class="nav-link"
                                        data-key="t-one-page"> Cadastrar
                                    </a>
                                </li> -->
                                <!-- <li class="nav-item">
                                        <a href="{{ route('revisor.usuarios.listar') }}" class="nav-link"
                                            data-key="t-one-page"> Listar Funcionários
                                        </a>
                                    </li> -->
                                <li class="nav-item">
                                    <a href="{{ route('revisor.usuarios.candidatos') }}" class="nav-link"
                                        data-key="t-one-page"> Listar Candidatos
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            @endif


            <!-- MENU PARA OS AVALIADORES - CPL -->
            @if (Auth::user()->permission_id == 3)

                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Início</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarDashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('avaliador.dashboard') }}" class="nav-link" data-key="t-crm">
                                        Dashboard </a>
                                </li>
                            </ul>
                        </div>
                    </li> <!-- end Dashboard Menu -->


                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAuth">
                            <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Formandos CEF</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarAuth">
                            <ul class="nav nav-sm flex-column">
                                <!-- <li class="nav-item">
                                        <a href="{{ route('avaliador.formandos.listar') }}" class="nav-link"
                                            data-key="t-horizontal">Listar formandos</a>
                                    </li> -->
                                <li class="nav-item">
                                    <a href="{{ route('avaliador.formandos.declaracoes') }}" class="nav-link"
                                        data-key="t-horizontal">Declarações emitidas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('avaliador.formandos.validardeclaracao') }}" class="nav-link"
                                        data-key="t-horizontal">Validar Declaração</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>


            @endif

            @if (Auth::user()->permission_id == 1)
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Início</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarDashboards">
                            <ul class="nav nav-sm flex-column">

                                <li class="nav-item">
                                    <a href="{{ route('admin.dashboard') }}" class="nav-link" data-key="t-crm">
                                        Dashboard </a>
                                </li>

                            </ul>
                        </div>
                    </li> <!-- end Dashboard Menu -->


                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAuth">
                            <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Formações</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarAuth">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('admin.formacoes.cadastrar') }}" class="nav-link"
                                        data-key="t-horizontal">Nova formação</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.formacoes.disciplinas') }}" class="nav-link"
                                        data-key="t-horizontal">Disciplinas</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAuth">
                            <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Formandos</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarAuth">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('admin.formandos.listar') }}" class="nav-link"
                                        data-key="t-horizontal">Listar formandos</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.formandos.turmas') }}" class="nav-link"
                                        data-key="t-horizontal">Turmas</a>
                                </li>
                                     <li class="nav-item">
                                    <a href="{{ route('admin.formandos.declaracoes') }}" class="nav-link"
                                        data-key="t-horizontal">Declarações emitidas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.formandos.trocarturma') }}" class="nav-link"
                                        data-key="t-horizontal">Trocar de turma</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.formandos.emitirdeclaracao') }}" class="nav-link"
                                        data-key="t-horizontal">Emitir Declaração</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.formandos.validardeclaracao') }}" class="nav-link"
                                        data-key="t-horizontal">Validar Declaração</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarLayouts">
                            <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Candidaturas</span> <span
                                class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarLayouts">
                            <ul class="nav nav-sm flex-column">

                                <li class="nav-item">
                                    <a href="{{ route('candidaturas.pendentes', 'masc') }}" class="nav-link"
                                        data-key="t-horizontal">Pendentes (Masculino)</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('candidaturas.pendentes', 'fem') }}" class="nav-link"
                                        data-key="t-horizontal">Pendentes (Femenino)</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('candidaturas.suspensas') }}" class="nav-link"
                                        data-key="t-horizontal">Suspensas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('candidaturas.destacadas') }}" class="nav-link"
                                        data-key="t-horizontal">Destacadas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('candidaturas.aprovadas') }}" class="nav-link"
                                        data-key="t-horizontal">Aprovadas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('candidaturas.pagas') }}" class="nav-link"
                                        data-key="t-horizontal">Pagas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('candidaturas.nova.referencia') }}" class="nav-link"
                                        data-key="t-horizontal">Nova referência de pagamento</a>
                                </li>
                            </ul>
                        </div>
                    </li> <!-- end Dashboard Menu -->

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarPages">
                            <i class="ri-pages-line"></i> <span data-key="t-pages">Relatórios</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarPages">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('admin.relatorios.index') }}" class="nav-link"
                                        data-key="t-horizontal">Gerar Relatórios</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarLanding">
                            <i class="ri-rocket-line"></i> <span data-key="t-landing">Usuários</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarLanding">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('admin.usuarios.cadastrar') }}" class="nav-link"
                                        data-key="t-one-page"> Cadastrar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.usuarios.listar') }}" class="nav-link" data-key="t-one-page">
                                        Listar Funcionários
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.usuarios.candidatos') }}" class="nav-link"
                                        data-key="t-one-page"> Listar Candidatos
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>



                </ul>
            @endif

        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
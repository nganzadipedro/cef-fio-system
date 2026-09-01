<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ $turma->descricao }}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CEF-OAA</a></li>
                        <li class="breadcrumb-item active">Turmas</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card rounded-0 bg-soft-primary mx-n4 mt-n4 border-top">
                <div class="px-2">
                    <div class="row">
                        <div class="col-xxl-12 align-self-center text-center">
                            <div class="py-4">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/cgzlioyf.json" trigger="hover" stroke="light"
                                    style="width:130px;height:130px">
                                </lord-icon>
                                <h5 class="display-6">FORMULÁRIO DE CORREÇÃO DE NOTAS</h5>
                                <H4>{{ $turma->getFormacao->nome }} | {{ $turma->descricao }}</H4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!--end col-->.
    </div>
    <div class="row text-bolt">
        <div class="col-12">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="card rounded-5">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <!-- <div class="card-header">
                                    <h3 class="card-title mb-0">Detalhes da {{ $turma->descricao }}</h3>
                                </div> -->
                                <div class="card-body">
                                    <div class="row mt-2">
                                        <div class="col-sm-4 mt-2">
                                            <div class="p-2 border border-dashed rounded bg-marketplace bg-marketplace">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-2">
                                                        <div
                                                            class="avatar-title rounded bg-transparent text-primary fs-24">
                                                            <i class=" ri-user-follow-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-1">Total de Formandos:</p>
                                                        <h5 class="mb-0">{{ count($turma->getAlunos) }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-sm-4 mt-2">
                                            <div class="p-2 border border-dashed rounded bg-marketplace">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-2">
                                                        <div
                                                            class="avatar-title rounded bg-transparent text-primary fs-24">
                                                            <i class="ri-community-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-1">Formação:</p>
                                                        <h5 class="mb-0">{{ $turma->getFormacao->nome }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <!-- end col -->
                                        <div class="col-sm-4 mt-2">
                                            <div class="p-2 border border-dashed rounded bg-marketplace">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-2">
                                                        <div
                                                            class="avatar-title rounded bg-transparent text-primary fs-24">
                                                            <i class=" ri-archive-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-1">Ano:</p>
                                                        <h5 class="mb-0 bol">
                                                            {{ $turma->getFormacao->getAno->descricao }}
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-sm-4 mt-2">
                                            <div class="p-2 border border-dashed rounded bg-marketplace">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-2">
                                                        <div
                                                            class="avatar-title rounded bg-transparent text-primary fs-24">
                                                            <i class="ri-account-circle-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-1">Formandos com notas:</p>
                                                        <h5 class="mb-0 bol">{{ $com_notas }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-sm-4 mt-2">
                                            <div class="p-2 border border-dashed rounded bg-marketplace">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-2">
                                                        <div
                                                            class="avatar-title rounded bg-transparent text-primary fs-24">
                                                            <i class="ri-account-circle-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-1">Formandos sem notas:</p>
                                                        <h5 class="mb-0">{{ $sem_notas }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="col-sm-4 mt-2">
                                            <div class="p-2 border border-dashed rounded">
                                                <div class="d-flex align-items-center text-center">

                                                    <div class="flex-grow-1 text-center">
                                                        <a target="_blank"
                                                            href="{{ route('mini_pauta', [$disciplina_id, $turma_id, $professor->id]) }}"
                                                            class="btn btn-lg btn-info">Mini Pauta da Disciplina </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- end card -->
                </div>

            </div>
        </div>
        <div class="live-preview">

        <div class="card">
 <div class="card-body">

       

            <div style="height: 500px; overflow: auto;">
                <div class="table-responsive mt-4 mt-xl-0">
                    <table class="table table-info table-striped table-nowrap align-middle mb-0" id="myTable">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Código</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Nota 1</th>
                                <th scope="col">Nota 2</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alunos_turma as $item)
                                @if ($this->jatemnota($item->aluno_id) == true)
                                    <tr>
                                        <td scope="col">{{ $loop->index + 1 }}</td>
                                        <td scope="col">{{ $item->aluno_id }}</td>
                                        <td scope="col">{{ $item->getAluno->codigo }}</td>
                                        <td scope="col">{{ $item->getAluno->getPessoa->nome }}</td>


                                        @php

                                            $avaliacao = $this->getavaliacao_aluno($item->aluno_id);
                                            $av_nota2 = $avaliacao->nota2 == null ? 0 : $avaliacao->nota2;
                                            $av_nota1 = $avaliacao->nota1 == null ? 0 : $avaliacao->nota1;

                                        @endphp

                                        <td scope="col"><input min="0" disabled step="0.01" max="20" value="{{ $av_nota1 }}"
                                                type="number" class="form-control">
                                        </td>
                                        <td scope="col"><input min="0" disabled step="0.01" max="20" value="{{ $av_nota2 }}"
                                                type="number" class="form-control">
                                        </td>
                                        <td scope="col">
                                            <button type="button" data-aluno-id="{{ $item->aluno_id }}"
                                                data-codigo="{{ $item->getAluno->codigo }}"
                                                data-nome="{{ $item->getAluno->getPessoa->nome }}" 
                                                data-nota1="{{ $av_nota1 }}" data-nota2="{{ $av_nota2 }}"
                                                class="btn-edit btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalEditarNotas">
                                                <i class="ri-edit-box-line"></i>
                                            </button>
                                        </td>

                                    </tr>
                                @endif

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
         </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" data-bs-backdrop="static"
     data-bs-keyboard="false" id="modalEditarNotas" tabindex="-1" aria-labelledby="modalEditarNotasLabel"
        aria-hidden="true">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content">

                <!-- Cabeçalho -->
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title" id="modalEditarNotasLabel">
                            Editar Notas do Formando
                        </h5>

                        <small class="text-muted">
                            Atualização das classificações
                        </small>
                    </div>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar">
                    </button>
                </div>


                <!-- Corpo -->
                <div class="modal-body">

                    <!-- Dados do formando -->
                    <div class="row mb-4">

                        <div class="col-md-8">
                            <label class="form-label">
                                Nome do Formando
                            </label>

                            <input type="text" disabled class="form-control" id="nome_formando" value="João Manuel"
                                readonly>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">
                                Código do Formando
                            </label>

                            <input type="text" disabled class="form-control" id="numero_processo" value="2026/001"
                                readonly>
                        </div>

                    </div>


                    <!-- Notas -->
                    <h6 class="mb-3">
                        Classificações
                    </h6>

                    @csrf

                    <div class="table-responsive">

                        <table class="table table-bordered align-middle">

                            <thead class="table-light">
                                <tr>
                                    <th>Módulo</th>
                                    <th style="width: 180px;">
                                        Nota 1
                                    </th>
                                    <th style="width: 180px;">
                                        Nota 2
                                    </th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>
                                       {{ $this->prof_formacao->getDisciplina->descricao }}
                                       <input type="hidden" class="form-control" name="idalunoedit"
                                            value="" id="idalunoedit">
                                            <input type="hidden" class="form-control" name="turmaid"
                                            value="{{ $this->prof_formacao->turma_id }}" id="turmaid">
                                    </td>

                                    <td>
                                        <input type="number" class="form-control"
                                            value="" min="0" id="nota1edit" max="20" step="0.01">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control"
                                            value="" min="0" id="nota2edit" max="20" step="0.01">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <!-- Observação -->
                    <div class="mt-3">

                        <label class="form-label">
                            Justificação
                        </label>

                        <textarea class="form-control" name="observacao" id="observacao" rows="3"
                            placeholder="Digite uma observação..."></textarea>

                    </div>

                </div>


                <!-- Rodapé -->
                <div class="modal-footer">
                    <a class="btn btn-success" id="btnSalvarAlteracoes">Guardar Alterações</a>
                </div>

            </div>

        </div>
    </div>
</div>

@section('script-aux')
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

      

    </script>
    <script src="{{ asset('assets/system/js/editar-notas.js') }}"></script>
@endsection
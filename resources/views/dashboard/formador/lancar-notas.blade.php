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
            <div class="card rounded-0 bg-soft-success mx-n4 mt-n4 border-top">
                <div class="px-2">
                    <div class="row">
                        <div class="col-xxl-12 align-self-center text-center">
                            <div class="py-4">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/cgzlioyf.json" trigger="hover" stroke="light"
                                    style="width:130px;height:130px">
                                </lord-icon>
                                <h5 class="display-6">FORMULÁRIO DE LANÇAMENTO DE NOTAS</h5>
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
                                        <div class="col-sm-4 mt-2">
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
                                        </div>
                                        <div class="col-sm-4 mt-2">
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
                                        </div>
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

        @php
            $vez = 1;
        @endphp

            <div style="height: 500px; overflow: auto;">
                <div class="table-responsive mt-4 mt-xl-0">
                    <table class="table table-info table-striped table-nowrap align-middle mb-0" id="myTab">
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
                                @if ($this->jatemnota($item->aluno_id) == false)
                                    <tr>
                                        <td scope="col">{{ $loop->index + 1 }}</td>
                                        <td scope="col">{{ $item->aluno_id }}</td>
                                        <td scope="col">{{ $item->getAluno->codigo }}</td>
                                        <td scope="col">{{ $item->getAluno->getPessoa->nome }}</td>
                                        @if($vez == 1)

                                            @php

                                                $avaliacao = $this->getavaliacao_aluno($item->aluno_id);
                                                $av_nota2 = $avaliacao->nota2 == null ? 0 : $avaliacao->nota2;
                                                
                                                $vez++;

                                            @endphp

                                            <td scope="col"><input min="0" max="20" value="{{ $avaliacao->nota1 }}" type="number"
                                                    wire:model="nota1" class="form-control">
                                            </td>
                                            <td scope="col"><input min="0" max="20"
                                                    value="{{ $avaliacao->nota2 }}" type="number" wire:model="nota2"
                                                    class="form-control">
                                            </td>
                                            <td scope="col"><a wire:click="lancar({{$item->aluno_id}})"
                                                    class="btn btn-success">Salvar</a>
                                            </td>
                                        @else
                                            <td scope="col"><input min="0" max="20" type="number" disabled class="form-control">
                                            </td>
                                            <td scope="col"><input min="0" max="20" type="number" disabled class="form-control">
                                            </td>
                                            <td scope="col"></td>
                                        @endif
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

@section('script-aux')
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
@endsection
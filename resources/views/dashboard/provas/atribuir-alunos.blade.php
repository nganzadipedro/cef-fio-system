<div class="row">

    <div class="col-xl-12" id="card-none2">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h6 class="card-title mb-0 text-center">ATRIBUIÇÃO DE ALUNOS PARA A PROVA DE: {{ $prova->nome }}
                        </h6>
                    </div>
                    <div class="flex-shrink-0">
                        <ul class="list-inline card-toolbar-menu d-flex align-items-center mb-0">

                            <li class="list-inline-item">
                                <a class="align-middle minimize-card" data-bs-toggle="collapse" href="#collapseExample2"
                                    role="button" aria-expanded="true" aria-controls="collapseExample2">
                                    <i class="mdi mdi-plus align-middle plus"></i>
                                    <i class="mdi mdi-minus align-middle minus"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h6 class="card-title mb-0">Lista dos formandos da turma</h6>
                    </div>

                </div>
            </div>
            <div class="card-body collapse show" id="" style="">

            <a wire:click="atribuir_todos" class="btn btn-success">Atribuir todos formandos</a>
                <div class="row mt-5">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="tableFixHead" style="height:400px;overflow:auto;">
                            <table class="table table-hover align-middle table-nowrap mb-0 mt-4 text-center"
                                id="">
                                <thead class="">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Código</th>
                                        <th scope="col">Turma</th>
                                        <th scope="col sticky-col first-col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alunos_nao_atribuidos as $item)
                                        @if($item->aluno_id != null && $this->atribuido($item->aluno_id) == 'false')
                                            <tr>
                                                <td scope="col">{{ $loop->index + 1 }}</td>
                                                <td scope="col">{{ $item->aluno_id }}</td>
                                                <td scope="col">{{ $item->getaluno->getpessoa->nome }}</td>
                                                <td scope="col">{{ $item->getaluno->codigo }}</td>
                                                <td scope="col">{{ $item->getturma->descricao }}</td>
                                                <td class="">
                                                    <a class="btn btn-sm btn-success" wire:click="adicionar({{$item->aluno_id}})"
                                                        title="Editar pergunta">Adicionar</a>
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

        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h6 class="card-title mb-0">Lista dos formandos para a prova</h6>
                    </div>

                </div>
            </div>
            <div class="card-body collapse show" id="" style="">

                <div class="row">
                  
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="tableFixHead" style="height:400px;overflow:auto;">
                            <table class="table table-hover align-middle table-nowrap mb-0 mt-4 text-center"
                                id="myTable2">
                                <thead class="">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Código</th>
                                        <th scope="col sticky-col first-col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alunos_atribuidos as $item)
                                        <tr>
                                            <td scope="col">{{ $loop->index + 1 }}</td>
                                            <td scope="col">{{ $item->aluno_id }}</td>
                                            <td scope="col">{{ $item->getaluno->getpessoa->nome }}</td>
                                            <td scope="col">{{ $item->getaluno->codigo }}</td>
                                            <td class="">
                                                <a class="btn btn-sm btn-danger" wire:click="eliminar({{$item->id}})"
                                                    title="Excluir pergunta">Eliminar</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script-aux')
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
        $('#myTable2').DataTable();
    });
</script>
@endsection
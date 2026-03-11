<div class="row">

    <div class="col-xl-12" id="card-none2">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h6 class="card-title mb-0">CADASTRAR PERGUNTAS DO EXAME</h6>
                    </div>
                    <div class="flex-shrink-0">
                        <ul class="list-inline card-toolbar-menu d-flex align-items-center mb-0">
                            <li class="list-inline-item">
                                <a class="align-middle" href="javascript:void(0);" data-toggle="growing-reload">
                                    <i class="mdi mdi-refresh align-middle"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="align-middle minimize-card" data-bs-toggle="collapse" href="#collapseExample2"
                                    role="button" aria-expanded="true" aria-controls="collapseExample2">
                                    <i class="mdi mdi-plus align-middle plus"></i>
                                    <i class="mdi mdi-minus align-middle minus"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <button type="button" onclick="delthis('card-none2')"
                                    class="btn-close fs-10 align-middle"></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body collapse show" id="collapseExample2" style="">
                <form method="POST" wire:submit.prevent="salvar">

                    @csrf

                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 ">
                            <label class="" for="disciplina_id">Disciplina/Secção <span
                                    class="required">*</span></label>
                            <select wire:model="disciplina_id" name="disciplina_id" id="disciplina_id" required
                                class="form-control">
                                <option value="">Selecione...</option>
                                @foreach ($disciplinas as $item)
                                    <option value="{{ $item->id }}">{{ $item->descricao }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 ">
                            <label class="" for="numero">Questão Nº<span class="required">*</span></label>
                            <input wire:model="num_pergunta" type="number" max="10" required min="1"
                                name="numero" id="numero" class="form-control" value="">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 ">
                            <label class="" for="desc_pergunta">Questão<span class="required">*</span></label>
                            <textarea wire:model="pergunta" name="desc_pergunta" id="desc_pergunta" required cols="30" rows="5"
                                class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 ">
                            <label class="" for="opcao_a">Opção A<span class="required">*</span></label>
                            <input wire:model="opcao_a" type="text" required class="form-control" id="opcao_a"
                                name="opcao_a">
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 ">
                            <label class="" for="opcao_b">Opção B<span class="required">*</span></label>
                            <input wire:model="opcao_b" type="text" required class="form-control" id="opcao_b"
                                name="opcao_b">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 ">
                            <label class="" for="opcao_c">Opção C<span class="required">*</span></label>
                            <input wire:model="opcao_c" type="text" required class="form-control" id="opcao_c"
                                name="opcao_c">
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 ">
                            <label class="" for="opcao_d">Opção D</label>
                            <input wire:model="opcao_d" type="text" class="form-control" id="opcao_d"
                                name="opcao_d">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 ">
                            <label class="" for="opcao_e">Opção E</label>
                            <input wire:model="opcao_e" type="text" class="form-control" id="opcao_e"
                                name="opcao_e">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 ">
                            <label class="" for="email">Resposta<span class="required">*</span></label>
                            <select wire:model="resposta" required name="resposta" id="resposta"
                                class="form-control">
                                <option value="">Selecione...</option>
                                <option value="opcao_a">Opção A</option>
                                <option value="opcao_b">Opção B</option>
                                <option value="opcao_c">Opção C</option>
                                <option value="opcao_d">Opção D</option>
                                <option value="opcao_e">Opção E</option>
                            </select>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 ">
                            <label class="" for="pontuacao">Pontuação<span class="required">*</span></label>
                            <input wire:model="pontuacao" required type="text" class="form-control"
                                id="pontuacao" name="pontuacao">
                        </div>
                    </div>

                    <br>
                    <br>
                    <div class="col-lg-12">
                        <div class="text-start">
                            <button type="submit" class="btn btn-success">Salvar pergunta</button>
                            <a wire:click="limpar()" class="btn btn-warning">Cancelar</a>
                        </div>
                    </div>

                </form>

            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h6 class="card-title mb-0">Lista das perguntas cadastradas</h6>
                    </div>
                    
                </div>
            </div>
            <div class="card-body collapse show" id="collapseExample2" style="">

                <div class="tableFixHead">
                    <table class="table table-hover align-middle table-nowrap mb-0 mt-4 text-center" id="myTable">
                        <thead class="">
                            <tr>
                                <th scope="col"># / ID</th>
                                <th scope="col">Código da Questão</th>
                                <th scope="col">Disciplina</th>
                                <th scope="col">Questão Nº</th>
                                <th scope="col">Usuário</th>
                                <th scope="col">Ano</th>
                                <th scope="col">Data de cadastro</th>
                                <th scope="col">Data de actualização</th>
                                <th scope="col sticky-col first-col"></th>
                            </tr>
                        </thead>
                        <tbody style="height:200px;overflow:auto;">
                            @foreach ($perguntas as $item)
                                <tr>
                                    <td scope="col">{{ $loop->index + 1 . '/' . $item->id }}</td>
                                    <td scope="col">{{ $item->codigo }}</td>
                                    <td scope="col">{{ $item->getDisciplina->descricao }}</td>
                                    <td scope="col">{{ $item->numero }}</td>
                                    <td scope="col">{{ $item->getUser->getPessoa->nome }}</td>
                                    <td scope="col">{{ $item->getAno->descricao }}</td>
                                    <td scope="col">{{ $item->created_at }}</td>
                                    <td scope="col">{{ $item->updated_at }}</td>
                                    <td class="">
                                        <a class="btn btn-sm btn-success" wire:click="editar({{$item->id}})"
                                            title="Editar pergunta"><i class="ri-edit-fill "></i></a>
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

@section('script-aux')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection

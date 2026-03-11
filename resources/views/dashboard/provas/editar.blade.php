<div class="row">

    <div class="col-xl-12" id="card-none2">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h6 class="card-title mb-0">CADASTRAR PROVA</h6>
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
                <form method="POST" wire:submit.prevent="cadastrar">
                    <div class="row">

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="firstNameinput" class="form-label">Nome</label>
                                <input wire:model="nome" type="text" class="form-control" id="firstNameinput" required>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="mb-3">
                                <label for="disciplina_id" class="form-label">Disciplina</label>
                                <select wire:change="getturmas" wire:model="disciplina_id" required id="disciplina_id"
                                    class="form-select">
                                    <option value="">Vazio</option>
                                    @foreach ($disciplinas as $item)
                                        <option value="{{ $item->id }}">{{ $item->descricao }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="mb-3">
                                <label for="turma_id" class="form-label">Turma</label>
                                <select wire:model="turma_id" required id="turma_id" class="form-select">
                                    <option value="">Vazio</option>
                                    @foreach ($turmas as $tur)
                                        <option value="{{ $tur->turma_id }}">
                                            {{ $tur->getturma->descricao . " (" . $tur->getformacao->nome . ")" }}
                                        </option>
                                    @endforeach
                                    @if(count($turmas) > 1)
                                        <option value="todas">Todas Turmas</option>
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="mb-3">
                                <label for="data_prova" class="form-label">Data da Prova</label>
                                <input wire:model="data_prova" type="date" class="form-control" id="data_prova"
                                    required>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="mb-3">
                                <label for="hora_inicio" class="form-label">Hora de início</label>
                                <input wire:model="hora_inicio" type="time" class="form-control" id="hora_inicio"
                                    required>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="mb-3">
                                <label for="hora_fim" class="form-label">Hora de Término</label>
                                <input wire:model="hora_fim" type="time" class="form-control" id="hora_fim" required>
                            </div>
                        </div>

                        <div class="col-lg-12 mt-3">
                            <div class="text-end">
                                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                                <a href="{{ route('provas.listar') }}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
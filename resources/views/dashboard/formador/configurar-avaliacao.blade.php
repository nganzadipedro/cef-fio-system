<div>

    <div class="row">

        <div class="col-xl-12" id="card-none2">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h6 class="card-title mb-0">CONFIGURAR MODALIDADE DE AVALIAÇÃO</h6>
                        </div>
                        <div class="flex-shrink-0">
                            <ul class="list-inline card-toolbar-menu d-flex align-items-center mb-0">
                                <li class="list-inline-item">
                                    <a class="align-middle minimize-card" data-bs-toggle="collapse"
                                        href="#collapseExample2" role="button" aria-expanded="true"
                                        aria-controls="collapseExample2">
                                        <i class="mdi mdi-plus align-middle plus"></i>
                                        <i class="mdi mdi-minus align-middle minus"></i>
                                    </a>
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
                                    <label for="turma_id" class="form-label">Turma</label>
                                    <select wire:model="turma_id" required id="turma_id" class="form-select">
                                        <option value="">--- selecione ---</option>
                                        @foreach ($turmas as $tur)
                                            <option value="{{ $tur->turma_id }}">
                                                {{ $tur->getturma->descricao . " (" . $tur->getformacao->nome . ")" }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">Quantas notas vai lançar?</label>
                                    <select wire:model="qtd_notas_lancar" required id="qtd_notas_lancar"
                                        class="form-select">
                                        <option value="" selected>--- selecione ---</option>
                                        <option value="1">1 Nota</option>
                                        <option value="2">2 Notas</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">Tipo de prova (1ª Nota)</label>
                                    <select wire:model="tipo_prova" required id="tipo_prova" class="form-select">
                                        <option value="">--- selecione ---</option>
                                        <option value="plataforma">Online Plataforma CEF</option>
                                        <option value="google-form">Online Google Forms</option>
                                        <option value="trabalho-grupo">Trabalho em Grupo</option>
                                        <option value="prova-escrita">Prova Escrita</option>
                                    </select>
                                </div>
                            </div>

                            @if ($qtd_notas_lancar == 2)
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Proveniência da 2ª Nota</label>
                                        <select wire:model="prov_seg_nota" id="prov_seg_nota" class="form-select">
                                            <option value="">--- selecione ---</option>
                                            <option value="presenca">Presença nas aulas</option>
                                            <option value="trabalho-grupo">Trabalho em grupo</option>
                                            <option value="participacao">Participação nas aulas</option>
                                            <option value="avaliacao-extra">Avaliação extra</option>
                                        </select>
                                    </div>
                                </div>
                            @endif


                            @if ($qtd_notas_lancar == 2)
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Fórmula de Obtenção da nota
                                            final</label>
                                        <select wire:model="criterio_resultado_final" id="criterio_resultado_final"
                                            class="form-select">
                                            <option value="">--- selecione ---</option>
                                            <option value="soma">Soma</option>
                                            <option value="media">Média</option>
                                            <option value="criterio-percentual">Critério Percentual</option>
                                        </select>
                                    </div>
                                </div>
                            @endif

                            @if($criterio_resultado_final == 'criterio-percentual')
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="data_prova" class="form-label">Percentual da 1ª Nota (%)</label>
                                        <input wire:model="percent_nota1" min="1" max="100" type="number"
                                            class="form-control" id="percent_nota1">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="data_prova" class="form-label">Percentual da 2ª Nota (%)</label>
                                        <input wire:model="percent_nota2" min="1" max="100" type="number"
                                            class="form-control" id="percent_nota2">
                                    </div>
                                </div>
                            @endif

                            <div class="col-lg-12 mt-3">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xl-12" id="card-none2">

            <div class="card mt-2">
                <div class="card-header">
                    <h6 class="card-title mb-0 flex-grow-1">Listagem geral das modalidades configuradas</h6>
                </div>
                <div class="card-body">
                    <div class="tableFixHead">
                        <table class="table table-hover align-middle table-nowrap mb-0 mt-4 text-center" id="myTable">
                            <thead class="">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">Turma</th>
                                    <th scope="col">Tipo de Prova</th>
                                    <th scope="col">Qtd. Notas</th>
                                    <th scope="col">Obt. Nota Final</th>
                                    <th scope="col">(%) Nota 1</th>
                                    <th scope="col">(%) Nota 2</th>
                                    <th scope="col sticky-col first-col"></th>
                                </tr>
                            </thead>
                            <tbody style="height:200px;overflow:auto;">
                                @foreach ($lista as $item)
                                    <tr>
                                        <td scope="col">{{ $loop->index + 1}}</td>
                                        <td scope="col">{{ $item->id }}</td>
                                        <td scope="col">{{ $item->getturma->descricao }} -
                                            {{ $item->getturma->getformacao->nome }}
                                        </td>
                                        <td scope="col">{{ $item->tipo_prova }}</td>
                                        <td scope="col">{{ $item->qtd_notas_lancar }}</td>
                                        <td scope="col">
                                            {{ $item->criterio_resultado_final == null ? '------' : $item->criterio_resultado_final }}
                                        </td>
                                        <td scope="col">
                                            {{ $item->percent_nota1 == null ? '------' : $item->percent_nota1 . '%' }}
                                        </td>
                                        <td scope="col">
                                            {{ $item->percent_nota2 == null ? '------' : $item->percent_nota2 . '%' }}
                                        </td>
                                        <td class="">

                                            <a class="btn btn-danger" wire:click="eliminar({{ $item->id }})"
                                                title="Eliminar">Eliminar</a>

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
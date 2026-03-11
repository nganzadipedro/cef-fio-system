<div class="row">

    <div class="col-xl-12" id="card-none2">

        <div class="card mt-2">
            <div class="card-header">
                <h6 class="card-title mb-0 flex-grow-1">Listagem geral das provas</h6>
            </div>
            <div class="card-body">
                <div class="tableFixHead">
                    <table class="table table-hover align-middle table-nowrap mb-0 mt-4 text-center" id="myTable">
                        <thead class="">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>

                                <th scope="col">Data da Prova</th>


                                <th scope="col sticky-col first-col"></th>
                            </tr>
                        </thead>
                        <tbody style="height:200px;overflow:auto;">
                            @foreach ($lista as $item)
                                <tr>
                                    <td scope="col">{{ $loop->index + 1}}</td>
                                    <td scope="col">{{ $item->id }}</td>
                                    <td scope="col">{{ $item->nome }}</td>
                                    <td scope="col">{{ $item->data_prova }}</td>
                                    <td class="">
                                        <a class="btn btn-success" href="{{ route('provas.gerenciar', ['hash' => $item->hash]) }}"
                                            title="Detalhes da Prova">Perguntas</a>
                                        <a class="btn btn-primary" href="{{ route('provas.alunos', ['hash' => $item->hash]) }}"
                                            title="Detalhes da Prova">Formandos</a>
                                        <a class="btn btn-info" href="{{ route('provas.editar', ['hash' => $item->hash]) }}"
                                            title="Editar Prova">Editar</a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <a class="btn btn-info mt-4" href="{{ route('provas.cadastrar') }}" title="Editar Prova">+ Nova Prova
                    +</a>
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
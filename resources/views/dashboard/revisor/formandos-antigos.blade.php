<div>

    <style>
        .pintado {
            color: white;
            background-color: rgb(185, 86, 86);
        }

        .hero-page {
            margin-top: 20px;

        }

        .hero-page .card {
            border-radius: 20px;
        }
    </style>

    <div class="row hero-page">
        <div class="col-lg-12">
            <div class="card bg-soft-success">
                <div class="px-2">
                    <div class="row">
                        <div class="col-xxl-12 align-self-center text-center">
                            <div class="py-4">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/xzalkbkz.json" trigger="hover" stroke="light"
                                    style="width:130px;height:130px">
                                </lord-icon>
                                <h5 class="display-6">FORMANDOS ANTIGOS</h5>
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

    <div class="card">
        <div class="card-header">
            {{-- <h6 class="card-title mb-0 flex-grow-1">Lista das candidaturas aprovadas </h6> --}}
        </div>
        <div class="card-body">
            <div class="tableFixHead">
                <table class="table table-hover align-middle table-nowrap mb-0 mt-4 text-center" id="myTable">
                    <thead class="">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Nº Bilhete</th>
                            <th scope="col">Formação</th>
                            <th scope="col">Turma</th>
                            <th scope="col sticky-col first-col"></th>
                            <th scope="col sticky-col first-col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($formandos as $item)
                            <tr>
                                <td scope="col">{{ $loop->index + 1 }}</td>
                                <td scope="col">{{ $item->id }}</td>
                                <td scope="col">{{ $item->getPessoa->nome }}</td>
                                <td scope="col">{{ $item->getPessoa->num_documento }}</td>
                                <!-- <td scope="col">{{ $item->codigo }}</td> -->
                                <td scope="col">
                                    <span class="badge text-bg-primary">{{ $item->formacao }}</span>
                                </td>
                                <td scope="col">{{ $item->turma }}</td>
                                <td class="">
                                    <a class="btn btn-sm btn-primary" tooltip="Actualizar"
                                        href="{{ route('revisor.formandos.antigos_actualizar', $item->hash) }}"
                                        title="Actualizar"><i class="ri-pencil-fill "></i></a>
                                </td>
                                <td class="">
                                    @if ($this->dados_actualizados($item->id) == true)
                                        <a class="btn btn-sm btn-primary" tooltip="Emitir Declaração" href="{{ route('revisor.formandos.antigos_emitir', $item->hash) }}"
                                            title="Emitir Declaração">Emitir Declaração</a>
                                    @endif

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
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
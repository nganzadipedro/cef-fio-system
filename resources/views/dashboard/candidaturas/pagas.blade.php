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
                                <lord-icon src="https://cdn.lordicon.com/ofdfurqa.json" trigger="hover" stroke="light"
                                    style="width:130px;height:130px">
                                </lord-icon>
                                <h5 class="display-6">LISTA DAS CANDIDATURAS PAGAS</h5>
                                {{-- <p class="text-success fs-16 mt-3">If you can not find answer to your
                                    question in our FAQ, you can always contact us or email us. We will
                                    answer you shortly!</p> --}}
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary rounded-pill">
                                        {{ count($pagamentos) }} Candidaturas </button>
                                    <button type="button" class="btn btn-info rounded-pill">
                                        {{ $homens }} Homens </button>
                                    <button type="button" class="btn btn-warning rounded-pill">
                                        {{ $mulheres }} Mulheres </button>

                                </div>
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
                            <th scope="col">Código</th>
                            <th scope="col">Candidato</th>
                            <th scope="col">Formação</th>
                            <th scope="col">Nº Documento</th>

                            <th scope="col">Pagamento</th>
                            <th scope="col">Data de pagamento</th>
                            <th scope="col sticky-col first-col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pagamentos as $item)
                            <tr>
                                <td scope="col">{{ $loop->index + 1 }}</td>
                                <td scope="col">{{ $item->getAluno->codigo }}</td>
                                <td scope="col">{{ $item->getAluno->getPessoa->nome }}</td>
                                <td scope="col">
                                    <span class="badge text-bg-primary">{{ $item->getFormacao->nome }}</span>

                                </td>
                                <td scope="col">{{ $item->getAluno->getPessoa->num_documento }}</td>


                                <td scope="col">Pago</td>
                                <td scope="col">{{ $item->created_at }}</td>
                                <td class="">
                                    {{-- <a class="btn btn-sm btn-success" href="{{ route('vercandidatura', $item->hash) }}"
                                        title="Ver candidatura"><i class="ri-eye-fill "></i></a> --}}
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
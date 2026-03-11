<div>
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Exame</a></li>
            <li class="breadcrumb-item active">Listar exames corrigidos</li>
        </ol>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Total de exames corrigidos</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                    data-target="{{ count($exames) }}"></span></h2>
                        </div>
                        {{-- <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-info rounded-circle fs-2">
                                    <i class="ri-archive-fill "></i>
                                </span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Masculino</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                    data-target="{{ $homens }}"></span></h2>
                        </div>
                        {{-- <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-info rounded-circle fs-2">
                                    <i class="ri-archive-fill "></i>
                                </span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Femenino</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                    data-target="{{ $mulheres }}"></span></h2>
                        </div>
                        {{-- <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-info rounded-circle fs-2">
                                    <i class="ri-archive-fill "></i>
                                </span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-header">
            <h6 class="card-title mb-0 flex-grow-1">Listagem geral dos exames corrigidos</h6>
        </div>
        <div class="card-body">
            <div class="tableFixHead">
                <table class="table table-hover align-middle table-nowrap mb-0 mt-4 text-center" id="myTable">
                    <thead class="">
                        <tr>
                            <th scope="col"># / ID</th>
                            <th scope="col">Código</th>
                            <th scope="col">Província-Exame</th>
                            <th scope="col">Avaliador</th>
                            <th scope="col">Data de correção</th>
                            <th scope="col">Data de actualização</th>
                            <th scope="col sticky-col first-col"></th>
                        </tr>
                    </thead>
                    <tbody style="height:200px;overflow:auto;">
                        @foreach ($exames as $item)
                            <tr>
                                <td scope="col">{{ $loop->index + 1 . '/' . $item->id }}</td>
                                <td scope="col">{{ $item->candidatura->codigo }}</td>
                                <td scope="col">{{ $item->candidatura->getCandidato->getProvinciaExame->descricao }}
                                </td>
                                <td scope="col">{{ $item->avaliador->getPessoa->nome }}</td>
                                <td scope="col">{{ $item->created_at }}</td>
                                <td scope="col">{{ $item->updated_at }}</td>

                                <td class="">

                                    <a class="btn btn-sm btn-success"
                                        href="#" title="Ver usuário"><i
                                            class="ri-eye-fill "></i></a>


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
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection

@section('head-script')

    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/yi1vu2xffwe71q0zslc61jlmvrtyrpkku759py80ne0x7sz1/tinymce/8/tinymce.min.js"
        referrerpolicy="origin" crossorigin="anonymous"></script>

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons link lists searchreplace visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link | numlist bullist | emoticons | removeformat',
        });
    </script>

@endsection


<div class="row">

    <div class="col-xl-12" id="card-none2">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h6 class="card-title mb-0">CADASTRAR PERGUNTAS DA PROVA DE
                            {{ $prova->getdisciplina->descricao }}
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
            <div class="card-body collapse show" id="collapseExample2" style="">
                <form id="form-cadastrar-pergunta">

                    @csrf

                    <div class="row mt-3">
                        <input type="hidden" id="prova_id" value="{{ $prova->id }}">
                    </div>

                    <div class="row mt-3">
                        <div wire:ignore class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                            <label class="" for="desc_pergunta">Questão<span class="required">*</span></label>
                            <textarea id="desc_pergunta"></textarea>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 ">
                            <label class="" for="opcao_a">Opção A<span class="required">*</span></label>
                            <input type="text" class="form-control" id="opcao_a" name="opcao_a">
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 ">
                            <label class="" for="opcao_b">Opção B<span class="required">*</span></label>
                            <input type="text" class="form-control" id="opcao_b" name="opcao_b">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 ">
                            <label class="" for="opcao_c">Opção C<span class="required">*</span></label>
                            <input type="text" class="form-control" id="opcao_c" name="opcao_c">
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 ">
                            <label class="" for="opcao_d">Opção D</label>
                            <input type="text" class="form-control" id="opcao_d" name="opcao_d">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                            <label class="" for="opcao_e">Opção E</label>
                            <input type="text" class="form-control" id="opcao_e" name="opcao_e">
                        </div>
                        <div class="col-md-3 col-sm-12 col-lg-3 col-xs-12 ">
                            <label class="" for="numero">Questão Nº<span class="required">*</span></label>
                            <input type="number" max="30" min="1" name="numero" id="numero" class="form-control"
                                value="">
                        </div>
                        <div class="col-md-3 col-sm-12 col-lg-3 col-xs-12">
                            <label class="" for="pontuacao">Pontuação<span class="required">*</span></label>
                            <input type="text" class="form-control" id="pontuacao" name="pontuacao">
                        </div>
                    </div>

                    <div class="row mt-3">

                        <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                            <label class="" for="email">Resposta<span class="required">*</span></label>
                            <select name="resposta" id="resposta" class="form-control">
                                <option value="">Selecione...</option>
                                <option value="opcao1">Opção A</option>
                                <option value="opcao2">Opção B</option>
                                <option value="opcao3">Opção C</option>
                                <option value="opcao4">Opção D</option>
                                <option value="opcao5">Opção E</option>
                            </select>
                        </div>


                    </div>

                    <br>
                    <br>
                    <div class="col-lg-12">
                        <div class="text-start">
                            <button id="btn-cadastrar" type="button" class="btn btn-success">Salvar pergunta</button>
                            <a id="btn-cancelar" class="btn btn-warning">Cancelar</a>
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
            <div class="card-body collapse show" id="" style="">

                <div class="tableFixHead">
                    <table class="table table-hover align-middle table-nowrap mb-0 mt-4 text-center" id="myTable">
                        <thead class="">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Questão Nº</th>
                                <th scope="col">Resposta</th>

                                <th scope="col sticky-col first-col"></th>
                            </tr>
                        </thead>
                        <tbody style="height:200px;overflow:auto;">
                            @foreach ($perguntas as $item)
                                <tr>
                                    <td scope="col">{{ $loop->index + 1 }}</td>
                                    <td scope="col">{{ $item->id }}</td>
                                    <td scope="col">{{ $item->numero }}</td>
                                    <td scope="col">{{ $item->resposta_opcao }}</td>
                                    <td class="">
                                        <a class="btn btn-sm btn-success" wire:click="select({{$item->id}})"
                                            title="Editar pergunta"><i class="ri-edit-fill "></i></a>
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

@section('script-aux')
    <script src="{{ asset('assets/system/js/cadastrar-pergunta.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
@endsection
<div>
    <div class="row">
        <!--end col-->
        <div class="col-xl-3">

            <div class="card">
                <div class="card-header">
                    <div class="d-flex">
                        <h5 class="card-title flex-grow-1 mb-0">Meus dados</h5>
                        <!-- <div class="flex-shrink-0">
                            <a href="{{ route('perfil') }}" class="link-secondary">Ver Perfil</a>
                        </div> -->
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0 vstack gap-3">
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <i class="ri-user-2-fill ri-2x"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="fs-14 mb-1">{{ Auth::user()->getPessoa->nome }}</h6>
                                    <p class="text-muted mb-0">{{ Auth::user()->getPermissao->descricao }}</p>
                                </div>
                            </div>
                        </li>
                        <li><i
                                class="ri-mail-line me-2 align-middle text-muted fs-16"></i>{{ Auth::user()->getPessoa->email }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-9">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title flex-grow-1 mb-0">Gerar nova Referência</h5>
                        <div class="flex-shrink-0">
                            {{-- <a href="#" class="btn btn-success btn-sm"><i class="ri-download-2-fill align-middle me-1"></i> Descarregar Referencia</a> --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">

                        <label for="">Código do candidato</label>
                        <input type="text" style="text-align: center" name="codigo" wire:model="codigo"
                            id="codigo" class="form-control">
                        <br>
                        <button class="btn btn-primary" wire:click="verificar()">Verificar</button>

                        <hr>
                        @if ($tem == true)
                            <h3> {{ $nome_candidato }}</h3>
                            <h4>
                                Nº documento de Identificação: {{ $num_documento }} <br>
                                Estado da candidatura: {{ $estado }} <br>
                                Pagamento feito: {{ $candidatura->pago }} <br><br>
                                Última referência recebida <br>
                                {{ $referencia_antiga == null ? 'Nenhuma' : $referencia_antiga }} 
                            </h4>
                        @endif



                    </div>
                    <div class="text-center mt-3">
                        {{-- <label for="">Referência disponível</label> --}}

                    </div>
                    <a class="btn btn-sm btn-success text-start mt-4" wire:click="atribuir_nova()" title=""><i
                            class="ri-check-double-fill "></i>Enviar referência ao candidato</a>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
</div>

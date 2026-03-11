<style>
    .hero-page {
        margin-top: 20px;

    }

    .hero-page .card {
        border-radius: 20px;
    }
</style>


<div>

    <div class="row hero-page">
        <div class="col-lg-12">
            <div class="card bg-soft-primary">
                <div class="px-2">
                    <div class="row">
                        <div class="col-xxl-12 align-self-center text-center">
                            <div class="py-4">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/pcllgpqm.json" trigger="hover" stroke="loop"
                                    style="width:130px;height:130px">
                                </lord-icon>
                                <h5 class="display-6">FORMAÇÕES - CEF</h5>
                                {{-- <p class="text-success fs-16 mt-3">If you can not find answer to your
                                    question in our FAQ, you can always contact us or email us. We will
                                    answer you shortly!</p> --}}
                                <div class="text-center">
                                    {{-- <button type="button" class="btn btn-primary rounded-pill">
                                        {{ count($candidaturas) }} Candidaturas </button>
                                    <button type="button" class="btn btn-info rounded-pill">
                                        {{ $homens }} Homens </button>
                                    <button type="button" class="btn btn-warning rounded-pill">
                                        {{ $mulheres }} Mulheres </button>
                                    <a type="button" class="btn btn-success rounded-pill">
                                        Listar por formações</a> --}}
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

    <div class="row mb-3">
        @foreach ($formacoes as $item)
            <div class="col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12">


                <div class="card product">
                    <div class="card-body">
                        <div class="row gy-3">
                            <div class="col-xxl-12 col-lg-12 com-sm-12 col-md-12">
                                <div class="col-sm">
                                    <h4 class="text-truncate"><a href="#" class="text-dark">{{ $item->nome }}</a></h4>
                                    <h5>{{ $item->descricao }}</h5>
                                    <ul class="list-inline text-muted">
                                        <li class="list-inline-item">Data de início: <span
                                                class="fw-medium">{{ $item->data_inicio }}</span>
                                        </li> <br>
                                        <li class="list-inline-item">Data de término: <span
                                                class="fw-medium">{{ $item->data_fim }}</span>
                                        </li> <br>
                                        <li class="list-inline-item">Ano: <span
                                                class="fw-medium">{{ $item->getAno->descricao }}</span>
                                        </li> <br>
                                        <li class="list-inline-item">Custo da Formação: <span
                                                class="fw-medium">{{ $item->valor_custo }}</span>
                                        </li> <br>
                                        <li class="list-inline-item"><i
                                                class="mdi mdi-thumb-up text-primary align-middle"></i>(<span
                                                class="fw-medium">{{ count($item->getLikes) }}</span>)
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- card body -->
                    <div class="card-footer">
                        <div class="row align-items-center gy-3">
                            <div class="col-sm">
                                <div class="d-flex flex-wrap my-n1">
                                    @if (Auth::user()->permission_id == 5)
                                        @if ($item->id == $aluno_formacao->formacao_id && $this->deu_like($item->id) == 'false')
                                            <a wire:click="gostei()" class="btn btn-primary rounded-pill"><i
                                                    class="mdi mdi-thumb-up"></i></a>
                                        @endif
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-auto text-center">
                                <div class="d-flex align-items-center gap-2 text-muted">
                                    <div class="badge text-bg-info">Alunos inscritos: </div>
                                    <h5 class="fs-15 mb-0"><span
                                            class="product-line-price">{{ count($item->getAlunos) }}</span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card footer -->
                </div>


                {{-- <div class="text-end mb-4">
                    <a href="apps-ecommerce-checkout.html" class="btn btn-success btn-label right ms-auto"><i
                            class="ri-arrow-right-line label-icon align-bottom fs-16 ms-2"></i> Checkout</a>
                </div> --}}
            </div>
        @endforeach
        <!-- end col -->

        {{-- <div class="col-xl-4">
            <div class="sticky-side-div">
                <div class="card">
                    <div class="card-header border-bottom-dashed">
                        <h5 class="card-title mb-0">Order Summary</h5>
                    </div>
                    <div class="card-header bg-soft-light border-bottom-dashed">
                        <div class="text-center">
                            <h6 class="mb-2 fs-15">Have a <span class="fw-bold">promo</span> code ?</h6>
                        </div>
                        <div class="hstack gap-3 px-3 mx-n3">
                            <input class="form-control me-auto" type="text" placeholder="Enter coupon code"
                                aria-label="Add Promo Code here...">
                            <button type="button" class="btn btn-primary w-xs">Apply</button>
                        </div>
                    </div>
                    <div class="card-body pt-2">
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td>Sub Total :</td>
                                        <td class="text-end" id="cart-subtotal">$ 359.96</td>
                                    </tr>
                                    <tr>
                                        <td>Discount <span class="text-muted">(VELZON15)</span> : </td>
                                        <td class="text-end" id="cart-discount">- $ 53.99</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping Charge :</td>
                                        <td class="text-end" id="cart-shipping">$ 65.00</td>
                                    </tr>
                                    <tr>
                                        <td>Estimated Tax (12.5%) : </td>
                                        <td class="text-end" id="cart-tax">$ 44.99</td>
                                    </tr>
                                    <tr class="table-active">
                                        <th>Total (USD) :</th>
                                        <td class="text-end">
                                            <span class="fw-bold" id="cart-total">
                                                $415.96
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>

                <div class="alert border-dashed alert-danger" role="alert">
                    <div class="d-flex align-items-center">
                        <lord-icon src="https://cdn.lordicon.com/nkmsrxys.json" trigger="loop"
                            colors="primary:#121331,secondary:#f06548" style="width:80px;height:80px">
                        </lord-icon>
                        <div class="ms-2">
                            <h5 class="fs-16 text-danger fw-bold"> Buying for a loved one?</h5>
                            <p class="text-black mb-1">Gift wrap and personalised message on card,
                                <br />Only for <span class="fw-bold">$9.99</span> USD
                            </p>
                            <button type="button" class="btn ps-0 btn-sm btn-link text-danger text-uppercase">Add
                                Gift
                                Wrap</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end stickey -->

        </div> --}}
    </div>
    <!-- end row -->


</div>
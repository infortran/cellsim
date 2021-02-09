<div class="mb-6">
    <!-- Nav nav-pills -->
    <div class="position-relative text-center z-index-2">
        <div class=" d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0">
            <h3 class="section-title mb-0 pb-2 font-size-22">Smartphones & Tablets</h3>
        </div>
    </div>
    <!-- End Nav Pills -->
    <div class="row">
        <div class="col-md-6 col-lg-auto">

        </div>
        <div class="col-md pl-md-0">
            <!-- Tab Content -->
            <div class="tab-content" id="Bpills-tabContent">
                <div class="tab-pane fade pt-2 show active" id="Bpills-one-example1" role="tabpanel" aria-labelledby="Bpills-one-example1-tab">
                    <ul class="row list-unstyled products-group no-gutters mb-0">
                        @foreach($productos as $producto)
                        <li class="col-6 col-md-5 col-lg-3 product-item mb-4">
                            <div class="product-item__outer h-100" style="width: 100%">
                                <div class="product-item__inner bg-white p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="" class="font-size-12 text-gray-5"></a></div>
                                        <h5 class="mb-1 product-item__title"><a href="{{route('producto.single', $producto->id)}}" class="text-blue font-weight-bold">{{$producto->name}}</a></h5>
                                        <div class="mb-2">
                                            <a href="{{route('producto.single', $producto->id)}}" class="d-block text-center"><img class="img-fluid" src="{{ asset('uploads/productos/150x150/'.$producto->img) }}" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            @if($producto->oldprice)
                                                <div class="prodcut-price d-flex align-items-center position-relative">
                                                    <ins class="font-size-20 text-red text-decoration-none">${{number_format($producto->price, 0, '','.')}}</ins>
                                                    <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$ {{number_format($producto->oldprice, 0, '','.')}}</del>
                                                </div>
                                            @else
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">${{number_format($producto->price,0,'','.')}}</div>
                                                </div>
                                            @endif
                                            <!--div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div-->
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="{{route('producto.single', $producto->id)}}" class="text-gray-6 font-size-13"><i class="fa fa-link mr-1 font-size-15"></i> Ver producto</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
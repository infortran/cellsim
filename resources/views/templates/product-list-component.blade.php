@foreach($plc as $_plc)
<div class="mb-6">
    <!-- Nav nav-pills -->
    <div class="position-relative text-center z-index-2">
        <div class="d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0">
            <h3 class="section-title mb-0 pb-2 font-size-22">{{ $_plc->title_section ?? ''}}</h3>
        </div>
    </div>
    <!-- End Nav Pills -->
    <div class="row">
        <div class="col-md-6 col-lg-auto">
            <div class="img-section" style="background-image: url('{{ asset('uploads/plc/300X616/').'/'.$_plc->img}}')">
                <div class="title-img-section">
                    <h1>{{ $_plc->title_banner ?? ''}}</h1>
                    <h1>{{ $_plc->subtitle_banner ?? ''}}</h1>
                </div>
                <div class="price-section">
                    <h6 class="pt-3">Por:</h6>
                    <h5>$</h5>
                    <h1>{{$_plc ? number_format($_plc->price_banner, 0, '', '.'):'0'}}</h1>
                </div>
            </div>
        </div>
        <div class="col-md pl-md-0">
            <!-- Tab Content -->
            <div class="tab-content" id="Bpills-tabContent">
                <div class="tab-pane fade pt-2 show active" id="Bpills-one-example1" role="tabpanel" aria-labelledby="Bpills-one-example1-tab">
                    <ul class="row list-unstyled products-group no-gutters mb-0">
                        @if($_plc->categoria)
                        @foreach($_plc->categoria->productos as $producto)
                            <li class="col-6 col-md-5 col-lg-3 product-item mb-4">
                                <div class="product-item__outer h-100" style="width: 100%">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            @if($producto->categoria)
                                                <h6 class="font-size-12 text-gray-5 mb-2 d-inline-block">{{$producto->categoria->name}}</h6>
                                            @endif
                                            <h5 class="mb-1 product-item__title"><a href="{{route('producto.single', $producto->slug)}}" class="text-blue font-weight-bold">{{$producto->name}}</a></h5>
                                            <div class="mb-2">
                                                <a href="{{route('producto.single', $producto->slug)}}" class="d-block text-center"><img class="img-fluid" src="{{ asset('uploads/productos/150X150/'.$producto->img) }}" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                @if($producto->oldprice)
                                                    <div class="prodcut-price d-flex align-items-center position-relative">
                                                        <ins class="font-size-20 text-red text-decoration-none">${{number_format($producto->price, 0, '','.')}}</ins>
                                                        <del class="font-size-12 text-gray-6 ml-1 mt-1">$ {{number_format($producto->oldprice, 0, '','.')}}</del>
                                                    </div>
                                                @else
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">${{number_format($producto->price,0,'','.')}}</div>
                                                    </div>
                                                    @endif

                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="{{route('producto.single', $producto->slug)}}" class="text-gray-6 font-size-13"><i class="fa fa-link mr-1 font-size-15"></i> Ver producto</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
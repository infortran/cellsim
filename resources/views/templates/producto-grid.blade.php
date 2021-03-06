<div class="tab-content mb-4" id="pills-tabContent" style="display: flex; justify-content: center; min-height: 360px">
    <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups" style="width: 90%">
        <ul class="row list-unstyled products-group no-gutters">
            @foreach($query_result as $producto)
            <li class="col-6 col-md-3 col-xl-2 product-item mt-5">
                <div class="product-item__outer h-100">
                    <div class="product-item__inner px-xl-4 p-3">
                        <div class="product-item__body pb-xl-2">
                            @if($producto->categoria)
                                <h6 class="font-size-12 text-gray-5 mb-2 d-inline-block">{{$producto->categoria->name}}</h6>
                            @else
                                <div style="padding-bottom: 28px"></div>
                            @endif
                            <h5 class="mb-1 mt-2 product-item__title"><a href="{{route('producto.single', $producto->slug)}}" class="text-blue font-weight-bold">{{$producto->name}}</a></h5>
                            <div class="mb-2">
                                <a href="{{route('producto.single', $producto->slug)}}" class="d-block text-center"><img class="img-fluid" src="{{asset('uploads/productos/150X150/'.$producto->img)}}" alt="Image Description"></a>
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
                            <div class="border-top pt-2 flex-center-between flex-wrap" style="transition: all ease .3s">
                                <a href="{{route('producto.single', $producto->slug)}}" class="text-gray-6 font-size-13"><i class="fa fa-link mr-1 font-size-15"></i> Ver producto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
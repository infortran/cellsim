<div class="position-relative bg-white text-center z-index-2">
    <ul class="nav nav-classic nav-tab justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active js-animation-link" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="true"
               data-target="#pills-one-example1"
               data-link-group="groups"
               data-animation-in="slideInUp">
                <div class="d-md-flex justify-content-md-center align-items-md-center">
                    Últimos agregados
                </div>
            </a>
        </li>
        <!--li class="nav-item">
            <a class="nav-link js-animation-link" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false"
               data-target="#pills-two-example1"
               data-link-group="groups"
               data-animation-in="slideInUp">
                <div class="d-md-flex justify-content-md-center align-items-md-center">
                    On Sale
                </div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link js-animation-link" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="false"
               data-target="#pills-three-example1"
               data-link-group="groups"
               data-animation-in="slideInUp">
                <div class="d-md-flex justify-content-md-center align-items-md-center">
                    Top Rated
                </div>
            </a>
        </li-->
    </ul>
</div>
<!-- End Nav Classic -->
<!-- Tab Content -->
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
        <ul class="row list-unstyled products-group no-gutters">
            @foreach($ultimos as $producto)

            <li class="col-6 col-md-4 col-lg-3 col-xl product-item">
                <div class="product-item__outer h-100">
                    <div class="product-item__inner px-xl-4 p-3">
                        <div class="product-item__body pb-xl-2">
                            <div class="mb-2">
                                @if($producto->categoria)
                                 <a href="{{route('categoria.single', ['categoria' => strtolower($producto->categoria->name)])}}" class="font-size-12 text-gray-5">{{$producto->categoria->name}}</a>
                                @endif
                            </div>
                            <h5 class="mb-1 product-item__title"><a href="{{route('productos.show', $producto->id)}}" class="text-blue font-weight-bold">{{$producto->name}}</a></h5>
                            <div class="mb-2">
                                <a href="{{route('productos.show', $producto->id)}}" class="d-block text-center">
                                    <img class="img-fluid" src="{{asset('uploads/productos/150x150').'/'.$producto->img}}" alt="{{$producto->name}}">
                                </a>
                            </div>
                            <div class="flex-center-between mb-1">
                                @if($producto->oldprice)
                                    <div class="prodcut-price d-flex align-items-center position-relative">
                                        <ins class="font-size-20 text-red text-decoration-none">$ {{number_format($producto->price, 0, '','.')}}</ins>
                                        <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$ {{number_format($producto->oldprice, 0, '','.')}}</del>
                                    </div>
                                @else
                                <div class="prodcut-price">
                                    <div class="text-gray-100">$ {{number_format($producto->price,0,'','.')}}</div>
                                </div>
                                @endif
                                <!--div class="d-none d-xl-block prodcut-add-cart">
                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                </div-->
                            </div>
                        </div>
                        <div class="product-item__footer">
                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>


</div>
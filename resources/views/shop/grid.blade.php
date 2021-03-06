<div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
    <ul class="row list-unstyled products-group no-gutters">
        @foreach($productos as $producto)
        <li class="col-6 col-md-3 col-xl-2 product-item">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        @if($producto->categoria)
                        <div class="mb-2"><a href="{{ url('/categorias').'/'.strtolower($producto->categoria->name) }}" class="font-size-12 text-gray-5">{{ $producto->categoria->name }}</a></div>
                        @endif
                            <h5 class="mb-1 product-item__title"><a href="{{ url('/productos').'/'.$producto->slug }}" class="text-blue font-weight-bold">{{ $producto->name }}</a></h5>
                        <div class="mb-2">
                            <a href="{{ url('/productos').'/'.$producto->slug }}" class="d-block text-center"><img class="img-fluid" src="{{ asset('uploads/productos/300X300').'/'.$producto->img }}" alt="{{ $producto->name }}"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price">
                                <div class="text-gray-100">${{ number_format($producto->price,0,'','.') }}</div>
                            </div>
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
        <!--li class="col-6 col-md-3 col-xl-2 product-item">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price d-flex align-items-center position-relative">
                                <ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
                                <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                            </div>
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
        <li class="col-6 col-md-3 col-xl-2 product-item">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Solo 2 Wireless</a></h5>
                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img3.jpg" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price">
                                <div class="text-gray-100">$685,00</div>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                            </div>
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
        <li class="col-6 col-md-3 col-xl-2 product-item remove-divider-md-lg">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img4.jpg" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price">
                                <div class="text-gray-100">$685,00</div>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                            </div>
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
        <li class="col-6 col-md-3 col-xl-2 product-item">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Widescreen NX Mini F1 SMART NX</a></h5>
                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img5.jpg" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price">
                                <div class="text-gray-100">$685,00</div>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                            </div>
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
        <li class="col-6 col-md-3 col-xl-2 product-item remove-divider-xl remove-divider-wd">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img6.jpg" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price">
                                <div class="text-gray-100">$685,00</div>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                            </div>
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
        <li class="col-6 col-md-3 col-xl-2 product-item">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price d-flex align-items-center position-relative">
                                <ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
                                <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                            </div>
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
        <li class="col-6 col-md-3 col-xl-2 product-item remove-divider-md-lg">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Solo 2 Wireless</a></h5>
                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img8.jpg" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price">
                                <div class="text-gray-100">$685,00</div>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                            </div>
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
        <li class="col-6 col-md-3 col-xl-2 product-item">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price">
                                <div class="text-gray-100">$685,00</div>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                            </div>
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
        <li class="col-6 col-md-3 col-xl-2 product-item">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Widescreen NX Mini F1 SMART NX</a></h5>
                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price">
                                <div class="text-gray-100">$685,00</div>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                            </div>
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
        <li class="col-6 col-md-3 col-xl-2 product-item">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price">
                                <div class="text-gray-100">$685,00</div>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                            </div>
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
        <li class="col-6 col-md-3 col-xl-2 product-item remove-divider-wd remove-divider-md-lg remove-divider-xl">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price d-flex align-items-center position-relative">
                                <ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
                                <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                            </div>
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
        <li class="col-6 col-md-3 col-xl-2 product-item">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Solo 2 Wireless</a></h5>
                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img3.jpg" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price">
                                <div class="text-gray-100">$685,00</div>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                            </div>
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
        <li class="col-6 col-md-3 col-xl-2 product-item">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img4.jpg" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price">
                                <div class="text-gray-100">$685,00</div>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                            </div>
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
        <li class="col-6 col-md-3 col-xl-2 product-item">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Widescreen NX Mini F1 SMART NX</a></h5>
                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img5.jpg" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price">
                                <div class="text-gray-100">$685,00</div>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                            </div>
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
        <li class="col-6 col-md-3 col-xl-2 product-item remove-divider-md-lg">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img6.jpg" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price">
                                <div class="text-gray-100">$685,00</div>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                            </div>
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
        <li class="col-6 col-md-3 col-xl-2 product-item">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price d-flex align-items-center position-relative">
                                <ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
                                <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                            </div>
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
        <li-- class="col-6 col-md-3 col-xl-2 product-item remove-divider">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Solo 2 Wireless</a></h5>
                        <div class="mb-2">
                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img8.jpg" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price">
                                <div class="text-gray-100">$685,00</div>
                            </div>
                            <div class="d-none d-xl-block prodcut-add-cart">
                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                            </div>
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
        </li-->
    </ul>
</div>
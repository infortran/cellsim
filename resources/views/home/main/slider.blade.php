<!-- Slider & Banner Section -->
<div class="mb-4">
    <div class="container overflow-hidden">
        <div class="row">
            <!-- Slider -->
            <div class="col-xl pr-xl-2 mb-4 mb-xl-0">
                <div class="bg-img-hero mr-xl-1 height-410-xl max-width-1060-wd max-width-830-xl overflow-hidden" style="background-image: url(../../assets/img/1920X422/img1.jpg);">
                    <div class="js-slick-carousel u-slick"
                         data-autoplay="true"
                         data-speed="7000"
                         data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start ml-9 mb-3 mb-md-5">

                        @if($sliders->count() > 0)
                        @foreach($sliders as $slider)
                        <div class="js-slide bg-img-hero-center">

                            <div class="row height-410-xl py-7 py-md-0 mx-0">

                                <div class="d-none d-wd-block offset-1"></div>

                                <div class="col-xl col-4 col-md-4 mt-md-4">
                                    <h1 class="font-size-64 text-lh-57 font-weight-light"
                                        data-scs-animation-in="fadeInUp">
                                        {{$slider->title}} <span class="d-block font-size-55"></span>
                                    </h1>
                                    <h6 class="font-size-15 font-weight-bold mb-3"
                                        data-scs-animation-in="fadeInUp"
                                        data-scs-animation-delay="200">{{$slider->subtitle}}
                                    </h6>
                                    <div class="mb-4"
                                         data-scs-animation-in="fadeInUp"
                                         data-scs-animation-delay="300">
                                        <span class="font-size-13">{{$slider->text}}</span>
                                        <div class="font-size-50 font-weight-bold text-lh-45">
                                            <sup class="">$</sup>{{number_format($slider->price,0,'','.')}}
                                        </div>
                                    </div>
                                    <a href="{{url('/productos').'/'. $slider->producto->id}}" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                       data-scs-animation-in="fadeInUp"
                                       data-scs-animation-delay="400">
                                        Ver detalles
                                    </a>
                                </div>

                                <div class="col-xl-7 col-6 d-flex align-items-center ml-auto ml-md-0"
                                     data-scs-animation-in="zoomIn"
                                     data-scs-animation-delay="500">
                                    <img class="img-fluid" src="{{asset('uploads/sliders/600x600').'/'.$slider->img}}" alt="{{$slider->title}}">
                                </div>

                            </div>
                        </div>

                        @endforeach
                            @endif

                    </div>
                </div>
            </div>
            <!-- End Slider -->
            <!-- Banner -->
            <div class="col-xl-auto pl-xl-2 ">
                <div class="overflow-hidden">
                    <ul class="list-unstyled row flex-nowrap flex-xl-wrap overflow-auto overflow-lg-visble mx-n2 mx-xl-0 d-xl-block mb-0">
                        <li class="px-2 px-xl-0 flex-shrink-0 flex-xl-shrink-1 mb-3">
                            <a href="../shop/shop.html" class="min-height-126 max-width-320 py-1 py-xl-2 py-wd-1 banner-bg d-flex align-items-center text-gray-90">
                                <div class="col col-lg-6 col-xl-5 col-wd-6 mb-3 mb-lg-0 pr-lg-0">
                                    <img class="img-fluid" src="{{asset('images/funda.png')}}" alt="Image Description">
                                </div>
                                <div class="col col-lg-6 col-xl-7 col-wd-6 pr-xl-4 pr-wd-3">
                                    <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                        <strong>PROTECTORES</strong> MICAS SILICONAS
                                    </div>
                                    <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                        Ver productos
                                        <span class="link__icon ml-1">
                                            <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="px-2 px-xl-0 flex-shrink-0 flex-xl-shrink-1 mb-3">
                            <a href="../shop/shop.html" class="min-height-126 max-width-320 py-1 py-xl-2 py-wd-1 banner-bg d-flex align-items-center text-gray-90">
                                <div class="col col-lg-6 col-xl-5 col-wd-6 mb-3 mb-lg-0 pr-lg-0">
                                    <img class="img-fluid" src="{{asset('images/charger.png')}}" alt="Image Description">
                                </div>
                                <div class="col col-lg-6 col-xl-7 col-wd-6 pr-xl-4 pr-wd-3">
                                    <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                        <strong>CARGADORES</strong> BATERIAS <br> CABLES USB
                                    </div>
                                    <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                        Ver productos
                                        <span class="link__icon ml-1">
                                            <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="px-2 px-xl-0 flex-shrink-0 flex-xl-shrink-1 mb-0">
                            <a href="../shop/shop.html" class="min-height-126 max-width-320 py-1 py-xl-2 py-wd-1 banner-bg d-flex align-items-center text-gray-90">
                                <div class="col col-lg-6 col-xl-5 col-wd-6 mb-3 mb-lg-0 pr-lg-0">
                                    <img class="img-fluid" src="{{asset('images/audifono.png')}}" alt="Image Description">
                                </div>
                                <div class="col col-lg-6 col-xl-7 col-wd-6 pr-xl-4 pr-wd-3">
                                    <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                        <strong>AUDIFONOS</strong> <br>CON CABLE <br> BLUETOOTH
                                    </div>
                                    <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                        Ver Productos
                                        <span class="link__icon ml-1">
                                            <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Banner -->
        </div>
    </div>
</div>
<!-- End Slider & Banner Section -->
@extends('templates.app')
    @section('content')
        <!-- ========== HEADER ========== -->
        @include('templates.header-full')
        <!-- ========== END HEADER ========== -->

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <!-- breadcrumb -->
            @include('templates.breadcrumb')
            <!-- End breadcrumb -->
            <div class="container">
                <!-- Single Product Body -->
                <div class="mb-xl-14 mb-6">
                    <div class="row">
                        <div class="col-md-5 mb-4 mb-md-0">
                            <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2"
                                data-infinite="true"
                                data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                                data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                                data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                                data-nav-for="#sliderSyncingThumb">
                                <div class="js-slide">


                                    <img style="cursor: pointer" data-toggle="modal" data-target="#imgModal" class="img-fluid" src="{{ asset('uploads/productos/600X600') . '/' . $producto->img}}" alt="Image Description">
                                </div>
                                {{-- <div class="js-slide">
                                    <img class="img-fluid" src="../../assets/img/720X660/img2.jpg" alt="Image Description">
                                </div>
                                <div class="js-slide">
                                    <img class="img-fluid" src="../../assets/img/720X660/img3.jpg" alt="Image Description">
                                </div>
                                <div class="js-slide">
                                    <img class="img-fluid" src="../../assets/img/720X660/img4.jpg" alt="Image Description">
                                </div>
                                <div class="js-slide">
                                    <img class="img-fluid" src="../../assets/img/720X660/img5.jpg" alt="Image Description">
                                </div> --}}
                            </div>

                            {{-- <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off"
                                data-infinite="true"
                                data-slides-show="5"
                                data-is-thumbs="true"
                                data-nav-for="#sliderSyncingNav">
                                <div class="js-slide" style="cursor: pointer;">
                                    <img class="img-fluid" src="../../assets/img/720X660/img1.jpg" alt="Image Description">
                                </div>
                                <div class="js-slide" style="cursor: pointer;">
                                    <img class="img-fluid" src="../../assets/img/720X660/img2.jpg" alt="Image Description">
                                </div>
                                <div class="js-slide" style="cursor: pointer;">
                                    <img class="img-fluid" src="../../assets/img/720X660/img3.jpg" alt="Image Description">
                                </div>
                                <div class="js-slide" style="cursor: pointer;">
                                    <img class="img-fluid" src="../../assets/img/720X660/img4.jpg" alt="Image Description">
                                </div>
                                <div class="js-slide" style="cursor: pointer;">
                                    <img class="img-fluid" src="../../assets/img/720X660/img5.jpg" alt="Image Description">
                                </div>
                            </div> --}}
                        </div>
                        <div class="col-md-7 mb-md-6 mb-lg-0">
                            <div class="mb-2">
                                <div class="border-bottom mb-3 pb-md-1 pb-3">
                                    <a href="#" class="font-size-12 text-gray-5 mb-2 d-inline-block">{{ $producto->categoria->name ?? '' }}</a>
                                    <h2 class="font-size-25 text-lh-1dot2">{{ $producto->name }}</h2>
                                    <div class="mb-2">
                                        {{-- <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                                            <div class="text-warning mr-2">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star text-muted"></small>
                                            </div>
                                            <span class="text-secondary font-size-13">(3 customer reviews)</span>
                                        </a> --}}
                                    </div>
                                    <div class="d-md-flex align-items-center">
                                        @if ($producto->marca)
                                        <a href="#" class="max-width-150 ml-n2 mb-2 mb-md-0 d-block"><img class="img-fluid" src="{{ asset('uploads/marcas/500X300') . '/' . $producto->marca->img }}" alt="Image Description"></a>
                                        @endif
                                        <div class="ml-md-3 text-gray-9 font-size-14">Stock: <span class="text-green font-weight-bold">{{ $producto->stock }}</span></div>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="imgModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <button style="margin-left: auto; margin-right: 20px; margin-top: 20px" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            <div class="modal-body" style="display: flex; justify-content: center; align-items: center">
                                                <img class="img-fluid" src="{{ asset('uploads/productos/600X600') . '/' . $producto->img}}" alt="Image Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="flex-horizontal-center flex-wrap mb-4">
                                    <a href="#" class="text-gray-6 font-size-13 mr-2"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                    <a href="#" class="text-gray-6 font-size-13 ml-2"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                </div> --}}
                                {{-- <div class="mb-2">
                                    <ul class="font-size-14 pl-3 ml-1 text-gray-110">
                                        <li>4.5 inch HD Touch Screen (1280 x 720)</li>
                                        <li>Android 4.4 KitKat OS</li>
                                        <li>1.4 GHz Quad Core™ Processor</li>
                                        <li>20 MP Electro and 28 megapixel CMOS rear camera</li>
                                    </ul>
                                </div> --}}
                                <p>{{ $producto->description }}</p>
                                {{-- <p><strong>SKU</strong>: FW511948218</p> --}}
                                <div class="mb-4">
                                    <div class="d-flex align-items-baseline">
                                        <ins class="font-size-36 text-decoration-none">${{ number_format($producto->price, 0, '', '.') }}</ins>
                                        <del class="font-size-20 ml-2 text-gray-6">
                                            @if($producto->oldprice != 0)
                                            ${{ number_format($producto->oldprice, 0, '', '.') ?? '' }}
                                            @endif
                                        </del>
                                    </div>
                                </div>
                                {{-- <div class="border-top border-bottom py-3 mb-4">
                                    <div class="d-flex align-items-center">
                                        <h6 class="font-size-14 mb-0">Color</h6>
                                        <!-- Select -->
                                        <select class="js-select selectpicker dropdown-select ml-3"
                                            data-style="btn-sm bg-white font-weight-normal py-2 border">
                                            <option value="one" selected>White with Gold</option>
                                            <option value="two">Red</option>
                                            <option value="three">Green</option>
                                            <option value="four">Blue</option>
                                        </select>
                                        <!-- End Select -->
                                    </div>
                                </div> --}}
                                {{-- <div class="d-md-flex align-items-end mb-3">
                                    <div class="max-width-150 mb-4 mb-md-0">
                                        <h6 class="font-size-14">Quantity</h6>
                                        <!-- Quantity -->
                                        <div class="border rounded-pill py-2 px-3 border-color-1">
                                            <div class="js-quantity row align-items-center">
                                                <div class="col">
                                                    <input class="js-result form-control h-auto border-0 rounded p-0 shadow-none" type="text" value="1">
                                                </div>
                                                <div class="col-auto pr-1">
                                                    <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                        <small class="fas fa-minus btn-icon__inner"></small>
                                                    </a>
                                                    <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                        <small class="fas fa-plus btn-icon__inner"></small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Quantity -->
                                    </div>
                                    <div class="ml-md-3">
                                        <a href="#" class="btn px-5 btn-primary-dark transition-3d-hover"><i class="ec ec-add-to-cart mr-2 font-size-20"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- End Single Product Body -->
                <!-- Single Product Tab -->
                {{--
                    @include('single.single-tab')
                --}}

                <!-- End Single Product Tab -->
                <!-- Related products -->
                {{--
                    @include('single.related-products')
                --}}
                <!-- End Related products -->
                <!-- Brand Carousel -->
                @include('templates.brand-carousel')
                <!-- End Brand Carousel -->
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

        <!-- ========== FOOTER ========== -->
        @include('templates.footer')
        <!-- ========== END FOOTER ========== -->

        <!-- ========== SECONDARY CONTENTS ========== -->
        <!-- Account Sidebar Navigation -->


        @include('templates.account-sidebar')
        <!-- End Account Sidebar Navigation -->
        <!-- ========== END SECONDARY CONTENTS ========== -->

        <!-- Go to Top -->
        @include('templates.go-top')
        <!-- End Go to Top -->
@endsection
        <!-- JS Global Compulsory ->
        <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
        <script src="../../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

        <!-- JS Implementing Plugins ->
        <script src="../../assets/vendor/appear.js"></script>
        <script src="../../assets/vendor/jquery.countdown.min.js"></script>
        <script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
        <script src="../../assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
        <script src="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="../../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="../../assets/vendor/fancybox/jquery.fancybox.min.js"></script>
        <script src="../../assets/vendor/typed.js/lib/typed.min.js"></script>
        <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
        <script src="../../assets/vendor/appear.js"></script>
        <script src="../../assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

        <!-- JS Electro
        ->
        <script src="../../assets/js/hs.core.js"></script>
        <script src="../../assets/js/components/hs.countdown.js"></script>
        <script src="../../assets/js/components/hs.header.js"></script>
        <script src="../../assets/js/components/hs.hamburgers.js"></script>
        <script src="../../assets/js/components/hs.unfold.js"></script>
        <script src="../../assets/js/components/hs.focus-state.js"></script>
        <script src="../../assets/js/components/hs.malihu-scrollbar.js"></script>
        <script src="../../assets/js/components/hs.validation.js"></script>
        <script src="../../assets/js/components/hs.fancybox.js"></script>
        <script src="../../assets/js/components/hs.onscroll-animation.js"></script>
        <script src="../../assets/js/components/hs.slick-carousel.js"></script>
        <script src="../../assets/js/components/hs.quantity-counter.js"></script>
        <script src="../../assets/js/components/hs.show-animation.js"></script>
        <script src="../../assets/js/components/hs.svg-injector.js"></script>
        <script src="../../assets/js/components/hs.scroll-nav.js"></script>
        <script src="../../assets/js/components/hs.go-to.js"></script>
        <script src="../../assets/js/components/hs.selectpicker.js"></script>

        <!-- JS Plugins Init. ->
        <script>
            $(window).on('load', function () {
                // initialization of HSMegaMenu component
                $('.js-mega-menu').HSMegaMenu({
                    event: 'hover',
                    direction: 'horizontal',
                    pageContainer: $('.container'),
                    breakpoint: 767.98,
                    hideTimeOut: 0
                });
            });

            $(document).on('ready', function () {
                // initialization of header
                $.HSCore.components.HSHeader.init($('#header'));

                // initialization of animation
                $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                    afterOpen: function () {
                        $(this).find('input[type="search"]').focus();
                    }
                });

                // initialization of HSScrollNav component
                $.HSCore.components.HSScrollNav.init($('.js-scroll-nav'), {
                  duration: 700
                });

                // initialization of quantity counter
                $.HSCore.components.HSQantityCounter.init('.js-quantity');

                // initialization of popups
                $.HSCore.components.HSFancyBox.init('.js-fancybox');

                // initialization of countdowns
                var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                    yearsElSelector: '.js-cd-years',
                    monthsElSelector: '.js-cd-months',
                    daysElSelector: '.js-cd-days',
                    hoursElSelector: '.js-cd-hours',
                    minutesElSelector: '.js-cd-minutes',
                    secondsElSelector: '.js-cd-seconds'
                });

                // initialization of malihu scrollbar
                $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

                // initialization of forms
                $.HSCore.components.HSFocusState.init();

                // initialization of form validation
                $.HSCore.components.HSValidation.init('.js-validate', {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });

                // initialization of show animations
                $.HSCore.components.HSShowAnimation.init('.js-animation-link');

                // initialization of fancybox
                $.HSCore.components.HSFancyBox.init('.js-fancybox');

                // initialization of slick carousel
                $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

                // initialization of go to
                $.HSCore.components.HSGoTo.init('.js-go-to');

                // initialization of hamburgers
                $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                    beforeClose: function () {
                        $('#hamburgerTrigger').removeClass('is-active');
                    },
                    afterClose: function() {
                        $('#headerSidebarList .collapse.show').collapse('hide');
                    }
                });

                $('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
                    e.preventDefault();

                    var target = $(this).data('target');

                    if($(this).attr('aria-expanded') === "true") {
                        $(target).collapse('hide');
                    } else {
                        $(target).collapse('show');
                    }
                });

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

                // initialization of select picker
                $.HSCore.components.HSSelectPicker.init('.js-select');
            });
        </script>
    </body>
</html>
-->

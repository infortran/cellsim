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
                <div class="mb-5 text-center pb-3 border-bottom border-color-1">
                    <h1 class="font-size-sl-72 font-weight-light mb-3">404!</h1>
                    <p class="text-gray-90 font-size-20 mb-0 font-weight-light">Nothing was found at this location. Try searching, or check out the links below.</p>
                </div>
                <div class="d-flex mb-6">
                    <!-- Search Jobs Form -->
                    <form class="d-block d-md-flex flex-horizontal-center w-100 w-lg-80 w-xl-50 mx-md-auto">
                        <div class="mb-3 mb-md-0 col px-md-2 px-0">
                            <!-- Input -->
                            <div class="js-focus-state">
                                <input type="text" class="form-control" placeholder="Search products…" aria-label="Search products…" aria-describedby="keywordInputAddon">
                            </div>
                            <!-- End Input -->
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-block btn-primary-dark-w px-5">Search</button>
                        </div>
                        <!-- End Checkbox -->
                    </form>
                    <!-- End Search Jobs Form -->
                </div>

                <!--Features productos goes here-->
                @include('404.featured-products')

                <!--Popular products goes here-->
                @include('404.popular-products')

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
        <!-- Sidebar Navigation -->

        <!-- End Sidebar Navigation -->

        <!-- Go to Top -->
        @include('templates.go-top')
        <!-- End Go to Top -->
@endsection
        <!-- JS Global Compulsory ->
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/vendor/bootstrap/bootstrap.min.js"></script>

        <!-- JS Implementing Plugins ->
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/vendor/appear.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/vendor/jquery.countdown.min.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/vendor/fancybox/jquery.fancybox.min.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/vendor/typed.js/lib/typed.min.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/vendor/slick-carousel/slick/slick.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/vendor/appear.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

        <!-- JS Electro ->
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/hs.core.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/components/hs.countdown.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/components/hs.header.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/components/hs.hamburgers.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/components/hs.unfold.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/components/hs.focus-state.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/components/hs.malihu-scrollbar.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/components/hs.validation.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/components/hs.fancybox.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/components/hs.onscroll-animation.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/components/hs.slick-carousel.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/components/hs.quantity-counter.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/components/hs.range-slider.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/components/hs.show-animation.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/components/hs.svg-injector.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/components/hs.scroll-nav.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/components/hs.go-to.js"></script>
        <script src="../../../../templates/transvelo.github.io/electro-html/2.0/assets/js/components/hs.selectpicker.js"></script>

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

                // initialization of forms
                $.HSCore.components.HSRangeSlider.init('.js-range-slider');

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
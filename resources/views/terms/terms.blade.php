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
                <div class="mb-12 text-center">
                    <h1>Terms and Conditions</h1>
                    <p class="text-gray-44">This Agreement was last modified on 18th february 2019</p>
                </div>
                <div class="mb-10">
                    <h3 class="mb-6 pb-2 font-size-25">Intellectual Propertly</h3>
                    <ol>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices interdum.</li>
                        <li>Leo metus luctus sem, vel vulputate diam ipsum sed lorem. Donec tempor arcu nisl, et molestie massa scelerisque ut. Nunc at rutrum leo. Mauris metus mauris, tristique quis sapien eu, rutrum vulputate enim.</li>
                        <li>Mauris tempus erat laoreet turpis lobortis, eu tincidunt erat fermentum.</li>
                        <li>Aliquam non tincidunt urna. Integer tincidunt nec nisl vitae ullamcorper. Proin sed ultrices erat. Praesent varius ultrices massa at faucibus.</li>
                        <li>Aenean dignissim, orci sed faucibus pharetra, dui mi dignissim tortor, sit amet condimentum mi ligula sit amet augue.</li>
                        <li>Pellentesque vitae eros eget enim mollis placerat.</li>
                    </ol>
                </div>
                <div class="mb-10">
                    <h3 class="mb-6 pb-2 font-size-25">Termination</h3>
                    <ol>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices interdum.</li>
                        <li>Leo metus luctus sem, vel vulputate diam ipsum sed lorem. Donec tempor arcu nisl, et molestie massa scelerisque ut. Nunc at rutrum leo. Mauris metus mauris, tristique quis sapien eu, rutrum vulputate enim.</li>
                        <li>Mauris tempus erat laoreet turpis lobortis, eu tincidunt erat fermentum.</li>
                        <li>Aliquam non tincidunt urna. Integer tincidunt nec nisl vitae ullamcorper. Proin sed ultrices erat. Praesent varius ultrices massa at faucibus.</li>
                        <li>Aenean dignissim, orci sed faucibus pharetra, dui mi dignissim tortor, sit amet condimentum mi ligula sit amet augue.</li>
                        <li>Pellentesque vitae eros eget enim mollis placerat.</li>
                    </ol>
                </div>
                <div class="mb-10">
                    <h3 class="mb-6 pb-2 font-size-25">Changes To This Agreement</h3>
                    <p class="text-gray-90">We reserve the right, at our sole discretion, to modify or replace these Terms and Conditions by posting the updated terms on the Site. Your continued use of the Site after any such changes constitutes your acceptance of the new Terms and Conditions.</p>
                </div>
                <div class="mb-10">
                    <h3 class="mb-6 pb-2 font-size-25">Contact Us</h3>
                    <p class="text-gray-90">If you have any questions about this Agreement, please contact us filling this <a href="#" class="text-blue font-weight-bold">contact form</a></p>
                </div>
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
        <script src="../../assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="../../assets/vendor/typed.js/lib/typed.min.js"></script>
        <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
        <script src="../../assets/vendor/appear.js"></script>
        <script src="../../assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

        <!-- JS Electro ->
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
        <script src="../../assets/js/components/hs.range-slider.js"></script>
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
@extends('templates.app')
        @section('content')
        <!--header goes here-->
        @include('templates.header-full')

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <!-- breadcrumb -->
            @include('templates.breadcrumb')
            <!-- End breadcrumb -->

            <div class="container">
                <div class="mb-8">
                    <!-- Recommended Products -->
                    @include('shop.recommended-products')
                    <!-- End Recommended Products -->


                    <!--SHOP goes here-->
                    @include('shop.main-shop')

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
        <!-- Sidebar Navigation IS NOT NECESSARY!!! -->

        <!-- End Sidebar Navigation -->

        <!-- Go to Top -->
        @include('templates.go-top')
        <!-- End Go to Top -->


        @endsection




        @push('scripts')
                <script src="../../assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
        @endpush




                    <!-- JS Implementing Plugins >




        <script src="../../assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="../../assets/vendor/typed.js/lib/typed.min.js"></script>
        <script src="../../assets/vendor/appear.js"></script>



        <!-- JS Electro >
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

       -->
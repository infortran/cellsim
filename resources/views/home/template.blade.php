@extends('templates.app')

        @section('content')
        @include('templates.header.index')

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <!--Slider goes here-->
            @include('home.main.slider')



            <div class="container">
                <!-- Tab Prodcut Section -->
                <div class="mb-6">
                    <!-- Tab content & Nav Classic -->
                    @include('home.main.tab-content')
                    <!-- End Tab Content -->
                </div>
                <!-- End Tab Prodcut Section -->



                <!-- Full banner -->
                <div style="width: 100%; margin: 0 auto;">
                    @include('home.main.full-banner')
                </div>

                <!-- End Full banner -->
            </div>



            <!-- Week Deals limited -->


            <!-- End Week Deals limited -->


            <div class="container">
                <!-- Smartphones & Tablets -->
                @if($plc)
                    @include('templates.product-list-component', $plc)
                @endif
                <!-- End Smartphones & Tablets -->



                <!-- Music Headphones -->

                <!-- End Music Headphones -->
            </div>


            <!-- Top Categories this Week -->
            @include('home.main.categories-this-week')
            <!-- End Top Categories this Week -->



            <div class="container">
                <!-- Laptops & Computers -->

                <!-- End Laptops & Computers -->


                <!-- Home Enternteinment -->

                <!-- End Home Enternteinment -->
            </div>


            <!-- Brand Carousel -->
            @include('templates.brand-carousel')
            <!-- End Brand Carousel -->


        </main>
        <!-- ========== END MAIN CONTENT ========== -->

        @include('templates.footer')

        <!-- ========== SECONDARY CONTENTS ========== -->
        @include('templates.account-sidebar')
        <!-- ========== END SECONDARY CONTENTS ========== -->

        <!-- Go to Top -->
        @include('templates.go-top')
        <!-- End Go to Top -->

@endsection
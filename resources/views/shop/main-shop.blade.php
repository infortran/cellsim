<!-- Shop-control-bar Title -->
<div class="flex-center-between mb-3">
    <h3 class="font-size-25 mb-0">Todos los productos</h3>
    <p class="font-size-14 text-gray-90 mb-0">Showing 1–25 of 56 results</p>
</div>
<!-- End shop-control-bar Title -->
<!-- Shop-control-bar -->
<div class="bg-gray-1 flex-center-between borders-radius-9 py-1">
    <div class="d-xl-none">
        <!-- Account Sidebar Toggle Button -->
        <a id="sidebarNavToggler1" class="btn btn-sm py-1 font-weight-normal" href="javascript:;" role="button"
           aria-controls="sidebarContent1"
           aria-haspopup="true"
           aria-expanded="false"
           data-unfold-event="click"
           data-unfold-hide-on-scroll="false"
           data-unfold-target="#sidebarContent1"
           data-unfold-type="css-animation"
           data-unfold-animation-in="fadeInLeft"
           data-unfold-animation-out="fadeOutLeft"
           data-unfold-duration="500">
            <i class="fas fa-sliders-h"></i> <span class="ml-1">Filters</span>
        </a>
        <!-- End Account Sidebar Toggle Button -->
    </div>
    <div class="px-3 d-none d-xl-block">
        <ul class="nav nav-tab-shop" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="false">
                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                        <i class="fa fa-th"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                        <i class="fa fa-align-justify"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="true">
                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                        <i class="fa fa-list"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-four-example1-tab" data-toggle="pill" href="#pills-four-example1" role="tab" aria-controls="pills-four-example1" aria-selected="true">
                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                        <i class="fa fa-th-list"></i>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="d-flex">
        <form method="get">
            <!-- Select -->
            <select class="js-select selectpicker dropdown-select max-width-200 max-width-160-sm right-dropdown-0 px-2 px-xl-0"
                    data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                <option value="one" selected>Default sorting</option>
                <option value="two">Sort by popularity</option>
                <option value="three">Sort by average rating</option>
                <option value="four">Sort by latest</option>
                <option value="five">Sort by price: low to high</option>
                <option value="six">Sort by price: high to low</option>
            </select>
            <!-- End Select -->
        </form>
        <form method="POST" class="ml-2 d-none d-xl-block">
            <!-- Select -->
            <select class="js-select selectpicker dropdown-select max-width-120"
                    data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                <option value="one" selected>Show 20</option>
                <option value="two">Show 40</option>
                <option value="three">Show All</option>
            </select>
            <!-- End Select -->
        </form>
    </div>
    <nav class="px-3 flex-horizontal-center text-gray-20 d-none d-xl-flex">
        <form method="post" class="min-width-50 mr-1">
            <input size="2" min="1" max="3" step="1" type="number" class="form-control text-center px-2 height-35" value="1">
        </form> of 3
        <a class="text-gray-30 font-size-20 ml-2" href="#">→</a>
    </nav>
</div>
<!-- End Shop-control-bar -->
<!-- Shop Body -->
<!-- Tab Content -->
<div class="tab-content" id="pills-tabContent">
    @include('shop.grid')



</div>
<!-- End Tab Content -->
<!-- End Shop Body -->
<!-- Shop Pagination -->
<nav class="d-md-flex justify-content-between align-items-center border-top pt-3" aria-label="Page navigation example">
    <div class="text-center text-md-left mb-3 mb-md-0">Showing 1–25 of 56 results</div>
    <ul class="pagination mb-0 pagination-shop justify-content-center justify-content-md-start">
        <li class="page-item"><a class="page-link current" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
    </ul>
</nav>
<!-- End Shop Pagination -->
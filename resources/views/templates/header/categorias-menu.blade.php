<div class="col-md-auto d-none d-xl-flex align-items-end">
    <div class="max-width-270 min-width-270">
        <!-- Basics Accordion -->
        <div id="basicsAccordion">
            <!-- Card -->
            <div class="card border-0 rounded-0">
                <div class="card-header bg-primary rounded-0 card-collapse border-0" id="basicsHeadingOne">
                    <button type="button" class="btn-lik btn-remove-focus btn-block d-flex py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold"
                            data-toggle="collapse"
                            data-target="#basicsCollapseOne"
                            aria-expanded="true"
                            aria-controls="basicsCollapseOne">
                        <span class="pl-1">Categorías</span>
                                                    <span class="text-gray-90 ml-3">
                                                        <span class="ec ec-arrow-down-search"></span>
                                                    </span>
                    </button>
                </div>
                <div id="basicsCollapseOne" class="collapse vertical-menu v1"
                     aria-labelledby="basicsHeadingOne"
                     data-parent="#basicsAccordion">
                    <div class="card-body p-0">
                        <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                            <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                <ul class="navbar-nav u-header__navbar-nav border-primary border-top-0">


                                    <!--Foreach goes here-->
                                    @foreach($categorias as $categoria)
                                        <li class="nav-item u-header__nav-item"
                                            data-event="hover"
                                            data-position="left">
                                            <a href="{{url('categorias/').'/'.strtolower($categoria->name)}}" class="nav-link u-header__nav-link font-weight-bold">{{$categoria->name}}</a>
                                        </li>
                                        @endforeach



                                                <!-- End Nav Item -->
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Basics Accordion -->
    </div>
</div>
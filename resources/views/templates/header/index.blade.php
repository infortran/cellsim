<!-- ========== HEADER ========== -->
<header id="header" class="u-header u-header-left-aligned-nav">
    <div class="u-header__section">
        <!-- Topbar -->
        @include('templates.header.top-bar')
        <!-- End Topbar -->






        <!-- Logo and Menu -->
        <div class="py-2 py-xl-4 bg-primary-down-lg">
            <div class="container my-0dot5 my-xl-0">
                <div class="row align-items-center">
                    <!-- Logo-offcanvas-menu -->
                    @include('templates.header.off-canvas')
                    <!-- End Logo-offcanvas-menu -->
                    <!-- Primary Menu -->
                    @include('templates.header.primary-menu')
                    <!-- End Primary Menu -->
                    <!-- Customer Care -->
                    @include('templates.header.customer-care')
                    <!-- End Customer Care -->
                    <!-- Header Icons -->
                    <!-- End Header Icons -->
                </div>
            </div>
        </div>
        <!-- End Logo and Menu -->

        <!-- Vertical-and-Search-Bar -->
        <div class="d-none d-xl-block bg-primary">
            <div class="container">
                <div class="row align-items-stretch min-height-50">
                    <!-- Categorias Menu -->
                    @include('templates.header.categorias-menu')
                    <!-- End Categorias Menu -->
                    <!-- Search bar -->
                    @include('templates.header.search-bar')
                    <!-- End Search bar -->
                    <!-- Header Icons -->
                    <!-- End Header Icons -->
                </div>
            </div>
        </div>
        <!-- End Vertical-and-secondary-menu -->
    </div>
</header>
<!-- ========== END HEADER ========== -->
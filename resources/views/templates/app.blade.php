<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Title HOME-->
    <title>Home</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../favicon.png">


    <link rel="stylesheet" href="../../assets/css/font-electro.css">



    <link media="none" onload="if(media!='all')media='all'" rel="stylesheet" href="../../assets/vendor/animate.css/animate.min.css">
    <link media="none" onload="if(media!='all')media='all'" rel="stylesheet" href="../../assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link media="none" onload="if(media!='all')media='all'" rel="stylesheet" href="../../assets/vendor/ion-rangeslider/css/ion.rangeSlider.css">
    <link media="none" onload="if(media!='all')media='all'" rel="stylesheet" href="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link media="none" onload="if(media!='all')media='all'" rel="stylesheet" href="../../assets/vendor/fancybox/jquery.fancybox.css">
    <link media="none" onload="if(media!='all')media='all'" rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css">
    <link media="none" onload="if(media!='all')media='all'" rel="stylesheet" href="../../assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

    <!-- Google Fonts -->
    <link media="none" onload="if(media!='all')media='all'" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link media="none" onload="if(media!='all')media='all'" rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link media="none" onload="if(media!='all')media='all'" rel="stylesheet" href="../../assets/vendor/font-awesome/css/fontawesome-all.min.css">

    <!-- CSS Electro Template -->
    <link media="none" onload="if(media!='all')media='all'" rel="stylesheet" href="../../assets/css/theme.css">
    <link media="none" onload="if(media!='all')media='all'" rel="stylesheet" href="../../assets/css/custom.css">
</head>

<body>

@yield('content')

<!-- JS Global Compulsory -->
<script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="../../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="../../assets/vendor/appear.js"></script>
<script src="../../assets/vendor/jquery.countdown.min.js"></script>
<script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>

<script src="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="../../assets/vendor/fancybox/jquery.fancybox.min.js"></script>
<script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="../../assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

@stack('script')

<!-- JS Electro -->
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
<script src="../../assets/js/components/hs.show-animation.js"></script>
<script src="../../assets/js/components/hs.go-to.js"></script>
<script src="../../assets/js/components/hs.selectpicker.js" defer></script>

<!-- JS Plugins Init. -->
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

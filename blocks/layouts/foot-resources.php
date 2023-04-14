<script src="assets/js/jQuery3.4.1.js"></script>
<script src="assets/js/swiper.min.js"> </script>
<script src="assets/js/wow.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.desoslide.min.js"></script>


<script type="text/javascript">

    $(document).ready(function () {


        // toggle menu
        $('header').find('a.toggle-menu').on('click', function() {
            $("nav .menu-box").hide();
            $(this).next(".menu-box").show();
            // $(this).parent().toggleClass('open-menu');
        });

        var notificationClose = true;
        $(".notifications-icon a").on("click" , function(e){
            e.preventDefault();
            if(notificationClose){
                $(".notifications-menu").fadeIn(200);
                notificationClose = false;
            }else{
                $(".notifications-menu").fadeOut(200);
                notificationClose = true;
            }
        });

        var swiper = new Swiper('  #home .swiper-container', {
            pagination: {
                el: '.swiper-pagination', clickable: true,
            },

        });

        new Swiper('#ourpartners .swiper-container', {
            pagination: {
                el: '.swiper-pagination', clickable: true,
            },


            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    slidesPerGroup: 1,
                },

                480: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                    // centeredSlides: true,
                    slidesPerGroup: 2,

                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                    // centeredSlides: true,
                    slidesPerGroup: 3,

                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 35,
                    slidesPerGroup: 3,

                },
                1200: {
                    slidesPerView: 6,
                    spaceBetween: 35,
                    slidesPerGroup: 3,

                },

            }


        });

        new WOW().init();

        new Swiper('.lastnews .swiper-container ', {
            navigation: {
                nextEl: ' .lastnews .swiper-button-next',
                prevEl: ' .lastnews .swiper-button-prev',
                clickable: true,
            },


            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    slidesPerGroup: 1,
                    centeredSlides: true
                },

                768: {
                    slidesPerView: 2,
                    spaceBetween: 7,
                    slidesPerGroup: 1,
                    loop: true,
                    loopFillGroupWithBlank: true,

                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                    slidesPerGroup: 1,
                    loop: true,
                    loopFillGroupWithBlank: true,



                },}
        });

        new Swiper('#store .swiper-container ', {
            navigation: {
                nextEl: ' .store .swiper-button-next',
                prevEl: ' .store .swiper-button-prev',
            },
            pagination: {
                el: '  .swiper-pagination',
                clickable: true,
            },
            dynamicBullets: true,

            // slidesPerView: 1,
            // spaceBetween: 0,
            // slidesPerGroup: 1,
            // loop: true,
            // loopFillGroupWithBlank: true,
        });

        new Swiper('  .product .swiper-container', {
            navigation: {
                nextEl: ' .product .swiper-button-next',
                prevEl: ' .lastnews .swiper-button-prev',
            },
            slidesPerView: 3,
            spaceBetween: 0,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
        });

        $(' .input-group  .add ').click(function () {
            var th = $(this).closest('.input-group').find('.form-control');
            th.val(+th.val() + 1);
        });
        $(' .input-group .sub').click(function () {
            var th = $(this).closest('.input-group').find('.form-control');
            if (th.val() > 1) th.val(+th.val() - 1);
        });

        new Swiper('.projects .swiper-container ', {
            navigation: {
                nextEl: ' .projects .swiper-button-next',
                prevEl: ' .projects .swiper-button-prev',
            },
            slidesPerView: 4,
            spaceBetween: 0,
            slidesPerGroup: 4,
            rtl: true,
            // loop: true,
            // loopFillGroupWithBlank: true ,
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    slidesPerGroup: 1,
                    centeredSlides: true
                },

                768: {
                    slidesPerView: 2,
                    spaceBetween: -30,
                    // centeredSlides: true,
                    slidesPerGroup: 1

                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 8,
                    slidesPerGroup: 1



                },}
        });


        new Swiper('  .blog .swiper-container', {
            pagination: {
                el: '  .blog .swiper-pagination', clickable: true,
            },

        });



        $('.widget-1 .video-play-link').on('click', function(e){
            e.preventDefault();
            var $link = $(this).attr('href'),
                $parent = $(this).parents('.widget-1');

            $parent.find('.video-play').addClass('d-none');
            $parent.find('.video-player').removeClass('d-none').addClass('d-block');
            $parent.find('.video-player iframe').attr('src', $link);
        });

        $(".scroll").niceScroll({
            cursorcolor: "#8DC53F",
            cursorwidth: "6px",
            cursorborderradius: "10px",
            rtlmode: true,
            scrollspeed: "20",
            horizrailenabled: true, // nicescroll can manage horizontal scroll
        });









        var $header_top = $('header');

        var $fixed = $('.fixed');
        // toggle menu responsive
        var menuStatus = true;
        $('header a.menu  ').on('click', function () {
            //ahmed
            if(menuStatus){
                $('body').addClass('mobile-menu-active');
                $(".mobile-menu").show();
                menuStatus = false;
            }else{
                $('body').removeClass('mobile-menu-active');
                $(".mobile-menu").hide();
                menuStatus = true;
            }});
        $(".mobile-menu li:not(.has-menu) a").on("click" , function(e){
            //Hide nav list when we click on ahmad
            menuStatus = true;
            $(".mobile-menu").hide();
            $('body').removeClass('mobile-menu-active');
        });

        $fixed.find('a.toggle-menu-contact').on('click', function() {
            $(this).parent().toggleClass('open-menu ');
            //hide('remove-menu').
        });







        $(' header nav .lm li a').click(function () {

            $(this).addClass('active').parent().siblings().find('a').removeClass('active');



        });


        $(window).scroll(function () {


            var scrolltobottom = $('.header-shadow');

            var scrolltobottom = $(window).scrollTop();
            if (scrolltobottom > 0) {
                $("header").addClass("active-header");
            }
            else {
                $("header").removeClass("active-header");
            }

            var scrollToTop = $('.scroll-to-top');
            if ($(window).scrollTop() >= 1000) {
                if (scrollToTop.is(':hidden')) {
                    scrollToTop.fadeIn(400);
                }}  else{

                scrollToTop.fadeOut(400);
            }

        });

        $('.scroll-to-top').click(function (e) {
            e.preventDefault();
            $('html ,body').animate({
                scrollTop:0
            },1000);


        });







        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());



        $(window).ready(function() {
            // Animate loader off screen
            $(".loader").fadeOut("slow");
        });


        $('.icon-show i.fa-eye').on('mouseover',function () {
            $(this).fadeOut();
            $(this).siblings('.input-show').fadeIn();
        });

        $(' .icon-show .input-show').on('mouseleave',function () {
            $(this).fadeOut();
            $(this).siblings('i.fa-eye').fadeIn();
        });



        $(' .icon-show i.fa-calendar-alt').on('mouseover',function () {

            $(this).fadeOut();
            $(this).siblings('.input-date').fadeIn();

        });
        $(' .icon-show .input-date').on('mouseleave',function () {

            $(this).fadeOut();
            $(this).siblings('i.fa-calendar-alt').fadeIn();

        });



        $(' .store .owl-carousel').owlCarousel({
            // loop:true,

            margin:20,
            responsiveClass:true,
            type:true,
            rtl:true,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                400:{
                    items:2,
                    nav:false
                },
                768:{
                    items:3,
                    nav:true
                },
                1200:{
                    items:4,
                    nav:true,
                    loop:false,

                }
            }

        });

        $("body").on("click" ,".orders .order:not(.active) a" , function(e){
            e.preventDefault();
            $('.content').removeClass("active");
            let target = $(this).data("target");
            $(target).addClass("active");

            $('.order').removeClass("active");
            $(this).parent().addClass("active");


        });


        // $('.stage a').click(function (e) {
        //     $('.stage1').siblings('.stage a div').removeClass('active');
        //     $('.stage1').addClass('active');
        //
        //
        // });


        $(".fa-search").click(function() {
            $(".togglesearch").toggle();
            $("input[type='text']").focus();
        });
    });


    var expanded = false;

    function showCheckboxes() {
        var checkboxes = document.getElementById("checkboxes");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;

        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }
    function showCheckboxes2() {
        var checkboxes = document.getElementById("checkboxes2");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;

        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }

    $(".menu-filter").on("click" , function(){
        if($(this).find("i").hasClass("fa-angle-right")){
            $(".filter-box").css("max-width" , "fit-content");
            $(".filter-box form").animate({
                width:0
            },400 , function(){
                $(".filter-box form").hide();
                $(".menu-filter").find("i").toggleClass("fa-angle-left fa-angle-right");
            });
        }else{
            $(".filter-box").css("max-width" , "fit-content");
            $(".filter-box form").show();
            $(".filter-box form").animate({
                width:"100%"
            },400 , function(){
                $(".menu-filter").find("i").toggleClass("fa-angle-left fa-angle-right");
            });
        }
    });

    $("a.close-menu").on("click" , function(){
        $(this).parent().slideUp();
    });
    var timeOut;
    var timeIn;

    $(".icon-scroll i.fa-angle-down").on("mousedown touchstart" , function(){
        timeOut = setInterval(function(){
            var scroll = $(".categories.scroll").scrollTop();
            $(".categories.scroll").scrollTop(scroll+20);
        }, 200);
    });

    $(".icon-scroll i.fa-angle-down").on("mouseup mouseleave touchend" , function(){
        clearInterval(timeOut);
    });


    $(".icon-scroll i.fa-angle-up").on("mousedown touchstart" , function(){
        timeIn = setInterval(function(){
            var scroll = $(".categories.scroll").scrollTop();
            $(".categories.scroll").scrollTop(scroll-20);
        }, 200);
    });

    $(".icon-scroll i.fa-angle-up").on("mouseup mouseleave touchend" , function(){
        clearInterval(timeIn);
    });

    $(".mobile-menu li.has-menu > a").on("click" , function(e){
        e.preventDefault();
        e.stopPropagation();
        $('.mobile-menu .menu-box').slideUp(400);
        var display = $(this).next('.menu-box').css('display');
        if(display == 'none'){
            $(this).next('.menu-box').slideDown(400);
        }else{
            $(this).next('.menu-box').slideUp(400);
        }

    });

    $(document).on( "click" , function (event) {
        var clickover = $(event.target);
        var _opened = $(".menu-container").hasClass("open-menu");
        if (_opened === true && !clickover.hasClass("toggle-menu")) {
            $(".toggle-menu").click();
        }
    });





</script>

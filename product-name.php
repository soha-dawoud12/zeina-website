<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> اسم المنتج </title>
    <?php include 'blocks/layouts/head-resources.php' ?>

    <style>
        #slideshow2_thumbs{
            display: flex;
            justify-content:space-between;;
            margin-top: 10px;
            margin-bottom: 10px;
            border-radius: 5px;

        }
        #slideshow2_thumbs  li{
            margin-left: 5px;
            margin-right: 5px;
        }

        #slideshow2_thumbs img{
            max-width: 94px;

            border-radius: 5px;
            margin: auto;
        }
        .desoslide-wrapper img{

            max-width: 100%;
            max-height: 520px;

        }
        .icon-direction{
            position: relative;
        }
        .icon-direction i{
            position: absolute;
            top: 50%;
            font-size: 20px;
            color: var(--primary);
            z-index: 2;
            background-color: #fff;
            padding: 6px 9px 5px 10px;
            border-radius: 50%;

            text-align: center;

        }
        .icon-direction i.fa-angle-left{


            left: 21px;
        }

        .icon-direction i.fa-angle-right{
            right: 21px;


        }



        @media (min-width: 992px) and (max-width:1200px) {
           
            #slideshow2_thumbs img{
                max-width: 77px;
                margin-right: 0;
                margin-left: 0;
                border-radius: 5px;
            }
        }

        @media (max-width: 768px) {
            .desoslide-wrapper img{

                /*max-width: 300px ;*/
                /*max-height: 300px;*/
                /*max-height: 520px;*/

            }
            #slideshow2_thumbs img{
                max-width: 66px;
                margin-right: 5px;
                margin-left: 5px;
                border-radius: 5px;
            }
        }

        @media (max-width: 480px) {
           
            #slideshow2_thumbs img{
                max-width: 50px;
                margin-right: 0;
                margin-left: 0;
                border-radius: 5px;
            }
        }






        .star{
            color:#FFE600;
            font-size: 2.0rem;
            padding: 0 .1rem; /* space out the stars */
        }
        .star::before{
            content: '\2606';    /* star outline */
            cursor: pointer;
        }
        .star.rated::before{
            /* the style for a selected star */
            content: '\2605';  /* filled star */
        }

        .stars{
            counter-reset: rateme 0;
            font-size: 2.0rem;
            font-weight: 900;
        }
        .star.rated{
            counter-increment: rateme 1;
        }
        .stars::after{
            content: counter(rateme) '/5';
        }
    </style>
</head>

<body class="header-fixed">
<?php include 'social.php' ?>

<div class="loader">
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>

</div>
            <?php include 'blocks/layouts/header.php'?>
            <?php include 'blocks/pages/mobile-menu.php'?>

<div id="store" class="block  product-name store h-100 mt-4  ">

    <div class="container">

       <div class="row mt-5 m-auto ">
           <div class="col-12 col-lg-6   ">


                   <div class="row">
                       <div class="icon-direction ">
                           <i class="fas fa-angle-left"></i>
                           <i class="fas fa-angle-right"></i>
                           <div id="slideshow2" class="col-lg-12">

                           </div>
                       </div>



                   <div class=" col-12 col-lg-12" >
                       <ul id="slideshow2_thumbs" class="desoslide-thumbs-horizontal list-inline text-center p-0">
                           <li>
                               <a href="assets/images/product.jpg">
                                   <img src="assets/images/product.jpg" class="img-fluid" alt="product">
                               </a>
                           </li>
                           <li>
                               <a href="assets/images/product.jpg">
                                   <img src="assets/images/product.jpg" class="img-fluid" alt="product">
                               </a>
                           </li>
                           <li>
                               <a href="assets/images/product.jpg">
                                   <img src="assets/images/product.jpg" class="img-fluid" alt="product">
                               </a>
                           </li>

                           <li>
                               <a href="assets/images/product.jpg">
                                   <img src="assets/images/product.jpg" class="img-fluid" alt="product">
                               </a>
                           </li>
                           <li>
                               <a href="assets/images/product.jpg">
                                   <img src="assets/images/product.jpg" class="img-fluid" alt="product">
                               </a>
                           </li>

                       </ul>
                       <ul id="slideshow2_thumbs" class="desoslide-thumbs-horizontal list-inline text-center p-0">
                           <li>
                               <a href="assets/images/product.jpg">
                                   <img src="assets/images/product.jpg" class="img-fluid" alt="product">
                               </a>
                           </li>
                           <li>
                               <a href="assets/images/product.jpg">
                                   <img src="assets/images/product.jpg" class="img-fluid" alt="product">
                               </a>
                           </li>
                           <li>
                               <a href="assets/images/product.jpg">
                                   <img src="assets/images/product.jpg" class="img-fluid" alt="product">
                               </a>
                           </li>
                           <li>
                               <a href="assets/images/product.jpg">
                                   <img src="assets/images/product.jpg" class="img-fluid" alt="product">
                               </a>

                           </li>
                           <li>
                               <a href="assets/images/product.jpg">
                                   <img src="assets/images/product.jpg" class="img-fluid" alt="product">
                               </a>
                           </li>

                       </ul>
<!--                       <a class="desoslide-link" target="_blank"><div class="desoSlide-controls-wrapper" style="width: 650px; left: 0px;"><a href="#prev"><span class="desoSlide-controls prev"></span></a><a href="#pause" style="display: none;"><span class="desoSlide-controls pause"></span></a><a href="#play"><span class="desoSlide-controls play"></span></a><a href="#next"><span class="desoSlide-controls next"></span></a></div></a>-->
                   </div>
               </div>



           </div>





           <div class="col-12 col-lg-6 ">

               <div class="blog-details product-details">
                   <div class="container">


                       <div class="row  container d-flex justify-content-between mb-2">
                           <div class="head-details">
                               <h3 class="font-weight-bold text-success mb-3">اسم المنتج</h3>
                           </div>

                           <div class="icon-show-2 row small-screen" style="padding: inherit">
                               <div class="inputs bg-white p-1 " >
                                   <span  class="text-primary" > 20 مشاهدة</span>
                               </div>
                               <i class="far fa-eye p-2  text-primary "></i>
                               <div class="inputs bg-white p-1  " >
                                   <span class="text-primary" >12/16/2020</span>
                               </div>
                               <i class="far fa-calendar-alt   p-2 text-primary"></i>


                           </div>
                       </div>
                       <p class="mb-4">
                           نص افتراضي نص افتراضي نص افتراضي نص افتراضينص افتراضي نص افتراضي نص افتراضي نص نص افتراضي نص افتراضي نص افتراضي نص افتراضينص افتراضي نص
                           نص افتراضي نص افتراضي نص افتراضي نص افتراضينص افتراضي نص افتراضي نص افتراضي نص نص افتراضي نص افتراضي نص افتراضي نص افتراضينص افتراضي نص

                       </p>


                        <div class="product-price d-flex">
                            <h3 class="text-primary font-weight-bold">USD $19.99 </h3>
                            <h6 class="mr-3 ml-3 "> <del>USD $51.98</del> </h6>
                        </div>

                       <div class="category mb-2">
                           <h4 class="mb-2"> التصنيف</h4>
                           <div class=" row ">
                              <div class=" col-md-8 d-flex mb-2 ">
                                 <div class="col p-0"> <span> تصنيف </span></div>
                                 <div class="col p-0 ml-1 mr-1"> <span> تصنيف </span></div>

                              </div>



                              <div class="col-md-8">
                                  <span> تصنيف </span>
                              </div>

                           </div>
                       </div>


                       <div class="row w-100 mb-2">
                           <div class="col-12 col-lg-6 mb-2  product-add">
                               <div class="input-group d-flex pl-3  pt-2 ">
                                   <button class="btn  add   " type="button" id="add"><i class="fas fa-plus"></i></button>

                                   <input type="text" class="form-control " id="1" maxlength="3" minlength="1" value="1" min="1">
                                   <div class="input-group-append" id="button-addon1">
                                       <button class="btn sub  " type="button" id="sub"><i class="fas fa-minus"></i></button>
                                   </div>

                               </div>
                           </div>
                           <div class="col-12 col-lg-6 d-lg-flex justify-content-lg-end p-lg-0 add-to-cart">
                               <a href="#">  <button class=" btn-outline-success  mt-1 mt-md-0  mb-1 mb-md-0"> أضف الى السلة</button></a>

                           </div>
                       </div>

                       <p class="mb-4">
                           نص افتراضي نص افتراضي نص افتراضي نص افتراضينص افتراضي نص افتراضي نص افتراضي نص نص افتراضي نص افتراضي نص افتراضي نص افتراضينص افتراضي نص
                           نص افتراضي نص افتراضي نص افتراضي نص افتراضينص افتراضي نص افتراضي نص افتراضي نص نص افتراضي نص افتراضي نص افتراضي نص افتراضينص افتراضي نص

                       </p>
                   </div>
               </div>


           </div>
        </div>

                <div class="rating">

                <div class="row">
                    <div class="col-2 h-100"></div>
               <div class="col-3 h-100">





               </div>
                    <div class="col h-100" style="border:1px solid var(--secondary); border-radius: 5px; background-color: #EEEEEE">
                        <div class="stars" data-rating="0">
                            <span class="star">&nbsp;</span>
                            <span class="star">&nbsp;</span>
                            <span class="star">&nbsp;</span>
                            <span class="star">&nbsp;</span>
                            <span class="star">&nbsp;</span>
                        </div>
                    </div>


                </div>
                </div>




        <div  class=" product h-100 wow bounceInDown " data-wow-duration="2s" data-wow-delay="50ms">
            <div class="container">
                <h3 class="text-success mb-4 mt-5 font-weight-bolder"> قد يعجيك أيضا</h3>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide col-12  col-md-6  col-lg-4 p-3 h-100">
                            <div class="col-auto col-md-12 p-0 pb-2">

                                <article class="entry-box-1 mb-4 bg-primary shadow-sm h-100">
                                    <div class="new-box">
                                        <div class="new font-weight-bold  bg-success text-white py-4  ">
                                            جديد
                                        </div>
                                        <a href="#" class="d-block">
                                            <img src="uploads/Ad1.jpg" class="img-fluid w-100" alt="اعلان.jpg">
                                        </a>
                                    </div>

                                    <div class="entry-body p-3 pb-1">

                                        <div class="row d-flex justify-content-between pr-3 pl-3">
                                            <div>
                                                <h3 class="title">عنوان الخبر</h3>
                                            </div>
                                            <div class="icon-show  d-flex">
                                                <i class="far fa-eye px-2"></i>
                                                <i class="far fa-calendar-alt px-2"></i>
                                                <div class="input-show bg-white p-1" style="border: 1px solid var(--success)">
                                                    <a href="" class="text-primary"> 20 مشاهدة</a>
                                                </div>
                                                <div class="input-date bg-white p-1" style="border: 1px solid var(--success)">
                                                    <a href="" class="text-primary">12/16/2020</a>
                                                </div>
                                            </div>

                                        </div>



                                        <p class="entry-title mb-2 ">
                                            نص افتراضي نص افتراضي نص افتراضي نصننصنصص
                                            نص افتراضي نص افتراضي نص افتراضي نصنصنصنص
                                            نةكمكم نص افتراضي نص افتراضي نص افتراضي نصنصنصنص
                                        </p>
                                        <div class="row d-flex justify-content-center">
                                            <div>
                                                <div class="col  product-add">
                                                    <div class="input-group d-flex pl-3  pt-2 ">
                                                        <button class="btn  add  " type="button" id="add"><i class="fas fa-plus"></i></button>
                                                        <input type="text" class="form-control " id="1" maxlength="3" minlength="1" value="1" min="1">

                                                        <div class="input-group-append" id="button-addon1">
                                                            <button class="btn sub  " type="button" id="sub"><i class="fas fa-minus"></i></button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col col-lg-6 w-100 my-auto  d-flex justify-content-end more ">
                                                <a href="product-name.php">  <button class=" btn-outline  mb-1 mb-md-0">شاهد المزيد</button></a>
                                            </div>
                                        </div>
                                    </div>

                                </article>
                            </div>

                            </div>
                        <div class="swiper-slide col-12  col-md-6  col-lg-4 p-3 h-100">
                            <div class="col-auto col-md-12 p-0 pb-2">

                                <article class="entry-box-1 mb-4 bg-primary shadow-sm h-100">
                                    <div class="new-box">
                                        <div class="new font-weight-bold  bg-success text-white py-4  ">
                                            جديد
                                        </div>
                                        <a href="#" class="d-block">
                                            <img src="uploads/Ad1.jpg" class="img-fluid w-100" alt="اعلان.jpg">
                                        </a>
                                    </div>

                                    <div class="entry-body p-3 pb-1">

                                        <div class="row d-flex justify-content-between pr-3 pl-3">
                                            <div>
                                                <h3 class="title" >عنوان الخبر</h3>
                                            </div>
                                            <div class="icon-show  d-flex">
                                                <i class="far fa-eye px-2"></i>
                                                <i class="far fa-calendar-alt px-2"></i>
                                                <div class="input-show bg-white p-1" style="border: 1px solid var(--success)">
                                                    <a href="" class="text-primary"> 20 مشاهدة</a>
                                                </div>
                                                <div class="input-date bg-white p-1" style="border: 1px solid var(--success)">
                                                    <a href="" class="text-primary">12/16/2020</a>
                                                </div>
                                            </div>

                                        </div>



                                        <p class="entry-title mb-2 ">
                                            نص افتراضي نص افتراضي نص افتراضي نصننصنصص
                                            نص افتراضي نص افتراضي نص افتراضي نصنصنصنص
                                            نةكمكم نص افتراضي نص افتراضي نص افتراضي نصنصنصنص
                                        </p>
                                        <div class="row d-flex justify-content-center">
                                            <div>
                                                <div class="col  product-add">
                                                    <div class="input-group d-flex pl-3  pt-2 ">
                                                        <button class="btn  add  " type="button" id="add"><i class="fas fa-plus"></i></button>
                                                        <input type="text" class="form-control " id="1" maxlength="3" minlength="1" value="1" min="1">

                                                        <div class="input-group-append" id="button-addon1">
                                                            <button class="btn sub  " type="button" id="sub"><i class="fas fa-minus"></i></button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col col-lg-6 w-100 my-auto  d-flex justify-content-end more ">
                                                <button class=" btn-outline  mb-1 mb-md-0">شاهد المزيد</button>
                                            </div>
                                        </div>
                                    </div>

                                </article>
                            </div>

                        </div>
                        <div class="swiper-slide col-12  col-md-6  col-lg-4 p-3 h-100">
                            <div class="col-auto col-md-12 p-0 pb-2">

                                <article class="entry-box-1 mb-4 bg-primary shadow-sm h-100">
                                    <div class="new-box">
                                        <div class="new font-weight-bold  bg-success text-white py-4  ">
                                            جديد
                                        </div>
                                        <a href="#" class="d-block">
                                            <img src="uploads/Ad1.jpg" class="img-fluid w-100" alt="اعلان.jpg">
                                        </a>
                                    </div>

                                    <div class="entry-body p-3 pb-1">

                                        <div class="row d-flex justify-content-between pr-3 pl-3">
                                            <div>
                                                <h3 class="title" >عنوان الخبر</h3>
                                            </div>
                                            <div class="icon-show  d-flex">
                                                <i class="far fa-eye px-2"></i>
                                                <i class="far fa-calendar-alt px-2"></i>
                                                <div class="input-show bg-white p-1" style="border: 1px solid var(--success)">
                                                    <a href="" class="text-primary"> 20 مشاهدة</a>
                                                </div>
                                                <div class="input-date bg-white p-1" style="border: 1px solid var(--success)">
                                                    <a href="" class="text-primary">12/16/2020</a>
                                                </div>
                                            </div>

                                        </div>



                                        <p class="entry-title mb-2 ">
                                            نص افتراضي نص افتراضي نص افتراضي نصننصنصص
                                            نص افتراضي نص افتراضي نص افتراضي نصنصنصنص
                                            نةكمكم نص افتراضي نص افتراضي نص افتراضي نصنصنصنص
                                        </p>
                                        <div class="row d-flex justify-content-center">
                                            <div>
                                                <div class="col  product-add">
                                                    <div class="input-group d-flex pl-3  pt-2 ">
                                                        <button class="btn  add  " type="button" id="add"><i class="fas fa-plus"></i></button>
                                                        <input type="text" class="form-control " id="1" maxlength="3" minlength="1" value="1" min="1">

                                                        <div class="input-group-append" id="button-addon1">
                                                            <button class="btn sub  " type="button" id="sub"><i class="fas fa-minus"></i></button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col col-lg-6 w-100 my-auto  d-flex justify-content-end more ">
                                                <button class=" btn-outline  mb-1 mb-md-0">شاهد المزيد</button>
                                            </div>
                                        </div>
                                    </div>

                                </article>
                            </div>

                        </div>
                            </div>

                    <div class="swiper-button-next shadow-none"><i class="fas fa-angle-left "></i></div>


                </div>
<!--                <div class="row pt-4 m-auto ">-->





<!--                </div>-->
            </div>

        </div>


    </div>

</div>






            <?php include 'blocks/layouts/footer.php'?>

            <?php include 'blocks/layouts/foot-resources.php' ?>

<script>
    $(function () {

            $('#slideshow2').desoSlide({
                thumbs: $('#slideshow2_thumbs li > a'),
                thumbEvent: 'mouseover',
                first: 1,
                overlay:'none',
                controls: {
                    show: false,             // Shows the player controls (prev/pause/play/next)
                    keys: true             // Able to control by using the keyboard shortcuts (left/space/right)
                },
                auto:{
                    // start:true,
                    load:true,
                },
                caption: false,
                // interval: 10,
                imageClass:'img-responsive',
                effect: {
                    provider:       'animate',        // Effect provider ('animate', 'magic')
                    name:           'fade'            // Transition effect // 'animate': 'fade', 'flipX', 'flipY', 'fun', 'light', 'roll', 'rotate', 'rotateBig', 'sideFade', 'sideFadeBig', 'slide', 'random'
                }
            });

        $(".icon-direction i.fa-angle-left").on("click" ,function(){
            $("#slideshow2").desoSlide('goPrev');
        });

        $(".icon-direction i.fa-angle-right").on("click" ,function(){
            $("#slideshow2").desoSlide('goNext');
        });

    });




    //initial setup
    document.addEventListener('DOMContentLoaded', function(){
        let stars = document.querySelectorAll('.star');
        stars.forEach(function(star){
            star.addEventListener('click', setRating);
        });

        let rating = parseInt(document.querySelector('.stars').getAttribute('data-rating'));
        let target = stars[rating - 1];
        target.dispatchEvent(new MouseEvent('click'));
    });

    function setRating(ev){
        let span = ev.currentTarget;
        let stars = document.querySelectorAll('.star');
        let match = false;
        let num = 0;
        stars.forEach(function(star, index){
            if(match){
                star.classList.remove('rated');
            }else{
                star.classList.add('rated');
            }
            //are we currently looking at the span that was clicked
            if(star === span){
                match = true;
                num = index + 1;
            }
        });
        document.querySelector('.stars').setAttribute('data-rating', num);
    }

</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>شاهد المزيد</title>
    <?php include 'blocks/layouts/head-resources.php' ?>
</head>

<body class="header-fixed">
<?php include 'social.php' ?>

<div class="loader">
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>

</div>
            <?php include 'blocks/layouts/header.php'?>
            <?php include 'blocks/pages/mobile-menu.php'?>

<div id="store" class="block  store h-100 mt-4  ">

    <div class="container">

       <div class="row  shadow-sm">
           <div class="col-12 col-lg-2 filter pt-4 bg-secondary shadow-sm filter-box">
               <div class=" menu-filter  ">
                   <i class="fas fa-angle-right">  </i>
               </div>
               <h4 class="mt-2 mb-2">
                   فلتر
               </h4>

               <form class="mx-auto">
                   <div class="form-group ">
                       <label class="" for="inlineFormInput">الاسم</label>
                       <input type="text" class="form-control " placeholder=" أدخل اسم المنتج">
                       <!--                                <small id="emailHelp" class="form-text text-primary">We'll never share your email with anyone else.</small>-->
                   </div>
                   <div class="form-group input-group-lg">
                       <label class="" for="inlineFormInput">السعر</label>

                       <input type="text" class="form-control" placeholder=" أدخل سعر المنتج">
                   </div>

                   <div class="form-group input-group-lg">
                       <label class="" for="inlineFormInput">الأصناف</label>
                   <div class="multiselect">
                       <div class="selectBox" onclick="showCheckboxes()">
                           <select>
                               <option>اختر الصنف</option>
                           </select>
                           <div class="overSelect"></div>
                       </div>
                       <div id="checkboxes" class="labels">
                           <label for="one">
                               <input type="radio" name="category" id="one" /> الألعاب الرمزية   </label>
                           <label for="two">
                               <input type="radio" name="category" id="two" />ألعاب الحمى والتخيل</label>
                           <label for="three">
                               <input type="radio" name="category" id="three" />الألعاب الإداركية والتعليمية</label>
                           <label for="four">
                               <input type="radio" name="category" id="four" />ألعاب التمرين والحركة</label>
                       </div>
                   </div>
                   </div>

                   <div class="form-group input-group-lg bg-secondary">
                       <label class="" for="inlineFormInput">الترتيب</label>
                       <div class="multiselect">
                           <div class="selectBox" onclick="showCheckboxes2()">
                               <select>
                                   <option>الترتيب الافتراضي </option>
                               </select>
                               <div class="overSelect"></div>
                           </div>
                           <div id="checkboxes2"  class="labels">
                               <label for="one2">
                                   <input type="radio" name="order" id="one2" />الترتيب الافتراضي</label>
                               <label for="two2">
                                   <input type="radio" name="order" id="two2" />ترتيب حسب الشهرة</label>
                               <label for="three2">
                                   <input type="radio" name="order" id="three2" />ترتيب حسب الأحدث</label>
                               <label for="four2">
                                   <input type="radio" name="order" id="four2" />ترتيب حسب:الأدنى سعرا</label>
                               <label for="five2">
                                   <input type="radio" name="order" id="five2" />ترتيب حسب:الأعلى سعرا </label>
                           </div>
                       </div>
                   </div>




                   <div class="search">
                       <a href="store-2-search.php">
                           <button type="submit" class="  w-100 mt-3 mt-md-0  mb-1 mb-md-0">
                               بحث
                           </button></a>
                   </div>
               </form>




           </div>





















           <div class="col-12 col-lg-10">



            <div class="swiper-container">
                <div class="swiper-wrapper mb-4">
                    <div class="swiper-slide w-100" >
                        <div class="container">


                            <div class="row d-flex align-items-center">

                                <div class="home-img  col-12 col-lg-7 mb-3 ">
                                    <img src="./assets/images/slide2.png" alt="zeina-home-img"  title="zeina" class="img-fluid ">
                                </div>

                                <div class="col-12 col-lg-5 mb-5 ">

                                    <h2 class="product-name  text-primary pb-2 mb-2" >اسم المنتج</h2>
                                    <hr class="product-name " >
                                    <h3 class="text-success font-weight-bolder d-flex justify-content-center">20$</h3>


                                </div>

                                <div class="row">
                                    <div class="offset-lg-1"></div>
                                    <div class="col-12 col-lg-6 ">
                                        <p class="pd-home">نص افتراضي نص افتراضي نص افتراضي نص افتراضينص افتراضي نص افتراضي نص افتراضي نص افتراضي

                                            نص افتراضي نص افتراضي نص افتراضي نص افتراضينص افتراضي نص افتراضي نص افتراضي نص افتراضي
                                        </p>
                                    </div>
                                </div>

                                <div class="row w-100">
                                    <div class="offset-lg-1"></div>
                                    <div class="col-12 col-lg-6   product-add">
                                        <div class="input-group d-flex pl-3  pt-2 ">
                                            <button class="btn  add  " type="button" id="add"><i class="fas fa-plus"></i></button>

                                            <input type="text" class="form-control " id="1" maxlength="3" minlength="1" value="1" min="1">
                                            <div class="input-group-append" id="button-addon1">
                                                <button class="btn sub  " type="button" id="sub"><i class="fas fa-minus"></i></button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5 m-auto">
                                        <a href="#">  <button class=" btn-outline bg-primary text-white mt-3 mt-md-0  mb-1 mb-md-0" > أضف الى السلة</button></a>

                                    </div>
                                </div>




                            </div>



                        </div>
                    </div>
                    <div class="swiper-slide w-100" >
                        <div class="container">


                            <div class="row d-flex align-items-center">

                                <div class="home-img  col-12 col-lg-7 mb-3 ">
                                    <img src="./assets/images/slide1.png" alt="zeina-home-img"  title="zeina" class="img-fluid ">
                                </div>

                                <div class="col-12 col-lg-5 mb-5 ">

                                    <h2 class="product-name  text-primary pb-2 mb-2" >اسم المنتج</h2>
                                    <hr class="product-name " >
                                    <h3 class="text-success font-weight-bolder d-flex justify-content-center">20$</h3>


                                </div>

                                <div class="row">
                                    <div class="offset-lg-1"></div>
                                    <div class="col-12 col-lg-6 ">
                                        <p class="pd-home">نص افتراضي نص افتراضي نص افتراضي نص افتراضينص افتراضي نص افتراضي نص افتراضي نص افتراضي

                                            نص افتراضي نص افتراضي نص افتراضي نص افتراضينص افتراضي نص افتراضي نص افتراضي نص افتراضي
                                        </p>
                                    </div>
                                </div>

                                <div class="row w-100">
                                    <div class="offset-lg-1"></div>
                                    <div class="col-12 col-lg-6   product-add">
                                        <div class="input-group d-flex pl-3  pt-2 ">
                                            <button class="btn  add  " type="button" id="add"><i class="fas fa-plus"></i></button>

                                            <input type="text" class="form-control " id="1" maxlength="3" minlength="1" value="1" min="1">
                                            <div class="input-group-append" id="button-addon1">
                                                <button class="btn sub  " type="button" id="sub"><i class="fas fa-minus"></i></button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5 m-auto">
                                        <a href="#">  <button class=" btn-outline bg-primary text-white mt-3 mt-md-0  mb-1 mb-md-0" > أضف الى السلة</button></a>

                                    </div>
                                </div>




                            </div>



                        </div>
                    </div>
                    <div class="swiper-slide w-100" >
                        <div class="container">


                            <div class="row d-flex align-items-center">

                                <div class="home-img  col-12 col-lg-7 mb-3 ">
                                    <img src="./assets/images/slide2.png" alt="zeina-home-img"  title="zeina" class="img-fluid ">
                                </div>

                                <div class="col-12 col-lg-5 mb-5 ">

                                    <h2 class="product-name  text-primary pb-2 mb-2" >اسم المنتج</h2>
                                    <hr class="product-name " >
                                    <h3 class="text-success font-weight-bolder d-flex justify-content-center">20$</h3>


                                </div>

                                <div class="row">
                                    <div class="offset-lg-1"></div>
                                    <div class="col-12 col-lg-6 ">
                                        <p class="pd-home">نص افتراضي نص افتراضي نص افتراضي نص افتراضينص افتراضي نص افتراضي نص افتراضي نص افتراضي

                                            نص افتراضي نص افتراضي نص افتراضي نص افتراضينص افتراضي نص افتراضي نص افتراضي نص افتراضي
                                        </p>
                                    </div>
                                </div>

                                <div class="row w-100">
                                    <div class="offset-lg-1"></div>
                                    <div class="col-12 col-lg-6   product-add">
                                        <div class="input-group d-flex pl-3  pt-2 ">
                                            <button class="btn  add  " type="button" id="add"><i class="fas fa-plus"></i></button>

                                            <input type="text" class="form-control " id="1" maxlength="3" minlength="1" value="1" min="1">
                                            <div class="input-group-append" id="button-addon1">
                                                <button class="btn sub  " type="button" id="sub"><i class="fas fa-minus"></i></button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5 m-auto">
                                        <a href="#">  <button class=" btn-outline bg-primary text-white mt-3 mt-md-0  mb-1 mb-md-0" > أضف الى السلة</button></a>

                                    </div>
                                </div>




                            </div>



                        </div>
                    </div>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination d-flex justify-content-center  swiper-pagination-clickable mb-4"></div>
                <div class="swiper-button-next d-none d-lg-block "><i class="fas fa-angle-left "></i></div>
                <div class="swiper-button-prev  d-none d-lg-block"><i class="fas fa-angle-right"></i></div>
            </div>
           </div>
        </div>




    <div  class="block product h-100 mt-xl-4 wow bounceInDown " data-wow-duration="2s" data-wow-delay="50ms">
        <div class="container">


            <div class="row pt-4 m-auto ">
                <div class="col-auto col-md-6 col-lg-4 mb-4">

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
                <div class="col-auto col-md-6 col-lg-4 mb-4">

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
                <div class="col-auto col-md-6 col-lg-4 mb-4">

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

    </div>

            <div class="types">
                <h2 class="text-success text-center mb-3">
                    الأصناف
                </h2>
                <div class="container">
                    <div class="owl-carousel owl-theme ">
                        <div class="item">
                            <div class="type-content">
                                <a href="#">
                                    <img src="assets/images/type.jpg" class="img-fluid" alt="">
                                    <h4>الألعاب الرمزية</h4>
                                </a>
                            </div>

                        </div>
                        <div class="item">
                            <div class="type-content">
                                <a href="#">
                                    <img src="assets/images/type2.jpg" class="img-fluid" alt="">
                                    <h4>ألعاب الحمى والتخيل</h4>
                                </a>
                            </div>

                        </div>
                        <div class="item">
                            <div class="type-content">
                                <a href="#">
                                    <img src="assets/images/type0.jpg" class="img-fluid" alt="">
                                    <h4>الألعاب الإدراكية التعليمية</h4>
                                </a>
                            </div>

                        </div>
                        <div class="item">
                            <div class="type-content">
                                <a href="#">
                                    <img src="assets/images/type4.jpg" class="img-fluid" alt="">
                                    <h4>ألعاب التمرين والحركة</h4>
                                </a>
                            </div>

                        </div>
                        <div class="item">
                            <div class="type-content">
                                <a href="#">
                                    <img src="assets/images/type4.jpg" class="img-fluid" alt="">
                                    <h4>الألعاب الرمزية</h4>
                                </a>
                            </div>

                        </div>
                        <div class="item">
                            <div class="type-content">
                                <a href="#">
                                    <img src="assets/images/type.jpg" class="img-fluid" alt="">
                                    <h4>ألعاب الحمى والتخيل</h4>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        <div  class=" product h-100 wow bounceInDown " data-wow-duration="2s" data-wow-delay="50ms">
            <div class="container">


                <div class="row pt-4 m-auto ">
                    <div class="col-auto col-md-6 col-lg-4 mb-4">

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
                    <div class="col-auto col-md-6 col-lg-4 mb-4">

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
                                        <a href="product-name.php"><button class=" btn-outline  mb-1 mb-md-0">شاهد المزيد</button></a>
                                    </div>
                                </div>
                            </div>

                        </article>
                    </div>
                    <div class="col-auto col-md-6 col-lg-4 mb-4">

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

        </div>


    </div>

</div>







            <?php include 'blocks/layouts/footer.php'?>

            <?php include 'blocks/layouts/foot-resources.php' ?>
</body>
</html>
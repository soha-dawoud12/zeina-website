<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>السلة</title>
    <?php include 'blocks/layouts/head-resources.php' ?>
</head>

<body class="header-fixed">
<?php include 'social.php' ?>

<div class="loader">
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>

</div>
            <?php include 'blocks/layouts/header.php'?>
            <?php include 'blocks/pages/mobile-menu.php'?>

        <div id="cart" class="block  orders   cart h-100 ">
                <div class="container">


                    <nav class="navbar navbar-light notes bg-success mb-5 " >
                        <form class="form-inline col-12 col-lg-6 p-0">
                            <input class="form-control col-8 col-lg-6 mb-2 mb-lg-0 " type="text" placeholder="رمز القسيمة" >
                            <a href="#">
                                <button type="submit" class="btn-outline-light col-12  mr-2 ml-2   mt-md-0  mb-1 mb-md-0">
                                   فحص
                                </button>
                            </a>
                        </form>
                        <form class="form-inline m-auto m-lg-0 ">
                         <div class="text-white font-weight-bold ml-2 mr-2">

                                 إجمالي السعر :

                             <span>
                                500$
                            </span>
                         </div>


                            <a href="cart-End-request.php">
                                <button type="submit" class="btn-outline-light col-12   mt-3 mt-md-0  mb-1 mb-md-0">
                                    إنهاء الطلب
                                </button></a>
                        </form>
                    </nav>




                    <div  class="block product h-100  wow bounceInDown " data-wow-duration="2s" data-wow-delay="50ms">
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
                                                        <div class="input-group d-flex   pt-2 ">
                                                            <button class="btn  add  " type="button" id="add"><i class="fas fa-plus"></i></button>
                                                            <input type="text" class="form-control " id="1" maxlength="3" minlength="1" value="1" min="1">

                                                            <div class="input-group-append" id="button-addon1">
                                                                <button class="btn sub  " type="button" id="sub"><i class="fas fa-minus"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div  class="bg-success  m-1 text-white p-2 price" style="border-radius: 40%">
                                                    500%
                                                </div>

                                                <div class=" m-auto p-0  d-flex justify-content-center col-10   delete col-xl-4 ">
                                                    <button class=" btn-outline-light  mb-1 mb-md-0" > حزف</button>
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
                                                        <div class="input-group d-flex   pt-2 ">
                                                            <button class="btn  add  " type="button" id="add"><i class="fas fa-plus"></i></button>
                                                            <input type="text" class="form-control " id="1" maxlength="3" minlength="1" value="1" min="1">

                                                            <div class="input-group-append" id="button-addon1">
                                                                <button class="btn sub  " type="button" id="sub"><i class="fas fa-minus"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div  class="bg-success  m-1 text-white p-2 price" style="border-radius: 40%">
                                                    500%
                                                </div>

                                                <div class=" m-auto p-0  d-flex justify-content-center col-10   delete col-xl-4 ">
                                                    <button class=" btn-outline-light  mb-1 mb-md-0" > حزف</button>
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
                                                        <div class="input-group d-flex   pt-2 ">
                                                            <button class="btn  add  " type="button" id="add"><i class="fas fa-plus"></i></button>
                                                            <input type="text" class="form-control " id="1" maxlength="3" minlength="1" value="1" min="1">

                                                            <div class="input-group-append" id="button-addon1">
                                                                <button class="btn sub  " type="button" id="sub"><i class="fas fa-minus"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div  class="bg-success  m-1 text-white p-2 price" style="border-radius: 40%">
                                                    500%
                                                </div>

                                                <div class=" m-auto p-0  d-flex justify-content-center col-10   delete col-xl-4 ">
                                                    <button class=" btn-outline-light  mb-1 mb-md-0" > حزف</button>
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
                                                        <div class="input-group d-flex   pt-2 ">
                                                            <button class="btn  add  " type="button" id="add"><i class="fas fa-plus"></i></button>
                                                            <input type="text" class="form-control " id="1" maxlength="3" minlength="1" value="1" min="1">

                                                            <div class="input-group-append" id="button-addon1">
                                                                <button class="btn sub  " type="button" id="sub"><i class="fas fa-minus"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div  class="bg-success  m-1 text-white p-2 price" style="border-radius: 40%">
                                                    500%
                                                </div>

                                                <div class=" m-auto p-0  d-flex justify-content-center col-10   delete col-xl-4 ">
                                                    <button class=" btn-outline-light  mb-1 mb-md-0" > حزف</button>
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
                                                        <div class="input-group d-flex   pt-2 ">
                                                            <button class="btn  add  " type="button" id="add"><i class="fas fa-plus"></i></button>
                                                            <input type="text" class="form-control " id="1" maxlength="3" minlength="1" value="1" min="1">

                                                            <div class="input-group-append" id="button-addon1">
                                                                <button class="btn sub  " type="button" id="sub"><i class="fas fa-minus"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div  class="bg-success  m-1 text-white p-2 price" style="border-radius: 40%">
                                                    500%
                                                </div>

                                                <div class=" m-auto p-0  d-flex justify-content-center col-10   delete col-xl-4 ">
                                                    <button class=" btn-outline-light  mb-1 mb-md-0" > حزف</button>
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
                                                        <div class="input-group d-flex   pt-2 ">
                                                            <button class="btn  add  " type="button" id="add"><i class="fas fa-plus"></i></button>
                                                            <input type="text" class="form-control " id="1" maxlength="3" minlength="1" value="1" min="1">

                                                            <div class="input-group-append" id="button-addon1">
                                                                <button class="btn sub  " type="button" id="sub"><i class="fas fa-minus"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div  class="bg-success  m-1 text-white p-2 price" style="border-radius: 40%">
                                                    500%
                                                </div>

                                                <div class=" m-auto p-0  d-flex justify-content-center col-10   delete col-xl-4 ">
                                                    <button class=" btn-outline-light  mb-1 mb-md-0" > حزف</button>
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
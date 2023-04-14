<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>الطلبات</title>
    <?php include 'blocks/layouts/head-resources.php' ?>
</head>

<body class="header-fixed">
<?php include 'social.php' ?>

<div class="loader">
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>

</div>
            <?php include 'blocks/layouts/header.php'?>
            <?php include 'blocks/pages/mobile-menu.php'?>

        <div id="store" class="block  orders  h-100 mt-xl-4">
                <div class="container">


                    <nav class="navbar navbar-light notes bg-success mb-5 " >
                        <form class="form-inline col-12 col-lg-8 p-0">
                            <input class="form-control col-12 col-lg-8 mb-2 mb-lg-0 " type="text" placeholder="ملاحظاتك" >

                        </form>
                        <form class="form-inline m-auto m-lg-0 ">

                            <a href="#">
                                <button type="submit" class="btn-outline-light   mt-3 mt-md-0  mb-1 mb-md-0">
                                 تقييم
                                </button></a>
                        </form>
                    </nav>





                    <div  class="  tabel-orders mb-4   text-center table-responsive" >

                        <div class="stage d-flex justify-content-center mt-1 mb-5">
                            <a href="orders-Billing-address-icon-stage.php"  >
                                <div class="stage1  " >
                                    <img src="assets/images/engineering.png"  class="img-fluid" alt="">

                                </div>
                                <h4 class="mt-2">مرحلة التجهيز</h4>
                            </a>
                            <a href="orders-Billing-address-icon-stage2.php">
                                <div class="stage1  "  >
                                    <img src="assets/images/process.png"  class="img-fluid" alt="">
                                </div>
                                <h4 class="mt-2">مرحلة التوصيل</h4>
                            </a>
                            <a href="orders-Billing-address-icon-stage3.php">
                                <div class="stage1 active" >
                                    <img src="assets/images/last.png"  class="img-fluid" alt="">
                                </div>
                                <h4 class="mt-2">مرحلة التسليم</h4>
                            </a>
                        </div>




                        <table class="table pt-5 ">
                            <thead class="bg-primary text-white mb-2 table-bordered" style="border: 1px solid var(--primary)">
                            <tr>
                                <th scope="col">المنتج</th>
                                <th scope="col">السعر </th>

                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <th scope="row">أدوات النجار (حرجاية) × 1</th>

                                <th scope="row">30$</th>
                            </tr>
                            <tr>
                                <th scope="row">أدوات النجار (حرجاية) × 1</th>

                                <th scope="row">30$</th>
                            </tr>
                            <tr>
                                <th scope="row">أدوات النجار (حرجاية) × 1</th>

                                <th scope="row">30$</th>
                            </tr>


                            <tr>
                                <th scope="row " class="bg-primary text-white">المجموع</th>
                                <th scope="row" >90$</th>
                            </tr>

                            <tr>
                                <th scope="row" class="bg-primary text-white"> وسيلة الدفع</th>
                                <th scope="row">paypal</th>
                            </tr>

                            <tr>
                                <th scope="row" class="bg-primary text-white">الإجمالي </th>
                                <th scope="row">30$</th
                            </tr>

                            </tbody>
                        </table>

                        <div class=" mt-4 mb-4  billing-address d-flex  flex-column  align-items-start  ">

                            <h3 class="text-success mb-3 ">
                                عنوان الفاتورة
                            </h3>
                            <div class="col-8 text-right p-2 " style="border: 2px solid #95999c; border-radius: 4px">
                                <p>
                                    Hfhjdrjd R
                                    <br>
                                    Fsertdyuj
                                    <br>
                                    Fgsdfggvxcvx
                                    <br>
                                    Xbxcbxcbx
                                    <br>
                                    الأراضي الفلسطينية
                                    <br>
                                    0597731101
                                    <br>
                                    Sammeer12500@Gmail.Com
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

                </div>




            <?php include 'blocks/layouts/footer.php'?>

            <?php include 'blocks/layouts/foot-resources.php' ?>
</body>
</html>
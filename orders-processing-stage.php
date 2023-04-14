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

        <div id="store" class="block  orders  h-100 mt-xl-4 wow bounceInDown " data-wow-duration="2s" data-wow-delay="50ms">
                <div class="container">


                    <nav class="navbar navbar-light notes bg-success mb-5 " >
                        <form class="form-inline col-12 col-lg-8 p-0">
                            <input class="form-control col-12 col-lg-8 mb-2 mb-lg-0 " type="text" placeholder="ملاحظات" >

                        </form>
                        <form class="form-inline m-auto m-lg-0 ">

                            <a href="#">
                                <button type="submit" class="btn-outline-light   mt-3 mt-md-0  mb-1 mb-md-0">
                                   تقييم
                                </button></a>
                        </form>
                    </nav>


                    <div  class="  tabel-orders mb-4   text-center table-responsive" >

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



                    <div class="row   order-close m-auto text-center d-flex  align-items-center justify-content-between">
                        <div class=" col-12 col-lg-8 font-weight-bolder mb-md-2" >
                            الطلب ملغي ويمكنك طلبه من جديد
                        </div>
                        <div class=" col-12 col-lg-4 d-flex justify-content-center ">
                            <form class="form-inline ">

                                <a href="store-4-orders.php" class="w-100 ">
                                    <button type="submit" class="   mt-3 mt-md-0  mb-1 mb-md-0">
                                       طلب من جديد
                                    </button></a>
                            </form>
                        </div>

                    </div>
                    </div>
                </div>

                </div>




            <?php include 'blocks/layouts/footer.php'?>

            <?php include 'blocks/layouts/foot-resources.php' ?>
</body>
</html>
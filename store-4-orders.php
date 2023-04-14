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

            <div id="store" class="block  orders  h-100 mt-xl-4 wow bounceInDown " data-wow-duration="2s" data-wow-delay="50ms">
                <div class="container">

                    <div class="row d-flex justify-content-center mb-4">
                        <div class=" col-11 col-md-4 col-lg-3 order shadow-sm p-3  m-2 active">
                            <a href="#" data-target="#order1">
                            <div class=" row d-flex  align-items-center">
                                <div class="col-3 col-md-4 col-lg-5">
                                    <img src="assets/images/order1-min.png"  class="img-fluid " alt="">
                                </div>
                                <div class="col">
                                    <h4 class="font-weight-bolder mb-lg-4" >12</h4>
                                    <h6> الطلبات الملغية</h6>

                                </div>
                            </div>
                            </a>
                        </div>

                        <div class=" col-11 col-md-4 col-lg-3 order shadow-sm p-3  m-2">
                            <a href="#" data-target="#order2" >
                            <div class=" row d-flex  align-items-center">

                                <div class="col-3 col-md-4 col-lg-5">
                                    <img src="assets/images/order2-min.png"  class="img-fluid " alt="">
                                </div>
                                <div class="col">
                                    <h4 class="font-weight-bolder mb-lg-4" >12</h4>
                                    <h6> الطلبات الموصلة</h6>

                                </div>

                            </div>
                            </a>
                        </div>
                        <div class=" col-11 col-md-4 col-lg-3 order shadow-sm p-3  m-2">
                            <a href="#"  data-target="#order3">
                            <div class=" row d-flex  align-items-center">
                                <div class="col-3 col-md-4 col-lg-5">
                                    <img src="assets/images/order3-min.png"  class="img-fluid " alt="">
                                </div>
                                <div class="col">
                                    <h4 class="font-weight-bolder mb-lg-4" >12</h4>
                                    <h6>الطلبات التي تحتاج توصيل</h6>

                                </div>
                            </div>
                            </a>
                        </div>



                    </div>


                    <div  id="order1"  class="  content active tabel-orders mb-4 m-auto text-center table-responsive" >

                         <table class="table ">
                        <thead class="bg-primary text-white mb-2 table-bordered" style="border: 1px solid var(--primary)">
                        <tr>
                            <th scope="col">الطلب</th>
                            <th scope="col">التاريخ</th>
                            <th scope="col">الحالة</th>
                            <th scope="col">الإجمالي </th>
                            <th scope="col">الاجراءات</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <th scope="row">#6506</th>
                            <td>7 أكتوبر، 2020</td>
                            <td>ملغي</td>
                            <td>$13.50 لعنصر واحد</td>
                            <td><a href="orders-processing-stage.php">  <span class="bg-success text-white pr-2 pl-2" style="border-radius: 5px">عرض</span> </a></td>
                        </tr>
                        <tr>
                            <th scope="row">#6506</th>
                            <td>7 أكتوبر، 2020</td>
                            <td>ملغي</td>
                            <td>$13.50 لعنصر واحد</td>
                            <td><a href="orders-processing-stage.php">  <span class="bg-success text-white pr-2 pl-2" style="border-radius: 5px">عرض</span> </a></td>
                        </tr>
                        <tr>
                            <th scope="row">#6506</th>
                            <td>7 أكتوبر، 2020</td>
                            <td>ملغي</td>
                            <td>$13.50 لعنصر واحد</td>
                            <td><a href="orders-processing-stage.php">  <span class="bg-success text-white pr-2 pl-2" style="border-radius: 5px">عرض</span> </a></td>
                        </tr>
                        </tbody>
                    </table>

                     </div>

                     <div  id="order2" class="  content  tabel-orders mb-4 m-auto text-center table-responsive" >

                            <table class="table ">
                                <thead class="bg-primary text-white mb-2 table-bordered" style="border: 1px solid var(--primary)">
                                <tr>
                                    <th scope="col">الطلب</th>
                                    <th scope="col">التاريخ</th>
                                    <th scope="col">الحالة</th>
                                    <th scope="col">الإجمالي </th>
                                    <th scope="col">الاجراءات</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <th scope="row">#6506</th>
                                    <td>7 أكتوبر، 2020</td>
                                    <td>موصل</td>
                                    <td>$13.50 لعنصر واحد</td>
                                    <td><a href="orders-Billing-address.php">  <span class="bg-success text-white pr-2 pl-2" style="border-radius: 5px">عرض</span> </a></td>
                                </tr>
                                <tr>
                                    <th scope="row">#6506</th>
                                    <td>7 أكتوبر، 2020</td>
                                    <td>موصل</td>
                                    <td>$13.50 لعنصر واحد</td>
                                    <td><a href="orders-Billing-address.php">  <span class="bg-success text-white pr-2 pl-2" style="border-radius: 5px">عرض</span> </a></td>
                                </tr>
                                <tr>
                                    <th scope="row">#6506</th>
                                    <td>7 أكتوبر، 2020</td>
                                    <td>موصل</td>
                                    <td>$13.50 لعنصر واحد</td>
                                    <td><a href="orders-Billing-address.php">  <span class="bg-success text-white pr-2 pl-2" style="border-radius: 5px">عرض</span> </a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    <div  id="order3" class="  content  tabel-orders mb-4 m-auto text-center table-responsive" >

                        <table class="table ">
                            <thead class="bg-primary text-white mb-2 table-bordered" style="border: 1px solid var(--primary)">
                            <tr>
                                <th scope="col">الطلب</th>
                                <th scope="col">التاريخ</th>
                                <th scope="col">الحالة</th>
                                <th scope="col">الإجمالي </th>
                                <th scope="col">الاجراءات</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <th scope="row">#6506</th>
                                <td>7 أكتوبر، 2020</td>
                                <td>يحتاج توصيل</td>
                                <td>$13.50 لعنصر واحد</td>
                                <td><a href="orders-Billing-address-icon-stage.php">  <span class="bg-success text-white pr-2 pl-2" style="border-radius: 5px">عرض</span> </a></td>
                            </tr>
                            <tr>
                                <th scope="row">#6506</th>
                                <td>7 أكتوبر، 2020</td>
                                <td>يحتاج توصيل</td>
                                <td>$13.50 لعنصر واحد</td>
                                <td><a href="orders-Billing-address-icon-stage.php">  <span class="bg-success text-white pr-2 pl-2" style="border-radius: 5px">عرض</span> </a></td>
                            </tr>
                            <tr>
                                <th scope="row">#6506</th>
                                <td>7 أكتوبر، 2020</td>
                                <td>يحتاج توصيل</td>
                                <td>$13.50 لعنصر واحد</td>
                                <td><a href="orders-Billing-address-icon-stage.php">  <span class="bg-success text-white pr-2 pl-2" style="border-radius: 5px">عرض</span> </a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                </div>




            <?php include 'blocks/layouts/footer.php'?>

            <?php include 'blocks/layouts/foot-resources.php' ?>
</body>
</html>
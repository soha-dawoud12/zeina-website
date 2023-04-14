<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>انهاء الطلب</title>
    <?php include 'blocks/layouts/head-resources.php' ?>
</head>

<body class="header-fixed">
<div class="loader">
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>

</div>
            <?php include 'blocks/layouts/header.php'?>
            <?php include 'blocks/pages/mobile-menu.php'?>

            <div id="cart" class=" block   account  mt-5">

                <div class="container">


                <div class="form-account ">

                        <div class="row m-auto line" >

                            <div class="offset-lg-1"></div>
                            <div class="col-md-4 p-0 m-auto " >
                                <h3 class="text-success ">
                                    تفاصيل الفاتورة
                                </h3>

                             <form class=" m-auto pt-4" >



                                        <div class="form-row  mb-2">

                                            <div class="col">
                                                <label for="inputName">الاسم بالكامل </label>
                                                <span class=" star">*</span>
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-row mb-2">

                                            <div class="col">
                                                <label for="inputName">الاسم الشركة </label>
                                                <span class=" star">*</span>
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="col">
                                                <label for="exampleFormControlSelect1">الدولة</label>
                                                <span class=" star">*</span>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>فلسطين</option>
                                                    <option>سوريا</option>
                                                    <option>لبنان</option>
                                                    <option>مصر</option>
                                                    <option>االسعودية</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-row mb-2">
                                            <div class="col">
                                                <label for="inputAddress"> عنوان الشارع</label>
                                                <span class=" star">*</span>
                                                <input type="text" class="form-control mb-2" id="inputAddress">
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>
                                        </div>

                                        <div class="form-row mb-2">
                                            <div class="col">
                                                <label for="inputCity">المدينة</label>
                                                <span class=" star">*</span>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                        </div>

                                        <div class="form-row mb-2">
                                            <div class="col">
                                                <label for="inputName">الهاتف</label>
                                                <span class=" star">*</span>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-row mb-2 form-group">
                                            <div class="col">
                                                <label for="email">البريد الالكتروني </label>
                                                <input type="email" class="form-control" id="email">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4 form-group ">
                                        <div class="col">
                                            <label for="btn" class="text-white">.</label>
                                            <button type="submit" class="btn  form-control btn-primary">حفظ </button>
                                        </div></div>



                        </form>
                             </div>

                        <div class="offset-1"> </div>

                            <div class="col-md-5 p-0">
                                <h5 class="text-dark font-weight-bold mb-2"> طلبك</h5>
                                <div class="  tabel-orders mb-4   text-center table-responsive" >

                                    <table class="table pt-5 " style="border: 1px solid var(--success)">
                                        <thead class="bg-success text-white mb-2 table-bordered" style="border: 1px solid var(--primary)">
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


                                        <tr class="bg-primary text-white">

                                            <th scope="row " class="bg-primary text-white">المجموع</th>
                                            <th scope="row">90$</th>
                                        </tr>



                                        <tr class="bg-primary text-white" >
                                            <th scope="row" style="border-top: 1px solid #ca4799 !important;">الإجمالي </th>
                                            <th scope="row" style="border-top: 1px solid #ca4799 !important;">30$</th>

                                        </tr></tbody>
                                    </table>



                                    <div class="  m-auto text-center ">
                                                <a href="index.php" class="w-100 ">
                                                    <button type="submit" class="col-12 btn-primary btn-outline-success text-white border-0 mt-3 mt-md-0  mb-1 mb-md-0" style="border-radius: 5px">
                                                       إكمال الدفع
                                                    </button></a>


                                    </div>



                                    <div class="payment p-2 mt-4 ">
                                        <h6 class="mb-2">
                                            Continue to payment
                                        </h6>
                                        <p>
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet
                                        </p>
                                    </div>
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
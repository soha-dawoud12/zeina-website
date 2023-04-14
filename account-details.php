<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>تفاصيل الحساب</title>
    <?php include 'blocks/layouts/head-resources.php' ?>
</head>

<body class="header-fixed">
<div class="loader">
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>

</div>
            <?php include 'blocks/layouts/header.php'?>
            <?php include 'blocks/pages/mobile-menu.php'?>

            <div id="account" class=" account">
            <div class="img-head-account mb-4">
                <img src="uploads/Ad1.jpg"  class="img-fluid w-100" alt="" style="max-height: 312px">

            </div>



                <div class="form-account ">
                    <div class="container">


                    <form class=" m-auto" style="width: 80%">
                        <div class="form-row mb-2">

                            <div class="col-md-5">
                                <label for="inputName">الاسم الأول</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="offset-1"></div>
                            <div class="col-md-5">
                                <label for="inputName">الاسم الأخير</label>
                                <input type="text" class="form-control" >
                            </div>
                        </div>

                        <div class="form-row mb-5">

                            <div class="col-md-5">
                                <label for="exampleFormControlInput1">البريد الالكتروني </label>
                                <input type="email" class="form-control" >

                            </div>
                        </div>
                        <h6 class="text-success font-weight-bolder"> تغيير كلمة المرور </h6>

                        <div class="form-row mb-2">
                            <div class="col-md-5">
                                <label for="inputPassword3" >كلمة المرور الحالية</label>
                                <input type="password" class="form-control" id="inputPassword3">
                            </div>
                            <div class="offset-1"></div>
                            <div class="col-md-5">
                                <label for="inputPassword3" >كلمة المرور الجديدة</label>
                                <input type="password" class="form-control" id="inputPassword3">
                            </div>
                        </div>

                            <div class="form-row mb-5">
                                <div class="col-md-5">
                                <label for="inputPassword3" >تأكيد كلمة المرور</label>
                                    <input type="password" class="form-control" id="inputPassword3">
                                </div>

                                <div class="offset-1"></div>

                                    <div class="col-md-5">
                                        <label for="btn"  class="text-white">.</label>
                                        <button type="submit" class="btn  form-control btn-primary">حفظ التغييرات</button>
                                    </div>
                                </div>

                    </form>


                        <div class="row m-auto" style="width: 80%">
                            <div class="col-md-5 p-0">
                             <form class=" m-auto" >
                                <h6 class="text-success font-weight-bolder mb-2"> العناوين </h6>

                                       <li class="text-primary mb-2 mt-2">
                                           عنوان الفاتورة
                                       </li>


                                        <div class="form-row mb-2">

                                            <div class="col">
                                                <label for="inputName">الاسم الأول</label>
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>
                                        <div class="form-row mb-2">

                                            <div class="col">
                                                <label for="inputName">الاسم الأخير</label>
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>
                                        <div class="form-row mb-2">

                                            <div class="col">
                                                <label for="inputName">الاسم الشركة (اختياري)</label>
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="col">
                                                <label for="inputName">الدولة</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-row mb-2">
                                            <div class="col">
                                                <label for="inputAddress">الشارع</label>
                                                <input type="text" class="form-control mb-2" id="inputAddress">
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>
                                        </div>

                                        <div class="form-row mb-2">
                                            <div class="col">
                                                <label for="inputCity">المدينة</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                        </div>

                                        <div class="form-row mb-2">
                                            <div class="col">
                                                <label for="inputName">الهاتف</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-row mb-2 form-group">
                                            <div class="col">
                                                <label for="inputZip">الرمز البريدي</label>
                                                <input type="text" class="form-control" id="inputZip">
                                            </div>
                                        </div>
                                        <div class="form-row mb-2 form-group">
                                        <div class="col">
                                            <label for="btn" class="text-white">.</label>
                                            <button type="submit" class="btn  form-control btn-primary">حفظ </button>
                                        </div></div>



                        </form>
                            </div>
                        <div class="offset-1"> </div>

                            <div class="col-md-5 p-0">
                                <form class=" m-auto" >

                                    <br>
                                    <li class="text-primary mb-2 mt-2">
                                        عنوان الشحن
                                    </li>


                                    <div class="form-row mb-2">

                                        <div class="col">
                                            <label for="inputName">الاسم الأول</label>
                                            <input type="text" class="form-control">
                                        </div>

                                    </div>
                                    <div class="form-row mb-2">

                                        <div class="col">
                                            <label for="inputName">الاسم الأخير</label>
                                            <input type="text" class="form-control">
                                        </div>

                                    </div>
                                    <div class="form-row mb-2">

                                        <div class="col">
                                            <label for="inputName">اسم الشركة (اختياري)</label>
                                            <input type="text" class="form-control">
                                        </div>

                                    </div>

                                    <div class="form-row mb-2">
                                        <div class="col">
                                            <label for="inputCity">المدينة</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>
                                    </div>
                                    <div class="form-row mb-2">
                                        <div class="col">
                                            <label for="inputName">الدولة</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>



                                    <div class="form-row mb-2">
                                        <div class="col">
                                            <label for="inputAddress">الشارع</label>
                                            <input type="text" class="form-control mb-2" id="inputAddress">
                                            <input type="text" class="form-control" id="inputAddress">
                                        </div>
                                    </div>





                                    <div class="form-row mb-2 form-group">
                                        <div class="col">
                                            <label for="inputZip">الرمز البريدي</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                    </div>
                                    <div class="form-row mb-2 form-group">
                                        <div class="col">
                                            <label for="btn" class="text-white">.</label>
                                            <button type="submit" class="btn  form-control btn-primary">حفظ </button>
                                        </div></div>



                                </form>
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
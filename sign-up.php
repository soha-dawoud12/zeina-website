<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>sign up</title>
    <?php include 'blocks/layouts/head-resources.php' ?>
</head>

<body class="header-fixed">
<div class="loader">
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>

</div>
            <?php include 'blocks/layouts/header.php'?>
            <?php include 'blocks/pages/mobile-menu.php'?>

            <div id="sign-up" class="bg-secondary sign  ">



                <div class="row w-100 h-100">
                    <div class="col-md-5 d-none d-md-block image-sign " >
                        <img src="assets/images/sign.jpg" alt="" class="img-fluid min-vh-100">
                        
                    </div>
                    <div class="col-12  col-md-6 forms  d-flex flex-column   justify-content-around min-vh-100 ">

                        <div>
                            <h1 class="text-center  mb-3 ">
                               انشاء حساب
                            </h1>
                        </div>

                        <form class="w-75 mx-auto">
                            <div class="form-row ">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="الاسم الاول">
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="الاسم الأخير">
                                </div>
                            </div>
                            <div class="form-group input-group-lg">

                                <input type="tel" class="form-control " id="phone"   placeholder="رقم الهاتف">
                            </div>
                            <div class="form-group input-group-lg">

                                <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="الايميل">
                            </div>
                            <div class="form-group input-group-lg">

                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="كلمة المرور">
                            </div>

                            <div class="sign-btn">
                                <button type="submit" class="btn btn-outline  mb-2 w-100 font-weight-bold ">انشأ حساب</button>
                            </div>

                            <div class="not-account text-center mb-4 forget-password">
                                 لدي حساب ؟
                            </div>

                            <div class="mb-4">
                                <a href="sign-in.php"><button type="submit" class="btn  w-100 btn-success text-white font-weight-bold">تسجيل دخول </button></a>
                            </div>
                        </form>
                        <footer class="text-center py-2 font-weight-bold">
                            <span id="year"></span>   © جميع الحقوق محفوظة
                        </footer>
                    </div>

                </div>



            </div>


            <?php include 'blocks/layouts/foot-resources.php' ?>
</body>
</html>
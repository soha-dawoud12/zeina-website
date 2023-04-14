<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>sign in</title>
    <?php include 'blocks/layouts/head-resources.php' ?>
</head>

<body class="header-fixed">
<div class="loader">
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>

</div>
            <?php include 'blocks/layouts/header.php'?>
            <?php include 'blocks/pages/mobile-menu.php'?>

            <div id="sign-in" class="bg-secondary sign vh-100 ">



                <div class="row w-100 h-100">
                    <div class="col-md-5 d-none d-md-block image-sign " >
                        <img src="assets/images/sign.jpg" alt="" class="img-fluid vh-100">
                        
                    </div>
                    <div class="col-12  col-md-6 forms  d-flex flex-column   justify-content-around vh-100 ">

                        <div>
                            <h1 class="text-center ">
                                تسجيل الدخول
                            </h1>
                        </div>

                        <form class="w-75 mx-auto">
                            <div class="form-group ">

                                <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="الايميل">
<!--                                <small id="emailHelp" class="form-text text-primary">We'll never share your email with anyone else.</small>-->
                            </div>
                            <div class="form-group input-group-lg">

                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="كلمة المرور">
                            </div>
                            <div class="form-group form-check">
                                <div class="row d-flex justify-content-between">
                                    <div class="col">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label mr-3 ml-3" for="exampleCheck1"> تذكرني </label>
                                    </div>
                                    <div class=" col" style="display: contents" >
                                        <a href="">   نسيت كلمة المرور؟</a>
                                    </div>

                                </div>

                            </div>
                            <div class="mb-4">
                                <a href="index.php">
                                <button type="submit" class="btn  w-100 btn-success text-white font-weight-bold">دخول</button>
                                </a>
                            </div>

                            <div class="not-account text-center mb-4 forget-password">
                                ليس لدي حساب ؟
                            </div>
                            <div class="sign-btn">
                                <a href="sign-up.php">
                                <button type="submit" class="btn btn-outline  w-100 font-weight-bold ">انشأ حساب</button>
                                </a>
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
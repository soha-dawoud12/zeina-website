<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>forget password</title>
    <?php include 'blocks/layouts/head-resources.php' ?>
</head>

<body class="header-fixed">
<div class="loader">
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>

</div>
            <?php include 'blocks/layouts/header.php'?>
            <?php include 'blocks/pages/mobile-menu.php'?>

            <div id="forget-password" class="bg-secondary sign vh-100 ">



                <div class="row w-100 h-100">
                    <div class="col-md-5 d-none d-md-block image-sign " >
                        <img src="assets/images/sign.jpg" alt="" class="img-fluid vh-100">
                        
                    </div>
                    <div class="col-12  col-md-6 forms  d-flex flex-column   justify-content-around vh-100 ">

                        <div>
                            <h1 class="text-center ">
استعادة كلمة المرور                            </h1>
                        </div>

                        <form class="w-75 mx-auto">
                            <div class="form-group mb-5">

                                <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="الايميل">
                            </div>


                            <div class="mt-4">
                                <button type="submit" class="btn  w-100 btn-success text-white font-weight-bold">استعادة كلمة المرور</button>
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
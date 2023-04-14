<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>اتصل بنا</title>
    <?php include 'blocks/layouts/head-resources.php' ?>
</head>

<body class="header-fixed">
<?php include 'social.php' ?>

<div class="loader">
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>

</div>
            <?php include 'blocks/layouts/header.php'?>
            <?php include 'blocks/pages/mobile-menu.php'?>
<div>
   <div id="contact" class="block contact  h-100 mt-xl-4 wow bounceInDown " data-wow-duration="2s" data-wow-delay="50ms">

           <div class="container ">

               <div class="head-start text-center">
                   <h2 class=" bg-white w-50 m-auto ">اتصل بنا </h2>

               </div>


               <form class="container p-lg-4 mt-4 mt-lg-0 bg-white   " action="/index/message/submit" method="post" id="contact">

                   <div class="row">
                       <div class="col-lg-12  ">
                           <input type="text" class="form-control form-control-lg border-success " id="cont_name" placeholder="الاسم بالكامل" name="name" style="font-size: 90%;border-width: 1px " required="">

                           <input type="email" class="form-control form-control-lg mt-2  border-success" id="cont_email" placeholder="الإيميل" name="email" style="font-size: 90%;border-width: 1px" required="">

                       </div>


                       <div class="col-lg-12 ">
                           <div class="form-group">

                               <textarea class="form-control form-control-lg  mt-2  border-success" id="mass" placeholder="نص الرسالة" rows="3" name="message" style="font-size: 94%;border-width: 1px" required=""></textarea>
                           </div>
                           <div class="input-btn">
                               <input type="submit" class="btn col-12  btn-outline-primary "  value="Send" name="submit">
                           </div>

                       </div>

                   </div>


               </form>







           </div>
       </div>



       <div class="embed-responsive- embed-responsive-16by9- map m-auto">
           <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d984.3611623830399!2d51.602989127562836!3d25.181203388243603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3e45cb358881d0c1%3A0x974a1b46bbfc5fc5!2z2KfZhNmG2K_YsdipINmE2YTYqtis2KfYsdipINmIINin2YTYr9mK2YPZiNix2IwgQWwgV2FrcmEgTWFpbiBTdCwg2KfZhNmI2YPYsdip2IzYjCBRYXRhcg!3m2!1d25.1821996!2d51.6017918!5e0!3m2!1sen!2s!4v1549963311767" height="511" frameborder="0" style="border:0" allowfullscreen="" width="100%" ></iframe>
       </div>




                <div class="container head-details head-line mt-5 mb-4">

                    <h3 class="  text-success mt-3 mb-3   pb-2">معلومات التواصل   </h3>

                    <p>
                        Zeina Association And Cooperative For Handicraft
                        <br>
                        Um Al-Nasser Village – Gaza
                        <br>
                        +970 598 348 757
                        <br>
                        Skype: Zeina Women’s Center
                        <br>
                        Fb: Zeina Women’s Center
                        <br>
                        Contact Person
                        <br>
                        Haneen Rizik /Alsmmak
                        <br>
                        Executive Manager
                        <br>
                        Haneen1975@Hotmail.Com
                        <br>
                        مركز زينة للمرأة
                        <br>

                        قرية ام النصر – غزة
                        <br>
                        0598866590
                        <br>
                        +970 598 348 757
                        <br>
                        فيسبوك: Zeina Women’s Center

                        <br>
                        شخص الإتصال
                        <br>
                        حنين رزق /السماك
                        <br>
                        المديرة التنفيذية


                    </p>
                </div>

</div>

            <?php include 'blocks/layouts/footer.php'?>

            <?php include 'blocks/layouts/foot-resources.php' ?>
</body>
</html>
<?php
    session_start();
    if (isset($_SESSION['i'])) {
        $lang = $_SESSION["i"];
    } else {
        $lang = 'es';
    }   
    include_once("../lang/{$lang}.php"); 
    
    $username = 'prueba';
    $password = 'prueba';
    $port = '9998';
    $url = 'http://'.$_SESSION['ip_ap'].':'.$port;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$lang['titulo_website']?></title>   
    <link rel="stylesheet" href="../vendor/flag-icon/flag-icon.css"> 
    <link rel="stylesheet" href="../vendor/flag-icon/flag-icon.min.css"> 
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
  
     <!-- Agregamos el Slick -->
     <link rel="stylesheet" type="text/css" href="../vendor/slick/slick.css"/>
     <!-- // Add the new slick-theme.css if you want the default styling -->
     <link rel="stylesheet" type="text/css" href="../vendor/slick/slick-theme.css"/>  

     <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="../css/banner.css">
     <link rel="stylesheet" href="../css/terminos_condiciones.css">
     
    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
    

</head>
<body>
    <div class="container">
        <div class="row h-100">
            <div class="col-sm-12 my-auto">
                <div class="card"> 
                    <div class="logo">
                        <img src="../img/logo.jpg" alt="">
                        <p><?=$lang['titulo_banner']?></p>
                    </div>
                    <div class="container-carrusel">
                        <div class="slider carrousel">
                            <div class="banner-img">
                                <img
                                sizes="(min-width: 400px) 80vw, 100vw"
                                srcset="../img/banner_1_movil.jpg 375w,
                                        ../img/banner_1_web.jpg 1500w"
                                alt="">
                            </div>
                            <div class="banner-img">
                                <img
                                sizes="(min-width: 400px) 80vw, 100vw"
                                srcset="../img/banner_2_movil.jpg 375w,
                                        ../img/banner_2_web.jpg 1500w"
                                alt="">
                            </div>
                                
                            <div class="banner-img">
                                <img
                                sizes="(min-width: 400px) 80vw, 100vw"
                                srcset="../img/banner_3_movil.jpg 375w,
                                        ../img/banner_3_web.jpg 1500w"
                                alt="">
                            </div>                              
                           
                            <div class="banner-img">
                                <img
                                sizes="(min-width: 400px) 80vw, 100vw"
                                srcset="../img/banner_4_movil.jpg 375w,
                                        ../img/banner_4_web.jpg 1500w"
                                alt="">
                            </div>
                        </div>
                    </div>
                    <form class="field-btn-conectar" action="<?= $url?>" method="POST">
                        <input type="hidden" name="username" value="<?= $username?>">
                        <input type="hidden" name="password" value="<?= $password?>">
                        <button class="btn btn-conectar" type="submit"><?=$lang['btn_continuar']?></button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
    
    <div class="popup" id="popup">
        <div class="popup-inner">
            <div class="popup__text">
                <div id="incluirTerminosCondiciones" class="container_terminos"></div>
            </div>
            <a class="popup__close" href="#">X</a>
        </div>
    </div>
 
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/terminos_condiciones.js"></script> 
    <script src="../js/banner.js"></script>
    <script type="text/javascript" src="../vendor/jquery/jquery-3.2.1.min.js"></script> 
    <script type="text/javascript" src="../vendor/slick/slick.min.js"></script>
    
</body>
</html>
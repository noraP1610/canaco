<?php
//DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'daemonadmin';
//Create connection DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="images/Canaco_logo.jpg" />"
    <title>Comercio</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height,
          initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="preloader">
        <div class="wrapper-triangle">
            <div class="pen">
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="page">
        <!-- Top Banner-->
        <a class="section section-banner text-center d-none d-xl-block" <img  src="imagenes/banner/huauchinango.jpg"/></a>
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                     data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-inner-outer">
                        <div class="rd-navbar-inner">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle"
                                        data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                                    <span></span>
                                </button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <a class="brand"
                                       href="index.html"><img class="brand-logo-dark" src="images/Canaco_logo.jpg" alt="" width="30" height="30" /></a>
                                </div>
                            </div>
                            <div class="rd-navbar-right rd-navbar-nav-wrap">
                                <div class="rd-navbar-aside">
                                    <ul class="rd-navbar-contacts-2">
                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                                <div class="unit-body"><a class="phone" href="tel:#">+52 776 745 6578</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                                <div class="unit-body"><a class="address" href="#"> Miguel Hidalgo, Centro, 73160 Huauchinango, Pue. </a></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-share-2">
                                        <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                        <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                        <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                        <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                                    </ul>
                                </div>
                                <div class="rd-navbar-main">
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item">
                                            <a class="rd-nav-link" href="index.html">Inicio</a>
                                        </li>
                                        <li class="rd-nav-item">
                                            <a class="rd-nav-link" href="about-us.html">Acerca de</a>
                                        </li>
                                        <li class="rd-nav-item">
                                            <a class="rd-nav-link" href="destacado.html">Destacado</a>
                                        </li>
                                        <li class="rd-nav-item active">
                                            <a class="rd-nav-link" href="contacts.html">Contacto</a>
                                        </li>
                                        <li class="rd-nav-item">
                                            <a class="rd-nav-link" href="inicial.html">Ingresar</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
        </header>
        <!-- parallax top-->
        <!-- Breadcrumbs banner  -->
        <section class="bg-gray-7">
            <div class="breadcrumbs-custom box-transform-wrap context-dark">
                <div class="container">
                    <h3 class="breadcrumbs-custom-title">Comercio</h3>
                    <div class="breadcrumbs-custom-decor"></div>
                </div>
                <div class="box-transform" style="background-image: url(images/banner/talavera.png);"></div>
            </div>
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Inicio</a></li>
                    <li class="active">Comercio</li>
                </ul>
            </div>
        </section>
        <section class="section section-lg bg-default">
            <div class="container">
                <div class="tabs-custom row row-50 justify-content-center flex-lg-row-reverse text-center text-md-left" id="tabs-4">
                    <div class="col-lg-4 col-xl-3">
                        <h5 class="text-spacing-200 text-capitalize">Variedad en Comercio</h5>
                        <ul class="nav list-category list-category-down-md-inline-block">
                            <?php 
                                    $result = $db->query("SELECT * FROM category");
                                    while($row = $result->fetch_assoc()){
                                     ?>
                            <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay="<?php echo $row['id']; ?>s"><a href="#tabs-4-<?php echo $row['id']; ?>" data-toggle="tab"> <?Php echo $row['name']; } ?></a></li>
                        </ul><a class="button button-xl button-primary button-winona" href="contacts.html">Contactanos </a>
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <!-- Tab panes-->
                        <div class="tab-content tab-content-1">
                             <div class="tab-content tab-content-1">
                            <?php 
                                $detalle = $db->query("SELECT * FROM category");
                                while($row = $detalle->fetch_assoc()){  
                            ?>
                            <div class="tab-pane fade <?php if ($row['id'] == 1){ echo 'show active'; } ?> " id="tabs-4-<?php echo $row['id']; ?>">
                                <h4><?Php echo $row['name'];  ?></h4>
                                <p> <?php echo $row['descripcion']; ?></p>
                                 
                                <?PHP echo '<img src="data:image/jpg; base64, '.base64_encode($row['image']).'"><br><br>'; ?>
                                <p>Email</p>
                                  <h5><?Php echo $row['email'];  ?></h5>
                                   <p>Dirección</p>
                                    <h5><?Php echo $row['direccion'];  ?></h5>
                                    
                                </div>
                                <?php }?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

       


        <!-- Bottom Banner-->
        <footer class="section footer-modern context-dark footer-modern-2">
            <div class="footer-modern-line">
                <div class="container">
                    <div class="row row-50">
                        <div class="col-md-6 col-lg-4">
                        </div>

                        <div class="col-lg-4 col-xl-5">


                            <div class="col-sm-6 col-md-12 col-lg-8 col-xl-8 oh-desktop">
                                <div class="group-xmd group-sm-justify">
                                    <div class="footer-modern-contacts wow slideInUp">
                                        <div class="unit unit-spacing-sm align-items-center">
                                            <div class="unit-left"><span class="icon icon-24 mdi mdi-phone"></span></div>
                                            <div class="unit-body"><a class="phone" href="tel:#">+52 776 745 6578</a></div>
                                        </div>
                                    </div>
                                    <div class="footer-modern-contacts wow slideInDown">
                                        <div class="unit unit-spacing-sm align-items-center">
                                            <div class="unit-left"><span class="icon mdi mdi-email"></span></div>
                                            <div class="unit-body"><a class="mail" href="canacohuauchinango20@gmail.com">canacohuauchinango20@gmail.com</a></div>
                                        </div>
                                    </div>
                                    <div id="pie" class="wow slideInRight">
                                        <ul class="list-inline footer-social-list footer-social-list-2 footer-social-list-3">
                                            <li><a class="icon mdi mdi-facebook" href="https://www.facebook.com/CanacoHuauchinango"></a></li>
                                            <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                            <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                            <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-modern-line-3">
                    <div class="container">
                        <div class="row row-10 justify-content-between">
                            <div class="col-md-6"><span>Miguel Hidalgo, Centro, 73160 Huauchinango, Pue</span></div>
                            <div class="col-md-auto">
                                <!-- Rights-->
                                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span></span><span>.&nbsp;</span><span>All Rights Reserved.</span><span> Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">TemplateMonster</a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
    </div>
    <!-- Global Mailform Output-->
    <div lass="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
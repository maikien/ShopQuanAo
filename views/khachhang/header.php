<?php
require_once (__DIR__."/../../models/taikhoan.php");
//
if(!isset($_SESSION))
{
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">
    <title>
        TKTP Shop
    </title>
    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css"  rel="stylesheet">
    <link href="css/animate.min.css"  rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css"  rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/header.js" ></script>


    <link rel="shortcut icon" href="favicon.png" >
</head>
<body>
<!-- *** NAVBAR ***
_________________________________________________________ -->

<div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                <img src="img/logo.png" alt="TKTP Shop" class="hidden-xs">
                <img src="img/logo.png" alt="TKTP Shop" class="visible-xs"><span class="sr-only">TKTP Shop</span>
            </a>
        </div>
        <!--/.navbar-header -->

        <div class="navbar-collapse collapse" id="navigation">

            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="index.php">Trang ch???</a>
                </li>
                <li>
                    <a href="route.php?controller=controller_sanpham&action=showSP_type&type_sp=Nam">Th???i trang Nam</a>

                </li>
                <li>
                    <a href="route.php?controller=controller_sanpham&action=showSP_type&type_sp=N???">Th???i trang N???</a>
                </li>

                <li>
                    <a href="route.php?controller=controller_tintuc&action=showTT">B???ng tin</a>
                </li>

                <li>
                    <a href="contact.php" >Li??n h???</a>
                </li>
            </ul>

        </div>

        <div class="navbar-buttons">
            <div class="navbar-collapse collapse right" id="basket-overview">
                <?php
                if(isset($_SESSION['logged_user'])){
                    ?>
                    <a href="#" class="btn btn-primary navbar-btn dropdown-toggle" id="btdangnhap" data-toggle="dropdown" data-hover="dropdown" data-delay="50"><i class="fa fa-user"></i><span class="hidden-sm"></span>
                    <?php echo $_SESSION['logged_user']->getTentaikhoan(); ?></a>
                    <ul class="dropdown-menu" style="right:0;">
                        <div class="yamm-content">
                            <div class="row">
                                <ul>
                                    <li><a href="route.php?controller=controller_giohang&action=showSP_giohang">Gi??? H??ng</a>
                                    </li>
                                    <li><a href="customer-account.php">T??i Kho???n</a>
                                    </li>
                                    <li><a href="#" id="log_out">????ng Xu???t</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                    <?php
                }
                else {
                    ?>
                    <a href="#" class="btn btn-primary navbar-btn dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="50"><i class="fa fa-user"></i><span class="hidden-sm"></span>????ng Nh???p</a>
                    <ul class="dropdown-menu" style="right:0;">
                        <div class="yamm-content">
                            <div class="row">
                                <ul>
                                    <li><a href="#" data-toggle="modal" data-target="#login-modal">????ng Nh???p</a>
                                    </li>
                                    <li><a href="#" data-toggle="modal" data-target="#register-modal">????ng K??</a>
                                    </li>
                                    <li><a href="route.php?controller=controller_giohang&action=showSP_giohang">Gi??? H??ng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                    <?php
                }
                ?>

            </div>

            <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                <div class="modal-dialog modal-sm">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="Register">????ng K??</h4>
                        </div>
                        <div class="modal-body">
                            <form >
                                <div class="form-group">
                                    <input type="text" class="form-control" id="username-registermodal" placeholder="T??n t??i kho???n" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password-registermodal" placeholder="M???t kh???u" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="fullname-registermodal" placeholder="T??n kh??ch h??ng" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email-registermodal" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" id="mobilephone-registermodal" placeholder="S??? ??i???n tho???i" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="address-registermodal" placeholder="?????a ch???" required>
                                </div>
                                <p class="text-center " id="message_register" style="color: red;"></p>
                            </form>
                            <p class="text-center">
                                <button class="btn btn-primary" id="buttonregister"><i class="fa fa-sign-in"></i>????ng k??</button>
                            </p>

                            <p class="text-center text-muted">????ng k?? ????? truy c???p v??o c??c d???ch v??? ti???n ??ch kh??c c???a ch??ng t??i.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                <div class="modal-dialog modal-sm">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="Login">????ng Nh???p</h4>
                        </div>
                        <div class="modal-body">
                            <form >
                                <div class="form-group">
                                    <input type="text" class="form-control" id="username-modal" placeholder="T??n t??i kho???n" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password-modal" placeholder="M???t kh???u" required>
                                </div>
                            </form>
                            <p class="text-center">
                                <button id="loginbutton" type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i>????ng Nh???p</button>
                            </p>
                            <div >
                                <p class="text-center " style="color:red;" id="message_dangnhap"></p>
                                <p class="text-center text-muted">Ch??a c?? t??i kho???n ?</p>
                                <p class="text-center text-muted"><a href="#" id="registernow" data-toggle="modal" data-target="#register-modal"><strong>????ng k?? ngay</strong></a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="warning-modal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-sm">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="title_th??ngb??o"></h4>
                        </div>
                        <div class="modal-body">
                            <div >
                                <p class="text-center " style="color:red;" id="mesage_th??ngb??o"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="navbar-collapse collapse right" id="search-not-mobile">
                <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <div class="collapse clearfix" id="search">
            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">

			           <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </span>
                </div>
            </form>
        </div>
        <!--/.nav-collapse -->

    </div>
    <!-- /.container -->
</div>
<!-- /#navbar -->

<!-- *** NAVBAR END *** -->
</body>
</html>

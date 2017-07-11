<!doctype html>
<html lang="en">
<head>
    <title>lala</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?= TEMPLATE ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <script src="<?= TEMPLATE ?>js/jquery.min.js"></script>
    <link href="<?= TEMPLATE ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <script src="<?= TEMPLATE ?>js/bootstrap.min.js"></script>
    <script src="<?= TEMPLATE ?>js/simpleCart.min.js"> </script>
    <script src="<?= TEMPLATE ?>js/responsiveslides.min.js"></script>
    <link href="<?= TEMPLATE ?>css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="<?= TEMPLATE ?>js/jquery.magnific-popup.js" type="text/javascript"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: false,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <link href="<?= TEMPLATE ?>css/animate.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/35f65baac5.js"></script>
    <script src="<?= TEMPLATE ?>js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</head>
<body>
<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
                <h1><a href="index.html">Youth <span>Fashion</span></a></h1>
            </div>
            <div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
                <div class="cart box_1">
                    <a href="checkout.html">
                        <h3> <div class="total">
                                <span class="simpleCart_total"></span></div>
                            <img src="<?= TEMPLATE ?>images/cart.png" alt=""/></h3>
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

                </div>
            </div>
            <div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
                <span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
                <p>Call me</p>
            </div>
            <div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">
<<<<<<< HEAD

                <?php if (isset($_SESSION['user_id'])) : ?>

                    <a class="login-link" href="<?= SITE_ROOT ?>user/login/">
                        <i class="fa fa-user-circle" aria-hidden="true"></i> Профиль
                    </a>

                <?php else :?>

                    <a class="login-link" href="<?= SITE_ROOT ?>user/login/">
                        <i class="fa fa-sign-in" aria-hidden="true"></i> Войти
                    </a>

                <?php endif; ?>

=======
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
>>>>>>> b08e9a520ea6548f545bf294ccfe3e6631eb0fce
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="container">
        <div class="head-top">
            <div class="n-avigation">

                <nav class="navbar nav_bottom" role="navigation">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <? include_once ROOT."/layouts/menu.php" ?>
                    </div>

                </nav>
            </div>


            <div class="clearfix"> </div>
            <div id="small-dialog" class="mfp-hide">
                <div class="search-top">
                    <div class="login">
                        <form action="#" method="post">
                            <input type="submit" value="">
                            <input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">

                        </form>
                    </div>
                    <p>	Shopping</p>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });

                });
            </script>
            <!---->
        </div>
    </div>
</div>
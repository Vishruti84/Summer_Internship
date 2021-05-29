<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>FOODIE</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
   <?php include 'css/bootstrap.min.php';?> 
    <!-- style css -->
    <?php include 'css/style.php';?> 
    <!-- Responsive-->
    <?php include 'css/responsive.php';?>  
    <!-- fevicon -->
    <!--<?php include 'images/fevicon.png';?> <link rel="icon" href="images/fevicon.png" type="image/gif" />-->
    <!-- Scrollbar Custom CSS -->
    <?php include 'css/jquery.mCustomScrollbar.min.php';?>  
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    end loader -->
    <!-- header -->
    <header id="home">
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                   <?php include 'css/menu.php';?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->


    <section class="slider_section">
        <div class="container">
            <?php include 'header.php';?>
        </div>
    </section>

    <!-- about -->
    <div id="about" class="about layout_padding">
        <div class="container">
           <?php include 'About.php';?>
        </div>
    </div>
    <!-- end about -->
    <!-- section -->
    <div id="fruits" class="section dark_bg layout_padding left_white">
       <?php include 'fruit.php';?>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
        <?php include 'product.php';?>
        </div>
    </div>
    <!-- end section -->
<!-- section -->
    <div id="blog" class="section dark_bg layout_padding right_white">
       <?php include 'blog.php';?>
    </div>
    <!-- end section -->
    <!-- section -->
    <div id="contact" class="section layout_padding">
       <?php include 'call.php';?>
    </div>
    <!-- end section -->

    <!-- footer -->
    <footer>
       <?php include 'footer.php';?>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
   <?php include 'js/jquery.min.php';?>
   <?php include 'js/popper.min.php';?>
   <?php include 'js/bootstrap.bundle.min.php';?>
   <?php include 'js/jquery-3.0.0.min.php';?> 
   <?php include 'js/plugin.php';?>

    <!-- sidebar -->
    <?php include 'js/jquery.mCustomScrollbar.concat.min.php';?>
    <?php include 'js/custom.php';?>
</body>
</html>
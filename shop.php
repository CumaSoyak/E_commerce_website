<?php
include("connect.php");
?>
<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/shop.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 17:58:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cigar - shop page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bundle.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!-- Add your site or application content here -->


<!--header area start-->
<?php include 'header.php'; ?>
<!--header area end-->

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="breadcrumbs_inner">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>shop</h3>
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shop wrapper start-->
<div class="shop_wrapper shop_reverse">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="sidebar_widget">
                    <!--widget color start-->
                    <div class="widget_list widget_color">
                        <h3>Select By Color</h3>
                        <ul>
                            <li><a href="#">Black </a></li>

                            <li><a href="#">Orange </a></li>

                            <li><a href="#">Blue</a></li>

                            <li><a href="#">Yellow</a></li>

                            <li><a href="#">pink</a></li>

                            <li><a href="#">green</a></li>
                        </ul>
                    </div>
                    <!--widget color start-->

                    <!--manufacturer start-->
                    <div class="widget_list manufacturer">
                        <h3>Manufacturer</h3>
                        <ul>
                            <li><a href="#">Fisher-Price </a></li>

                            <li><a href="#">WolVol </a></li>

                            <li><a href="#"> K'NEX </a></li>

                            <li><a href="#">Liberty Imports</a></li>

                            <li><a href="#">ALEX Toys</a></li>
                        </ul>
                    </div>
                    <!--manufacturer start-->

                    <!--widget  price start-->
                    <div class="widget_list price">
                        <h3>Pricer</h3>
                        <ul>
                            <li><a href="#">$0.00 - $99.99 </a></li>

                            <li><a href="#">$100.00 and above </a></li>
                        </ul>
                    </div>
                    <!--widget  price start-->

                    <!--popular tags area-->
                    <div class="widget_list tag_widget  ">
                        <h3>popular tags</h3>
                        <div class="block_tags">
                            <a href="#">ipod</a>
                            <a href="#">sam sung</a>
                            <a href="#">apple</a>
                            <a href="#">iphone 5s</a>
                            <a href="#">superdrive</a>
                            <a href="#">shuffle</a>
                            <a href="#">nano</a>
                            <a href="#">iphone 4s</a>
                            <a href="#">canon</a>
                        </div>
                    </div>
                    <!--popular tags end-->

                    <!--widget banner start-->
                    <div class="widget_list banner">
                        <div class="banner_thumb">
                            <a href="#"><img src="assets/img/banner/banner9.png" alt=""></a>
                        </div>
                    </div>
                    <!--widget banner end-->
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <!--shop toolbar start-->
                <div class="shop_toolbar">

                    <div class="list_button">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#large" role="tab" aria-controls="large"
                                   aria-selected="true"><i class="ion-grid"></i></a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i
                                            class="ion-android-menu"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="select_option number">
                        <form action="#">
                            <label>Show:</label>
                            <select name="orderby" id="short">
                                <option selected value="1">9</option>
                                <option value="1">19</option>
                                <option value="1">30</option>
                            </select>
                        </form>
                    </div>
                    <div class="select_option">
                        <form action="#">
                            <label>Sort By</label>
                            <select name="orderby" id="short1">
                                <option selected value="1">Position</option>
                                <option value="1">Price: Lowest</option>
                                <option value="1">Price: Highest</option>
                                <option value="1">Product Name:Z</option>
                                <option value="1">Sort by price:low</option>
                                <option value="1">Product Name: Z</option>
                                <option value="1">In stock</option>
                                <option value="1">Product Name: A</option>
                                <option value="1">In stock</option>
                            </select>
                        </form>
                    </div>
                </div>
                <!--shop toolbar enddddd-->
                <!--shop tab product-->
                <div class="shop_tab_product">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="large" role="tabpanel">
                            <div class="row">
                                <!--shop tab product-->
                                <?php urun_goster(); ?>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="list" role="tabpanel">
                            <div class="single_product list_item">
                                <div class="row align-items-center">

                                    <?php ayrintili_urun_goster(); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--shop tab product end-->

                <!--pagination style start-->
                <div class="pagination_style">
                    <ul>
                        <li class="current_number">1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
                <!--pagination style end-->
            </div>
        </div>
    </div>
</div>
<!--shop wrapper end-->


<!--shipping area start-->
<?php include("bottom_menu.php"); ?>
</body>

<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/shop.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 17:58:12 GMT -->
</html>

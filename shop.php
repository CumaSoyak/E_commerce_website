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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
<?php include 'header.php';?>
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
                                <?php
                                $al_kategori = "SELECT * FROM urunler ";
                                $sonuc = mysqli_query($con, $al_kategori);
                                while ($cekilen_veri = mysqli_fetch_array($sonuc)) {

                                    $urunler_title = $cekilen_veri['urunler_title'];
                                    $urunler_desc = $cekilen_veri['urunler_desc'];
                                    $urunler_resim = $cekilen_veri['urunler_resim'];
                                    $urunler_fiyat = $cekilen_veri['urunler_fiyat'];

                                    echo "
                                     <div class=\"col-lg-4 col-md-6\">
                                    <div class=\"single_product\">
                                        <div class=\"product_thumb\">
                                            <a href=\"product-details.html\">
                                            <img src='assets/img/cart/$urunler_resim'></a>
                                            <div class=\"btn_quickview\">
                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box\"
                                                   title=\"Quick View\"><i class=\"ion-ios-eye\"></i></a>
                                            </div>
                                        </div>
                                        <div class=\"product_content\">
                                            <div class=\"product_ratting\">
                                                <ul>
                                                    <li><a href=\"#\"><i class=\"ion-star\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3><a href=\"product-details.html\">$urunler_title</a></h3>
                                            <div class=\"product_price\">
                                                <span class=\"current_price\">$urunler_fiyat TL</span>
                                            </div>
                                            <div class=\"product_action\">
                                                <ul>
                                                    <li class=\"product_cart\"><a href=\"#\" title=\"Add to Cart\">Add to
                                                            Cart</a></li>
                                                    <li class=\"add_links\"><a href=\"#\" title=\"Add to Wishlist\"><i
                                                                    class=\"ion-ios-heart-outline\"></i></a></li>
                                                    <li class=\"add_links\"><a href=\"#\" title=\"Add to Compare\"><i
                                                                    class=\"ion-loop\"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                              
                                    ";
                                    echo "
  <div class=\"modal fade\" id=\"modal_box\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            <div class=\"modal_body\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-5 col-md-5 col-sm-12\">
                            <div class=\"modal_tab\">
                                <div class=\"tab-content product-details-large\">
                                    <div class=\"tab-pane fade show active\" id=\"tab1\" role=\"tabpanel\">
                                        <div class=\"modal_tab_img\">
                                            <a href=\"#\"><img src=\"assets/img/product/product44.jpg\" alt=\"\"></a>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"tab2\" role=\"tabpanel\">
                                        <div class=\"modal_tab_img\">
                                            <a href=\"#\"><img src=\"assets/img/product/product45.jpg\" alt=\"\"></a>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"tab3\" role=\"tabpanel\">
                                        <div class=\"modal_tab_img\">
                                            <a href=\"#\"><img src=\"assets/img/product/product46.jpg\" alt=\"\"></a>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"tab4\" role=\"tabpanel\">
                                        <div class=\"modal_tab_img\">
                                            <a href=\"#\"><img src=\"assets/img/product/product47.jpg\" alt=\"\"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal_tab_button\">
                                    <ul class=\"nav product_navactive owl-carousel\" role=\"tablist\">
                                        <li>
                                            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tab1\" role=\"tab\"
                                               aria-controls=\"tab1\" aria-selected=\"false\"><img
                                                        src=\"assets/img/cart/cart5.jpg\" alt=\"\"></a>
                                        </li>
                                        <li>
                                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tab2\" role=\"tab\"
                                               aria-controls=\"tab2\" aria-selected=\"false\"><img
                                                        src=\"assets/img/cart/cart6.jpg\" alt=\"\"></a>
                                        </li>
                                        <li>
                                            <a class=\"nav-link button_three\" data-toggle=\"tab\" href=\"#tab3\" role=\"tab\"
                                               aria-controls=\"tab3\" aria-selected=\"false\"><img
                                                        src=\"assets/img/cart/cart7.jpg\" alt=\"\"></a>
                                        </li>
                                        <li>
                                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tab4\" role=\"tab\"
                                               aria-controls=\"tab4\" aria-selected=\"false\"><img
                                                        src=\"assets/img/cart/cart8.jpg\" alt=\"\"></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-7 col-md-7 col-sm-12\">
                            <div class=\"modal_right\">
                                <div class=\"modal_title mb-10\">
                                    <h2>$urunler_title</h2>
                                </div>
                                <div class=\"modal_price mb-10\">
                                    <span class=\"new_price\">$64.99</span>
                                    <span class=\"old_price\">$78.99</span>
                                </div>
                                <div class=\"modal_content mb-10\">
                                    <p>Short-sleeved blouse with feminine draped sleeve detail.</p>
                                </div>
                                <div class=\"modal_size mb-15\">
                                    <h2>size</h2>
                                    <ul>
                                        <li><a href=\"#\">s</a></li>
                                        <li><a href=\"#\">m</a></li>
                                        <li><a href=\"#\">l</a></li>
                                        <li><a href=\"#\">xl</a></li>
                                        <li><a href=\"#\">xxl</a></li>
                                    </ul>
                                </div>
                                <div class=\"modal_add_to_cart mb-15\">
                                    <form action=\"#\">
                                        <input min=\"0\" max=\"100\" step=\"2\" value=\"1\" type=\"number\">
                                        <button type=\"submit\">add to cart</button>
                                    </form>
                                </div>
                                <div class=\"modal_description mb-15\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                </div>
                                <div class=\"modal_social\">
                                    <h2>Share this product</h2>
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                    ";
                                }

                                ?>


                            </div>
                        </div>
                        <div class="tab-pane fade" id="list" role="tabpanel">
                            <div class="single_product list_item">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-5">
                                        <div class="product_thumb">
                                            <a href="product-details.html"><img src="assets/img/product/product14.jpg"
                                                                                alt=""></a>
                                            <div class="btn_quickview">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"
                                                   title="Quick View"><i class="ion-ios-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7">
                                        <div class="product_content">
                                            <div class="product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3><a href="product-details.html">Aicok Stand Mixet</a></h3>
                                            <div class="product_price">
                                                <span class="current_price">$23.00</span>
                                            </div>
                                            <div class="product_description">
                                                <p>Maybe Smaller than regular Size, PLS CHOOSE THE SIZE 1-2 Size UP than
                                                    YOU USUALLY WEAR, Now We Will Give the 2XL, 3XL, 4XL for Choices
                                                    (Note:The Generic Amazon Size Chart is not our size) Update ON May
                                                    14,2016 </p>
                                            </div>
                                            <div class="product_action">
                                                <ul>
                                                    <li class="product_cart"><a href="#" title="Add to Cart">Add to
                                                            Cart</a></li>
                                                    <li class="add_links"><a href="#" title="Add to Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a></li>
                                                    <li class="add_links"><a href="#" title="Add to Compare"><i
                                                                    class="ion-loop"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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
<div class="shipping_area shipping_contact ">
    <div class="container">
        <div class="shipping_contact">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <span class="pe-7s-call"></span>
                        </div>
                        <div class="shipping_content">
                            <h3>(999) 1234 56789</h3>
                            <p>Free support line!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <span class="pe-7s-mail"></span>
                        </div>
                        <div class="shipping_content">
                            <h3>Support@plazathemes.com</h3>
                            <p>Orders Support!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_shipping column_3">
                        <div class="shipping_icone">
                            <span class="pe-7s-timer"></span>
                        </div>
                        <div class="shipping_content">
                            <h3>Mon - Fri / 8:00 - 18:00</h3>
                            <p>Working Days/Hours!</p>
                        </div>
                    </div>
                </div>
            </div>

            <!--newsletter area start-->
            <div class="newsletter_area">
                <div class="row">
                    <div class="col-12">
                        <div class="field_newsletter">
                            <div class="newsletter_text">
                                <h3>Sign Up For Newsletter</h3>
                                <p>Be the First to Know. Sign up to newsletter today</p>
                            </div>
                            <div class="newsletter_form">
                                <form action="#">
                                    <input placeholder="Enter your email address" type="text">
                                    <button type="submit">Subscibe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--newsletter area end-->
        </div>
    </div>
</div>
<!--shipping area end-->

<!--footer area start-->
<div class="footer_area">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-lg-4 col-md-8">
                    <div class="single_footer">
                        <div class="footer_logo">
                            <a href="#"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <div class="footer_desc">
                            <p>We are a team of designers and developers that create high quality Magento, Prestashop,
                                Opencart.</p>
                        </div>
                        <div class="footer_contact">
                            <ul>
                                <li><i class="ion-location"></i> Ullenhall, Henley-in-Arden B578 5CC, England</li>
                                <li><i class="ion-ios-telephone"></i> +123.456.789 - +123.456.678/li>
                                <li><i class="ion-ios-email"></i> <a href="#">support@plazathemes.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="single_footer">
                        <h3>CUSTOMER SERVICE</h3>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Site Map</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Unsubscribe</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="single_footer">
                        <h3>Information</h3>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Warranty</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="single_footer">
                        <h3>instagram</h3>
                        <div class="instagram_active owl-carousel">
                            <div class="instagram_items">
                                <div class="instagram_list">
                                    <div class="single_instagram">
                                        <a href="#"><img src="assets/img/instagram/instagram1.jpg" alt=""></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="assets/img/instagram/instagram1.jpg"><i
                                                        class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="assets/img/instagram/instagram2.jpg" alt=""></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="assets/img/instagram/instagram2.jpg"><i
                                                        class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="assets/img/instagram/instagram3.jpg" alt=""></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="assets/img/instagram/instagram3.jpg"><i
                                                        class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="assets/img/instagram/instagram4.jpg" alt=""></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="assets/img/instagram/instagram4.jpg"><i
                                                        class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="instagram_list">
                                    <div class="single_instagram">
                                        <a href="#"><img src="assets/img/instagram/instagram5.jpg" alt=""></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="assets/img/instagram/instagram5.jpg"><i
                                                        class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="assets/img/instagram/instagram6.jpg" alt=""></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="assets/img/instagram/instagram6.jpg"><i
                                                        class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="assets/img/instagram/instagram7.jpg" alt=""></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="assets/img/instagram/instagram7.jpg"><i
                                                        class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="assets/img/instagram/instagram8.jpg" alt=""></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="assets/img/instagram/instagram8.jpg"><i
                                                        class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="instagram_items">
                                <div class="instagram_list">
                                    <div class="single_instagram">
                                        <a href="#"><img src="assets/img/instagram/instagram1.jpg" alt=""></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="assets/img/instagram/instagram1.jpg"><i
                                                        class="ion-social-instagram"></i></a>
                                        </div>

                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="assets/img/instagram/instagram2.jpg" alt=""></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="assets/img/instagram/instagram2.jpg"><i
                                                        class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="assets/img/instagram/instagram3.jpg" alt=""></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="assets/img/instagram/instagram3.jpg"><i
                                                        class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="assets/img/instagram/instagram4.jpg" alt=""></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="assets/img/instagram/instagram4.jpg"><i
                                                        class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="instagram_list">
                                    <div class="single_instagram">
                                        <a href="#"><img src="assets/img/instagram/instagram5.jpg" alt=""></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="assets/img/instagram/instagram5.jpg"><i
                                                        class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="assets/img/instagram/instagram6.jpg" alt=""></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="assets/img/instagram/instagram6.jpg"><i
                                                        class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="assets/img/instagram/instagram7.jpg" alt=""></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="assets/img/instagram/instagram7.jpg"><i
                                                        class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="single_instagram">
                                        <a href="#"><img src="assets/img/instagram/instagram8.jpg" alt=""></a>
                                        <div class="instagram_icone">
                                            <a class="instagram_popup" href="assets/img/instagram/instagram8.jpg"><i
                                                        class="ion-social-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="row">
                <div class="col-12">
                    <div class="tag_block">
                        <ul>
                            <li><a href="#">Online Shopping</a></li>
                            <li><a href="#">Promotions</a></li>
                            <li><a href="#">My Orders</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Customer Service</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Most Populars</a></li>
                            <li><a href="#">New Arrivals</a></li>
                            <li><a href="#">Special Products</a></li>
                            <li><a href="#">Manufacturers</a></li>
                            <li><a href="#">Our Stores</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Payments</a></li>
                            <li><a href="#">Warantee</a></li>
                            <li><a href="#">Refunds</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Payments</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Refunds</a></li>
                        </ul>
                    </div>
                    <div class="footer_social">
                        <ul>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                            <li><a href="#"><i class="ion-social-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright_content">
                        <p>Copyright &copy; 2018, <a href="#">Cigar</a>. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer-payment text-right">
                        <a href="#"><img src="assets/img/visha/payment.png" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--footer area end-->


<!-- modal area start-->
<!-- modal area start-->

<!-- all js here -->
<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/shop.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 17:58:12 GMT -->
</html>

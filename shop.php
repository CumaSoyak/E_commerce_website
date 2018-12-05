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
<header class="header_area">
    <!--header top start-->
    <div class="header_top">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6">
                    <div class="welcome_text">
                        <p>England's Fastest Online Shopping Destination</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="top_right text-right">
                        <ul>
                            <li class="top_links"><a href="#">My Account <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_links">
                                    <li><a href="wishlist.html">My Wish List </a></li>
                                    <li><a href="my-account.html">My Account </a></li>
                                    <li><a href="#">Sign In</a></li>
                                    <li><a href="#">Compare Products </a></li>
                                </ul>
                            </li>
                            <li class="currency"><a href="#">USD <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_currency">
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">BRL</a></li>
                                </ul>
                            </li>
                            <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt=""> English <i
                                            class="ion-chevron-down"></i></a>
                                <ul class="dropdown_language">
                                    <li><a href="#"><img src="assets/img/logo/cigar.jpg" alt=""> French</a></li>
                                    <li><a href="#"><img src="assets/img/logo/language2.png" alt="">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header top start-->

    <!--header middel start-->
    <div class="header_middel">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4">
                    <div class="logo">
                        <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-5">
                    <div class="search_bar">
                        <form action="#">
                            <input placeholder="Search entire store here..." type="text">
                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="cart_area">
                        <div class="wishlist_link">
                            <a href="#"><i class="ion-ios-heart-outline"></i></a>
                        </div>
                        <div class="cart_link">
                            <a href="#"><i class="ion-ios-cart-outline"></i>My Cart</a>
                            <span class="cart_count">2</span>
                            <!--mini cart-->
                            <div class="mini_cart">
                                <div class="items_nunber">
                                    <span>2 Items in Cart</span>
                                </div>
                                <div class="cart_button checkout">
                                    <a href="checkout.html">Proceed to Checkout</a>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="assets/img/cart/cart1.jpg" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Mr.Coffee 12-Cup</a>
                                        <form action="#">
                                            <input min="0" max="100" type="number">
                                            <span>$60.00</span>
                                        </form>
                                    </div>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="assets/img/cart/cart2.jpg" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Lid Cover Cookware</a>
                                        <form action="#">
                                            <input min="0" max="100" type="number">
                                            <span>$160.00</span>
                                        </form>
                                    </div>
                                </div>
                                <div class="cart_button view_cart">
                                    <a href="#">View and Edit Cart</a>
                                </div>
                            </div>
                            <!--mini cart end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header middel end-->

    <!--header bottom satrt-->
    <div class="header_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="categories_menu">
                        <div class="categories_title">
                            <h2 class="categori_toggle"> All categories</h2>
                        </div>
                        <div class="categories_menu_inner">
                            <ul>
                                <li class="categorie_list"><a href="#">Laptop & Computer <i
                                                class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu">
                                        <li><a href="#">Headphoness</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Dell Laptops</a></li>
                                                    <li><a href="#">HP Laptops</a></li>
                                                    <li><a href="#">Lenovo Laptops</a></li>
                                                    <li><a href="#">Apple Laptops</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Laptop & Computers</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Camcorders</a></li>
                                                    <li><a href="#">Photo Accessories</a></li>
                                                    <li><a href="#">Memory Cards</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Camera & Photos</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Apple Phones</a></li>
                                                    <li><a href="#">Samsung Phones</a></li>
                                                    <li><a href="#">Motorola Phones</a></li>
                                                    <li><a href="#">Lenovo Phones</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><img src="assets/img/categorie/categorie.png" alt=""></li>


                                    </ul>
                                </li>
                                <li><a href="#"> Fashion <i class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu">
                                        <li><a href="#">Dresses</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Sweater</a></li>
                                                    <li><a href="#">Evening</a></li>
                                                    <li><a href="#">Day</a></li>
                                                    <li><a href="#">Sports</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Handbags</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Shoulder</a></li>
                                                    <li><a href="#">Satchels</a></li>
                                                    <li><a href="#">kids</a></li>
                                                    <li><a href="#">coats</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">shoes</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Ankle Boots</a></li>
                                                    <li><a href="#">Clog sandals </a></li>
                                                    <li><a href="#">run</a></li>
                                                    <li><a href="#">Books</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Clothing</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Coats Jackets </a></li>
                                                    <li><a href="#">Raincoats</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">T-shirts</a></li>
                                                </ul>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                                <li><a href="#"> Furnitured & Decor <i class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu column_3">
                                        <li><a href="#">Chair</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Dining room</a></li>
                                                    <li><a href="#">bedroom</a></li>
                                                    <li><a href="#"> Home & Office</a></li>
                                                    <li><a href="#">living room</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Lighting</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Ceiling Lighting</a></li>
                                                    <li><a href="#">Wall Lighting</a></li>
                                                    <li><a href="#">Outdoor Lighting</a></li>
                                                    <li><a href="#">Smart Lighting</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Sofa</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Fabric Sofas</a></li>
                                                    <li><a href="#">Leather Sofas</a></li>
                                                    <li><a href="#">Corner Sofas</a></li>
                                                    <li><a href="#">Sofa Beds</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"> Toys & Hobbies <i class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu column_2">
                                        <li><a href="#">Boys' Toys</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Building Toys</a></li>
                                                    <li><a href="#">Electronics Toys</a></li>
                                                    <li><a href="#">action figures </a></li>
                                                    <li><a href="#">specialty & boutique toy</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Girls' Toys</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="#">Dolls for Girls</a></li>
                                                    <li><a href="#">Girls' Learning Toys</a></li>
                                                    <li><a href="#">Arts and Crafts for Girls</a></li>
                                                    <li><a href="#">Video Games for Girls</a></li>
                                                </ul>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                                <li><a href="#"> Accessories</a></li>
                                <li><a href="#"> Jewelry & Watches</a></li>
                                <li><a href="#"> Health & Beauty</a></li>
                                <li><a href="#">Books & Office</a></li>
                                <li><a href="#"> Sport & Outdoor</a></li>
                                <li id="cat_toggle" class="has-sub"><a href="#"> More Categories</a>
                                    <ul class="categorie_sub">
                                        <li><a href="#"> Computer - Laptop</a></li>
                                    </ul>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="main_menu_inner">
                        <div class="main_menu d-none d-lg-block">
                            <ul>
                                <li class="active"><a href="index.php">Home <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu">
                                        <li><a href="index.php">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.php">shop <i class="fa fa-angle-down"></i></a>
                                    <ul class="mega_menu">
                                        <li><a href="#">Shop Layouts</a>
                                            <ul>
                                                <li><a href="shop.php">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">other Pages</a>
                                            <ul>
                                                <li><a href="portfolio.html">portfolio</a></li>
                                                <li><a href="portfolio-details.html">portfolio details</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">my account</a></li>


                                            </ul>
                                        </li>
                                        <li><a href="#">Product Types</a>
                                            <ul>
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-sidebar.html">product sidebar</a></li>
                                                <li><a href="product-gallery.html">product gallery</a></li>
                                                <li><a href="product-slider.html">product slider</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">blog <i class="fa fa-angle-down"></i></a>
                                    <ul class="mega_menu">
                                        <li><a href="#">Blog Layouts</a>
                                            <ul>

                                                <li><a href="blog-details.html">blog details</a></li>
                                                <li><a href="blog-sidebar.html">blog Sidebar</a></li>
                                                <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">blog Pages</a>
                                            <ul>
                                                <li><a href="#">Author</a></li>
                                                <li><a href="blog-sidebar.html">Category</a></li>
                                                <li><a href="#">Blog tag</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Post Formats</a>
                                            <ul>
                                                <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                <li><a href="blog-sidebar.html">Gallery Format</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu pages">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="login.php">login</a></li>
                                        <li><a href="my-account.html">my account</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>

                        </div>
                        <div class="mobile-menu d-lg-none">
                            <nav>
                                <ul>
                                    <li><a href="index.php">Home</a>
                                        <ul>
                                            <li><a href="index.php">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                            <li><a href="index-3.html">Home 3</a></li>
                                            <li><a href="index-4.html">Home 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.php">shop</a>
                                        <ul>
                                            <li><a href="#">Shop Layouts</a>
                                                <ul>
                                                    <li><a href="shop.php">Full Width</a></li>
                                                    <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                    <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                    <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a>
                                                    </li>
                                                    <li><a href="shop-list.html">List View</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">other Pages</a>
                                                <ul>
                                                    <li><a href="portfolio.html">portfolio</a></li>
                                                    <li><a href="portfolio-details.html">portfolio details</a></li>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="my-account.html">my account</a></li>


                                                </ul>
                                            </li>
                                            <li><a href="#">Product Types</a>
                                                <ul>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li><a href="product-sidebar.html">product sidebar</a></li>
                                                    <li><a href="product-gallery.html">product gallery</a></li>
                                                    <li><a href="product-slider.html">product slider</a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">blog</a>
                                        <ul>
                                            <li><a href="#">Blog Layouts</a>
                                                <ul>

                                                    <li><a href="blog-details.html">blog details</a></li>
                                                    <li><a href="blog-sidebar.html">blog Sidebar</a></li>
                                                    <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">blog Pages</a>
                                                <ul>
                                                    <li><a href="#">Author</a></li>
                                                    <li><a href="blog-sidebar.html">Category</a></li>
                                                    <li><a href="#">Blog tag</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Post Formats</a>
                                                <ul>
                                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                    <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                    <li><a href="blog-sidebar.html">Gallery Format</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="services.html">services</a></li>
                                            <li><a href="faq.html">Frequently Questions</a></li>
                                            <li><a href="login.php">login</a></li>
                                            <li><a href="my-account.html">my account</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="contact_phone">
                        <div class="contact_icone">
                            <span class="pe-7s-headphones"></span>
                        </div>
                        <div class="contact_number">
                            <p>Call Us:</p>
                            <span>(999) 1234 56789</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header bottom end-->
</header>
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

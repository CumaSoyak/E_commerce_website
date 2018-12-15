<?php
include("function.php");
$con = mysqli_connect("localhost", "root", "","eticaret");

?>

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
                            <?php
                           oturum_secenek();
                            ?>
                            <!--Burası değişecek ama önce giriş yap veya kaydol diye gelmesi lazım-->

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
                                    <a href="checkout.php">Proceed to Checkout</a>
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
                                    <a href='cart.php'>View and Edit Cart</a>
                                </div>
                            </div>
                            <!--mini cart end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
                                <?php anakategori();?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="main_menu_inner">
                        <div class="main_menu d-none d-lg-block">
                            <ul>
                                <li class="active"><a href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">shop <i class="fa fa-angle-down"></i></a>
                                    <ul class="mega_menu">
                                        <li><a href="#">Shop Layouts</a>
                                            <ul>
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
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
                                                <li><a href="blog-sidebar.html">blog  Sidebar</a></li>
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
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="my-account.html">my account</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="404.php">Error 404</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>

                        </div>
                        <div class="mobile-menu d-lg-none">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                            <li><a href="index-3.html">Home 3</a></li>
                                            <li><a href="index-4.html">Home 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">shop</a>
                                        <ul>
                                            <li><a href="#">Shop Layouts</a>
                                                <ul>
                                                    <li><a href="shop-fullwidth.html">Full Width</a></li>
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
                                    <li><a href="blog.html">blog</a>
                                        <ul>
                                            <li><a href="#">Blog Layouts</a>
                                                <ul>

                                                    <li><a href="blog-details.html">blog details</a></li>
                                                    <li><a href="blog-sidebar.html">blog  Sidebar</a></li>
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
                                            <li><a href="login.html">login</a></li>
                                            <li><a href="my-account.html">my account</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="404.php">Error 404</a></li>
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

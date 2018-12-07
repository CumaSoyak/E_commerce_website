<?php
?>
<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 18:00:17 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cigar - login page</title>
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
            <?php include 'header.php';?>
            <!--header area end-->
            
            <!--breadcrumbs area start-->
            <div class="breadcrumbs_area commun_bread">
                <div class="container">   
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb_content">
                                <h3>login</h3>
                                <ul>
                                    <li><a href="index.php">home</a></li>
                                    <li><i class="fa fa-angle-right"></i></li>
                                    <li>login</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>         
            </div>
            <!--breadcrumbs area end-->
      
            <!-- customer login start -->
            <div class="customer_login">
                <div class="container">
                    <div class="row">
                       <!--login area start-->
                        <div class="col-lg-6 col-md-6">
                            <div class="account_form login">
                                <h2>login</h2>
                                <form action="#">
                                    <p>   
                                        <label>Username or email <span>*</span></label>
                                        <input type="text">
                                     </p>
                                     <p>   
                                        <label>Passwords <span>*</span></label>
                                        <input type="password">
                                     </p>   
                                    <div class="login_submit">
                                        <button type="submit">login</button>
                                        <label for="remember">
                                            <input id="remember" type="checkbox">
                                            Remember me
                                        </label>
                                        <a href="#">Lost your password?</a>
                                    </div>

                                </form>
                             </div>    
                        </div>
                        <!--login area start-->

                        <!--register area start-->
                        <div class="col-lg-6 col-md-6">
                            <div class="account_form register">
                                <h2>Register</h2>
                                <form action="register.php" method="post">
                                    <p>   
                                        <label>Email address  <span>*</span></label>
                                        <input type="email" name="email">
                                     </p>
                                     <p>   
                                        <label>Passwords <span>*</span></label>
                                        <input type="password" name="parola">
                                     </p>
                                    <div class="login_submit">
                                        <button type="submit" name="register">Register</button>
                                    </div>
                                </form>
                            </div>    
                        </div>
                        <!--register area end-->
                    </div>
                </div>    
            </div>
            <!-- customer login end -->

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
                                        <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
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
                                                        <a class="instagram_popup" href="assets/img/instagram/instagram1.jpg"><i class="ion-social-instagram"></i></a>
                                                    </div>
                                                </div>
                                                <div class="single_instagram">
                                                    <a href="#"><img src="assets/img/instagram/instagram2.jpg" alt=""></a>
                                                    <div class="instagram_icone">
                                                        <a class="instagram_popup" href="assets/img/instagram/instagram2.jpg"><i class="ion-social-instagram"></i></a>
                                                    </div>
                                                </div>
                                                <div class="single_instagram">
                                                    <a href="#"><img src="assets/img/instagram/instagram3.jpg" alt=""></a>
                                                    <div class="instagram_icone">
                                                        <a class="instagram_popup" href="assets/img/instagram/instagram3.jpg"><i class="ion-social-instagram"></i></a>
                                                    </div>
                                                </div>
                                                <div class="single_instagram">
                                                    <a href="#"><img src="assets/img/instagram/instagram4.jpg" alt=""></a>
                                                    <div class="instagram_icone">
                                                        <a class="instagram_popup" href="assets/img/instagram/instagram4.jpg"><i class="ion-social-instagram"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="instagram_list">
                                                <div class="single_instagram">
                                                    <a href="#"><img src="assets/img/instagram/instagram5.jpg" alt=""></a>
                                                    <div class="instagram_icone">
                                                        <a class="instagram_popup" href="assets/img/instagram/instagram5.jpg"><i class="ion-social-instagram"></i></a>
                                                    </div>
                                                </div>
                                                <div class="single_instagram">
                                                    <a href="#"><img src="assets/img/instagram/instagram6.jpg" alt=""></a>
                                                    <div class="instagram_icone">
                                                        <a class="instagram_popup" href="assets/img/instagram/instagram6.jpg"><i class="ion-social-instagram"></i></a>
                                                    </div>
                                                </div>
                                                <div class="single_instagram">
                                                    <a href="#"><img src="assets/img/instagram/instagram7.jpg" alt=""></a>
                                                    <div class="instagram_icone">
                                                        <a class="instagram_popup" href="assets/img/instagram/instagram7.jpg"><i class="ion-social-instagram"></i></a>
                                                    </div>
                                                </div>
                                                <div class="single_instagram">
                                                    <a href="#"><img src="assets/img/instagram/instagram8.jpg" alt=""></a>
                                                    <div class="instagram_icone">
                                                        <a class="instagram_popup" href="assets/img/instagram/instagram8.jpg"><i class="ion-social-instagram"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="instagram_items">
                                            <div class="instagram_list">
                                                <div class="single_instagram">
                                                    <a href="#"><img src="assets/img/instagram/instagram1.jpg" alt=""></a>
                                                    <div class="instagram_icone">
                                                        <a class="instagram_popup" href="assets/img/instagram/instagram1.jpg"><i class="ion-social-instagram"></i></a>
                                                    </div>
                                                    
                                                </div>
                                                <div class="single_instagram">
                                                    <a href="#"><img src="assets/img/instagram/instagram2.jpg" alt=""></a>
                                                    <div class="instagram_icone">
                                                        <a class="instagram_popup" href="assets/img/instagram/instagram2.jpg"><i class="ion-social-instagram"></i></a>
                                                    </div>
                                                </div>
                                                <div class="single_instagram">
                                                    <a href="#"><img src="assets/img/instagram/instagram3.jpg" alt=""></a>
                                                    <div class="instagram_icone">
                                                        <a class="instagram_popup" href="assets/img/instagram/instagram3.jpg"><i class="ion-social-instagram"></i></a>
                                                    </div>
                                                </div>
                                                <div class="single_instagram">
                                                    <a href="#"><img src="assets/img/instagram/instagram4.jpg" alt=""></a>
                                                    <div class="instagram_icone">
                                                        <a class="instagram_popup" href="assets/img/instagram/instagram4.jpg"><i class="ion-social-instagram"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="instagram_list">
                                                <div class="single_instagram">
                                                    <a href="#"><img src="assets/img/instagram/instagram5.jpg" alt=""></a>
                                                    <div class="instagram_icone">
                                                        <a class="instagram_popup" href="assets/img/instagram/instagram5.jpg"><i class="ion-social-instagram"></i></a>
                                                    </div>
                                                </div>
                                                <div class="single_instagram">
                                                    <a href="#"><img src="assets/img/instagram/instagram6.jpg" alt=""></a>
                                                    <div class="instagram_icone">
                                                        <a class="instagram_popup" href="assets/img/instagram/instagram6.jpg"><i class="ion-social-instagram"></i></a>
                                                    </div>
                                                </div>
                                                <div class="single_instagram">
                                                    <a href="#"><img src="assets/img/instagram/instagram7.jpg" alt=""></a>
                                                    <div class="instagram_icone">
                                                        <a class="instagram_popup" href="assets/img/instagram/instagram7.jpg"><i class="ion-social-instagram"></i></a>
                                                    </div>
                                                </div>
                                                <div class="single_instagram">
                                                    <a href="#"><img src="assets/img/instagram/instagram8.jpg" alt=""></a>
                                                    <div class="instagram_icone">
                                                        <a class="instagram_popup" href="assets/img/instagram/instagram8.jpg"><i class="ion-social-instagram"></i></a>
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

		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 18:00:17 GMT -->
</html>

<?php
session_start();
ob_start();

?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 17:57:08 GMT -->
<?php include  "head.php"; ?>
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
                                <h3>checkout</h3>
                                <ul>
                                    <li><a href="index.php">home</a></li>
                                    <li><i class="fa fa-angle-right"></i></li>
                                    <li>checkout</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>         
            </div>
            <!--breadcrumbs area end-->
      
             <!--Checkout page section-->
            <div class="Checkout_section">
               <div class="container">
                    <div class="row">

                    <div class="checkout_form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">

                                <?php odeme() ?>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <?php total_cek(); ?>
                            </div>
                        </div> 
                    </div> 
                </div>       
            </div>
            <!--Checkout page section end-->
            
              <!--shipping area start-->
            <?php include("bottom_menu.php"); ?>
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
            
  

    </body>

<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 17:57:10 GMT -->
</html>
<?php
ob_get_flush();
?>
<?php
session_start();
ob_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 17:58:47 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cigar - product details</title>
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
            <div class="breadcrumbs_area">
                <div class="container">
                    <div class="breadcrumbs_inner">
                        <div class="row">
                            <div class="col-12">
                                <div class="breadcrumb_content">
                                    <h3>product details</h3>
                                    <ul>
                                        <li><a href="index.php">home</a></li>
                                        <li><i class="fa fa-angle-right"></i></li>
                                        <li>product details</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs area end-->


            <?php detay();?>
            
             <!--product info start-->
             <!--product info end-->
        
            <!--product area start-->
          <!--  <div class="produtc_area related_Product">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="consoles_product_title">
                                <h3>Related Products</h3>
                            </div>
                        </div>
                    </div>
                   <div class="row">
                        <div class="product_active owl-carousel">
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                         <a href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                         <div class="btn_quickview">
                                             <a href="#" data-toggle="modal" data-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>
                                    </div>
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
                                        <h3><a href="product-details.html">Nonstick Dishwasher PFOA</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$23.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="#" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="#" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="#" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                         <a href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                         <div class="btn_quickview">
                                             <a href="#" data-toggle="modal" data-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Cutlery Knife Set</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$20.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="#" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="#" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="#" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                         <a href="detay.php"><img src="assets/img/product/product8.jpg" alt=""></a>
                                         <div class="btn_quickview">
                                             <a href="#" data-toggle="modal" data-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Aicok Stand Mixet</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$28.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="#" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="#" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="#" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                         <a href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                         <div class="btn_quickview">
                                             <a href="#" data-toggle="modal" data-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="detay.php">Cuisinart DCC-3200</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$27.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="#" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="#" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="#" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                        <div class="btn_quickview">
                                             <a href="#" data-toggle="modal" data-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>

                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Classic 17-Piece Tool	</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$24.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="#" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="#" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="#" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                   </div>

                </div>
            </div> -->
            <!--product area end-->



            <!--brand area start-->
             <!--brand area end-->
            
           
            
              <!--shipping area start-->
            <?php include ("bottom_menu.php");?>
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
            
           
            <!-- modal area start-->
            <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <div class="modal_tab">  
                                            <div class="tab-content product-details-large">
                                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="assets/img/product/product44.jpg" alt=""></a>    
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab2" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="assets/img/product/product45.jpg" alt=""></a>    
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab3" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="assets/img/product/product46.jpg" alt=""></a>    
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab4" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="assets/img/product/product47.jpg" alt=""></a>    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal_tab_button">    
                                                <ul class="nav product_navactive owl-carousel" role="tablist">
                                                    <li >
                                                        <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/cart/cart5.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                         <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/cart/cart6.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                       <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/cart/cart7.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                       <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/cart/cart8.jpg" alt=""></a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>    
                                        </div>  
                                    </div> 
                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                        <div class="modal_right">
                                            <div class="modal_title mb-10">
                                                <h2>Handbag feugiat</h2> 
                                            </div>
                                            <div class="modal_price mb-10">
                                                <span class="new_price">$64.99</span>    
                                                <span class="old_price" >$78.99</span>    
                                            </div>
                                            <div class="modal_content mb-10">
                                                <p>Short-sleeved blouse with feminine draped sleeve detail.</p>    
                                            </div>
                                            <div class="modal_size mb-15">
                                               <h2>size</h2>
                                                <ul>
                                                    <li><a href="#">s</a></li>
                                                    <li><a href="#">m</a></li>
                                                    <li><a href="#">l</a></li>
                                                    <li><a href="#">xl</a></li>
                                                    <li><a href="#">xxl</a></li>
                                                </ul>
                                            </div>
                                            <div class="modal_add_to_cart mb-15">
                                                <form action="#">
                                                    <input min="0" max="100" step="2" value="1" type="number">
                                                    <button type="submit">add to cart</button>
                                                </form>
                                            </div>   
                                            <div class="modal_description mb-15">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>    
                                            </div> 
                                            <div class="modal_social">
                                                <h2>Share this product</h2>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
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
            <!-- modal area start-->

    
		

    </body>

<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 17:58:51 GMT -->
</html>
<?php ob_end_flush(); ?>

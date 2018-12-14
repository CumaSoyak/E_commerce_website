<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 17:58:47 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cigar - cart page</title>
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
                                <h3>cart</h3>
                                <ul>
                                    <li><a href="index.php">home</a></li>
                                    <li><i class="fa fa-angle-right"></i></li>
                                    <li>cart</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>         
            </div>
            <!--breadcrumbs area end-->
      
             <!--shopping cart area start -->
            <div class="shopping_cart_area">
                <div class="container">  
                    <form action="#"> 
                        <div class="row">
                            <div class="col-12">
                                <div class="table_desc">
                                    <div class="cart_page table-responsive">
                                        <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                            <td class="product_thumb"><a href="#"><img src="assets/img/cart/cart6.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">Handbag fringilla</a></td>
                                            <td class="product-price">£65.00</td>
                                            <td class="product_quantity"><input min="0" max="100" value="1" type="number"></td>
                                            <td class="product_total">£130.00</td>


                                        </tr>

                                        <tr>
                                           <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                            <td class="product_thumb"><a href="#"><img src="assets/img/cart/cart7.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">Handbags justo</a></td>
                                            <td class="product-price">£90.00</td>
                                            <td class="product_quantity"><input min="0" max="100" value="1" type="number"></td>
                                            <td class="product_total">£180.00</td>


                                        </tr>
                                        <tr>
                                           <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                            <td class="product_thumb"><a href="#"><img src="assets/img/cart/cart8.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">Handbag elit</a></td>
                                            <td class="product-price">£80.00</td>
                                            <td class="product_quantity"><input min="0" max="100" value="1" type="number"></td>
                                            <td class="product_total">£160.00</td>


                                        </tr>

                                    </tbody>
                                </table>   
                                    </div>  
                                    <div class="cart_submit">
                                        <button type="submit">update cart</button>
                                    </div>      
                                </div>
                             </div>
                         </div>
                         <!--coupon code area start-->
                        <div class="coupon_area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="coupon_code left">
                                        <h3>Coupon</h3>
                                        <div class="coupon_inner">   
                                            <p>Enter your coupon code if you have one.</p>                                
                                            <input placeholder="Coupon code" type="text">
                                            <button type="submit">Apply coupon</button>
                                        </div>    
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="coupon_code right">
                                        <h3>Cart Totals</h3>
                                        <div class="coupon_inner">
                                           <div class="cart_subtotal">
                                               <p>Subtotal</p>
                                               <p class="cart_amount">£215.00</p>
                                           </div>
                                           <div class="cart_subtotal ">
                                               <p>Shipping</p>
                                               <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                                           </div>
                                           <a href="#">Calculate shipping</a>

                                           <div class="cart_subtotal">
                                               <p>Total</p>
                                               <p class="cart_amount">£215.00</p>
                                           </div>
                                           <div class="checkout_btn">
                                               <a href="#">Proceed to Checkout</a>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--coupon code area end-->
                    </form> 
                </div>     
            </div>
             <!--shopping cart area end -->
            
              <!--shipping area start-->
            <?php include("bottom_menu.php");?>
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

<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 17:58:47 GMT -->
</html>

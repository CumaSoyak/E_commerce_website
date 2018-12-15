<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 17:57:08 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cigar - checkout page</title>
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
                       <div class="col-12">
                            <div class="user-actions mb-20">
                                <h3> 
                                    <i class="fa fa-file-o" aria-hidden="true"></i>
                                    Returning customer?
                                    <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_login" aria-expanded="true">Click here to login</a>     

                                </h3>
                                 <div id="checkout_login" class="collapse" data-parent="#accordion">
                                    <div class="checkout_info">
                                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>  
                                        <form action="#">  
                                            <div class="form_group mb-20">
                                                <label>Username or email <span>*</span></label>
                                                <input type="text">     
                                            </div>
                                            <div class="form_group mb-25">
                                                <label>Password  <span>*</span></label>
                                                <input type="text">     
                                            </div> 
                                            <div class="form_group group_3 ">
                                                <button type="submit">Login</button>
                                                <label for="remember_box">
                                                    <input id="remember_box" type="checkbox">
                                                    <span> Remember me </span>
                                                </label>     
                                            </div>
                                            <a href="#">Lost your password?</a>
                                        </form>          
                                    </div>
                                </div>    
                            </div>
                            <div class="user-actions mb-20">
                                <h3> 
                                    <i class="fa fa-file-o" aria-hidden="true"></i>
                                    Returning customer?
                                    <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_coupon" aria-expanded="true">Click here to enter your code</a>     

                                </h3>
                                 <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                                    <div class="checkout_info">
                                        <form action="#">
                                            <input placeholder="Coupon code" type="text">
                                            <button type="submit">Apply coupon</button>
                                        </form>
                                    </div>
                                </div>    
                            </div>    
                       </div>
                    </div>
                    <div class="checkout_form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <form action="#">
                                    <h3>Billing Details</h3>
                                    <div class="row">

                                        <div class="col-lg-6 mb-20">
                                            <label>First Name <span>*</span></label>
                                            <input type="text">    
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label>Last Name  <span>*</span></label>
                                            <input type="text"> 
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Company Name</label>
                                            <input type="text">     
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label for="country">country <span>*</span></label>
                                            <select name="cuntry" id="country"> 
                                                <option value="2">bangladesh</option>      
                                                <option value="3">Algeria</option> 
                                                <option value="4">Afghanistan</option>    
                                                <option value="5">Ghana</option>    
                                                <option value="6">Albania</option>    
                                                <option value="7">Bahrain</option>    
                                                <option value="8">Colombia</option>    
                                                <option value="9">Dominican Republic</option>   

                                            </select>
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Street address  <span>*</span></label>
                                            <input placeholder="House number and street name" type="text">     
                                        </div>
                                        <div class="col-12 mb-20">
                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text">     
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Town / City <span>*</span></label>
                                            <input  type="text">    
                                        </div> 
                                         <div class="col-12 mb-20">
                                            <label>State / County <span>*</span></label>
                                            <input type="text">    
                                        </div> 
                                        <div class="col-lg-6 mb-20">
                                            <label>Phone<span>*</span></label>
                                            <input type="text"> 

                                        </div> 
                                         <div class="col-lg-6 mb-20">
                                            <label> Email Address   <span>*</span></label>
                                              <input type="text"> 

                                        </div> 
                                        <div class="col-12 mb-20">
                                            <input id="account" type="checkbox" data-target="createp_account" />
                                            <label for="account" data-toggle="collapse" data-target="#collapseOne" aria-controls="collapseOne">Create an account?</label>

                                            <div id="collapseOne" class="collapse one" data-parent="#accordion">
                                                <div class="card-body1">
                                                   <label> Account password   <span>*</span></label>
                                                    <input placeholder="password" type="password">  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <input id="address" type="checkbox" data-target="createp_account" />
                                            <label class="righ_0" for="address" data-toggle="collapse" data-target="#collapsetwo" aria-controls="collapseOne">Ship to a different address?</label>

                                            <div id="collapsetwo" class="collapse one" data-parent="#accordion">
                                               <div class="row">
                                                    <div class="col-lg-6 mb-20">
                                                        <label>First Name <span>*</span></label>
                                                        <input type="text">    
                                                    </div>
                                                    <div class="col-lg-6 mb-20">
                                                        <label>Last Name  <span>*</span></label>
                                                        <input type="text"> 
                                                    </div>
                                                    <div class="col-12 mb-20">
                                                        <label>Company Name</label>
                                                        <input type="text">     
                                                    </div>
                                                    <div class="col-12 mb-20">
                                                        <div class="select_form_select">
                                                            <label for="countru_name">country <span>*</span></label>
                                                            <select name="cuntry" id="countru_name"> 
                                                                <option value="2">bangladesh</option>      
                                                                <option value="3">Algeria</option> 
                                                                <option value="4">Afghanistan</option>    
                                                                <option value="5">Ghana</option>    
                                                                <option value="6">Albania</option>    
                                                                <option value="7">Bahrain</option>    
                                                                <option value="8">Colombia</option>    
                                                                <option value="9">Dominican Republic</option>   

                                                            </select>
                                                        </div> 
                                                    </div>

                                                    <div class="col-12 mb-20">
                                                        <label>Street address  <span>*</span></label>
                                                        <input placeholder="House number and street name" type="text">     
                                                    </div>
                                                    <div class="col-12 mb-20">
                                                        <input placeholder="Apartment, suite, unit etc. (optional)" type="text">     
                                                    </div>
                                                    <div class="col-12 mb-20">
                                                        <label>Town / City <span>*</span></label>
                                                        <input  type="text">    
                                                    </div> 
                                                     <div class="col-12 mb-20">
                                                        <label>State / County <span>*</span></label>
                                                        <input type="text">    
                                                    </div> 
                                                    <div class="col-lg-6 mb-20">
                                                        <label>Phone<span>*</span></label>
                                                        <input type="text"> 

                                                    </div> 
                                                     <div class="col-lg-6">
                                                        <label> Email Address   <span>*</span></label>
                                                          <input type="text"> 

                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="order-notes">
                                                 <label for="order_note">Order Notes</label>
                                                <textarea id="order_note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                            </div>    
                                        </div>     	    	    	    	    	    	    
                                    </div>
                                </form>    
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <form action="#">    
                                    <h3>Your order</h3> 
                                    <div class="order_table table-responsive mb-30">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> Handbag  fringilla <strong> × 2</strong></td>
                                                    <td> $165.00</td>
                                                </tr>
                                                <tr>
                                                    <td>  Handbag  justo	 <strong> × 2</strong></td>
                                                    <td> $50.00</td>
                                                </tr>
                                                <tr>
                                                    <td>  Handbag elit	<strong> × 2</strong></td>
                                                    <td> $50.00</td>
                                                </tr>
                                                <tr>
                                                    <td> Handbag Rutrum	 <strong> × 1</strong></td>
                                                    <td> $50.00</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Cart Subtotal</th>
                                                    <td>$215.00</td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping</th>
                                                    <td><strong>$5.00</strong></td>
                                                </tr>
                                                <tr class="order_total">
                                                    <th>Order Total</th>
                                                    <td><strong>$220.00</strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>     
                                    </div>
                                    <div class="payment_method">
                                       <div class="panel-default">
                                            <input id="payment" name="check_method" type="radio" data-target="createp_account" />
                                            <label for="payment" data-toggle="collapse" data-target="#method" aria-controls="method">Create an account?</label>

                                            <div id="method" class="collapse one" data-parent="#accordion">
                                                <div class="card-body1">
                                                   <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div> 
                                       <div class="panel-default">
                                            <input id="payment_defult" name="check_method" type="radio" data-target="createp_account" />
                                            <label for="payment_defult" data-toggle="collapse" data-target="#collapsedefult" aria-controls="collapsedefult">PayPal <img src="assets/img/visha/papyel.png" alt=""></label>

                                            <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                                <div class="card-body1">
                                                   <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order_button">
                                            <button  type="submit">Proceed to PayPal</button> 
                                        </div>    
                                    </div> 
                                </form>         
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

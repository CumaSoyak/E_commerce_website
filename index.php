<?php
session_start();

?>
<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 17:54:41 GMT -->
<head>
    <?php include("head.php");?>
</head>
<body>
<!-- Add your site or application content here -->


<!--header area start-->
<?php include 'header.php'; ?>
<!--header area end-->


<!--slider area start-->
<div class="slider_area owl-carousel">
    <?php
    slider();
     ?>
</div>

<!--slider area end-->
<!--shipping area start-->
<div class="shipping_area">
    <div class="container">
        <div class="shipping_inner">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <span class="pe-7s-piggy"></span>
                        </div>
                        <div class="shipping_content">
                            <h3>Dünya çapında ücretsiz kargo</h3>
                            <p>Hemen Alışverişe Başla</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <span class="pe-7s-rocket"></span>
                        </div>
                        <div class="shipping_content">
                            <h3>Hızlı ve güvenilir alışveriş</h3>
                            <p>Hemen Alışverişe Başla</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_shipping column_3">
                        <div class="shipping_icone">
                            <span class="pe-7s-help2"></span>
                        </div>
                        <div class="shipping_content">
                            <h3>Teslimat ve iadede güvenilirlik</h3>
                            <p>Hemen Alışverişe Başla</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--shipping area end-->

<!--categories banner start-->

<!--product area start-->
<div class="produtc_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_tab_button">
                    <ul class="nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#Products" role="tab" aria-controls="Products"
                               aria-selected="true"> New Products</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="Products" role="tabpanel">
                <div class="row">
                    <div class="product_active owl-carousel">
                    <?php anasayfa_alisveris(); ?>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!--product area end-->


<!--consoles product start-->
<!--consoles product end-->

<!--discount banner srart-->
<div class="discount_banner section_2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="discount_banner_thumb">
                    <a href="#"><img src="assets/img/banner/bgbanner6.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--discount banner end-->

<!--custom product end-->

<!--brand area start-->

<?php include 'bottom_menu.php';?>



<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
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
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
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
                                        <li>
                                            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"
                                               aria-controls="tab1" aria-selected="false"><img
                                                        src="assets/img/cart/cart5.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                               aria-controls="tab2" aria-selected="false"><img
                                                        src="assets/img/cart/cart6.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab"
                                               aria-controls="tab3" aria-selected="false"><img
                                                        src="assets/img/cart/cart7.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab4" role="tab"
                                               aria-controls="tab4" aria-selected="false"><img
                                                        src="assets/img/cart/cart8.jpg" alt=""></a>
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
                                    <span class="old_price">$78.99</span>
                                </div>
                                <div class="modal_content mb-10">
                                    <p>Short-sleeved blouse with feminine draped sleeve detail.</p>
                                </div>
                                <div class="modal_size mb-15">
                                    <h2>size</h2>
                                    <ul>
                                        <li><a href="#l">s</a></li>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
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

<!--news letter popup start-->
<!--  popup engelledim <div class="newsletter_popup">
      <div class="popup_container">
          <div class="popup_close">
              <span>close</span>
          </div>
          <div class="popup_text">
              <h2>Subscribe to our Newsletter</h2>
              <p>Subscribe to the Pebona mailing list to receive updates on new arrivals, special offers and other discount information.</p>
              <form action="#">
                  <input placeholder="Enter your email address" type="text">
                  <button type="submit">Subscribe</button>
              </form>
          </div>
          <div class="popup_footer">
              <form action="#">
                  <input id="check_newsletter" class="form_check" type="checkbox">
                  <span class="checkmark"></span>
                  <label class="form_check" for="check_newsletter">Don't show this popup again</label>
              </form>
          </div>
      </div>
  </div>  -->
<!--news letter popup start-->


</body>

<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 17:55:44 GMT -->
</html>

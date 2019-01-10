<?php
session_start();
ob_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 17:58:47 GMT -->
<head>
         <?php include ("head.php"); ?>
</head>
<body>
<!-- Add your site or application content here -->


<!--header area start-->
<?php include 'header.php'; ?>
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
                                    <th class="product_remove">Sil</th>
                                    <th class="product_thumb">Fotoğraf</th>
                                    <th class="product_name">Ürün</th>
                                    <th class="product-price">Fiyat</th>
                                    <th class="product_quantity">Adet</th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php cart(); ?>
                                </tbody>
                            </table>
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
                            <h3>Sepet Toplam</h3>
                            <div class="coupon_inner">
                                <?php sepet_fiyathesapla(); ?>
                               <?php alisveris_kontrol(); ?>
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
<?php include("bottom_menu.php"); ?>
<!--shipping area end-->

<!--footer area start-->
 <!--footer area end-->


<!-- all js here
<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script> -->
</body>

<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 17:58:47 GMT -->
</html>
<?php ob_end_flush(); ?>
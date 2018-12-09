<?php
include("connect.php");
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $parola = $_POST['parola'];
    if (empty($email) || empty($parola)) {
        echo "<script>alert('Alanları Boş geçmeyiniz')</script>";

    } else {
        $sql = "INSERT INTO users(email,parola) VALUE('$email','$parola')";
        $succes = mysqli_query($con, $sql);
        header('Location: index.php');
    }
}


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
            <?php include 'login.php';?>
            <!--login area start-->

            <!--register area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form register">
                    <h2>Register</h2>
                    <form action="register.php" method="post">
                        <p>
                            <label>Email address <span>*</span></label>
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
<?php include 'bottom_menu.php';?>

<!--shipping area start-->

</body>

<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 18:00:17 GMT -->
</html>

<?php
session_start();
include("connect.php");
global $bilgi_email;

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $parola = $_POST['parola'];
    if (empty($email) || empty($parola)) {
        $bilgi_email = "*Boş geçmeyiniz alanları";

    } else {
        //$email = $con->escape_string($_POST['email']);
        $sonuc = $con->query("SELECT *FROM adminhesap WHERE email='$email' AND parola='$parola' ");
        $user = mysqli_fetch_assoc($sonuc);
        $usercount = mysqli_num_rows($sonuc);
        echo $usercount;
        if ($user['email'] == $email && $user['parola'] == $parola) {

            $_SESSION["kayit"] = $user['id'];
            header('Location: admin.php');


        } else {
            $bilgi_email = "* E-mail veya parola yanlıştır";

        }


    }
}


?>


<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 18:00:17 GMT -->
<head>
    <?php
    include("head.php");
    ?>
</head>
<body>
<!-- Add your site or application content here -->


<!--header area start-->

<!--header area end-->

<!--breadcrumbs area start-->

<!--breadcrumbs area end-->

<!-- customer login start -->
<div class="customer_login">
    <div class="container">
        <div class="row">
            <!--login area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form login">
                    <h2>Admin Giriş</h2>
                    <h6 style="color:#cd0a0a"><?php echo "$bilgi_email"; ?></h6>
                    <form action="adminhesap.php" method="post">
                        <p>
                            <label>Username or email <span>*</span></label>
                            <input type="text" name="email">
                        </p>
                        <p>
                            <label>Passwords <span>*</span></label>
                            <input type="password" name="parola">
                        </p>
                        <div class="login_submit">
                            <button type="submit" name="login">login</button>
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

            <!--register area end-->
        </div>
    </div>
</div>
<!-- customer login end -->

<!--shipping area start-->

</body>

<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 18:00:17 GMT -->
</html>

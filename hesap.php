<?php
include("connect.php");
global $bilgi_email;
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $parola = $_POST['parola'];
    $username = $_POST['username'];
    if (empty($email) || empty($parola)) {
        echo "<script>alert('Alanları Boş geçmeyiniz')</script>";

    } else {
        $sql = "INSERT INTO users(email,parola) VALUE('$email','$parola')";
        $succes = mysqli_query($con, $sql);
        session_start();
        $_SESSION["username"]=$username;
        header('Location: index.php');
    }
}
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $parola = $_POST['parola'];
    if (empty($email) || empty($parola)) {
        $bilgi_email="*Boş geçmeyiniz alanları";

    } else {
        //$email = $con->escape_string($_POST['email']);
        $sonuc = $con->query("SELECT *FROM users WHERE email='$email' AND parola='$parola' ");
        $user = mysqli_fetch_assoc($sonuc);
        $usercount = mysqli_num_rows($sonuc);echo $usercount;

            if ($user['email']==$email&&$user['parola']==$parola){
                header('Location: index.php');

            }
            else{
                $bilgi_email="* E-mail veya parola yanlıştır";

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
                     <h6 style="color:#cd0a0a"><?php echo "$bilgi_email"; ?></h6>
                    <form action="hesap.php" method="post">
                        <p>
                            <label>Username or email <span>*</span></label>
                            <input type="text" name="email">
                        </p>
                        <p>
                            <label>Passwords <span>*</span></label>
                            <input type="password" name="parola"  >
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
            <div class="col-lg-6 col-md-6">
                <div class="account_form register">
                    <h2>Register</h2>
                    <form action="hesap.php" method="post">
                        <p>
                            <label>User name <span>*</span></label>
                            <input type="text" name="username">
                        </p>
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

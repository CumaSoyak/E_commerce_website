<?php
include("connect.php");
//$email((isset($_POST['email'])) ? sanitize($_POST['email']) : '');
//$parola((isset($_POST['parola'])) ? sanitize($_POST['parola']) : '');
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $parola = $_POST['parola'];
    if (empty($email) || empty($parola)) {
        echo "<script>alert('Alanları Boş geçmeyiniz')</script>";

    } else {
        //$email = $con->escape_string($_POST['email']);
        $sonuc = $con->query("SELECT *FROM users WHERE email='$email'");
        $user = mysqli_fetch_assoc($sonuc);
        $usercount = mysqli_num_rows($sonuc);echo $usercount;
        if ($usercount < 1) {
            $_SESSION['message'] = "user asdasdas sda";
            header("Location: blog.php");
        } else {
            if (password_verify($_POST['parola'], $user['parola'])) {
                header('Location: index.php');

            }
            else{
                echo "hatalı";
            }


        }
    }
}

?>
<div class="col-lg-6 col-md-6">
    <div class="account_form login">
        <h2>login</h2>
        <form action="register.php" method="post">
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
<?php
session_start();

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php include("head.php"); ?>
</head>
<body>
<?php include 'function.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-6" style="margin-bottom:80px; ">
            <?php urun_kayit(); ?>
        </div>
        <div class="col-sm-2 col-md-2">
         </div>
        <div class="col-sm-4 col-md-4">
           <?php biten_urunler(); ?>
        </div>
</div>
</body>

</html>

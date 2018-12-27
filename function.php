<?php
$con = mysqli_connect("localhost", "root", "", "eticaret");
function anakategori()
{
    $con = mysqli_connect("localhost", "root", "", "eticaret");
    $select = mysqli_query($con, "SELECT *FROM ana_kategoriler");
    while ($cekilen_veri = mysqli_fetch_assoc($select)) {
        $ana_kategori_id = $cekilen_veri['ana_kategori_id'];
        $ana_kategori_title = $cekilen_veri['ana_kategori_title'];
        $ana_kategori_resim = $cekilen_veri['ana_kategori_resim'];
        echo "
                                <li class=\"categorie_list\"><a href=\"#\">$ana_kategori_title<i class=\"fa fa-angle-right\"></i></a>
                                    <ul class=\"categories_mega_menu\">
                                        <li> 
                                            <div class=\"categorie_sub_menu\">
                                                <ul>
                                                ";
        alt_kategori($ana_kategori_id);
        echo "
                                                </ul>
                                            </div>
                                        </li>
                                        <li><img src='assets/img/categorie/$ana_kategori_resim' alt=\"\"></li>
                                       
                                    </ul>
                                </li> 
              ";
    }
}

function hata()
{
    $al = $_GET['alt_kategori_id'];
    if ($al == null) {
        header('Location: 404.php');
    }
}

function alt_kategori($parent_id)
{
    $con = mysqli_connect("localhost", "root", "", "eticaret");
    $selecet = mysqli_query($con, "SELECT * FROM  alt_kategoriler  WHERE $parent_id=parent_kategori_id");
    if (mysqli_num_rows($selecet) != 0) {
        while ($cekilen_veri = mysqli_fetch_assoc($selecet)) {
            $alt_kategori_id = $cekilen_veri['alt_kategori_id'];
            $kategori_title = $cekilen_veri['kategori_title'];
            echo "                                 
                               <li><a href='shop.php?alt_kategori_id=$alt_kategori_id'>$kategori_title</a></li>    
                                ";
        }
    }
    return $alt_kategori_id;
}

function urun_goster()
{
    ob_start();
//unset($_SESSION['sepet']);

    if (isset($_POST["eklesepet"])) {

        $item_array = array(
            'urunler_id' => $_GET["urunler_id"],
            'urunler_title' => $_GET["urunler_title"],
            'urunler_fiyat' => $_GET["urunler_fiyat"],
            'urunler_resim' => $_GET["urunler_resim"],
            'alt_kategori_id' => $_GET["alt_kategori_id"]

        );
        //$count = count($_SESSION["sepet"]);
        // print_r($item_array);
        $_SESSION["sepet"][$_GET['urunler_id']] = $item_array;


    }
    $al = $_GET['alt_kategori_id'];
    $con = mysqli_connect("localhost", "root", "", "eticaret");
    $al_kategori = " SELECT * FROM urunler as ur INNER JOIN beden as be WHERE $al=parent_altkategori_id AND ur.urunler_id=be.parent_urun_id";
    $sonuc = mysqli_query($con, $al_kategori);


    while ($cekilen_veri = mysqli_fetch_array($sonuc)) {


//TODO id çekilecek
        $urunler_id = $cekilen_veri['urunler_id'];
        $urunler_title = $cekilen_veri['urunler_title'];
        $urunler_desc = $cekilen_veri['urunler_desc'];
        $urunler_resim = $cekilen_veri['urunler_resim'];
        $urunler_resim_1 = $cekilen_veri['urunler_resim_1'];
        $urunler_resim_2 = $cekilen_veri['urunler_resim_2'];
        $urunler_fiyat = $cekilen_veri['urunler_fiyat'];
        $urunler_size = $cekilen_veri['urunler_size'];
        $urunler_oy = $cekilen_veri['urunler_oy'];
        $XS = $cekilen_veri['XS'];
        $M = $cekilen_veri['M'];

        echo "<form class=\"col-lg-4 col-md-6\" action='shop.php?alt_kategori_id=$al' method='post'>
           <div  >
                                    <div class=\"single_product\">
                                        <div class=\"product_thumb\">
                                            <a href='detay.php?urunler_id=$urunler_id'>
                                            <img   src='assets/img/product/$urunler_resim'></a>
                                            <div class=\"btn_quickview\">
                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box$urunler_id\"
                                                   title=\"Quick View\"><i class=\"ion-ios-eye\"></i></a>
                                            </div>
                                        </div>
                                        <div class=\"product_content\">
                                            <div class=\"product_ratting\">
                                                <ul>
                                                       ";
        urun_oy_goster($urunler_oy);
        echo "                                               
                                                        </ul>
                                            </div>
                                            <h3><a href=\"product-details.html\">$urunler_title</a></h3>
                                            <div class=\"product_price\">
                                                <span class=\"current_price\" >$urunler_fiyat TL</span>
                                            </div>
                                            <div class=\"product_action\">
                                               <!-- <ul>
                                               
                                                    <li class=\"product_cart\"><a href=\"#\" title=\"Ekle Sepete\" name='eklesepete'>Ekle
                                                             </a></li>
                                                    <li class=\"add_links\"><a href=\"#\" title=\"Add to Wishlist\"><i
                                                                    class=\"ion-ios-heart-outline\"></i></a></li>
                                                    <li class=\"add_links\"><a href=\"#\" title=\"Add to Compare\"><i
                                                                    class=\"ion-loop\"></i></a></li>
                                            <input type='hidden' name='urun_oy' value='$urunler_oy' >   
                                            <input type='hidden' name='urun_oy' value='$urunler_oy' >   
                                            <input type='hidden' name='urun_oy' value='$urunler_oy' >   
                                            <input type='hidden' name='urun_oy' value='$urunler_oy' >   
                                                </ul> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                </form>                                          
                  ";
        echo "
  <div class=\"modal fade\" id=\"modal_box$urunler_id\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            <div class=\"modal_body\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-5 col-md-5 col-sm-12\">
                            <div class=\"modal_tab\">
                                <div class=\"tab-content product-details-large\">
                                    <div class=\"tab-pane fade show active\" id=\"tab1\" role=\"tabpanel\">
                                        <div class=\"modal_tab_img\">
                                            <a href=\"#\"><img src='assets/img/product/$urunler_resim' alt=\"\"></a>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"tab2\" role=\"tabpanel\">
                                        <div class=\"modal_tab_img\">
                                            <a href=\"#\"><img src='assets/img/product/$urunler_resim_1' alt=\"\"></a>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"tab3\" role=\"tabpanel\">
                                        <div class=\"modal_tab_img\">
                                            <a href=\"#\"><img src='assets/img/product/$urunler_resim_2' alt=\"\"></a>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class=\"modal_tab_button\">
                                    <ul class=\"nav product_navactive owl-carousel\" role=\"tablist\">
                                        <li>
                                            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tab1\" role=\"tab\"
                                               aria-controls=\"tab1\" aria-selected=\"false\"><img
                                                        src='assets/img/product/$urunler_resim' width='118px' height='118px' alt=\"\"></a>
                                        </li>
                                        <li>
                                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tab2\" role=\"tab\"
                                               aria-controls=\"tab2\" aria-selected=\"false\"><img
                                                        src='assets/img/product/$urunler_resim_1' width='118px' height='118px' alt=\"\"></a>
                                        </li>
                                        <li>
                                            <a class=\"nav-link button_three\" data-toggle=\"tab\" href=\"#tab3\" role=\"tab\"
                                               aria-controls=\"tab3\" aria-selected=\"false\"><img
                                                        src='assets/img/product/$urunler_resim_2' width='118px' height='118px' alt=\"\"></a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-7 col-md-7 col-sm-12\">
                            <div class=\"modal_right\">
                                <div class=\"modal_title mb-10\">
                                    <h2>$urunler_title</h2>
                                </div>
                                <div class=\"modal_price mb-10\">
                                    <span class=\"new_price\">$urunler_fiyat</span>
                                    <span class=\"old_price\">$78.99</span>
                                </div>
                                <div class=\"modal_content mb-10\">
                                    <p>$urunler_desc</p>
                                </div>
                                <div class=\"modal_size mb-15\">
                                    <h2>Beden</h2>
                                    <ul>
                                    
                                    <!--
                                        <li><a href='shop.php?alt_kategori_id=$al=?$urunler_oy'>$XS</a></li>  seçebilsin bunu açılır yerle                                                 
                                        <li><a href=\"#\">$M</a></li> -->                                                
                                    </ul>
                                </div>
                                <div class=\"modal_add_to_cart mb-15\">
                                    <form action='shop.php?alt_kategori_id=$al&urunler_id=$urunler_id&urunler_title=$urunler_title
                                    &urunler_fiyat=$urunler_fiyat&urunler_resim=$urunler_resim ' method='post'>
                                        <input type='hidden' name='title' value='$urunler_title'>
                                        <input type='hidden' name='fiyat' value='$urunler_fiyat'>
                                        <input type='hidden' name='resim' value='$urunler_resim'>
                                        <input type='hidden' name='beden' value='$XS'>
                                        <input min=\"1\" max=\"100\" step=\"1\" value='1' type=\"number\" name='adet'>
                                        <button type='submit' name='eklesepet'>add to cart</button>
                                    </form>
                                </div>
                                <div class=\"modal_description mb-15\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                </div>
                                <div class=\"modal_social\">
                                    <h2>Share this product</h2>
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
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
                                    ";
    }
}

function detay()
{
    $al = $_GET['urunler_id'];
    $con = mysqli_connect("localhost", "root", "", "eticaret");
    $al_kategori = " SELECT * FROM urunler as ur INNER JOIN beden as be WHERE $al=urunler_id AND ur.urunler_id=be.parent_urun_id";
    $sonuc = mysqli_query($con, $al_kategori);
    $cekilen_veri = mysqli_fetch_array($sonuc);

    $urunler_id = $cekilen_veri['urunler_id'];
    $urunler_title = $cekilen_veri['urunler_title'];
    $urunler_desc = $cekilen_veri['urunler_desc'];
    $urunler_resim = $cekilen_veri['urunler_resim'];
    $urunler_resim_1 = $cekilen_veri['urunler_resim_1'];
    $urunler_resim_2 = $cekilen_veri['urunler_resim_2'];
    $urunler_fiyat = $cekilen_veri['urunler_fiyat'];
    $urunler_size = $cekilen_veri['urunler_size'];
    $urunler_oy = $cekilen_veri['urunler_oy'];
    $XS = $cekilen_veri['XS'];
    $M = $cekilen_veri['M'];
    echo "
         <!--single product wrapper start-->
            <div class=\"single_product_wrapper\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-5 col-md-6\">
                            <div class=\"product_gallery\">
                                <div class=\"tab-content produc_thumb_conatainer\">
                                    <div class=\"tab-pane fade show active\" id=\"p_tab1\" role=\"tabpanel\" >
                                        <div class=\"modal_img\">
                                            <a href=\"#\"><img src='assets/img/product/$urunler_resim' alt=\"\"></a>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"p_tab2\" role=\"tabpanel\">
                                        <div class=\"modal_img\">
                                            <a href=\"#\"><img src='assets/img/product/$urunler_resim_1'  alt=\"\"></a>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"p_tab3\" role=\"tabpanel\">
                                        <div class=\"modal_img\">
                                            <a href=\"#\"><img src='assets/img/product/$urunler_resim_2'  alt=\"\"></a>
                                        </div>
                                    </div>
                                   
                                </div>

                                <div class=\"product_thumb_button\">    
                                    <ul class=\"nav product_d_button\" role=\"tablist\">
                                        <li >
                                            <a class=\"active\" data-toggle=\"tab\" href=\"#p_tab1\" role=\"tab\" aria-controls=\"p_tab1\" aria-selected=\"false\"><img src='assets/img/product/$urunler_resim'  alt=\"\"></a>
                                        </li>
                                        <li>
                                             <a data-toggle=\"tab\" href=\"#p_tab2\" role=\"tab\" aria-controls=\"p_tab2\" aria-selected=\"false\"><img src='assets/img/product/$urunler_resim_1' alt=\"\"></a>
                                        </li>
                                        <li>
                                           <a data-toggle=\"tab\" href=\"#p_tab3\" role=\"tab\" aria-controls=\"p_tab3\" aria-selected=\"false\"><img src='assets/img/product/$urunler_resim_2'  alt=\"\"></a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-7 col-md-6\">
                            <div class=\"product_details\">
                                <h3>$urunler_title</h3>
                                <div class=\"product_price\">
                                    <span class=\"current_price\">$urunler_fiyat</span>
                                    <span class=\"old_price\">$28.00</span>
                                </div>
                                <div class=\"product_ratting\">
                                    <ul>
                                        <li><a href=\"#\"><i class=\"ion-star\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href=\"#\">1 Review</a></li>
                                    </ul>
                                </div>
                               <div class=\"product_description\">
                                   <p>$urunler_desc</p>
                               </div>
                                <div class=\"product_details_action\">
                                    <h3>Available Options</h3>
                                    <div class=\"product_stock\">
                                        <label>Quantity</label>
                                        <input min=\"0\" max=\"100\" type=\"number\">
                                    </div>
                                    <div class=\"product_action_link\">
                                        <ul>
                                           <form action='detay.php?urunler_id=$urunler_id' method='get'>
                                        <input type='hidden' name='title' value='$urunler_title'>
                                        <input type='hidden' name='fiyat' value='$urunler_fiyat'>
                                        <input type='hidden' name='resim' value='$urunler_resim'>
                                        <input type='hidden' name='beden' value='$XS'>
                                        <input min=\"1\" max=\"100\" step=\"1\" value='1' type=\"number\" name='adet'>
                                        <button type='submit' name='eklesepet'>add to cart</button>
                                    </form>
                                        </ul>
                                    </div>
                                    <div class=\"social_sharing\">
                                        <span>Share</span>
                                        <ul>
                                            <li><a href=\"#\" class=\"bg-facebook\" data-toggle=\"tooltip\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i> Share</a></li>
                                            <li><a href=\"#\" class=\"bg-Tweet\" data-toggle=\"tooltip\" title=\"twitter\"><i class=\"fa fa-twitter\"></i> Tweet</a></li>
                                            <li><a href=\"#\" class=\"bg-google\" data-toggle=\"tooltip\" title=\"google-plus\"><i class=\"fa fa-google-plus\"></i> Google+</a></li>
                                            <li><a href=\"#\" class=\"bg-pinterest\" data-toggle=\"tooltip\" title=\"pinterest\"><i class=\"fa fa-pinterest\"></i> Pinterest</a></li>
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--single product wrapper end-->";

}

function ayrintili_urun_goster()
{
    $al = $_GET['alt_kategori_id'];
    $con = mysqli_connect("localhost", "root", "", "eticaret");
    $al_kategori = "SELECT * FROM urunler  WHERE $al=parent_altkategori_id ";
    $sonuc = mysqli_query($con, $al_kategori);
    while ($cekilen_veri = mysqli_fetch_array($sonuc)) {
        $urunler_title = $cekilen_veri['urunler_title'];
        $urunler_desc = $cekilen_veri['urunler_desc'];
        $urunler_resim = $cekilen_veri['urunler_resim'];
        $urunler_resim_1 = $cekilen_veri['urunler_resim_1'];
        $urunler_resim_2 = $cekilen_veri['urunler_resim_2'];
        $urunler_fiyat = $cekilen_veri['urunler_fiyat'];
        $urunler_size = $cekilen_veri['urunler_size'];
        $urunler_oy = $cekilen_veri['urunler_oy'];
        $size_array = explode(',', $urunler_size);
        echo "    
<div class=\"col-lg-4 col-md-5\">
                                        <div class=\"product_thumb\">
                                            <a href=\"product-details.html\"><img src='assets/img/product/$urunler_resim'
                                                                                alt=\"\"></a>
                                             
                                        </div>
                                    </div>
                                    <div class=\"col-lg-8 col-md-7\">
                                        <div class=\"product_content\">
                                            <div class=\"product_ratting\">
                                                <ul> ";
        urun_oy_goster($urunler_oy);
        echo " 
                                                </ul>
                                            </div>
                                            <h3><a href=\"product-details.html\">$urunler_title</a></h3>
                                            <div class=\"product_price\">
                                                <span class=\"current_price\">$urunler_fiyat TL</span>
                                            </div>
                                            <div class=\"product_description\">
                                                <p>$urunler_desc </p>
                                            </div>
                                            <div class=\"product_action\">
                                                <ul>
                                                Kullanıcı yorumları çekilebilir
                                                <!--
                                                    <li class=\"product_cart\"><a href=\"#\" title=\"Add to Cart\">Ekle
                                                       </a></li>
                                                    <li class=\"add_links\"><a href=\"#\" title=\"Add to Wishlist\"><i
                                                                    class=\"ion-ios-heart-outline\"></i></a></li>
                                                    <li class=\"add_links\"><a href=\"#\" title=\"Add to Compare\"><i
                                                                    class=\"ion-loop\"></i></a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
         ";
    }
}

function urun_oy_goster($urunler_oy)
{
    switch ($urunler_oy) {
        case 1:
            echo "
                                                    <li><a href=\"#\"><i class=\"ion-star\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>";
            break;
        case 2:
            echo "
                                                    <li><a href=\"#\"><i class=\"ion-star\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-star\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>";
            break;
        case 3:
            echo "
                                                    <li><a href=\"#\"><i class=\"ion-star\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-star\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-star\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>";
            break;
        case 4:
            echo "
                                                    <li><a href=\"#\"><i class=\"ion-star\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-star\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-star\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-star\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-ios-star-outline\"></i></a></li>";
            break;
        case 5:
            echo "
                                                    <li><a href=\"#\"><i class=\"ion-star\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-star\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-star\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-star\"></i></a></li>
                                                    <li><a href=\"#\"><i class=\"ion-star\"></i></a></li>
                                                    ";
            break;
    }
}

function filtrele_beden_getir()
{
    $alt_kategori_id = $_GET['alt_kategori_id'];
    $con = mysqli_connect("localhost", "root", "", "eticaret");
    $select = mysqli_query($con, "SELECT *FROM kategori_beden_tablosu WHERE $alt_kategori_id=parent_kategori_id");
    while ($cekilen_veri = mysqli_fetch_assoc($select)) {
        $beden_1 = $cekilen_veri['beden_1'];
        $beden_2 = $cekilen_veri['beden_2'];
        $beden_3 = $cekilen_veri['beden_3'];
        echo "
            <li><a href=\"#\">$beden_1</a></li>
            <li><a href=\"#\">$beden_2</a></li>
            <li><a href=\"#\">$beden_3</a></li>
        ";
    }
}

function filtrele_renk_getir()
{
    $alt_kategori_id = $_GET['alt_kategori_id'];
    $con = mysqli_connect("localhost", "root", "", "eticaret");
    $select = mysqli_query($con, "SELECT *FROM kategori_renk_tablosu WHERE $alt_kategori_id=parent_kategori_id");
    while ($cekilen_veri = mysqli_fetch_assoc($select)) {
        $renk_1 = $cekilen_veri['renk_1'];
        $renk_2 = $cekilen_veri['renk_2'];
        $renk_3 = $cekilen_veri['renk_3'];
        echo "
            <li><a href=\"#\">$renk_1</a></li>
            <li><a href=\"#\">$renk_2</a></li>
            <li><a href=\"#\">$renk_3</a></li>
        ";
    }
}

function oturum_secenek()
{
    if (isset($_SESSION["userid"])) {
        $username = $_SESSION["username"];
        echo "<a style='margin-right:20px;'>Hoşgeldin</a>", "<a style='color: #cd0a0a;'>$username</a>";
        echo "
                                <li class=\"top_links\"><a href=\"#\">Hesap <i class=\"ion-chevron-down\"></i></a>
                                <ul class=\"dropdown_links\">
                                    <li><a href=\"begeni.php\">Beğendiklerim</a></li>
                                    <li><a href=\"hakkinda.php\">Hakkımda </a></li>
                                    <li><a href=\"hesap.php\">Profil</a></li>
                                    <li><a href=\"logout.php\">Çıkış Yap</a></li>
                                </ul>
                            </li>";
    } else {
        echo "   <a class=\"top_links\" href=\"hesap.php\">Login/Register </a> ";
    }
}

function cart()
{
    /*
    $user_id=$_SESSION["username"];
    $sql = "INSERT INTO sepet(user_id,urun_id) VALUE('$user_id','$urunler_id')";
    $succes = mysqli_query($con, $sql); */
    if (isset($_GET["sil"])) {
        if (isset($_SESSION["sepet"][$_GET["sil"]])) {
            unset($_SESSION["sepet"][$_GET["sil"]]);

            // header('Location: index.php');
        }

    }
    // unset($_SESSION["sepet"]);
    echo "<pre>";
    print_r($_SESSION["sepet"]);
    echo "</pre>";
    foreach ($_SESSION["sepet"] as $urun) {
        $urunler_id = $urun['urunler_id'];
        $urun_title = $urun['urunler_title'];
        $urun_fiyat = $urun['urunler_fiyat'];
        $urun_resim = $urun['urunler_resim'];
        echo "
             <tr>
             <td class=\"product_remove\"><a href='cart.php?sil=$urunler_id'><i class=\"fa fa-trash-o\"></i></a></td>
             <td class=\"product_thumb\"><a href=\"#\"><img style=\"width:118px; height:118px;\"  src='assets/img/product/$urun_resim'alt=\"\"></a></td>
             <td class=\"product_name\"><a href=\"#\">$urun_title</a></td>
             <td class=\"product-price\">$urun_fiyat</td>
             <td class=\"product_quantity\"><input min=\"0\" max=\"100\" value='1' type=\"number\"></td>
              </tr>
";
    }
}

function mini_cart()
{
    ob_start();
    //unset($_SESSION["sepet"]);
    /*  if (isset($_GET["sil"])){
          if (isset($_SESSION["sepet"][$_GET["sil"]])){
              unset($_SESSION["sepet"][$_GET["sil"]]);
              $alt=$_GET["alt_kategori_id"];
              echo $alt;
              header('Location: index.php');
          }

      } */

    if (!isset($_SESSION["sepet"])) {
        echo "
            
              <div class=\"cart_item\">
                    
                      
                    <div>Sepetniz boş</div>
                </div>
                                    
                                
             ";
    } else {
        echo "
            <div class=\"cart_button checkout\">
               <a href=\"checkout.php\">Sepeti Temizle</a>
            </div>
    ";

        foreach ($_SESSION["sepet"] as $urun) {
            // $urun_id=$urun['urunler_id'];
            $urunler_id = $urun['urunler_id'];
            $urun_title = $urun['urunler_title'];
            $urun_fiyat = $urun['urunler_fiyat'];
            $urun_resim = $urun['urunler_resim'];
            $alt_kategori_id = $urun['alt_kategori_id'];
            var_dump($_SESSION["sepet"]);
            echo "
            
              <div class=\"cart_item\">
                    <div class=\"cart_img\">
                       <a href=\"#\"><img style=\"width:100px; height:71px;\"  src='assets/img/product/$urun_resim' alt=\"\"></a>
                    </div>
                       <div class=\"cart_info\">
                       <a href=\"#\">$urun_title</a>
                       <form action=\"#\"> <input min=\"0\" max=\"100\" type=\"number\">
                       <span>$urun_fiyat TL</span>
                       </form>
                     </div>
                     <form action='#' method='post'>
     <div class='cop_kova'><a href='shop.php?alt_kategori_id=$alt_kategori_id&sil=$urunler_id'><i style='color: #2971f5;max-width:15px;height:20px;' class=\"fa fa-trash-o\"></i></a></div>
               </form>
                </div>
                                    
                                
             ";

        }
        if (isset($_SESSION["sepet"])) {
            echo "
            <div class=\"cart_button view_cart\">
                                    <a href='cart.php'>View and Edit Cart</a>
                                </div>
            ";
        }
    }

}

function mini_cart_count()
{
    if (isset($_SESSION["sepet"])) {
        $count = count($_SESSION["sepet"]);
        echo "<span class=\"cart_count\">$count</span>";
    } else {
        echo "<span class=\"cart_count\">0</span>";

    }


}

function slider()
{
    $con = mysqli_connect("localhost", "root", "", "eticaret");
    $selecet = mysqli_query($con, "SELECT * FROM  slider  ");
    if (mysqli_num_rows($selecet) != 0) {
        while ($cekilen_veri = mysqli_fetch_assoc($selecet)) {
            $slider_id = $cekilen_veri['slider_id'];
            $title_bir = $cekilen_veri['title_bir'];
            $title_iki = $cekilen_veri['title_iki'];
            $title_uc = $cekilen_veri['title_uc'];
            $title_dort = $cekilen_veri['title_dort'];
            $title_bes = $cekilen_veri['title_bes'];
            $slider_images = $cekilen_veri['slider_image'];
            echo "
            <div    style=\"background-image: url('assets/img/slider/$slider_images') \" class=\"single_slider slider_one\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                            <div class=\"col-12\">
                                <div class=\"slider_content\">
                                    <h1>$title_bir<br><strong>$title_iki</strong></h1>
                                        <h3>$title_uc</h3>
                                        <h2>$title_dort</h2>
                                        <p>$title_bes</p>
                                        <a href=\"#\">Şimdi Alışveriş Yap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
    }
}

function alisveris_kontrol()
{
    if (isset($_SESSION["userid"])) {
        echo "
                <div class=\"checkout_btn\">
                   <a href='checkout.php'>ALışverişi Tamamla</a>
                </div>
            ";
    }
    else{
        echo "
                <div class=\"checkout_btn\">
                   <a href='hesap.php'>ALışverişi Tamamla</a>
                </div>
            ";
    }
}
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
    if (isset($_GET['alt_kategori_id'])) {
        $_SESSION["alt"] = $_GET['alt_kategori_id'];

    }


}

function urun_goster()
{
    $con = mysqli_connect("localhost", "root", "", "eticaret");
    //unset($_SESSION['sepet']);
    //http://localhost/ecom/shop.php?beden=Xss&title=Sweat&fiyat=100&resim=1177525078.jpg&adet=2&urun_id=7&eklesepet=
    if (isset($_GET["eklesepet"])) {
        $item_array = array(
            'urun_id' => $_GET["urun_id"],
            'title' => $_GET["title"],
            'fiyat' => $_GET["fiyat"],
            'resim' => $_GET["resim"],
            'beden' => $_GET["beden"],
            'adet' => $_GET["adet"]
        );
        //$count = count($_SESSION["sepet"]);
        // print_r($item_array);
        $_SESSION["sepet"][$_GET['urun_id']] = $item_array;
        header('Location: shop.php');

    }

    $al = $_SESSION["alt"];
    if (isset($_GET['orderby'])) {
        $sirama = $_GET['orderby'];
        switch ($sirama) {
            case 1:
                //Önerilen
                $al_kategori = " SELECT * FROM urunler WHERE $al=parent_altkategori_id ";
                break;
            case  2:
                //Artan
                $al_kategori = " SELECT * FROM urunler   WHERE $al=parent_altkategori_id ORDER BY urunler_fiyat DESC ";
                break;
            case 3:
                $al_kategori = " SELECT * FROM urunler   WHERE $al=parent_altkategori_id  ORDER BY urunler_fiyat ASC ";
                //Azalan
                break;
        }
        $sonuc = mysqli_query($con, $al_kategori);
        while ($cekilen_veri = mysqli_fetch_array($sonuc)) {

            $urunler_id = $cekilen_veri['urunler_id'];
            $urunler_title = $cekilen_veri['urunler_title'];
            $urunler_desc = $cekilen_veri['urunler_desc'];
            $urunler_resim = $cekilen_veri['urunler_resim'];
            $urunler_resim_1 = $cekilen_veri['urunler_resim_1'];
            $urunler_resim_2 = $cekilen_veri['urunler_resim_2'];
            $urunler_fiyat = $cekilen_veri['urunler_fiyat'];
            $urunler_oy = $cekilen_veri['urunler_oy'];
            $urunler_adet = $cekilen_veri['urunler_adet'];

            echo "<form class=\"col-lg-4 col-md-6\" action='shop.php?alt_kategori_id=$al' method='post'>
           <div  >
                                    <div class=\"single_product\"  style='height:225px;width:175px;'>
                                        <div class=\"product_thumb\">
                                            <a href='detay.php?urunler_id=$urunler_id'>
                                            <img style='height:200px;width:150px;'src='assets/img/product/$urunler_resim'></a>
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
                                    
                                                                                 
                                    </ul>
                                </div>
                                <div class=\"modal_add_to_cart mb-15\">
                                    <form action='shop.php?' method='get'>
                                         
                                       <input type=\"radio\" name='beden' value=\"Xs\">XS
                                       <input type=\"radio\" name='beden' value=\"Xss\">XSS
                                       <input type=\"radio\" name='beden' value=\"Xss\">XSS<br>
                                        <input type='hidden' name='title' value='$urunler_title'>
                                        <input type='hidden' name='fiyat' value='$urunler_fiyat'>
                                        <input type='hidden' name='resim' value='$urunler_resim'>
                                        <div class=\"modal_size mb - 15\">
                                            <h2>beden</h2>
                                       </div>
                                       <input min=\"1\" max=\"$urunler_adet\" step=\"2\" value=\"1\" type=\"number\" name='adet'>
                                       <input type='hidden' value='$urunler_id' name='urun_id'>
                                          <button type='submit' name='eklesepet'>add to cart</button>
                                    </form>
                                <div class=\"modal_description mb-15\">
                                    <p>Lorem ipsum AWDWADit amet, consectetur adipisicing elit, sed do eiusmod tempor
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
    } else {
//http://localhost/ecom/shop.php?size1=S&size2=XS&size3=XXS&renk1=Kirmizi&renk2=Siyah&renk3=Mavi&beden_getir=
        $size1 = isset($_GET["size1"]);
        $size1 = isset($_GET["size2"]);
        $size1 = isset($_GET["size3"]);
        $renk1 = isset($_GET["renk1"]);


        $al_kategori = " SELECT * FROM urunler   WHERE $al=parent_altkategori_id ";
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
            $urunler_oy = $cekilen_veri['urunler_oy'];
            $urunler_adet = $cekilen_veri['urunler_adet'];

//1345115185.jpg
            echo "<form class=\"col-lg-4 col-md-4\" action='shop.php?alt_kategori_id=$al' method='post'>
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
                                                                                   
                                    </ul>
                                </div>
                                <div class=\"modal_add_to_cart mb-15\">
                                    <form action='shop.php?' method='get'>
                                        
                                       <input type=\"radio\" name='beden' value=\"Xs\">XS
                                       <input type=\"radio\" name='beden' value=\"Xss\">XSS
                                       <input type=\"radio\" name='beden' value=\"Xss\">XSS<br>
                                        <input type='hidden' name='title' value='$urunler_title'>
                                        <input type='hidden' name='fiyat' value='$urunler_fiyat'>
                                        <input type='hidden' name='resim' value='$urunler_resim'>
                                        <div class=\"modal_size mb-15\">
                                            <h2>Adet</h2>
                                       </div>
                                        <input min=\"1\" max=\"$urunler_adet\" step=\"2\" value=\"1\" type=\"number\" name='adet'>
                                       <input type='hidden' value='$urunler_id' name='urun_id'>
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

}

function detay()
{

    if (isset($_GET["eklesepet"])) {
        $item_array = array(
            'urun_id' => $_GET["urun_id"],
            'title' => $_GET["title"],
            'fiyat' => $_GET["fiyat"],
            'resim' => $_GET["resim"],
            'beden' => $_GET["beden"],
            'adet' => $_GET["adet"]
        );
        //$count = count($_SESSION["sepet"]);
        // print_r($item_array);
        $_SESSION["sepet"][$_GET['urun_id']] = $item_array;
        header('Location: detay.php');

    }
    if (isset($_GET['urunler_id'])) {
        $_SESSION["urunid"] = $_GET['urunler_id'];
    }
    $urun_id = $_SESSION["urunid"];

    echo $urun_id;
    $con = mysqli_connect("localhost", "root", "", "eticaret");
    $al_kategori = " SELECT * FROM urunler WHERE $urun_id=urunler_id ";
    $sonuc = mysqli_query($con, $al_kategori);
    $cekilen_veri = mysqli_fetch_array($sonuc);
    $urunler_id = $cekilen_veri['urunler_id'];
    $urunler_title = $cekilen_veri['urunler_title'];
    $urunler_desc = $cekilen_veri['urunler_desc'];
    $urunler_resim = $cekilen_veri['urunler_resim'];
    $urunler_resim_1 = $cekilen_veri['urunler_resim_1'];
    $urunler_resim_2 = $cekilen_veri['urunler_resim_2'];
    $urunler_fiyat = $cekilen_veri['urunler_fiyat'];
    $urunler_adet = $cekilen_veri['urunler_adet'];


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
                                     </ul>
                                </div>
                               <div class=\"product_description\">
                                   <p>$urunler_desc</p>
                               </div>
                                <div class=\"product_details_action\">
                                <form action='detay.php' method='get'>
                                     <div class=\"product_stock\">
                                        <label>Adet</label>
                                        <input min=\"0\" value='1' max=\"$urunler_adet\" type=\"number\" name='adet'>
                                    </div>
                                    <div class=\"product_stock\">
                                        <label>Beden</label>
                                        <input type=\"radio\" name='beden' value=\"Xs\">XS
                                       <input type=\"radio\" name='beden' value=\"Xss\">XSS
                                       <input type=\"radio\" name='beden' value=\"Xss\">XSS<br>
                                     </div>
                                    <div class=\"product_action_link\">
                                        <ul>
                                        <input type='hidden' name='title' value='$urunler_title'>
                                        <input type='hidden' name='fiyat' value='$urunler_fiyat'>
                                        <input type='hidden' name='resim' value='$urunler_resim'>
                                        <div class=\"modal_size mb-15\">
                                        </div>
                                        <input type='hidden' value='$urunler_id' name='urun_id'>
                                          <button type='submit' name='eklesepet'>SEPETE EKLE</button>
                                    
                                        </ul>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--single product wrapper end-->";

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

function filtrele()
{

    $al = $_SESSION["alt"];
    $con = mysqli_connect("localhost", "root", "", "eticaret");

    echo "<form action='' method='get'>";
    echo "<h3>Beden</h3><ul><div class=\"container\">";
    $select = mysqli_query($con, "SELECT *FROM kategori_beden_tablosu  WHERE $al=parent_kategori_id  ");
    while ($cekilen_veri = mysqli_fetch_assoc($select)) {
        $beden_1 = $cekilen_veri['beden_1'];
        $beden_2 = $cekilen_veri['beden_2'];
        $beden_3 = $cekilen_veri['beden_3'];
        echo "
                <div class=\"checkbox\">
                  <label><input style=\"height:25px; width:25px;\" type=\"checkbox\" value='$beden_1' name='size1'>$beden_1</label>
                </div>
                <div class=\"checkbox\">
                  <label><input style=\"height:25px; width:25px;\" type=\"checkbox\" value='$beden_2' name='size2'>$beden_2</label>
                </div>
                 <div class=\"checkbox\">
                  <label><input style=\"height:25px; width:25px;\" type=\"checkbox\" value='$beden_3' name='size3'>$beden_3</label>
                </div>
               
        ";
        echo "</div></ul>";
    }
    echo "<h3>Renk</h3><ul><div class=\"container\">";
    $select = mysqli_query($con, "SELECT *FROM kategori_renk_tablosu  WHERE $al=parent_kategori_id  ");
    while ($cekilen_veri = mysqli_fetch_assoc($select)) {
        $renk_1 = $cekilen_veri['renk_1'];
        $renk_2 = $cekilen_veri['renk_2'];
        $renk_3 = $cekilen_veri['renk_3'];
        echo "
                <div class=\"checkbox\">
                  <label><input style=\"height:25px; width:25px;\" type=\"checkbox\" value='$renk_1' name='renk1'>$renk_1</label>
                </div>
                <div class=\"checkbox\">
                  <label><input style=\"height:25px; width:25px;\" type=\"checkbox\" value='$renk_2' name='renk2'>$renk_2</label>
                </div>
                 <div class=\"checkbox\">
                  <label><input style=\"height:25px; width:25px;\" type=\"checkbox\" value='$renk_3' name='renk3'>$renk_3</label>
                </div>
               
        ";
        echo "</div></ul>";
    }

    echo "
         <label class=\"order_button\"><button name='beden_getir' type='submit'>Uygula</button></label>
            </form>
        ";

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

    if (isset($_GET["sil_urun"])) {
        if (isset($_SESSION["sepet"][$_GET["sil_urun"]])) {
            unset($_SESSION["sepet"][$_GET["sil_urun"]]);

            header('Location: cart.php');
        }

    }
    // unset($_SESSION["sepet"]);

    foreach ($_SESSION["sepet"] as $urun) {
        // $urun_id=$urun['urunler_id'];
        $urunler_id = $urun['urun_id'];
        $urun_title = $urun['title'];
        $urun_fiyat = $urun['fiyat'];
        $urun_resim = $urun['resim'];
        $urun_beden = $urun['beden'];
        $urun_adet = $urun['adet'];
        echo "
             <tr>
             <td class=\"product_remove\"><a href='cart.php?sil_urun=$urunler_id'><i class=\"fa fa-trash-o\"></i></a></td>
             <td class=\"product_thumb\"><a href=\"#\"><img style=\"width:118px; height:118px;\"  src='assets/img/product/$urun_resim'alt=\"\"></a></td>
             <td class=\"product_name\"><a href=\"#\">$urun_title</a></td>
             <td class=\"product-price\">$urun_fiyat</td>
             <td class=\"product_quantity\">$urun_adet</td>
              </tr>
";
    }
}

function sepet_fiyathesapla()
{

    global $genel_toplam;
    $genel_toplam = 0;
    foreach ($_SESSION["sepet"] as $urun) {
        // $urun_id=$urun['urunler_id'];
        $urun_fiyat = $urun['fiyat'];
        $urun_adet = $urun['adet'];


        $genel_toplam = $genel_toplam + $urun_fiyat;

    }
    $genel_toplam = $genel_toplam * $urun_adet;
    $kdv = ($genel_toplam * 18) / 100;
    echo "
           <div class=\"cart_subtotal\">
             <p>Ara Toplam:</p>
          <p class=\"cart_amount\">$genel_toplam TL</p>
                 </div>
           <div class=\"cart_subtotal \">
                 <p>KDV(%18)</p>
                 <p class=\"cart_amount\">$kdv TL</p>
           </div>
           <div class=\"cart_subtotal\">
                  <p>Genel Toplam</p>
                  <p class=\"cart_amount\">$genel_toplam TL</p>
            </div>

";
}

function mini_cart()
{
    $count = count($_SESSION["sepet"]);
    //unset($_SESSION["sepet"]);
    if (isset($_GET["sil"])) {
        if (isset($_SESSION["sepet"][$_GET["sil"]])) {
            unset($_SESSION["sepet"][$_GET["sil"]]);
            $alt = $_GET["alt_kategori_id"];
            echo $alt;

            header("Refresh:0");
        }
    }
    if ($count == 0) {

        echo "
              <div class=\"cart_item\">
                    <div>Sepetniz boş</div>
                </div>                           
             ";
    } else {


        foreach ($_SESSION["sepet"] as $urun) {
            // $urun_id=$urun['urunler_id'];
            $urunler_id = $urun['urun_id'];
            $urun_title = $urun['title'];
            $urun_fiyat = $urun['fiyat'];
            $urun_resim = $urun['resim'];
            $urun_beden = $urun['beden'];
            $urun_adet = $urun['adet'];

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
     <div class='cop_kova'><a href='shop.php?&sil=$urunler_id'><i style='color: #2971f5;max-width:15px;height:20px;' class=\"fa fa-trash-o\"></i></a></div>
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
    $con = mysqli_connect("localhost", "root", "", "eticaret");


    if (isset($_SESSION["userid"])) {
        echo "
                <div class=\"checkout_btn\">
                   <a href='checkout.php'>Sepeti Onayla</a>
                </div>
            ";
    } else {
        echo "
                <div class=\"checkout_btn\">
                  <form action='cart.php' method='post'><a href='hesap.php'>Sepeti Onayla</a> </form> 
                </div>
            ";
    }
}

function adres_bilgi_al()
{
    $con = mysqli_connect("localhost", "root", "", "eticaret");

    $userid = $_SESSION["userid"];

    if ($_POST) {
        $adrestipi = $_POST['adrestipi'];
        $sehir = $_POST['sehir'];
        $ilce = $_POST['ilce'];
        $postakodu = $_POST['postakodu'];
        $adresbilgi = $_POST['adresbilgi'];
        $ad = $_POST['ad'];
        $soyad = $_POST['soyad'];
        $telefon = $_POST['telefon'];
        $tckimlik = $_POST['tckimlik'];
        /*      users_id       adres_tipi      sehir     ilce        posta_kodu      adres_bilgi    ad   soyad  telefon tc_kimlik  */
        if (empty($adrestipi) || empty($sehir) || empty($ilce) || empty($postakodu) || empty($adresbilgi) || empty($ad)
            || empty($soyad) || empty($telefon) || empty($tckimlik)) {
            echo "<script>alert('Alanları Boş geçmeyiniz')</script>";

        } else {
            $sql = "INSERT INTO adres(users_id,adres_tipi,sehir,ilce,posta_kodu,adres_bilgi,ad,soyad,telefon,tc_kimlik) VALUE('$userid','$adrestipi','$sehir','$ilce',
                    '$postakodu','$adresbilgi','$ad','$soyad','$telefon','$tckimlik')";
            $succes = mysqli_query($con, $sql);
            //////

            header('Location: odeme.php');

            ///

        }

    }

    $al_kategori = " SELECT * FROM adres WHERE $userid=users_id";
    $sonuc = mysqli_query($con, $al_kategori);
    $cekilen_veri = mysqli_fetch_array($sonuc);
    $adres_tipi = $cekilen_veri['adres_tipi'];
    $sehir = $cekilen_veri['sehir'];
    $ilce = $cekilen_veri['ilce'];
    $posta_kodu = $cekilen_veri['posta_kodu'];
    $adres_bilgi = $cekilen_veri['adres_bilgi'];
    $ad = $cekilen_veri['ad'];
    $soyad = $cekilen_veri['soyad'];
    $telefon = $cekilen_veri['telefon'];
    $tc_kimlik = $cekilen_veri['tc_kimlik'];

    if (isset($adres_tipi)) {
        echo "
     <form action='checkout.php' method='post'>
            <h3>Adrese Teslimat</h3>
            <div class=\"row\">
                                        <div class=\"col-12 mb-20\">
                                            <label for=\"country\">Adres tipi <span>*</span></label>
                                            <select name='adrestipi' >
                                                <option value='$adres_tipi'>$adres_tipi</option>
                                            </select>
                                        </div>
                                        <div class=\"col-6 mb-20\">
                                            <label for=\"country\">Şehir<span>*</span></label>
                                            <select name='sehir'  >
                                                <option value='$sehir'>$sehir</option>
                                            </select>
                                        </div>
                                        <div class=\"col-6 mb-20\">
                                            <label for=\"country\">İlçe <span>*</span></label>
                                            <select name='ilce'>
                                                <option value='$ilce'>$ilce</option>
                                            </select>
                                        </div>
                                        <div class=\"col-lg-6 mb-20\">
                                            <label>Posta Kodu <span>*</span></label>
                                            <input name='postakodu' type=\"text\" value='$posta_kodu'>    
                                        </div>
                                        <div class=\"col-12 mb-20\">
                                            <label>Adres Bilgisi</label>
                                            <input name='adresbilgi' type=\"text\" value='$adres_bilgi'>     
                                        </div>
                                        <div class=\"col-lg-6 mb-20\">
                                            <label>Ad<span>*</span></label>
                                            <input name='ad' type=\"text\" value='$ad'>
                                        </div>
                                        <div class=\"col-lg-6 mb-20\">
                                            <label> Soyad  <span>*</span></label>
                                            <input name='soyad' type=\"text\" value='$soyad'>
                                        </div>
                                        <div class=\"col-lg-6 mb-20\">
                                            <label>Cep Telefonu<span>*</span></label>
                                            <input name='telefon' type=\"text\" value='$telefon'>
                                        </div>
                                        <div class=\"col-lg-6 mb-20\">
                                            <label>Tc kimlik<span>*</span></label>
                                            <input name='tckimlik' type=\"text\" value='$tc_kimlik'>
                                        </div>
                                     </div>
                                     <br>
                                      <div class=\"order_button\">
                                            <button  type='submit'>Ödemeye Geç</button>
                                        </div>
      </form>  
    ";
    } else {
        echo "
     <form action='checkout.php' method='post'>
                             <h3>Adrese Teslimat</h3>
                                  <div class=\"row\">
                                        <div class=\"col-12 mb-20\">
                                            <label for=\"country\">Adres tipi <span>*</span></label>
                                            <select name='adrestipi' >
                                                <option value=\"Ev\">Ev</option>
                                                <option value=\"İş yeri\">İş yeri</option>
                                            </select>
                                        </div>
                                        <div class=\"col-6 mb-20\">
                                            <label for=\"country\">Şehir<span>*</span></label>
                                            <select name='sehir' >
                                     <option value=\"Adana\">Adana</option>
                                    <option value=\"Adıyaman\">Adıyaman</option>
                                    <option value=\"Afyonkarahisar\">Afyonkarahisar</option>
                                    <option value=\"Ağrı\">Ağrı</option>
                                    <option value=\"Amasya\">Amasya</option>
                                    <option value=\"Ankara\">Ankara</option>
                                    <option value=\"Antalya\">Antalya</option>
                                    <option value=\"Artvin\">Artvin</option>
                                    <option value=\"Aydın\">Aydın</option>
                                    <option value=\"Balıkesir\">Balıkesir</option>
                                    <option value=\"Bilecik\">Bilecik</option>
                                    <option value=\"Bingöl\">Bingöl</option>
                                    <option value=\"Bitlis\">Bitlis</option>
                                    <option value=\"Bolu\">Bolu</option>
                                    <option value=\"Burdur\">Burdur</option>
                                    <option value=\"Bursa\">Bursa</option>
                              
                                                                            
                                            </select>
                                        </div>
                                        <div class=\"col-6 mb-20\">
                                            <label for=\"country\">İlçe <span>*</span></label>
                                            <select name='ilce'>
                                                <option value=\"Aladağ\">Aladağ</option>
                                                <option value=\"Ceyhan\">Ceyhan</option>
                                                <option value=\"Çukurova\">Çukurova</option>
                                                <option value=\"Feke\">Feke</option>
                                                <option value=\"İmamoğlu\">İmamoğlu</option>
                                                <option value=\"Karaisalı\">Karaisalı</option>
                                                <option value=\"Karataş\">Karataş</option>
                                                <option value=\"Kozan‎\">Kozan‎</option>

                                            </select>
                                        </div>
                                        <div class=\"col-lg-6 mb-20\">
                                            <label>Posta Kodu <span>*</span></label>
                                            <input type=\"text\" name='postakodu'>    
                                        </div>
                                        <div class=\"col-12 mb-20\">
                                            <label>Adres Bilgisi</label>
                                            <input type=\"text\" name='adresbilgi'>     
                                        </div>
                                          <div class=\"col-lg-6 mb-20\">
                                            <label>Ad<span>*</span></label>
                                            <input type=\"text\" name='ad'>
                                        </div>
                                        <div class=\"col-lg-6 mb-20\">
                                            <label> Soyad  <span>*</span></label>
                                            <input type=\"text\" name='soyad'>
                                        </div>
                                        <div class=\"col-lg-6 mb-20\">
                                            <label>Cep Telefonu<span>*</span></label>
                                            <input type=\"text\" name='telefon'>
                                        </div>
                                        <div class=\"col-lg-6 mb-20\">
                                            <label>Tc kimlik<span>*</span></label>
                                            <input type=\"text\" name='tckimlik'>
                                        </div>
                                     </div>
                                     <div class=\"order_button\">
                                            <button  type='submit'>Ödemeye Geç</button>
                                        </div>
                                </form>  
            ";
    }
}

function total_cek()
{

    echo "
    <form action=\"#\">    
                                    <h3>Siparişiniz</h3>
                                    <div class=\"order_table table-responsive mb-30\">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Ürünler</th>
                                                    <th>Toplam</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                        ";
    global $genel_toplam;
    $genel_toplam = 0;
    foreach ($_SESSION["sepet"] as $urun) {
        $urun_title = $urun['title'];
        $urun_fiyat = $urun['fiyat'];
        $urun_adet = $urun['adet'];
        $genel_toplam = $genel_toplam + $urun_fiyat;

        echo "
                              <tr>
                              <td>$urun_title<strong>x$urun_adet Adet</strong></td>
                              <td>$urun_fiyat</td>
                              </tr>
                        ";
    }
    $genel_toplam = $genel_toplam * $urun_adet;
    $kdv = ($genel_toplam * 18) / 100;
    echo "
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Ara toplam</th>
                                                    <td>$genel_toplam</td>
                                                </tr>
                                                <tr>
                                                    <th>Kdv(%18)</th>
                                                    <td><strong>$kdv</strong></td>
                                                </tr>
                                                <tr class=\"order_total\">
                                                    <th>Genel Toplam</th>
                                                    <td><strong>$genel_toplam</strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>     
                                    </div>
                                    <div class=\"payment_method\">
                                        
                                       <div class=\"panel-default\">
                                            <input id=\"payment_defult\" name=\"check_method\" type=\"radio\" data-target=\"createp_account\" />
                                            <label for=\"payment_defult\" data-toggle=\"collapse\" data-target=\"#collapsedefult\" aria-controls=\"collapsedefult\">PayPal <img src=\"assets/img/visha/papyel.png\" alt=\"\"></label>

                                            <div id=\"collapsedefult\" class=\"collapse one\" data-parent=\"#accordion\">
                                                <div class=\"card-body1\">
                                                   <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p> 
                                                </div>
                                            </div>
                                        </div>
                                            
                                    </div> 
                                </form>
    ";
}

function sepet_toplam()
{

}

function siralama()
{
    if (isset($_POST['orderby'])) {
        $select1 = $_POST['orderby'];
        switch ($select1) {
            case '1':
                echo "1";
                break;
            case '2':
                echo "2";
                break;
        }
    }
    echo "
                        <form action='shop.php?' method='get'>
                         <label class=\"order_button\"><button  type='submit'>Listele</button>  </label>
                             <select name='orderby' >
                                <option selected value='1'>Önerilen</option>
                                <option value='2'>Fiyat Artan</option>
                                <option value='3'>Fiyat Azalan</option>
                             </select> 
                        </form>         
    ";
}

function odeme()
{
    $con = mysqli_connect("localhost", "root", "", "eticaret");

    $userid = $_SESSION["userid"];

    if (isset($_POST['ode'])) {
        foreach ($_SESSION["sepet"] as $urun) {
            $urunler_id = $urun['urun_id'];
            $urun_title = $urun['title'];
            $urun_fiyat = $urun['fiyat'];
            $urun_resim = $urun['resim'];
            $urun_beden = $urun['beden'];
            $urun_adet = $urun['adet'];

            $sql = "INSERT INTO sepet(user_id,urun_id,urun_title,urun_fiyat,urun_resim,urun_beden,urun_adet)
                VALUE('$userid','$urunler_id','$urun_title','$urun_fiyat','$urun_resim','$urun_beden','$urun_adet')";
            $succes_kayit = mysqli_query($con, $sql);

            $select = mysqli_query($con, "SELECT * FROM urunler WHERE urunler_id=$urunler_id");
            $cekilen_veri = mysqli_fetch_assoc($select);
            $gelen_urunler_adet = $cekilen_veri['urunler_adet'];
            if ($gelen_urunler_adet >= $urun_adet) {
                $sonuc_adet = $gelen_urunler_adet - $urun_adet;
                mysqli_query($con, "UPDATE urunler SET urunler_adet='$sonuc_adet' WHERE urunler_id='$urunler_id'");
            }


        }
    }

    echo "
       <form action='odeme.php' method='post'>
            <h3>Ödeme</h3>
            <div class=\"row\">
                                        <div class=\"col-12 mb-20\">
                                            <label>Kredi Kartı Numarası</label>
                                        </div>
                                        <div class=\"col-3 mb-20\">
                                             <input name='no1' type=\"text\" value=''>
                                        </div>
                                        <div class=\"col-3 mb-20\">
                                             <input name='no2' type=\"text\" value=' '>
                                        </div>
                                        <div class=\"col-3 mb-20\">
                                             <input name='no3' type=\"text\" value=' '>
                                        </div>
                                        <div class=\"col-3 mb-20\">
                                             <input name='no4' type=\"text\" value=' '>
                                        </div>
                                        <div class=\"col-12 mb-20\">
                                            <label>Son Kullanım Tarihi</label>
                                        </div>
                                       <div class=\"col-6 mb-20\">
                                             <select name='ay'>
                                                <option value='1'>1</option>
                                                <option value='2'>2</option>
                                                <option value='3'>3</option>
                                                <option value='4'>4</option>
                                                <option value='5'>5</option>
                                                <option value='6'>6</option>
                                                <option value='7'>7</option>
                                                <option value='8'>8</option>
                                                <option value='9'>9</option>
                                                <option value='10'>10</option>
                                                <option value='11'>11</option>
                                            </select>
                                        </div>
                                        <div class=\"col-6 mb-20\">
                                             <select name='yıl'>
                                                <option value=''> awdaw</option>
                                            </select>
                                        </div>
                                        <div class=\"col-lg-6 mb-20\">
                                            <label>Kart guvenlik<span>*</span></label>
                                            <input name='ad' type=\"text\" value=' '>
                                        </div>
                                        
                                     </div>
                                     <br>
                                      <div class=\"order_button\">
                                            <button  type='submit' name='ode'>Ödeme yap</button>
                                        </div>
      </form>
";
}

function urun_kayit()
{
    $con = mysqli_connect("localhost", "root", "", "eticaret");

    if (isset($_SESSION['kayit'])) {
        if (isset($_POST['ekle_urun'])) {
            $parent_altkategori_id = $_POST['kategori_id'];
            $title = $_POST['title'];
            $desc = $_POST['desc'];
            $fiyat = $_POST['fiyat'];
            $adet = $_POST['adet'];
            $beden = $_POST['beden'];
            if (empty($title) || empty($parent_altkategori_id)) {
                echo "<script>alert('Alanları Boş geçmeyiniz')</script>";

            } else {
                $yukleklasor = "assets/img/product/";
                $tp_name1 = $_FILES['resim1']['tmp_name'];
                $name1 = $_FILES['resim1']['name'];
                $uzanti1 = substr($name1, -4, 4);
                $random1 = rand(10000, 50000);
                $random2 = rand(10000, 50000);
                $resim1_ad1 = $random1 . $random2 . $uzanti1;
                move_uploaded_file($tp_name1, "$yukleklasor/$resim1_ad1");


                $tp_name2 = $_FILES['resim2']['tmp_name'];
                $name2 = $_FILES['resim2']['name'];
                $uzanti2 = substr($name2, -4, 4);
                $random1 = rand(10000, 50000);
                $random2 = rand(10000, 50000);
                $resim1_ad2 = $random1 . $random2 . $uzanti2;
                move_uploaded_file($tp_name2, "$yukleklasor/$resim1_ad2");


                $tp_name3 = $_FILES['resim3']['tmp_name'];
                $name3 = $_FILES['resim3']['name'];
                $uzanti3 = substr($name3, -4, 4);
                $random1 = rand(10000, 50000);
                $random2 = rand(10000, 50000);
                $resim1_ad3 = $random1 . $random2 . $uzanti3;
                move_uploaded_file($tp_name3, "$yukleklasor/$resim1_ad3");

                $urun_kodu = rand(100000, 900000);

                $sql = "INSERT INTO urunler(parent_altkategori_id,urun_kod,urunler_title,urunler_desc,urunler_fiyat,	
                    urunler_resim,urunler_resim_1,urunler_resim_2,urunler_adet,beden)
            VALUE('$parent_altkategori_id','$urun_kodu','$title','$desc','$fiyat','$resim1_ad1','$resim1_ad2','$resim1_ad3','$adet','$beden')";
                $succes = mysqli_query($con, $sql);


            }
        }

        echo "
    <form action='admin.php' method='post' enctype='multipart/form-data'>
                <br>

                <h3>Ürün KAyıt</h3>
                <div class=\"row\">
                    <div class=\"col-12 mb-20\">
                    <label for=\"country\">Alt Kategori<span>*</span></label>
                    <select name='kategori_id'>
                        <option value='1'>Jeans(Kadın)</option>
                        <option value='2'>Sweat(Kadın)</option>
                        <option value='3'>Hırka(Kadın)</option>
                        <option value='4'>Pantolon(Kadın)</option>
                        <option value='5'>Kazak(Kadın)</option>
                        <option value='6'>Ceket(Erkek)</option>
                        <option value='7'>Yelek(Erkek)</option>
                        <option value='8'>Gömlek(Erkek)</option>
                        <option value='9'>Pantolon(Erkek)</option>
                        <option value='10'>Tshirt(Erkek)</option>
                        <option value='11'>Mont(Çocuk&Genç)</option>
                        <option value='12'>Parka(Çocuk&Genç)</option>
                        <option value='13'>Tayt(Çocuk&Genç)</option>
                        <option value='14'>Yelek(Çocuk&Genç)</option>
                        <option value='15'>Eşofman(Çocuk&Genç)</option>
                        <option value='16'>Body(Bebek)</option>
                        <option value='17'>Kazak(Bebek)</option>
                        <option value='18'>Elbise(Bebek)</option>
                        <option value='19'>Pantolon(Bebek)</option>
                        <option value='20'>Hırka(Bebek)</option>
                         
   
                    </select>
                     </div>
                     <div class=\"col-12 mb-20\">
                        <label>Ürün adı <span>*</span></label>
                        <input type=\"text\" name='title'>       
                    </div>
                    <div class=\"col-12 mb-20\">
                        <label>Ürün açıklaması <span>*</span></label>
                        <input type=\"text\" name='desc'>       
                    </div>
                     <div class=\"col-12 mb-20\">
                        <label>Ürün Fiyat <span>*</span></label>
                        <input type=\"text\" name='fiyat'>       
                    </div>
                     <div class=\"col-12 mb-20\">
                        <label>Ürün Resim <span>*</span></label>
                        <input type=\"file\" name='resim1'>       
                    </div>
                     <div class=\"col-12 mb-20\">
                        <label>Ürün Resim 1 <span>*</span></label>
                        <input type=\"file\" name='resim2'>       
                    </div>
                     <div class=\"col-12 mb-20\">
                        <label>Ürün Resim 2 <span>*</span></label>
                        <input type=\"file\" name='resim3'>       
                    </div>
                     <div class=\"col-12 mb-20\">
                        <label>Ürün Adet <span>*</span></label>
                        <input type=\"text\" name='adet'>       
                    </div>
                     <div class=\"col-12 mb-20\">
                        <label>Ürün Beden <span>*</span></label>
                          <select name='beden'>
                        <option value='XS'>XS</option>
                        <option value='S'>S</option>
                        <option value='M'>M</option>
                        <option value='XXL'>XXL</option>
                            
   
                    </select>       
                    </div>
                  
                  
                 </div>
                 <button type='submit' name='ekle_urun'>Ekle Ürün</button>
                  
        </form>
    ";
    } else {
        header('Location: admin.php');

    }

}

function biten_urunler()
{
    $con = mysqli_connect("localhost", "root", "", "eticaret");


    echo "
                     
            <br>
            <h3>Biten Ürünler</h3>
            <br>
            <table class=\"table\">
            <thead>
              <tr>
                <th><h5>Ürün adı</h5></th>
                <th><h5>Ürün kodu</h5></th>
               </tr>
            </thead>
          </table>            
           <table class=\"table\">
            <thead>
              <tr>
              ";
    $al_kategori = " SELECT * FROM urunler WHERE urunler_adet=0";
    $sonuc = mysqli_query($con, $al_kategori);
    while ($cekilen_veri = mysqli_fetch_array($sonuc)) {

        $urunler_id = $cekilen_veri['urunler_id'];
        $urunler_title = $cekilen_veri['urunler_title'];
        $urunler_kod = $cekilen_veri['urun_kod'];


        echo "
                <th><h5>$urunler_title</h5></th>
                <th><h5>$urunler_kod</h5></th>
                <tr></tr>
             ";
    }
    echo "
               </tr>
            </thead>
          </table>
                   
        ";

}

function arama()
{
    //echo $_SERVER['REQUEST_URI'];
    echo "
               <form action='index.php' method='post' >        
                  <input placeholder=\"Ürün arayınız....\" name='ara' type=\"text\">
                  <button type=\"submit\" name='arama'><i class=\"ion-ios-search-strong\"></i></button>
               </form>
                     
                        
    ";
    $con = mysqli_connect("localhost", "root", "", "eticaret");
    if (isset($_POST["arama"])) {
        $search = $_POST["ara"];
        $result = mysqli_query($con, "SELECT * FROM urunler WHERE urunler_title LIKE '%$search%'");
        while ($r = mysqli_fetch_array($result)) {

            $title = $r["urunler_title"];
            $urunler_id = $r["urunler_id"];
             echo "
              <li><a href='detay.php?urunler_id=$urunler_id'>$title</a></li>
                 
                ";


        }
    }


}


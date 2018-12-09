<?php
function anakategori()
{
    $con = mysqli_connect("localhost", "root", "","eticaret");

    $select = mysqli_query($con, "SELECT *FROM ana_kategoriler");
    while ($cekilen_veri = mysqli_fetch_assoc($select)) {
        $ana_kategori_id = $cekilen_veri['ana_kategori_id'];
        $ana_kategori_title = $cekilen_veri['ana_kategori_title'];

        echo " 
                                 <ul>
                                 <li class=\"categorie_list\"><a href=\"#\">$ana_kategori_title<i class=\"fa fa-angle-right\"></i></a>
                                   
                                </li>
                            </ul>
                                ";
        alt_kategori($ana_kategori_id);

    }


}

function alt_kategori($parent_id)
{
    $con = mysqli_connect("localhost", "root", "","eticaret");

    $selecet = mysqli_query($con, "SELECT * FROM  alt_kategoriler  WHERE $parent_id=parent_kategori_id");

    if (mysqli_num_rows($selecet)!= 0) {
        while ($cekilen_veri = mysqli_fetch_assoc($selecet)) {
            $alt_kategori_id = $cekilen_veri['alt_kategori_id'];
            $kategori_title = $cekilen_veri['kategori_title'];
            echo "
                            <ul class=\"categories_mega_menu\">
                                         
                                            <div class=\"categorie_sub_menu\">
                                                <ul>
                                                    <li><a href=\"#\">$kategori_title</a></li>
                                                     
                                                </ul>
                                            </div>
                                        
                                     </ul>";
        }
    }
}

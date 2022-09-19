<?php
include_once "../modules/db_module.php";
include_once "category.php";

$link = null;
taoKetNoi($link);

// pagination render
include "../models/pagination_render.php";


// category render 
include "../models/category_render.php";

// searchInput render
include "../models/searchInput_render.php";
// sort render
include "../models/sort_render.php";

if(!isset($_GET['page']) && !isset($_GET['search']) && !isset($_GET['sort']) && !isset($_GET['dm'])) {
    $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham limit ".$from.", ".$num_on_page);
}


 
// Chung
echo "<div class='row'>";
while ($rows = mysqli_fetch_object($result)) {
    echo "
        <a href='detailPage.php?id=".$rows->id_sp."' class='card  col-xl-4 col-lg-4 col-6 col-md-4 sPage__content-product-item'>
            <img src='$rows->img_sp' alt='' class='sPage__content-product-img'>
            <div class='sPage__content-product-desc'>
                <span class='sPage__content-product-name'>$rows->ten_sp</span>
                <span class='sPage__content-product-price'>$rows->gia_sp.000
                    <span class='symbolmoney'>₫</span>
                </span>

            <!-- hover product -> quickView -->
            </div>
          
    </a>
    ";
}
echo "</div>";


include "../controller/pagination_logic.php";
giaiPhongBoNho($link, $result);



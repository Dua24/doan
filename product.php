<?php
include_once "db_module.php";
include_once "category.php";

$link = null;
taoKetNoi($link);

// pagination render
include "pagination_render.php";


// category render 
include "category_render.php";

// searchInput render
include "searchInput_render.php";
// sort render
include "sort_render.php";

if(!isset($_GET['page']) && !isset($_GET['search']) && !isset($_GET['sort']) && !isset($_GET['dm'])) {
    $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham limit ".$from.", ".$num_on_page);
} 


// Chung
echo "<div class='row'>";
while ($rows = mysqli_fetch_object($result)) {
    echo "
        <div class='card  col-xl-4 col-lg-4 col-6 col-md-4 sPage__content-product-item'>
        <img src='$rows->img_sp' alt='' class='sPage__content-product-img'>
        <div class='sPage__content-product-desc'>
            <span class='sPage__content-product-name'>$rows->ten_sp</span>
            <span class='sPage__content-product-price'>$rows->gia_sp.000
                <span class='symbolmoney'>₫</span>
            </span>

            <!-- hover product -> quickView -->
            </div>
            <div class='product-quickview'>
                Quick view
            </div>
    </div>
    ";
}
echo "</div>";

if(isset($slg)) {
    if(mysqli_fetch_row($slg)[0]<=12){
    }
} else {
        // pagination logic
    include "pagination_logic.php";

}


giaiPhongBoNho($link,$result);
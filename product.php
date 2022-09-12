<?php
include_once "db_module.php";
include_once "category.php";


$link = null;
taoKetNoi($link);

//category and search input
if(isset($_GET['dm'])){
    $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham where ten_sp like '%".$_GET['dm']."%'");
} 
else {
    $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham");
}

// select sort
if(isset($_GET['sort'])){
    $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham order by gia_sp ".$_GET['sort']."");
} 
else if(!isset($_GET['dm'])) {
    $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham");
}


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

<?php
include_once "db_module.php";
include_once "category.php";


$link = null;
taoKetNoi($link);

$page = isset($_GET['page'])?$_GET['page']:1;
$page = is_numeric($page)?$page:1;
$num_on_page = 12;
$from = ($page-1)*$num_on_page;

$result = chayTruyVanTraVeDL($link, "select count(*) from tbl_sanpham");

$row = mysqli_fetch_row($result);
$total =ceil($row[0]/$num_on_page);

$result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham limit ".$from.", ".$num_on_page);


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


if($page==1) {
    echo "<div class='row d-flex align-items-center justify-content-center'>
    <ul class='pagination sPage-pagination'>
    ";
} else {
    echo "<div class='row d-flex align-items-center justify-content-center'>
        <ul class='pagination sPage-pagination'>
        <li class='page-item'>
            <a class='page-link' href='?page=".($page-1)."'>
                <i class='fa-solid fa-chevron-left'></i>
            </a>
        </li>
        ";
}

for($i=1;$i<=$total;$i++) {
    if($i!=$page) {
        echo "<li class='page-item'>
                <a class='page-link' href='?page=".$i."'>
                    $i
                </a>
            </li>";
    } else {
        echo "<li class='page-item'>
                <a class='page-link active'>
                    $i
                </a>
            </li>";
    }
}


if($page==$total) {
    echo "</ul>
        </div>";
} else {
    echo "  <li class='page-item'>
            <a class='page-link' href='?page=".($page+1)."'>
                <i class='fa-solid fa-chevron-right'></i>
            </a>
        </li>
    </ul>
</div>";
}
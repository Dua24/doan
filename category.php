<?php
include_once "db_module.php";
$link = null;
taoKetNoi($link);
$result = chayTruyVanTraVeDL($link, "select * from tbl_danhmuc");
while ($rows = mysqli_fetch_object($result)) {
    echo "
        <li class='category-item'>
            <a href='?dm=" . $rows->dm_ten . "' class='category-item-link'>
                $rows->dm_ten
            </a>
        </li>
        ";
}

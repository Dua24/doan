<?php
include_once "../modules/db_module.php";
$link = null;
taoKetNoi($link);
$result = chayTruyVanTraVeDL($link, "select * from tbl_danhmuc");
while ($rows = mysqli_fetch_object($result)) {
    echo "
        <li class='category-item'>
            <a href='./searchPage.php?dm=" . $rows->dm_id . "&dm_ten=".$rows->dm_ten."' class='category-item-link'>
                $rows->dm_ten
            </a>
        </li>
        ";
}

giaiPhongBoNho($link, $result);
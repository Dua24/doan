<?php


if(isset($_GET['dm'])){
    $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham where dm_id =".$_GET['dm']."");
} 




?>
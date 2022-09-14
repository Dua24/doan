<?php

if(isset($_GET['search'])){
    $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham where ten_sp like '%".$_GET['search']."%'");
} 


?>
<?php

if(isset($_GET['search'])){
    $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham where ten_sp like '%".$_GET['search']."%'");
    if($_GET['search']=="") {
        $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham limit ".$from.", ".$num_on_page);
    }
} 


?>
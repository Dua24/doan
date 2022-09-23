<?php
include_once "../modules/db_module.php";

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

?>
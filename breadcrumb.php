<?php
   if(isset($_GET['dm'])) {
    echo "<a href='?shop' class='breadcrumb__link breadcrumb__link-prev'>SHOP</a>
        <span class='divider'>/</span>
        <a href='?dm=".$_GET['dm']."&dm_ten=".$_GET['dm_ten']."' class='breadcrumb__link breadcrumb__link-current text-uppercase'>".$_GET['dm_ten']."</a>
    ";
   }else {
    echo "<a href='?shop' class='breadcrumb__link breadcrumb__link-current'>SHOP</a>";
   }
?>
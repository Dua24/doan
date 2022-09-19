<?php
include_once "../modules/db_module.php";
include_once "../views/category.php";

$link = null;
taoKetNoi($link);


if(isset($_GET['id'])){
    $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham where id_sp =".$_GET['id']."");
    $row = mysqli_fetch_row($result);
    $subResult = chayTruyVanTraVeDL($link, "select dm_ten from tbl_sanpham sp, tbl_danhmuc dm where sp.dm_id=dm.dm_id and sp.id_sp = ".$_GET['id']."");
    $subRow = mysqli_fetch_row($subResult);
    echo "
    <form class='row mb-30' method = 'get'>
      <div class='col-lg-6 col-12'>
        <div class='card contain-detail__product-main'>
          <div class='card-body'>
            <div class='control-detail__img-product'>
              <span class='detail-control-product detail__pre-product'>
                <i class='fa-solid fa-chevron-left'></i>
              </span>
            <div>
              <img src='".$row[3]."' alt='' class='detail__product-main-img'>
            </div>
            <span class='detail-control-product  detail__next-product'>
              <i class='fa-solid fa-chevron-right'></i>
            </span>
          </div>
          <span class='product-zoom__btn'>
            <i class='fa-solid fa-up-right-and-down-left-from-center'></i>
          </span>
        </div>
      </div>
        </div>
        <?php
          include 'detailPage_render.php';
        ?>
    <div class='col-lg-6 col-12'>
        <nav class='breadcrumbs_list col-12'>
            <a href='../index.php' class='breadcrumb__link'>HOME</a>
            <span class='divider'>/</span>
            <a href='./searchPage.php' class='breadcrumb__link breadcrumb__link'>SEARCH</a>
            <span class='divider'>/</span>
            <a href='searchPage.php?dm=".$row[4]."&dm_ten=".$subRow[0]."' class='breadcrumb__link breadcrumb__link text-uppercase' style='color:#000;font-weight:600'>".$subRow[0]."</a>
        </nav>
        <div class='detail__product-specific col-12'>
          <h1 class='detail__product-name'>".$row[1]."</h1>
          <span class='h-divider'></span>
          <div class='detail__product-contain-price'>
            <span class='detail__product-price'>".$row[2].".000</span>
            <span class='detail__product-symbolP'>₫</span>
          </div>
            <div class='form-cart__contain-size'>
              <label for='' class='form-cart__size-label'>Size</label>
              <ul class='form-cart__size-list'>
                <li class='form-cart__size-item'>
                  <span class='form-cart__size-text'>L</span>
                </li>
                <li class='form-cart__size-item'>
                  <span class='form-cart__size-text'>M</span>
                </li>
                <li class='form-cart__size-item'>
                  <span class='form-cart__size-text'>XL</span>
                </li>
              </ul>
            </div>
            <div class='form-cart__contain-add'>
                <div class='form-cart__control-quantity'>
                  <span class='quantity-control quantity-control__minus'>
                    <span>-</span>
                  </span>
                  <input type='text' class='control-quantity__current' name='quantity'>
                  <span class='quantity-control quantity-control__plus'>
                    <span>+</span>
                  </span>
                  
                </div>
                <input type='submit' class='btn btn__add-cart' value ='ADD TO CART' name ='id=2'>
            </div>
        </div>
        <div class='detail__product-ship-calculator col-12'>
          <h4 class='ship-calculator__title'>Expected Delivery Information</h4>
          <div class='ship-calculator__content'>
            <p class='ship-calculator__p'>Enter your address to view shipping options. -</p>
            <span class='ship-calculator__btn'>Calculate shipping</span>
          </div>
        </div>
        <div class='detail__product-meta col-12'>
          <span class='sku-wrapper'>
            SKU: 
            <span class='sku'>N/A</span>
          </span>
          <span class='posted-in'>
            Category:
            <a href='searchPage.php?dm=".$row[4]."&dm_ten=".$subRow[0]."'>".$subRow[0]."</a>
          </span>
        </div>
    </div>
</form>
    ";
} 
?>
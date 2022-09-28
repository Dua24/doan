<?php
session_start();
include '../models/sanpham.php  ';
include '../models/listsanpham.php  ';
if(!isset($_SESSION['giohang3'])) {
  $_SESSION['giohang3'] =[];
}
if(isset($_GET['delcart']) && $_GET['delcart']) unset($_SESSION['giohang3']);
if(isset($_GET['delItem']) && $_GET['delItem']>=0){
  array_splice($_SESSION['giohang3'],$_GET['delItem'],1);
}
if(isset($_POST['addcart']) && $_POST['addcart']) {
  $tensp = $_POST['tensp'];
  $imgsp = $_POST['imgsp'];
  $gia = $_POST['gia'];
  $quantity = $_POST['quantity'];
  $size = $_POST['size'];
 
  // check sp da ton tai cart -> + sl
  $p = 0;
  for($i=0;$i<sizeof($_SESSION['giohang3']);$i++) {
    if($_SESSION['giohang3'][$i][0] ==$tensp && $_SESSION['giohang3'][$i][3] ==$size){
      $p=1;
      $newQuantity = $quantity + $_SESSION['giohang3'][$i][4];;
      $_SESSION['giohang3'][$i][4] = $newQuantity;
      break;
    }
  }

  if($p==0) {
    $sp = [$tensp,$gia,$imgsp,$size,$quantity];
    $_SESSION['giohang3'][] = $sp;
  }
} 
function formatNum($num) {
  if(strlen($num) ==4){
    $dau =  substr($num,0,1);
    $cuoi = substr($num,1);
    return  "".$dau.".".$cuoi."";
    
  } else if(strlen($num) == 5) {
    $dau =  substr($num,0,2);
    $cuoi = substr($num,2);
    return "".$dau.".".$cuoi."";
  }
  return $num;
}
function showgiohang3() {
  if(isset($_SESSION['giohang3']) && is_array($_SESSION['giohang3']) && sizeof($_SESSION['giohang3'])>0) {
    echo "
    <table class='table' style='font-size:14px'>
      <thead style='color:#909090'>
        <tr class='row'>
        <th class='col-6 col-md-4' scope='col'>PRODUCT</th>
        <th class='col-md-2 d-md-block d-none' scope='col'>PRICE</th>
        <th class='col-md-2 d-md-block d-none' scope='col'>SIZE</th>
        <th class='col-4 col-md-2' scope='col'>QUANTITY</th>
        <th class='col-2 col-md-2' scope='col'>SUBTOTAL</th>
        </tr>
      </thead>
      <tbody>
    ";
    $total = 0;
      for($i=0;$i<sizeof($_SESSION['giohang3']);$i++) {
        $subtotal = $_SESSION['giohang3'][$i][1] * $_SESSION['giohang3'][$i][4];
        $total +=$subtotal;
        echo "
        
        <tr class='row' style='font-weight:500'>
          <th class='col-6 col-md-4' scope='row'>
              <a class='delItem' href = 'cart.php?delItem=".$i."' style='    
              margin-right: 20px;
              width: 37px;
              height: 24px;
              font-size: 15px !important;
              border-radius: 100%;
              color: #ccc;
              font-weight: bold;
              text-align: center;
              border: 2px solid currentColor;
              padding: 1px 6px;
              cursor:pointer;
          '>X</a>
              <img src='".$_SESSION['giohang3'][$i][2]."' alt='' class='' style='width:10%;margin-right:10px' />
              <span>".$_SESSION['giohang3'][$i][0]."
                <span class='d-inline d-md-none'> - ".$_SESSION['giohang3'][$i][3]."</span>
              </span>
              
          </th>
          <td class='col-md-2 d-md-block d-none'>".formatNum($_SESSION['giohang3'][$i][1]).".000đ</td>
          <td class='col-md-2 d-md-block d-none'>".$_SESSION['giohang3'][$i][3]."</td>
          <td class='col-4 col-md-2'>".$_SESSION['giohang3'][$i][4]."<span class='d-inline d-md-none'> x ".formatNum($_SESSION['giohang3'][$i][1]).".000đ</span></td>
          <td class='col-2 col-md-2'>".formatNum($subtotal).".000đ</td>
        </tr>
        ";
      }
    echo "
        <tr class='row' style= 'font-weight: 700;color: #740303;' >
          <td class='col-10 col-md-10'>
            <span >TỔNG</span>
          </td>
          <td class='col-2 col-md-2'>
            <span >".formatNum($total).".000đ</span>
          </td>
        </tr>
        <tr class='row controlShopCart' >
          <td class='col-12'>
          <a href='searchPage.php'><button style='width: 100%;
          height: 45px;
          font-weight: 600;
          background-color: #0080004a;
      '>Tiếp tục mua hàng</button></a>
          </td>
        </tr>
        <tr class='row controlShopCart' >
          <td class='col-12'>
          <a href='cart.php?delcart=1'><button style='width: 100%;
          height: 45px;
          font-weight: 600;
          background-color:#c2424263;
      '>Xóa giỏ hàng</button></a>
          </td>
        </tr>
      </tbody>
    </table>
        ";
        
  } else {
    echo "<span class='header-cart-noCart'>No products in the cart.</span>
          <a href='searchPage.php' class='controlShopCart'>
            <button style='width: 100%;
              height: 45px;
              font-weight: 600;
              background-color: #0080004a;
              font-size:14px'>
              Quay lại mua hàng
            </button>
          </a>
    "
      
    ;
  }
}


session_destroy()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/public/css/header.css" />
    <link rel="stylesheet" href="../assets/public/css/footer.css">
    <link rel="stylesheet" href="../assets/public/css/base.css">
    <link rel="stylesheet" href="../assets/public/css/modal.css">
    <link rel="stylesheet" href="../assets/public/css/category.css">
    <link rel="stylesheet" href="../assets/detailPage/css/detailPage.css">
    <link rel="stylesheet" href="../assets/searchPage/css/searchPage.css">
    <link rel="stylesheet" href="../assets/public/fonts/fontawesome-free-6.1.2-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/public/fonts/themify-icons/themify-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/public/header.js"></script>
    <title>Cart Page</title>
    <style>
      .delItem:hover{
        color:#333 !important;
        text-decoration: none;
        transition: all linear 0.3s;
      }
      .controlShopCart:hover{
        filter: brightness(0.3);
        transition: all linear 0.1s;
        
      }
    </style>
</head>
<body>
    <div class="container-fluid">
          <!-- header -->
        <?php
          $duongdan = "searchPage.php";
          $linklogo = "../assets/public/img/masthead_logo.jpg";
          $linkhome = "../index.php";
          $linksearchpage = "searchPage.php";
          $linkcart = "";
          include "header.php";
        ?>
      <!-- main -->
      <div class="container">
          <h2 style ="text-align:center; margin: 30px 0; font-size: 36px;">SHOPPING CART</h2>
                    <?php
                        showgiohang3();
                    ?>                    
      </div>
      <!-- footer -->
      <footer class="footer row">
        <div class="container">
          <div class="row d-flex align-items-center justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-6 col-6">
              <img
                src="../assets/public/img/masthead_logo.jpg"
                alt=""
                class="footer_img"
              />
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-6">
              <ul class="footer-list">
                <li class="footer-item">All BLACK</li>
                <li class="footer-item">Skatewear, travel clothing</li>
                <li class="footer-item">
                  <span class="footer-item-social">
                    <i class="fa-brands fa-facebook-f"></i>
                  </span>
                  <span class="footer-item-social">
                    <i class="fa-brands fa-instagram"></i>
                  </span>
                </li>
              </ul>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-6">
              <ul class="footer-list">
                <li class="footer-item">SUPPORT</li>
                <li class="footer-item">Sales Policy</li>
                <li class="footer-item">About Us</li>
              </ul>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-6">
              <img src="../assets/public/img/footer-img.jpg" alt="" class="footer_img" />
            </div>
          </div>
        </div>
      </footer>
    </div>
    
  </body>
</html>

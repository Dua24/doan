<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
echo "
<header id='header' class='row'>
<div class='header__top col-12'>
  <div class='container d-flex h-100 justify-content-between'>
    <div class='row w-100'>
      <strong class='header__top-label col-xl-10 col-lg-10 col-md-12'
        >All BLVCK Skatewear, travel clothing Good friends only.</strong
      >
      <ul
        class='header__top-list col-xl-2 col-lg-2 d-xl-flex d-lg-flex d-md-none justify-content-end'
      >
        <li class='header__top-item'>
          <a class='header__top-link'>
            <i class='fa-brands fa-facebook-f'></i>
          </a>
          <div class='header__top-item-label'>Follow on Facebook</div>
        </li>
        <li class='header__top-item'>
          <a class='header__top-link'>
            <i class='fa-brands fa-instagram'></i>
          </a>
          <div class='header__top-item-label'>Follow on Instagram</div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class='masthead col-12'>
  <div class='container d-flex align-items-center'>
    <div class='row w-100'>
        <div class='menu-in_md d-xl-none d-lg-none col-md-2 col-2'>
            <i class='fa-solid fa-bars'></i>
            <!-- MODAL MENU -->
                <!-- class 'menu' for modal-layout -->
                <div class='modal-layout modal-layout-menu'>
                  <div class='contain-modal'>
                      <div class='modal-inner modal-inner-menu'>
                          <form action='' class='modal-inner__search'>
                              <input type='text' class='modal-inner__search-input' name ='search'>
                              <button class='btn btn__primary'>
                                  <i class='fa-solid fa-magnifying-glass'></i>
                              </button>
                          </form>
                          <ul class='modal-inner__list'>
                              <li class='modal-inner__item'>
                                  <a href='".$linksearchpage."' class='modal-inner__item-link'>search page</a>
                              </li>
                              <li class='modal-inner__item'>
                                  <a href='".$linkcart."' class='modal-inner__item-link'>cart page</a>
                              </li>
                              <li class='modal-inner__item login'>
                                  <a href='#' class='modal-inner__item-link'>login</a>
                              </li>
                              <li class='modal-inner__item register'>
                                  <a href='#' class='modal-inner__item-link'>register</a>
                              </li>
                              <li class='modal-inner__item'>
                                  <a href='' class='modal-inner__item-link'>
                                      <i class='fa-brands fa-facebook-f'></i>
                                      <i class='fa-brands fa-instagram'></i>
                                      </a>
                              </li>
                          </ul>
                          <span class='modal-exit menu'>
                              <i class='fa-solid fa-xmark'></i>
                          </span>
                      </div>
                  </div>
              </div>
            
        </div>
      <div class='masthead__logo col-xl-2 col-lg-2 col-md-8 col-8'>
        <a
          href='".$linkhome."'
          class='masthead__logo-link'
        >
          <img src='".$linklogo."' alt='' />
        </a>
      </div>
      <ul class='masthead__list justify-content-start col-xl-5 col-lg-5 d-xl-flex d-lg-flex d-md-none d-none'>
        <li class='masthead__item'>
          <a
            href='".$duongdan."'
            class='masthead__item-link'
            >SEARCH PAGE</a
          >
        </li>
        <li class='masthead__item'>
          <a
            href='".$linkcart."'
            class='masthead__item-link'
            >CART</a
          >
        </li>
       
      </ul>
      <ul class='masthead__list row align-items-center justify-content-end col-xl-5 col-lg-5 col-md-2 col-2 d-xl-flex d-lg-flex d-md-flex d-flex'>

";
?>
<?php
  if(!isset($_GET['msg']) && !isset($_SESSION['username'])) {
    echo "
    <li class='masthead__item masthead__item-login d-xl-block d-lg-block d-md-none d-none'>
      LOGIN
    </li>
    <li class='masthead__item masthead__item-register d-xl-block d-lg-block d-md-none d-none'>
      REGISTER
    </li>
";
  } else if(isset($_GET['msg'])) {
        if($_GET['msg'] == "done"){
          echo "<div style='font-size:1.3rem;font-weight:500; color:#008000cc'>Bạn đã đăng ký tài khoản thành công</div>
                <li class='masthead__item masthead__item-login d-xl-block d-lg-block d-md-none d-none'>
                  LOGIN
                </li>
          ";
      } else if($_GET['msg'] == "unvalid-data") {
          echo "<div style='font-size:1.3rem;font-weight:500; color:#aaaa11'>Warning: Vui lòng kiểm tra lại dữ liệu nhập vào</div>
                <li class='masthead__item masthead__item-register d-xl-block d-lg-block d-md-none d-none'>
                  REGISTER
                </li>
          ";
      } else if($_GET['msg'] =="duplicate"){
          echo "<div style='font-size:1.3rem;font-weight:500; color:#aaaa11'>Warning: Tài khoản của bạn đã tồn lại</div>
                <li class='masthead__item masthead__item-register d-xl-block d-lg-block d-md-none d-none'>
                  REGISTER
                </li>
          ";
      } else if($_GET['msg']=="login-fail") {
          echo "<div style='font-size:1.3rem;font-weight:500; color:#8a0707'>Error: Tài khoản và mật khẩu không đúng. Vui lòng kiểm tra lại !</div>
                <li class='masthead__item masthead__item-login d-xl-block d-lg-block d-md-none d-none'>
                  LOGIN
                </li>
          ";
      
      } else if($_GET['msg']=='log-out') {
        echo "
            <li class='masthead__item masthead__item-login d-xl-block d-lg-block d-md-none d-none'>
              LOGIN
          </li>
          <li class='masthead__item masthead__item-register d-xl-block d-lg-block d-md-none d-none'>
              REGISTER
          </li>
        ";
      }
  }
  if(isset($_SESSION['username'])) {
      echo "
            <li class='masthead__item d-xl-block d-lg-block d-md-none d-none'>
              <div class='user'>
                <span class='text-uppercase' style='color: #706f6f;
                font-weight: 700; letter-spacing:1px'>".$_SESSION['username']."</span>
              </div>
          </li>
          <li class='masthead__item d-xl-block d-lg-block d-md-none d-none'>
              <form action='dangxuat.php'>
                <input style='
                color: var(--black-color);
                font-size: 1.4rem;
                font-weight: 600;
                line-height: 1.4rem;
                border: none;
                background-color: #fff;' type='submit' class='text-uppercase' value ='LOG OUT'>
              </form>
          </li>
      ";
  }

?>
<?php
echo "
      </ul>
    </div>
  </div>
</div>
</header>
";

?>
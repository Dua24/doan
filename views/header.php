<?php
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
      <ul class='masthead__list justify-content-end col-xl-5 col-lg-5 col-md-2 col-2 d-xl-flex d-lg-flex d-md-flex d-flex'>
        <div class='row align-items-center'>
            <li class='masthead__item masthead__item-login d-xl-block d-lg-block d-md-none d-none'>
              LOGIN
            </li>
            
        </div>
      </ul>
    </div>
  </div>
</div>
</header>
";


?>
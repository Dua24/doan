<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/public/css/header.css" />
    <link rel="stylesheet" href="../assets/public/css/footer.css">
    <link rel="stylesheet" href="../assets/public/css/base.css">
    <link rel="stylesheet" href="../assets/public/css/modal.css">
    <link rel="stylesheet" href="../assets/public/css/category.css">
    <link rel="stylesheet" href="../assets/detailPage/css/detailPage.css">
    <link rel="stylesheet" href="../assets/public/css/detail_product.css">
    <link rel="stylesheet" href="../assets/public/fonts/fontawesome-free-6.1.2-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/public/fonts/themify-icons/themify-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/public/header.js"></script>

    <title>Detail</title>
  </head>
  <body>
      <div class="container-fluid">
         <!-- header -->
      <header id="header" class="row">
        <div class="header__top col-12">
          <div class="container d-flex h-100 justify-content-between">
            <div class="row w-100">
              <strong class="header__top-label col-xl-10 col-lg-10 col-md-12"
                >All BLVCK Skatewear, travel clothing Good friends only.</strong
              >
              <ul
                class="header__top-list col-xl-2 col-lg-2 d-xl-flex d-lg-flex d-md-none justify-content-end"
              >
                <li class="header__top-item">
                  <a class="header__top-link">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                  <div class="header__top-item-label">Follow on Facebook</div>
                </li>
                <li class="header__top-item">
                  <a class="header__top-link">
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                  <div class="header__top-item-label">Follow on Instagram</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="masthead col-12">
          <div class="container d-flex align-items-center">
            <div class="row w-100">
                <div class="menu-in_md d-xl-none d-lg-none col-md-2 col-2">
                    <i class="fa-solid fa-bars"></i>
                    <!-- MODAL MENU -->
                        <!-- class "menu" for modal-layout -->
                        <div class="modal-layout modal-layout-menu">
                          <div class="contain-modal">
                              <div class="modal-inner modal-inner-menu">
                                  <form action="" class="modal-inner__search">
                                      <input type="text" class="modal-inner__search-input" name ="search">
                                      <button class="btn btn__primary">
                                          <i class="fa-solid fa-magnifying-glass"></i>
                                      </button>
                                  </form>
                                  <ul class="modal-inner__list">
                                      <li class="modal-inner__item">
                                          <a href="../index.php" class="modal-inner__item-link">home page</a>
                                      </li>
                                      <li class="modal-inner__item login">
                                          <a href="#" class="modal-inner__item-link">login</a>
                                      </li>
                                      <li class="modal-inner__item register">
                                          <a href="#" class="modal-inner__item-link">register</a>
                                      </li>
                                      <li class="modal-inner__item">
                                          <a href="" class="modal-inner__item-link">
                                              <i class="fa-brands fa-facebook-f"></i>
                                              <i class="fa-brands fa-instagram"></i>
                                              </a>
                                      </li>
                                  </ul>
                                  <span class="modal-exit menu">
                                      <i class="fa-solid fa-xmark"></i>
                                  </span>
                              </div>
                          </div>
                      </div>
                    
                </div>
              <div class="masthead__logo col-xl-2 col-lg-2 col-md-8 col-8">
                <a
                  href="../index.php"
                  class="masthead__logo-link"
                >
                  <img src="../assets/public/img/masthead_logo.jpg" alt="" />
                </a>
              </div>
              <ul class="masthead__list justify-content-start col-xl-5 col-lg-5 d-xl-flex d-lg-flex d-md-none d-none">
                <li class="masthead__item">
                  <a
                    href="searchPage.php"
                    class="masthead__item-link"
                    >SEARCH PAGE</a
                  >
                </li>
               
              </ul>
              <ul class="masthead__list justify-content-end col-xl-5 col-lg-5 col-md-2 col-2 d-xl-flex d-lg-flex d-md-flex d-flex">
                <div class="row align-items-center">
                    <li class="masthead__item masthead__item-login d-xl-block d-lg-block d-md-none d-none">
                      LOGIN
                    </li>
                    <li class="header-divider d-xl-block d-lg-block d-md-none d-none"></li>
                    <li class="masthead__item header-cart d-xl-block d-lg-block d-md-block d-block">
                      <div class="masthead__item-link">
                        <span class="header-cart__title d-lg-block d-none">
                          CART /
                          <span class="header-cart_price"> 0 </span>
                          <span class="header-cart__symbol">₫</span>
                        </span>
                        <span class="header-cart__icon">
                          <strong> 0 </strong>
                        </span>
                      </div>
                      <!-- CART -->
                      <div class="header-cart__list has-cart">
                        <!-- No Cart -->
                        <span class="header-cart-noCart"
                          >No products in the cart.</span
                        >
                        <!-- class: has-cart -->
                        <div class="contain_cart-list">
                          <ul class="cart-list">
                            <li class="cart-item">
                              <img
                                src="../assets/public/img/main-home-img.jpg"
                                alt=""
                                class="cart-item__img"
                              />
                              <div class="cart-item__content">
                                <div class="cart-item-content__main">
                                  <span class="cart-item__name"
                                    >Skull short-32</span
                                  >
                                  <span class="divide">-</span>
                                  <span class="cart-item__size">XL</span>
                                </div>
                                <div class="cart-item-content__sub">
                                  <span class="cart-item__quantity">1</span>
                                  <span class="minus">x</span>
                                  <span class="cart-item__price"
                                    >450.000
                                    <span class="pSymbol">₫</span>
                                  </span>
                                </div>
                              </div>
                              <div class="cart-item__delete">
                                <span>x</span>
                              </div>
                            </li>
                            <li class="cart-item">
                              <img
                                src="../assets/public/img/main-home-img.jpg"
                                alt=""
                                class="cart-item__img"
                              />
                              <div class="cart-item__content">
                                <div class="cart-item-content__main">
                                  <span class="cart-item__name"
                                    >Skull short-32</span
                                  >
                                  <span class="divide">-</span>
                                  <span class="cart-item__size">XL</span>
                                </div>
                                <div class="cart-item-content__sub">
                                  <span class="cart-item__quantity">1</span>
                                  <span class="minus">x</span>
                                  <span class="cart-item__price"
                                    >450.000
                                    <span class="pSymbol">₫</span>
                                  </span>
                                </div>
                              </div>
                              <div class="cart-item__delete">
                                <span>x</span>
                              </div>
                            </li>
                            <li class="cart-item">
                              <img
                                src="../assets/public/img/main-home-img.jpg"
                                alt=""
                                class="cart-item__img"
                              />
                              <div class="cart-item__content">
                                <div class="cart-item-content__main">
                                  <span class="cart-item__name"
                                    >Skull short-32</span
                                  >
                                  <span class="divide">-</span>
                                  <span class="cart-item__size">XL</span>
                                </div>
                                <div class="cart-item-content__sub">
                                  <span class="cart-item__quantity">1</span>
                                  <span class="minus">x</span>
                                  <span class="cart-item__price"
                                    >450.000
                                    <span class="pSymbol">₫</span>
                                  </span>
                                </div>
                              </div>
                              <div class="cart-item__delete">
                                <span>x</span>
                              </div>
                            </li>
                            <li class="cart-item">
                              <img
                                src="../assets/public/img/main-home-img.jpg"
                                alt=""
                                class="cart-item__img"
                              />
                              <div class="cart-item__content">
                                <div class="cart-item-content__main">
                                  <span class="cart-item__name"
                                    >Skull short-32</span
                                  >
                                  <span class="divide">-</span>
                                  <span class="cart-item__size">XL</span>
                                </div>
                                <div class="cart-item-content__sub">
                                  <span class="cart-item__quantity">1</span>
                                  <span class="minus">x</span>
                                  <span class="cart-item__price"
                                    >450.000
                                    <span class="pSymbol">₫</span>
                                  </span>
                                </div>
                              </div>
                              <div class="cart-item__delete">
                                <span>x</span>
                              </div>
                            </li>
                            <li class="cart-item">
                              <img
                                src="../assets/public/img/main-home-img.jpg"
                                alt=""
                                class="cart-item__img"
                              />
                              <div class="cart-item__content">
                                <div class="cart-item-content__main">
                                  <span class="cart-item__name"
                                    >Skull short-32</span
                                  >
                                  <span class="divide">-</span>
                                  <span class="cart-item__size">XL</span>
                                </div>
                                <div class="cart-item-content__sub">
                                  <span class="cart-item__quantity">1</span>
                                  <span class="minus">x</span>
                                  <span class="cart-item__price"
                                    >450.000
                                    <span class="pSymbol">₫</span>
                                  </span>
                                </div>
                              </div>
                              <div class="cart-item__delete">
                                <span>x</span>
                              </div>
                            </li>
                          </ul>
                          <div class="cart-list__control">
                            <div class="cart-list__subtotal">
                              <label for="" class="cart-list__total-label"
                                >Subtotal:</label
                              >
                              <div class="cart-list__price">
                                1.000.000
                                <span class="cart-pSymbol">₫</span>
                              </div>
                            </div>
                            <div class="btn btn-viewcart">VIEW CART</div>
                            <div class="btn btn-checkout">CHECKOUT</div>
                          </div>
                        </div>
                      </div>

                    </li>
                    <!-- CART IN <= IPAD -->
                    <div class="modal-layout">
                      <div class="modal-inner modal-inner-cart">
                        <!-- No Cart -->
                        <div class="contain-modal h-100">
                          <h3 class="modal-cart__heading">CART</h3>
                          <!-- <div class="modal-noCart">
                            <span class="divide-heading"></span>
                            <span class="header-cart-noCart"
                              >No products in the cart.</span>
                          </div> -->
                          <div class="contain_cart-list">
                            <ul class="cart-list">
                              <li class="cart-item">
                                <img
                                  src="../assets/homePage/img/main_img.png"
                                  alt=""
                                  class="cart-item__img"
                                />
                                <div class="cart-item__content">
                                  <div class="cart-item-content__main">
                                    <span class="cart-item__name"
                                      >Skull short-32</span
                                    >
                                    <span class="divide">-</span>
                                    <span class="cart-item__size">XL</span>
                                  </div>
                                  <div class="cart-item-content__sub">
                                    <span class="cart-item__quantity">1</span>
                                    <span class="minus">x</span>
                                    <span class="cart-item__price"
                                      >450.000
                                      <span class="pSymbol">₫</span>
                                    </span>
                                  </div>
                                </div>
                                <div class="cart-item__delete">
                                  <span>x</span>
                                </div>
                              </li>
                              <li class="cart-item">
                                <img
                                  src="../assets/homePage/img/main_img.png"
                                  alt=""
                                  class="cart-item__img"
                                />
                                <div class="cart-item__content">
                                  <div class="cart-item-content__main">
                                    <span class="cart-item__name"
                                      >Skull short-32</span
                                    >
                                    <span class="divide">-</span>
                                    <span class="cart-item__size">XL</span>
                                  </div>
                                  <div class="cart-item-content__sub">
                                    <span class="cart-item__quantity">1</span>
                                    <span class="minus">x</span>
                                    <span class="cart-item__price"
                                      >450.000
                                      <span class="pSymbol">₫</span>
                                    </span>
                                  </div>
                                </div>
                                <div class="cart-item__delete">
                                  <span>x</span>
                                </div>
                              </li>
                              
                            </ul>
                            <div class="cart-list__control">
                              <div class="cart-list__subtotal">
                                <label for="" class="cart-list__total-label"
                                  >Subtotal:</label
                                >
                                <div class="cart-list__price">
                                  1.000.000
                                  <span class="cart-pSymbol">₫</span>
                                </div>
                              </div>
                              <div class="btn btn-viewcart">VIEW CART</div>
                              <div class="btn btn-checkout">CHECKOUT</div>
                            </div>
                          </div>
                        </div>
                        <!-- Has cart -->
                        <span class="modal-exit">
                          <i class="fa-solid fa-xmark"></i>
                        </span>
                      </div>
                    </div>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <!-- content -->
      <div class="content-detail">
        <div class="contain-detail container">
          <div class="row">
            <!-- Category -->
            <div class="col-xl-3 col-lg-3 d-xl-block d-lg-block d-none d-sm-none main-sPage__content-category">
              <ul class="category-list">
                  <ul class="category-list">
                      <?php
                        include 'category.php';
                      ?>
                  </ul>
                  
              </ul>
          </div>
            <div class="col-xl-9 col-lg-9 col-12 contain-detail__product">
                <?php
                  include "../models/detailPage_render.php";
                ?>
              <div class="row product-footer">
                <ul class="product-footer_accordian">
                  <li class="product-footer_accordian-item">
                    <span class="accordian-item-title">
                      <i class="fa-solid fa-chevron-down"></i>
                      Description
                    </span>
                    <!-- <div class="more-accordian__item">
                      <img src="./public/img/size_chart.jpg" alt="">
                    </div> -->
                  </li>
                  <li class="product-footer_accordian-item">
                    <span class="accordian-item-title">
                      <i class="fa-solid fa-chevron-down"></i>
                      Additional information
                    </span>
                    <!-- <div class="more-accordian__item">
                      
                    </div> -->
                  </li>
                  <li class="product-footer_accordian-item">
                    <span class="accordian-item-title">
                      <i class="fa-solid fa-chevron-down"></i>
                      Reviews (0)
                    </span>
                    <!-- <div class="more-accordian__item">
                      
                    </div> -->
                  </li>
                </ul>
                <!-- Related product -->
                <!-- <div class="product-footer_related">
                  <h2 class="product-footer_related-title">Related products</h2>
                </div> -->
              </div>
            </div>
          </div>
        </div>
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
  
              <!-- MODAL_LOGIN -->
              <!-- add class "login" for modal-layout -->
              <div class="modal-layout modal-layout-login">
                <div class="contain-modal">
                    <div class="modal-inner modal-inner-login">
                        <h2 class="modal-heading modal-heading__login">Login</h2>
                        <form>
                            <div class="form-group form-group__wrapper">
                            <label for="exampleInputEmail11">Username or email address </label>
                            <input type="email" class="form-control" id="exampleInputEmail11"  placeholder="Enter email">
                            </div>
                            <div class="form-group form-group__wrapper">
                            <label for="exampleInputPassword11">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword11" placeholder="Password">
                            </div>
                            <div class="form-check form-check__wrapper">
                            <input type="checkbox" class="form-check-input" id="exampleCheck11">
                            <label class="form-check-label" for="exampleCheck11">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn__primary">Log in</button>
                            <span class="lost-pw">Lost your password?</span>
                        </form>
                        <span class="modal-exit">
                          <i class="fa-solid fa-xmark"></i>
                      </span>
                    </div>
                </div>
            </div>
            <!-- MODAL_register -->
            <!-- add class "register" for modal-layout -->
            <div class="modal-layout modal-layout-register">
              <div class="contain-modal">
                  <div class="modal-inner modal-inner-register">
                      <h2 class="modal-heading modal-heading__register">register</h2>
                      <form>
                          <div class="form-group form-group__wrapper">
                          <label for="exampleInputEmail2">Username or email address </label>
                          <input type="email" class="form-control" id="exampleInputEmail2"  placeholder="Enter email">
                          </div>
                          <div class="form-group form-group__wrapper">
                          <label for="exampleInputPassword2">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                          </div>
                          <div class="form-group form-group__wrapper">
                            <label for="exampleInputPassword3">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                            </div>
                          <button type="submit" class="btn btn__primary">Register</button>
                      </form>
                      <span class="modal-exit">
                        <i class="fa-solid fa-xmark"></i>
                    </span>
                  </div>
              </div>
          </div>
      </div>
      
  </body>
</html>

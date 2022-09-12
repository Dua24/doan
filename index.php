<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./homePage/css/style.css" />
    <link rel="stylesheet" href="./public/css/base.css" />
    <link rel="stylesheet" href="./public/css/header.css" />
    <link rel="stylesheet" href="./public/css/footer.css" />
    <link rel="stylesheet" href="./public/css/modal.css" />
    <link
      rel="stylesheet"
      href="./public/fonts/fontawesome-free-6.1.2-web/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="./public/fonts/themify-icons/themify-icons.css"
    />
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
    <script src="./public/header.js"></script>
    <title>Home Pageeee</title>
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
                                    <div class="modal-inner__search">
                                        <input type="text" class="modal-inner__search-input">
                                        <button class="btn btn__primary">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </div>
                                    <ul class="modal-inner__list">
                                        <li class="modal-inner__item">
                                            <a href="./searchPage.php" class="modal-inner__item-link">search page</a>
                                        </li>
                                        <li class="modal-inner__item">
                                            <a href="./detailPage.php" class="modal-inner__item-link">detail page</a>
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
                  href="./index.php"
                  class="masthead__logo-link"
                >
                  <img src="./public/img/masthead_logo.jpg" alt="" />
                </a>
              </div>
              <ul class="masthead__list justify-content-start col-xl-5 col-lg-5 d-xl-flex d-lg-flex d-md-none d-none">
                <li class="masthead__item">
                  <a
                    href="./searchPage.php"
                    class="masthead__item-link"
                    >SEARCH PAGE</a
                  >
                </li>
                <li class="masthead__item">
                  <a
                    href="./detailPage.php"
                    class="masthead__item-link"
                    >DETAIL PAGE</a
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
                        <span class="header-cart__title">
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
                                src="./public/img/main-home-img.jpg"
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
                                src="./public/img/main-home-img.jpg"
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
                                src="./public/img/main-home-img.jpg"
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
                                src="./public/img/main-home-img.jpg"
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
                                src="./public/img/main-home-img.jpg"
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
                                  src="./homePage/img/"
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
                                  src="./homePage/img/"
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
      <!-- main -->
      <main class="row">
        <div class="container">
          <div class="row">
            <div
              class="col-xl-12 col-md-12 col-12 d-flex align-items-center justify-content-center"
            >
              <img src="./public/img/main-home-img.jpg" alt="" class="main__img" />
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12 d-flex flex-column main__slider">
              <h2 class="main__slider-heading">
                <b></b>
                <span class="main__slider-text">NEW REALEASE</span>
                <b></b>
              </h2>
              <!-- slider -->
              <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- The slideshow -->
                <div class="carousel-inner d-flex m-auto">
                  <div class="carousel-item active">
                    <div class="row">
                        <ul class="row carousel-item-list">
                          <li class="col-xl-3 col-lg-3 col-md-4 col-6 carousel-item-product">
                            <img
                              src="./homePage/img/main_product-2.jpg"
                              alt=""
                            />
                          </li>
                          <li class="col-xl-3 col-lg-3 col-md-4 col-6 carousel-item-product">
                            <img
                              src="./homePage/img/main_product-3.jpg"
                              alt=""
                            />
                          </li>
                          <li class="col-xl-3 col-lg-3 col-md-4 d-xl-block d-lg-block d-md-block d-none  carousel-item-product">
                            <img
                              src="./homePage/img/main_product-4.jpg"
                              alt=""
                            />
                          </li>
                          <li class="col-xl-3 col-lg-3 d-xl-block d-lg-block d-md-none d-none carousel-item-product">
                            <img
                              src="./homePage/img/main_product-5.jpg"
                              alt=""
                            />
                          </li>
                        </ul>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <ul class="row carousel-item-list">
                      <li class="col-xl-3 col-lg-3 col-md-4 col-6 carousel-item-product">
                        <img
                          src="./homePage/img/main_img.png"
                          alt=""
                        />
                      </li>
                      <li class="col-xl-3 col-lg-3 col-md-4 col-6 carousel-item-product">
                        <img
                          src="./homePage/img/main_product-5.jpg"
                          alt=""
                        />
                      </li>
                      <li class="col-xl-3 col-lg-3 col-md-4 col-md-4 d-xl-block d-lg-block d-md-block d-none carousel-item-product">
                        <img
                          src="./homePage/img/main_product-4.jpg"
                          alt=""
                        />
                      </li>
                      <li class="col-xl-3 col-lg-3 col-md-4 d-xl-block d-lg-block d-md-none d-none carousel-item-product">
                        <img
                          src="./homePage/img/main_product-3.jpg"
                          alt=""
                        />
                      </li>
                    </ul>
                  </div>
                  <div class="carousel-item">
                    <ul class="row carousel-item-list">
                      <li class="col-xl-3 col-lg-3 col-md-4 col-6 carousel-item-product">
                        <img
                          src="./homePage/img/main_product-2.jpg"
                          alt=""
                        />
                      </li>
                      <li class="col-xl-3 col-lg-3 col-md-4 col-6 carousel-item-product">
                        <img
                          src="./homePage/img/main_product-5.jpg"
                          alt=""
                        />
                      </li>
                      <li class="col-xl-3 col-lg-3 col-md-4 col-md-4 d-xl-block d-lg-block d-md-block d-none carousel-item-product">
                        <img
                          src="./searchPage/img/main_product.jpg"
                          alt=""
                        />
                      </li>
                      <li class="col-xl-3 col-lg-3 col-md-4 d-xl-block d-lg-block d-md-none d-none carousel-item-product">
                        <img
                          src="./homePage/img/main_product-4.jpg"
                          alt=""
                        />
                      </li>
                    </ul>
                  </div>
                </div>

                <!-- Left and right controls -->
                <a
                  class="carousel-control-prev d-flex justify-content-start carousel-control"
                  href="#demo"
                  data-slide="prev"
                >
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a
                  class="carousel-control-next d-flex justify-content-end carousel-control"
                  href="#demo"
                  data-slide="next"
                  >
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12 d-flex flex-column main__slider">
              <h2 class="main__slider-heading">
                <b></b>
                <span class="main__slider-text"
                  >ALL BLVCK SKATEWEAR, TRAVEL CLOTHING.</span
                >
                <b></b>
              </h2>
              <div class="row">
                <div
                  class="card col-xl-6 col-md-6 col-12 main__product justify-content-center align-items-center"
                >
                <div class="card-body">
                  <img
                    src="./homePage/img/type_img.png"
                    alt=""
                    class="main__product-img "
                  />
                </div>
                </div>
                <div
                  class="card col-xl-6 col-md-6 col-12 main__product justify-content-center align-items-center"
                >
                <div class="card-body">
                  <img
                    src="./homePage/img/type_img2.png"
                    alt=""
                    class="main__product-img "
                  />
                </div>
                </div>
                <div
                  class="card col-xl-6 col-md-6 col-12 main__product justify-content-center align-items-center"
                >
                <div class="card-body">
                  <img
                    src="./homePage/img/type_img3.png"
                    alt=""
                    class="main__product-img "
                  />
                </div>
                </div>
                <div
                  class="card col-xl-6 col-md-6 col-12 main__product justify-content-center align-items-center"
                >
                <div class="card-body">
                  <img
                    src="./homePage/img/type_img4.png"
                    alt=""
                    class="main__product-img "
                  />
                </div>
                </div>
                <div
                  class="card col-xl-6 col-md-6 col-12 main__product justify-content-center align-items-center"
                >
                <div class="card-body">
                  <img
                    src="./homePage/img/type_img5.png"
                    alt=""
                    class="main__product-img "
                  />
                </div>
                </div>
                <div
                  class="card col-xl-6 col-md-6 col-12 main__product justify-content-center align-items-center"
                >
                <div class="card-body">
                  <img
                    src="./homePage/img/type_img6.png"
                    alt=""
                    class="main__product-img "
                  />
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12 d-flex flex-column main__slider">
              <h2 class="main__slider-heading">
                <b></b>
                <span class="main__slider-text"
                  >HAVE FUN WITH THE HOMIES - LIFE STYLE</span
                >
                <b></b>
              </h2>
              <div class="row">
                <div class="card col-xl-4 col-lg-4 col-md-4 main__subProduct">
                  <div class="card-body">
                    <img src="./public/img/masthead_logo.jpg" alt="" />
                  </div>
                </div>
                <div class="card col-xl-4 col-lg-4 col-md-4 main__subProduct">
                  <div class="card-body">
                    <img
                      src="./homePage/img/main_subProduct.jpg"
                      alt=""
                    />
                  </div>
                </div>
                <div class="card col-xl-4 col-lg-4 col-md-4 main__subProduct">
                  <div class="card-body">
                    <img
                      src="./homePage/img/life-style__img.jpg"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <!-- footer -->
      <footer class="footer row">
        <div class="container">
          <div class="row d-flex align-items-center justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-6 col-6">
              <img
                src="./public/img/masthead_logo.jpg"
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
              <img src="./public/img/footer-img.jpg" alt="" class="footer_img" />
            </div>
          </div>
        </div>
      </footer>
    </div>

    <!-- MODAL_LOGIN -->
            <!-- add class "login" for modal-layout -->
            <div class="modal-layout modal-layout-login">
                <div class="contain-modal">
                    <div class="modal-inner modal-inner-login">
                        <h2 class="modal-heading modal-heading__login">Login</h2>
                        <form>
                            <div class="form-group form-group__wrapper">
                            <label for="exampleInputEmail1">Username or email address </label>
                            <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">
                            </div>
                            <div class="form-group form-group__wrapper">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-check form-check__wrapper">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
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

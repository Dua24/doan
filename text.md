<!-- render -->

1. category -> dm
2. search input -> search
3. sort -> sort

/
                    <span class='header-cart_price'> 0 </span>
                    <span class='header-cart__symbol'>₫</span>
                  </span>
                  <span class='header-cart__icon'>
                    <strong> 0 </strong>

login reigster
<li class='masthead__item masthead__item-login d-xl-block d-lg-block d-md-none d-none'>
      LOGIN
    </li>
    <li class='masthead__item masthead__item-register d-xl-block d-lg-block d-md-none d-none'>
      REGISTER
    </li>

user 
















 <!-- CART IN <= IPAD -->
            <div class='modal-layout'>
              <div class='modal-inner modal-inner-cart'>
                <!-- No Cart -->
                <div class='contain-modal h-100'>
                  <h3 class='modal-cart__heading'>CART</h3>
                  <!-- <div class='modal-noCart'>
                    <span class='divide-heading'></span>
                    <span class='header-cart-noCart'
                      >No products in the cart.</span>
                  </div> -->
                  <div class='contain_cart-list'>
                    <ul class='cart-list'>
                      <li class='cart-item'>
                        <img
                          src='assets/homePage/img/main_img.png'
                          alt=''
                          class='cart-item__img'
                        />
                        <div class='cart-item__content'>
                          <div class='cart-item-content__main'>
                            <span class='cart-item__name'
                              >Skull short-32</span
                            >
                            <span class='divide'>-</span>
                            <span class='cart-item__size'>XL</span>
                          </div>
                          <div class='cart-item-content__sub'>
                            <span class='cart-item__quantity'>1</span>
                            <span class='minus'>x</span>
                            <span class='cart-item__price'
                              >450.000
                              <span class='pSymbol'>₫</span>
                            </span>
                          </div>
                        </div>
                        <div class='cart-item__delete'>
                          <span>x</span>
                        </div>
                      </li>
                      <li class='cart-item'>
                        <img
                          src='assets/homePage/img/main_img.png'
                          alt=''
                          class='cart-item__img'
                        />
                        <div class='cart-item__content'>
                          <div class='cart-item-content__main'>
                            <span class='cart-item__name'
                              >Skull short-32</span
                            >
                            <span class='divide'>-</span>
                            <span class='cart-item__size'>XL</span>
                          </div>
                          <div class='cart-item-content__sub'>
                            <span class='cart-item__quantity'>1</span>
                            <span class='minus'>x</span>
                            <span class='cart-item__price'
                              >450.000
                              <span class='pSymbol'>₫</span>
                            </span>
                          </div>
                        </div>
                        <div class='cart-item__delete'>
                          <span>x</span>
                        </div>
                      </li>
                      
                    </ul>
                    <div class='cart-list__control'>
                      <div class='cart-list__subtotal'>
                        <label for='' class='cart-list__total-label'
                          >Subtotal:</label
                        >
                        <div class='cart-list__price'>
                          1.000.000
                          <span class='cart-pSymbol'>₫</span>
                        </div>
                      </div>
                      <div class='btn btn-viewcart'>VIEW CART</div>
                      <div class='btn btn-checkout'>CHECKOUT</div>
                    </div>
                  </div>
                </div>
                <!-- Has cart -->
                <span class='modal-exit'>
                  <i class='fa-solid fa-xmark'></i>
                </span>
              </div>
            </div>



            echo "</ul>
                    <div class='cart-list__control'>
                    <div class='cart-list__subtotal'>
                    <label for='' class='cart-list__total-label'
                        >Subtotal:</label
                    >
                    <div class='cart-list__price'>
                        1.000.000
                        <span class='cart-pSymbol'>₫</span>
                    </div>
                    </div>
                </div>
                </div>
            ";
            


              <div class='cart-item'>
                <img
                src='".$sp->getImg()."'
                alt=''
                class='cart-item__img'
                />
                <div class='cart-item__content'>
                <div class='cart-item-content__main'>
                    <span class='cart-item__name'
                    >".$sp->getTen()."</span
                    >
                    <span class='divide'>-</span>
                    <span class='cart-item__size'>".$sp->getSize_sp()."</span>
                </div>
                <div class='cart-item-content__sub'>
                    <span class='cart-item__quantity'>".$sp->getSl_sp()."</span>
                    <span class='minus'>x</span>
                    <span class='cart-item__price'
                    >".$sp->getGia()."
                  <span class='pSymbol'>₫</span>
                    </span>
                </div>
                </div>
                <div class='cart-item__delete'>
                    <span>x</span>
                </div>
            </div>
                ";
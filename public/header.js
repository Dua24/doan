window.onload = function() {
    const loginBtn = document.querySelector(".masthead__item-login")
    const loginInMenu = document.querySelector(".modal-inner__item.login")
    const registerInMenu = document.querySelector(".modal-inner__item.register")
    const quickViewBtn = document.getElementsByClassName("product-quickview")
    

    // handle click size changes
    ;(function() {
        const size = document.querySelectorAll(".form-cart__size-item");
        for(let i=0;i<size.length;i++) {
            size[i].onclick = function() {
                removeActive(i)
                size[i].classList.add("active")
            }
        }
        function removeActive() {
            for(let i=0;i<size.length;i++) {
                size[i].classList.remove("active")
            }
        }
    })()
    // show quickview
    for(let i=0;i<quickViewBtn.length;i++) {
        quickViewBtn[i].onclick = function() {
            showModal("quickview")
        }
    }
    function showModal(type) {
        const modalLayout = document.querySelector(`.modal-layout.modal-layout-${type}`)
        const modalInner = document.querySelector(`.modal-inner-${type}`)
        modalLayout.classList.add(`${type}`)
        const modalExit = document.querySelectorAll(`.modal-exit`)
        for(let i=0;i<modalExit.length;i++) {
            modalExit[i].onclick = function() {
                modalLayout.classList.remove(`${type}`)
            }
        }
        modalLayout.onclick = function() {
            modalLayout.classList.remove(`${type}`)
        }
        modalInner.onclick = function(e) {
            e.stopPropagation()
        }
}        
    loginBtn.onclick = function() {
        showModal("login")
    }
    loginInMenu.onclick = function() {
        showModal("login")
    }
    registerInMenu.onclick = function() {
        showModal("register")
    }
    
    // Handle quantity
    ;(function() {
        const minusBtn =document.querySelector(".quantity-control__minus");
        const plusBtn =document.querySelector(".quantity-control__plus");
        const quanity_inProduct =document.querySelector(".control-quantity__current");
        if(minusBtn) {
            minusBtn.onclick = function() {
                if (quanity_inProduct.value > 1) {
                    quanity_inProduct.value--
                }
            }
            plusBtn.onclick = function() {
                quanity_inProduct.value++
            }
        }
    })()

    
    // Handle menu in < pc
    const menuBtn = document.querySelector(".menu-in_md")
    const filterBtn = document.querySelector(".menu-filter-mobile")
    function openTypeMenu(type) {
        const modalLayout = document.querySelector(`.modal-layout.modal-layout-${type}`)
        const modalInner = document.querySelector(`.modal-inner-${type}`)
        modalLayout.classList.add(`${type}`)
        modalInner.classList.add("moveRight")
        const modalExit = document.querySelectorAll(".modal-exit")
        for(let i=0;i<modalExit.length;i++) {
            modalExit[i].onclick = function() {
                modalLayout.classList.remove(`${type}`)
            }
        }
        modalLayout.onclick = function() {
            modalLayout.classList.remove(`${type}`)
        }
        modalInner.onclick = function(e) {
            e.stopPropagation()
        }
    }
    if(menuBtn) {
        menuBtn.onclick = function() {
            openTypeMenu("menu")
        }
        
    }
    if(filterBtn) {
        filterBtn.onclick = function() {
            openTypeMenu("filter")
            
        }
    }
    
        
    window.addEventListener("resize", function(event) {
        const form_control = this.document.querySelector(".main-sPage__header-sort")
        const header_label = document.querySelector(".header__top-label")
        const headerCartTitle = document.querySelector(".header-cart__title")
        const mastheadLogo = document.querySelector(".masthead__logo")
        const breadcrumbsList = document.querySelector(".breadcrumbs_list")
        const mainHeaderSort = document.querySelector(".main-sPage__header-sort")
        const imgdetailProduct = this.document.querySelector(".control-detail__img-product")
        const quickviewBtn = this.document.getElementsByClassName("product-quickview")
        if(document.body.clientWidth<=992) {
            const header_label = document.querySelector(".header__top-label")
            header_label.style.textAlign="center"
            mastheadLogo.style.textAlign="center"
            headerCartTitle.style.display="none"
            if(mainHeaderSort){
                mainHeaderSort.style.justifyContent="center"
            }
            if(breadcrumbsList) {
                breadcrumbsList.style.textAlign="center"
            }
            imgdetailProduct.style.justifyContent="center"
            for(let i=0;i<quickViewBtn.length;i++) {
                quickviewBtn[i].style.display = "none"
            }


            
        }
        if(document.body.clientWidth>992) {
            header_label.style.textAlign="left"
            mastheadLogo.style.textAlign="left"
            headerCartTitle.style.display="block"
            if(form_control) {
                form_control.style.justifyContent="right"
            }
            if(breadcrumbsList) {
                breadcrumbsList.style.textAlign="left"
            }
            for(let i=0;i<quickViewBtn.length;i++) {
                quickviewBtn[i].style.display = "flex"
            }

        }
    })
    ;(function() {
        if(window.innerWidth<=992) {
            const mastheadLogo = document.querySelector(".masthead__logo")
            const header_label = document.querySelector(".header__top-label")
            const headerCartTitle = document.querySelector(".header-cart__title")
            const mainHeaderSort = document.querySelector(".main-sPage__header-sort")
            const breadcrumbsList = document.querySelector(".breadcrumbs_list")
            const imgdetailProduct = this.document.querySelector(".control-detail__img-product")
            const quickviewBtn = this.document.getElementsByClassName("product-quickview")
            if(breadcrumbsList) {
                breadcrumbsList.style.textAlign="center"
            }
            if(header_label) {
                header_label.style.textAlign="center"
            }
            
            if(mastheadLogo) {
                mastheadLogo.style.textAlign="center"
            }
            if(headerCartTitle) {
                headerCartTitle.style.display="none"
            }
            if(mainHeaderSort){
                mainHeaderSort.style.justifyContent="center"
            }
            for(let i=0;i<quickViewBtn.length;i++) {
                quickviewBtn[i].style.display = "none"
            }

            imgdetailProduct.style.justifyContent="center"

        }
    })()

}

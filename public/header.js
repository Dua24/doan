window.onload = function() {
    const loginBtn = document.querySelector(".masthead__item-login")
    const loginInMenu = document.querySelector(".modal-inner__item.login")
    const registerInMenu = document.querySelector(".modal-inner__item.register")
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
    menuBtn.onclick = function() {
        openTypeMenu("menu")
    }
    if(filterBtn){
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



            
        }
        if(document.body.clientWidth>992) {
            header_label.style.textAlign="left"
            mastheadLogo.style.textAlign="left"
            headerCartTitle.style.display="block"
            form_control.style.justifyContent="right"
            if(breadcrumbsList) {
                breadcrumbsList.style.textAlign="left"
            }

        }
    })
    if(window.innerWidth<=992) {
        const mastheadLogo = document.querySelector(".masthead__logo")
        const header_label = document.querySelector(".header__top-label")
        header_label.style.textAlign="center"
        const headerCartTitle = document.querySelector(".header-cart__title")
        const mainHeaderSort = document.querySelector(".main-sPage__header-sort")
        const breadcrumbsList = document.querySelector(".breadcrumbs_list")
            mastheadLogo.style.textAlign="center"
            headerCartTitle.style.display="none"
            if(mainHeaderSort){
                mainHeaderSort.style.justifyContent="center"
            }
            if(breadcrumbsList) {
                breadcrumbsList.style.textAlign="center"
            }
    }
}

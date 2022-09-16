window.onload = function() {
    const moreUserBtn = document.querySelector(".user_name>i");
    const moreUser = document.querySelector(".more_user");
    moreUserBtn.onclick = function() {
        if( moreUser.style.display=="block") {
            moreUser.style.display="none";
            moreUserBtn.style.transform = "rotate(0deg)"

        } else {
            moreUser.style.display="block";
            moreUserBtn.style.transform = "rotate(90deg)"
        }
    }
   

}
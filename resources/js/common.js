NodeList.prototype.addEventListener = function(event, callback){
    this.forEach(node => {
        node.addEventListener(event, callback);
    });
};

window.addEventListener("load", function(){
    // 네비게이션 모달
    let openNav = document.querySelector("#open-nav");
    let openableNav = document.querySelectorAll(".openable__nav"); 
    let closableNav = document.querySelectorAll(".closable__nav");
    
    openableNav.addEventListener("click", (e) => {
        if(e.target.classList.contains("openable__nav")){
            openNav.checked = true;
        }
    });
    closableNav.addEventListener("click", (e) => {
        if(e.target.classList.contains("closable__nav")){
            openNav.checked = false;
        }
    });


    // 로그인 모달
    let openLogin = document.querySelector("#open-login");
    let openableLogin = document.querySelectorAll(".openable__login");
    let closableLogin = document.querySelectorAll(".closable__login");

    openableLogin.addEventListener("click", (e) => {
        if(e.target.classList.contains("openable__login")){
            openLogin.checked = true;
        }
    });
    closableLogin.addEventListener("click", (e) => {
        if(e.target.classList.contains("closable__login")){
            openLogin.checked = false;
        }
    }); 
});
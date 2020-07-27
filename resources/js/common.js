NodeList.prototype.addEventListener = function(event, callback){
    this.forEach(node => {
        node.addEventListener(event, callback);
    });
};

window.addEventListener("load", function(){
    // 링크 이동
    let hasLink = document.querySelectorAll("[data-link]");
    hasLink && hasLink.addEventListener("click", function(){
        location.assign(this.dataset.link);
    });

    // 파일 업로드
    let fileInput = document.querySelector(".file__input");
    fileInput && fileInput.addEventListener("change", function(){
        let label = this.parentNode.querySelector(".file__label");
        if(this.files.length > 0) label.innerHTML = this.files[0].name;
    });

    // 네비게이션 모달
    let openNav = document.querySelector("#open-nav");
    let openableNav = document.querySelectorAll(".openable__nav"); 
    let closableNav = document.querySelectorAll(".closable__nav");
    
    openableNav && openableNav.addEventListener("click", (e) => {
        if(e.target.classList.contains("openable__nav")){
            openNav.checked = true;
        }
    });
    closableNav && closableNav.addEventListener("click", (e) => {
        if(e.target.classList.contains("closable__nav")){
            openNav.checked = false;
        }
    });


    // 로그인 모달
    let openLogin = document.querySelector("#open-login");
    let openableLogin = document.querySelectorAll(".openable__login");
    let closableLogin = document.querySelectorAll(".closable__login");

    openableLogin && openableLogin.addEventListener("click", (e) => {
        if(e.target.classList.contains("openable__login")){
            openLogin.checked = true;
        }
    });
    closableLogin && closableLogin.addEventListener("click", (e) => {
        if(e.target.classList.contains("closable__login")){
            openLogin.checked = false;
        }
    }); 
});
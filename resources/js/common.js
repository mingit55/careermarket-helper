const fields = [
    {
        name: "서비스업",
        categories: [
            "호텔·여행·항공",
            "외식업·식음료",
            "시설관리·경비·용역",
            "레저·스포츠·여가",
            "AS·카센터·주유",
            "렌탈·임대",
            "웨딩·장례·이벤트",
            "기타서비스업",
            "뷰티·미용",
        ]
    },
    {
        name: "제조·화학",
        categories: [
            "전기·전자·제어",
            "기계·설비·자동차",
            "석유·화학·에너지",
            "섬유·의류·패션",
            "화장품·뷰티",
            "생활용품·소비재·사무",
            "가구·목재·제지",
            "농업·어업·광업·임업",
            "금속·재료·철강·요업",
            "조선·항공·우주",
            "기타제조업",
            "식품가공·개발",
            "반도체·광학·LCD",
            "환경",
        ]
    },
    {
        name: "IT·웹·통신",
        categories: [
            "솔루션·SI·ERP·CRM",
            "웹에이젼시",
            "쇼핑몰·오픈마켓",
            "포털·인터넷·컨텐츠",
            "네트워크·통신·모바일",
            "하드웨어·장비",
            "정보보안·백신",
            "IT컨설팅",
            "게임",
            "기타"
        ]
    },
    {
        name: "은행·금융업",
        categories: [
            "은행·금융·저축",
            "대출·캐피탈·여신",
            "기타금융",
            "증권·보험·카드",
        ]
    },
    {
        name: "미디어·디자인",
        categories: [
            "신문·잡지·언론사",
            "방송사·케이블",
            "연예·엔터테인먼트",
            "광고·홍보·전시",
            "영화·배급·음악",
            "공연·예술·문화",
            "출판·인쇄·사진",
            "캐릭터·애니메이션",
            "디자인·설계",
        ]
    },
    {
        name: "교육업",
        categories: [
            "초중고·대학",
            "학원·어학원",
            "유아·유치원",
            "교재·학습지",
            "전문·기능학원",
        ]
    },
    {
        name: "의료·제약·복지",
        categories: [
            "의료(진료과목별)",
            "의료(병원종류별)",
            "제약·보건·바이오",
            "사회복지",
        ]
    },
    {
        name: "판매·유통",
        categories: [
            "판매(매장종류별)",
            "판매(상품품목별)",
            "유통·무역·상사",
            "운송·운수·물류",
        ]
    },
    {
        name: "건설업",
        categories: [
            "건설·건축·토목·시공",
            "실내·인테리어·조경",
            "환경·설비",
            "부동산·임대·중개",
        ]
    },
    {
        name: "기관·협회",
        categories: [
            "정부·공공기관·공기업",
            "협회·단체",
            "법률·법무·특허",
            "세무·회계",
            "연구소·컨설팅·조사",
        ]
    },
];

if(!('remove' in Element.prototype)){
    Element.prototype.remove = function(){
        if(this.parentNode){
            this.parentNode.removeChild(this);
        }
    };
}

NodeList.prototype.includes = function(node){
    for(var i = 0; i < this.length; i++){
        if(node == this[i]) return node;
    }
    return null;
}

function closest(elem, parentSelector){
    var candidates = document.querySelectorAll(parentSelector);
    var parent = elem.parentElement;

    while(parent.nodeName != "BODY"){
        if(candidates.includes(parent)) return parent;
        parent = parent.parentElement;
    }
    return null;
}


NodeList.prototype.addEventListener = function(event, callback){
    this.forEach(node => {
        node.addEventListener(event, callback);
    });
};

window.addEventListener("load", function(){
    window.site__lang = document.querySelector("#site__lang").value;
    window.user__identity = document.querySelector("#user__identity").value;
    window.user__type = document.querySelector("#user__type").value;

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


    // 언어 설정 모달
    let openLang = document.querySelector("#open-lang");
    let openableLang = document.querySelectorAll(".openable__lang");
    let closableLang = document.querySelectorAll(".closable__lang");

    openableLang && openableLang.addEventListener("click", (e) => {
        if(e.target.classList.contains("openable__lang")){
            openLang.checked = true;
        }
    });
    closableLang && closableLang.addEventListener("click", (e) => {
        if(e.target.classList.contains("closable__lang")){
            openLang.checked = false;
        }
    }); 

    // 업종 분류
    let field = document.querySelector(".company-field");
    let category = document.querySelector(".company-category");

    if(field && category) {
        field.innerHTML = `<option value=''>${site__lang == 'kr' ? "업종 분류" : "Business Group"}</option>`;
        category.innerHTML = `<option value=''>${site__lang == 'kr' ? "업종 상세" : "Group Details"}</option>`;
        fields.forEach(({name}) => {
            let option = document.createElement("option");
            option.innerText = name;
            field.append(option);
        });

        field.addEventListener("change", e => {
            category.innerHTML = "<option value=''>업종 상세</option>";

            let field = fields.find(field => field.name == e.target.value);
            field && field.categories.forEach(cat => {
                let option = document.createElement("option");
                option.innerText = cat;
                category.append(option);
            });
        });
    }
});
class Company {
    constructor(app, json){
        const {id, logo, field, category, name, description, applicant_cnt} = json;
        this.id = id;
        this.logo = logo;
        this.field = field;
        this.category = category;
        this.name = name;
        this.description = description;
        this.applicant_cnt = parseInt(applicant_cnt);


        this.app = app;   
        this.json = json;
        this.elem = this.createElement();
    }

    createElement(){
        const {id, logo, field, category, name, description, applicant_cnt} = this;
        
        let elem = document.createElement("div");
        elem.style.transition = "left 0.4s, top 0.4s";
        elem.classList.add("col-lg-4", "col-md-6", "py-3", "position-absolute", "hidden");
        elem.innerHTML = `<div class="company__group">
                                    <div class="company__img">
                                        <img src="/resources/uploads/${logo}" alt="로고 이미지">
                                    </div>
                                    <div class=" w-100">
                                        <div class="company__info">
                                            <small>${field} - ${category}</small>
                                            <strong>${name}</strong>
                                        </div>
                                    </div>
                                    <div class="mt-3 company__description">
                                        ${description}
                                    </div>
                                    <div class="mt-5 text-right d-between">
                                        <div class="company__count">
                                            <span>${site__lang == "kr" ? "지원<br>인원" : "Support<br>Personnel"}</span>
                                            <strong>${applicant_cnt.toLocaleString()}</strong>
                                        </div>
                                        ${ 
                                            user__type === 'students' ? 
                                                (
                                                    this.app.appliedList.includes(id) ? 
                                                    `<button class="company__btn" data-id="${id}" disabled>${site__lang == "kr" ? "신청 중" : "Applying"}</button>`
                                                    :`<button class="company__btn" data-id="${id}">${site__lang == "kr" ? "면접신청" : "Apply"}</button>`
                                                )
                                            : ""
                                        }
                                    </div>
                                </div>`;
        return elem;
    }
}

class App {
    constructor(){
        // 초기 설정
        this.applyForm = document.querySelector("#apply-form");
        this.searchCount = document.querySelector("#search__count");
        this.row = document.querySelector("#company__row");
        this.search__name = "";
        this.search__field = "";
        this.search__category = "";
        

        this.getUserData().then(() => {
            // 화면 업데이트
            this.update();
    
            // 이벤트 작성
            this.setEvents();
        });
    }

    // 유저 정보 가져오기
    getUserData(){
        if(user__identity != false){
            return fetch(`/students/${user__identity}/applications-json`)
                    .then(res => res.json())
                    .then(json => {
                        this.appliedList = json.data.map(item => item.company_id);
                    })
                    .catch(err => {
                        this.appliedList = [];
                    });
        } else {
            this.appliedList = [];
            return new Promise(res => res());
        }
    }

    // 이벤트 작성
    setEvents(){
        // 매 리사이즈마다 화면 재구성
        window.addEventListener("resize", e => {
            this.resize();
        });

        // 검색
        let search = () => {
            this.search__name = document.querySelector("#search__name").value;
            this.search__field = document.querySelector("#search__field").value;
            this.search__category = document.querySelector("#search__category").value;
            this.update();
        }

        document.querySelector("#search__button").addEventListener("click", search);
        document.querySelector("#search__name").addEventListener("keydown", e => e.keyCode === 13 && search());


        // 면접신청
        this.row.addEventListener("click", e => {
            if(e.target.classList.contains("company__btn")){
                let id = e.target.dataset.id;
                let company = this.companies.find(company => company.id == id);
                let confirm_msg = site__lang == "kr" ? 
                    company.name + "에 면접을 신청합니다. 진행하시겠습니까?" 
                    : "I'd like to apply for an interview with " + company.name +". Would you like to proceed?";
                    
                if(!confirm(confirm_msg)) return;

                this.applyForm.querySelector("#company_id").value = company.id;
                this.applyForm.submit();
            }
        });
    }

    // 첫 로드 OR 검색할 떄마다 화면 업데이트
    async update(){
        // 이전에 추가된 기업 데이터가 있으면 애니메이션과 함께 삭제
        if(this.companies && Array.isArray(this.companies)){
            this.companies.forEach((company, i) => {
                setTimeout(() => {
                    company.elem.classList.add("hidden");
                }, i * 100);
            });
        }

        // 기업 데이터 가져오기
        this.companies = await this.getCompanies();

        // 검색 필터링
        if(this.search__name != "") {
            let nameRegExp = new RegExp(this.search__name);
            this.companies = this.companies.filter(company => nameRegExp.test(company.name));
        }
        if(this.search__field != "") {
            this.companies = this.companies.filter(company => company.field == this.search__field);
        }
        if(this.search__category != "") {
            this.companies = this.companies.filter(company => company.category == this.search__category);
        }

        
        this.row.innerHTML = "";
        this.companies.forEach((company, i) => {
            this.row.append(company.elem);
            setTimeout(() => {
                company.elem.classList.remove("hidden");
            }, i * 100);
        });

        this.searchCount.innerText = this.companies.length.toLocaleString();

        // 리사이징
        this.resize();
    }

    resize(){
        let col_cnt = window.innerWidth > 992 ? 3 : window.innerWidth > 768 ? 2 : 1;
        let heightArr = new Array(col_cnt).fill(0);
        this.companies.forEach((company, i) => {
            company.elem.style.top = heightArr[ i % col_cnt ] + "px";
            company.elem.style.left = company.elem.offsetWidth * (i % col_cnt) + "px";
            heightArr[ i % col_cnt ] += company.elem.offsetHeight;
        });

        this.row.style.height = Math.max(...heightArr) + "px";
    }

    getCompanies(){
        return fetch("/companies")
            .then(res => res.json())
            .then(jsonList => jsonList.companies.map(json => new Company(this, json)));
    }
}

window.addEventListener("load", () => {
    const app = new App();
});
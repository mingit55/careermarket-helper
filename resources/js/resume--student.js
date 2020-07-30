function Resome(){
    let matches = location.pathname.match(/\/applications\/(?<apply_id>[0-9]+)\/resume/)
    this.apply_id = matches ? matches[1] : null;
    this.updateArea = document.querySelector("#update__area");    
    this.rows = {
        school_data: '<td class="resume__input"><input type="text"></td>'
                    +'<td class="resume__input"><input type="text" name="school_name"></td>'
                    +'<td class="resume__input"><input type="text" name="school_field"></td>'
                    +'<td class="resume__input"><input type="text" name="other"></td>'
                    +'<td class="resume__remove">'
                        +'<button class="btn-remove"><i class="fa fa-times"></i></button>'
                    +'</td>',
        act_data: '<td class="resume__input wx-250"><input type="text" class="wx-250" name="act_date"></td>'
                +'<td class="resume__input"><input type="text" name="description"></td>'
                +'<td class="resume__remove">'
                    +'<button class="btn-remove"><i class="fa fa-times"></i></button>'
                +'</td>',
        license_data: '<td class="resume__input"><input type="text" name="license_date"></td>'
                +'<td class="resume__input"><input type="text" name="license_name"></td>'
                +'<td class="resume__input"><input type="text" name="organization"></td>'
                +'<td class="resume__remove">'
                    +'<button class="btn-remove"><i class="fa fa-times"></i></button>'
                +'</td>',
        award_data: '<td class="resume__input"><input type="text" name="award_name"></td>'
                +'<td class="resume__input"><input type="text" name="award_date"></td>'
                +'<td class="resume__input"><input type="text" name="organization"></td>'
                +'<td class="resume__remove">'
                    +'<button class="btn-remove"><i class="fa fa-times"></i></button>'
                +'</td>'
    };

    this.loadData();
    this.setEvents();
}

/**
 * 기존 데이터 불러오기
 */
Resome.prototype.loadData = function(){
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "/applications/" + this.apply_id + "/resume-json");
    xhr.onload = function(){
        var res = JSON.parse(xhr.responseText);
        if(res.message) alert(res.message);
        else {
            var tbody, empty_row, autosize;
            var resume = res.resume;
            resume.personal_data = JSON.parse(resume.personal_data);
            resume.school_data = JSON.parse(resume.school_data);
            resume.act_data = JSON.parse(resume.act_data);
            resume.license_data = JSON.parse(resume.license_data);
            resume.award_data = JSON.parse(resume.award_data);

            console.log("loadData:", resume);

            // 개인 정보
            if(resume.personal_data.image){
                var img = document.createElement("img");
                img.src = resume.personal_data.image;
                document.querySelector(".resume__image").append(img);
                document.querySelector("#profile__url").value = resume.personal_data.image;
            }
            
            document.querySelector("#personal__name").value = resume.personal_data.name || "";
            document.querySelector("#personal__birthday").value = resume.personal_data.birthday || "";
            document.querySelector("#personal__phone").value = resume.personal_data.phone || "";
            document.querySelector("#personal__email").value = resume.personal_data.email || "";

            // 학 력
            tbody = document.querySelector("[data-info='school_data'] tbody");
            empty_row = tbody.querySelector(".resume__add").parentElement.previousElementSibling;
            autosize = tbody.querySelector(".resume__autosize");
            resume.school_data.forEach(item => {
                var tr = document.createElement("tr");
                tr.innerHTML = `<td class="resume__input wx-200"><input type="text" name="period" class="wx-200" value="${item.period}"></td>
                                <td class="resume__input"><input type="text" name="school_name" value="${item.school_name}"></td>
                                <td class="resume__input"><input type="text" name="school_field" value="${item.school_field}"></td>
                                <td class="resume__input wx-100"><input type="text" class="wx-100" name="other" value="${item.other}"></td>
                                <td class="resume__remove">
                                    <button class="btn-remove"><i class="fa fa-times"></i></button>
                                </td>`;
                tbody.insertBefore(tr, empty_row);
            });
            autosize.rowSpan = tbody.children.length;

            // 교내 활동
            tbody = document.querySelector("[data-info='act_data'] tbody");
            empty_row = tbody.querySelector(".resume__add").parentElement.previousElementSibling;
            autosize = tbody.querySelector(".resume__autosize");
            resume.act_data.forEach(item => {
                var tr = document.createElement("tr");
                tr.innerHTML = `<td class="resume__input wx-200"><input type="text" class="wx-200" name="act_date" value="${item.act_date}"></td>
                                <td class="resume__input"><input type="text" name="description" value="${item.description}"></td>
                                <td class="resume__remove">
                                    <button class="btn-remove"><i class="fa fa-times"></i></button>
                                </td>`;
                tbody.insertBefore(tr, empty_row);
            });
            autosize.rowSpan = tbody.children.length;

            // 자격 사항
            tbody = document.querySelector("[data-info='license_data'] tbody");
            empty_row = tbody.querySelector(".resume__add").parentElement.previousElementSibling;
            autosize = tbody.querySelector(".resume__autosize");
            resume.license_data.forEach(item => {
                var tr = document.createElement("tr");
                tr.innerHTML = `<td class="resume__input wx-200"><input type="text" class="wx-200" name="license_date" value="${item.license_date}"></td>
                                <td class="resume__input"><input type="text" name="license_name" value="${item.license_name}"></td>
                                <td class="resume__input"><input type="text" name="organization" value="${item.organization}"></td>
                                <td class="resume__remove">
                                    <button class="btn-remove"><i class="fa fa-times"></i></button>
                                </td>`;
                tbody.insertBefore(tr, empty_row);
            });
            autosize.rowSpan = tbody.children.length;

            // 수상 내역
            tbody = document.querySelector("[data-info='award_data'] tbody");
            empty_row = tbody.querySelector(".resume__add").parentElement.previousElementSibling;
            autosize = tbody.querySelector(".resume__autosize");
            resume.award_data.forEach(item => {
                var tr = document.createElement("tr");
                tr.innerHTML = `<td class="resume__input wx-200"><input type="text" class="wx-200" name="award_date" value="${item.award_data}"></td>
                                <td class="resume__input"><input type="text" name="award_name" value="${item.award_name}"></td>
                                <td class="resume__input"><input type="text" name="organization" value="${item.organization}"></td>
                                <td class="resume__remove">
                                    <button class="btn-remove"><i class="fa fa-times"></i></button>
                                </td>`;
                tbody.insertBefore(tr, empty_row);
            });
            autosize.rowSpan = tbody.children.length;

            // 성장 과정
            document.querySelector("[data-info='growth_text'].resume__text textarea").value = resume.growth_text;
            // 성격 및 특기
            document.querySelector("[data-info='character_text'].resume__text textarea").value = resume.character_text;
            // 지원 동기
            document.querySelector("[data-info='reason_text'].resume__text textarea").value = resume.reason_text;
            // 입사 후 포부 
            document.querySelector("[data-info='plan_text'].resume__text textarea").value = resume.plan_text;
            
        }
    };
    xhr.send();
};

/**
 * 이벤트 설정
 */
Resome.prototype.setEvents = function(){
    var app = this;

    // 이미지 INPUT
    var input__image = document.querySelector("#profile")
    input__image.addEventListener("change", function(e){
        var file = this.files.length > 0 ? this.files[0] : null;
        if(file) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function(){
                app.setImage(this.result);
            }
        }
    });

    // 추가하기 BUTTON
    var btns__add = document.querySelectorAll(".btn-add");
    for(var i = 0; i < btns__add.length; i++){
        var btn = btns__add[i];
        btn.addEventListener("click", function(){
            var table = closest(this, ".resume__table");
            var infoName = table.dataset.info;
            
            var tbody = table.firstElementChild;
            var autoSize = tbody.querySelector(".resume__autosize");
            var length = tbody.querySelectorAll("tr").length;
            var row__add = tbody.querySelector(".resume__add").parentElement;
            
            var row = document.createElement("tr");
            row.innerHTML = app.rows[infoName];
            tbody.insertBefore(row, row__add);
        
            autoSize.rowSpan = length + 1;
        });
    }
    

    // 삭제하기 BUTTON
    var tables = document.querySelectorAll(".resume__table");
    for(var i = 0; i < tables.length; i++){
        var table = tables[i];
        table.addEventListener("click", function(e){
            var isBtn = e.target.classList.contains("btn-remove") || closest(e.target, ".btn-remove");
            if(!isBtn) return;

            var table = closest(e.target, ".resume__table");
            var length = table.querySelectorAll("tr").length;
            var autoSize = table.querySelector(".resume__autosize");

            var row = closest(e.target, ".resume__table tr");
            row.remove();

            autoSize.rowSpan = length - 1;
        });
    }


    // TEXTAREA 확장
    var textareas = document.querySelector(".resume__text > textarea");
    textareas.addEventListener("input", function(){
        this.style.height = "auto";
        if(this.offsetHeight < this.scrollHeight){
            this.style.height = this.scrollHeight + "px";
        }
    });

    // 각 입력창의 변화 후 3초간 다시 입력이 없으면 DB에 저장
    var timeout;
    var inputTrigger = function(){
        if(timeout){
            clearTimeout(timeout);
        }

        // # 업데이트 알림 발생
        app.updateArea.classList.remove("hidden");

        timeout = setTimeout(() => {
            // 데이터 재구성
            var formData = {
                personal_data: {
                    image: document.querySelector("#profile__url").value,
                    name: document.querySelector("#personal__name").value,
                    birthday: document.querySelector("#personal__birthday").value,
                    phone: document.querySelector("#personal__phone").value,
                    email: document.querySelector("#personal__email").value
                }
            };

            var tables = document.querySelectorAll("table[data-info].resume__table");
            for(var i = 0; i < tables.length; i++){
                var table = tables[i];
                var dataName = table.dataset.info;
                formData[dataName] = [];

                var rows = table.querySelectorAll("tbody > tr");
                for(var j = 0; j < rows.length; j++){
                    var row = rows[j];
                    var data = {};
                    var inputs = row.querySelectorAll("input");
                    
                    for(var k = 0; k < inputs.length; k++){
                        var input = inputs[k];
                        data[input.name] = input.value;
                    }

                    if(Object.keys(data).length > 0 && Object.values(data).reduce((p, c) => p + c.length, 0) > 0){
                        formData[dataName].push(data);
                    }
                }
            }
            
            var texts = document.querySelectorAll(".resume__text");
            for(var i = 0; i < texts.length; i ++){
                var text = texts[i];
                var dataName = text.dataset.info;
                formData[dataName] = text.firstElementChild.value;
            }
            console.log("Submit", formData);

            // AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("PUT", "/applications/" + app.apply_id + "/resume");
            xhr.onload = function(){
                var res = JSON.parse(xhr.responseText);
                if(res.message){
                    alert(res.message);
                }

                // # 업데이트 알림 완료 표시
                app.updateArea.classList.add("success");
                setTimeout(() => {
                    app.updateArea.classList.add("hidden");
                    setTimeout(() => {
                        app.updateArea.classList.remove("success");
                    }, 400);
                }, 1000);
            };
            xhr.send(JSON.stringify(formData));
        }, 3000);
    };

    var inputable = document.querySelectorAll(".resume__table");
    inputable.addEventListener("input", inputTrigger);
};

/**
 * 이미지 업로드
 */
Resome.prototype.setImage = function(imageURL){
    document.querySelector("#profile__url").value = imageURL;

    var img__exist = document.querySelector(".resume__image img");
    img__exist && img__exist.remove();

    var img = document.createElement("img");
    img.src = imageURL;
    img.alt = "프로필 사진";
    img.onload = function(){
        document.querySelector(".resume__image").append(img);
    };
};

window.onload = function(){
    var app = new Resome();
};
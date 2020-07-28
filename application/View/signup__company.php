<div class="reduced-container padding">
    <div class="mb-5 text-center">
        <h1 class="fx-6 font-weight-bold">기업 회원가입</h1>
    </div>    
    <form method="post" class="form__container" autocomplete="false" enctype="multipart/form-data">
        <div class="form__group">
            <small class="text-gray ml-1 mb-2 d-inline-block">※ 이메일은 비밀번호 찾기 등에 사용될 수 있습니다.</small>
            <input type="email" name="email" placeholder="이메일" class="form__control" required>
        </div>
        <div class="form__group">
            <input type="password" name="password" placeholder="비밀번호 (영문/숫자 조합 8-30자)" class="form__control" required>
        </div>
        <div class="form__group">
            <input type="password" name="passconf" placeholder="비밀번호 확인" class="form__control" required>
        </div>
        <div class="form__group">
            <input type="text" name="name" placeholder="기업명" class="form__control" required>
        </div>
        <div class="file__group">
            <input type="file" id="input__logo" name="logo" class="file__input" required>
            <label for="input__logo" class="file__label">로고 이미지 (jpg, png, gif)</label>
        </div>
        <div class="form__group">
            <select name="field" class="form__control" required>
                <option value="">업종 선택</option>
                <option value="농업, 임업 및 어업">농업, 임업 및 어업</option>
                <option value="광업">광업</option>
                <option value="제조업">제조업</option>
                <option value="전기, 가스, 증기 및 공기 조절 공급업">전기, 가스, 증기 및 공기 조절 공급업</option>
                <option value="수도, 하수 및 폐기물 처리, 원료 재생업">수도, 하수 및 폐기물 처리, 원료 재생업</option>
                <option value="건설업">건설업</option>
                <option value="도매 및 소매업">도매 및 소매업</option>
                <option value="운수 및 창고업">운수 및 창고업</option>
                <option value="숙박 및 음식점업">숙박 및 음식점업</option>
                <option value="정보통신업">정보통신업</option>
                <option value="금융 및 보험업">금융 및 보험업</option>
                <option value="부동산업">부동산업</option>
                <option value="전문, 과학 및 기술 서비스업">전문, 과학 및 기술 서비스업</option>
                <option value="사업시설 관리, 사업 지원 및 임대 서비스업">사업시설 관리, 사업 지원 및 임대 서비스업</option>
                <option value="공공 행정, 국방 및 사회보장 행정">공공 행정, 국방 및 사회보장 행정</option>
                <option value="교육 서비스업">교육 서비스업</option>
                <option value="보건업 및 사회복지 서비스업">보건업 및 사회복지 서비스업</option>
                <option value="예술, 스포츠 및 여가관련 서비스업">예술, 스포츠 및 여가관련 서비스업</option>
                <option value="협회 및 단체, 수리 및 기타 개인 서비스업">협회 및 단체, 수리 및 기타 개인 서비스업</option>
                <option value="국제 및 외국기관">국제 및 외국기관</option>
            </select>
        </div>
        <div class="form__group">
            <textarea name="description" class="form__control" placeholder="기업 소개" required></textarea>
        </div>
        <div class="form__group">
            <button class="form__button" type="submit">회원가입</button>
        </div>
    </form>
    <hr class="mt-5 mb-3">
    <div class="d-between">
        <a href="/">
            <img src="/resources/images/logo.svg" alt="진로마켓 도우미" height="40">
        </a>
        <div>
            <small class="text-gray">※ 이미 계정이 있으신가요?</small>
            <a href="#" class="openable__login fx-n3 ml-1">로그인하기</a>
        </div>
    </div>
</div>
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
            <select name="field" class="form__control company-field" required></select>
            <select name="category" class="form__control company-category" required></select>
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
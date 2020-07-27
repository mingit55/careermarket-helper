<div class="reduced-container padding">
    <div class="mb-5 text-center">
        <h1 class="fx-6 font-weight-bold">학생 회원가입</h1>
    </div>    
    <form method="post" class="form__container" autocomplete="false">
        <div class="form__group">
            <small class="text-gray ml-1 mb-2 d-inline-block">※ 이메일은 비밀번호 찾기 등에 사용될 수 있습니다.</small>
            <input type="text" name="email" placeholder="이메일" class="form__control">
        </div>
        <div class="form__group">
            <input type="password" name="password" placeholder="비밀번호 (영문+숫자 8-30자)" class="form__control">
        </div>
        <div class="form__group">
            <input type="password" name="passconf" placeholder="비밀번호 확인" class="form__control">
        </div>
        <div class="form__group">
            <input type="text" name="name" placeholder="이름 (2-16자)" class="form__control">
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
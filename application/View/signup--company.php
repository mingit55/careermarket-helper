<div class="reduced-container padding">
    <div class="mb-5 text-center">
        <h1 class="fx-6 font-weight-bold"><?=lang("기업 회원가입", "Corporate Membership")?></h1>
    </div>    
    <form method="post" class="form__container" autocomplete="false" enctype="multipart/form-data">
        <div class="form__group">
            <small class="text-gray ml-1 mb-2 d-inline-block">※ <?=lang("이메일은 비밀번호 찾기 등에 사용될 수 있습니다.", "Email can be used, for example, to find a password.")?></small>
            <input type="email" name="email" placeholder="<?=lang("이메일", "E-mail")?>" class="form__control" required>
        </div>
        <div class="form__group">
            <input type="password" name="password" placeholder="<?=lang("비밀번호 (영문/숫자 조합 8-30자)", "Password (English/Numeric combination 8-30 characters)")?>" class="form__control" required>
        </div>
        <div class="form__group">
            <input type="password" name="passconf" placeholder="<?=lang("비밀번호 확인", "Password Confirm")?>" class="form__control" required>
        </div>
        <div class="form__group">
            <input type="text" name="name" placeholder="<?=lang("기업명", "Company Name")?>" class="form__control" required>
        </div>
        <div class="file__group">
            <input type="file" id="input__logo" name="logo" class="file__input" required>
            <label for="input__logo" class="file__label"><?=lang("로고 이미지 (jpg, png, gif)", "Logo Image(jpg, png, gif)")?></label>
        </div>
        <div class="form__group">
            <select name="field" class="form__control company-field" required></select>
            <select name="category" class="form__control company-category" required></select>
        </div>
        <div class="form__group">
            <textarea name="description" class="form__control" placeholder="<?=lang("기업 소개", "Description")?>" required></textarea>
        </div>
        <div class="form__group">
            <button class="form__button" type="submit"><?=lang("회원가입", "Sign Up")?></button>
        </div>
    </form>
    <hr class="mt-5 mb-3">
    <div class="d-between">
        <a href="/">
            <img src="/resources/images/logo.svg" alt="진로마켓 도우미" height="40">
        </a>
        <div>
            <small class="text-gray">※ <?=lang("이미 계정이 있으신가요?", "Do you already have an account?")?></small><small class="text-gray">※ 이미 계정이 있으신가요?</small>
            <a href="#" class="openable__login fx-n3 ml-1"><?=lang("로그인하기", "Sign In")?></a>
        </div>
    </div>
</div>
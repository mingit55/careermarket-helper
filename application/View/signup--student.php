<div class="reduced-container padding">
    <div class="mb-5 text-center">
        <h1 class="fx-6 font-weight-bold"><?=lang("학생 회원가입", "Student Membership")?></h1>
    </div>    
    <form method="post" class="form__container" autocomplete="false">
        <div class="form__group">
            <small class="text-gray ml-1 mb-2 d-inline-block">※ <?=lang("이메일은 비밀번호 찾기 등에 사용될 수 있습니다.", "Email can be used, for example, to find a password.")?></small>
            <input type="email" name="email" placeholder="<?=lang("이메일", "E-mail")?>" class="form__control" required>
        </div>
        <div class="form__group">
            <input type="password" name="password" placeholder="<?=lang("비밀번호 (영문/숫자 조합 8-30자)", "Password (English/Numeric combination 8-30 characters)")?>" class="form__control" required>
        </div>
        <div class="form__group">
            <input type="password" name="passconf" placeholder="<?=lang("비밀번호 확인", "Password Confirm")?>" class="form__control" required><input type="password" name="passconf" placeholder="비밀번호 확인" class="form__control">
        </div>
        <div class="form__group">
            <input type="text" name="name" placeholder="<?=lang("이름", "Name")?>" class="form__control">
        </div>
        <div class="form__group">
            <select name="school_field" class="form__control" required>
                <option value=""><?=lang("학과 선택", "Choose your major")?></option>
                <option value="컴퓨터전자">컴퓨터전자과</option>
                <option value="디지털네트워크">디지털네트워크과</option>
                <option value="IT산업디자인">IT산업디자인과</option>
                <option value="IT경영정보">IT경영정보과</option>
                <option value="IT소프트웨어">IT소프트웨어과</option>
            </select>
        </div>
        <div class="form__group">
            <select name="school_grade" class="form__control" required>
                <option value=""><?=lang("학년", "CHoose your grade")?></option>
                <option value="1">1학년</option>
                <option value="2">2학년</option>
                <option value="3">3학년</option>
            </select>
        </div>
        <div class="form__group">
            <select name="school_class" class="form__control" required>
                <option value=""><?=lang("반", "Choose your class")?></option>
                <option value="1">1반</option>
                <option value="2">2반</option>
            </select>
        </div>
        <div class="form__group">
            <input type="number" name="school_number" class="form__control" placeholder="<?=lang("번호", "Enter your number of class")?>" min="1" max="40" requried>
        </div>
        <div class="form__group">
            <button class="form__button" type="submit"><?=lang("회원가입", "Sign Up")?></button></button>
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
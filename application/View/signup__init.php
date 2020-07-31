<div class="reduced-container padding">
    <div class="mb-5 text-center">
        <h1 class="fx-6 font-weight-bold"><?=lang("회원유형 선택", "Select Member Type")?></h1>
        <div class="fx-n2 text-gray mt-3"><?=lang("해당하시는 회원유형을 선택해 주세요", "Please select the member type you are interested in.")?></div>
    </div>
    <div class="type__container">
        <div class="type__item" data-link="/sign-up/student">
            <div class="type__icon">
                <i class="fas fa-user fa-5x"></i>
            </div>
            <div class="type__label mt-lg-4">
                <strong><?=lang("학생 회원", "Student")?></strong>  
                <small class="d-block mt-1"><?=lang("수정고에 재학 중인 2학년 학생", "a sophomore at Suwon Information Science High School.")?></small>
            </div>
        </div>
        <div class="type__item" data-link="/sign-up/company">
            <div class="type__icon">
                <i class="fas fa-building fa-5x"></i>
            </div>
            <div class="type__label mt-lg-4">
                <strong><?=lang("기업 회원", "Company")?></strong>  
                <small class="d-block mt-1"><?=lang("진로마켓에 참여하는 기업", "Companies Participating in Career Markets")?></small>
            </div>
        </div>
    </div>
    <hr class="mt-5 mb-3">
    <div class="d-between">
        <a href="/">
            <img src="/resources/images/logo.svg" alt="진로마켓 도우미" height="40">
        </a>
        <div>
            <small class="text-gray">※ <?=lang("이미 계정이 있으신가요?", "Do you already have an account?")?></small>
            <a href="#" class="openable__login fx-n3 ml-1"><?=lang("로그인하기", "Sign In")?></a>
        </div>
    </div>
</div>
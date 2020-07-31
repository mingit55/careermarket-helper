<!DOCTYPE html>
<html lang="<?=lang("ko", "en")?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title><?= lang("진로마켓 도우미", "Career Market Helper") ?></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- /Bootstrap -->
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/e9c7502802.js" crossorigin="anonymous"></script>
    <!-- /Fontawesome -->
    <!-- Styles -->
    <link rel="icon" href="/resources/images/favicon.png">
    <link rel="stylesheet" href="/resources/css/common.css">
    <?php if(is_file(RES.DS."css".DS.$viewName.".css")):?>
        <link rel="stylesheet" href="/resources/css/<?=$viewName?>.css">
    <?php endif;?>
    <!-- /Styles -->
</head>
<body>
    <!-- Hidden Inputs -->
    <input type="hidden" id="site__lang" value="<?=lang("kr", "en")?>">
    <input type="checkbox" id="lang_en" hidden <?=lang("", "checked")?>>
    <input type="checkbox" id="lang_ko" hidden <?=lang("checked", "")?>>
    <input type="hidden" id="user__identity" value="<?=user() ? user()->id : ""?>">
    <input type="hidden" id="user__type" value="<?=user() ? user()->type : "guest"?>">
    <input type="checkbox" class="open-modal" id="open-nav" hidden>
    <input type="checkbox" class="open-modal" id="open-login" hidden>
    <input type="checkbox" class="open-modal" id="open-lang" hidden>
    <!-- /Hidden Inputs -->

    <!-- Modal__Navigation -->
    <div class="modal__nav modal__content closable__nav d-lg-none">
        <nav class="nav--mobile">
            <a href="/">HOME</a>
            <a href="/participant-companies"><?=lang("참여기업", "Companies")?></a>
            <a href="/applications"><?=lang("신청현황", "Condition")?></a>
            <a href="#" class="openable__lang closable__nav"><?=lang("언어설정", "Language")?></a>
        </nav>
        <nav class="auth--mobile">
            <?php if(user()):?>
                <a href="#"><b class="mr-1"><?=user()->name?></b><?=lang('님', '')?></a>
                <a href="/logout"><?=lang("로그아웃", "Log Out")?></a>
            <?php else:?>
                <a href="#" class="openable__login closable__nav"><?=lang("로그인", "Sign In")?></a>
                <a href="/sign-up/init"><?=lang("회원가입", "Sign Up")?></a>
            <?php endif;?>
        </nav>
    </div>
    <!-- /Modal__Navigation -->

    <!-- Modal__Login -->
    <div class="modal__login modal__content closable__login">
        <form action="/sign-in" method="post" class="login__form" autocomplete="off">
            <div class="login__title mb-5">Welcome to 2020 CAREER MARKET</div>
            <div class="login__input">
                <input type="email" name="email" placeholder="<?=lang("이메일", "E-mail")?>" autocomplete="new-password">
            </div>
            <div class="login__input">
                <input type="password" name="password" placeholder="<?=lang("비밀번호", "Password")?>" autocomplete="new-password">
            </div>
            <button class="login__button fx-n3"><?=lang("로그인", "Sign-In")?></button>
        </form>
    </div>
    <!-- /Modal__Login -->

    <!-- Modal__Lang -->
    <div class="modal__lang modal__content closable__lang">
        <form action="/langs" method="post" class="lang__form" autocomplete="off">
            <div class="lang__title mb-4">Language Setting</div>
            <div class="lang__select">
                <select name="lang" id="lang">
                    <option value="kr" <?= isset($_SESSION['lang']) && $_SESSION['lang'] === "kr" ? "selected" : "" ?>>한국어</option>
                    <option value="en" <?= isset($_SESSION['lang']) && $_SESSION['lang'] === "en" ? "selected" : "" ?>>English</option>
                </select>
            </div>
            <button class="lang__button fx-n3"><?=lang("언어 변경", "Accept")?></button>
        </form>
    </div>
    <!-- /Modal__Lang -->

    <div id="wrap">
        <?php if($noLayout == false):?>
         <!-- 헤더 영역 -->
        <header>
            <div class="extended-container d-flex align-items-center justify-content-between h-100">
                <div class="align-center">
                    <a href="/" class="logo d-none d-lg-block"></a>
                    <div class="nav ml-5 d-none d-lg-flex">
                        <div class="nav-item">
                            <a href="/participant-companies"><?=lang("참여기업", "Companies")?></a>
                        </div>
                        <div class="nav-item">
                            <a href="/applications"><?=lang("신청현황", "Condition")?></a>
                        </div>
                        <div class="nav-item">
                            <a href="#" class="openable__lang"><?=lang("언어설정", "Language")?></a>
                        </div>
                    </div>
                </div>
                <div class="align-center">
                    <div class="nav d-none d-lg-flex">
                        <?php if(user()):?>
                            <div class="nav-item">
                                <a href="#"><b class="mr-1"><?=user()->name?></b><?=lang("님", "")?></a>
                            </div>
                            <div class="nav-item">
                                <a href="/logout"><?=lang("로그아웃", "Log Out")?></a>
                            </div>
                        <?php else:?>
                            <div class="nav-item">
                                <a href="#" class="openable__login"><?=lang("로그인", "Sign In")?></a>
                            </div>
                            <div class="nav-item">
                                <a href="/sign-up/init"><?=lang("회원가입", "Sign Up")?></a>
                            </div>
                        <?php endif;?>
                    </div>
                    <div class="nav__open openable__nav d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </header>
        <?php endif;?>
        <!-- /헤더 영역 -->
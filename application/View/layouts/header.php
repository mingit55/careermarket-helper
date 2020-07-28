<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>진로마켓 도우미</title>
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
    <link rel="stylesheet" href="/resources/css/common.css">
    <?php if(is_file(RES.DS."css".DS.$viewName.".css")):?>
        <link rel="stylesheet" href="/resources/css/<?=$viewName?>.css">
    <?php endif;?>
    <!-- /Styles -->
</head>
<body>
    <!-- Hidden Inputs -->
    <input type="hidden" id="user__email" value="<?=user() ? user()->email : ""?>">
    <input type="hidden" id="user__type" value="<?=user() ? user()->type : "guest"?>">
    <input type="checkbox" class="open-modal" id="open-nav" hidden>
    <input type="checkbox" class="open-modal" id="open-login" hidden>
    <!-- /Hidden Inputs -->

    <!-- Modal__Navigation -->
    <div class="modal__nav modal__content closable__nav d-lg-none">
        <nav class="nav--mobile">
            <a href="/">HOME</a>
            <a href="/participant-companies">참여 기업</a>
            <a href="/">신청 현황</a>
        </nav>
        <nav class="auth--mobile">
            <?php if(user()):?>
                <a href="#"><b class="mr-1"><?=user()->name?></b>님</a>
                <a href="/logout">로그아웃</a>
            <?php else:?>
                <a href="#" class="openable__login closable__nav">로그인</a>
                <a href="/sign-up/init">회원가입</a>
            <?php endif;?>
        </nav>
    </div>
    <!-- /Modal__Navigation -->

    <!-- Modal__Login -->
    <div class="modal__login modal__content closable__login">
        <form action="/sign-in" method="post" class="login__form" autocomplete="off">
            <div class="login__title mb-5">Welcome to 2020 CAREER MARKET</div>
            <div class="login__input">
                <input type="email" name="email" placeholder="이메일" autocomplete="new-password">
            </div>
            <div class="login__input">
                <input type="password" name="password" placeholder="비밀번호" autocomplete="new-password">
            </div>
            <button class="login__button fx-n3">로그인</button>
        </form>
    </div>
    <!-- /Modal__Login -->

    <div id="wrap">
        <?php if($noLayout == false):?>
         <!-- 헤더 영역 -->
        <header>
            <div class="extended-container d-flex align-items-center justify-content-between h-100">
                <div class="align-center">
                    <a href="/" class="logo d-none d-lg-block"></a>
                    <div class="nav ml-5 d-none d-lg-flex">
                        <div class="nav-item">
                            <a href="/participant-companies">참여기업</a>
                        </div>
                        <div class="nav-item">
                            <a href="/requests">신청현황</a>
                        </div>
                    </div>
                </div>
                <div class="align-center">
                    <div class="nav d-none d-lg-flex">
                        <?php if(user()):?>
                            <div class="nav-item">
                                <a href="#"><b class="mr-1"><?=user()->name?></b>님</a>
                            </div>
                            <div class="nav-item">
                                <a href="/logout">로그아웃</a>
                            </div>
                        <?php else:?>
                            <div class="nav-item">
                                <a href="#" class="openable__login">로그인</a>
                            </div>
                            <div class="nav-item">
                                <a href="/sign-up/init">회원가입</a>
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
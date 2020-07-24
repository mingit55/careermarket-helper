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
    <!-- Header -->
    <input type="checkbox" id="open-nav" hidden>
    <header class="header">
        <div class="header__container">
            <!-- Desktop -->
            <nav class="nav--desktop mr-3 d-none d-lg-block">
                <a href="/" class="title">
                    <span class="title__do">도</span>
                    <span class="title__woo">우</span>
                    <span class="title__mi">미</span>
                </a>
                <a href="/">참여 기업</a>
                <a href="/">신청 현황</a>
                <a href="/">진로마켓</a>
            </nav>
            <nav class="auth--desktop d-none d-lg-block">
                <a href="/">로그인</a>
                <a href="/">회원가입</a>
            </nav>
            <!-- /Desktop -->
            <!-- Mobile -->
            <a href="/" class="title d-lg-none">
                <span class="title__do">도</span>
                <span class="title__woo">우</span>
                <span class="title__mi">미</span>
            </a>
            <label for="open-nav" class="nav__open d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <!-- /Mobile -->
        </div>
    </header>
    <aside class="aside d-lg-none">
        <nav class="nav--mobile">
            <a href="/">HOME</a>
            <a href="/">참여 기업</a>
            <a href="/">신청 현황</a>
            <a href="/">진로마켓</a>
        </nav>
        <nav class="auth--mobile">
            <a href="/">로그인</a>
            <a href="/">회원가입</a>
        </nav>
    </aside>
    <!-- /Header -->
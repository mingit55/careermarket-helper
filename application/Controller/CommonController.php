<?php
namespace Controller;

class CommonController {
    // 메인 페이지
    function mainPage(){
        view("main");
    }

    // 회원가입 페이지
    function signupInitPage(){  
        view("signup__init");
    }
}
<?php
namespace Controller;

class CommonController {
    // 메인 페이지
    function mainPage(){
        view("main");
    }

    // 회원가입 페이지
    function signUpInitPage(){  
        view("signup__init", [], true);
    }
    function signUpStudentPage(){
        view("signup__student", [], true);
    }
    function signUpCompanyPage(){
        view("signup__company", [], true);
    }
}
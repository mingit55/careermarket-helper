<?php
use CareerFair\Router;

Router::$pages__emptyLayout = ["\\/sign-up\\/.+"];

Router::get("/", "CommonController@mainPage");

// 회원 관리
Router::post("/sign-in", "MemberController@signIn");
Router::get("/logout", "MemberController@logout");
Router::get("/sign-up/init", "MemberController@initPage");
Router::get("/sign-up/student", "MemberController@studentPage");
Router::get("/sign-up/company", "MemberController@companyPage");
Router::post("/sign-up/student", "MemberController@signUpStudent");
Router::post("/sign-up/company", "MemberController@signUpCompany");

// 참여 기업
Router::get("/participant-companies", "CommonController@companyPage");
Router::get("/companies", "CommonController@getCompaniesJSON");

// 신청 현황
if(user() && user()->type == "students"){
    Router::get("/applications", "StudentController@applicationPage");
} else {
    Router::get("/applications", "CompanyController@applicationPage");
}

// 신청 현황 API
Router::get("/students/{student_id}/applications", "StudentController@getApplicationJSON");
Router::post("/applications", "StudentController@applyInterview");
Router::delete("/applications/{apply_id}", "StudentController@removeApplication");


// 이력서 & 자기소개서 관리
Router::get("/applications/{apply_id}/resumes", "StudentController@resumePage");


Router::connect();
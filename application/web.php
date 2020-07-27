<?php
use CareerFair\Router;

Router::$pages__emptyLayout = ["\\/sign-up\\/.+"];

Router::get("/", "CommonController@mainPage");

// 회원 관리
Router::get("/sign-up/init", "CommonController@signUpInitPage");
Router::get("/sign-up/student", "CommonController@signUpStudentPage");

Router::get("/sign-up/company", "CommonController@signUpCompanyPage");


Router::connect();
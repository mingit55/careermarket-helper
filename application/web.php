<?php
use CareerFair\Router;

Router::get("/", "CommonController@mainPage");

// 회원 관리
Router::get("/sign-up/init", "CommonController@signupInitPage");

Router::connect();
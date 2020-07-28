<?php
namespace Controller;

use CareerFair\DB;

class CommonController {
    // 메인 페이지
    function mainPage(){
        view("main");
    }

    // 참여 기업 페이지
    function companyPage(){
        view("company");
    }
    function getCompaniesJSON(){
        $companies = DB::fetchAll("SELECT * FROM companies");
        return json_response(compact("companies"));
    }
}
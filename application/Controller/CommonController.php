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
        $companies = DB::fetchAll("SELECT DISTINCT C.*, IFNULL(A.cnt, 0) applicant_cnt
                                    FROM companies C
                                    LEFT JOIN (SELECT COUNT(*) cnt, company_id FROM applications GROUP BY company_id) A 
                                    ON A.company_id = C.id
                                    ORDER BY C.id");
        return json_response(compact("companies"));
    }
}
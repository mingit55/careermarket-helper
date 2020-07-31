<?php
namespace Controller;

use CareerFair\DB;

class CommonController {
    // 메인 페이지
    function mainPage(){
        view("main");
    }

    // 언어 설정
    function setLanguage(){
        $langs = ["kr", "en"];
        $lang = !isset($_POST['lang']) || array_search($_POST['lang'], $langs) === false ? "kr" : $_POST['lang'];
        $_SESSION['lang'] = $lang;

        $origin = $_SERVER['HTTP_ORIGIN'];
        $prev = $_SERVER['HTTP_REFERER'];
        $direction = strncmp($origin, $prev, strlen($origin)) == 0 ? $prev : $origin;

        go($direction, lang("언어가 변경되었습니다.", "Language has changed."));
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
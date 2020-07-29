<?php
namespace Controller;

use CareerFair\DB;

class CompanyController {
    // 신청 현황 페이지
    function applicationPage(){
        view("application--company", [
            "students" => DB::fetchAll("SELECT DISTINCT A.*, S.name student_name, school_field, school_grade, school_class, school_number
                                        FROM applications A
                                        LEFT JOIN students S ON S.id = A.student_id
                                        WHERE A.company_id = ?
                                        ORDER BY A.created_at", [user()->id])
        ]);
    }   
}
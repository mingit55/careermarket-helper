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

    // 이력서 & 자기소개서 열람
    function resumePage($apply_id){
        $application = DB::find("applications", $apply_id);
        if(!$application) back(lang("신청 내역을 찾을 수 없습니다.", "Application history not found."));

        $resume = DB::fetch("SELECT * FROM resumes WHERE apply_id = ?", [$application->id]);
        $resume->personal_data = json_decode($resume->personal_data);
        $resume->school_data = json_decode($resume->school_data);
        $resume->act_data = json_decode($resume->act_data);
        $resume->license_data = json_decode($resume->license_data);
        $resume->award_data = json_decode($resume->award_data);
        
        view("resume--company", [
            "resume" => $resume
        ]);
    }
}
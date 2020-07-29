<?php
namespace Controller;

use CareerFair\DB;

class StudentController {
    // 면접 신청 내역 가져오기
    function getApplicationJSON($student_id){
        $student = DB::find("students", $student_id);
        if(!$student) json_response("해당 학생을 찾을 수 없습니다.");
        $data = DB::fetchAll("SELECT company_id FROM application WHERE student_id = ?", [$student_id]);
        json_response(compact("data"));
    }

    // 면접 신청
    function applyInterview(){
        $company_id = isset($_POST['company_id']) ? $_POST['company_id'] : null;
        $company = DB::find("companies", $company_id);
        
        if(!$company) back("해당 기업을 찾을 수 없습니다.");

        // 신청 내역 작성
        DB::query("INSERT INTO application(student_id, company_id) VALUES (?, ?)", [user()->id, $company_id]);
        $apply_id = DB::lastInsertId();

        // 이력서 & 자기소개서 작성
        DB::query("INSERT INTO resumes(student_id, company_id, apply_id) VALUES (?, ?, ?)", [user()->id, $company_id, $apply_id]);
        
        go("/participant-companies", "면접이 신청되었습니다.");
    }    
}
<?php
namespace Controller;

use CareerFair\DB;

class StudentController {
    // 면접 신청 내역 가져오기
    function getApplicationJSON($student_id){
        $student = DB::find("students", $student_id);
        if(!$student) json_response("해당 학생을 찾을 수 없습니다.");
        $data = DB::fetchAll("SELECT company_id FROM applications WHERE student_id = ?", [$student_id]);
        json_response(compact("data"));
    }

    // 면접 신청
    function applyInterview(){
        $company_id = isset($_POST['company_id']) ? $_POST['company_id'] : null;
        $company = DB::find("companies", $company_id);
        
        if(!$company) back("해당 기업을 찾을 수 없습니다.");

        // 중복 검사
        $overlap = DB::fetch("SELECT * FROM applications WHERE student_id = ? AND company_id = ?", [user()->id, $company_id]);
        if($overlap) back("이미 면접을 신청한 기업입니다.");

        // 신청 내역 작성
        DB::query("INSERT INTO applications(student_id, company_id) VALUES (?, ?)", [user()->id, $company_id]);
        $apply_id = DB::lastInsertId();

        // 이력서 & 자기소개서 작성
        DB::query("INSERT INTO resumes(student_id, company_id, apply_id) VALUES (?, ?, ?)", [user()->id, $company_id, $apply_id]);
        
        go("/participant-companies", "면접이 신청되었습니다.");
    }    


    // 신청 현황 페이지
    function applicationPage(){
        view("application--student", [
            "applications" => DB::fetchAll("SELECT DISTINCT A.*, C.name company_name, field company_field, category company_category, T.cnt applicant_cnt
                                            FROM applications A
                                            LEFT JOIN companies C ON C.id = A.company_id
                                            LEFT JOIN (SELECT COUNT(*) cnt, company_id FROM applications GROUP BY company_id) T ON T.company_id = C.id
                                            WHERE A.student_id = ?
                                            ORDER BY A.id", [user()->id])
        ]);
    }

    function removeApplication($apply_id){
        $application = DB::find("applications", $apply_id);
        if(!$application) json_response("신청 내역을 찾을 수 없습니다.");
        if($application->student_id != user()->id) json_response("취소할 권한이 없습니다.");

        DB::query("DELETE FROM applications WHERE id = ?", [$apply_id]);
        json_response([]);
    }
}
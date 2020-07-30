<?php
namespace Controller;

use CareerFair\DB;

class StudentController {
    // 면접 신청 내역 가져오기
    function getApplicationJSON($student_id){
        $student = DB::find("students", $student_id);
        if(!$student) json_response(lang("해당 학생을 찾을 수 없습니다.", "The student could not be found."));
        $data = DB::fetchAll("SELECT company_id FROM applications WHERE student_id = ?", [$student_id]);
        json_response(compact("data"));
    }

    // 면접 신청
    function applyInterview(){
        $company_id = isset($_POST['company_id']) ? $_POST['company_id'] : null;
        $company = DB::find("companies", $company_id);
        
        if(!$company) back(lang("해당 기업을 찾을 수 없습니다.", "No such business was found."));

        // 중복 검사
        $overlap = DB::fetch("SELECT * FROM applications WHERE student_id = ? AND company_id = ?", [user()->id, $company_id]);
        if($overlap) back(lang("이미 면접을 신청한 기업입니다.", "It's a company that has already applied for an interview."));

        // 신청 내역 작성
        DB::query("INSERT INTO applications(student_id, company_id) VALUES (?, ?)", [user()->id, $company_id]);
        $apply_id = DB::lastInsertId();

        // 이력서 & 자기소개서 작성
        DB::query("INSERT INTO resumes(student_id, company_id, apply_id,
                        personal_data,
                        school_data,
                        act_data,
                        license_data,
                        award_data
                    ) 
                    VALUES (
                        ?, ?, ?,
                        '{}',
                        '[]',
                        '[]',
                        '[]',
                        '[]'
                    )", [user()->id, $company_id, $apply_id]);
        
        go("/participant-companies", lang("면접이 신청되었습니다.", "The interview has been requested."));
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
        if(!$application) json_response(lang("신청 내역을 찾을 수 없습니다.", "Application history not found."));
        if($application->student_id != user()->id) json_response(lang("취소할 권한이 없습니다.", "You do not have permission to cancel."));

        DB::query("DELETE FROM applications WHERE id = ?", [$apply_id]);
        json_response([]);
    }

    // 이력서 & 자기소개서 관리 페이지
    function resumePage(){
        view("resume--student");
    }

    function editResume($apply_id){
        $application = DB::find("applications", $apply_id);
        if(!$application) json_response(lang("신청 내역을 찾을 수 없습니다.", "Application history not found."));
        if($application->student_id !== user()->id) json_response(lang("수정할 권한이 없습니다.", "You do not have permission to modify."));

        $resume = DB::fetch("SELECT * FROM resumes WHERE apply_id = ?", [$application->id]);
        if(!$resume) json_response(lang("이력서 작성 내역을 찾을 수 없습니다.", "No resume creation history found."));
        $input = json_decode(file_get_contents("php://input"));

        // 이미지를 업로드한 경우
        if($input->personal_data->image && strpos($input->personal_data->image, "base64") !== false){
            // 원본 이미지가 있으면 원본 삭제
            $origin_data = json_decode($resume->personal_data);
            if($origin_data->image && is_file(UPLOAD.DS.$origin_data->image)){
                unlink(UPLOAD.DS.$origin_data->image);
            }

            // 현재 입력한 파일 업로드
            $input->personal_data->image = base64_upload($input->personal_data->image);
        }

        DB::query("UPDATE resumes 
                    SET personal_data = ?, 
                        school_data = ?, 
                        act_data = ?, 
                        license_data = ?, 
                        award_data = ?, 
                        growth_text = ?, 
                        character_text = ?, 
                        reason_text = ?, 
                        plan_text = ?
                    WHERE id = ?",
                    [
                        json_encode($input->personal_data),
                        json_encode($input->school_data),
                        json_encode($input->act_data),
                        json_encode($input->license_data),
                        json_encode($input->award_data),
                        $input->growth_text,
                        $input->character_text,
                        $input->reason_text,
                        $input->plan_text,
                        $resume->id
                    ]);
        json_response(["updated_at" => date("Y-m-d H:i:s")]);
    }

    function getResumeJSON($apply_id){
        $application = DB::find("applications", $apply_id);
        if(!$application) json_response(lang("신청 내역을 찾을 수 없습니다.", "Application history not found."));
        if($application->student_id !== user()->id) json_response(lang("수정할 권한이 없습니다.", "You do not have permission to modify."));

        $resume = DB::fetch("SELECT * FROM resumes WHERE apply_id = ?", [$application->id]);
        if(!$resume) json_response(lang("이력서 작성 내역을 찾을 수 없습니다.", "No resume creation history found."));

        json_response(["resume" => $resume]);
    }
}
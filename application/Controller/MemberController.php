<?php
namespace Controller;

use CareerFair\DB;

class MemberController {
    // 세션 프로세스
    function signIn(){
        checkInput();
        extract($_POST);
        $user = DB::who($email);
        
        if(!$user) back("입력 정보와 일치하는 회원이 없습니다.");
        if($user->password !== hash("sha256", $password)) back("비밀번호가 일치하지 않습니다.");

        $_SESSION['user'] = $user;

        go("/", "로그인 되었습니다.");
    }
    function logout(){
        unset($_SESSION['user']);
        go("/", "로그아웃 되었습니다.");
    }
    

    // 회원가입 페이지
    function initPage(){  
        view("signup__init", [], true);
    }
    function studentPage(){
        view("signup__student", [], true);
    }
    function companyPage(){
        view("signup__company", [], true);
    }

    // 회원가입 프로세스
    function signUpStudent(){
        checkInput();
        extract($_POST);

        $exist = DB::who($email);
        if($exist) back("이미 사용 중인 이메일입니다. 다른 이메일을 사용해 주세요.");
        if(!preg_match("/^(?=.*[A-Za-z].*)(?=.*[0-9].*)([a-zA-Z0-9]{8,30})$/", $password)) back("비밀번호는 [영문/숫자] 조합으로 8-30자 이내여야합니다.");
        if($password !== $passconf) back("비밀번호와 비밀번호 확인이 일치하지 않습니다.");
        if(!preg_match("/^[가-힣]{2,16}$/u", $name)) back("올바른 이름을 입력해 주세요.");

        $hashed_password = hash("sha256", $password);
        DB::query("INSERT INTO students(email, password, name, school_field, school_grade, school_class, school_number) VALUES (?, ?, ?, ?, ?, ?, ?)", [
            $email, $hashed_password, $name, $school_field, $school_grade, $school_class, $school_number
            ]);

        go("/", "회원가입이 완료되었습니다.");
    }

    function signUpCompany(){
        checkInput();
        extract($_POST);
        
        
        $exist = DB::who($email);
        if($exist) back("이미 사용 중인 이메일입니다. 다른 이메일을 사용해 주세요.");
        if(!preg_match("/^(?=.*[A-Za-z].*)(?=.*[0-9].*)([a-zA-Z0-9]{8,30})$/", $password)) back("비밀번호는 [영문/숫자] 조합으로 8-30자 이내여야합니다.");
        if($password !== $passconf) back("비밀번호와 비밀번호 확인이 일치하지 않습니다.");
        if(!preg_match("/^[가-힣a-zA-Z\s]{2,16}$/u", $name)) back("기업명은 2-16자 이내여야 합니다.");
        
        $allowedExtname = [".jpg", ".jpeg", ".png", ".gif"];
        $logo = $_FILES['logo'];
        $extname = extname($logo['name']);
        if(array_search($extname, $allowedExtname) === false) back("jpg, png, gif 형식의 이미지만 업로드하실 수 있습니다.");

        $filename = time() . $extname;
        move_uploaded_file($logo['tmp_name'], UPLOAD.DS.$filename);

        $hashed_password = hash("sha256", $password);
        DB::query("INSERT INTO companies(email, password, name, logo, field, category, description) VALUES (?, ?, ?, ?, ?, ?, ?)", [
            $email, $hashed_password, $name, $filename, $field, $category, $description
        ]);

        go("/", "회원가입이 완료되었습니다.");
    }
}
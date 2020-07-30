<?php
namespace Controller;

use CareerFair\DB;

class MemberController {
    // 세션 프로세스
    function signIn(){
        checkInput();
        extract($_POST);
        $user = DB::who($email);
        
        if(!$user) back(lang("입력 정보와 일치하는 회원이 없습니다.", "No members were found matching input information."));
        if($user->password !== hash("sha256", $password)) back(lang("비밀번호가 일치하지 않습니다.", "The password does not match."));

        $_SESSION['user'] = $user;

        go("/", lang("로그인 되었습니다.", "Logged in."));
    }
    function logout(){
        unset($_SESSION['user']);
        go("/", lang("로그아웃 되었습니다.", "Logged out."));
    }
    

    // 회원가입 페이지
    function initPage(){  
        view("signup__init", [], true);
    }
    function studentPage(){
        view("signup--student", [], true);
    }
    function companyPage(){
        view("signup--company", [], true);
    }

    // 회원가입 프로세스
    function signUpStudent(){
        checkInput();
        extract($_POST);

        $exist = DB::who($email);
        if($exist) back(lang("이미 사용 중인 이메일입니다. 다른 이메일을 사용해 주세요.", "Email already in use. Please use another email."));
        if(!preg_match("/^(?=.*[A-Za-z].*)(?=.*[0-9].*)([a-zA-Z0-9]{8,30})$/", $password)) back(lang("비밀번호는 [영문/숫자] 조합으로 8-30자 이내여야합니다.", "Password must be no more than 8 to 30 characters in English/Numeric combination."));
        if($password !== $passconf) back(lang("비밀번호와 비밀번호 확인이 일치하지 않습니다.", "Password and password confirmation do not match."));
        if(!preg_match("/^[가-힣]{2,16}$/u", $name)) back(lang("올바른 이름을 입력해 주세요.", "Please enter a valid name."));

        $hashed_password = hash("sha256", $password);
        DB::query("INSERT INTO students(email, password, name, school_field, school_grade, school_class, school_number) VALUES (?, ?, ?, ?, ?, ?, ?)", [
            $email, $hashed_password, $name, $school_field, $school_grade, $school_class, $school_number
            ]);

        go("/", lang("회원가입이 완료되었습니다.", "Membership registration completed"));
    }

    function signUpCompany(){
        checkInput();
        extract($_POST);
        
        
        $exist = DB::who($email);
        if($exist) back(lang("이미 사용 중인 이메일입니다. 다른 이메일을 사용해 주세요.", "Email already in use. Please use another email."));
        if(!preg_match("/^(?=.*[A-Za-z].*)(?=.*[0-9].*)([a-zA-Z0-9]{8,30})$/", $password)) back(lang("비밀번호는 [영문/숫자] 조합으로 8-30자 이내여야합니다.", "Password must be no more than 8 to 30 characters in English/Numeric combination."));
        if($password !== $passconf) back(lang("비밀번호와 비밀번호 확인이 일치하지 않습니다.", "Password and password confirmation do not match."));
        if(!preg_match("/^[가-힣a-zA-Z\s]{2,16}$/u", $name)) back(lang("기업명은 2-16자 이내여야 합니다.", "Company name must be no more than 2-16 characters."));
        
        $allowedExtname = [".jpg", ".jpeg", ".png", ".gif"];
        $logo = $_FILES['logo'];
        $extname = extname($logo['name']);
        if(array_search($extname, $allowedExtname) === false) back(lang("jpg, png, gif 형식의 이미지만 업로드하실 수 있습니다.", "You can only upload images in jpg, png, and gif formats."));

        $filename = time() . $extname;
        move_uploaded_file($logo['tmp_name'], UPLOAD.DS.$filename);

        $hashed_password = hash("sha256", $password);
        DB::query("INSERT INTO companies(email, password, name, logo, field, category, description) VALUES (?, ?, ?, ?, ?, ?, ?)", [
            $email, $hashed_password, $name, $filename, $field, $category, $description
        ]);

        go("/", lang("회원가입이 완료되었습니다.", "Membership registration completed"));
    }
}
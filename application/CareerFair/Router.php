<?php
namespace CareerFair;

use Controller\CompanyController;
use Controller\StudentController;

class Router {
    static $pages__emptyLayout = [];
    static $pages = [];
    static function __callStatic($name, $args){
        if(strtolower($_SERVER['REQUEST_METHOD']) === $name){
            self::$pages[] = $args;
        }
    }   

    static function connect(){
        $currentURL = explode("?", $_SERVER['REQUEST_URI'])[0];
        foreach(self::$pages as $page){
            $regex = preg_replace("/({[^\/]+})/", "([^/]+)", $page[0]);
            $regex = preg_replace("/\//", "\\/", $regex);
            if(preg_match("/^". $regex . "$/", $currentURL, $matches)){
                unset($matches[0]);
                self::execute($page[1], $matches);
                exit;
            }
        }
        http_response_code(404);
        exit;
    }

    static function execute($action, $args){
        $action = explode("@", $action);
        $conName = "Controller\\{$action[0]}";
        $con = new $conName();

        if($con instanceof StudentController){
            if(!user()) go("/", "로그인 후 사용 가능합니다.");   
            else if(user()->type !== "students") go("/", "일반 회원만 사용 가능합니다.");
        }

        if($con instanceof CompanyController){
            if(!user()) go("/", "로그인 후 사용 가능합니다.");
            else if(user()->type !== "companies") go("/", "기업 회원만 사용 가능합니다.");
        }
        
        $con->{$action[1]}(...$args);
    }
}
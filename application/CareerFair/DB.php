<?php
namespace CareerFair;

class DB {
    static $conn = null;
    static $user_name = "root";
    static $password = "";

    static function getConnection(){
        if(self::$conn == null){
            self::$conn = new \PDO("mysql:host=localhost;dbname=career_market;charset=utf8mb4", self::$user_name, self::$password, [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
        }
        return self::$conn;
    }   

    static function query($sql, $data = []){
        $q = self::getConnection()->prepare($sql);
        $q->execute($data);
        return $q;
    }

    static function fetch($sql, $data = []){
        return self::query($sql, $data)->fetch();
    }

    static function fetchAll($sql, $data = []){
        return self::query($sql, $data)->fetchAll();
    }

    static function lastInsertId(){
        return self::getConnection()->lastInsertId();
    }

    static function find($table, $id){
        return self::fetch("SELECT * FROM `$table` WHERE id = ?", [$id]);
    }

    static function who($email){
        $student = DB::fetch("SELECT *, 'students' type FROM students WHERE email = ?", [$email]);
        $company = DB::fetch("SELECT *, 'companies' type FROM companies WHERE email = ?", [$email]);

        return $student ? $student : ($company ? $company : null);
    }
}
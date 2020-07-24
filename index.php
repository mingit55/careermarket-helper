<?php
/**
 * 세션 시작
 */
session_start();

/**
 * 상수 선언
 */
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", __DIR__);
define("APP", ROOT.DS."application");
define("VIEW", APP.DS."View");
define("RES", ROOT.DS."resources");
define("UPLOAD", RES.DS."uploads"); 

/**
 * IMPORT
 */
require APP.DS."autoload.php";  // Autoloader
require APP.DS."helper.php";    // Library
require APP.DS."web.php";       // Routing
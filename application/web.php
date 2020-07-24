<?php
use CareerFair\Router;

Router::get("/", "CommonController@mainPage");

Router::connect();
<?php

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'Model/post.php';
require 'Model/postLoader.php';
require 'Controller/postController.php';
require 'Model/postSaver.php';

$controller = new postController();
$controller->render();



if($_SERVER["REQUEST_METHOD"]== "POST"){

    $save = new postSaver();
    $save->saveMessage();
}




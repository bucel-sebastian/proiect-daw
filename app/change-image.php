<?php
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
session_start();
error_reporting(0);

$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];

$fileExt = explode(".",$fileName);
$fileActualExt = strtolower(end($fileExt));

$fileNewName = $_SESSION['user-data']->user_id . "." . $fileActualExt;

if($database->update('users',array('user_id'=>$_SESSION['user-data']->user_id),array('image'=>$fileNewName))){
    move_uploaded_file($fileTmpName,DOCUMENT_ROOT . '/resources/assets/user-assets/'.$fileNewName);
    $_SESSION['user-data']->image = $fileNewName;
    echo '{"status":"1"}';
}
else{
    echo '{"status":"0"}';
}
   
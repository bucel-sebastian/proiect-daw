<?php
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';

session_start();
error_reporting(0);

if($_POST['new-password-1'] === $_POST['new-password-2']){
    if(User::changePassword($_POST['new-password-1'],$_SESSION['user-data']->user_id)){
        echo '{"status":"1"}';
        }
        else{
            echo '{"status":"0"}';
        }
}
else{
    echo '{"status":"0"}';
}
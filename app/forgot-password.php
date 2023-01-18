<?php

include $_SERVER['DOCUMENT_ROOT'] . '/config.php';

if(isset($_POST['forgot-password-email'])){
    if(User::generateNewPasswordToken($_POST['forgot-password-email'])){
        echo '{"status":"1"}';
    }
    else{
        echo '{"status":"0"}';
    }
}
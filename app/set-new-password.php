<?php

include $_SERVER['DOCUMENT_ROOT'] . '/config.php';

if(isset($_POST['new-password-token']) && isset($_POST['new-password-1']) && isset($_POST['new-password-2'])){
    if($_POST['new-password-1'] == $_POST['new-password-2']){
        if(User::setNewPassword($_POST['new-password-1'],$_POST['new-password-token'])){
            echo '{"status":"1"}';
        }
        else{
            echo '{"status":"0"}';
        }
    }
    else{
        echo '{"status":"0","error":"Parolele nu se potrivesc!"}';
    }
    
}
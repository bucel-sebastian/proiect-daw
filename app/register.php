<?php

include $_SERVER['DOCUMENT_ROOT'] . '/config.php';

if(isset($_POST['login-username']) && isset($_POST['login-email']) && ($_POST['login-password-1'] == $_POST['login-password-2'])){
    if(User::register($_POST['login-username'],$_POST['login-email'],$_POST['login-password-1'])){
        echo '{"status":"1"}';
    }
    else{
        echo '{"status":"0"}'; 
    }
}
else{
    echo '{"status":"0"}'; 
}
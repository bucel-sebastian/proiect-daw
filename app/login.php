<?php
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';

if(isset($_POST['login-username'])){
    if(isset($_POST['login-password'])){
        if(User::login($_POST['login-username'],$_POST['login-password'])){
            echo '{"status":"1"}';
        }
        else{
            echo '{"status":"0"}';
        }
    }
    else if(isset($_POST['login-password-1'])){
        if(User::login($_POST['login-username'],$_POST['login-password-1'])){
            echo '{"status":"1"}';
        }
        else{
            echo '{"status":"0"}';
        }
    }
}
<?php

include $_SERVER['DOCUMENT_ROOT'] . '/config.php';

session_start();
error_reporting(0);

if(isset($_GET['callback'])){
    $callback = $_GET['callback'];
    $callback();
}
else{
    $callback = $_POST['callback'];
    $callback();
}



function setFeature(){
    include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
    if(isset($_GET['featured']) && isset($_GET['note_id'])){
        if($database->update('notes',array('note_id'=>$_GET['note_id'],'user_id'=>$_SESSION['user-data']->user_id),array('featured'=>$_GET['featured']))){
            echo '{"status":"1"}';
        }
        else{
            echo '{"status":"0"}';
        }
    }
    else{
        echo '{"status":"0"}';
    }
}

function setTitle(){
    include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
    if(isset($_GET['title']) && isset($_GET['note_id'])){
        if($database->update('notes',array('note_id'=>$_GET['note_id'],'user_id'=>$_SESSION['user-data']->user_id),array('title'=>$_GET['title'],'last_edit_date'=>date("Y-m-d H:i:s")))){
            echo '{"status":"1","newDate":"'.date("Y-m-d H:i:s").'"}';
        }
        else{
            echo '{"status":"0"}';
        }
    }
    else{
        echo '{"status":"0"}';
    }
}

function setContent(){
    include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
    if(isset($_POST['content']) && isset($_POST['note_id'])){
        if($database->update('notes',array('note_id'=>$_POST['note_id'],'user_id'=>$_SESSION['user-data']->user_id),array('content'=>$_POST['content'],'last_edit_date'=>date("Y-m-d H:i:s")))){
            echo '{"status":"1","newDate":"'.date("Y-m-d H:i:s").'"}';
        }
        else{
            echo '{"status":"0"}';
        }
    }
    else{
        echo '{"status":"0"}';
    }
}


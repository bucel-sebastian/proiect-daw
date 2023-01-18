<?php

include $_SERVER['DOCUMENT_ROOT'] . '/config.php';

session_start();
error_reporting(0);

if(isset($_GET['note_id'])){
    if($database->delete('notes',array('note_id'=>$_GET['note_id'],'user_id'=>$_SESSION['user-data']->user_id))){
        echo '{"status":"1"}';
    }
    else{
        echo '{"status":"0"}';
    }
}
else{
    echo '{"status":"0"}';
}

?>
<?php

include $_SERVER['DOCUMENT_ROOT'] . '/config.php';

session_start();
error_reporting(0);

if(isset($_POST['title'])){
    $new_note_id = uniqid("note",false);
    if($database->insert(array("user_id"=>$_SESSION['user-data']->user_id,
                            "create_date"=>date("Y-m-d H:i:s"),
                            "last_edit_date"=>date("Y-m-d H:i:s"),
                            "title"=>$_POST['title'],
                            "content"=>$_POST['content'],
                            "featured"=>$_POST['featured'],
                            "note_id"=>$new_note_id,
                            "added_users"=>'[]'
),'notes')){
    echo '{"status":"1","newNoteId":"'.$new_note_id.'"}';
}
else{
    echo '{"status":"0"}';
}
}
else{
    echo '{"status":"0"}';
}
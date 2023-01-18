<?php

include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
session_start();
error_reporting(0);

if(isset($_GET['key'])){
    $array = array();
    $results = $database->get('users',null,null,null,null,array("username"=>$_GET['key']));
    foreach($results as $key => $value){
        
        if($value['user_id'] === $_SESSION['user-data']->user_id){
            
        }
        else{
            
            array_push($array, array("user_id"=>$value['user_id'],"username"=>$value['username']));
            
        }
        
    }
    echo json_encode($array);
}
else{
    echo "none";
}


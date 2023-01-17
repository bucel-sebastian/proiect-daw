<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');


Route::get('/',function() {
    // if(!User::checkLogin()){
        // return view('login.view.php');
    // }
    return view('home.view.php');
});

Route::get('/404',function() {
    return view('404.view.php');
});


Route::run();
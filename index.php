<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
require_once(SERVER_ROOT . '/includes.php');

Route::get('/',function() {
    return view('home.view.php');
});

Route::get('/404',function() {
    return view('404.view.php');
});


Route::run();
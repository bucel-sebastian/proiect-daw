<?php

include $_SERVER['DOCUMENT_ROOT'] . '/config.php';



Route::get('/',function() {
    if(!User::checkLogin()){
        return view('login.view.php');
    }
    return view('home.view.php');
});

Route::get('/login',function() {
    if(User::checkLogin()){
        return view('home.view.php');
    }
    return view('login.view.php');
});
Route::get('/logout',function() {
    if(User::logout()){
        return view('logout.view.php');
    }
});
Route::get('/register',function() {
    if(User::checkLogin()){
        return view('home.view.php');
    }
    return view('register.view.php');
});
Route::get('/forget-password',function() {
    if(User::checkLogin()){
        return view('home.view.php');
    }
    return view('forget-password.view.php');
});
Route::get('/forget-password/new',function(){
    if(User::checkLogin()){
        return view('home.view.php');
    }
    return view('new-password.view.php');
});
Route::get('/forget-password/success',function(){
    if(User::checkLogin()){
        return view('home.view.php');
    }
    return view('forget-password-success.view.php');
});




Route::get('/new-note',function(){
    if(!User::checkLogin()){
        return view('login.view.php');
    }
    return view('new-note.view.php');
});
Route::get('/note',function(){
    if(!User::checkLogin()){
        return view('login.view.php');
    }
    return view('note.view.php');
});
Route::get('/my-notes',function(){
    if(!User::checkLogin()){
        return view('login.view.php');
    }
    return view('my-notes.view.php');
});
Route::get('/shared-notes',function(){
    if(!User::checkLogin()){
        return view('login.view.php');
    }
    return view('shared-notes.view.php');
});
Route::get('/my-account',function(){
    if(!User::checkLogin()){
        return view('login.view.php');
    }
    return view('my-account.view.php');
});




Route::get('/404',function() {
    return view('404.view.php');
});
Route::run();
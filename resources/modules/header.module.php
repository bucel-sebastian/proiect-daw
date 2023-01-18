<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';

if(User::checkLogin()){
    if($_SESSION['user-data']->image != null){
        $user_image = '/resources/assets/user-assets/' . $_SESSION['user-data']->image;
    }
    else{
        $user_image = '/resources/assets/img/default-image.jpg';
    }
    echo '
    <header id="header">
        <div class="header-wrap">

            <div style="display:flex;flex-direction:row;align-items:center;align-content:center;height:100%">
                <button id="menu-button" class="menu-inactive">
                    <div class="bar bar-1"></div>
                    <div class="bar bar-2"></div>
                    <div class="bar bar-3"></div>
                    
                </button>
                <div style="margin-left:25px;" id="logo">
                    <h2 style="color:#fafafa;font-size:1.6em">La Notițe</h2>
                    <span style="margin:0 auto;display:block;color:#fafafa;">Realizat de Bucel Ion-Sebastian</span>
                </div>
            </div>
            <div>
               <a href="/my-account/" style="display:flex;flex-direction:row;align-items:center;align-content:center;color:#fafafa;text-decoration:none;"><img style="max-width:35px;border-radius:100px;margin-right:15px" src="' . $user_image . '"> ' . $_SESSION['user-data']->username . '</a> 
            </div>

        </div>
    </header>
    ';
}
else{
    echo '
    <header id="header">
        <div class="header-wrap">

            <div>
                <img src="/resources/assets/logo.png" alt="">
            </div>
            <div>
               <a href="/login/">Autentificare</a> 
               <a href="/register/">Inregistrare</a> 
            </div>

        </div>
    </header>
    ';
}



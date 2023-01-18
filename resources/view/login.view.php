<?php

    $pageTitle = 'Autentificare';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    

    <?php
        include DOCUMENT_ROOT . '/resources/modules/beforeHead.module.php';
    ?>

</head>
<body>

    <div class="login-page">
        <div class="login-page-wrap">
            <h2 style="text-align:center;color:#fafafa;font-size:1.8em">La Notițe</h2>
            <span style="text-align:center;margin:0 auto;display:block;color:#fafafa;">Realizat de Bucel Ion-Sebastian</span>
            <div id="login-error" style="color:#ff5555;display:none"><p style="text-align:center;">Datele introduse sunt gresite!</p></div>
            <form action="" id="login-form" class="login-register-form">
                <div class="input-container-col">
                    <label for="login-username">Nume de utilizator sau Email</label>
                    <input type="text" name="login-username" required>
                </div>
                <div class="input-container-col">
                    <label for="login-password">Parola</label>
                    <input type="password" name="login-password" required>
                </div>
                <!-- <div class="input-container-row">
                    <input type="checkbox" name="login-remember-me" id="login-remember-me">
                    <label for="login-remember-me">Tine-ma minte</label>
                </div>
                -->
                <div class="button-container">
                    <button type="submit">Autentificare</button>
                </div>
                <div class="login-other-btns">
                    <a href="/forget-password/">Am uitat parola</a>
                    <a href="/register/">Inregistreaza-te</a>
                </div>
                
            </form>
        </div>
    </div>

    <?php
        include DOCUMENT_ROOT . '/resources/modules/footer.module.php';
        include DOCUMENT_ROOT . '/resources/modules/beforeBody.module.php';
    ?>
</body>
</html>



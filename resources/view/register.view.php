<?php

    $pageTitle = 'Inregistrare';
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
            <div id="login-error" style="color:#ff5555;display:none"><p style="text-align:center;">Datele introduse sunt deja folosite!</p></div>
            <form action="" id="register-form" class="login-register-form">
                <div class="input-container-col">
                    <label for="login-username">Nume de utilizator</label>
                    <input type="text" name="login-username" required>
                </div>
                <div class="input-container-col">
                    <label for="login-email">Email</label>
                    <input type="text" name="login-email" required>
                </div>
                <div class="input-container-col">
                    <label for="login-password-1">Parola</label>
                    <input type="password" name="login-password-1" required>
                </div>
                <div class="input-container-col">
                    <label for="login-password-2">Confirma parola</label>
                    <input type="password" name="login-password-2" required>
                </div>
                <!-- <div class="input-container-row">
                    <input type="checkbox" name="login-remember-me" id="login-remember-me">
                    <label for="login-remember-me">Tine-ma minte</label>
                </div>
                -->
                <div class="button-container">
                    <button type="submit">Inregistreaza-te</button>
                </div>
                <div class="login-other-btns">
                    <a href="/login/">Autentificare</a>
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



<?php

    $pageTitle = 'Seteaza parola noua';
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
            <br>
            <span style="text-align:center;margin:0 auto;display:block;color:#fafafa; font-size:0.8em">Ai primit pe email un cod cu ajutorul caruia iti poti schimba parola.</span>
            <div id="login-error" style="color:#ff5555;display:none"><p style="text-align:center;">Datele introduse sunt gresite!</p></div>
            <form action="" id="new-password-form" class="login-register-form">
                <div class="input-container-col">
                    <label for="new-password-token">Token</label>
                    <input type="text" name="new-password-token" required>
                </div>
                <div class="input-container-col">
                    <label for="new-password-1">Parola noua</label>
                    <input type="password" name="new-password-1" required>
                </div>
                <div class="input-container-col">
                    <label for="new-password-2">Confirmare parola noua</label>
                    <input type="password" name="new-password-2" required>
                </div>
                
                <!-- <div class="input-container-row">
                    <input type="checkbox" name="login-remember-me" id="login-remember-me">
                    <label for="login-remember-me">Tine-ma minte</label>
                </div>
                -->
                <div class="button-container">
                    <button type="submit">Trimite</button>
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



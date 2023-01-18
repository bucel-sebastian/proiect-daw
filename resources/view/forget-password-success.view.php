<?php

    $pageTitle = 'Am uitat parola';
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
            <span style="text-align:center;margin:0 auto;display:block;color:#fafafa; font-size:0.8em">Parola ta a fost resetata!</span>
            <div class="login-other-btns">
                    <a href="/login/">Autentificare</a>
                </div>
                
        </div>
    </div>

    <?php
        include DOCUMENT_ROOT . '/resources/modules/footer.module.php';
        include DOCUMENT_ROOT . '/resources/modules/beforeBody.module.php';
    ?>
</body>
</html>



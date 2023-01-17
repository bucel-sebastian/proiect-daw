<?php

    $pageTitle = 'Home';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    

    <?php
        include DOCUMENT_ROOT . '/resources/modules/beforeHead.module.php';
    ?>

</head>
<body>

    

    
    <div>
        <form action="">
            <div class="input-container-col">
                <label for=""></label>
                <input type="text">
            </div>
            <div class="input-container-col">
                <label for=""></label>
                <input type="password">
            </div>
            
            <div class="button-container">
                <button type="submit">Login</button>
            </div>

        </form>

    </div>



    <?php
        include DOCUMENT_ROOT . '/resources/modules/footer.module.php';
        include DOCUMENT_ROOT . '/resources/modules/beforeBody.module.php';
    ?>
</body>
</html>



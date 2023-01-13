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

    <?php
        include DOCUMENT_ROOT . '/config.php';
        echo $database->insert(array("nume"=>gethostbyaddr($_SERVER['REMOTE_ADDR']),"descriere"=>$_SERVER['REMOTE_ADDR'],"prenume"=>date("Y-m-d H:i")),'test');
        $results = $database->get('test');
        echo var_dump($results);
    ?>

    <?php
        include DOCUMENT_ROOT . '/resources/modules/header.module.php';
    ?>


    




    <?php
        include DOCUMENT_ROOT . '/resources/modules/footer.module.php';
        include DOCUMENT_ROOT . '/resources/modules/beforeBody.module.php';
    ?>
</body>
</html>



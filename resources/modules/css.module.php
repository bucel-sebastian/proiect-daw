<?php

$filesArray = scandir(DOCUMENT_ROOT . '/resources/css/');

echo '<!-- Stylesheets -->';
foreach ($filesArray as $key => $file) {
    if($file == '.' || $file == '..'){
        continue;
    }
    // echo $file;
    echo '<link rel="stylesheet" type="text/css" href="' . DOCUMENT_ROOT . '/resources/css/' . $file . '">'; 
}

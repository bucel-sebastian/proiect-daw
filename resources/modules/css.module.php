<?php

$cssFilesArray = scandir(DOCUMENT_ROOT . '/resources/css/');

echo '<!-- Stylesheets -->';
foreach ($cssFilesArray as $key => $file) {
    if($file == '.' || $file == '..'){
        continue;
    }
    // echo $file;
    echo '<link rel="stylesheet" type="text/css" href="/resources/css/' . $file . '?version='.uniqid("",false).'">'; 
}

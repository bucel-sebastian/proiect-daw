<?php

$jsFilesArray = scandir(DOCUMENT_ROOT . '/resources/js/');

echo '<!-- Scripts -->';
foreach ($jsFilesArray as $key => $file) {
    if($file == '.' || $file == '..'){
        continue;
    }
    // echo $file;
    // echo '"/resources/js/' . $file . '"';
    echo '<script src="/resources/js/' . $file . '?version='.uniqid("",false).'"></script>'; 
}
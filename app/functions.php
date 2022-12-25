<?php

function view(string $file) {
    include(SERVER_ROOT . "/resources/view/" . $file);
}



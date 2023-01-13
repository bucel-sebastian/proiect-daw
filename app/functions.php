<?php

function view(string $file) {
    include(DOCUMENT_ROOT . "/resources/view/" . $file);
}
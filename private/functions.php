<?php

function url_for($script_path) {
    if ($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}

function url($string) {
    return urlencode($string);
}

function rurl($string) {
    return rawurlencode($string);
}

function h($string) {
    return htmlspecialchars($string);
}

?>
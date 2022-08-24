<?php
    $key = getenv('secret_key');
    $args = $_SERVER["REQUEST_URI"];
    $arg_arr = explode("/",$args);
    print_r($arg_arr);

    print_r($_GET);
?>

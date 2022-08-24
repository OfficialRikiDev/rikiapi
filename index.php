<?php
    $key = getenv('secret_key');
    $args = $_SERVER["PATH_INFO"];
    $arg_arr = explode("/",$args, "/");
    print_r($arg_arr);

    print_r($_GET);
?>

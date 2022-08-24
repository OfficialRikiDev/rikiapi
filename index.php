<?php
    $key = getenv('secret_key');
    $data = explode("/",trim($_SERVER["PATH_INFO"],"/"));
    print_r($data);

    print_r($_GET);
?>

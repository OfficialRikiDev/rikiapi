<?php
    $key = getenv('secret_key');
    $data = explode("/",trim($_SERVER["PATH_INFO"],"/"));
    print_r($data);

    print_r($_GET);

    $output = implode(', ', array_map(
        function ($v, $k) { return sprintf("%s='%s'", $k, $v); },
        $_GET,
        array_keys($_GET)
    ));
    
    $url = "https://" . $data[1]. ".roblox.com/". $data[0] . "/" .  implode("/",array_slice($data,1)) . "" . $output;

    echo $url;
?>

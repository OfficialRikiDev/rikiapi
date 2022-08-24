<?php
    $key = getenv('secret_key');
    $data = explode("/",trim($_SERVER["PATH_INFO"],"/"));
    print_r($data);

    print_r($_GET);
    
    $url = "https://" . $data[1]. ".roblox.com/". $data[0] . "/" .  implode("/",array_slice($data,1));

    echo $url;
?>

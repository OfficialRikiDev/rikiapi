<?php
    $key = getenv('secret_key');
    $data = explode("/",trim($_SERVER["PATH_INFO"],"/"));

    $output = implode('&', array_map(
        function ($v, $k) { return sprintf("%s=%s", $k, $v); },
        $_GET,
        array_keys($_GET)
    ));
    
    $url = "https://" . $data[1]. ".roblox.com/". $data[0] . "/" .  implode("/",array_slice($data,1)) . "?" . $output;
    $post = array('key' => "adminpinohehe");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
    $response = curl_exec($ch);
    $result = json_decode($response);
    curl_close($ch); // Close the connection
    echo $result;
   
?>

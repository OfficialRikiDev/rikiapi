<?php
    $key = getenv('secret_key');
    $data = explode("/",trim($_SERVER["PATH_INFO"],"/"));

    $output = implode('&', array_map(
        function ($v, $k) { return sprintf("%s=%s", $k, $v); },
        $_GET,
        array_keys($_GET)
    ));
    
    $url = "https://" . $data[1]. ".roblox.com/". $data[0] . "/" .  implode("/",array_slice($data,1)) . "?" . $output;
    $request_headers = array(
                    "Key: adminpinohee",
                );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);

    $season_data = curl_exec($ch);

    if (curl_errno($ch)) {
        print "Error: " . curl_error($ch);
        exit();
    }

    // Show me the result
    curl_close($ch);
    $json= json_decode($season_data, true);
    echo $json;
   
?>

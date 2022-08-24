<?php
    $key = getenv('secret_key');
    if(!isset($_GET["key"])){
        http_response_code(407); 
    }
?>

<?php
    $key = getenv('secret_key');
    if(!isset($_POST["key"])){
        http_response_code(407); 
    }
?>

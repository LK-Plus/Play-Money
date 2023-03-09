<?php

    $ch = curl_init();

    $header = [
        'x-api-key:SUPR3M@P0K3R$PR0D!2022',
        'Content-Type:application/json'
    ];

    curl_setopt_array($ch,[
        CURLOPT_HEADER => false,
        CURLOPT_HTTPHEADER => $header,
        CURLOPT_URL => 'https://api.pokerbyte.com.br/api/console/createAccont',
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => json_encode($_POST)

    ]);

    $ret = curl_exec($ch);
    echo $ret;
    curl_close($ch);

?>
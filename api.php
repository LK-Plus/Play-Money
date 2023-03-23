<?php

    $passwordLength = strlen($_POST["password"]);
    $usernameLength = strlen($_POST["username"]);
    if ($passwordLength <= 16 && $passwordLength >= 8 && $usernameLength <= 20 && $usernameLength >= 2) {
        $ch = curl_init();

        $header = [
            'x-api-key:SUPR3M@P0K3R$PR0D!2022',
            'Content-Type:application/json'
        ];

        curl_setopt_array($ch,[
            CURLOPT_HEADER => false,
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_URL => 'https://api.pokerbyte.com.br/console/createAccount',
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => json_encode($_POST)

        ]);

        echo curl_exec($ch);
        curl_close($ch);
    } else {
        echo json_encode(array("success" => false,"msg" => "username or password too long"));
    }

?>
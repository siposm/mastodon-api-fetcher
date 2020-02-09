<?php

    // -----------------------------------------------------
    //
    // USED LIB: https://github.com/yks118/Mastodon-api-php
    //
    // -----------------------------------------------------
    //
    // STEP 1: curl post >> app credentials
    // STEP 2: received access token
    // STEP 3: request anything with bearer token in header
    // 
    // DETAILS: see check_steps.txt
    //
    // -----------------------------------------------------


    require_once './Mastodon_api.php';

    $mastodon_api = new Mastodon_api();
    $mastodon_api->set_url('https://mastodon.social');

    // print_r($mastodon_api->create_app('APP Name',null,null,'Mastodon url'));
    $mastodon_api->set_client('MmP_oIhzXpp5p-TShq2EHtsYL7q16pwtT7w9KAN-Fqk','ixQsRLtPGRgrYjfJ9miz7bLHrjbv3Ve-VZoA37LzGto');

    // print_r($mastodon_api->login('your login email','your login password'));
    $mastodon_api->set_token('zAV7HjvrQuS2UbwUUo6BgbgPx-GKR9w7Om9jL83K1sw','Bearer');

    $x = $mastodon_api->accounts_statuses('1097067');

    

    echo "<pre>";
    var_dump($x["html"]);
    echo "</pre>";

?>
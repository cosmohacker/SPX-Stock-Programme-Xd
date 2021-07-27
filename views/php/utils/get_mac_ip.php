<?php

function getIpAddress(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
    
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    
    else {
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }

    return $ip_address;
}

function getMacAddress(){
    $mac_address = exec('getmac');
    
    $mac_address = strtok($mac_address, ' ');

    return $mac_address;
}

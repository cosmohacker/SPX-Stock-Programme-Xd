<?php

function randomChars($from, $to, $type)
{

    switch ($type) {
        case "All":
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            break;
        case "Words":
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            break;
        case "Numbers":
            $characters = '0123456789';
            break;
    }

    $randomChar = '';

    for ($i = $from; $i < $to; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomChar .= $characters[$index];
    }

    return $randomChar;
}

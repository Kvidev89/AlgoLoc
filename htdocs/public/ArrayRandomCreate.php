<?php

function arrayRandomCreate(int $quantity): array {
    $resArr = [];

    $randQuantity = $quantity * 2;

    for ($i = 0; $i < $quantity; $i++) {
        $val = rand(0, $randQuantity);
        if (in_array($val, $resArr)) {
            echo '! ';
            $i--;
        } else {
            $resArr[$val] = $val;
        }
    }

    return $resArr;
}

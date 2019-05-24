<?php
function jooRandom($length = 6) {
    $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charLen = strlen($char);
    $ranStr = '';
    for ($i = 0; $i < $length; $i++) {
        $ranStr .= $char[rand(0, $charLen - 1)];
    }
    return $ranStr;
}
echo jooRandom();
?>
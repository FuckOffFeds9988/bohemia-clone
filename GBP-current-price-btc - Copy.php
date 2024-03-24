<?php

$page = file_get_contents('https://bitpay.com/api/rates');
$my_array = json_decode($page, true);
$exchange_rate_gbp = $my_array[4]["rate"];      
echo $exchange_rate_gbp;
?>
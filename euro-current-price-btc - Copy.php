<?php

$page = file_get_contents('https://bitpay.com/api/rates');
$my_array = json_decode($page, true);
$exchange_rate_euro = $my_array[3]["rate"];      
echo $exchange_rate_euro;
?>
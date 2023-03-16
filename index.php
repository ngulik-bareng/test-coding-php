<?php 

$input = "Total pembelian seragam sekolah sebesar Rp 600.000";

$explodeInput = explode(" ", $input);

print_r($explodeInput); 

echo "</br>";
// echo end($explodeInput);
// echo $explodeInput[6];

$strInput = str_replace(".", "",  $explodeInput[6]);

echo $strInput;





?>
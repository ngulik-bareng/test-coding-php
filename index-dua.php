<?php 

$input = "Kd Brg:1234567, NmBrg=Gehu Pisang Leupeut, HrgBrg:3.500, QtyBrg=4, ttlBayar:14.000";

$input1 = str_replace(":", "=", $input);

$input2 = str_replace(", ", "&", $input1);

parse_str($input2, $input3);

// print_r($input3);
echo "Test Coding Masuk Kerja</br>";
echo "Kode Barang = " . $input3["Kd_Brg"]. "</br>";
echo "Nama Barang = " . $input3["NmBrg"]. "</br>";
echo "Harga Barang = " . $input3["HrgBrg"]. "</br>";
echo "Qty Barang = " . $input3["QtyBrg"]. "</br>";
echo "Total Bayar = " . $input3["ttlBayar"]. "</br>";

// echo $Kd_Brg. "</br>";
// echo $NmBrg. "</br>";


?>
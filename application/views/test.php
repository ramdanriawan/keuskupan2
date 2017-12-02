<?php 
$array = array("nama" => "ramdan", "umur" => 15);
$array2 = array("data" => $array);

extract($array2);

print_r($data);
?>
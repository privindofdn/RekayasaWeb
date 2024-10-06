<?php
// Membuat array
$array = array(
    "nama" => "John Doe",
    "usia" => 30,
    "pekerjaan" => "Pengembang Web",
    "hobi" => array("Membaca", "Bersepeda", "Bermain game")
);

// Encode array ke format JSON
$json = json_encode($array);
echo "JSON format: " . $json;
?>

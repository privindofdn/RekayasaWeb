<?php
// JSON string
$jsonString = '{"nama":"John Doe","usia":30,"pekerjaan":"Pengembang Web","hobi":["Membaca","Bersepeda","Bermain game"]}';

// Decode menjadi PHP Object
$phpObject = json_decode($jsonString);

// Akses nilai dari PHP Object
echo "Nama (Object): " . $phpObject->nama . "<br>";
echo "Pekerjaan (Object): " . $phpObject->pekerjaan . "<br>";
echo "Hobi pertama (Object): " . $phpObject->hobi[0] . "<br>";

// Decode menjadi PHP Array
$phpArray = json_decode($jsonString, true);

// Akses nilai dari PHP Array
echo "Nama (Array): " . $phpArray['nama'] . "<br>";
echo "Pekerjaan (Array): " . $phpArray['pekerjaan'] . "<br>";
echo "Hobi pertama (Array): " . $phpArray['hobi'][0] . "<br>";
?>

<?php
function curl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/rekayasaweb/pertemuan2/getwisata.php");
$data = json_decode($send, TRUE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #4CAF50; /* Green */
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Light grey */
        }
        tr:hover {
            background-color: #ddd; /* Light grey on hover */
        }
    </style>
</head>
<body>

<h2>Daftar Wisata</h2>
<table>
    <thead>
        <tr>
            <th>ID Wisata</th>
            <th>Kota</th>
            <th>Landmark</th>
            <th>Tarif</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row): ?>
            <tr>
                <td><?php echo htmlspecialchars($row["id_wisata"]); ?></td>
                <td><?php echo htmlspecialchars($row["kota"]); ?></td>
                <td><?php echo htmlspecialchars($row["landmark"]); ?></td>
                <td><?php echo htmlspecialchars($row["tarif"]); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>

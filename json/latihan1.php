<?php

// $mahasiswa = [
//    [
//      "nama" => "hafizhah nurhisyan",
//     "nim" => "2217020022",
//     "email" => "hafizhahnurhisyan04@gmail.com"
//    ],
//    [
//     "nama" => "hafizhah nurhisyan",
//     "nim" => "2217020022",
//     "email" => "hafizhahnurhisyan04@gmail.com"
//    ]
// ];

$dbh = new PDO
('mysql:host=localhost;dbname=db_mahasiswa', 'root', '');
$db = $dbh->prepare('SELECT*FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll (PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa,JSON_PRETTY_PRINT);
echo $data;

?>
<?php
header('Content-Type: application/json');
// $mahasiswa = [
//     [
//     "nama" => "Siva Rahmatullah",
//     "nim" => "2217020071",
//     "email" => "rahmatullahsiva@gmail.com"
//     ], 
//     [
//         "nama" => "Max Verstappen",
//         "nim" => "2217020001",
//         "email" => "verstappen@gmail.com"
//         ]
    
// ];


$dbh = new PDO('mysql:host=localhost;dbname=padangtv_karyawan','root','');

$db = $dbh->prepare('SELECT * FROM karyawan');
$db->execute();
$karyawan = $db->fetchAll(PDO::FETCH_ASSOC);
$data = json_encode($karyawan);
echo $data;


?>
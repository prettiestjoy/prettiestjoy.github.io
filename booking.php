<?php
session_start();
// buat ambil data dr form
$name = $_POST['name'];
$email = $_POST['email'];
$tiket = $_POST['tiket'];
$date = $_POST['date'];

$data = "Nama: $name\nEmail: $email\nJumlah Tiket: $tiket\nTanggal Kunjungan: $date\n\n";

$filename = 'data_pemesanan.txt';

$file = fopen($filename, 'a');

fwrite($file, $data);

fclose($file);

$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['tiket'] = $tiket;
$_SESSION['date'] = $date;

header('Location: hasil.php');
exit();
?>

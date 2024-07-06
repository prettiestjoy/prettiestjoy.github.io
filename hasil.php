<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Success</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    .button {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 20px;
        font-size: 16px;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .button:hover {
        background-color: #0056b3;
    }
</style>
<body>
    <header style="background-image: url('bg.jpg');">
        <h1>Museum Nusantara</h1>
        <nav>
            <ul>
                <li><a href="index.html#home">Home</a></li>
                <li><a href="index.html#gallery">Galeri Koleksi</a></li>
                <li><a href="index.html#booking">Pesan Tiket</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="success">
        <h2>Pemesanan Tiket Berhasil!</h2>
        <p>Terima kasih telah memesan tiket masuk Museum Nusantara.</p>
        <p>Detail pemesanan:</p>
        <ul>
            <li>Nama: <?php echo $_SESSION['name']; ?></li>
            <li>Email: <?php echo $_SESSION['email']; ?></li>
            <li>Jumlah Tiket: <?php echo $_SESSION['tiket']; ?></li>
            <li>Tanggal Kunjungan: <?php echo $_SESSION['date']; ?></li>
        </ul>
        <p><a href="index.html" class="button">Kembali ke Halaman Utama</a></p>
    </section>
    
    <footer>
        <p>&copy; 2024 Museum Nusantara.</p>
    </footer>
</body>
</html>

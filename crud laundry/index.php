<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Laundry</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Aplikasi Laundry</h1>

    <?php
    session_start();

    // Periksa apakah ada pesan konfirmasi
    if (isset($_SESSION['success_message'])) {
        echo '<div style="color: green;">' . $_SESSION['success_message'] . '</div>';
        //unset($_SESSION['success_message']); // Hapus pesan dari session
    }
    ?>

    <a href="add_pemesanan.php">Tambah Pemesanan</a>
    <br>
    <a href="list_pemesanan.php">Daftar Pemesanan</a>
</body>
</html>

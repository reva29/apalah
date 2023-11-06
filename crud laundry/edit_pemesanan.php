<?php
include "db_connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM pemesanan WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID pemesanan tidak diberikan.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Pemesanan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Edit Pemesanan</h1>
    <form action="update_pemesanan.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Nama Pelanggan: <input type="text" name="nama_pelanggan" value="<?php echo $row['nama_pelanggan']; ?>" required><br>
        Berat Pakaian (kg): <input type="number" name="berat_pakaian" step="0.01" value="<?php echo $row['berat_pakaian']; ?>" required><br>
        Layanan:
        <select name="layanan">
            <option value="Cuci Kering" <?php if ($row['layanan'] == 'Cuci Kering') echo 'selected'; ?>>Cuci Kering</option>
            <option value="Cuci Hingga Setrika" <?php if ($row['layanan'] == 'Cuci Hingga Setrika') echo 'selected'; ?>>Cuci Hingga Setrika</option>
        </select><br>
        Harga per Kg: <input type="number" name="harga_per_kg" step="0.01" value="<?php echo $row['harga_per_kg']; ?>" required><br>
        Tanggal Pemesanan: <input type="date" name="tanggal_pemesanan" value="<?php echo $row['tanggal_pemesanan']; ?>" required><br>
        Gambar: <input type="file" name="gambar" accept="image/*"><br>
        <input type="submit" value="Simpan">
    </form>
    <a href="index.php">Kembali ke Halaman Utama</a>
    <a class="back-button" href="index.php">Kembali ke Halaman Utama</a>
</body>
</html>




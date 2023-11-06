<?php
include "db_connection.php";

$sql = "SELECT * FROM pemesanan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Daftar Pemesanan Laundry</h2>";
    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Nama Pelanggan</th>
    <th>Berat (kg)</th>
    <th>Layanan</th>
    <th>Harga per Kg</th>
    <th>Tanggal Pemesanan</th>
    <th>Gambar</th>
    </tr>";

// ...
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["nama_pelanggan"] . "</td>";
    echo "<td>" . $row["berat_pakaian"] . "</td>";
    echo "<td>" . $row["layanan"] . "</td>";
    echo "<td>" . $row["harga_per_kg"] . "</td>";
    echo "<td>" . $row["tanggal_pemesanan"] . "</td>";
    echo "<td><img src='uploads/" . $row["gambar"] . "' width='100'></td>";
    // Tambah tautan Edit dengan ID pemesanan
    echo "<td><a href='edit_pemesanan.php?id=" . $row["id"] . "'>Edit</a></td>";
    // Tambah tautan Hapus dengan ID pemesanan
    echo "<td><a href='delete_pemesanan.php?id=" . $row["id"] . "'>Hapus</a></td>";
    echo "</tr>";
}
// ...

    echo "</table>";
} else {
    echo "Tidak ada data pemesanan.";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pemesanan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    

    <a class="back-button" href="index.php">Kembali ke Halaman Utama</a>
</body>
</html>

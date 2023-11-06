<?php
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama_pelanggan = $_POST["nama_pelanggan"];
    $berat_pakaian = $_POST["berat_pakaian"];
    $layanan = $_POST["layanan"];
    $harga_per_kg = $_POST["harga_per_kg"];
    $tanggal_pemesanan = $_POST["tanggal_pemesanan"];

    $gambar = $_FILES["gambar"]["name"];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($gambar);

    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        $sql = "UPDATE pemesanan
                SET nama_pelanggan='$nama_pelanggan', berat_pakaian=$berat_pakaian, layanan='$layanan', harga_per_kg=$harga_per_kg, tanggal_pemesanan='$tanggal_pemesanan', gambar='$gambar'
                WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            header('Location: index.php');
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading the file.";
    }
}
$conn->close();
?>

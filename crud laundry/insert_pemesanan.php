<?php
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pelanggan = $_POST["nama_pelanggan"];
    $berat_pakaian = $_POST["berat_pakaian"];
    $layanan = $_POST["layanan"];
    $harga_per_kg = $_POST["harga_per_kg"];
    $tanggal_pemesanan = $_POST["tanggal_pemesanan"];

    $gambar = $_FILES["gambar"]["name"];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($gambar);

    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO pemesanan (nama_pelanggan, berat_pakaian, layanan, harga_per_kg, tanggal_pemesanan, gambar)
                VALUES ('$nama_pelanggan', $berat_pakaian, '$layanan', $harga_per_kg, '$tanggal_pemesanan', '$gambar')";
     
        
     

        if ($conn->query($sql) === TRUE) {
            $_SESSION['success_message'] = "Data pemesanan berhasil ditambahkan.";
            header('Location: index.php');
            exit(); // Pastikan kode selanjutnya tidak dieksekusi
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading the file.";
    }
}
$conn->close();
?>

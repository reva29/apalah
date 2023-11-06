<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pemesanan Laundry</title>
</head>
<body>
    <h1>Tambah Pemesanan Laundry</h1>
    <form action="insert_pemesanan.php" method="post" enctype="multipart/form-data">
        Nama Pelanggan: <input type="text" name="nama_pelanggan" required><br>
        Berat Pakaian (kg): <input type="number" name="berat_pakaian" step="0.01" required><br>
        Layanan: 
        <select name="layanan">
            <option value="Cuci Kering">Cuci Kering</option>
            <option value="Cuci Hingga Setrika">Cuci Hingga Setrika</option>
        </select><br>
        Harga per Kg: <input type="number" name="harga_per_kg" step="0.01" required><br>
        Tanggal Pemesanan: <input type="date" name="tanggal_pemesanan" required><br>
        Gambar: <input type="file" name="gambar" accept="image/*"><br>
        <input type="submit" value="Simpan">
        
    </form>
</body>
</html>

<?php
include "db_connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM pemesanan WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header('Location: list_pemesanan.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "ID pemesanan tidak diberikan.";
}
$conn->close();
?>

<?php 

include("config.php");

// Ambil data dari formulir
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Simpan data ke database
$sql = "INSERT INTO tb_feedback (name, email, message) VALUES ('$name', '$email', '$message')";
$query = mysqli_query($db, $sql);
if ($query) {
    // Berhasil disimpan, berikan notifikasi alert
    echo "<script>alert('Data feedback berhasil disimpan'); window.location.href='index.php';</script>";
} else {
    // Gagal disimpan, berikan notifikasi alert dengan pesan error
    echo "<script>alert('Error'); window.location.href='index.php';</script>";
}

// Tutup koneksi
$conn->close();
?>
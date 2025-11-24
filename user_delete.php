<?php
include 'koneksi.php';

$id = $_SESSION['user']['id'];

$sql = "DELETE FROM users WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    session_destroy();
    echo "<script>
        alert('Delete berhasil');
        window.location.href = 'index.php';
        </script>";
} else {
    echo "<script>alert('Delete gagal');</script>";
}

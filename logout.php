<?php
include 'koneksi.php';

session_destroy();
echo "<script>
alert('Logout berhasil');
window.location.href = 'index.php';
</script>";

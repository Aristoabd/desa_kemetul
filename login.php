<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['Email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $_SESSION['user'] = $row;
        echo "<script>
        alert('Login berhasil');
        window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>alert('Login gagal');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login - Desa Wisata Kemetul</title>
    <link rel="stylesheet" href="Login.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <section class="auth-section">
        <div class="auth-card">
            <h1 class="auth-title">Selamat Datang</h1>
            <p class="auth-subtitle">Masuk untuk mengakses akun Anda</p>
            
            <form action="login.php" method="post">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="text" name="Email" class="form-input" placeholder="nama@email.com" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-input" placeholder="******" required>
                </div>
                
                <input type="submit" class="btn-submit" value="LOGIN">
            </form>

            <div class="auth-footer">
                Belum punya akun? <a href="register.php">Daftar Sekarang</a>
            </div>
            <div class="auth-footer" style="margin-top: 10px;">
                <a href="index.php">← Kembali ke Beranda</a>
            </div>
        </div>
    </section>

</body>
</html>
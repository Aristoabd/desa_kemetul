<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['Email'];
    $password = $_POST['password'];
    $confirm_pass = $_POST['confirm_pass'];

    if ($password != $confirm_pass) {
        echo "<script>alert('Password tidak sama');</script>";
    } else {
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
            alert('Register berhasil, silahkan login');
            window.location.href = 'login.php';
            </script>";
        } else {
            echo "<script>alert('Register gagal');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Register - Desa Wisata Kemetul</title>
    <link rel="stylesheet" href="Login.css?v=<?php echo time(); ?>">
</head>
<body>

    <section class="auth-section">
        <div class="auth-card">
            <h1 class="auth-title">Buat Akun</h1>
            <p class="auth-subtitle">Bergabunglah dengan komunitas Desa Wisata</p>
            
            <form action="register.php" method="post">
                <div class="form-group">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" class="form-input" placeholder="Aristo Talin Coeputra" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="text" name="Email" class="form-input" placeholder="aristo@email.com" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-input" placeholder="******" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Konfirmasi Password</label>
                    <input type="password" name="confirm_pass" class="form-input" placeholder="******" required>
                </div>
                
                <input type="submit" class="btn-submit" value="REGISTER">
            </form>

            <div class="auth-footer">
                Sudah punya akun? <a href="login.php">Login</a>
            </div>
        </div>
    </section>

</body>
</html>
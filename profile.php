<?php
include 'koneksi.php';

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name = '$name', email = '$email'";
    if (!empty($_POST['password'])) {
        $sql .= ", password = '" . $_POST['password'] . "'";
    }
    $sql .= " WHERE id = '" . $_SESSION['user']['id'] . "'";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['user']['name'] = $name;
        $_SESSION['user']['email'] = $email;
        echo "<script>
        alert('Update berhasil');
        window.location.href = 'profile.php';
        </script>";
    } else {
        echo "<script>alert('Update gagal');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Profile - Desa Wisata Kemetul</title>
    
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Login.css?v=<?php echo time(); ?>" media="screen">
    
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    
</head>

<body class="u-body u-xl-mode">
    
    <header class="u-clearfix u-header u-header" id="sec-0abd" style="background-color: transparent; position: absolute; width: 100%; z-index: 100;">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-text u-text-default u-text-1">
                <span style="font-weight: 700; color: #1a3c34; font-family: 'Playfair Display', serif; font-size: 1.5rem;">Desa Wisata</span> 
                <span style="font-weight: 400; color: #b08d55; font-family: 'Playfair Display', serif; font-size: 1.5rem;">Kemetul</span>
            </p>
            <span class="u-file-icon u-icon u-icon-circle u-icon-1" data-href="<?= isset($_SESSION['user']) ? 'profile.php' : 'login.php' ?>">
                <img src="images/5264565.png" alt="User" style="object-fit: cover;">
            </span>
            <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 0.9rem; font-weight: 500; letter-spacing: 1px;">
                    <a class="u-button-style u-nav-link" href="#" style="color: #1a3c34 !important;">
                        <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#menu-hamburger"></use></svg>
                        <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect></g></svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-spacing-30 u-unstyled u-nav-1">
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="color: #1a3c34;">Home</a></li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="about.php" style="color: #1a3c34;">About</a></li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="contact.php" style="color: #1a3c34;">Contact</a></li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="home-industry.php" style="color: #1a3c34;">Home Industry</a></li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="culture.php" style="color: #1a3c34;">Berita</a></li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Home</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="about.php">About</a></li>
                                </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>

    <section class="profile-section">
        <div class="profile-container">
            <div class="profile-header">
                <h2>Pengaturan Akun</h2>
            </div>
            
            <form action="profile.php" method="post">
                <div class="form-group">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" value="<?= $_SESSION['user']['name'] ?>" name="name" class="form-input" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" value="<?= $_SESSION['user']['email'] ?>" name="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Password Baru (Opsional)</label>
                    <input type="password" name="password" class="form-input" placeholder="Kosongkan jika tidak ingin mengganti">
                </div>

                <div class="action-buttons">
                    <a href="user_delete.php" class="btn-delete" onclick="return confirm('Yakin ingin menghapus akun permanen?')">Hapus Akun</a>
                    <a href="logout.php" class="btn-logout" onclick="return confirm('Yakin ingin keluar?')">Logout</a>
                    <input type="submit" class="btn-update" value="Simpan Perubahan">
                </div>
            </form>
        </div>
    </section>

    <footer class="u-align-center u-clearfix u-footer u-grey-5 u-footer" id="sec-8c02" style="margin-top: auto;">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1" style="color: #888;">© 2024 Desa Wisata Kemetul.</p>
        </div>
    </footer>

</body>
</html>
<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Berita & Budaya - Desa Wisata Kemetul</title>
    
    <link rel="stylesheet" href="nicepage.css" media="screen">
    
    <link rel="stylesheet" href="Culture.css?v=2" media="screen">
    
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
        
    <meta name="theme-color" content="#F9F8F6">
</head>

<body class="u-body u-xl-mode">
    
    <header class="u-clearfix u-header u-header" id="sec-0abd" style="background-color: transparent;">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-text u-text-default u-text-1">
                <span style="font-weight: 700; color: #1a3c34; font-family: 'Playfair Display', serif; font-size: 1.5rem;">Desa Wisata</span> 
                <span style="font-weight: 400; color: #b08d55; font-family: 'Playfair Display', serif; font-size: 1.5rem;">Kemetul</span>
            </p>
            <span class="u-file-icon u-icon u-icon-circle u-icon-1" data-href="<?= isset($_SESSION['user']) ? 'profile.php' : 'login.php' ?>">
                <img src="images/5264565.png" alt="User">
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
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php" style="color: #1a3c34;">About</a></li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php" style="color: #1a3c34;">Contact</a></li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home-Industry.php" style="color: #1a3c34;">Home Industry</a></li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Culture.php" style="color: #1a3c34;">Culture</a></li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Home</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php">About</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php">Contact</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home-Industry.php">Home Industry</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <section class="article-header">
            <div class="container-small">
                <span class="category-tag">Budaya & Tradisi</span>
                <h1>Tradisi Jolenan:<br>Wujud Syukur Warga Kemetul.</h1>
                <div class="meta-info">
                    <span>Oleh Admin Desa</span>
                    <span class="dot">•</span>
                    <span>Selasa Wage, Bulan Sapar</span>
                </div>
            </div>
        </section>

        <section class="featured-image-section">
            <div class="container-medium">
                <img src="images/budaya.jpg" alt="Tradisi Jolenan" class="main-img">
                <p class="img-caption">Suasana kemeriahan tradisi Jolenan di Desa Kemetul.</p>
            </div>
        </section>

        <section class="article-content">
            <div class="container-text">
                <p class="drop-cap">
                    Jolenan merupakan tradisi sakral yang dilakukan dua kali dalam setahun, tepatnya pada penanggalan Jawa hari Selasa Wage di bulan Sapar. Tradisi ini bukan sekadar ritual, melainkan manifestasi rasa syukur mendalam kepada Tuhan atas limpahan hasil bumi, sekaligus penghormatan kepada para leluhur yang telah menjaga tanah ini.
                </p>

                <h3>Sepuluh Tahapan Ritual</h3>
                <p>
                    Prosesi Jolenan tidak dilakukan sembarangan. Terdapat sepuluh tahapan khidmat yang harus dilalui warga: mulai dari kebersihan lingkungan dan makam, pembuatan dan penghiasan Jolen, malam tirakatan, hingga kenduri Rukun Tetangga. Ritual berlanjut dengan pemasangan sesaji, pentas kesenian, sambutan tokoh adat, kirab Jolen, kenduri besar, dan ditutup dengan tayuban.
                </p>

                <div class="quote-box">
                    "Jolen terbuat dari bambu berbentuk piramida yang di dalamnya tersimpan kekayaan bumi: tumpeng, ambeng, sayuran, hingga ayam panggang."
                </div>

                <h3>Arak-Arakan dan Ngalap Berkah</h3>
                <p>
                    Sebelum diarak keliling kampung, Jolen dari seluruh pedukuhan dikumpulkan di halaman balai desa. Bentuk piramida pada Jolen menyimbolkan hubungan vertikal manusia dengan Sang Pencipta, sementara isinya yang berupa makanan menyimbolkan kemakmuran.
                </p>
                <p>
                    Setelah prosesi arak-arakan usai, Jolen diletakkan di halaman Pesarean Eyang Kedhono-Kedhini, tak jauh dari balai desa. Di sinilah puncak emosional terjadi: warga dan pengunjung berebut isi Jolen untuk <em>ngalap berkah</em> (mencari keberkahan). Kegembiraan ini kemudian ditutup dengan pentas seni tayub yang digelar semalam suntuk, menyatukan warga dalam irama gamelan dan tarian.
                </p>
            </div>
        </section>
    </main>

    <footer class="u-align-center u-clearfix u-footer u-grey-5 u-footer" id="sec-8c02">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1" style="color: #888;">© 2024 Desa Wisata Kemetul.</p>
        </div>
    </footer>

</body>
</html>

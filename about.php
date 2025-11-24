<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>About - Desa Wisata Kemetul</title>
    
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="About.css" media="screen">
    
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
        
    <meta name="theme-color" content="#F9F8F6">
</head>

<body class="u-body u-xl-mode">
    
    <header class="u-clearfix u-header u-header" id="sec-0abd" style="background-color: transparent;">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-text u-text-default u-text-1">
                <span style="font-weight: 700; color: #1a3c34; font-family: 'Playfair Display', serif; font-size: 1.5rem;">Desa Wisata</span>&nbsp;
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
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero-minimalist">
            <div class="container-small">
                <span class="tagline">Est. 2016 — Kabupaten Semarang</span>
                <h1>Menemukan Ketenangan<br>di Desa Kemetul.</h1>
                <div class="divider"></div>
                <p class="intro-text">
                    Sebuah persembahan alam dan kearifan lokal. Hamparan sawah seluas 62 hektar, 
                    hutan asri, dan kehangatan warga yang menyambut Anda pulang.
                </p>
            </div>
            
            <div class="hero-gallery">
                <div class="gallery-item item-1">
                    <img src="images/gazebo.jpg" alt="Sudut Desa Kemetul" class="hero-img">
                </div>
                <div class="gallery-item item-2">
                    <img src="images/hewan.jpg" alt="Pemandangan Sawah" class="hero-img">
                </div>
                <div class="gallery-item item-3">
                    <img src="images/kmtl.jpg" alt="Suasana Asri" class="hero-img">
                </div>
            </div>
        </section>

        <section class="narrative-section">
            <div class="container">
                <div class="narrative-grid">
                    <div class="narrative-title">
                        <h2>Warisan<br>Alam</h2>
                    </div>
                    <div class="narrative-content">
                        <p>Kisah kami dimulai dari keinginan sederhana warga untuk merawat alam. Bukit Sadang bukan sekadar bukit, ia adalah penjaga ekosistem kami.</p>
                        <p>Dengan dibentuknya <strong>Pokdarwis Sekar Kanthil</strong>, kami mengubah potensi sawah menjadi ruang temu. Gazebo-gazebo bambu yang Anda lihat adalah simbol gotong royong kami.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="experience-section">
            <div class="container-small">
                <div class="section-label">Pengalaman</div>
                
                <div class="experience-list">
                    <div class="experience-item">
                        <div class="exp-number">01</div>
                        <div class="exp-info">
                            <h3>Situs Bintang Jatuh</h3>
                            <p>Spot foto ikonik di tengah bentang sawah hijau.</p>
                        </div>
                        <div class="exp-arrow">→</div>
                    </div>
                    
                    <div class="experience-item">
                        <div class="exp-number">02</div>
                        <div class="exp-info">
                            <h3>Sobowono Trekking</h3>
                            <p>Menjelajah hutan desa dan menghirup udara murni.</p>
                        </div>
                        <div class="exp-arrow">→</div>
                    </div>

                    <div class="experience-item">
                        <div class="exp-number">03</div>
                        <div class="exp-info">
                            <h3>Wisata Tani</h3>
                            <p>Edukasi menanam padi langsung bersama petani lokal.</p>
                        </div>
                        <div class="exp-arrow">→</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="simple-cta">
            <p>Siap untuk berkunjung?</p>
            <a href="https://wa.me/6285314018214" class="link-underline">Reservasi Sekarang</a>
        </section>
    </main>

    <footer class="u-align-center u-clearfix u-footer u-grey-5 u-footer" id="sec-8c02">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1" style="color: #888;">&copy; 2024 Desa Wisata Kemetul.</p>
        </div>
    </footer>

</body>
</html>
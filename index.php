<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Home - Desa Wisata Kemetul</title>
    
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Home.css?v=<?php echo time(); ?>" media="screen">
    
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
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="contact.php">Contact</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="home-industry.php">Home Industry</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="culture.php">Berita</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        

        <section class="intro-section">
            <div class="container-small">
                <div class="intro-frame">
                    <h2>Permata Tersembunyi<br>di Semarang</h2>
                    <div class="divider-gold"></div>
                    <p>
                        Desa Kemetul bukan sekadar destinasi, melainkan sebuah pengalaman. Dikenal dengan ikon "1.000 Gazebo", 
                        kami menawarkan pelarian sempurna dari hiruk pikuk kota. Rasakan angin sepoi-sepoi di tengah sawah, 
                        saksikan matahari terbit yang magis, dan nikmati keramahan warga yang tulus.
                    </p>
                </div>
            </div>
        </section>

        <section id="wisata" class="destinations-section">
            <div class="container">
                <div class="section-header">
                    <h3>Wisata Populer</h3>
                    <p>Spot favorit para pengunjung</p>
                </div>
                
                <div class="destination-grid">
                    <div class="dest-card">
                        <div class="dest-img">
                            <img src="images/gazebo.jpg" alt="Gazebo">
                        </div>
                        <div class="dest-info">
                            <h4>1.000 Gazebo</h4>
                            <p>Bersantai menikmati pemandangan sawah dari deretan gazebo yang ikonik dan penuh warna.</p>
                        </div>
                    </div>

                    <div class="dest-card">
                        <div class="dest-img">
                            <img src="images/kmtl.jpg" alt="Jembatan Bintang">
                        </div>
                        <div class="dest-info">
                            <h4>Jembatan Bintang</h4>
                            <p>Spot foto instagramable di tengah sawah dengan struktur bambu yang unik dan artistik.</p>
                        </div>
                    </div>

                    <div class="dest-card">
                        <div class="dest-img">
                            <img src="images/nanam.jpeg" alt="Wisata Edukasi">
                        </div>
                        <div class="dest-info">
                            <h4>Paket Edukasi</h4>
                            <p>Belajar bertani, tracking Sobowono, dan mengenal alam lebih dekat bersama pemandu lokal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="teaser-section bg-cream">
            <div class="container split-layout">
                <div class="text-side">
                    <span class="tag">Oleh-Oleh</span>
                    <h3>Cita Rasa Otentik<br>Home Industry</h3>
                    <p>Bawa pulang kenangan rasa dari Kemetul. Mulai dari Marning Jagung renyah hingga Kripik Singkong gurih, semua diolah secara tradisional oleh tangan warga.</p>
                    <a href="home-industry.php" class="link-arrow">Lihat Produk →</a>
                </div>
                <div class="image-side">
                    <img src="images/goreng.webp" alt="Home Industry">
                </div>
            </div>
        </section>

        <section class="teaser-section">
            <div class="container split-layout reverse">
                <div class="image-side">
                    <img src="images/budaya.jpg" alt="Budaya Jolenan">
                </div>
                <div class="text-side">
                    <span class="tag">Budaya</span>
                    <h3>Tradisi Jolenan</h3>
                    <p>Wujud syukur warga atas hasil bumi yang melimpah. Saksikan kemeriahan arak-arakan tumpeng raksasa dan pentas seni yang digelar setahun sekali.</p>
                    <a href="culture.php" class="link-arrow">Baca Selengkapnya →</a>
                </div>
            </div>
        </section>

        <section class="location-section">
            <div class="container-small">
                <h3>Lokasi Kami</h3>
                <p>Dusun Krajan, Desa Kemetul, Kec. Susukan, Kab. Semarang</p>
            </div>
            <div class="map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.270366266736!2d110.5613922147769!3d-7.391630494665805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a70d95ea0503d%3A0x8e33788eed2cc278!2sDesa%20Wisata%20Kemetul!5e0!3m2!1sid!2sid!4v1622605000000!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
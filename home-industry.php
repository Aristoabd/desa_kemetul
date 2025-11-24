<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Home Industry - Desa Wisata Kemetul</title>
    
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Home-Industry.css" media="screen">
    
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
        <section class="industry-intro">
            <div class="intro-container">
                <div class="intro-text">
                    <span class="subtitle">Cita Rasa Lokal</span>
                    <h1>Oleh-Oleh<br>Khas Desa.</h1>
                    <div class="divider"></div>
                    <p class="desc">
                        Di balik keindahan alam Kemetul, terdapat tangan-tangan terampil yang mengolah hasil bumi menjadi camilan istimewa. 
                        Marning jagung renyah, kerupuk kenthir yang gurih, hingga kripik singkong tradisional.
                    </p>
                    <p class="desc">
                        Semua diproduksi secara rumahan (Home Industry) dengan resep turun-temurun. Tanpa pengawet, penuh rasa, dan tentu saja, harga yang bersahabat.
                    </p>
                </div>
                <div class="intro-image">
                    <img src="images/goreng.webp" alt="Proses Pembuatan Kripik">
                </div>
            </div>
        </section>

        <section class="product-section">
            <div class="container">
                <div class="section-label">Katalog Produk</div>
                
                <div class="product-grid">
                    <div class="product-card">
                        <div class="product-img-wrapper">
                            <img src="images/marning.jpg" alt="Marning Jagung">
                            <div class="product-overlay">
                                <a href="https://bit.ly/44XwcKu" class="btn-shop">Beli Sekarang</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>Marning Jagung</h3>
                            <div class="price">Rp 15.000 <span class="unit">/ ons</span></div>
                            <p class="product-desc">Jagung pilihan yang digoreng garing dengan bumbu rahasia.</p>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img-wrapper">
                            <img src="images/kripiksingkong.jpg" alt="Kripik Singkong">
                            <div class="product-overlay">
                                <a href="https://bit.ly/44XwcKu" class="btn-shop">Beli Sekarang</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>Kripik Singkong</h3>
                            <div class="price">Rp 15.000 <span class="unit">/ ons</span></div>
                            <p class="product-desc">Irisan singkong tipis yang renyah, cocok untuk teman santai.</p>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img-wrapper">
                            <img src="images/kerupukkenthir.jpg" alt="Kerupuk Kenthir">
                            <div class="product-overlay">
                                <a href="https://bit.ly/44XwcKu" class="btn-shop">Beli Sekarang</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>Kerupuk Kenthir</h3>
                            <div class="price">Rp 10.000 <span class="unit">/ ons</span></div>
                            <p class="product-desc">Camilan unik khas desa dengan tekstur yang bikin ketagihan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="order-cta">
            <p>Ingin memesan dalam jumlah besar?</p>
            <a href="https://bit.ly/44XwcKu" class="link-underline">Hubungi Kami di WhatsApp</a>
        </section>

    </main>

    <footer class="u-align-center u-clearfix u-footer u-grey-5 u-footer" id="sec-8c02">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1" style="color: #888;">© 2024 Desa Wisata Kemetul.</p>
        </div>
    </footer>

</body>
</html>
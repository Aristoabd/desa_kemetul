<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Contact - Desa Wisata Kemetul</title>
    
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Contact.css" media="screen">
    
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
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <section class="contact-section">
            <div class="contact-container">
                <div class="contact-info">
                    <span class="subtitle">Get in Touch</span>
                    <h1>Mari Terhubung<br>dengan Alam.</h1>
                    <p class="contact-desc">
                        Punya pertanyaan seputar paket wisata, reservasi gazebo, atau sekadar ingin menyapa? Kami siap mendengar cerita Anda.
                    </p>

                    <div class="contact-details">
                        <div class="detail-item">
                            <h3>Alamat</h3>
                            <p>Desa Kemetul, Kec. Susukan,<br>Kabupaten Semarang, Jawa Tengah</p>
                        </div>
                        <div class="detail-item">
                            <h3>Kontak</h3>
                            <p><a href="mailto:info@desakemetul.com" class="contact-link">info@desakemetul.com</a></p>
                            <p><a href="https://wa.me/6285314018214" class="contact-link">+62 853-1401-8214</a></p>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="#" class="social-item">Instagram</a>
                        <a href="#" class="social-item">Facebook</a>
                    </div>
                </div>

                <div class="contact-form-wrapper">
                    <h3 class="form-title">Kirim Pesan</h3>
                    <form action="https://forms.nicepagesrv.com/v2/form/process" method="post" class="minimal-form">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name" placeholder="Aristo Talin Coeputra" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat Email</label>
                            <input type="email" id="email" name="email" placeholder="Aristo@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan Anda</label>
                            <textarea id="message" name="message" rows="4" placeholder="Ceritakan rencana kunjungan Anda..." required></textarea>
                        </div>
                        
                        <button type="submit" class="btn-submit">Kirim Pesan →</button>
                        
                        <input type="hidden" name="formServices" value="4e219f7e-e792-3ef2-768e-4ca164f2faff">
                    </form>
                </div>
            </div>
        </section>

        <section class="map-section">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126623.58474557617!2d110.4654257!3d-7.3615596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a7814306c97a5%3A0x5027a76e3568e70!2sKemetul%2C%20Kec.%20Susukan%2C%20Kabupaten%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1689654321098!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>
    </main>

    <footer class="u-align-center u-clearfix u-footer u-grey-5 u-footer" id="sec-8c02">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1" style="color: #888;">© 2024 Desa Wisata Kemetul.</p>
        </div>
    </footer>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaduloRek - Aplikasi Pengaduan Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="shortcut icon" href="{{ asset('logo.icon') }}" type="image/x-icon">
    <style>
        body {
          background-image: url('assets/img/city.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
          background-size: 100% 100%;
        }
        </style>
</head>
<body>
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>

    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="" class="nav__logo">
                <h3>MaduloRek</h3>
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="#tentangkami" class="nav__link">tentang kami</a></li>
                    <li class="nav__item"><a href="{{ url('/login') }}" class="nav__link active-link">Login</a></li>
                    <li class="nav__item"><a href="{{ url('/register') }}" class="nav__link">Register</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <section class="home" id="home">
            <div class="home__container bd-container bd-grid">
                <div class="about__data">
                    <h2 class="section-title about__initial">Yuk Mengadu bersama MaduloRek</h2>
                    <h3>#kamiadalahrumah</h3>
                    <p class="home__subtitles typing">Bersama kami, "Laporkan Untuk Perubahan Masyarakat Berdaya, Masalah Berakhir"</p>
                    <a href="{{ url('/login') }}" class="button">Lihat Lainnya</a>
                </div>

                <img src="{{ asset('assets/dist/img/credit/surabaya.png') }}" >
            </div>
        </section>
    </main>

    <section class="about section bd-container" id="tentangkami">
        <div class="about__container bd-grid">
            <div class="about__data">
                <span class="section-subtitle about__initial">tentang aplikasi</span>
                <h2 class="section-title about__initial">MaduloRek</h2>
                <p class="about__description">Kami mempersembahkan <i>platform</i> digital yang berkompeten dibidang <i>Social Life</i></p>
                <a href="{{ url('/login') }}" class="button">Coba Sekarang ?</a>
            </div>
        </div>
    </section>

    <footer class="footer section bd-container">
        <div class="footer__container bd-grid ">
            <div class="footer__content">

            </div>

            <div class="footer__content" id="contact">
                <a href="#" class="footer__logo">MaduloRek</a>
                <span class="footer__description">Aplikasi Pengaduan Masyarakat</span>
            </div>

            <div class="footer__content">
                <h3 class="footer__title" >Alamat</h3>
                <ul>
                    <li>The NEW</li>
                    <li>Jombang - Indonesia</li>
                    <li>THENEW@email.com</li>
                </ul>
            </div>

            <div class="footer__content">

            </div>
        </div>
        <p class="footer__copy">&#169; 2023 THENEW.</p>
    </footer>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('assets/main2.js') }}"></script>
</body>
</html>

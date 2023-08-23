<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="{{ asset('assets/css/style4.css') }}">
    <style>
        .typing {
            animation: typing 5s steps(22) 1s infinite alternate;
        }
    </style>
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <title>Ngadu.id - Aplikasi Pengaduan Online</title>
</head>

<body>

    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>

    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="#" class="nav__logo">
                <p>Ngadu.id</p>
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="#tentangkami" class="nav__link">How To Use</a></li>
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
                    <h2 class="section-title about__initial">Yuk Mengadu bersama Ngadu.id</h2>
                    <p class="home__subtitles typing">Bersama kami, Kami siap Kapanpun dan Dimanapun</p> <br>
                    <a href="{{ url('/login') }}" class="button">Lihat Lainnya</a>
                </div>

                <img src="{{ asset('assets/images/img-01.png') }}">
            </div>
        </section>

        <section class="about section bd-container" id="tentangkami">
            <div class="about__container  bd-grid">
                <div class="about__data">
                    <span class="section-subtitle about__initial">How To Use ?</span>
                    <h2 class="section-title about__initial">Simak Video ini</h2>
                    <p class="about__description">Kami mempersembahkan <i>platform</i> digital yang berkompeten dibidang
                        <i>Social Life</i></p>
                    <a href="{{ url('/login') }}" class="button">Coba Sekarang ?</a>
                </div>
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/SVcPPpH3XvU?modestbranding=1&autoplay=0 " class="about__img"
                    title="TITLE" frameborder="0"
                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </section>
    </main>

    <!--========== FOOTER ==========-->
    <footer class="footer section bd-container">
        <div class="footer__container bd-grid">
            <div class="footer__content">

            </div>

            <div class="footer__content" id="contact">
                <a href="#" class="footer__logo">Ngadu.id</a>
                <span class="footer__description">Aplikasi Pengaduan Masyarakat</span>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Alamat</h3>
                <ul>
                    <li>DarkSide.ltd</li>
                    <li>Jombang - Indonesia</li>
                    <li>darkside@email.com</li>
                </ul>
            </div>

            <div class="footer__content">

            </div>
        </div>
        <p class="footer__copy">&#169; 2023 Dark Side.</p>
    </footer>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('assets/main2.js') }}"></script>
</body>

</html>

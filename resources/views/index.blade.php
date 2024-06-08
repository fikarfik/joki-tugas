<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa Tugas</title>
    <link rel="shortcut icon" href="{{ asset('img/logo/logo1 JT.png') }}" type="image/x-icon">
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- my style-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!--Navbar start-->
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('img/logo/logo1 JT.png') }}" alt="">
            <a href="#" class="navbar-logo">Joki<span>Tugas</span>.</a>
        </div>



        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#testimoni">Testimoni</a>
            <!-- <a href="#servis">Layanan</a> -->
            <a href="#contact">Kontak</a>
            <!-- Menampilkan pesan sukses -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div class="navbar-extra">
            <a href="https://twitter.com/intent/tweet?url=https://example.com&text=Check%20out%20this%20cool%20website!"
                target="_blank"><i data-feather="share-2"></i></a>

            {{-- <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a> --}}
            <a href="#" id="menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!--Navbar end -->

    <!--hero section start-->
    <section class="hero" id="home">
        <main class="content">
            <h1>Kami Siap Membantu <span>Tugas Anda</span></h1>
            <p>Kami hadir untuk membantu Anda menyelesaikan berbagai macam tugas akademik dengan cepat
                dan tepat. Tim kami terdiri dari para ahli di berbagai bidang yang siap memberikan hasil terbaik untuk
                tugas Anda.</p>
            <a href="https://wa.me/6282353141051" class="cta">Pesan Sekarang</a>
        </main>
    </section>
    <!--hero section end-->

    <!-- About Section star-->
    <sectiton id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>
        <div class="row">
            <div class="about-img">
                <img src="{{ './img/bacground/3.jpg' }}" alt="Tentang Kami">
            </div>
            <div class="content">
                <h3>Kenapa harus pakai jasa Joki<span>Tugas</span>. kami</h3>
                <br>
                <p>Jasa Joki Tugas kami menawarkan solusi cepat dan profesional untuk menyelesaikan tugas-tugas akademik
                    Anda. Dengan tim ahli yang berpengalaman di berbagai bidang, kami menjamin hasil yang memuaskan dan
                    tepat waktu.</p>
                <p>Selain itu, kami menjaga kerahasiaan dan privasi Anda dengan baik. Layanan kami fleksibel dan dapat
                    disesuaikan dengan kebutuhan spesifik Anda, memastikan Anda mendapatkan bantuan yang tepat sesuai
                    dengan permintaan Anda.</p>
            </div>
        </div>
    </sectiton>

    <!-- About Section end-->


    <!-- Menu Section start -->
    <section id="testimoni" class="menu">
        <h2>Testi<span>moni</span></h2>
        <p>Kami sangat bangga dengan feedback positif yang kami terima dari para klien kami. Berikut adalah beberapa
            testimoni dari mereka yang telah merasakan manfaat dari jasa Joki Tugas kami. Kami selalu berusaha
            memberikan layanan terbaik dan memastikan kepuasan klien kami.</p>

        <div class="row">
            <div class="testi-card">
                <img src="{{ 'img/portfolio/testi1.jpeg' }}" alt="testi" class="testi-card-img">
                <h3 class="testi-card-title">- Testi moni -</h3>
            </div>
            <div class="testi-card">
                <img src="{{ 'img/portfolio/testi2.jpeg' }}" alt="testi" class="testi-card-img">
                <h3 class="testi-card-title">- Testi moni -</h3>
            </div>
            <div class="testi-card">
                <img src="{{ 'img/portfolio/testi3.jpeg' }}" alt="testi" class="testi-card-img">
                <h3 class="testi-card-title">- Testi moni -</h3>
            </div>
            <div class="testi-card">
                <img src="{{ 'img/portfolio/testi4.jpeg' }}" alt="testi" class="testi-card-img">
                <h3 class="testi-card-title">- Testi moni -</h3>
            </div>
            <div class="testi-card">
                <img src="{{ 'img/portfolio/testi2.jpeg' }}" alt="testi" class="testi-card-img">
                <h3 class="testi-card-title">- Testi moni -</h3>
            </div>
            <div class="testi-card">
                <img src="{{ 'img/portfolio/testi6.jpeg' }}" alt="testi" class="testi-card-img">
                <h3 class="testi-card-title">- Testi moni -</h3>
            </div>

        </div>
    </section>
    <!-- Menu Section end -->

    <!-- kontak  section start-->
    <section id="contact" class="contact">
        <h2><span>Kontak</span> Kami</h2>
        {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum porro rem aut? Voluptas doloremque libero
            iste nulla est, quasi incidunt.</p> --}}
        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126438.33876419383!2d112.5493801652018!3d-7.978467193883185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62822063dc2fb%3A0x78879446481a4da2!2sMalang%2C%20Kota%20Malang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1717631583319!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="maps"></iframe>

            <form action="{{ route('store.contact') }}" method="POST">
                @csrf
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" name="name" placeholder="Nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" name="phone" placeholder="No Hp">
                </div>
                <button type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>


    </section>

    <!-- kontak  section end-->

    <!-- Footer start -->
    <svg class="wavesContact" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 157">
        <path fill="#ffffff" fill-opacity="1"
            d="M0,32L60,58.7C120,85,240,139,360,133.3C480,128,600,64,720,69.3C840,75,960,149,1080,154.7C1200,160,1320,96,1380,64L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
    <footer>
        {{-- <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div> --}}

        {{-- <div class="link">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#testimoni">Testimoni</a>
            <a href="#contact">Kontak</a>
        </div> --}}

        {{-- <div class="credit">
            <p>Created by <a href="">Fikk</a>. | &copy; 2024.</p>
        </div> --}}

        <div class="social-share social-share-left">
            <a href="https://twitter.com/intent/tweet?url=https://example.com&text=Check%20out%20this%20cool%20website!"
                target="_blank">
                <i data-feather="twitter"></i> Share on Twitter
            </a>
        </div>
        <div class="social-share social-share-right">
            <a href="https://www.instagram.com/sharer/sharer.php?u=https://example.com" target="_blank">
                <i data-feather="instagram"></i> Share on Instagram
            </a>
        </div>


        <div class="socials">
            <a href="https://www.instagram.com/jokit.ugaskamu"><i data-feather="instagram"></i></a>
            <a href="https://twitter.com/jokiitgs"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>

        <div class="credit">
            <p>Created by <a href="">Fikk</a>. | &copy; 2024.</p>
        </div>

    </footer>

    <!-- Footer end-->

    <!--Featehr icon-->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>

    <!-- My javascript-->
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>

@extends('layouts.main')

@section('title', 'Nisee — Crafting Your Art with Heart')

@section('content')

<!-- NAVBAR -->
<nav>
    <a href="{{ route('index') }}" class="logo">Nisee</a>

    <div class="nav-links">
        <a href="{{ route('catalog') }}">Catalog</a>
        <a href="{{ route('gallery') }}">Gallery</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#testimonials">Testimonials</a>

        <a href="{{ route('login') }}" class="order-btn">Order Now</a>
    </div>
</nav>

<!-- DECORATION BUBBLES -->
<div class="decoration star" style="top: 180px; left: 90px;">★</div>
<div class="decoration pink" style="top: 320px; left: 40px;">❤</div>
<div class="decoration blue" style="top: 250px; right: 120px;">★</div>
<div class="decoration green" style="bottom: 180px; right: 240px;">✦</div>

<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-text">
        <h1>Platform Interaktif<br>untuk Custom Art & Preview</h1>
        <p>
            Bikin desain personal yang totally you.  
            Lihat preview real-time—no more tebak-tebakan, no more drama.  
            Everything feels smoother, faster, and way more easy ✨
        </p>

        <div class="hero-btns">
            <a href="#">Coba Preview</a>
            <a href="#" style="background:#ff66aa;">Daily Choice</a>
        </div>
    </div>

    <img src="{{ asset('img/nisee.jpeg') }}" alt="Nisee Art Preview">
</section>

<h2 class="section-title">Kenapa Memilih Nisee?</h2>

<!-- WHY CHOOSE US -->
<section class="features">
    <div class="feature-card">
        <h3>Custom Art Instan</h3>
        <p>Pilih gaya, upload referensi, dan konfirmasi tanpa ribet.</p>
    </div>

    <div class="feature-card">
        <h3>Real-time Preview</h3>
        <p>Lihat hasil langsung tanpa menunggu revisi berjam-jam.</p>
    </div>

    <div class="feature-card">
        <h3>Komunikasi Rapi</h3>
        <p>Semua proses jelas, terstruktur, dan mudah dipahami.</p>
    </div>
</section>

<!-- CATALOG SECTION -->
<section id="catalog">
    <h2 class="section-title">Catalog Karya</h2>

    <div class="catalog-container">
        <div class="catalog-item"><img src="{{ asset('img/aestheticposter.jpeg') }}" alt=""></div>
        <div class="catalog-item"><img src="{{ asset('img/cleanedits.jpeg') }}" alt=""></div>
        <div class="catalog-item"><img src="{{ asset('img/customself.jpeg') }}" alt=""></div>
        <div class="catalog-item"><img src="{{ asset('img/darkedits.jpeg') }}" alt=""></div>
        <div class="catalog-item"><img src="{{ asset('img/softedits.jpeg') }}" alt=""></div>
        <div class="catalog-item"><img src="{{ asset('img/warmedits.jpeg') }}" alt=""></div>
    </div>

    <div class="catalog-btn-wrapper">
        <a href="{{ route('catalog') }}" class="see-more-btn">See More</a>
    </div>
</section>

<!-- GALLERY SECTION -->
<section id="gallery">
    <h2 class="section-title">Gallery Karya & Template</h2>

    <div class="gallery-container">
        <div class="gallery-item"><img src="{{ asset('img/chibicouple.jpeg') }}" alt=""></div>
        <div class="gallery-item"><img src="{{ asset('img/couplepotrait.jpeg') }}" alt=""></div>
        <div class="gallery-item"><img src="{{ asset('img/floral.jpeg') }}" alt=""></div>
        <div class="gallery-item"><img src="{{ asset('img/lineart.jpeg') }}" alt=""></div>
        <div class="gallery-item"><img src="{{ asset('img/pastelpotrait.jpeg') }}" alt=""></div>
        <div class="gallery-item"><img src="{{ asset('img/poster.jpeg') }}" alt=""></div>
    </div>

    <div class="catalog-btn-wrapper">
        <a href="{{ route('gallery') }}" class="see-more-btn">See More in Our Portfolio</a>
    </div>
</section>

<!-- TRENDING SECTION -->
<section class="trending">
    <h2 class="section-title">Trending Styles ✨</h2>
    <p class="section-sub">Style paling banyak dipilih minggu ini!</p>

    <div class="trend-container">
        <div class="trend-card">
            <img src="{{ asset('img/pastel1.jpeg') }}" alt="">
            <h3>Soft Pastel Portrait</h3>
            <span>★ 4.9</span>
        </div>

        <div class="trend-card">
            <img src="{{ asset('img/chibi1.jpeg') }}" alt="">
            <h3>Chibi Couple</h3>
            <span>★ 4.8</span>
        </div>

        <div class="trend-card">
            <img src="{{ asset('img/lineart1.jpeg') }}" alt="">
            <h3>Vintage Line Art</h3>
            <span>★ 4.7</span>
        </div>
    </div>
</section>

<!-- HOW IT WORKS -->
<section id="how-it-works" class="how-it-works">
    <h2 class="section-title">How It Works / Cara Kerja</h2>

    <div class="steps">

        @for($i = 1; $i <= 9; $i++)
            <div class="step">
                <span>{{ $i }}</span>
                <h3>
                    @php
                        $titles = [
                            1 => "Pilih Template / Custom",
                            2 => "Isi Request di Google Form",
                            3 => "Additional Request",
                            4 => "Konfirmasi ke Admin",
                            5 => "Pembayaran Full / DP",
                            6 => "Menerima Preview",
                            7 => "Revisi (Maks 3x)",
                            8 => "Order Final",
                            9 => "Order Done"
                        ];
                    @endphp

                    {{ $titles[$i] }}
                </h3>

                <p>
                    @php
                        $descs = [
                            1 => "Pengguna memilih template atau layanan full custom art.",
                            2 => "Mengisi form: ganti teks, tambah foto, warna, dll.",
                            3 => "Menambahkan permintaan tambahan sebelum proses dimulai.",
                            4 => "Admin mengecek detail order dan memberikan estimasi.",
                            5 => "Pengguna melakukan pembayaran untuk masuk antrian.",
                            6 => "Preview dikirim sesuai antrian.",
                            7 => "Revisi maksimal 3 kali dalam 24 jam.",
                            8 => "Jika DP, harus melunasi sebelum final file dikirim.",
                            9 => "Karya selesai dikirim sesuai format."
                        ];
                    @endphp

                    {{ $descs[$i] }}
                </p>
            </div>
        @endfor

    </div>
</section>

<!-- TESTIMONIALS -->
<section id="testimonials" class="testimonials">
    <h2 class="section-title">What People Say</h2>
    <p class="section-sub">Real voices from our amazing users ✨</p>

    <div class="testi-container">

        <!-- Card 1 -->
        <div class="testi-card">
            <div class="testi-header">
                <img src="{{ asset('img/person.jpeg') }}" alt="">
                <div>
                    <h3>Aurora M.</h3>
                    <span>Digital Artist</span>
                </div>
            </div>
            <div class="stars">
                <span>★★★★★</span>
            </div>
            <p>"Nisee literally saved my time. Preview-nya real banget, jadi aku nggak takut hasilnya beda. Love!!"</p>
        </div>

        <!-- Card 2 -->
        <div class="testi-card">
            <div class="testi-header">
                <img src="{{ asset('img/kevin.jpeg') }}" alt="">
                <div>
                    <h3>Kevin L.</h3>
                    <span>Student</span>
                </div>
            </div>
            <div class="stars">
                <span>★★★★★</span>
            </div>
            <p>"Aesthetic, cepet, dan gampang. Custom art-nya rapi, komunikasinya smooth."</p>
        </div>

        <!-- Card 3 -->
        <div class="testi-card">
            <div class="testi-header">
                <img src="{{ asset('img/raina.jpeg') }}" alt="">
                <div>
                    <h3>Raina T.</h3>
                    <span>Cosplayer</span>
                </div>
            </div>
            <div class="stars">
                <span>★★★★★</span>
            </div>
            <p>"Kalau ada event, aku selalu pesan art di sini. Preview-nya ngebantu banget sebelum checkout."</p>
        </div>

        <!-- Card 4 -->
        <div class="testi-card">
            <div class="testi-header">
                <img src="{{ asset('img/aurora.jpeg') }}" alt="">
                <div>
                    <h3>Victoria Young</h3>
                    <span>Beauty Influencer</span>
                </div>
            </div>
            <div class="stars">
                <span>★★★★★</span>
            </div>
            <p>"Helpful banget, pas sama style yang aku mau. Responsif, lucu, aesthetic parah ><"</p>
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-content">
        <div class="footer-left">
            <h2 class="footer-logo">Nisee</h2>
            <p class="footer-desc">
                Crafting Your Art with Heart — personalized designs, real-time previews, 
                dan experience pemesanan yang super smooth.
            </p>

            <div class="footer-socials">
                <a href="#">Instagram</a>
                <a href="#">TikTok</a>
                <a href="#">WhatsApp</a>
            </div>
        </div>

        <div class="footer-links">
            <h3>Menu</h3>
            <a href="{{ route('catalog') }}">Catalog</a>
            <a href="{{ route('gallery') }}">Gallery</a>
            <a href="#how-it-works">How It Works</a>
            <a href="#testimonials">Testimonials</a>
        </div>

        <div class="footer-support">
            <h3>Support</h3>
            <a href="#">FAQ</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Privacy Policy</a>
        </div>
    </div>

    <div class="footer-bottom">
        © 2025 Nisee — All Rights Reserved.
    </div>
</footer>

<!-- RANDOM DECORATION SCRIPT -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const shapes = ["★", "✦", "❤", "✧", "✩"];
    const colors = ["#ff66aa", "#6c5ce7", "#00cec9", "#fdcb6e", "#a29bfe"];

    for (let i = 0; i < 25; i++) {
        const shape = document.createElement("div");
        shape.classList.add("decoration-auto");
        shape.innerHTML = shapes[Math.floor(Math.random() * shapes.length)];

        shape.style.top = Math.random() * document.body.scrollHeight + "px";
        shape.style.left = Math.random() * window.innerWidth + "px";

        shape.style.color = colors[Math.floor(Math.random() * colors.length)];

        shape.style.fontSize = (20 + Math.random() * 30) + "px";
        shape.style.animationDuration = (3 + Math.random() * 4) + "s";

        document.body.appendChild(shape);
    }
});
</script>

@endsection

@extends('layouts.main')

@section('title', 'Nisee — Dashboard')

@section('content')

<!-- DECORATION -->
<div class="decoration star" style="top: 180px; left: 90px;">★</div>
<div class="decoration pink" style="top: 320px; left: 40px;">❤</div>
<div class="decoration blue" style="top: 250px; right: 120px;">★</div>
<div class="decoration green" style="bottom: 180px; right: 240px;">✦</div>

<!-- HERO SECTION (DASHBOARD STYLE) -->
<section class="hero">
    <div class="hero-text">
        <h1>Welcome My DearSee, {{ Auth::user()->name }} ! 🎨</h1>
        <p>
            Kelola pesanan, lihat progress, dan perbarui akunmu.<br>
            Semua pengalaman Nisee sekarang lebih mudah & rapi ✨
        </p>

        <div class="hero-btns">
            <a href="#">Coba Preview</a>
            <a href="#" style="background:#ff66aa;">Daily Choice</a>
        </div>
    </div>

    <img src="{{ asset('img/nisee.jpeg') }}" alt="Dashboard Nisee">
</section>

<h2 class="section-title">Menu Utama</h2>

<!-- FEATURE MENU -->
<section class="features">
    <a href="{{ route('orders') }}" class="feature-card">
        <h3>Order Kamu</h3>
        <p>Lihat status pesanan: antrian, preview, revisi, final.</p>
    </a>

    <a href="{{ route('profile.edit') }}" class="feature-card">
        <h3>Profil</h3>
        <p>Edit nama, email, avatar, dan data akun lainnya.</p>
    </a>

    <a href="{{ route('catalog') }}" class="feature-card">
        <h3>Pesan Baru</h3>
        <p>Mulai order baru dari katalog template dan style.</p>
    </a>
</section>

<!-- RECOMMENDATION / CATALOG -->
<section id="catalog">
    <h2 class="section-title">Rekomendasi Untuk Kamu</h2>

    <div class="catalog-container">
        <div class="catalog-item"><img src="{{ asset('img/aestheticposter.jpeg') }}"></div>
        <div class="catalog-item"><img src="{{ asset('img/cleanedits.jpeg') }}"></div>
        <div class="catalog-item"><img src="{{ asset('img/customself.jpeg') }}"></div>
        <div class="catalog-item"><img src="{{ asset('img/darkedits.jpeg') }}"></div>
        <div class="catalog-item"><img src="{{ asset('img/softedits.jpeg') }}"></div>
        <div class="catalog-item"><img src="{{ asset('img/warmedits.jpeg') }}"></div>
    </div>

    <div class="catalog-btn-wrapper">
        <a href="{{ route('catalog') }}" class="see-more-btn">Lihat Semua</a>
    </div>
</section>

<!-- TESTIMONIALS -->
<section id="testimonials" class="testimonials">
    <h2 class="section-title">Apa Kata Mereka?</h2>
    <p class="section-sub">Pengalaman asli dari pengguna Nisee ✨</p>

    <div class="testi-container">

        <div class="testi-card">
            <div class="testi-header">
                <img src="{{ asset('img/person.jpeg') }}">
                <div><h3>Aurora M.</h3><span>Digital Artist</span></div>
            </div>
            <div class="stars"><span>★★★★★</span></div>
            <p>"Preview real-time nya ngebantu banget buat tau hasil akhirnya."</p>
        </div>

        <div class="testi-card">
            <div class="testi-header">
                <img src="{{ asset('img/kevin.jpeg') }}">
                <div><h3>Kevin L.</h3><span>Student</span></div>
            </div>
            <div class="stars"><span>★★★★★</span></div>
            <p>"Custom art aesthetic, proses jelas, gampang banget!"</p>
        </div>

        <div class="testi-card">
            <div class="testi-header">
                <img src="{{ asset('img/raina.jpeg') }}">
                <div><h3>Raina T.</h3><span>Cosplayer</span></div>
            </div>
            <div class="stars"><span>★★★★★</span></div>
            <p>"Order di sini selalu puas, preview-nya super membantu."</p>
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-content">
        <div class="footer-left">
            <h2 class="footer-logo">Nisee</h2>
            <p class="footer-desc">
                Crafting Your Art with Heart — personalized designs & smooth experience.
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

@endsection

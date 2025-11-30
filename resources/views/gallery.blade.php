@extends('layouts.main')

@section('title', 'Nisee — Gallery')

@section('content')

<!-- NAVBAR -->
<nav>
    <a href="{{ route('index') }}" class="logo">Nisee</a>

    <div class="nav-links">
        <a href="{{ route('catalog') }}">Catalog</a>
        <a href="{{ route('gallery') }}" class="active">Gallery</a>
        <a href="{{ route('index') }}#how-it-works">How It Works</a>
        <a href="{{ route('index') }}#testimonials">Testimonials</a>
        <a href="#" class="order-btn">Order Now</a>
    </div>
</nav>

<!-- DECORATION BUBBLES -->
<div class="decoration star" style="top: 150px; left: 100px;">★</div>
<div class="decoration pink" style="top: 270px; left: 40px;">❤</div>
<div class="decoration blue" style="top: 220px; right: 130px;">★</div>
<div class="decoration green" style="bottom: 200px; right: 230px;">✦</div>

<!-- TITLE -->
<section class="gallery-header">
    <h1>Our Gallery</h1>
    <p>Kumpulan karya, template, dan desain pilihan terbaik dari Nisee ✨</p>
</section>

<!-- GALLERY GRID -->
<section class="gallery-page">
    <div class="gallery-page-container">

        <div class="gallery-page-item">
            <img src="{{ asset('img/pastelpotrait.jpeg') }}" alt="">
            <h3>Soft Pastel Portrait</h3>
            <p>Gaya ilustrasi lembut dengan nuansa pastel untuk karakter yang calming.</p>
        </div>

        <div class="gallery-page-item">
            <img src="{{ asset('img/chibicouple.jpeg') }}" alt="">
            <h3>Chibi Couple</h3>
            <p>Desain chibi cute untuk pasangan — favorit di event & anniversary.</p>
        </div>

        <div class="gallery-page-item">
            <img src="{{ asset('img/lineart.jpeg') }}" alt="">
            <h3>Vintage Line Art</h3>
            <p>Line art minimalis dengan sentuhan vintage khas poster retro.</p>
        </div>

        <div class="gallery-page-item">
            <img src="{{ asset('img/floral.jpeg') }}" alt="">
            <h3>Floral Frame Template</h3>
            <p>Template cantik dengan frame bunga, cocok untuk ucapan & hadiah.</p>
        </div>

        <div class="gallery-page-item">
            <img src="{{ asset('img/couplepotrait.jpeg') }}" alt="">
            <h3>Couple Portrait Realistic</h3>
            <p>Ilustrasi semi-realistic yang menangkap ekspresi dan vibe asli.</p>
        </div>

        <div class="gallery-page-item">
            <img src="{{ asset('img/poster.jpeg') }}" alt="">
            <h3>Event Poster Layout</h3>
            <p>Layout poster event dengan komposisi tipografi rapi & modern.</p>
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-content">

        <div class="footer-left">
            <h2 class="footer-logo">Nisee</h2>
            <p class="footer-desc">
                Crafting Your Art with Heart — personalized designs, real-time previews, and
                a smooth ordering experience made just for you.
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
            <a href="{{ route('index') }}#how-it-works">How It Works</a>
            <a href="{{ route('index') }}#testimonials">Testimonials</a>
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

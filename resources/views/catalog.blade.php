<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nisee — Catalog</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- NAVBAR -->
    <nav>
        <a href="{{ route('index') }}" class="logo">Nisee</a>


        <div class="nav-links">
            <a href="{{ route('catalog') }}" style="color:#6b4bff; font-weight:700;">Catalog</a>
            <a href="{{ route('gallery') }}">Gallery</a>
            <a href="{{ route('index') }}#how-it-works">How It Works</a>
            <a href="{{ route('index') }}#testimonials">Testimonials</a>
            <a href="#" class="order-btn">Order Now</a>
        </div>
    </nav>

    <!-- FLOATING DECOR -->
    <div class="decoration star" style="top: 160px; left: 100px;">★</div>
    <div class="decoration pink" style="top: 300px; left: 40px;">❤</div>
    <div class="decoration blue" style="top: 260px; right: 120px;">★</div>
    <div class="decoration green" style="bottom: 200px; right: 240px;">✦</div>

    <!-- PAGE HEADER -->
    <section class="hero catalog-hero">
        <div class="hero-text">
            <h1>Catalog Karya Nisee</h1>
            <p>
                Semua style terbaik kami—full color, chibi, pastel, vintage, poster, 
                dan custom request.  
                Scroll, explore, and find your favorite vibe ✨
            </p>
        </div>
    </section>

    <!-- CATEGORY FILTER -->
    <section class="catalog-filter">
        <h2 class="section-title">Kategori</h2>

        <div class="filter-buttons">
            <button class="filter-btn active">Semua</button>
            <button class="filter-btn">Couple</button>
            <button class="filter-btn">Chibi</button>
            <button class="filter-btn">Aesthetic</button>
            <button class="filter-btn">Poster</button>
            <button class="filter-btn">Custom</button>
        </div>
    </section>

    <!-- CATALOG CONTENT -->
    <section class="catalog-content">

        <!-- SEMUA -->
        <div class="catalog-section" data-category="Semua">
            <h2 class="catalog-title">Semua Karya</h2>

            <div class="catalog-grid">

                <div class="catalog-item">
                    <img src="{{ asset('img/sunset.jpeg') }}" alt="">
                    <h3 class="item-title">Sunset Couple</h3>
                    <p class="item-desc">Ilustrasi couple penuh nuansa hangat.</p>
                    <p class="item-price">Rp 35.000</p>
                </div>

                <div class="catalog-item">
                    <img src="{{ asset('img/pastel2.jpeg') }}" alt="">
                    <h3 class="item-title">Soft Pastel Portrait</h3>
                    <p class="item-desc">Desain portrait lembut dengan warna pastel.</p>
                    <p class="item-price">Rp 30.000</p>
                </div>

                <div class="catalog-item">
                    <img src="{{ asset('img/minimalist.jpeg') }}" alt="">
                    <h3 class="item-title">Minimalist Aesthetic</h3>
                    <p class="item-desc">Gaya minimalis clean & modern.</p>
                    <p class="item-price">Rp 28.000</p>
                </div>

                <div class="catalog-item">
                    <img src="{{ asset('img/vibrant.jpeg') }}" alt="">
                    <h3 class="item-title">Vibrant Art</h3>
                    <p class="item-desc">Full color, detail cerah & ekspresif.</p>
                    <p class="item-price">Rp 40.000</p>
                </div>

                <div class="catalog-item">
                    <img src="{{ asset('img/cute.jpeg') }}" alt="">
                    <h3 class="item-title">Cute Illustration</h3>
                    <p class="item-desc">Style lucu dengan shape sederhana.</p>
                    <p class="item-price">Rp 25.000</p>
                </div>

                <div class="catalog-item">
                    <img src="{{ asset('img/clean.jpeg') }}" alt="">
                    <h3 class="item-title">Clean Portrait</h3>
                    <p class="item-desc">Ilustrasi portrait simple & elegan.</p>
                    <p class="item-price">Rp 32.000</p>
                </div>

            </div>
        </div>

        <!-- COUPLE -->
        <div class="catalog-section" data-category="Couple">
            <h2 class="catalog-title">Couple</h2>

            <div class="catalog-grid">

                <div class="catalog-item">
                    <img src="{{ asset('img/lovely.jpeg') }}" alt="">
                    <h3 class="item-title">Lovely Couple</h3>
                    <p class="item-desc">Ilustrasi couple romantis pastel.</p>
                    <p class="item-price">Rp 40.000</p>
                </div>

                <div class="catalog-item">
                    <img src="{{ asset('img/warm.jpeg') }}" alt="">
                    <h3 class="item-title">Warm Moment</h3>
                    <p class="item-desc">Nuansa hangat & cozy.</p>
                    <p class="item-price">Rp 38.000</p>
                </div>

                <div class="catalog-item">
                    <img src="{{ asset('img/aesthetic.jpeg') }}" alt="">
                    <h3 class="item-title">Aesthetic Couple</h3>
                    <p class="item-desc">Style aesthetic warna soft.</p>
                    <p class="item-price">Rp 42.000</p>
                </div>

                <div class="catalog-item">
                    <img src="{{ asset('img/sunsetdate.jpeg') }}" alt="">
                    <h3 class="item-title">Sunset Date</h3>
                    <p class="item-desc">Ilustrasi golden hour vibes.</p>
                    <p class="item-price">Rp 45.000</p>
                </div>

            </div>
        </div>

        <!-- CHIBI -->
        <div class="catalog-section" data-category="Chibi">
            <h2 class="catalog-title">Chibi</h2>

            <div class="catalog-grid">

                <div class="catalog-item">
                    <img src="{{ asset('img/cutechibi.jpeg') }}" alt="">
                    <h3 class="item-title">Cute Chibi</h3>
                    <p class="item-desc">Karakter lucu dengan ekspresi ceria.</p>
                    <p class="item-price">Rp 25.000</p>
                </div>

                <div class="catalog-item">
                    <img src="{{ asset('img/minichibi.jpeg') }}" alt="">
                    <h3 class="item-title">Half body Chibi</h3>
                    <p class="item-desc">Style imut dengan garis lembut.</p>
                    <p class="item-price">Rp 27.000</p>
                </div>

                <div class="catalog-item">
                    <img src="{{ asset('img/couplechibi.jpeg') }}" alt="">
                    <h3 class="item-title">Couple Chibi</h3>
                    <p class="item-desc">Pasangan chibi super cute.</p>
                    <p class="item-price">Rp 35.000</p>
                </div>

            </div>
        </div>

        <!-- AESTHETIC -->
        <div class="catalog-section" data-category="Aesthetic">
            <h2 class="catalog-title">Aesthetic</h2>

            <div class="catalog-grid">

                <div class="catalog-item">
                    <img src="{{ asset('img/softedits.jpeg') }}" alt="">
                    <h3 class="item-title">Soft Aesthetic</h3>
                    <p class="item-desc">Warna lembut & vibes cozy.</p>
                    <p class="item-price">Rp 33.000</p>
                </div>

                <div class="catalog-item">
                    <img src="{{ asset('img/cleanedits.jpeg') }}" alt="">
                    <h3 class="item-title">Clean Aesthetic</h3>
                    <p class="item-desc">Gaya bersih, minimalis, modern.</p>
                    <p class="item-price">Rp 30.000</p>
                </div>

                <div class="catalog-item">
                    <img src="{{ asset('img/warmedits.jpeg') }}" alt="">
                    <h3 class="item-title">Warm Aesthetic</h3>
                    <p class="item-desc">Tone hangat & elegan.</p>
                    <p class="item-price">Rp 35.000</p>
                </div>

                <div class="catalog-item">
                    <img src="{{ asset('img/darkedits.jpeg') }}" alt="">
                    <h3 class="item-title">Dark Aesthetic</h3>
                    <p class="item-desc">Vibes misterius modern.</p>
                    <p class="item-price">Rp 37.000</p>
                </div>

            </div>
        </div>

        <!-- POSTER -->
        <div class="catalog-section" data-category="Poster">
            <h2 class="catalog-title">Poster</h2>

            <div class="catalog-grid">

                <div class="catalog-item">
                    <img src="{{ asset('img/aestheticposter.jpeg') }}" alt="">
                    <h3 class="item-title">Aesthetic Poster</h3>
                    <p class="item-desc">Desain poster clean & artsy.</p>
                    <p class="item-price">Rp 50.000</p>
                </div>

                <div class="catalog-item">
                    <img src="{{ asset('img/boldposter.jpeg') }}" alt="">
                    <h3 class="item-title">Bold Poster</h3>
                    <p class="item-desc">Warna kuat, komposisi striking.</p>
                    <p class="item-price">Rp 55.000</p>
                </div>

                <div class="catalog-item">
                    <img src="{{ asset('img/minimalistposter.jpeg') }}" alt="">
                    <h3 class="item-title">Minimalist Poster</h3>
                    <p class="item-desc">Tipografi modern & simpel.</p>
                    <p class="item-price">Rp 48.000</p>
                </div>

            </div>
        </div>

        <!-- CUSTOM -->
        <div class="catalog-section" data-category="Custom">
            <h2 class="catalog-title">Custom Request</h2>

            <div class="catalog-grid">

                <div class="catalog-item">
                    <img src="{{ asset('img/customself.jpeg') }}" alt="">
                    <h3 class="item-title">Custom Portrait</h3>
                    <p class="item-desc">Full custom sesuai request.</p>
                    <p class="item-price">Rp 60.000</p>
                </div>

                <div class="catalog-item">
                    <img src="{{ asset('img/specialposter.jpeg') }}" alt="">
                    <h3 class="item-title">Special Artwork</h3>
                    <p class="item-desc">Dibuat sesuai ide kamu.</p>
                    <p class="item-price">Rp 70.000</p>
                </div>

                <div class="catalog-item">
                    <img src="{{ asset('img/unique.jpeg') }}" alt="">
                    <h3 class="item-title">Unique Request</h3>
                    <p class="item-desc">Karya eksklusif spesial.</p>
                    <p class="item-price">Rp 75.000</p>
                </div>

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
                    and a smooth ordering experience made just for you.
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

        <div class="footer-bottom">© 2025 Nisee — All Rights Reserved.</div>
    </footer>


    <!-- FLOATING SHAPES AUTO RANDOM -->
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
        // FILTER KATEGORI
        const buttons = document.querySelectorAll(".filter-btn");
        const sections = document.querySelectorAll(".catalog-section");

        // Default: tampilkan semua kategori
        sections.forEach(sec => sec.classList.add("active"));

        buttons.forEach(btn => {
            btn.addEventListener("click", () => {

                buttons.forEach(b => b.classList.remove("active"));
                btn.classList.add("active");

                const category = btn.innerText.trim();

                sections.forEach(sec => {
                    if (category === "Semua") {
                        sec.classList.add("active");
                    } else if (sec.dataset.category === category) {
                        sec.classList.add("active");
                    } else {
                        sec.classList.remove("active");
                    }
                });

            });
        });
    </script>

</body>
</html>

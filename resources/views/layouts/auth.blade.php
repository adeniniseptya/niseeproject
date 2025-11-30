<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nisee — Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    {{-- Dekorasi random --}}
    @for ($i = 0; $i < 25; $i++)
        <div class="decoration-auto"
            style="
                top: {{ rand(10, 700) }}px;
                left: {{ rand(10, 1200) }}px;
                font-size: {{ rand(20, 45) }}px;
            ">
            ★
        </div>
    @endfor

    <main style="padding: 120px 20px; display:flex; justify-content:center;">
        {{ $slot }}
    </main>

</body>
</html>

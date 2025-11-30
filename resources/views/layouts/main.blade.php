<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'NiseeProject' }}</title>

    <!-- Tambahkan Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/catalog.css') }}">
</head>
<body class="bg-gray-100">


    @include('components.navbar')

    @yield('content')

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

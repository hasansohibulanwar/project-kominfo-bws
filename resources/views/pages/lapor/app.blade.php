<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- Sesuaikan dengan file CSS Anda --}}
</head>
<body>
    <nav>
        {{-- Navigasi Anda --}}
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script> {{-- Sesuaikan dengan file JS Anda  --}}
</body>
</html>

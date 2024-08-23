<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>النظام القانوني</title>
    <!-- روابط CSS و JS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        @include('layouts.header')
    </header>

    <aside>
        @include('layouts.sidebar')
    </aside>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('layouts.footer')
    </footer>

    <!-- روابط جافا سكريبت -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pusat Kajian Pariwisata Nusantara">

    <title>
        @yield('title', 'PKPN')
    </title>
    @vite('resources/css/app.css')
    @stack('styles')

    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>


<body>
    <x-navbar/>

    <main>
        @yield('content')
    </main>

    
    <x-footer/>
    
</body>
</html>
<!DOCTYPE html>
<html class="dark scroll-smooth" lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="OUR PKL JOURNEY — Portofolio Kelompok PKL 2026">

    <title>
        @yield('title', 'OUR PKL JOURNEY — Portofolio Kelompok PKL 2026')
    </title>

    <!-- Google Fonts & Material Symbols -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        site: {
                            bg: "#0A0F1C",
                            border: "rgba(255, 255, 255, 0.08)",
                            borderAlt: "#2B3242",
                        },
                        brand: {
                            400: "#60a5fa",
                            500: "#3b82f6",
                            600: "#2563eb",
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        display: ['"Space Grotesk"', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    }
                }
            }
        }
    </script>

    @vite('resources/css/app.css')
    @stack('styles')

    <style>
        body {
            background-color: #0A0F1C;
            color: #e2e8f0;
            overflow-x: hidden;
        }
        .glass-navbar {
            background: rgba(10, 15, 28, 0.88);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }
    </style>
</head>

<body class="bg-[#0A0F1C] text-[#e2e8f0] antialiased min-h-screen selection:bg-blue-600 selection:text-white font-sans">
    <x-navbar/>

    <main>
        @yield('content')
    </main>

    <x-footer/>
    @stack('scripts')
</body>
</html>
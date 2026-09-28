<!DOCTYPE html>
<html class="dark scroll-smooth" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Bhaskara Danadyaksa — Profil Tim 01 | OUR PKL JOURNEY</title>

    <!-- Google Fonts & Material Symbols -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: "#eef6ff",
                            100: "#d9eaff",
                            200: "#bcdbff",
                            300: "#8ec4ff",
                            400: "#59a2ff",
                            500: "#327dfb",
                            600: "#1e5ef0",
                            700: "#1749dd",
                            800: "#193cb3",
                            900: "#1a368d",
                        },
                        obsidian: {
                            950: "#070a11",
                            900: "#0b0f19",
                            850: "#101625",
                            800: "#161e31",
                            700: "#1f2a44",
                            600: "#2d3b5d",
                        },
                        accent: {
                            emerald: "#10b981",
                            amber: "#f59e0b",
                            violet: "#8b5cf6",
                            cyan: "#06b6d4"
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        display: ['"Space Grotesk"', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    },
                    animation: {
                        'float-slow': 'float 6s ease-in-out infinite',
                        'pulse-glow': 'pulseGlow 3s ease-in-out infinite',
                        'shimmer': 'shimmer 2.5s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        pulseGlow: {
                            '0%, 100%': { opacity: '0.4', transform: 'scale(1)' },
                            '50%': { opacity: '0.8', transform: 'scale(1.05)' },
                        },
                        shimmer: {
                            '0%': { backgroundPosition: '-200% 0' },
                            '100%': { backgroundPosition: '200% 0' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Smooth base behaviors */
        body {
            background-color: #070a11;
            color: #e2e8f0;
            overflow-x: hidden;
            selection-background-color: #327dfb;
            selection-color: #ffffff;
        }

        /* Glassmorphism & Borders */
        .glass-panel {
            background: rgba(16, 22, 37, 0.72);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.07);
        }

        .glass-panel-hover {
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .glass-panel-hover:hover {
            background: rgba(22, 30, 49, 0.85);
            border-color: rgba(50, 125, 251, 0.35);
            transform: translateY(-3px);
            box-shadow: 0 16px 36px -10px rgba(0, 0, 0, 0.5), 0 0 20px -5px rgba(50, 125, 251, 0.15);
        }

        /* Ambient background glow */
        .ambient-glow {
            position: absolute;
            border-radius: 9999px;
            filter: blur(120px);
            pointer-events: none;
            z-index: 0;
        }

        /* Scroll reveal system */
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }

        .reveal-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #070a11;
        }
        ::-webkit-scrollbar-thumb {
            background: #1f2a44;
            border-radius: 9999px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #327dfb;
        }
    </style>
</head>

<body class="font-sans antialiased relative min-h-screen">

    <!-- Ambient Glowing Orbs -->
    <div class="ambient-glow w-[550px] h-[550px] bg-brand-500/15 top-[-100px] left-[15%] animate-float-slow"></div>
    <div class="ambient-glow w-[480px] h-[480px] bg-accent-cyan/10 top-[600px] right-[-100px] animate-pulse-glow"></div>
    <div class="ambient-glow w-[500px] h-[500px] bg-accent-violet/10 bottom-[800px] left-[-150px] animate-float-slow"></div>

    <!-- 1. STICKY NAVBAR -->
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 border-b border-white/[0.06] bg-obsidian-950/80 backdrop-blur-xl">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 h-20 flex items-center justify-between">
            <!-- Brand -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                <div class="relative w-9 h-9 rounded-xl bg-gradient-to-tr from-brand-600 to-accent-cyan p-[1px] shadow-lg shadow-brand-500/20 group-hover:scale-105 transition-transform">
                    <div class="w-full h-full bg-obsidian-900 rounded-[11px] flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('images/bhaskara/logo.png') }}" alt="PKL Logo" class="h-5 w-auto object-contain brightness-125"/>
                    </div>
                </div>
                <div class="flex flex-col">
                    <span class="font-display font-bold text-sm tracking-wider uppercase text-white group-hover:text-brand-400 transition-colors">OUR PKL JOURNEY</span>
                    <span class="font-mono text-[10px] text-slate-400 tracking-widest">COHORT 2026</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center gap-1 p-1.5 rounded-full bg-obsidian-850/80 border border-white/[0.07] backdrop-blur-lg">
                <a href="{{ url('/') }}" class="px-4 py-1.5 text-xs font-medium text-slate-400 hover:text-white hover:bg-white/[0.05] rounded-full transition-all">Beranda</a>
                <a href="{{ url('/#tentang') }}" class="px-4 py-1.5 text-xs font-medium text-slate-400 hover:text-white hover:bg-white/[0.05] rounded-full transition-all">Tentang</a>
                <a href="{{ url('/#tim') }}" class="px-4 py-1.5 text-xs font-semibold text-brand-300 bg-brand-500/15 border border-brand-500/30 rounded-full shadow-sm">Profil Tim</a>
                <a href="#featured-projects" class="px-4 py-1.5 text-xs font-medium text-slate-400 hover:text-white hover:bg-white/[0.05] rounded-full transition-all">Proyek</a>
                <a href="#arsenal" class="px-4 py-1.5 text-xs font-medium text-slate-400 hover:text-white hover:bg-white/[0.05] rounded-full transition-all">Keahlian</a>
                <a href="#impact" class="px-4 py-1.5 text-xs font-medium text-slate-400 hover:text-white hover:bg-white/[0.05] rounded-full transition-all">Dampak</a>
            </nav>

            <!-- Quick Action / Status -->
            <div class="flex items-center gap-3">
                <button onclick="copyContactEmail()" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 text-xs font-medium text-slate-300 hover:text-white bg-obsidian-800 hover:bg-obsidian-700 rounded-xl border border-white/[0.08] transition-all group">
                    <span class="material-symbols-outlined text-[15px] text-brand-400 group-hover:scale-110 transition-transform">mail</span>
                    <span>Hubungi Bhaskara</span>
                    <span id="copy-badge" class="hidden text-[10px] font-mono px-1.5 py-0.5 rounded bg-brand-500 text-white animate-fade-in">Tersalin!</span>
                </button>

                <a href="{{ url('/#tim') }}" class="inline-flex items-center gap-1.5 px-3 py-2 text-xs font-medium text-slate-400 hover:text-white rounded-xl bg-obsidian-900 border border-white/[0.06] hover:border-white/20 transition-all">
                    <span class="material-symbols-outlined text-[16px]">arrow_back</span>
                    <span class="hidden sm:inline">Daftar Tim</span>
                </a>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="relative z-10 pt-28 pb-20">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 space-y-20">

            <!-- 2. HERO PROFILE: REFINED 2-COLUMN ASYMMETRIC GRID -->
            <section class="reveal-on-scroll">
                <!-- Breadcrumbs & Cohort Tag -->
                <div class="flex flex-wrap items-center justify-between gap-4 pb-6 mb-8 border-b border-white/[0.06]">
                    <div class="flex items-center gap-2 font-mono text-xs text-slate-400">
                        <a href="{{ url('/#tim') }}" class="hover:text-brand-400 flex items-center gap-1 transition-colors">
                            <span class="material-symbols-outlined text-[16px]">group</span>
                            <span>TIM MAGANG</span>
                        </a>
                        <span class="text-slate-600">/</span>
                        <span class="text-brand-400 font-semibold tracking-wide">01 BHASKARA DANADYAKSA</span>
                    </div>

                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-accent-emerald animate-ping"></span>
                        <span class="font-mono text-xs text-accent-emerald font-medium bg-accent-emerald/10 border border-accent-emerald/20 px-3 py-1 rounded-full">
                            AKTIF BERKARYA • Q1-Q2 2026
                        </span>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                    
                    <!-- Left: Subject Portrait & Interactive Card (5 cols) -->
                    <div class="lg:col-span-5 space-y-4">
                        <div class="relative group rounded-3xl overflow-hidden glass-panel p-2 shadow-2xl transition-all duration-500 hover:shadow-brand-500/10">
                            <!-- Inner Image Box -->
                            <div class="relative rounded-2xl overflow-hidden aspect-[4/5] bg-obsidian-950">
                                <img src="{{ asset('images/bhaskara/bhaskara_portrait.png') }}" 
                                     alt="Bhaskara Danadyaksa Wastu" 
                                     class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"/>

                                <!-- Gradient Rim Overlays -->
                                <div class="absolute inset-0 bg-gradient-to-t from-obsidian-950 via-transparent to-brand-500/10 pointer-events-none"></div>

                                <!-- Floating Status Badges -->
                                <div class="absolute top-4 left-4 flex flex-wrap gap-2">
                                    <div class="px-3 py-1.5 rounded-full bg-obsidian-950/80 backdrop-blur-md border border-white/10 shadow-lg flex items-center gap-2">
                                        <span class="w-2 h-2 rounded-full bg-accent-emerald animate-pulse"></span>
                                        <span class="font-mono text-[11px] text-accent-emerald font-semibold uppercase">Tech Lead</span>
                                    </div>
                                    <div class="px-3 py-1.5 rounded-full bg-obsidian-950/80 backdrop-blur-md border border-white/10 shadow-lg font-mono text-[11px] text-slate-300">
                                        ANGKATAN '26
                                    </div>
                                </div>

                                <!-- Floating Bottom Spec Pill -->
                                <div class="absolute bottom-4 inset-x-4">
                                    <div class="p-3.5 rounded-xl bg-obsidian-900/90 backdrop-blur-md border border-white/10 shadow-xl flex items-center justify-between">
                                        <div class="flex items-center gap-2.5">
                                            <div class="w-7 h-7 rounded-lg bg-accent-emerald/15 flex items-center justify-center text-accent-emerald">
                                                <span class="material-symbols-outlined text-[16px]">verified</span>
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="text-xs font-semibold text-white">Status Penugasan</span>
                                                <span class="text-[11px] text-slate-400">Siap Kerja &amp; Proyek Industri</span>
                                            </div>
                                        </div>
                                        <span class="font-mono text-xs font-bold text-brand-400 bg-brand-500/10 px-2 py-1 rounded-md">2026</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social / Platform Links -->
                        <div class="grid grid-cols-3 gap-2.5">
                            <a href="https://github.com" target="_blank" rel="noopener noreferrer" 
                               class="glass-panel glass-panel-hover p-3 rounded-2xl flex items-center justify-center gap-2 text-slate-400 hover:text-white group">
                                <span class="material-symbols-outlined text-[18px] text-slate-400 group-hover:text-brand-400 transition-colors">terminal</span>
                                <span class="font-mono text-xs font-medium">GitHub</span>
                            </a>
                            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" 
                               class="glass-panel glass-panel-hover p-3 rounded-2xl flex items-center justify-center gap-2 text-slate-400 hover:text-white group">
                                <span class="material-symbols-outlined text-[18px] text-slate-400 group-hover:text-brand-400 transition-colors">hub</span>
                                <span class="font-mono text-xs font-medium">LinkedIn</span>
                            </a>
                            <a href="https://figma.com" target="_blank" rel="noopener noreferrer" 
                               class="glass-panel glass-panel-hover p-3 rounded-2xl flex items-center justify-center gap-2 text-slate-400 hover:text-white group">
                                <span class="material-symbols-outlined text-[18px] text-slate-400 group-hover:text-brand-400 transition-colors">draw</span>
                                <span class="font-mono text-xs font-medium">Figma</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right: Specs, Bio, & Quick Metrics (7 cols) -->
                    <div class="lg:col-span-7 space-y-6 lg:pl-4">
                        
                        <div class="space-y-3">
                            <div class="inline-flex items-center gap-2 font-mono text-xs text-brand-400 bg-brand-500/10 border border-brand-500/20 px-3 py-1 rounded-full">
                                <span class="material-symbols-outlined text-[14px]">psychology</span>
                                <span>LEAD UI/UX &amp; FRONTEND ARCHITECT</span>
                            </div>

                            <h1 class="font-display text-3xl sm:text-5xl font-bold tracking-tight text-white uppercase leading-tight">
                                Bhaskara <span class="bg-gradient-to-r from-brand-400 via-accent-cyan to-brand-300 bg-clip-text text-transparent">Danadyaksa</span> Wastu
                            </h1>

                            <div class="flex items-center gap-3 text-slate-300 text-sm font-medium flex-wrap pt-1">
                                <span class="inline-flex items-center gap-1.5 text-accent-emerald font-semibold">
                                    <span class="material-symbols-outlined text-[18px]">palette</span>
                                    Desainer Produk &amp; Tech Lead
                                </span>
                                <span class="text-slate-600">•</span>
                                <span class="font-mono text-xs text-slate-400">SMKN 1 REKAYASA PERANGKAT LUNAK</span>
                            </div>
                        </div>

                        <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-light">
                            Siswa Rekayasa Perangkat Lunak yang berdedikasi menjembatani kesenjangan antara keindahan estetika UI/UX dengan ketahanan kode frontend. Berfokus pada perancangan <span class="text-white font-medium">sistem desain modular multi-tema</span>, alur navigasi intuitif, serta optimasi serah-terima komponen siap produksi ke tim perekayasa web.
                        </p>

                        <!-- Quick Meta Spec Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3.5 p-4 rounded-2xl glass-panel">
                            <div class="space-y-1">
                                <span class="text-[11px] font-mono uppercase tracking-wider text-slate-400">Institusi</span>
                                <div class="text-sm font-bold text-white">SMK Negeri 1</div>
                                <div class="text-xs text-brand-400 font-mono">Kompetensi RPL</div>
                            </div>
                            <div class="space-y-1">
                                <span class="text-[11px] font-mono uppercase tracking-wider text-slate-400">Periode Magang</span>
                                <div class="text-sm font-bold text-white">Imersi 3 Bulan</div>
                                <div class="text-xs text-accent-emerald font-mono">Tahap Produksi Q2</div>
                            </div>
                            <div class="space-y-1">
                                <span class="text-[11px] font-mono uppercase tracking-wider text-slate-400">Fokus Keahlian</span>
                                <div class="text-sm font-bold text-white">Design System &amp; FED</div>
                                <div class="text-xs text-accent-amber font-mono">Figma to Tailwind</div>
                            </div>
                        </div>

                        <!-- CTA Actions -->
                        <div class="flex flex-wrap items-center gap-3.5 pt-2">
                            <a href="#featured-projects" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-gradient-to-r from-brand-600 to-brand-500 hover:from-brand-500 hover:to-brand-400 text-white font-semibold text-sm shadow-lg shadow-brand-500/25 hover:shadow-brand-500/40 hover:-translate-y-0.5 transition-all">
                                <span class="material-symbols-outlined text-[18px]">folder_special</span>
                                <span>Jelajahi Portofolio Proyek (3)</span>
                            </a>
                            
                            <button onclick="downloadResumeModal()" class="inline-flex items-center gap-2 px-5 py-3.5 rounded-xl bg-obsidian-850 hover:bg-obsidian-800 text-slate-200 hover:text-white font-medium text-sm border border-white/[0.08] hover:border-white/20 transition-all">
                                <span class="material-symbols-outlined text-[18px] text-brand-400">download</span>
                                <span>Unduh Resume (PDF)</span>
                            </button>
                        </div>

                        <!-- Animated Live Stat Counters -->
                        <div class="grid grid-cols-3 gap-3 pt-3">
                            <div class="p-3.5 rounded-2xl glass-panel glass-panel-hover flex flex-col justify-between">
                                <div class="flex items-center justify-between text-brand-400 mb-2">
                                    <span class="material-symbols-outlined text-[20px]">layers</span>
                                    <span class="text-[10px] font-mono text-slate-500">TOKENS</span>
                                </div>
                                <div>
                                    <div class="font-display text-2xl sm:text-3xl font-bold text-white" data-counter="120">120+</div>
                                    <div class="text-xs text-slate-400">Token Desain</div>
                                </div>
                            </div>

                            <div class="p-3.5 rounded-2xl glass-panel glass-panel-hover flex flex-col justify-between">
                                <div class="flex items-center justify-between text-accent-emerald mb-2">
                                    <span class="material-symbols-outlined text-[20px]">trending_down</span>
                                    <span class="text-[10px] font-mono text-slate-500">FRICTION</span>
                                </div>
                                <div>
                                    <div class="font-display text-2xl sm:text-3xl font-bold text-white" data-counter="40">-40%</div>
                                    <div class="text-xs text-slate-400">Friksi Interaksi</div>
                                </div>
                            </div>

                            <div class="p-3.5 rounded-2xl glass-panel glass-panel-hover flex flex-col justify-between">
                                <div class="flex items-center justify-between text-accent-amber mb-2">
                                    <span class="material-symbols-outlined text-[20px]">sprint</span>
                                    <span class="text-[10px] font-mono text-slate-500">SPRINT</span>
                                </div>
                                <div>
                                    <div class="font-display text-2xl sm:text-3xl font-bold text-white" data-counter="48">48</div>
                                    <div class="text-xs text-slate-400">Sprint Desain</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- 3. FOUNDATIONAL JOURNEY & PHILOSOPHY -->
            <section class="reveal-on-scroll glass-panel rounded-3xl p-6 sm:p-10 relative overflow-hidden border border-white/[0.08]">
                <div class="absolute -right-20 -top-20 w-80 h-80 bg-brand-500/10 rounded-full blur-3xl pointer-events-none"></div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
                    <div class="lg:col-span-5 space-y-3">
                        <div class="inline-flex items-center gap-2 font-mono text-xs text-brand-400 uppercase tracking-widest">
                            <span class="material-symbols-outlined text-[16px]">history_edu</span>
                            <span>PERJALANAN &amp; FILOSOFI</span>
                        </div>
                        <h2 class="font-display text-2xl sm:text-3xl font-bold text-white leading-snug">
                            Ketelitian Desain Berbasis Logika Rekayasa Perangkat Lunak
                        </h2>
                        <p class="text-sm text-slate-400">
                            Menyelaraskan kepekaan visual seorang perancang dengan ketatnya logika algoritma frontend.
                        </p>
                    </div>

                    <div class="lg:col-span-7 space-y-4 text-slate-300 text-sm sm:text-base leading-relaxed font-light border-l border-white/[0.08] lg:pl-8">
                        <p>
                            Ketertarikan saya pada dunia software engineering berawal dari pemrograman desktop di kurikulum RPL SMKN 1. Saat membangun produk yang kian kompleks, saya menyadari sebuah fakta krusial: <span class="text-white font-medium">kode yang andal seringkali gagal memberikan dampak maksimal jika antarmukanya membingungkan pengguna</span>.
                        </p>
                        <p>
                            Berangkat dari kesadaran tersebut, saya mendalami arsitektur design system dan riset UX. Selama masa PKL ini, saya dipercaya memimpin sprint dan serah-terima aset, memastikan setiap komponen di Figma dapat direalisasikan menjadi komponen Tailwind CSS yang modular, bersih, dan hemat waktu eksekusi.
                        </p>
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-obsidian-800 text-xs font-mono text-brand-300 border border-brand-500/20">
                                <span class="w-1.5 h-1.5 rounded-full bg-brand-400"></span>
                                Design Token Architecture
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-obsidian-800 text-xs font-mono text-accent-emerald border border-accent-emerald/20">
                                <span class="w-1.5 h-1.5 rounded-full bg-accent-emerald"></span>
                                Agile Sprint Leadership
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-obsidian-800 text-xs font-mono text-accent-amber border border-accent-amber/20">
                                <span class="w-1.5 h-1.5 rounded-full bg-accent-amber"></span>
                                Seamless Developer Handoff
                            </span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 4. SKILLS & CAPABILITIES (BENTO MOSAIC) -->
            <section id="arsenal" class="reveal-on-scroll space-y-8">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                    <div class="space-y-1.5">
                        <span class="font-mono text-xs uppercase tracking-widest text-brand-400 font-semibold">ARSENAL • KEMAMPUAN TEKNIS</span>
                        <h2 class="font-display text-2xl sm:text-4xl font-bold text-white tracking-tight">
                            Keahlian, Metodologi &amp; Tumpukan Harian
                        </h2>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-400 max-w-md">
                        Kemampuan fungsional konkret yang diterapkan dan divalidasi langsung pada proyek nyata tim.
                    </p>
                </div>

                <!-- Bento 3-Column Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <!-- Card 1: UI/UX & Design Systems -->
                    <div class="glass-panel glass-panel-hover p-6 sm:p-7 rounded-3xl flex flex-col justify-between space-y-6 group">
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-2xl bg-brand-500/15 border border-brand-500/30 flex items-center justify-center text-brand-400 group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-[24px]">design_services</span>
                            </div>
                            <h3 class="font-display text-lg font-bold text-white group-hover:text-brand-300 transition-colors">
                                Desain UI/UX &amp; Produk
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                                Merancang hierarki visual berbasis token, wireframing adaptif, dan prototipe interaktif beresolusi tinggi dengan kepastian usabilitas.
                            </p>
                        </div>
                        <div class="flex flex-wrap gap-1.5 pt-4 border-t border-white/[0.06]">
                            <span class="px-2.5 py-1 rounded-md bg-obsidian-850 font-mono text-[11px] text-slate-300">Design System</span>
                            <span class="px-2.5 py-1 rounded-md bg-obsidian-850 font-mono text-[11px] text-slate-300">Wireframing</span>
                            <span class="px-2.5 py-1 rounded-md bg-obsidian-850 font-mono text-[11px] text-slate-300">Prototyping</span>
                            <span class="px-2.5 py-1 rounded-md bg-obsidian-850 font-mono text-[11px] text-slate-300">Info Architecture</span>
                            <span class="px-2.5 py-1 rounded-md bg-obsidian-850 font-mono text-[11px] text-slate-300">User Testing</span>
                        </div>
                    </div>

                    <!-- Card 2: Frontend Engineering -->
                    <div class="glass-panel glass-panel-hover p-6 sm:p-7 rounded-3xl flex flex-col justify-between space-y-6 group">
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-2xl bg-accent-emerald/15 border border-accent-emerald/30 flex items-center justify-center text-accent-emerald group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-[24px]">code</span>
                            </div>
                            <h3 class="font-display text-lg font-bold text-white group-hover:text-accent-emerald transition-colors">
                                Rekayasa Frontend
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                                Mentransformasikan cetak biru Figma menjadi komponen HTML5 semantik, modern Tailwind CSS, dan JavaScript interaktif yang bersih.
                            </p>
                        </div>
                        <div class="flex flex-wrap gap-1.5 pt-4 border-t border-white/[0.06]">
                            <span class="px-2.5 py-1 rounded-md bg-obsidian-850 font-mono text-[11px] text-slate-300">HTML5 Semantik</span>
                            <span class="px-2.5 py-1 rounded-md bg-obsidian-850 font-mono text-[11px] text-slate-300">Tailwind CSS</span>
                            <span class="px-2.5 py-1 rounded-md bg-obsidian-850 font-mono text-[11px] text-slate-300">JavaScript ES6+</span>
                            <span class="px-2.5 py-1 rounded-md bg-obsidian-850 font-mono text-[11px] text-slate-300">Responsive Flow</span>
                            <span class="px-2.5 py-1 rounded-md bg-obsidian-850 font-mono text-[11px] text-slate-300">Git Workflow</span>
                        </div>
                    </div>

                    <!-- Card 3: Agile & Leadership -->
                    <div class="glass-panel glass-panel-hover p-6 sm:p-7 rounded-3xl flex flex-col justify-between space-y-6 group">
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-2xl bg-accent-amber/15 border border-accent-amber/30 flex items-center justify-center text-accent-amber group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-[24px]">group_work</span>
                            </div>
                            <h3 class="font-display text-lg font-bold text-white group-hover:text-accent-amber transition-colors">
                                Kepemimpinan &amp; Kolaborasi
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                                Memfasilitasi ritual stand-up harian, sesi design critique yang terarah, serta menyelaraskan ekspektasi antartim pengembang.
                            </p>
                        </div>
                        <div class="flex flex-wrap gap-1.5 pt-4 border-t border-white/[0.06]">
                            <span class="px-2.5 py-1 rounded-md bg-obsidian-850 font-mono text-[11px] text-slate-300">Sprint Planning</span>
                            <span class="px-2.5 py-1 rounded-md bg-obsidian-850 font-mono text-[11px] text-slate-300">Design Critique</span>
                            <span class="px-2.5 py-1 rounded-md bg-obsidian-850 font-mono text-[11px] text-slate-300">Agile Flow</span>
                            <span class="px-2.5 py-1 rounded-md bg-obsidian-850 font-mono text-[11px] text-slate-300">Lintas Tim Dev</span>
                        </div>
                    </div>

                </div>

                <!-- Daily Toolchain Strip -->
                <div class="p-6 rounded-3xl glass-panel space-y-4">
                    <div class="flex flex-wrap items-center justify-between gap-2">
                        <span class="font-mono text-xs text-slate-400 uppercase tracking-wider">TOOLCHAIN UTAMA &amp; WORKSPACE CLOUD</span>
                        <span class="font-mono text-xs text-brand-400">ECOSYSTEM TERINTEGRASI</span>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-7 gap-3">
                        <div class="p-3.5 rounded-2xl bg-obsidian-850 hover:bg-obsidian-800 border border-white/[0.05] hover:border-brand-500/30 flex flex-col items-center justify-center gap-2 group transition-all">
                            <span class="material-symbols-outlined text-[22px] text-brand-400 group-hover:scale-110 transition-transform">draw</span>
                            <span class="font-mono text-xs text-slate-200">Figma</span>
                        </div>
                        <div class="p-3.5 rounded-2xl bg-obsidian-850 hover:bg-obsidian-800 border border-white/[0.05] hover:border-brand-500/30 flex flex-col items-center justify-center gap-2 group transition-all">
                            <span class="material-symbols-outlined text-[22px] text-accent-cyan group-hover:scale-110 transition-transform">terminal</span>
                            <span class="font-mono text-xs text-slate-200">VS Code</span>
                        </div>
                        <div class="p-3.5 rounded-2xl bg-obsidian-850 hover:bg-obsidian-800 border border-white/[0.05] hover:border-brand-500/30 flex flex-col items-center justify-center gap-2 group transition-all">
                            <span class="material-symbols-outlined text-[22px] text-slate-300 group-hover:scale-110 transition-transform">commit</span>
                            <span class="font-mono text-xs text-slate-200">Git / GitHub</span>
                        </div>
                        <div class="p-3.5 rounded-2xl bg-obsidian-850 hover:bg-obsidian-800 border border-white/[0.05] hover:border-brand-500/30 flex flex-col items-center justify-center gap-2 group transition-all">
                            <span class="material-symbols-outlined text-[22px] text-accent-amber group-hover:scale-110 transition-transform">description</span>
                            <span class="font-mono text-xs text-slate-200">Notion</span>
                        </div>
                        <div class="p-3.5 rounded-2xl bg-obsidian-850 hover:bg-obsidian-800 border border-white/[0.05] hover:border-brand-500/30 flex flex-col items-center justify-center gap-2 group transition-all">
                            <span class="material-symbols-outlined text-[22px] text-accent-emerald group-hover:scale-110 transition-transform">style</span>
                            <span class="font-mono text-xs text-slate-200">Tailwind</span>
                        </div>
                        <div class="p-3.5 rounded-2xl bg-obsidian-850 hover:bg-obsidian-800 border border-white/[0.05] hover:border-brand-500/30 flex flex-col items-center justify-center gap-2 group transition-all">
                            <span class="material-symbols-outlined text-[22px] text-accent-violet group-hover:scale-110 transition-transform">schema</span>
                            <span class="font-mono text-xs text-slate-200">FigJam</span>
                        </div>
                        <div class="p-3.5 rounded-2xl bg-obsidian-850 hover:bg-obsidian-800 border border-white/[0.05] hover:border-brand-500/30 flex flex-col items-center justify-center gap-2 group transition-all">
                            <span class="material-symbols-outlined text-[22px] text-brand-300 group-hover:scale-110 transition-transform">task_alt</span>
                            <span class="font-mono text-xs text-slate-200">Linear</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 5. DELIVERABLES & IMPACT IN PKL -->
            <section id="impact" class="reveal-on-scroll space-y-8">
                <div class="space-y-1.5">
                    <span class="font-mono text-xs uppercase tracking-widest text-brand-400 font-semibold">DAMPAK NYATA • DELIVERABLE PRODUKSI</span>
                    <h2 class="font-display text-2xl sm:text-4xl font-bold text-white tracking-tight">
                        Kontribusi Kunci Selama Masa PKL
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <!-- Item 1 -->
                    <div class="glass-panel glass-panel-hover p-6 sm:p-7 rounded-3xl relative overflow-hidden flex flex-col justify-between space-y-6">
                        <div class="absolute -top-3 -right-2 font-display text-7xl font-extrabold text-white/[0.03] select-none pointer-events-none">01</div>
                        <div class="space-y-3 relative z-10">
                            <div class="inline-flex items-center gap-1.5 font-mono text-xs text-accent-emerald">
                                <span class="material-symbols-outlined text-[16px]">token</span>
                                <span>INFRASTRUKTUR DESAIN</span>
                            </div>
                            <h3 class="font-display text-lg font-bold text-white">Arsitektur Design System Utama</h3>
                            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed font-light">
                                Menstandarisasi 120+ komponen atomik modular di Figma lengkap dengan variabel tema terang/gelap untuk memastikan kohesi antarmuka proyek portofolio.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-white/[0.06] flex items-center justify-between font-mono text-xs">
                            <span class="text-slate-400">Variabel &amp; Token</span>
                            <span class="text-accent-emerald font-semibold">120+ Unit UI</span>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="glass-panel glass-panel-hover p-6 sm:p-7 rounded-3xl relative overflow-hidden flex flex-col justify-between space-y-6">
                        <div class="absolute -top-3 -right-2 font-display text-7xl font-extrabold text-white/[0.03] select-none pointer-events-none">02</div>
                        <div class="space-y-3 relative z-10">
                            <div class="inline-flex items-center gap-1.5 font-mono text-xs text-brand-400">
                                <span class="material-symbols-outlined text-[16px]">touch_app</span>
                                <span>OPTIMASI PENGGUNA</span>
                            </div>
                            <h3 class="font-display text-lg font-bold text-white">Perombakan UX EduPulse</h3>
                            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed font-light">
                                Memimpin riset kebutuhan verifikasi presensi sekolah, memangkas kedalaman navigasi dari 5 interaksi bertahap menjadi 1 alur terpusat yang praktis.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-white/[0.06] flex items-center justify-between font-mono text-xs">
                            <span class="text-slate-400">Kedalaman Klik</span>
                            <span class="text-brand-400 font-semibold">-40% Friksi</span>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="glass-panel glass-panel-hover p-6 sm:p-7 rounded-3xl relative overflow-hidden flex flex-col justify-between space-y-6">
                        <div class="absolute -top-3 -right-2 font-display text-7xl font-extrabold text-white/[0.03] select-none pointer-events-none">03</div>
                        <div class="space-y-3 relative z-10">
                            <div class="inline-flex items-center gap-1.5 font-mono text-xs text-accent-amber">
                                <span class="material-symbols-outlined text-[16px]">sync_alt</span>
                                <span>AKSELERASI SPRINT</span>
                            </div>
                            <h3 class="font-display text-lg font-bold text-white">Handoff Lintas Tim yang Efisien</h3>
                            <p class="text-xs sm:text-sm text-slate-400 leading-relaxed font-light">
                                Merumuskan dokumentasi pedoman komponen, pemetaan class Tailwind siap pakai, memangkas kebingungan frontend dan mempercepat rilis deliverable.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-white/[0.06] flex items-center justify-between font-mono text-xs">
                            <span class="text-slate-400">Efisiensi Sprint</span>
                            <span class="text-accent-amber font-semibold">-2 Hari / Siklus</span>
                        </div>
                    </div>

                </div>
            </section>

            <!-- 6. FEATURED PROJECTS SHOWCASE (INTERACTIVE CARDS & FILTER) -->
            <section id="featured-projects" class="reveal-on-scroll space-y-8 scroll-mt-24">
                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                    <div class="space-y-1.5">
                        <span class="font-mono text-xs uppercase tracking-widest text-brand-400 font-semibold">PAMERAN KARYA • 3 PROTOTIPE</span>
                        <h2 class="font-display text-2xl sm:text-4xl font-bold text-white tracking-tight">
                            Sorotan Proyek Unggulan
                        </h2>
                    </div>

                    <!-- Filter Buttons -->
                    <div class="flex items-center gap-1.5 p-1 rounded-xl bg-obsidian-850 border border-white/[0.08] w-fit">
                        <button onclick="filterProjects('all')" id="btn-all" class="filter-btn px-3 py-1.5 text-xs font-mono rounded-lg bg-brand-500 text-white font-medium transition-all">Semua</button>
                        <button onclick="filterProjects('web')" id="btn-web" class="filter-btn px-3 py-1.5 text-xs font-mono rounded-lg text-slate-400 hover:text-white transition-all">Web App</button>
                        <button onclick="filterProjects('fintech')" id="btn-fintech" class="filter-btn px-3 py-1.5 text-xs font-mono rounded-lg text-slate-400 hover:text-white transition-all">Fintech</button>
                    </div>
                </div>

                <!-- Projects Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <!-- Project 1: EduPulse -->
                    <article class="project-item web glass-panel glass-panel-hover rounded-3xl overflow-hidden flex flex-col justify-between group shadow-xl">
                        <div class="space-y-4">
                            <!-- Image Frame -->
                            <div class="relative aspect-video overflow-hidden bg-obsidian-950">
                                <img src="{{ asset('images/bhaskara/edupulse_project.png') }}" 
                                     alt="EduPulse School Dashboard" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out"/>
                                <div class="absolute inset-0 bg-gradient-to-t from-obsidian-950 via-transparent to-transparent opacity-80"></div>
                                <div class="absolute top-3 left-3">
                                    <span class="px-2.5 py-1 rounded-md bg-obsidian-950/80 backdrop-blur-md border border-brand-500/30 font-mono text-[10px] text-brand-300 font-bold uppercase">
                                        UNGGULAN
                                    </span>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="px-6 space-y-2">
                                <span class="font-mono text-xs text-accent-emerald font-medium">LEAD UI/UX &amp; FED PROTOTYPE</span>
                                <h3 class="font-display text-lg font-bold text-white group-hover:text-brand-300 transition-colors">
                                    Portal Sekolah EduPulse
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-400 line-clamp-2 leading-relaxed font-light">
                                    Platform administrasi sekolah interaktif dengan modul presensi terpadu, buku nilai analitis, dan portal pemantauan siswa.
                                </p>
                            </div>
                        </div>

                        <!-- Card Footer -->
                        <div class="p-6 pt-4 mt-4 border-t border-white/[0.06] flex items-center justify-between">
                            <span class="font-mono text-xs text-slate-400 flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[15px]">devices</span>
                                <span>Web App</span>
                            </span>
                            <button onclick="openModal('EduPulse Portal Sekolah', 'Platform administrasi pendidikan lengkap dengan dashboard analitik performa kelas dan otomasi presensi cerdas.', '{{ asset('images/bhaskara/edupulse_project.png') }}')" 
                                    class="inline-flex items-center gap-1 text-xs font-semibold text-brand-400 hover:text-brand-300 transition-colors">
                                <span>Lihat Pratinjau</span>
                                <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                            </button>
                        </div>
                    </article>

                    <!-- Project 2: ArthaPay -->
                    <article class="project-item fintech glass-panel glass-panel-hover rounded-3xl overflow-hidden flex flex-col justify-between group shadow-xl">
                        <div class="space-y-4">
                            <!-- Image Frame -->
                            <div class="relative aspect-video overflow-hidden bg-obsidian-950">
                                <img src="{{ asset('images/bhaskara/arthapay_project.png') }}" 
                                     alt="Checkout ArthaPay" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out"/>
                                <div class="absolute inset-0 bg-gradient-to-t from-obsidian-950 via-transparent to-transparent opacity-80"></div>
                                <div class="absolute top-3 left-3">
                                    <span class="px-2.5 py-1 rounded-md bg-obsidian-950/80 backdrop-blur-md border border-accent-emerald/30 font-mono text-[10px] text-accent-emerald font-bold uppercase">
                                        FINTECH
                                    </span>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="px-6 space-y-2">
                                <span class="font-mono text-xs text-brand-400 font-medium">DESIGN SYSTEM &amp; MOTION</span>
                                <h3 class="font-display text-lg font-bold text-white group-hover:text-brand-300 transition-colors">
                                    Checkout Minimalis ArthaPay
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-400 line-clamp-2 leading-relaxed font-light">
                                    Pengalaman checkout berfokus pada kecepatan transaksi mobile, validasi kartu real-time, dan alur pembayaran QRIS instan.
                                </p>
                            </div>
                        </div>

                        <!-- Card Footer -->
                        <div class="p-6 pt-4 mt-4 border-t border-white/[0.06] flex items-center justify-between">
                            <span class="font-mono text-xs text-slate-400 flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[15px]">smartphone</span>
                                <span>Mobile UX</span>
                            </span>
                            <button onclick="openModal('Checkout Minimalis ArthaPay', 'Sistem pembayaran digital yang dirancang untuk mereduksi abandonment rate dengan alur satu sentuhan.', '{{ asset('images/bhaskara/arthapay_project.png') }}')" 
                                    class="inline-flex items-center gap-1 text-xs font-semibold text-brand-400 hover:text-brand-300 transition-colors">
                                <span>Lihat Pratinjau</span>
                                <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                            </button>
                        </div>
                    </article>

                    <!-- Project 3: Pariwisata Nusantara -->
                    <article class="project-item web glass-panel glass-panel-hover rounded-3xl overflow-hidden flex flex-col justify-between group shadow-xl">
                        <div class="space-y-4">
                            <!-- Image Frame -->
                            <div class="relative aspect-video overflow-hidden bg-obsidian-950">
                                <img src="{{ asset('images/bhaskara/nusantara_project.png') }}" 
                                     alt="Pariwisata Nusantara" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out"/>
                                <div class="absolute inset-0 bg-gradient-to-t from-obsidian-950 via-transparent to-transparent opacity-80"></div>
                                <div class="absolute top-3 left-3">
                                    <span class="px-2.5 py-1 rounded-md bg-obsidian-950/80 backdrop-blur-md border border-accent-amber/30 font-mono text-[10px] text-accent-amber font-bold uppercase">
                                        EDITORIAL
                                    </span>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="px-6 space-y-2">
                                <span class="font-mono text-xs text-accent-amber font-medium">UI DESIGN &amp; MAP STYLING</span>
                                <h3 class="font-display text-lg font-bold text-white group-hover:text-brand-300 transition-colors">
                                    Pariwisata Nusantara Portal
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-400 line-clamp-2 leading-relaxed font-light">
                                    Portal kurasi budaya dan destinasi wisata unggulan Nusantara dengan gaya tipografi editorial serta eksplorasi rute tematik.
                                </p>
                            </div>
                        </div>

                        <!-- Card Footer -->
                        <div class="p-6 pt-4 mt-4 border-t border-white/[0.06] flex items-center justify-between">
                            <span class="font-mono text-xs text-slate-400 flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[15px]">public</span>
                                <span>Web Editorial</span>
                            </span>
                            <button onclick="openModal('Portal Pariwisata Nusantara', 'Pengalaman visual interaktif yang memperkenalkan keanekaragaman lanskap Indonesia secara modern.', '{{ asset('images/bhaskara/nusantara_project.png') }}')" 
                                    class="inline-flex items-center gap-1 text-xs font-semibold text-brand-400 hover:text-brand-300 transition-colors">
                                <span>Lihat Pratinjau</span>
                                <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                            </button>
                        </div>
                    </article>

                </div>
            </section>

            <!-- 7. REFLECTION & TESTIMONIAL QUOTE -->
            <section class="reveal-on-scroll glass-panel rounded-3xl p-8 sm:p-12 relative overflow-hidden shadow-2xl border border-white/[0.08]">
                <div class="absolute right-0 top-0 w-64 h-64 bg-brand-500/10 rounded-full blur-3xl pointer-events-none"></div>

                <div class="max-w-3xl space-y-6 relative z-10">
                    <div class="w-12 h-12 rounded-2xl bg-brand-500/15 border border-brand-500/30 flex items-center justify-center text-brand-400">
                        <span class="material-symbols-outlined text-[28px]">format_quote</span>
                    </div>

                    <blockquote class="font-display text-xl sm:text-2xl font-medium text-white leading-relaxed">
                        “Magang di studio perangkat lunak dengan ritme dinamis membuktikan bahwa desain bukan sekadar hiasan visual — melainkan tentang kejelasan fungsi, performa yang lincah, dan bagaimana memberdayakan pengguna menyelesaikan tugas mereka tanpa beban.”
                    </blockquote>

                    <div class="flex items-center gap-3 pt-2">
                        <div class="w-11 h-11 rounded-full overflow-hidden bg-obsidian-800 border border-white/10 flex items-center justify-center">
                            <img src="{{ asset('images/bhaskara/bhaskara_portrait.png') }}" alt="Bhaskara" class="w-full h-full object-cover"/>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-display font-semibold text-sm text-white">Bhaskara Danadyaksa Wastu</span>
                            <span class="font-mono text-xs text-slate-400">Tech Lead &amp; UI Designer • Cohort 2026</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 8. TEAM PAGER / SIBLINGS NAVIGATION -->
            <section class="reveal-on-scroll pt-8 border-t border-white/[0.08]">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 items-center">
                    
                    <!-- Prev: Ade -->
                    <a href="{{ url('/union/ade') }}" class="glass-panel glass-panel-hover p-4 rounded-2xl flex items-center gap-3.5 group">
                        <div class="w-10 h-10 rounded-xl bg-obsidian-850 border border-white/[0.08] flex items-center justify-center text-slate-400 group-hover:text-brand-400 transition-colors">
                            <span class="material-symbols-outlined text-[18px] group-hover:-translate-x-1 transition-transform">arrow_back</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-mono text-[10px] text-slate-500 uppercase">ANGGOTA SEBELUMNYA • 04</span>
                            <span class="font-display text-sm font-bold text-white group-hover:text-brand-300 transition-colors">Ade / Nabila</span>
                            <span class="text-xs text-slate-400">QA &amp; Dokumentasi</span>
                        </div>
                    </a>

                    <!-- Center: View Grid -->
                    <a href="{{ url('/#tim') }}" class="p-4 rounded-2xl bg-obsidian-900 hover:bg-obsidian-850 border border-white/[0.06] text-center font-mono text-xs text-slate-400 hover:text-white transition-all flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-[16px]">grid_view</span>
                        <span>SEMUA ANGGOTA (1 DARI 4)</span>
                    </a>

                    <!-- Next: Damar -->
                    <a href="{{ url('/union/damar') }}" class="glass-panel glass-panel-hover p-4 rounded-2xl flex items-center justify-between sm:justify-end gap-3.5 group text-right">
                        <div class="flex flex-col text-left sm:text-right">
                            <span class="font-mono text-[10px] text-slate-500 uppercase">ANGGOTA SELANJUTNYA • 02</span>
                            <span class="font-display text-sm font-bold text-white group-hover:text-brand-300 transition-colors">Damar / Althea</span>
                            <span class="text-xs text-slate-400">Backend &amp; Cloud Ops</span>
                        </div>
                        <div class="w-10 h-10 rounded-xl bg-obsidian-850 border border-white/[0.08] flex items-center justify-center text-slate-400 group-hover:text-brand-400 transition-colors">
                            <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        </div>
                    </a>

                </div>
            </section>

        </div>
    </main>

    <!-- 9. FOOTER -->
    <footer class="border-t border-white/[0.06] bg-obsidian-950 py-12 relative z-10">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 space-y-8">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-6 pb-8 border-b border-white/[0.06]">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/bhaskara/logo.png') }}" alt="Logo" class="h-6 w-auto object-contain brightness-125"/>
                    <span class="font-display font-bold text-sm tracking-wider uppercase text-white">OUR PKL JOURNEY</span>
                </div>
                <p class="text-xs text-slate-400 text-center sm:text-right font-light">
                    Mendokumentasikan karya teknis, desain berbasis empati, dan kolaborasi rekayasa perangkat lunak.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500 font-mono">
                <div>© 2026 Bhaskara Danadyaksa Wastu • Portofolio PKL RPL.</div>
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-accent-emerald animate-pulse"></span>
                    <span class="text-accent-emerald">BUILD v2.6.0 STABLE</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Interactive Project Modal -->
    <div id="projectModal" class="fixed inset-0 z-50 hidden bg-obsidian-950/80 backdrop-blur-md p-4 flex items-center justify-center transition-all opacity-0 pointer-events-none">
        <div class="glass-panel max-w-2xl w-full rounded-3xl overflow-hidden shadow-2xl border border-white/10 scale-95 transition-transform duration-300" id="modalCard">
            <div class="relative aspect-video bg-obsidian-950">
                <img id="modalImg" src="" alt="Project Preview" class="w-full h-full object-cover"/>
                <button onclick="closeModal()" class="absolute top-4 right-4 w-9 h-9 rounded-full bg-obsidian-950/80 backdrop-blur-md text-white flex items-center justify-center hover:bg-white hover:text-obsidian-950 transition-colors">
                    <span class="material-symbols-outlined text-[18px]">close</span>
                </button>
            </div>
            <div class="p-6 space-y-3">
                <h3 id="modalTitle" class="font-display text-xl font-bold text-white"></h3>
                <p id="modalDesc" class="text-sm text-slate-300 leading-relaxed font-light"></p>
                <div class="pt-3 flex justify-end">
                    <button onclick="closeModal()" class="px-5 py-2 rounded-xl bg-obsidian-800 hover:bg-obsidian-700 text-xs font-mono text-white transition-colors">
                        Tutup Pratinjau
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Back-to-Top Button -->
    <button id="backToTop" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
            class="fixed bottom-6 right-6 z-40 w-11 h-11 rounded-full bg-brand-600 hover:bg-brand-500 text-white shadow-lg shadow-brand-500/30 flex items-center justify-center opacity-0 pointer-events-none transition-all duration-300">
        <span class="material-symbols-outlined text-[20px]">keyboard_arrow_up</span>
    </button>

    <!-- Interactive Scripts -->
    <script>
        // Scroll Reveal System using Intersection Observer
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    }
                });
            }, {
                threshold: 0.12,
                rootMargin: '0px 0px -50px 0px'
            });

            document.querySelectorAll('.reveal-on-scroll').forEach((el) => {
                observer.observe(el);
            });

            // Back to top visibility
            const backToTopBtn = document.getElementById('backToTop');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 400) {
                    backToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
                    backToTopBtn.classList.add('opacity-100');
                } else {
                    backToTopBtn.classList.add('opacity-0', 'pointer-events-none');
                    backToTopBtn.classList.remove('opacity-100');
                }
            });
        });

        // Filter projects functionality
        function filterProjects(category) {
            const items = document.querySelectorAll('.project-item');
            const buttons = document.querySelectorAll('.filter-btn');

            buttons.forEach(btn => {
                btn.classList.remove('bg-brand-500', 'text-white');
                btn.classList.add('text-slate-400');
            });

            const activeBtn = document.getElementById('btn-' + category);
            if (activeBtn) {
                activeBtn.classList.add('bg-brand-500', 'text-white');
                activeBtn.classList.remove('text-slate-400');
            }

            items.forEach(item => {
                if (category === 'all' || item.classList.contains(category)) {
                    item.style.display = 'flex';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(15px)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 250);
                }
            });
        }

        // Project Modal Handling
        function openModal(title, desc, imgSrc) {
            const modal = document.getElementById('projectModal');
            const card = document.getElementById('modalCard');
            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalDesc').innerText = desc;
            document.getElementById('modalImg').src = imgSrc;

            modal.classList.remove('hidden', 'opacity-0', 'pointer-events-none');
            modal.classList.add('opacity-100');
            setTimeout(() => {
                card.classList.remove('scale-95');
                card.classList.add('scale-100');
            }, 10);
        }

        function closeModal() {
            const modal = document.getElementById('projectModal');
            const card = document.getElementById('modalCard');
            card.classList.remove('scale-100');
            card.classList.add('scale-95');
            modal.classList.remove('opacity-100');
            modal.classList.add('opacity-0', 'pointer-events-none');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        // Copy contact email simulation
        function copyContactEmail() {
            const email = "bhaskara.danadyaksa@rpl.smkn1.sch.id";
            navigator.clipboard.writeText(email).then(() => {
                const badge = document.getElementById('copy-badge');
                badge.classList.remove('hidden');
                setTimeout(() => {
                    badge.classList.add('hidden');
                }, 2200);
            }).catch(() => {
                alert("Kontak Bhaskara: " + email);
            });
        }

        // Modal for Resume
        function downloadResumeModal() {
            alert("Resume & Laporan Portofolio PKL Bhaskara Danadyaksa siap diunduh dalam format PDF.");
        }
    </script>
</body>
</html>

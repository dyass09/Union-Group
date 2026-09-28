<!DOCTYPE html>
<html class="dark scroll-smooth" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>OUR PKL JOURNEY — Beranda Hero | Portofolio Kelompok PKL 2026</title>

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
                        site: {
                            bg: "#0A0F1C",
                            border: "rgba(255, 255, 255, 0.08)",
                            borderAlt: "#2B3242",
                            surface: "#10172A",
                        },
                        brand: {
                            50: "#eef6ff",
                            100: "#d9eaff",
                            200: "#bcdbff",
                            300: "#8ec4ff",
                            400: "#60a5fa",
                            500: "#3b82f6",
                            600: "#2563eb",
                            700: "#1d4ed8",
                        },
                        accent: {
                            emerald: "#10b981",
                            cyan: "#06b6d4",
                            amber: "#f59e0b",
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        display: ['"Space Grotesk"', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    },
                    animation: {
                        'float-slow': 'float 7s ease-in-out infinite',
                        'pulse-glow': 'pulseGlow 4s ease-in-out infinite',
                        'bounce-gentle': 'bounceGentle 2s infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        pulseGlow: {
                            '0%, 100%': { opacity: '0.4', transform: 'scale(1)' },
                            '50%': { opacity: '0.8', transform: 'scale(1.06)' },
                        },
                        bounceGentle: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(5px)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Base Dark Background */
        body {
            background-color: #0A0F1C;
            color: #e2e8f0;
            overflow-x: hidden;
            selection-background-color: #3b82f6;
            selection-color: #ffffff;
        }

        /* Glassmorphism & Borders per specification */
        .glass-navbar {
            background: rgba(10, 15, 28, 0.88);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .glass-panel {
            background: rgba(10, 15, 28, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .glass-panel-card {
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid #2B3242;
        }

        /* Ambient Glow & Radial Gradient: rgba(59, 130, 246, 0.08) - rgba(59, 130, 246, 0.15) */
        .glow-radial-hero {
            background: radial-gradient(circle, rgba(59, 130, 246, 0.15) 0%, rgba(59, 130, 246, 0.08) 60%, transparent 100%);
            filter: blur(60px);
            pointer-events: none;
        }

        .ambient-glow-top {
            position: absolute;
            width: 720px;
            height: 420px;
            border-radius: 9999px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.15) 0%, rgba(59, 130, 246, 0.08) 50%, transparent 75%);
            filter: blur(100px);
            pointer-events: none;
            z-index: 0;
        }

        .ambient-glow-side {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 9999px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.12) 0%, rgba(59, 130, 246, 0.08) 55%, transparent 75%);
            filter: blur(110px);
            pointer-events: none;
            z-index: 0;
        }

        /* 3D Tilt Card */
        .tilt-card {
            transform-style: preserve-3d;
            perspective: 1000px;
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease;
        }

        /* Scroll reveal */
        .reveal-on-load {
            opacity: 0;
            transform: translateY(20px);
            animation: revealUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        @keyframes revealUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="font-sans antialiased relative min-h-screen bg-[#0A0F1C]">

    <!-- Ambient Glow / Radial Gradients behind Hero Visual -->
    <div class="ambient-glow-top top-[-100px] left-1/2 -translate-x-1/2 animate-float-slow"></div>
    <div class="ambient-glow-side top-1/3 -right-24 animate-pulse-glow"></div>
    <div class="ambient-glow-side bottom-10 -left-24 animate-float-slow"></div>

    <!-- 1. STICKY NAVBAR (Glassmorphism #0A0F1C with opacity 88% + blur 16px) -->
    <header class="fixed top-0 left-0 right-0 z-50 glass-navbar">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 h-20 flex items-center justify-between">
            
            <!-- Brand Logo & Name -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                <div class="relative w-9 h-9 rounded-xl bg-gradient-to-tr from-blue-600 to-cyan-400 p-[1px] shadow-lg shadow-blue-500/20 group-hover:scale-105 transition-transform">
                    <div class="w-full h-full bg-[#0A0F1C] rounded-[11px] flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('images/bhaskara/logo.png') }}" alt="PKL Logo" class="h-5 w-auto object-contain brightness-125"/>
                    </div>
                </div>
                <div class="flex flex-col">
                    <span class="font-display font-bold text-sm tracking-wider uppercase text-white group-hover:text-blue-400 transition-colors">OUR PKL JOURNEY</span>
                    <span class="font-mono text-[10px] text-slate-400 tracking-widest">COHORT 2026</span>
                </div>
            </a>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center gap-1 p-1.5 rounded-full bg-[#0A0F1C]/90 border border-[rgba(255,255,255,0.08)] backdrop-blur-xl">
                <a href="{{ url('/beranda') }}" class="px-4 py-1.5 text-xs font-semibold text-blue-300 bg-blue-500/15 border border-blue-500/30 rounded-full shadow-sm">Beranda</a>
                <a href="{{ url('/union/bhaskara') }}" class="px-4 py-1.5 text-xs font-medium text-slate-400 hover:text-white hover:bg-white/[0.05] rounded-full transition-all">Profil Bhaskara</a>
                <a href="#proyek" class="px-4 py-1.5 text-xs font-medium text-slate-400 hover:text-white hover:bg-white/[0.05] rounded-full transition-all">Proyek</a>
                <a href="#tim" class="px-4 py-1.5 text-xs font-medium text-slate-400 hover:text-white hover:bg-white/[0.05] rounded-full transition-all">Anggota Tim</a>
            </nav>

            <!-- CTA Button -->
            <div class="flex items-center gap-3">
                <a href="{{ url('/union/bhaskara') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs shadow-md shadow-blue-500/25 transition-all">
                    <span>Lihat Profil Tim</span>
                    <span class="material-symbols-outlined text-[15px]">arrow_forward</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Container -->
    <main class="relative z-10 pt-28 pb-16 w-full max-w-6xl mx-auto px-5 sm:px-8">
        <div class="flex flex-col w-full relative">

            <!-- Metadata Header Bar -->
            <div class="reveal-on-load flex items-center justify-between w-full pb-4 mb-6 border-b border-[rgba(255,255,255,0.08)]">
                <div class="flex items-center gap-2.5">
                    <span class="inline-block w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                    <span class="font-mono text-xs text-slate-400 uppercase tracking-widest">
                        KOMPONEN BERANDA // 01 HERO SECTION
                    </span>
                </div>
                <div class="flex items-center gap-1.5 font-mono text-xs text-slate-500">
                    <span class="material-symbols-outlined text-sm text-blue-400">terminal</span>
                    <span>SYS.SPEC.V26</span>
                </div>
            </div>

            <!-- Hero Content -->
            <section class="relative w-full flex flex-col items-center justify-center pt-4 pb-12">
                
                <!-- Cohort Milestone Badge -->
                <div class="reveal-on-load inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-[#0A0F1C]/90 border border-[rgba(255,255,255,0.08)] shadow-lg mb-8 hover:border-blue-500/40 transition-all cursor-default" style="animation-delay: 100ms;">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-400"></span>
                    </span>
                    <span class="font-mono text-xs text-slate-300 tracking-wider font-medium">
                        PORTOFOLIO KELOMPOK PKL — 2026 • 3 BULAN MAGANG INDUSTRI
                    </span>
                </div>

                <!-- Editorial Headline Typography -->
                <div class="reveal-on-load max-w-4xl text-center mb-6 space-y-4" style="animation-delay: 200ms;">
                    <h1 class="font-display text-4xl sm:text-6xl md:text-7xl uppercase font-bold tracking-tight text-white leading-none">
                        DARI BELAJAR MENUJU <br class="hidden sm:inline"/>
                        <span class="bg-gradient-to-r from-blue-400 via-sky-300 to-emerald-400 bg-clip-text text-transparent">
                            PENGALAMAN NYATA.
                        </span>
                    </h1>
                    <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed font-light">
                        Portofolio digital yang mendokumentasikan perjalanan, proyek produksi, tantangan rekayasa kolaboratif, dan pencapaian tim siswa SMK RPL selama Praktik Kerja Lapangan di industri perangkat lunak.
                    </p>
                </div>

                <!-- Dual Action CTA Buttons -->
                <div class="reveal-on-load flex flex-wrap items-center justify-center gap-4 mt-2 mb-12" style="animation-delay: 300ms;">
                    <a href="{{ url('/union/bhaskara') }}" class="group inline-flex items-center gap-2.5 px-6 py-3.5 rounded-xl bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-400 text-white font-semibold text-sm shadow-xl shadow-blue-500/25 hover:shadow-blue-500/40 hover:-translate-y-0.5 transition-all">
                        <span>Jelajahi Perjalanan Kami</span>
                        <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                    
                    <a href="#tim" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-[#0A0F1C]/90 hover:bg-slate-800 text-slate-200 hover:text-white font-medium text-sm border border-[rgba(255,255,255,0.08)] hover:border-blue-500/30 transition-all">
                        <span class="material-symbols-outlined text-[18px] text-blue-400">group</span>
                        <span>Kenali Anggota Tim (4)</span>
                    </a>
                </div>

                <!-- Framed Photographic Artifact with Subtle Blue Radial Glow & 3D Tilt -->
                <div class="reveal-on-load w-full max-w-4xl relative group" style="animation-delay: 400ms;" id="tiltContainer">
                    
                    <!-- Dedicated Efek Glow / Radial Gradient: rgba(59, 130, 246, 0.08) - rgba(59, 130, 246, 0.15) -->
                    <div class="glow-radial-hero absolute -inset-4 rounded-3xl transform group-hover:scale-[1.02] transition-transform duration-500"></div>

                    <!-- Card Body with Glassmorphism and #2B3242 / rgba(255,255,255,0.08) border -->
                    <div class="tilt-card relative rounded-3xl overflow-hidden shadow-2xl transition-all" 
                         style="background: rgba(10, 15, 28, 0.88); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(255, 255, 255, 0.08);"
                         id="tiltCard">
                        
                        <!-- Floating Badges Top -->
                        <div class="absolute top-4 left-4 z-20">
                            <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#0A0F1C]/90 backdrop-blur-md border border-[rgba(255,255,255,0.08)] shadow-lg">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                <span class="font-mono text-[11px] text-slate-200 tracking-wider font-semibold uppercase">
                                    Live in Production
                                </span>
                            </div>
                        </div>

                        <div class="absolute top-4 right-4 z-20 hidden sm:flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-[#0A0F1C]/90 backdrop-blur-md border border-[rgba(255,255,255,0.08)] shadow-lg font-mono text-[11px] text-blue-300">
                            <span class="material-symbols-outlined text-[16px] text-blue-400">verified</span>
                            <span>VERIFIED DEPLOYMENT</span>
                        </div>

                        <!-- Hero Documentary Image -->
                        <div class="relative aspect-[1.79/1] w-full overflow-hidden bg-[#0A0F1C] cursor-pointer" onclick="openHeroModal()">
                            <img id="heroImage" 
                                 src="{{ asset('images/beranda/hero_collaboration.png') }}" 
                                 alt="Dokumentasi Kolaborasi Siswa PKL SMK RPL" 
                                 class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out"/>
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0A0F1C] via-transparent to-transparent opacity-85"></div>
                            
                            <!-- Hover Overlay Hint -->
                            <div class="absolute inset-0 bg-blue-500/10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <div class="px-4 py-2 rounded-xl bg-[#0A0F1C]/90 backdrop-blur-md border border-[rgba(255,255,255,0.08)] text-xs font-mono text-white flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[16px]">fullscreen</span>
                                    <span>Klik untuk Memperbesar</span>
                                </div>
                            </div>
                        </div>

                        <!-- Bottom Metadata Shelf with #2B3242 divider -->
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 px-6 py-4 bg-[#0A0F1C]/95 border-t border-[#2B3242]">
                            <div class="flex items-center gap-2.5">
                                <div class="w-7 h-7 rounded-lg bg-blue-500/15 flex items-center justify-center text-blue-400">
                                    <span class="material-symbols-outlined text-[16px]">terminal</span>
                                </div>
                                <span class="font-mono text-xs text-slate-300 tracking-wide">
                                    4 Pengembang &amp; Desainer Cohort | SMK Rekayasa Perangkat Lunak
                                </span>
                            </div>
                            <div class="flex items-center gap-3 font-mono text-xs text-slate-400">
                                <span>SPRINT 01 — 12</span>
                                <span class="text-slate-600">•</span>
                                <span class="text-emerald-400 font-semibold bg-emerald-500/10 border border-emerald-500/20 px-2 py-0.5 rounded-md">100% Selesai</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Interactive Team Quick-Picker Cards with border #2B3242 / rgba(255,255,255,0.08) -->
                <div id="tim" class="reveal-on-load w-full max-w-4xl mt-12 grid grid-cols-2 sm:grid-cols-4 gap-3.5" style="animation-delay: 500ms;">
                    <a href="{{ url('/union/bhaskara') }}" class="glass-panel p-3.5 rounded-2xl flex items-center gap-3 group hover:border-blue-500/40 hover:bg-[#10172A] transition-all">
                        <div class="w-8 h-8 rounded-lg bg-blue-500/15 text-blue-400 flex items-center justify-center font-mono text-xs font-bold group-hover:scale-110 transition-transform">01</div>
                        <div class="flex flex-col overflow-hidden">
                            <span class="font-display text-xs font-bold text-white truncate group-hover:text-blue-300 transition-colors">Bhaskara</span>
                            <span class="font-mono text-[10px] text-slate-400 truncate">Tech Lead &amp; UI</span>
                        </div>
                    </a>

                    <a href="{{ url('/union/damar') }}" class="glass-panel p-3.5 rounded-2xl flex items-center gap-3 group hover:border-emerald-500/40 hover:bg-[#10172A] transition-all">
                        <div class="w-8 h-8 rounded-lg bg-emerald-500/15 text-emerald-400 flex items-center justify-center font-mono text-xs font-bold group-hover:scale-110 transition-transform">02</div>
                        <div class="flex flex-col overflow-hidden">
                            <span class="font-display text-xs font-bold text-white truncate group-hover:text-emerald-300 transition-colors">Damar</span>
                            <span class="font-mono text-[10px] text-slate-400 truncate">Backend Ops</span>
                        </div>
                    </a>

                    <a href="{{ url('/union/putra') }}" class="glass-panel p-3.5 rounded-2xl flex items-center gap-3 group hover:border-amber-500/40 hover:bg-[#10172A] transition-all">
                        <div class="w-8 h-8 rounded-lg bg-amber-500/15 text-amber-400 flex items-center justify-center font-mono text-xs font-bold group-hover:scale-110 transition-transform">03</div>
                        <div class="flex flex-col overflow-hidden">
                            <span class="font-display text-xs font-bold text-white truncate group-hover:text-amber-300 transition-colors">Putra</span>
                            <span class="font-mono text-[10px] text-slate-400 truncate">Frontend Dev</span>
                        </div>
                    </a>

                    <a href="{{ url('/union/ade') }}" class="glass-panel p-3.5 rounded-2xl flex items-center gap-3 group hover:border-purple-500/40 hover:bg-[#10172A] transition-all">
                        <div class="w-8 h-8 rounded-lg bg-purple-500/15 text-purple-400 flex items-center justify-center font-mono text-xs font-bold group-hover:scale-110 transition-transform">04</div>
                        <div class="flex flex-col overflow-hidden">
                            <span class="font-display text-xs font-bold text-white truncate group-hover:text-purple-300 transition-colors">Ade</span>
                            <span class="font-mono text-[10px] text-slate-400 truncate">QA &amp; Doc</span>
                        </div>
                    </a>
                </div>

                <!-- Scroll Down Indicator -->
                <div class="flex flex-col items-center justify-center gap-2 mt-12">
                    <a href="{{ url('/union/bhaskara') }}" class="group flex flex-col items-center gap-2 text-slate-400 hover:text-blue-400 transition-colors">
                        <span class="font-mono text-[11px] tracking-widest uppercase">
                            GULIR UNTUK MENJELAJAH ↓
                        </span>
                        <div class="w-5 h-8 rounded-full border border-[rgba(255,255,255,0.08)] group-hover:border-blue-500/50 flex items-start justify-center p-1 bg-[#0A0F1C] shadow-inner">
                            <div class="w-1.5 h-2 rounded-full bg-blue-400 animate-bounce-gentle"></div>
                        </div>
                    </a>
                </div>

            </section>
        </div>
    </main>

    <!-- Fullscreen Image Preview Modal -->
    <div id="heroModal" class="fixed inset-0 z-50 hidden bg-[#0A0F1C]/90 backdrop-blur-md p-4 sm:p-8 flex items-center justify-center opacity-0 pointer-events-none transition-all duration-300">
        <div class="max-w-4xl w-full rounded-3xl overflow-hidden shadow-2xl border border-[rgba(255,255,255,0.08)] relative scale-95 transition-transform duration-300" 
             style="background: rgba(10, 15, 28, 0.95); backdrop-filter: blur(16px);"
             id="heroModalCard">
            <button onclick="closeHeroModal()" class="absolute top-4 right-4 z-20 w-10 h-10 rounded-full bg-[#0A0F1C]/80 backdrop-blur-md text-white flex items-center justify-center hover:bg-white hover:text-[#0A0F1C] transition-colors border border-[rgba(255,255,255,0.08)]">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
            <div class="aspect-[1.79/1] w-full overflow-hidden bg-[#0A0F1C]">
                <img src="{{ asset('images/beranda/hero_collaboration.png') }}" alt="Dokumentasi Kolaborasi" class="w-full h-full object-cover"/>
            </div>
            <div class="p-6 bg-[#0A0F1C] border-t border-[#2B3242] flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                <div>
                    <h3 class="font-display text-lg font-bold text-white">Dokumentasi Kolaborasi Sprint PKL 2026</h3>
                    <p class="text-xs text-slate-400 font-light">Sesi sinkronisasi harian, evaluasi desain UI/UX, dan review arsitektur kode frontend.</p>
                </div>
                <a href="{{ url('/union/bhaskara') }}" class="px-4 py-2 rounded-xl bg-blue-600 hover:bg-blue-500 text-xs font-mono text-white transition-colors flex items-center gap-1.5">
                    <span>Lihat Portofolio</span>
                    <span class="material-symbols-outlined text-[15px]">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Interactive Tilt & Modal Scripts -->
    <script>
        // 3D Card Tilt Effect on Mouse Move
        const tiltContainer = document.getElementById('tiltContainer');
        const tiltCard = document.getElementById('tiltCard');

        if (tiltContainer && tiltCard) {
            tiltContainer.addEventListener('mousemove', (e) => {
                const rect = tiltContainer.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateX = ((y - centerY) / centerY) * -5;
                const rotateY = ((x - centerX) / centerX) * 5;

                tiltCard.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            });

            tiltContainer.addEventListener('mouseleave', () => {
                tiltCard.style.transform = 'rotateX(0deg) rotateY(0deg)';
            });
        }

        // Modal Handlers
        function openHeroModal() {
            const modal = document.getElementById('heroModal');
            const card = document.getElementById('heroModalCard');
            modal.classList.remove('hidden', 'opacity-0', 'pointer-events-none');
            modal.classList.add('opacity-100');
            setTimeout(() => {
                card.classList.remove('scale-95');
                card.classList.add('scale-100');
            }, 10);
        }

        function closeHeroModal() {
            const modal = document.getElementById('heroModal');
            const card = document.getElementById('heroModalCard');
            card.classList.remove('scale-100');
            card.classList.add('scale-95');
            modal.classList.remove('opacity-100');
            modal.classList.add('opacity-0', 'pointer-events-none');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
    </script>
</body>
</html>

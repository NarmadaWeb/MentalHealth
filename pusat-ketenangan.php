<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Pusat Ketenangan - MentalHealth</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "background": "#f7f9ff",
                        "on-surface-variant": "#414845",
                        "on-error": "#ffffff",
                        "on-tertiary-container": "#783f40",
                        "error": "#ba1a1a",
                        "on-primary": "#ffffff",
                        "inverse-primary": "#accebe",
                        "on-tertiary-fixed": "#370c0f",
                        "primary-fixed-dim": "#accebe",
                        "secondary-fixed": "#c4e8f8",
                        "on-secondary-fixed": "#001f28",
                        "surface-container-highest": "#d5e4f5",
                        "outline": "#727974",
                        "inverse-surface": "#24323f",
                        "primary": "#466558",
                        "outline-variant": "#c1c8c3",
                        "on-secondary-container": "#476976",
                        "surface-container": "#e2efff",
                        "primary-fixed": "#c8eada",
                        "primary-container": "#a8caba",
                        "on-primary-fixed": "#012116",
                        "on-background": "#0e1d29",
                        "error-container": "#ffdad6",
                        "tertiary-fixed": "#ffdad9",
                        "surface-bright": "#f7f9ff",
                        "tertiary": "#894d4e",
                        "surface": "#f7f9ff",
                        "surface-container-lowest": "#ffffff",
                        "secondary-fixed-dim": "#a8ccdb",
                        "on-tertiary": "#ffffff",
                        "secondary-container": "#c4e8f8",
                        "secondary": "#416370",
                        "on-secondary": "#ffffff",
                        "surface-container-low": "#ecf4ff",
                        "on-secondary-fixed-variant": "#284b58",
                        "on-error-container": "#93000a",
                        "inverse-on-surface": "#e7f2ff",
                        "tertiary-fixed-dim": "#ffb3b3",
                        "surface-dim": "#cddcec",
                        "on-primary-fixed-variant": "#2e4d41",
                        "surface-container-high": "#dbeafb",
                        "tertiary-container": "#fbaeae",
                        "on-surface": "#0e1d29",
                        "on-tertiary-fixed-variant": "#6d3638",
                        "on-primary-container": "#375649",
                        "surface-variant": "#d5e4f5",
                        "surface-tint": "#466558"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "container-padding-desktop": "80px",
                        "gutter": "24px",
                        "section-gap": "64px",
                        "unit": "8px",
                        "container-padding-mobile": "24px"
                    },
                    "fontFamily": {
                        "body-md": ["Inter"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "display-lg": ["Plus Jakarta Sans"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "body-md": ["16px", {"lineHeight": "1.7", "fontWeight": "400"}],
                        "headline-md": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}],
                        "display-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-lg": ["18px", {"lineHeight": "1.8", "fontWeight": "400"}],
                        "label-md": ["14px", {"lineHeight": "1.5", "letterSpacing": "0.05em", "fontWeight": "500"}],
                        "headline-lg": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "headline-lg-mobile": ["28px", {"lineHeight": "1.3", "fontWeight": "700"}]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background text-on-background antialiased min-h-screen flex flex-col relative overflow-x-hidden">
    <!-- Decorative Organic Background Blob -->
    <div class="fixed top-[-10%] left-[-5%] w-[50vw] h-[50vw] rounded-full bg-secondary-container/30 blur-[100px] -z-10 pointer-events-none"></div>
    <div class="fixed bottom-[-10%] right-[-5%] w-[40vw] h-[40vw] rounded-full bg-primary-container/20 blur-[100px] -z-10 pointer-events-none"></div>

    <?php include 'components/navbar.php'; ?>

    <!-- Main Canvas -->
    <main class="flex-grow pt-32 pb-section-gap px-container-padding-mobile md:px-container-padding-desktop max-w-7xl mx-auto w-full flex flex-col gap-section-gap mt-16 md:mt-24">
        <!-- Hero Title -->
        <section class="text-center max-w-3xl mx-auto space-y-6 mt-8">
            <h1 class="font-display-lg text-display-lg text-primary">Pusat Ketenangan</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant">
                Sebuah ruang aman untuk mengambil jeda. Bernapaslah perlahan, dan kembali terhubung dengan dirimu saat ini.
            </p>
        </section>

        <!-- Bento Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
            <!-- Breathing Exercise (Bernapas Bersama) - Spans 8 cols on desktop -->
            <div class="md:col-span-7 bg-surface-container-lowest rounded-xl p-8 md:p-12 shadow-[0_10px_30px_rgba(176,212,227,0.2)] flex flex-col items-center justify-center relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-br from-surface-container-lowest to-surface-container opacity-50 z-0"></div>
                <div class="relative z-10 w-full flex flex-col items-center">
                    <div class="w-full flex justify-between items-start mb-12">
                        <div>
                            <h2 class="font-headline-md text-headline-md text-primary">Bernapas Bersama</h2>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-2">Ikuti panduan visual ini untuk menenangkan sistem sarafmu.</p>
                        </div>
                        <span class="material-symbols-outlined text-primary" style="font-size: 32px;">air</span>
                    </div>
                    <!-- Breathing Circle -->
                    <div class="relative w-48 h-48 md:w-64 md:h-64 flex items-center justify-center my-8">
                        <div class="absolute inset-0 rounded-full border-4 border-secondary-container/30"></div>
                        <div id="breathing-circle" class="w-3/4 h-3/4 bg-secondary-container rounded-full flex items-center justify-center shadow-[0_0_40px_rgba(196,232,248,0.5)] transition-transform ease-in-out" style="transform: scale(0.8);">
                            <span id="breathing-text" class="font-headline-md text-headline-md text-on-secondary-container transition-opacity duration-300 text-center px-4">Siap?</span>
                        </div>
                    </div>
                    <div class="flex gap-4 mt-8">
                        <button id="start-breathing-btn" class="bg-primary text-on-primary font-label-md text-label-md px-8 py-3 rounded-full hover:scale-105 transition-all duration-200 shadow-[0_4px_14px_rgba(70,101,88,0.3)]">
                            Mulai Latihan
                        </button>
                    </div>
                </div>
            </div>

            <!-- Professional Help Links - Spans 5 cols on desktop -->
            <div class="md:col-span-5 bg-primary-container rounded-xl p-8 shadow-[0_10px_30px_rgba(176,212,227,0.2)] flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 bg-primary text-on-primary rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined">support_agent</span>
                        </div>
                        <h2 class="font-headline-md text-headline-md text-on-primary-container">Butuh Teman Bicara?</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-primary-container/80 mb-8">
                        Jika kamu merasa kewalahan dan butuh bantuan profesional sekarang juga, jangan ragu untuk menghubungi layanan darurat.
                    </p>
                </div>
                <div class="space-y-4">
                    <a class="flex items-center justify-between bg-surface-container-lowest p-4 rounded-lg hover:bg-surface-bright transition-colors group" href="#">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary">call</span>
                            <span class="font-label-md text-label-md text-on-surface">Layanan Sejiwa (119 ext 8)</span>
                        </div>
                        <span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors">arrow_forward</span>
                    </a>
                    <a class="flex items-center justify-between bg-surface-container-lowest p-4 rounded-lg hover:bg-surface-bright transition-colors group" href="#">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary">forum</span>
                            <span class="font-label-md text-label-md text-on-surface">Chat Konseling Daring</span>
                        </div>
                        <span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Grounding Technique 5-4-3-2-1 -->
            <div class="col-span-1 md:col-span-12 bg-surface-container-lowest rounded-xl p-8 md:p-12 shadow-[0_10px_30px_rgba(176,212,227,0.2)] mt-8">
                <div class="text-center mb-12 max-w-2xl mx-auto">
                    <h2 class="font-headline-md text-headline-md text-primary mb-4">Teknik Grounding 5-4-3-2-1</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        Gunakan indramu untuk kembali ke momen saat ini. Temukan hal-hal di sekitarmu sesuai dengan panduan di bawah ini.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                    <div class="flex flex-col items-center text-center p-6 bg-surface rounded-xl border border-surface-container-highest hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-secondary-container text-on-secondary-container rounded-full flex items-center justify-center mb-4 text-2xl font-bold">5</div>
                        <span class="material-symbols-outlined text-secondary mb-2" style="font-size: 28px;">visibility</span>
                        <h3 class="font-label-md text-label-md text-on-surface font-bold mb-2">Hal yang bisa dilihat</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant text-sm">Cari 5 benda di sekitarmu saat ini.</p>
                    </div>
                    <div class="flex flex-col items-center text-center p-6 bg-surface rounded-xl border border-surface-container-highest hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-secondary-container text-on-secondary-container rounded-full flex items-center justify-center mb-4 text-2xl font-bold">4</div>
                        <span class="material-symbols-outlined text-secondary mb-2" style="font-size: 28px;">touch_app</span>
                        <h3 class="font-label-md text-label-md text-on-surface font-bold mb-2">Hal yang bisa disentuh</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant text-sm">Rasakan tekstur 4 benda berbeda.</p>
                    </div>
                    <div class="flex flex-col items-center text-center p-6 bg-surface rounded-xl border border-surface-container-highest hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-secondary-container text-on-secondary-container rounded-full flex items-center justify-center mb-4 text-2xl font-bold">3</div>
                        <span class="material-symbols-outlined text-secondary mb-2" style="font-size: 28px;">hearing</span>
                        <h3 class="font-label-md text-label-md text-on-surface font-bold mb-2">Hal yang bisa didengar</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant text-sm">Fokus pada 3 suara di latar belakang.</p>
                    </div>
                    <div class="flex flex-col items-center text-center p-6 bg-surface rounded-xl border border-surface-container-highest hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-secondary-container text-on-secondary-container rounded-full flex items-center justify-center mb-4 text-2xl font-bold">2</div>
                        <span class="material-symbols-outlined text-secondary mb-2" style="font-size: 28px;">spa</span>
                        <h3 class="font-label-md text-label-md text-on-surface font-bold mb-2">Hal yang bisa dicium</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant text-sm">Hirup 2 aroma di sekelilingmu.</p>
                    </div>
                    <div class="flex flex-col items-center text-center p-6 bg-surface rounded-xl border border-surface-container-highest hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-secondary-container text-on-secondary-container rounded-full flex items-center justify-center mb-4 text-2xl font-bold">1</div>
                        <span class="material-symbols-outlined text-secondary mb-2" style="font-size: 28px;">restaurant</span>
                        <h3 class="font-label-md text-label-md text-on-surface font-bold mb-2">Hal yang bisa dikecap</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant text-sm">Rasakan 1 hal di mulutmu saat ini.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'components/footer.php'; ?>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const circle = document.getElementById('breathing-circle');
        const text = document.getElementById('breathing-text');
        const btn = document.getElementById('start-breathing-btn');

        let isBreathing = false;
        let breatheInterval;
        let breatheTimeout1, breatheTimeout2;

        const breatheTime = 4000;
        const holdTime = 2000;
        const totalCycleTime = breatheTime * 2 + holdTime; // 10s
        const maxCycles = 5; // Berhenti otomatis setelah 5 siklus
        let currentCycle = 0;

        function animateText(newText) {
            text.style.opacity = '0';
            setTimeout(() => {
                text.innerText = newText;
                text.style.opacity = '1';
            }, 300);
        }

        function stopBreathing(completed = false) {
            isBreathing = false;
            clearInterval(breatheInterval);
            clearTimeout(breatheTimeout1);
            clearTimeout(breatheTimeout2);
            
            btn.innerText = 'Mulai Latihan';
            btn.classList.remove('bg-error', 'text-on-error');
            btn.classList.add('bg-primary', 'text-on-primary');
            
            if (completed) {
                const messages = [
                    "Luar biasa! Terima kasih sudah mengambil jeda hari ini.",
                    "Sangat bagus! Kamu berharga dan pantas merasa tenang.",
                    "Hebat! Berterimakasihlah pada dirimu yang sudah bertahan.",
                    "Bagus sekali! Setiap napas ini adalah bentuk cintamu pada diri sendiri.",
                    "Luar biasa. Ingatlah bahwa kamu kuat dan luar biasa."
                ];
                const randomMsg = messages[Math.floor(Math.random() * messages.length)];
                
                // Menyesuaikan ukuran font sedikit agar teks yang panjang bisa muat di dalam lingkaran
                text.style.fontSize = '1.1rem';
                text.style.lineHeight = '1.4';
                
                animateText(randomMsg);
                
                setTimeout(() => {
                    if(!isBreathing) {
                        text.style.fontSize = ''; // Kembalikan ke ukuran semula
                        text.style.lineHeight = '';
                        animateText('Siap?');
                    }
                }, 5000);
            } else {
                animateText('Siap?');
            }
            
            circle.style.transition = 'transform 1s ease-in-out';
            circle.style.transform = 'scale(0.8)';
        }

        function breathingAnimation() {
            currentCycle++;
            if (currentCycle > maxCycles) {
                stopBreathing(true);
                return;
            }

            // Tarik Napas (Inhale)
            animateText('Tarik Napas');
            circle.style.transition = `transform ${breatheTime}ms ease-in-out`;
            circle.style.transform = 'scale(1.2)';

            breatheTimeout1 = setTimeout(() => {
                // Tahan (Hold)
                animateText('Tahan');
                
                breatheTimeout2 = setTimeout(() => {
                    // Hembuskan (Exhale)
                    animateText('Hembuskan');
                    circle.style.transition = `transform ${breatheTime}ms ease-in-out`;
                    circle.style.transform = 'scale(0.8)';
                }, holdTime);
            }, breatheTime);
        }

        btn.addEventListener('click', () => {
            if (isBreathing) {
                // Berhenti Manual
                stopBreathing(false);
            } else {
                // Start
                isBreathing = true;
                currentCycle = 0;
                btn.innerText = 'Berhenti Latihan';
                btn.classList.remove('bg-primary', 'text-on-primary');
                btn.classList.add('bg-error', 'text-on-error');
                
                breathingAnimation();
                breatheInterval = setInterval(breathingAnimation, totalCycleTime);
            }
        });
    });
    </script>
</body>
</html>
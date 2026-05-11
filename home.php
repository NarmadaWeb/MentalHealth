<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>MentalHealth - Ruang Tenang</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <!-- Tailwind Config -->
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
                        "body-md": ["16px", { "lineHeight": "1.7", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "1.4", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-lg": ["18px", { "lineHeight": "1.8", "fontWeight": "400" }],
                        "label-md": ["14px", { "lineHeight": "1.5", "letterSpacing": "0.05em", "fontWeight": "500" }],
                        "headline-lg": ["32px", { "lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                        "headline-lg-mobile": ["28px", { "lineHeight": "1.3", "fontWeight": "700" }]
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
<body class="bg-background text-on-background font-body-md text-body-md antialiased overflow-x-hidden selection:bg-primary-container selection:text-on-primary-container">
<!-- TopAppBar -->
<?php include 'components/navbar.php'; ?>

<main class="pt-28 pb-section-gap min-h-screen">
    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-container-padding-mobile md:px-container-padding-desktop py-section-gap relative">
        <div class="absolute inset-0 -z-10 bg-[url('https://images.unsplash.com/photo-1518173946687-a4c8892bbd9f?q=80&amp;w=2000&amp;auto=format&amp;fit=crop')] bg-cover bg-center opacity-[0.03] rounded-3xl mix-blend-multiply"></div>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
            <div class="md:col-span-7 space-y-8 relative z-10">
                <h1 class="font-display-lg text-display-lg text-on-background">
                    Apa kabar dirimu hari ini?
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                    Selamat datang di ruang tenangmu. Mari luangkan sejenak waktu untuk mengenali perasaan dan kondisi mentalmu tanpa penghakiman.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a href="/tes-mandiri" class="inline-block text-center bg-primary text-on-primary rounded-full px-8 py-4 font-label-md text-label-md hover:scale-[1.02] transition-transform duration-300 shadow-[0_10px_30px_rgba(176,212,227,0.3)]">
                        Mulai Perjalanan
                    </a>
                </div>
            </div>
            <div class="md:col-span-5 relative h-[400px] md:h-[500px] rounded-[2rem] overflow-hidden shadow-[0_20px_40px_rgba(176,212,227,0.25)]">
                <img alt="Ilustrasi ketenangan" class="absolute inset-0 w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAu5O9M8WIMQEx71NzDNzfctBUF5IwU77MfaA7EuiHR9QAORoFw1yHdQMYksBMJqqTzcnETkNgxzZd9dMubTYL1LpEjCvO5wX4MdEJYoYUfV87DfGNYpK8cJM-bmGHrX9WfO7fVKbi8GdICXnU5qnFEaCsauZ4Ava_GNWPRaYRIFcDeTK-r04UB6U3h8XDQg9gmFxqlq3FU419OE_pN1iKe6DslCzd1Zd1sZGqnmQuMiVzLLPkWh7CRUMCquGLpfqo8SXYplI_h2cw"/>
                <div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest/80 to-transparent"></div>
            </div>
        </div>
    </section>

    <!-- Quick Tests Bento Grid -->
    <section class="max-w-7xl mx-auto px-container-padding-mobile md:px-container-padding-desktop py-section-gap">
        <div class="text-center mb-12">
            <h2 class="font-headline-lg text-headline-lg text-on-background mb-4">Pilih Area Refleksi</h2>
            <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto">Kenali apa yang sedang kamu hadapi saat ini melalui skrining awal yang dirancang untuk membantumu memahami diri sendiri.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Tingkat Stres -->
            <a class="group bg-surface-container-lowest rounded-xl p-6 shadow-[0_10px_30px_rgba(176,212,227,0.15)] hover:shadow-[0_15px_40px_rgba(176,212,227,0.3)] transition-all duration-300 relative overflow-hidden flex flex-col justify-between h-56 border border-surface-container-high" href="/tes">
                <div class="w-12 h-12 rounded-full bg-secondary-container flex items-center justify-center text-secondary mb-4 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">waves</span>
                </div>
                <div>
                    <h3 class="font-headline-md text-headline-md text-on-background mb-2">Tingkat Stres</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant text-sm line-clamp-2">Evaluasi beban pikiran dan tekanan yang mungkin kamu rasakan saat ini.</p>
                </div>
            </a>
            <!-- Kecemasan -->
            <a class="group bg-surface-container-lowest rounded-xl p-6 shadow-[0_10px_30px_rgba(176,212,227,0.15)] hover:shadow-[0_15px_40px_rgba(176,212,227,0.3)] transition-all duration-300 relative overflow-hidden flex flex-col justify-between h-56 border border-surface-container-high" href="/tes">
                <div class="w-12 h-12 rounded-full bg-primary-container flex items-center justify-center text-primary mb-4 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">air</span>
                </div>
                <div>
                    <h3 class="font-headline-md text-headline-md text-on-background mb-2">Kecemasan</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant text-sm line-clamp-2">Kenali rasa khawatir berlebih yang mengganggu ketenangan harimu.</p>
                </div>
            </a>
            <!-- Gejala Depresi -->
            <a class="group bg-surface-container-lowest rounded-xl p-6 shadow-[0_10px_30px_rgba(176,212,227,0.15)] hover:shadow-[0_15px_40px_rgba(176,212,227,0.3)] transition-all duration-300 relative overflow-hidden flex flex-col justify-between h-56 border border-surface-container-high" href="/tes">
                <div class="w-12 h-12 rounded-full bg-tertiary-container flex items-center justify-center text-tertiary mb-4 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">nightlight</span>
                </div>
                <div>
                    <h3 class="font-headline-md text-headline-md text-on-background mb-2">Gejala Depresi</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant text-sm line-clamp-2">Periksa tanda-tanda kelelahan emosional dan hilangnya minat.</p>
                </div>
            </a>
            <!-- Burnout -->
            <a class="group bg-surface-container-lowest rounded-xl p-6 shadow-[0_10px_30px_rgba(176,212,227,0.15)] hover:shadow-[0_15px_40px_rgba(176,212,227,0.3)] transition-all duration-300 relative overflow-hidden flex flex-col justify-between h-56 border border-surface-container-high lg:-mt-8" href="/tes">
                <div class="w-12 h-12 rounded-full bg-error-container flex items-center justify-center text-error mb-4 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">local_fire_department</span>
                </div>
                <div>
                    <h3 class="font-headline-md text-headline-md text-on-background mb-2">Semua Skrining</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant text-sm line-clamp-2">Ambil tes komprehensif DASS-21 untuk mengetahui tingkat depresi, kecemasan, dan stres.</p>
                </div>
            </a>
        </div>
    </section>

    <!-- Mengapa tes ini? Section -->
    <section class="max-w-7xl mx-auto px-container-padding-mobile md:px-container-padding-desktop py-section-gap">
        <div class="bg-surface-container-low rounded-[2rem] p-8 md:p-16 flex flex-col md:flex-row items-center gap-12 shadow-[0_10px_30px_rgba(176,212,227,0.1)] relative overflow-hidden">
            <!-- Decorative blurred shape -->
            <div class="absolute -top-24 -right-24 w-64 h-64 bg-secondary-container rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>

            <div class="md:w-1/2 space-y-6 relative z-10">
                <h2 class="font-headline-lg text-headline-lg text-on-background">Mengapa tes ini penting?</h2>
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Mengenali kondisi diri adalah langkah pertama menuju kesejahteraan mental. Tes yang ada di MentalHealth dirancang sebagai cermin kecil untuk melihat apa yang mungkin selama ini terabaikan di tengah kesibukan.
                </p>
                <ul class="space-y-4 pt-4">
                    <li class="flex items-start gap-4">
                        <span class="material-symbols-outlined text-primary bg-primary-container/30 p-2 rounded-full">favorite</span>
                        <div>
                            <h4 class="font-label-md text-label-md text-on-background">Validasi Perasaan</h4>
                            <p class="font-body-md text-body-md text-on-surface-variant text-sm mt-1">Membantu memberi nama pada apa yang sedang kamu rasakan.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="material-symbols-outlined text-primary bg-primary-container/30 p-2 rounded-full">psychology</span>
                        <div>
                            <h4 class="font-label-md text-label-md text-on-background">Langkah Awal</h4>
                            <p class="font-body-md text-body-md text-on-surface-variant text-sm mt-1">Menjadi panduan sebelum memutuskan untuk mencari bantuan profesional.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="md:w-1/2 w-full aspect-square md:aspect-video rounded-xl overflow-hidden relative shadow-lg">
                <img alt="Ruang tenang" class="absolute inset-0 w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9gEjfiDs5W2msT7UfziGaQmw1AMtrRfi_6EHdYooon4MM_qf-2OKuj1or9SMaf1hudY720AO2LzgUNb9yWgO639Io-9SVNOjI0hqAjZgX7iDGusq9rLzYsffiv86vCk69hNVxM1V3E8agq7-40gYakJd-FkO4s0P5STDyP9cZkw-IUOHGYZ2NvFJSVEbGiNe24i2IIL5wxwoxc_dcmDoeCGTfpMtVUxNsH5lzEAObQGw0vBmgKkrONNLxnE_TQ8KwTHxc9dnolWE"/>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<?php include 'components/footer.php'; ?>
</body>
</html>
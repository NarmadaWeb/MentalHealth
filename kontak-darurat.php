<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Kontak Darurat - MentalHealth</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Plus+Jakarta+Sans:wght@600;700&display=swap" rel="stylesheet"/>
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
</head>
<body class="bg-background text-on-surface font-body-md text-body-md antialiased min-h-screen relative overflow-x-hidden flex flex-col">
    <?php include 'components/navbar.php'; ?>

    <main class="max-w-5xl mx-auto px-container-padding-mobile md:px-container-padding-desktop py-section-gap flex-grow mt-16 md:mt-24 z-10 relative">
        <h1 class="font-display-lg text-headline-lg text-error mb-4 text-center md:text-left">Kontak Darurat</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant mb-12 text-center md:text-left max-w-2xl">
            Jika Anda merasa dalam keadaan krisis emosional, membutuhkan pertolongan mendesak, atau memiliki dorongan untuk menyakiti diri sendiri, Anda tidak sendirian. Segera hubungi salah satu layanan darurat berikut yang bersedia membantu 24 jam:
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Layanan Sejiwa -->
            <div class="bg-surface-container-lowest p-8 rounded-2xl shadow-[0_10px_30px_rgba(176,212,227,0.2)] border border-error-container/50 hover:shadow-[0_15px_40px_rgba(176,212,227,0.3)] transition-all flex flex-col h-full group">
                <div class="w-14 h-14 rounded-full bg-error-container text-error flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">call</span>
                </div>
                <h2 class="font-headline-md text-headline-md text-on-surface mb-2">Layanan Sejiwa (Kemenkes)</h2>
                <p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Layanan dukungan psikologis dan kesehatan mental awal resmi dari Kementerian Kesehatan RI.</p>
                <div class="bg-error/10 text-error font-bold text-xl px-4 py-3 rounded-lg text-center mt-auto">
                    119 (Ekstensi 8)
                </div>
            </div>

            <!-- Yayasan Pulih -->
            <div class="bg-surface-container-lowest p-8 rounded-2xl shadow-[0_10px_30px_rgba(176,212,227,0.2)] border border-surface-container-high/50 hover:shadow-[0_15px_40px_rgba(176,212,227,0.3)] transition-all flex flex-col h-full group">
                <div class="w-14 h-14 rounded-full bg-primary-container text-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">forum</span>
                </div>
                <h2 class="font-headline-md text-headline-md text-on-surface mb-2">Yayasan Pulih</h2>
                <p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Layanan pemulihan trauma dan konseling psikologis profesional bagi masyarakat.</p>
                <div class="bg-primary/10 text-primary font-bold text-xl px-4 py-3 rounded-lg text-center mt-auto">
                    0811-8436-633
                </div>
            </div>

            <!-- Layanan Gawat Darurat Umum -->
            <div class="bg-surface-container-lowest p-8 rounded-2xl shadow-[0_10px_30px_rgba(176,212,227,0.2)] border border-surface-container-high/50 hover:shadow-[0_15px_40px_rgba(176,212,227,0.3)] transition-all flex flex-col h-full group">
                <div class="w-14 h-14 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">local_hospital</span>
                </div>
                <h2 class="font-headline-md text-headline-md text-on-surface mb-2">Gawat Darurat Nasional</h2>
                <p class="font-body-md text-body-md text-on-surface-variant mb-8 flex-grow">Nomor darurat terpadu untuk meminta bantuan ambulans dan respon medis cepat terdekat.</p>
                <div class="bg-secondary/10 text-on-secondary-fixed font-bold text-xl px-4 py-3 rounded-lg text-center mt-auto">
                    112 / 119
                </div>
            </div>
        </div>
    </main>

    <?php include 'components/footer.php'; ?>
</body>
</html>

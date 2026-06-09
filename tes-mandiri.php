<?php
session_start();
// Clear any previous test session so we can start fresh
if (isset($_SESSION['answers'])) {
    unset($_SESSION['answers']);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>MentalHealth - Tes Mandiri</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
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
<body class="bg-background text-on-surface font-body-md text-body-md antialiased min-h-screen relative overflow-x-hidden pt-20 pb-24 md:pb-0">
    <div class="fixed top-[-10%] left-[-10%] w-[50%] h-[50%] bg-surface-container rounded-full mix-blend-multiply filter blur-[100px] opacity-60 pointer-events-none -z-10"></div>
    <div class="fixed bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-secondary-fixed rounded-full mix-blend-multiply filter blur-[100px] opacity-40 pointer-events-none -z-10"></div>

    <?php include 'components/navbar.php'; ?>

    <main class="max-w-7xl mx-auto px-container-padding-mobile md:px-container-padding-desktop py-section-gap flex flex-col gap-section-gap z-10 relative mt-16 md:mt-24">
        <section class="flex flex-col items-center text-center max-w-3xl mx-auto mt-8 md:mt-16 gap-unit">
            <h1 class="font-display-lg text-display-lg text-on-surface mb-4">Ruang <span class="text-primary">Tenang</span> untuk Merefleksikan Diri</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant">Bagaimana perasaanmu hari ini? Mari kita mulai perjalananmu pelan-pelan. Tes mandiri ini dirancang sebagai langkah awal untuk mengenali kondisimu dengan cara yang nyaman dan suportif.</p>
        </section>

        <section class="flex justify-center w-full">
            <div class="max-w-2xl w-full bg-surface-container-lowest rounded-2xl shadow-[0_10px_40px_rgba(176,212,227,0.3)] p-8 md:p-12 flex flex-col items-center text-center border border-surface-container-high/50 hover:shadow-[0_15px_50px_rgba(176,212,227,0.4)] transition-all duration-300 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary-container rounded-full mix-blend-multiply opacity-20 transform translate-x-1/3 -translate-y-1/3 blur-3xl transition-transform duration-500 group-hover:scale-110"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 bg-secondary-container rounded-full mix-blend-multiply opacity-20 transform -translate-x-1/3 translate-y-1/3 blur-2xl transition-transform duration-500 group-hover:scale-110"></div>
                
                <div class="w-20 h-20 rounded-full bg-surface-container-low flex items-center justify-center mb-6 group-hover:bg-primary-container transition-colors duration-300 relative z-10 shadow-sm">
                    <span class="material-symbols-outlined text-primary text-4xl" style="font-variation-settings: 'FILL' 1;">psychology</span>
                </div>
                
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4 relative z-10">Skrining Kesehatan Mental (DASS-21)</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-10 relative z-10 max-w-lg">
                    Tes ini akan membantu mengevaluasi tingkat <strong class="text-on-surface">Depresi</strong>, <strong class="text-on-surface">Kecemasan</strong>, dan <strong class="text-on-surface">Stres</strong> yang mungkin kamu alami. Terdiri dari 21 pertanyaan singkat yang merefleksikan perasaanmu selama seminggu terakhir.
                </p>
                
                <a href="/tes.php" class="bg-primary text-on-primary font-label-md text-label-md text-center rounded-full py-4 px-10 hover:scale-105 transition-all duration-200 ease-out shadow-[0_4px_14px_rgba(70,101,88,0.3)] relative z-10 text-lg">
                    Mulai Skrining Sekarang
                </a>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; ?>
</body>
</html>
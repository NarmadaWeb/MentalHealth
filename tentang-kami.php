<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Tentang Kami - Jeda</title>
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
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, h4, h5, h6, .font-display-lg, .font-headline-md, .font-headline-lg, .font-headline-lg-mobile { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col selection:bg-primary-container selection:text-on-primary-container">
    <?php include 'components/navbar.php'; ?>

    <main class="flex-grow pt-[120px] pb-section-gap px-container-padding-mobile md:px-container-padding-desktop max-w-7xl mx-auto w-full mt-16 md:mt-24">
        <section class="text-center mb-section-gap max-w-3xl mx-auto">
            <h1 class="font-display-lg text-display-lg text-primary mb-6">Membangun Ruang Tenang</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant">
                Jeda lahir dari kesadaran bahwa kesehatan mental adalah perjalanan yang butuh waktu, empati, dan pendekatan ilmiah yang tepat. Kami hadir untuk memberikan akses awal yang aman.
            </p>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-2 gap-gutter mb-section-gap">
            <div class="bg-surface-container-lowest p-8 rounded-xl shadow-[0_10px_30px_rgba(176,212,227,0.2)] flex flex-col justify-center items-start">
                <div class="bg-primary-container p-3 rounded-full mb-6 text-on-primary-container">
                    <span class="material-symbols-outlined text-3xl">visibility</span>
                </div>
                <h2 class="font-headline-lg text-headline-lg text-primary mb-4">Visi Kami</h2>
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Menciptakan ekosistem digital di mana setiap individu merasa aman untuk memulai refleksi diri tanpa stigma, didukung oleh data dan empati.
                </p>
            </div>
            <div class="bg-surface-container p-8 rounded-xl shadow-[0_10px_30px_rgba(176,212,227,0.2)] flex flex-col justify-center items-start relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-secondary-container rounded-bl-full opacity-50"></div>
                <div class="bg-secondary p-3 rounded-full mb-6 text-on-secondary z-10">
                    <span class="material-symbols-outlined text-3xl">rocket_launch</span>
                </div>
                <h2 class="font-headline-lg text-headline-lg text-primary mb-4 z-10">Misi Kami</h2>
                <p class="font-body-md text-body-md text-on-surface-variant z-10">
                    Menyediakan instrumen skrining awal yang valid secara klinis, mudah diakses, dan memberikan panduan langkah selanjutnya yang jelas dan menenangkan.
                </p>
            </div>
        </section>

        <section class="mb-section-gap bg-surface-container-low rounded-xl p-8 md:p-12 shadow-[0_10px_30px_rgba(176,212,227,0.2)]">
            <h2 class="font-headline-lg text-headline-lg text-primary text-center mb-8">Metodologi Ilmiah Kami</h2>
            <p class="font-body-md text-body-md text-on-surface-variant text-center max-w-2xl mx-auto mb-12">
                Kami menggunakan instrumen yang telah divalidasi secara global untuk memastikan hasil refleksi Anda memiliki dasar keilmuan yang kuat.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-surface p-6 rounded-xl border border-outline-variant/30 flex items-start gap-4">
                    <div class="text-secondary mt-1">
                        <span class="material-symbols-outlined">description</span>
                    </div>
                    <div>
                        <h3 class="font-headline-md text-headline-md text-primary mb-2">DASS-21</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Depression, Anxiety and Stress Scale - 21 Items. Instrumen standar untuk mengukur tingkat keparahan gejala depresi, kecemasan, dan stres.
                        </p>
                    </div>
                </div>
                <div class="bg-surface p-6 rounded-xl border border-outline-variant/30 flex items-start gap-4">
                    <div class="text-secondary mt-1">
                        <span class="material-symbols-outlined">health_and_safety</span>
                    </div>
                    <div>
                        <h3 class="font-headline-md text-headline-md text-primary mb-2">PHQ-9</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Patient Health Questionnaire. Modul spesifik untuk mengukur keparahan gejala depresi dengan tingkat akurasi klinis yang tinggi.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-section-gap text-center">
            <h2 class="font-headline-lg text-headline-lg text-primary mb-12">Tim di Balik Jeda</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-gutter">
                <div class="flex flex-col items-center">
                    <div class="w-32 h-32 rounded-full bg-surface-container-highest mb-4 overflow-hidden shadow-[0_10px_30px_rgba(176,212,227,0.2)]">
                        <img alt="Foto Anggota Tim" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBNmLQ2GhgVeKm2IbRJYcCLKIWWKvjwXV_ikD6bsuZ5LFaLpU_Pd3iqlPMxpLDvBcjPRlPQddPzNcPBq3xWj7S2nH2BY17mI7AkUvnYVzTaqL2_VoPTDNCqE6e449fseACjmVGXNwm6XWdgXxuwmGgEiqp99eT3dtg20EPWUNVvprv1HgbSWi-KtomW78d0yB6gbgUF5MwY0GTq45mYw9-x3eBrS0MimB1gpKlKctDf_88nZUiQGtw9Wid3z8Sn8KnDtWCUFMUu7E"/>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary">Dr. Maya Sari</h3>
                    <p class="font-body-md text-body-md text-secondary">Psikolog Klinis</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-32 h-32 rounded-full bg-surface-container-highest mb-4 overflow-hidden shadow-[0_10px_30px_rgba(176,212,227,0.2)]">
                        <img alt="Foto Anggota Tim" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCB4cicDpuy4twn2MbHVNDgp6yTiWtyQsaLfAh6Vxs3P_q1Bg21KzEM4T-X1JhHXZ5RVazSyVoteq5RP6gYrPTzkeDQCLD2aw5fnT5hcDdmAim_Sb4dTTDuHOhFA112yA5MUun2m7pyr3l1xNnYytdawChuMsKmRbnPYR6uZkCaAm-qL8Y-pxX_LWK4amiw2lfhSAtADLyxRbAJRYzHqIvPc9-a89AX9JjMSEhdPB8ybgOySZIfZCEIdXpkxNL1JhjRFdx57UweFMo"/>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary">Budi Santoso</h3>
                    <p class="font-body-md text-body-md text-secondary">Lead Researcher</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-32 h-32 rounded-full bg-surface-container-highest mb-4 overflow-hidden shadow-[0_10px_30px_rgba(176,212,227,0.2)]">
                        <img alt="Foto Anggota Tim" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuADq0mxZTXu3pi-ZQlaCYRVIL-6W7bCKZ_1DglN3rvW0NGHwlFoRm9a_Vl6EtJFS83QynbxL_LwwQwKrWTa85ksoneFYSRnQOvWnOmq0_aC6XT4asEe-XookAbb9guD82qGk57H1HQuWyMkKWYMIoIocLfYHiJX9RQdqNu9IPoLC68fqiZrXt91AoSugtLGJD4qR0zzTrFZ6miL0Hv9SMn_CndyiK8p_sQ0veYJao0x30ZGXpMDwPPsgTZeu-A5h1V6e-nj4d_7AdM"/>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary">Dina Fitria</h3>
                    <p class="font-body-md text-body-md text-secondary">Product Designer</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; ?>
</body>
</html>
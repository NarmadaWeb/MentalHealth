<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Syarat & Ketentuan - MentalHealth</title>
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

    <main class="max-w-4xl mx-auto px-container-padding-mobile md:px-container-padding-desktop py-section-gap flex-grow mt-16 md:mt-24 z-10 relative">
        <h1 class="font-display-lg text-headline-lg text-primary mb-8 text-center md:text-left">Syarat dan Ketentuan</h1>
        <div class="bg-surface-container-lowest p-8 md:p-12 rounded-2xl shadow-[0_10px_30px_rgba(176,212,227,0.2)] border border-surface-container-high/50 text-on-surface-variant space-y-6">
            <p>Selamat datang di platform MentalHealth. Dengan mengakses dan menggunakan platform ini, Anda setuju untuk terikat oleh syarat dan ketentuan berikut:</p>
            
            <h2 class="text-xl text-primary font-bold mt-8 mb-2">1. Penggunaan Platform</h2>
            <p>Platform MentalHealth dan fitur skrining yang disediakan dirancang semata-mata sebagai alat bantu awal untuk mengenali kondisi dan memfasilitasi kesadaran akan kesehatan mental Anda.</p>
            
            <h2 class="text-xl text-primary font-bold mt-8 mb-2">2. Bukan Pengganti Bantuan Medis</h2>
            <p>Hasil tes dan informasi yang disediakan dalam platform ini bersifat indikatif (berdasarkan DASS-21) dan <strong>bukan merupakan diagnosis medis, psikiatris, maupun psikologis</strong>. MentalHealth tidak bertujuan untuk menggantikan sesi konsultasi, terapi, perawatan, atau saran medis profesional.</p>

            <h2 class="text-xl text-primary font-bold mt-8 mb-2">3. Batasan Tanggung Jawab</h2>
            <p>MentalHealth tidak bertanggung jawab atas segala tindakan, kerugian, konsekuensi, atau keputusan yang Anda ambil berdasarkan hasil atau informasi dari platform ini. Jika Anda atau seseorang yang Anda kenal merasa berada dalam kondisi darurat psikologis (termasuk memiliki kecenderungan menyakiti diri sendiri), harap segera hentikan penggunaan aplikasi ini dan hubungi kontak darurat atau layanan kesehatan profesional secara langsung.</p>

            <h2 class="text-xl text-primary font-bold mt-8 mb-2">4. Modifikasi Layanan</h2>
            <p>Kami berhak untuk mengubah, menangguhkan, atau menghentikan layanan pada platform ini kapan saja tanpa pemberitahuan sebelumnya, demi perbaikan kualitas dan pemeliharaan.</p>
        </div>
    </main>

    <?php include 'components/footer.php'; ?>
</body>
</html>

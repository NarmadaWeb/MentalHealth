<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Sumber Daya - Jeda</title>
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
        .material-symbols-outlined.fill {
            font-variation-settings: 'FILL' 1;
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md antialiased min-h-screen flex flex-col">
    <?php include 'components/navbar.php'; ?>

    <!-- Main Content Canvas -->
    <main class="flex-grow w-full max-w-7xl mx-auto px-container-padding-mobile md:px-container-padding-desktop py-section-gap flex flex-col gap-section-gap mt-16 md:mt-24">
        <!-- Header & Search Section -->
        <section class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 w-full">
            <div class="max-w-2xl">
                <h1 class="font-headline-lg-mobile text-headline-lg-mobile md:font-headline-lg md:text-headline-lg text-primary mb-4">
                    Ruang Baca Tenang
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    Kumpulan artikel, panduan, dan praktik ringan untuk membantumu memahami diri dan menemukan ketenangan di tengah rutinitas.
                </p>
            </div>
            <div class="w-full md:w-auto relative">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">search</span>
                <input class="w-full md:w-72 pl-12 pr-4 py-3 bg-transparent border-0 border-b-2 border-secondary-fixed focus:border-primary focus:ring-0 font-body-md text-body-md text-on-surface transition-colors placeholder:text-outline outline-none" placeholder="Cari topik..." type="text"/>
            </div>
        </section>

        <!-- Filter Chips -->
        <section class="flex flex-wrap gap-3 w-full">
            <button class="px-6 py-2 rounded-full font-label-md text-label-md bg-secondary-container text-on-secondary-container border border-secondary-container transition-all">Semua</button>
            <button class="px-6 py-2 rounded-full font-label-md text-label-md bg-transparent text-on-surface-variant border border-outline-variant hover:bg-surface-variant transition-all">Mindfulness</button>
            <button class="px-6 py-2 rounded-full font-label-md text-label-md bg-transparent text-on-surface-variant border border-outline-variant hover:bg-surface-variant transition-all">Manajemen Stres</button>
            <button class="px-6 py-2 rounded-full font-label-md text-label-md bg-transparent text-on-surface-variant border border-outline-variant hover:bg-surface-variant transition-all">Dunia Kerja</button>
        </section>

        <!-- Featured Article -->
        <section class="w-full rounded-[24px] bg-surface relative overflow-hidden shadow-[0_10px_30px_rgba(176,212,227,0.2)] flex flex-col md:flex-row group">
            <div class="w-full md:w-3/5 h-64 md:h-auto relative overflow-hidden">
                <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDt5rjyNu7prQoL_4eQ99KaatOax9GJkbJHXz1bH7pp5z5Rrupg4qnZR3VOi05XguPl22C2QxUOpnJVS4B5xdbtLzTAm-2X0TpB5olSOY6KVymLMEV0KYmK5Bw1S6lWQRciyY-hELCS0v86Hsa4oB2wv0TK7rKNL1WU92vm0P9mllTYxk2fkvarrKWG7qv70a0gdeEgKzWR0CijoZ1PmdKP6p7EpW7EbE9jBOeH9GTJotLlwhYQxZ-ltP99p1N6wb3NQbpYYigSWHs"/>
                <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-surface/80 md:from-surface/0 to-transparent"></div>
            </div>
            <div class="w-full md:w-2/5 p-8 md:p-12 flex flex-col justify-center bg-surface/90 backdrop-blur-sm z-10">
                <span class="inline-block px-3 py-1 rounded-full bg-surface-container-high text-primary font-label-md text-label-md mb-4 w-max">
                    Artikel Pilihan
                </span>
                <h2 class="font-headline-md text-headline-md text-on-surface mb-4">
                    Memulai Praktik Jurnal Syukur Harian
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant mb-8 line-clamp-3">
                    Luangkan waktu lima menit setiap malam untuk mencatat hal-hal kecil yang bermakna. Langkah sederhana ini terbukti dapat menurunkan tingkat stres dan meningkatkan kualitas tidur.
                </p>
                <button class="flex items-center gap-2 text-primary font-label-md text-label-md hover:opacity-80 transition-opacity w-max group/btn">
                    Baca Selengkapnya
                    <span class="material-symbols-outlined text-[20px] transition-transform group-hover/btn:translate-x-1">arrow_forward</span>
                </button>
            </div>
        </section>

        <!-- Article Grid -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter w-full">
            <article class="bg-surface rounded-xl shadow-[0_10px_30px_rgba(176,212,227,0.1)] hover:shadow-[0_15px_40px_rgba(176,212,227,0.25)] transition-all duration-300 overflow-hidden flex flex-col cursor-pointer group">
                <div class="h-48 w-full relative overflow-hidden">
                    <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAflFzxTu5PF5rY_-Ej5-9lmQ40GEQgcvI9L7H4m-YFiNz28zRGprHOT2LFh4YqxSQpVFhpybtNwyrA0w8HFN37q5QRraba9-0N4GEHcz00vC2RCLSoXT_OHKkn0JTKqwANLBlBxgCCOEmlIWM-qC-Zsh-VfwwGwzEP2E1vUwT3f54nDDA4PNd1F4oYW1xvQxhH4y37mn18adNgd_eOJEgeeMjzFsOPrhwreK1Y6hf27rvIFRIzHBI5fRrBQ1dedrghF36ZRHDqFx0"/>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="material-symbols-outlined text-secondary text-[18px]">spa</span>
                        <span class="font-label-md text-label-md text-secondary">Mindfulness</span>
                    </div>
                    <h3 class="font-headline-md text-[20px] leading-[1.4] font-semibold text-on-surface mb-3 group-hover:text-primary transition-colors">
                        Seni Bernapas: Teknik 4-7-8
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
                        Panduan praktis menenangkan sistem saraf yang terlalu aktif hanya dalam beberapa menit.
                    </p>
                </div>
            </article>

            <article class="bg-surface rounded-xl shadow-[0_10px_30px_rgba(176,212,227,0.1)] hover:shadow-[0_15px_40px_rgba(176,212,227,0.25)] transition-all duration-300 overflow-hidden flex flex-col cursor-pointer group">
                <div class="h-48 w-full relative overflow-hidden bg-surface-container">
                    <div class="absolute inset-0 flex items-center justify-center p-8">
                        <div class="w-32 h-32 rounded-full bg-primary-fixed opacity-60 blur-xl absolute"></div>
                        <span class="material-symbols-outlined text-[64px] text-primary relative z-10">psychology</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="material-symbols-outlined text-secondary text-[18px]">work</span>
                        <span class="font-label-md text-label-md text-secondary">Dunia Kerja</span>
                    </div>
                    <h3 class="font-headline-md text-[20px] leading-[1.4] font-semibold text-on-surface mb-3 group-hover:text-primary transition-colors">
                        Menetapkan Batasan di Tempat Kerja
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
                        Bagaimana mengatakan 'tidak' dengan asertif tanpa merasa bersalah demi menjaga energi mental.
                    </p>
                </div>
            </article>

            <article class="bg-surface rounded-xl shadow-[0_10px_30px_rgba(176,212,227,0.1)] hover:shadow-[0_15px_40px_rgba(176,212,227,0.25)] transition-all duration-300 overflow-hidden flex flex-col cursor-pointer group">
                <div class="h-48 w-full relative overflow-hidden">
                    <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkxmdACNmVtS_gFJO-vePZAdX8CsLbWHqB67VFY2J8Oddn-I7sAc7ZOHZR-LraLX7m_aU0Nr4CnPl-WutqI0PxUNj6zjdeN5VtE3qqVPPbAHNCw36FnNKOpz26Dcs_eI1rfAykDiqbPd2SAo-idDtTGJljaunPQDZcyV8UoJp_VdIxDf-soSEAG0oXC_Nb2mzxjDrQNmOISPdNZAH8RHSPuC8dR8gC0gwHt797JLyiLZIItwnk7_uGIAtObm7rdaeNCjCQZbvDAJM"/>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="material-symbols-outlined text-secondary text-[18px]">favorite</span>
                        <span class="font-label-md text-label-md text-secondary">Manajemen Stres</span>
                    </div>
                    <h3 class="font-headline-md text-[20px] leading-[1.4] font-semibold text-on-surface mb-3 group-hover:text-primary transition-colors">
                        Mengenali Tanda Kelelahan Emosional
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
                        Perbedaan antara lelah fisik dan lelah mental, serta langkah pertama untuk memulihkan diri.
                    </p>
                </div>
            </article>
        </section>

        <!-- Load More Button -->
        <div class="w-full flex justify-center mt-8">
            <button class="px-8 py-3 rounded-full bg-primary text-on-primary font-label-md text-label-md hover:scale-[1.02] transition-transform duration-200 shadow-md">
                Muat Lebih Banyak
            </button>
        </div>
    </main>

    <?php include 'components/footer.php'; ?>
</body>
</html>
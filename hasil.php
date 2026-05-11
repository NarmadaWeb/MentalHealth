<?php
session_start();
require_once 'data_dass21.php';

// Redirect to start if answers are not complete
if (!isset($_SESSION['answers']) || count($_SESSION['answers']) < count($questions)) {
    header("Location: /tes-mandiri");
    exit();
}

$scores = calculate_score($_SESSION['answers']);

$dep_class = get_classification("depression", $scores["depression"]);
$anx_class = get_classification("anxiety", $scores["anxiety"]);
$str_class = get_classification("stress", $scores["stress"]);

$dep_rec = get_recommendation($dep_class);
$anx_rec = get_recommendation($anx_class);
$str_rec = get_recommendation($str_class);

// Find the most severe condition for the main headline
$severities = ["Normal" => 1, "Ringan" => 2, "Sedang" => 3, "Parah" => 4, "Sangat Parah" => 5];
$max_severity = 0;
$main_condition = "Normal";

foreach (["Depresi" => $dep_class, "Kecemasan" => $anx_class, "Stres" => $str_class] as $name => $class) {
    if ($severities[$class] > $max_severity) {
        $max_severity = $severities[$class];
        $main_condition = $name;
    }
}

// Clear session to allow retaking test
// session_destroy();
// Decided not to destroy so user can refresh. Instead, clear later or provide a 'Retake' button.

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>MentalHealth - Hasil Tes</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
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
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col antialiased">
    <?php include 'components/navbar.php'; ?>

    <main class="flex-grow w-full max-w-4xl mx-auto px-container-padding-mobile md:px-0 py-section-gap flex flex-col relative z-10 mt-16 md:mt-24">
        <!-- Ambient Decor -->
        <div class="fixed top-20 left-0 w-96 h-96 bg-primary-container/20 rounded-full blur-[100px] -z-10 pointer-events-none"></div>
        <div class="fixed bottom-20 right-0 w-[500px] h-[500px] bg-secondary-container/20 rounded-full blur-[120px] -z-10 pointer-events-none"></div>

        <div class="bg-surface/80 backdrop-blur-2xl rounded-[32px] p-8 md:p-12 shadow-[0_20px_60px_rgba(176,212,227,0.15)] border border-white/40">
            <div class="text-center mb-10">
                <span class="inline-block p-4 rounded-full bg-primary-container/20 mb-4">
                    <span class="material-symbols-outlined text-primary text-4xl" style="font-variation-settings: 'FILL' 1;">psychology_alt</span>
                </span>
                <h1 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface mb-4">
                    Hasil Refleksi Diri Anda
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    Terima kasih telah meluangkan waktu untuk mengevaluasi kondisi Anda.
                    <br/> Fokus utama saat ini mungkin terkait dengan gejala <strong><?php echo $main_condition; ?></strong> (Kategori: <?php
                        if ($main_condition == "Depresi") echo $dep_class;
                        elseif ($main_condition == "Kecemasan") echo $anx_class;
                        else echo $str_class;
                    ?>).
                </p>
            </div>

            <div class="space-y-8">
                <!-- Depresi -->
                <div class="p-6 rounded-2xl bg-surface-bright border border-outline-variant/30 shadow-sm flex flex-col md:flex-row gap-6 items-start">
                    <div class="w-16 h-16 shrink-0 rounded-full bg-tertiary-container flex items-center justify-center text-tertiary">
                        <span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1;">nightlight</span>
                    </div>
                    <div class="flex-grow">
                        <div class="flex justify-between items-center mb-2">
                            <h2 class="font-headline-md text-headline-md text-on-surface">Depresi</h2>
                            <span class="px-3 py-1 rounded-full text-sm font-bold <?php echo ($dep_class == 'Normal') ? 'bg-primary-container text-on-primary-container' : 'bg-error-container text-on-error-container'; ?>">
                                <?php echo $dep_class; ?> (<?php echo $scores['depression']; ?>)
                            </span>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant"><?php echo $dep_rec; ?></p>
                    </div>
                </div>

                <!-- Kecemasan -->
                <div class="p-6 rounded-2xl bg-surface-bright border border-outline-variant/30 shadow-sm flex flex-col md:flex-row gap-6 items-start">
                    <div class="w-16 h-16 shrink-0 rounded-full bg-primary-container flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1;">air</span>
                    </div>
                    <div class="flex-grow">
                        <div class="flex justify-between items-center mb-2">
                            <h2 class="font-headline-md text-headline-md text-on-surface">Kecemasan</h2>
                            <span class="px-3 py-1 rounded-full text-sm font-bold <?php echo ($anx_class == 'Normal') ? 'bg-primary-container text-on-primary-container' : 'bg-error-container text-on-error-container'; ?>">
                                <?php echo $anx_class; ?> (<?php echo $scores['anxiety']; ?>)
                            </span>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant"><?php echo $anx_rec; ?></p>
                    </div>
                </div>

                <!-- Stres -->
                <div class="p-6 rounded-2xl bg-surface-bright border border-outline-variant/30 shadow-sm flex flex-col md:flex-row gap-6 items-start">
                    <div class="w-16 h-16 shrink-0 rounded-full bg-secondary-container flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1;">waves</span>
                    </div>
                    <div class="flex-grow">
                        <div class="flex justify-between items-center mb-2">
                            <h2 class="font-headline-md text-headline-md text-on-surface">Stres</h2>
                            <span class="px-3 py-1 rounded-full text-sm font-bold <?php echo ($str_class == 'Normal') ? 'bg-primary-container text-on-primary-container' : 'bg-error-container text-on-error-container'; ?>">
                                <?php echo $str_class; ?> (<?php echo $scores['stress']; ?>)
                            </span>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant"><?php echo $str_rec; ?></p>
                    </div>
                </div>
            </div>

            <div class="mt-12 flex flex-col sm:flex-row justify-center items-center gap-4 border-t border-outline-variant/20 pt-8">
                <a href="pusat-ketenangan" class="flex items-center justify-center gap-2 px-8 py-4 w-full sm:w-auto rounded-full bg-primary text-on-primary font-label-md text-label-md hover:scale-[1.02] transition-transform shadow-[0_4px_14px_rgba(70,101,88,0.3)]">
                    Kunjungi Pusat Ketenangan
                    <span class="material-symbols-outlined text-[20px]">spa</span>
                </a>
                <a href="tes-mandiri" class="flex items-center justify-center gap-2 px-8 py-4 w-full sm:w-auto rounded-full bg-surface-container-highest text-primary font-label-md text-label-md hover:scale-[1.02] transition-transform">
                    Kembali ke Beranda
                </a>
            </div>

            <p class="text-center text-sm text-on-surface-variant opacity-70 mt-8">
                *Catatan: Hasil ini dihasilkan oleh sistem berbasis aturan (DASS-21) dan bukan merupakan diagnosis medis. Jika Anda merasa tidak nyaman, harap hubungi tenaga medis profesional.
            </p>
        </div>
    </main>

    <?php include 'components/footer.php'; ?>
</body>
</html>
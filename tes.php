<?php
session_start();
require_once 'data_dass21.php';

// Initialize session answers if not set
if (!isset($_SESSION['answers'])) {
    $_SESSION['answers'] = [];
}

// Handle answer submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['question_id']) && isset($_POST['assessment'])) {
        $q_id = (int)$_POST['question_id'];
        $answer = (int)$_POST['assessment'];
        $_SESSION['answers'][$q_id] = $answer;

        // Go to next question
        $next_q = $q_id + 1;
        if ($next_q > count($questions)) {
            // Test finished
            header("Location: hasil");
            exit();
        } else {
            header("Location: tes?q=" . $next_q);
            exit();
        }
    }
}

// Determine current question
$current_q = isset($_GET['q']) ? (int)$_GET['q'] : 1;
if ($current_q < 1) $current_q = 1;
if ($current_q > count($questions)) $current_q = count($questions);

$total_q = count($questions);
$progress_percent = round((($current_q - 1) / $total_q) * 100);

$question_text = $questions[$current_q]['text'];
$selected_option = isset($_SESSION['answers'][$current_q]) ? $_SESSION['answers'][$current_q] : null;

// Handle back button
$prev_q = $current_q - 1;
$back_url = $prev_q > 0 ? "tes?q=$prev_q" : "tes-mandiri";

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Jeda - Tes Mandiri</title>
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
<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col antialiased selection:bg-primary-container selection:text-on-primary-container">
    <!-- TopAppBar -->
    <header class="sticky top-0 z-50 bg-surface/70 dark:bg-surface-dim/70 backdrop-blur-xl shadow-[0_10px_30px_rgba(176,212,227,0.2)]">
        <div class="flex justify-between items-center w-full px-container-padding-mobile md:px-container-padding-desktop h-20 max-w-7xl mx-auto">
            <!-- Brand Logo -->
            <a class="font-display-lg text-headline-md text-primary dark:text-primary-fixed tracking-tight" href="/">Jeda</a>
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex gap-8 items-center">
                <a class="text-on-surface-variant font-body-md text-body-md hover:text-primary transition-colors duration-300" href="/">Beranda</a>
                <a class="text-primary font-bold border-b-2 border-primary pb-1 font-body-md text-body-md hover:text-primary transition-colors duration-300" href="tes-mandiri">Tes Mandiri</a>
                <a class="text-on-surface-variant font-body-md text-body-md hover:text-primary transition-colors duration-300" href="pusat-ketenangan">Pusat Ketenangan</a>
                <a class="text-on-surface-variant font-body-md text-body-md hover:text-primary transition-colors duration-300" href="sumber-daya">Sumber Daya</a>
                <a class="text-on-surface-variant font-body-md text-body-md hover:text-primary transition-colors duration-300" href="tentang-kami">Tentang Kami</a>
            </nav>
            <!-- Trailing Actions -->
            <div class="flex items-center gap-4">
                <button aria-label="Profil Pengguna" class="text-primary hover:text-primary transition-colors duration-300 scale-105 transition-transform duration-200">
                    <span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 0;">account_circle</span>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content Canvas -->
    <main class="flex-grow w-full max-w-3xl mx-auto px-container-padding-mobile md:px-0 py-section-gap flex flex-col relative z-10">
        <!-- Ambient Decor -->
        <div class="fixed top-20 left-0 w-96 h-96 bg-primary-container/20 rounded-full blur-[100px] -z-10 pointer-events-none"></div>
        <div class="fixed bottom-20 right-0 w-[500px] h-[500px] bg-secondary-container/20 rounded-full blur-[120px] -z-10 pointer-events-none"></div>

        <!-- Progress Indicator -->
        <div class="w-full mb-12">
            <div class="flex justify-between items-center mb-3">
                <span class="font-label-md text-label-md text-primary font-bold">Pertanyaan <?php echo $current_q; ?> dari <?php echo $total_q; ?></span>
                <span class="font-label-md text-label-md text-on-surface-variant"><?php echo $progress_percent; ?>% Selesai</span>
            </div>
            <div class="h-1.5 w-full bg-surface-container-highest rounded-full overflow-hidden relative">
                <div class="h-full bg-primary rounded-full transition-all duration-500 ease-out relative" style="width: <?php echo $progress_percent; ?>%;">
                    <!-- Guiding light particle -->
                    <div class="absolute right-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-white rounded-full shadow-[0_0_8px_rgba(255,255,255,0.8)]"></div>
                </div>
            </div>
        </div>

        <!-- Assessment Container -->
        <form method="POST" action="tes" class="bg-surface/80 backdrop-blur-2xl rounded-[32px] p-8 md:p-12 shadow-[0_20px_60px_rgba(176,212,227,0.15)] border border-white/40">
            <input type="hidden" name="question_id" value="<?php echo $current_q; ?>" />

            <!-- Question -->
            <h1 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface mb-8 text-center leading-tight">
                <?php echo htmlspecialchars($question_text); ?>
            </h1>
            <p class="text-center font-label-md text-label-md text-on-surface-variant mb-10 opacity-80">Pilih yang paling sesuai dengan kondisi Anda selama 1 minggu terakhir</p>

            <!-- Options Grid -->
            <div class="flex flex-col gap-4">
                <?php foreach ($options as $val => $label): ?>
                    <?php
                        $is_checked = ($selected_option !== null && $selected_option == $val) ? 'checked' : '';
                        $checked_classes = $is_checked ? 'border-primary bg-primary-container/10 shadow-[0_8px_20px_rgba(70,101,88,0.1)]' : 'border-secondary-fixed-dim/40 bg-surface-bright hover:border-primary/50 hover:bg-surface-container-low';
                        $icon_classes = $is_checked ? 'border-primary bg-primary' : 'border-outline-variant group-hover:border-primary';
                        $icon_opacity = $is_checked ? 'opacity-100' : 'opacity-0 peer-checked:opacity-100';
                        $text_classes = $is_checked ? '' : 'group-hover:text-primary';
                    ?>
                    <label class="group relative cursor-pointer">
                        <input class="peer sr-only" name="assessment" type="radio" value="<?php echo $val; ?>" required <?php echo $is_checked; ?> onchange="this.form.submit()"/>
                        <div class="w-full p-6 border-2 rounded-xl flex items-center gap-4 transition-all duration-300 peer-checked:border-primary peer-checked:bg-primary-container/10 peer-checked:shadow-[0_8px_20px_rgba(70,101,88,0.1)] <?php echo $checked_classes; ?>">
                            <div class="w-6 h-6 rounded-full border-2 flex items-center justify-center transition-colors peer-checked:border-primary peer-checked:bg-primary <?php echo $icon_classes; ?>">
                                <span class="material-symbols-outlined text-white text-[16px] transition-opacity <?php echo $icon_opacity; ?>" style="font-variation-settings: 'FILL' 1;">check</span>
                            </div>
                            <span class="font-body-lg text-body-lg text-on-surface transition-colors <?php echo $text_classes; ?>"><?php echo htmlspecialchars($label); ?></span>
                        </div>
                    </label>
                <?php endforeach; ?>
            </div>

            <!-- Navigation Actions -->
            <div class="mt-12 flex justify-between items-center border-t border-outline-variant/20 pt-8">
                <a href="<?php echo $back_url; ?>" class="flex items-center gap-2 px-6 py-3 rounded-full text-primary font-label-md text-label-md hover:bg-primary/5 transition-colors">
                    <span class="material-symbols-outlined text-[20px]">arrow_back</span>
                    Kembali
                </a>
                <button type="submit" class="flex items-center gap-2 px-8 py-4 rounded-full bg-primary text-on-primary font-label-md text-label-md hover:scale-[1.02] transition-transform shadow-[0_4px_14px_rgba(70,101,88,0.3)]">
                    <?php echo ($current_q == $total_q) ? 'Selesai' : 'Selanjutnya'; ?>
                    <span class="material-symbols-outlined text-[20px]"><?php echo ($current_q == $total_q) ? 'check' : 'arrow_forward'; ?></span>
                </button>
            </div>
        </form>
    </main>

    <!-- BottomNavBar (Mobile Only) -->
    <nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 py-3 md:hidden bg-surface/80 backdrop-blur-2xl shadow-[0_-5px_20px_rgba(176,212,227,0.15)] rounded-t-xl">
        <a class="flex flex-col items-center justify-center text-on-surface-variant hover:opacity-80 transition-opacity" href="/">
            <span class="material-symbols-outlined text-[24px]">home</span>
            <span class="font-label-md text-[10px] mt-1">Beranda</span>
        </a>
        <a class="flex flex-col items-center justify-center bg-secondary-container text-on-secondary-container rounded-full px-6 py-2 hover:opacity-80 transition-opacity scale-95 duration-200 ease-out" href="tes-mandiri">
            <span class="material-symbols-outlined text-[24px]" style="font-variation-settings: 'FILL' 1;">self_care</span>
            <span class="font-label-md text-[10px] mt-1 font-bold">Mulai Tes</span>
        </a>
        <a class="flex flex-col items-center justify-center text-on-surface-variant hover:opacity-80 transition-opacity" href="pusat-ketenangan">
            <span class="material-symbols-outlined text-[24px]">spa</span>
            <span class="font-label-md text-[10px] mt-1">Bantuan</span>
        </a>
    </nav>

    <!-- Footer -->
    <footer class="w-full py-section-gap px-container-padding-mobile md:px-container-padding-desktop border-t border-outline-variant/30 text-center bg-surface-container-low mt-auto pb-24 md:pb-section-gap">
        <div class="max-w-4xl mx-auto flex flex-col items-center gap-6">
            <p class="font-body-md text-body-md text-on-surface-variant opacity-80 max-w-2xl mx-auto">
                © 2024 Jeda. Hasil tes ini hanya untuk keperluan refleksi diri dan skrining awal. Bukan pengganti diagnosis profesional.
            </p>
        </div>
    </footer>
</body>
</html>
<?php
$current_path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$current_path = ltrim($current_path, '/');

// active helper
if (!function_exists('is_active')) {
    function is_active($path, $current_path) {
        if ($path === '/' && ($current_path === '' || $current_path === 'home')) {
            return true;
        }
        if ($path !== '/' && strpos($current_path, ltrim($path, '/')) === 0) {
            return true;
        }
        return false;
    }
}

$nav_items = [
    '/' => 'Beranda',
    '/tes-mandiri' => 'Tes Mandiri',
    '/pusat-ketenangan' => 'Pusat Ketenangan',
    '/tentang-kami' => 'Tentang Kami'
];
?>
<header class="fixed top-0 w-full z-50 bg-surface/70 backdrop-blur-xl shadow-[0_10px_30px_rgba(176,212,227,0.2)]">
    <div class="flex justify-between items-center w-full px-container-padding-mobile md:px-container-padding-desktop h-20 max-w-7xl mx-auto">
        <a href="/" class="flex items-center gap-2">
            <span class="font-display-lg text-headline-md text-primary tracking-tight">MentalHealth</span>
        </a>
        <nav class="hidden md:flex items-center gap-8 h-full">
            <?php foreach ($nav_items as $url => $label): ?>
                <?php if (is_active($url, $current_path) || ($url === '/tes-mandiri' && $current_path === 'tes')): ?>
                    <a class="text-primary font-bold border-b-2 border-primary pb-1 font-body-md text-body-md transition-colors duration-300 h-full flex items-center px-2" href="<?php echo $url; ?>"><?php echo $label; ?></a>
                <?php else: ?>
                    <a class="text-on-surface-variant font-body-md text-body-md hover:text-primary transition-colors duration-300 h-full flex items-center px-2 pb-1" href="<?php echo $url; ?>"><?php echo $label; ?></a>
                <?php endif; ?>
            <?php endforeach; ?>
        </nav>

    </div>
</header>

<!-- BottomNavBar (Mobile Only) -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 py-3 md:hidden bg-surface/80 backdrop-blur-2xl shadow-[0_-5px_20px_rgba(176,212,227,0.15)] rounded-t-xl pb-6">
    <a class="flex flex-col items-center justify-center <?php echo is_active('/', $current_path) ? 'bg-secondary-container text-on-secondary-container rounded-full px-6 py-2 scale-95 duration-200 ease-out shadow-sm' : 'text-on-surface-variant hover:opacity-80 transition-opacity'; ?> font-label-md text-label-md gap-1" href="/">
        <span class="material-symbols-outlined" <?php echo is_active('/', $current_path) ? 'style="font-variation-settings: \'FILL\' 1;"' : ''; ?>>home</span>
        <span class="text-[10px] md:text-sm">Beranda</span>
    </a>
    <a class="flex flex-col items-center justify-center <?php echo (is_active('/tes-mandiri', $current_path) || $current_path === 'tes') ? 'bg-secondary-container text-on-secondary-container rounded-full px-6 py-2 scale-95 duration-200 ease-out shadow-sm' : 'text-on-surface-variant hover:opacity-80 transition-opacity'; ?> font-label-md text-label-md gap-1" href="/tes-mandiri">
        <span class="material-symbols-outlined" <?php echo (is_active('/tes-mandiri', $current_path) || $current_path === 'tes') ? 'style="font-variation-settings: \'FILL\' 1;"' : ''; ?>>self_care</span>
        <span class="text-[10px] md:text-sm">Mulai Tes</span>
    </a>
    <a class="flex flex-col items-center justify-center <?php echo is_active('/pusat-ketenangan', $current_path) ? 'bg-secondary-container text-on-secondary-container rounded-full px-6 py-2 scale-95 duration-200 ease-out shadow-sm' : 'text-on-surface-variant hover:opacity-80 transition-opacity'; ?> font-label-md text-label-md gap-1" href="/pusat-ketenangan">
        <span class="material-symbols-outlined" <?php echo is_active('/pusat-ketenangan', $current_path) ? 'style="font-variation-settings: \'FILL\' 1;"' : ''; ?>>spa</span>
        <span class="text-[10px] md:text-sm">Bantuan</span>
    </a>
</nav>
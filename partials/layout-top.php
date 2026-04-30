<?php
$page       = $page ?? [];
$pageTitle  = $page['title']       ?? 'IT Migration Services';
$pageDesc   = $page['description'] ?? '';
$pageCanon  = $page['canonical']   ?? 'https://itmigrationservices.com/';
$activePage = $page['active']      ?? 'home';

$mainNav = [
    ['label' => 'Home',         'href' => './',           'key' => 'home'],
    ['label' => 'How It Works', 'href' => 'how-it-works', 'key' => 'how'],
    ['label' => 'Pricing',      'href' => '#',            'key' => 'pricing'],
];

$solutions = [
    ['label' => 'Microsoft 365 Migration', 'href' => 'microsoft-365',         'key' => 'm365'],
    ['label' => 'M&A IT Migration',        'href' => 'mergers-and-acquisition','key' => 'ma'],
    ['label' => 'Cloud Migration',         'href' => 'contact',               'key' => 'cloud'],
    ['label' => 'Data Migration',          'href' => 'contact',               'key' => 'data'],
    ['label' => 'Application Migration',   'href' => 'contact',               'key' => 'app'],
    ['label' => 'Identity & Security',     'href' => 'contact',               'key' => 'identity'],
];

$solutionKeys = array_column($solutions, 'key');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDesc,   ENT_QUOTES, 'UTF-8') ?>">
  <link rel="canonical"    href="<?= htmlspecialchars($pageCanon,  ENT_QUOTES, 'UTF-8') ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { sans: ['Inter', 'sans-serif'] },
          colors: {
            brand: {
              50:  '#eff6ff',
              100: '#dbeafe',
              200: '#bfdbfe',
              500: '#3b82f6',
              600: '#2563eb',
              700: '#1d4ed8',
              800: '#1e40af',
              900: '#1e3a8a',
            }
          },
          animation: {
            'float': 'float 6s ease-in-out infinite',
            'fade-up': 'fadeUp 0.6s ease both',
          },
          keyframes: {
            float:   { '0%,100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-12px)' } },
            fadeUp:  { from: { opacity: '0', transform: 'translateY(16px)' }, to: { opacity: '1', transform: 'translateY(0)' } },
          }
        }
      }
    }
  </script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    body { font-family: 'Inter', sans-serif; }
    .nav-dd-group:hover .nav-dd { display: block; }
    .nav-dd { display: none; }
    #mobile-menu.open { display: block; }
    .faq-answer { display: none; }
    .faq-item.open .faq-answer { display: block; }
    .faq-item.open .faq-chevron { transform: rotate(180deg); }
    .faq-chevron { transition: transform 0.2s ease; }
    .animate-float { animation: float 6s ease-in-out infinite; }
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50%       { transform: translateY(-12px); }
    }
  </style>
</head>
<body class="bg-white text-gray-900 antialiased">

<!-- ── Header ─────────────────────────────────────────────────────── -->
<header class="bg-white border-b border-gray-100 sticky top-0 z-50 shadow-sm">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">

      <!-- Logo -->
      <a href="./" class="flex items-center gap-2.5 shrink-0">
        <div class="w-9 h-9 bg-blue-600 rounded-xl flex items-center justify-center shadow-md">
          <i data-lucide="waypoints" class="w-4 h-4 text-white"></i>
        </div>
        <span class="font-bold text-gray-900 text-sm tracking-tight hidden sm:block">IT Migration Services</span>
      </a>

      <!-- Desktop nav -->
      <nav class="hidden lg:flex items-center gap-0.5">
        <?php foreach ($mainNav as $item): ?>
          <a href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>"
             class="px-4 py-2 rounded-full text-sm font-medium transition-colors
                    <?= $activePage === $item['key']
                        ? 'text-blue-600 bg-blue-50'
                        : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50' ?>">
            <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
          </a>
        <?php endforeach; ?>

        <!-- Solutions dropdown -->
        <div class="nav-dd-group relative">
          <button class="flex items-center gap-1.5 px-4 py-2 rounded-full text-sm font-medium transition-colors
                         <?= in_array($activePage, $solutionKeys, true)
                             ? 'text-blue-600 bg-blue-50'
                             : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50' ?>">
            IT Migration Solutions
            <i data-lucide="chevron-down" class="w-3.5 h-3.5"></i>
          </button>
          <div class="nav-dd absolute left-0 top-full pt-2 w-64 z-50">
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 py-2">
              <p class="px-4 pt-1 pb-1.5 text-[10px] text-gray-400 uppercase tracking-widest font-semibold">Solutions</p>
              <?php foreach ($solutions as $sol): ?>
                <a href="<?= htmlspecialchars($sol['href'], ENT_QUOTES, 'UTF-8') ?>"
                   class="flex items-center justify-between mx-1.5 px-3 py-2.5 rounded-xl text-sm font-medium transition-colors
                          <?= $activePage === $sol['key']
                              ? 'bg-blue-50 text-blue-700'
                              : 'text-gray-700 hover:bg-gray-50 hover:text-gray-900' ?>">
                  <span><?= htmlspecialchars($sol['label'], ENT_QUOTES, 'UTF-8') ?></span>
                  <i data-lucide="arrow-up-right" class="w-3.5 h-3.5 text-gray-400 shrink-0"></i>
                </a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </nav>

      <!-- Right side -->
      <div class="flex items-center gap-2">
        <a href="contact"
           class="hidden lg:inline-flex items-center gap-1.5 px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-50 hover:border-gray-400 transition-colors">
          Contact
          <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
        </a>
        <button id="mobile-menu-btn"
                class="lg:hidden p-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors"
                aria-label="Open navigation">
          <i data-lucide="menu" class="w-5 h-5"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile menu -->
  <div id="mobile-menu" class="hidden lg:hidden border-t border-gray-100 bg-white">
    <div class="max-w-7xl mx-auto px-4 py-3 space-y-0.5">
      <?php foreach ($mainNav as $item): ?>
        <a href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>"
           class="block px-3 py-2.5 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
          <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
        </a>
      <?php endforeach; ?>
      <div class="pt-2">
        <p class="px-3 pb-1 text-[10px] text-gray-400 uppercase tracking-widest font-semibold">IT Migration Solutions</p>
        <?php foreach ($solutions as $sol): ?>
          <a href="<?= htmlspecialchars($sol['href'], ENT_QUOTES, 'UTF-8') ?>"
             class="block px-3 py-2.5 rounded-lg text-sm text-gray-600 hover:bg-gray-50 hover:text-gray-900">
            <?= htmlspecialchars($sol['label'], ENT_QUOTES, 'UTF-8') ?>
          </a>
        <?php endforeach; ?>
      </div>
      <a href="contact"
         class="block mt-1 px-3 py-2.5 rounded-lg text-sm font-semibold text-blue-600 border border-blue-200 bg-blue-50 text-center">
        Contact Us
      </a>
    </div>
  </div>
</header>

<main>

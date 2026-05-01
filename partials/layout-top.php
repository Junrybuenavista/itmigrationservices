<?php
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

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
    ['label' => 'Microsoft 365 Migration', 'href' => 'microsoft-365',          'key' => 'm365'],
    ['label' => 'M&A IT Migration',        'href' => 'mergers-and-acquisition', 'key' => 'ma'],
    ['label' => 'Cloud Migration',         'href' => 'contact',                'key' => 'cloud'],
    ['label' => 'Data Migration',          'href' => 'contact',                'key' => 'data'],
    ['label' => 'Application Migration',   'href' => 'contact',                'key' => 'app'],
    ['label' => 'Identity & Security',     'href' => 'contact',                'key' => 'identity'],
];
$solutionKeys = array_column($solutions, 'key');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDesc,  ENT_QUOTES, 'UTF-8') ?>">
  <link rel="canonical"    href="<?= htmlspecialchars($pageCanon, ENT_QUOTES, 'UTF-8') ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,400;0,14..32,500;0,14..32,600;0,14..32,700;0,14..32,800;0,14..32,900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com?v=<?= time() ?>"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { sans: ['Inter','sans-serif'] },
        }
      }
    }
  </script>
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
  <style>
    *{font-family:'Inter',sans-serif}
    .dd-group:hover .dd-menu{display:block}
    .dd-menu{display:none;position:absolute;left:0;top:100%;padding-top:8px;width:260px;z-index:99}
    .faq-answer{display:none}
    .faq-open .faq-answer{display:block}
    .faq-open .faq-icon{transform:rotate(180deg)}
    .faq-icon{transition:transform .2s}
    .float{animation:float 5s ease-in-out infinite}
    @keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}
  </style>
</head>
<body class="bg-white text-gray-900">

<!-- NAV -->
<header class="bg-white sticky top-0 z-50 shadow-sm border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">

    <a href="./" class="flex items-center gap-2">
      <div class="w-9 h-9 bg-blue-600 rounded-xl flex items-center justify-center">
        <i data-lucide="waypoints" class="w-4 h-4 text-white"></i>
      </div>
      <span class="font-bold text-gray-900 text-sm">IT Migration Services</span>
    </a>

    <nav class="hidden lg:flex items-center gap-1">
      <?php foreach ($mainNav as $n): ?>
        <a href="<?= htmlspecialchars($n['href'],ENT_QUOTES,'UTF-8') ?>"
           class="px-4 py-2 rounded-full text-sm font-medium <?= $activePage===$n['key']?'text-blue-600 bg-blue-50':'text-gray-600 hover:text-gray-900 hover:bg-gray-50' ?>">
          <?= htmlspecialchars($n['label'],ENT_QUOTES,'UTF-8') ?>
        </a>
      <?php endforeach; ?>

      <div class="dd-group relative">
        <button class="flex items-center gap-1 px-4 py-2 rounded-full text-sm font-medium <?= in_array($activePage,$solutionKeys)?'text-blue-600 bg-blue-50':'text-gray-600 hover:text-gray-900 hover:bg-gray-50' ?>">
          IT Migration Solutions <i data-lucide="chevron-down" class="w-3.5 h-3.5"></i>
        </button>
        <div class="dd-menu">
          <div class="bg-white rounded-2xl shadow-xl border border-gray-100 py-2">
            <p class="px-4 py-1 text-[10px] text-gray-400 uppercase tracking-widest font-semibold">Solutions</p>
            <?php foreach ($solutions as $s): ?>
              <a href="<?= htmlspecialchars($s['href'],ENT_QUOTES,'UTF-8') ?>"
                 class="flex items-center justify-between mx-1.5 px-3 py-2.5 rounded-xl text-sm <?= $activePage===$s['key']?'bg-blue-50 text-blue-700 font-semibold':'text-gray-700 hover:bg-gray-50' ?>">
                <span><?= htmlspecialchars($s['label'],ENT_QUOTES,'UTF-8') ?></span>
                <i data-lucide="arrow-up-right" class="w-3.5 h-3.5 text-gray-400 shrink-0"></i>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </nav>

    <div class="flex items-center gap-2">
      <a href="contact" class="hidden lg:inline-flex items-center gap-1.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-colors">
        Contact <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
      </a>
      <button id="mob-btn" class="lg:hidden p-2 text-gray-600 hover:bg-gray-100 rounded-lg">
        <i data-lucide="menu" class="w-5 h-5"></i>
      </button>
    </div>
  </div>

  <div id="mob-menu" class="hidden lg:hidden border-t border-gray-100 px-4 py-3 space-y-1">
    <?php foreach ($mainNav as $n): ?>
      <a href="<?= htmlspecialchars($n['href'],ENT_QUOTES,'UTF-8') ?>" class="block px-3 py-2.5 rounded-lg text-sm text-gray-700 hover:bg-gray-50"><?= htmlspecialchars($n['label'],ENT_QUOTES,'UTF-8') ?></a>
    <?php endforeach; ?>
    <p class="px-3 pt-2 pb-1 text-[10px] text-gray-400 uppercase tracking-widest font-semibold">Solutions</p>
    <?php foreach ($solutions as $s): ?>
      <a href="<?= htmlspecialchars($s['href'],ENT_QUOTES,'UTF-8') ?>" class="block px-3 py-2.5 rounded-lg text-sm text-gray-600 hover:bg-gray-50"><?= htmlspecialchars($s['label'],ENT_QUOTES,'UTF-8') ?></a>
    <?php endforeach; ?>
    <a href="contact" class="block mt-2 px-3 py-2.5 rounded-lg text-sm font-semibold text-center text-white bg-blue-600">Contact</a>
  </div>
</header>

<main>

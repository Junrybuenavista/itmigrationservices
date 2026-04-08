<?php
$page = $page ?? [];
$pageTitle = $page['title'] ?? 'Migration Services';
$pageDescription = $page['description'] ?? '';
$pageCanonical = $page['canonical'] ?? 'https://itmigrationservices.com/';
$activePage = $page['active'] ?? 'home';
$bodyClass = $page['body_class'] ?? 'site-shell';

$mainNav = [
    ['label' => 'Home', 'href' => './', 'key' => 'home'],
    ['label' => 'How It Works', 'href' => 'how-it-works', 'key' => 'how'],
    ['label' => 'Pricing', 'href' => '#', 'key' => 'pricing'],
];

$solutions = [
    ['label' => 'Microsoft 365 Migration', 'href' => 'microsoft-365', 'key' => 'm365'],
    ['label' => 'M&A IT Migration', 'href' => 'mergers-and-acquisition', 'key' => 'ma'],
    ['label' => 'Cloud Migration', 'href' => 'contact', 'key' => 'cloud'],
    ['label' => 'Data Migration', 'href' => 'contact', 'key' => 'data'],
    ['label' => 'Application Migration', 'href' => 'contact', 'key' => 'app'],
    ['label' => 'Identity & Security', 'href' => 'contact', 'key' => 'identity'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
  <link rel="canonical" href="<?= htmlspecialchars($pageCanonical, ENT_QUOTES, 'UTF-8') ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/site.css">
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="<?= htmlspecialchars($bodyClass, ENT_QUOTES, 'UTF-8') ?>">
  <div class="site-grid">
    <div class="site-container site-header-shell">
      <header class="site-header">
        <a href="./" class="brand-link">
          <span class="brand-mark">
            <i data-lucide="waypoints" class="h-4 w-4"></i>
          </span>
          <span class="brand-name">Migration Services</span>
        </a>

        <nav class="site-header-nav">
          <?php foreach ($mainNav as $item): ?>
            <a href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>" class="nav-chip <?= $activePage === $item['key'] ? 'is-active' : '' ?>">
              <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
            </a>
          <?php endforeach; ?>

          <div class="dropdown-shell">
            <button class="nav-chip <?= in_array($activePage, ['m365', 'ma', 'cloud', 'data', 'app', 'identity'], true) ? 'is-active' : '' ?>">
              IT Migration Solutions
              <i data-lucide="chevron-down" class="h-4 w-4"></i>
            </button>
            <div class="dropdown-menu">
              <div class="dropdown-panel">
                <p class="dropdown-title">Solutions</p>
                <?php foreach ($solutions as $solution): ?>
                  <a href="<?= htmlspecialchars($solution['href'], ENT_QUOTES, 'UTF-8') ?>" class="dropdown-link <?= $activePage === $solution['key'] ? 'is-active' : '' ?>">
                    <span><?= htmlspecialchars($solution['label'], ENT_QUOTES, 'UTF-8') ?></span>
                    <i data-lucide="arrow-up-right" class="h-4 w-4"></i>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </nav>

        <a href="contact" class="header-cta">
          Contact
          <i data-lucide="arrow-right" class="h-4 w-4"></i>
        </a>
      </header>
    </div>
    <main>

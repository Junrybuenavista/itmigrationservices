<?php
$pageTitle = $page['title'] ?? 'Badi';
$pageDescription = $page['description'] ?? '';
$navItems = $page['nav'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            ink: '#111111',
            cloud: '#f7f7f5',
            mist: '#e7ecef',
            accent: '#0f766e',
            accentSoft: '#ccfbf1',
            dangerSoft: '#fef2f2'
          },
          boxShadow: {
            panel: '0 20px 50px rgba(15, 23, 42, 0.08)'
          },
          borderRadius: {
            '4xl': '2rem'
          }
        }
      }
    };
  </script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/site.css">
</head>
<body class="bg-cloud text-ink antialiased">
  <div class="relative overflow-hidden">
    <div class="absolute inset-x-0 top-0 -z-10 h-[34rem] bg-[radial-gradient(circle_at_top_left,_rgba(15,118,110,0.15),_transparent_38%),radial-gradient(circle_at_top_right,_rgba(17,17,17,0.08),_transparent_30%)]"></div>

    <header class="mx-auto flex w-full max-w-7xl items-center justify-between px-6 py-6 lg:px-8">
      <a href="index.php" class="flex items-center gap-3 text-sm font-semibold tracking-[0.2em] text-ink uppercase">
        <span class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-ink text-white shadow-panel">B</span>
        Badi Digital
      </a>

      <nav class="hidden items-center gap-8 text-sm text-slate-600 md:flex">
        <?php foreach ($navItems as $item): ?>
          <a href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>" class="transition hover:text-ink">
            <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
          </a>
        <?php endforeach; ?>
      </nav>

      <a href="#contact" class="inline-flex items-center gap-2 rounded-full bg-ink px-5 py-3 text-sm font-semibold text-white transition hover:-translate-y-0.5">
        Start Your Migration
        <i data-lucide="arrow-up-right" class="h-4 w-4"></i>
      </a>
    </header>

    <main>

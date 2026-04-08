<?php
$page = [
    'title' => 'Microsoft 365 Migration Services | Email, Files & Teams Migration',
    'description' => 'Microsoft 365 migration services for email, files, Teams, and SharePoint with structured planning, validation, and smooth cutover.',
    'canonical' => 'https://itmigrationservices.com/microsoft-365.php',
    'active' => 'm365',
    'body_class' => 'site-shell',
];
require __DIR__ . '/partials/layout-top.php';
?>
<section class="hero-shell">
  <div class="site-container hero-grid">
    <div class="fade-up">
      <span class="eyebrow"><i data-lucide="mail" class="h-4 w-4"></i> Microsoft 365 migration services</span>
      <h1 class="hero-title">Move into Microsoft 365 without losing control.</h1>
      <p class="hero-copy">We migrate email, files, SharePoint, Teams, permissions, and user identities into Microsoft 365 with a process designed for cleaner cutover and smoother adoption.</p>
      <div class="hero-actions">
        <a href="contact.php" class="button-primary">Request a migration review <i data-lucide="arrow-right" class="h-4 w-4"></i></a>
      </div>
    </div>
    <div class="fade-up delay-1">
      <div class="glass-card panel-pad">
        <div class="media-frame" style="height:260px;">
          <img src="https://images.unsplash.com/photo-1516321165247-4aa89a48be28?q=80&w=1200&auto=format&fit=crop" alt="Microsoft 365 workspace planning">
        </div>
        <div class="section-grid-2" style="margin-top:1.25rem;">
          <div class="panel-card panel-pad"><p class="text-xl font-semibold">Mail & Calendar</p><p class="mt-2 muted">Cutover planning, aliases, and mailbox integrity.</p></div>
          <div class="panel-card panel-pad"><p class="text-xl font-semibold">Files & Teams</p><p class="mt-2 muted">SharePoint, OneDrive, Teams, and permissions aligned.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="page-section">
  <div class="site-container section-grid-3">
    <article class="panel-card card-lift panel-pad"><span class="icon-chip"><i data-lucide="mail-check" class="h-5 w-5"></i></span><h3 class="mt-5 text-2xl font-semibold">Email migration</h3><p class="mt-3 muted">Mailbox migration with validation, cutover sequencing, and minimal communication disruption.</p></article>
    <article class="panel-card card-lift panel-pad"><span class="icon-chip"><i data-lucide="folder-open" class="h-5 w-5"></i></span><h3 class="mt-5 text-2xl font-semibold">File migration</h3><p class="mt-3 muted">Move Google Drive, shared drives, file servers, and collaboration content into the right Microsoft 365 structure.</p></article>
    <article class="panel-card card-lift panel-pad"><span class="icon-chip"><i data-lucide="key-round" class="h-5 w-5"></i></span><h3 class="mt-5 text-2xl font-semibold">Identity alignment</h3><p class="mt-3 muted">Configure tenant, domains, groups, SSO, governance, and user readiness around the target state.</p></article>
  </div>
</section>
<?php require __DIR__ . '/partials/layout-bottom.php';

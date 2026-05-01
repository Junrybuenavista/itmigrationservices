<?php
$page = [
    'title'       => 'Microsoft 365 Migration Services | Email, Files, Teams & More',
    'description' => 'Expert Microsoft 365 migration services for businesses. We migrate email, files, Teams, and SharePoint with zero data loss and minimal downtime.',
    'canonical'   => 'https://itmigrationservices.com/microsoft-365',
    'active'      => 'm365',
];
require __DIR__ . '/partials/layout-top.php';
?>

<!-- HERO -->
<section class="bg-gradient-to-br from-blue-800 via-blue-700 to-blue-500 py-20 relative overflow-hidden">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-10 right-20 w-96 h-96 bg-white rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-10 w-64 h-64 bg-blue-300 rounded-full blur-3xl"></div>
  </div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <div class="flex flex-wrap gap-2 mb-6">
          <span class="bg-blue-500 bg-opacity-40 text-blue-100 text-xs font-semibold px-3 py-1.5 rounded-full border border-blue-400 border-opacity-40">Never Renew Contracts For Migration Anymore</span>
          <span class="bg-cyan-500 bg-opacity-30 text-cyan-100 text-xs font-semibold px-3 py-1.5 rounded-full border border-cyan-400 border-opacity-40">Email, Files, Teams &amp; Tenant Transfers</span>
        </div>
        <h1 class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight mb-6">
          Microsoft 365<br>Migration Services
        </h1>
        <p class="text-blue-100 text-lg leading-relaxed mb-8">
          Full-service M365 migration for businesses of all sizes. We handle tenant-to-tenant, email cutover, SharePoint, Teams, and OneDrive — with zero data loss and minimal downtime.
        </p>
        <div class="flex flex-wrap gap-3">
          <a href="contact" class="bg-white text-blue-700 font-bold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors shadow-lg">Request a Migration Plan</a>
          <a href="how-it-works" class="border border-white border-opacity-40 text-white font-semibold px-6 py-3 rounded-xl hover:bg-white hover:bg-opacity-10 transition-colors">How It Works</a>
        </div>
      </div>
      <div class="float">
        <div class="bg-white bg-opacity-10 border border-white border-opacity-20 rounded-3xl p-6 backdrop-blur-sm">
          <div class="flex items-center gap-3 mb-5">
            <div class="w-10 h-10 bg-blue-500 rounded-xl flex items-center justify-center">
              <i data-lucide="mail" class="w-5 h-5 text-white"></i>
            </div>
            <div>
              <p class="text-white font-semibold text-sm">Microsoft 365 Migration</p>
              <p class="text-blue-200 text-xs">Tenant-to-Tenant · Email · Teams</p>
            </div>
          </div>
          <div class="space-y-3">
            <div class="flex items-center justify-between bg-white bg-opacity-10 rounded-xl px-4 py-2.5">
              <span class="text-white text-xs font-medium">Mailboxes Migrated</span>
              <span class="text-green-300 text-xs font-bold">100%</span>
            </div>
            <div class="flex items-center justify-between bg-white bg-opacity-10 rounded-xl px-4 py-2.5">
              <span class="text-white text-xs font-medium">Data Loss</span>
              <span class="text-green-300 text-xs font-bold">0%</span>
            </div>
            <div class="flex items-center justify-between bg-white bg-opacity-10 rounded-xl px-4 py-2.5">
              <span class="text-white text-xs font-medium">Downtime</span>
              <span class="text-green-300 text-xs font-bold">Minimal</span>
            </div>
            <div class="flex items-center justify-between bg-white bg-opacity-10 rounded-xl px-4 py-2.5">
              <span class="text-white text-xs font-medium">Teams &amp; SharePoint</span>
              <span class="text-green-300 text-xs font-bold">Included</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PLATFORM TAGS BAR -->
<section class="bg-gray-950 py-4 border-b border-gray-800">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-wrap items-center gap-3 justify-center">
      <?php $tags = ['Exchange Online','SharePoint','OneDrive','Microsoft Teams','Azure AD','Intune','Power Platform','Tenant-to-Tenant','Cutover Migration']; ?>
      <?php foreach ($tags as $t): ?>
        <span class="bg-gray-800 text-gray-300 text-xs font-medium px-3 py-1.5 rounded-full border border-gray-700"><?= htmlspecialchars($t) ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- DARK SERVICES GRID -->
<section class="bg-gray-950 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-14">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight mb-4">Complete Microsoft 365<br>Migration Coverage</h2>
      <p class="text-gray-400 text-base max-w-2xl mx-auto">Every component of your Microsoft 365 environment — migrated, validated, and handed over with full documentation.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php $services = [
        ['mail','Email &amp; Mailbox Migration','Full Exchange/Gmail to Exchange Online migration with calendar, contacts, and archive data.'],
        ['share-2','SharePoint Migration','Document libraries, sites, permissions, and metadata migrated with full fidelity.'],
        ['users','Teams &amp; Channels','Teams structure, channels, tabs, files, and conversation history transferred intact.'],
        ['hard-drive','OneDrive Migration','User file migrations from on-prem shares, Google Drive, Box, or another M365 tenant.'],
        ['shield','Identity &amp; Azure AD','User accounts, groups, MFA, conditional access, and AAD Connect configuration.'],
        ['smartphone','Intune &amp; Device Management','Device compliance policies, app deployments, and endpoint configurations.'],
        ['zap','Power Platform','Power Apps, Power Automate flows, and Power BI workspaces migrated and reconnected.'],
        ['key','Licensing &amp; Subscriptions','Audit, right-size, and reassign M365 licenses as part of the migration cutover.'],
        ['check-circle','Post-Migration Validation','Systematic UAT testing, mail flow checks, and 30-day hypercare support.'],
      ]; ?>
      <?php foreach ($services as $s): ?>
        <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 flex flex-col items-center text-center hover:border-blue-700 transition-colors">
          <div class="w-12 h-12 bg-blue-600 bg-opacity-20 rounded-xl flex items-center justify-center mb-4">
            <i data-lucide="<?= $s[0] ?>" class="w-6 h-6 text-blue-400"></i>
          </div>
          <h3 class="font-semibold text-white text-sm mb-2"><?= $s[1] ?></h3>
          <p class="text-gray-400 text-xs leading-relaxed"><?= $s[2] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- SPLIT: SECURE SCALABLE GROWTH -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <div>
        <span class="inline-block bg-blue-50 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full mb-4">Microsoft 365 Migration</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-6">Migration Services Built<br>for Secure, Scalable Growth</h2>
        <p class="text-gray-500 text-sm leading-relaxed mb-8">Our M365 migration methodology is designed to handle enterprise complexity — multi-tenant environments, hybrid setups, and coexistence scenarios — while keeping your team productive throughout the transition.</p>
        <div class="space-y-4">
          <?php $feats = [
            ['layers','Tenant-to-Tenant Transfers','Move users, mailboxes, and data between M365 tenants during mergers, acquisitions, or rebranding.'],
            ['git-branch','Hybrid Coexistence','Run on-premises Exchange alongside Exchange Online during phased migrations with full mail flow.'],
            ['lock','Security &amp; Compliance','Maintain DLP policies, retention labels, eDiscovery holds, and MFA throughout migration.'],
            ['bar-chart-2','Reporting &amp; Audit Trail','Complete migration logs, mailbox audit reports, and sign-off documentation for every phase.'],
          ]; ?>
          <?php foreach ($feats as $f): ?>
            <div class="flex gap-4">
              <div class="w-9 h-9 bg-blue-50 rounded-xl flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="<?= $f[0] ?>" class="w-5 h-5 text-blue-600"></i>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900 text-sm mb-1"><?= $f[1] ?></h4>
                <p class="text-gray-500 text-xs leading-relaxed"><?= $f[2] ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="bg-gray-50 rounded-3xl p-8 border border-gray-200">
        <div class="space-y-4">
          <?php $checks = [
            'Zero mailbox data loss guarantee',
            'Minimal downtime cutover windows',
            'Full calendar and contact migration',
            'Teams structure and history preserved',
            'SharePoint permissions maintained',
            'Hybrid coexistence support',
            'Identity and AAD sync configured',
            'Post-migration hypercare included',
          ]; ?>
          <?php foreach ($checks as $c): ?>
            <div class="flex items-center gap-3">
              <div class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center shrink-0">
                <i data-lucide="check" class="w-3 h-3 text-green-600"></i>
              </div>
              <span class="text-gray-700 text-sm"><?= $c ?></span>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="mt-8 pt-6 border-t border-gray-200">
          <a href="contact" class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl text-sm transition-colors">Get a Migration Assessment</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4-STEP PROCESS -->
<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-14">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-4">Our Microsoft 365<br>Migration Process</h2>
      <p class="text-gray-500 text-base max-w-xl mx-auto">A structured, low-risk process built for enterprise Microsoft 365 environments.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php $steps = [
        ['1','Discovery &amp; Assessment','We inventory your current environment — mailboxes, licenses, connectors, hybrid setup, and compliance requirements.'],
        ['2','Migration Design','Detailed runbook, wave planning, coexistence strategy, and cutover window defined and agreed before any migration begins.'],
        ['3','Pilot &amp; Batch Migration','Pilot group validated first. Full migration executed in waves with daily progress reporting and rollback checkpoints.'],
        ['4','Cutover &amp; Hypercare','Final DNS/MX cutover, decommission legacy environment, 30-day post-migration support with dedicated engineer.'],
      ]; ?>
      <?php foreach ($steps as $s): ?>
        <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm hover:shadow-md transition-shadow">
          <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center mb-4">
            <span class="text-white font-extrabold text-sm"><?= $s[0] ?></span>
          </div>
          <h3 class="font-bold text-gray-900 text-sm mb-2"><?= $s[1] ?></h3>
          <p class="text-gray-500 text-xs leading-relaxed"><?= $s[2] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- COST SECTION -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <div class="space-y-5">
        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6">
          <h3 class="font-bold text-gray-900 mb-3 text-sm">What's typically included</h3>
          <ul class="space-y-2 text-xs text-gray-500">
            <li class="flex gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-blue-500 shrink-0 mt-0.5"></i>Pre-migration discovery &amp; assessment report</li>
            <li class="flex gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-blue-500 shrink-0 mt-0.5"></i>Migration runbook and wave planning</li>
            <li class="flex gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-blue-500 shrink-0 mt-0.5"></i>Email, calendar &amp; contacts migration</li>
            <li class="flex gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-blue-500 shrink-0 mt-0.5"></i>SharePoint &amp; OneDrive migration</li>
            <li class="flex gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-blue-500 shrink-0 mt-0.5"></i>Teams migration (structure + files)</li>
            <li class="flex gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-blue-500 shrink-0 mt-0.5"></i>Identity &amp; MFA configuration</li>
            <li class="flex gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-blue-500 shrink-0 mt-0.5"></i>Post-migration validation &amp; sign-off</li>
          </ul>
        </div>
        <div class="bg-blue-50 border border-blue-100 rounded-2xl p-6">
          <h3 class="font-bold text-blue-900 mb-3 text-sm">Additional scope (quoted separately)</h3>
          <ul class="space-y-2 text-xs text-blue-700">
            <li class="flex gap-2"><i data-lucide="plus-circle" class="w-4 h-4 text-blue-500 shrink-0 mt-0.5"></i>Archive mailbox &amp; PST ingestion</li>
            <li class="flex gap-2"><i data-lucide="plus-circle" class="w-4 h-4 text-blue-500 shrink-0 mt-0.5"></i>Compliance &amp; eDiscovery configuration</li>
            <li class="flex gap-2"><i data-lucide="plus-circle" class="w-4 h-4 text-blue-500 shrink-0 mt-0.5"></i>Power Platform migration</li>
            <li class="flex gap-2"><i data-lucide="plus-circle" class="w-4 h-4 text-blue-500 shrink-0 mt-0.5"></i>Custom domain &amp; DNS cutover assistance</li>
          </ul>
        </div>
      </div>
      <div>
        <span class="inline-block bg-blue-50 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full mb-4">Transparent Pricing</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-6">Fixed-Fee Microsoft 365<br>Migration Pricing</h2>
        <p class="text-gray-500 text-sm leading-relaxed mb-6">No surprises. We scope your migration upfront and provide a fixed-fee proposal covering all phases — from discovery to post-migration hypercare. Pricing is based on mailbox count and scope of services required.</p>
        <div class="grid grid-cols-2 gap-4 mb-8">
          <div class="bg-gray-50 rounded-xl p-4 text-center border border-gray-200">
            <p class="text-2xl font-extrabold text-gray-900">50–500</p>
            <p class="text-xs text-gray-500 mt-1">Mailboxes — most common project size</p>
          </div>
          <div class="bg-gray-50 rounded-xl p-4 text-center border border-gray-200">
            <p class="text-2xl font-extrabold text-gray-900">2–8 wks</p>
            <p class="text-xs text-gray-500 mt-1">Typical end-to-end timeline</p>
          </div>
        </div>
        <a href="contact" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-3 rounded-xl text-sm transition-colors">
          Request a Fixed-Fee Quote <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE US -->
<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <div class="relative rounded-3xl overflow-hidden bg-blue-600 p-10 min-h-80 flex flex-col justify-end">
        <div class="absolute inset-0 opacity-20">
          <div class="absolute top-0 right-0 w-64 h-64 bg-white rounded-full blur-3xl"></div>
        </div>
        <div class="relative z-10 grid grid-cols-2 gap-4">
          <?php $stats = [['500+','Migrations Completed'],['0%','Data Loss Rate'],['30-Day','Post-Migration Support'],['4.9★','Client Satisfaction']]; ?>
          <?php foreach ($stats as $st): ?>
            <div class="bg-white bg-opacity-15 rounded-2xl p-4 text-center border border-white border-opacity-20">
              <p class="text-2xl font-extrabold text-white"><?= $st[0] ?></p>
              <p class="text-blue-100 text-xs mt-1"><?= $st[1] ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div>
        <span class="inline-block bg-blue-50 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full mb-4">Why Choose Us</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-6">Microsoft-Certified<br>Migration Specialists</h2>
        <p class="text-gray-500 text-sm leading-relaxed mb-6">We're not generalist consultants. Every engineer on our team is certified in Microsoft 365 migrations and has hands-on experience across hundreds of enterprise engagements.</p>
        <div class="space-y-3">
          <?php $why = [
            'Microsoft Partner with M365 migration specialization',
            'Dedicated migration engineer assigned to your project',
            'BitTitan MigrationWiz &amp; ShareGate certified',
            'Proven runbook refined across 500+ migrations',
            'SLA-backed delivery with risk mitigation built in',
            '30-day hypercare window after cutover',
          ]; ?>
          <?php foreach ($why as $w): ?>
            <div class="flex items-start gap-3">
              <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="check" class="w-3 h-3 text-blue-600"></i>
              </div>
              <span class="text-gray-700 text-sm"><?= $w ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BUILT FOR IT TEAMS (amber) -->
<section class="bg-amber-50 border-y border-amber-100 py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <span class="inline-block bg-amber-100 text-amber-700 text-xs font-semibold px-3 py-1 rounded-full mb-4">Built for IT Teams</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-4">Designed for IT Managers<br>and Project Leads</h2>
        <p class="text-gray-600 text-sm leading-relaxed">We work alongside your internal IT team — not over them. Our structured approach gives your team full visibility, runbooks, and handover documentation so you stay in control throughout.</p>
      </div>
      <div class="grid sm:grid-cols-2 gap-4">
        <?php $itfeats = [
          ['file-text','Full Runbook Provided','Detailed step-by-step runbook shared before migration begins.'],
          ['eye','Daily Progress Updates','Migration dashboards and daily status emails throughout.'],
          ['headphones','Dedicated Support Line','Direct access to your migration engineer during cutover.'],
          ['book-open','Handover Documentation','Complete post-migration documentation for your IT records.'],
        ]; ?>
        <?php foreach ($itfeats as $f): ?>
          <div class="bg-white rounded-2xl p-5 border border-amber-100 shadow-sm">
            <div class="w-9 h-9 bg-amber-100 rounded-xl flex items-center justify-center mb-3">
              <i data-lucide="<?= $f[0] ?>" class="w-5 h-5 text-amber-600"></i>
            </div>
            <h4 class="font-semibold text-gray-900 text-sm mb-1"><?= $f[1] ?></h4>
            <p class="text-gray-500 text-xs leading-relaxed"><?= $f[2] ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="bg-white py-20">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-4">Microsoft 365 Migration<br>FAQ</h2>
      <p class="text-gray-500 text-base">Common questions from IT teams planning a Microsoft 365 migration.</p>
    </div>
    <div class="space-y-3">
      <?php $faqs = [
        ['How long does a Microsoft 365 migration take?','Most migrations for 50–500 mailboxes take 2–8 weeks end-to-end. Timeline depends on data volume, number of SharePoint sites, and whether a hybrid coexistence period is needed.'],
        ['Will users experience downtime during the migration?','We design migrations to minimize downtime. Mailbox migrations run in the background, with a short cutover window (typically 15–60 minutes) for DNS/MX changes, usually scheduled outside business hours.'],
        ['Can you migrate from Google Workspace to Microsoft 365?','Yes. We handle Google Workspace to M365 migrations including Gmail, Google Drive, Google Calendar, and Contacts — using proven tooling and a structured runbook.'],
        ['What tools do you use for Microsoft 365 migrations?','We use BitTitan MigrationWiz, ShareGate, and Microsoft native IMAP/Cutover migration tools depending on the environment. Tool selection is based on your specific setup and requirements.'],
        ['Do you migrate Teams and SharePoint as well as email?','Yes. A complete M365 migration includes mailboxes, Teams (structure, channels, tabs, files), SharePoint sites, and OneDrive — all covered under a single engagement.'],
        ['What happens if something goes wrong during migration?','Every migration includes a rollback plan and checkpoints. Our pilot group approach catches issues before full migration begins. Post-cutover, a 30-day hypercare period gives you direct access to your migration engineer.'],
      ]; ?>
      <?php foreach ($faqs as $faq): ?>
        <div class="faq-item border border-gray-200 rounded-2xl overflow-hidden">
          <button class="faq-toggle w-full flex items-center justify-between px-6 py-4 text-left hover:bg-gray-50 transition-colors">
            <span class="font-semibold text-gray-900 text-sm pr-4"><?= $faq[0] ?></span>
            <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-gray-400 shrink-0"></i>
          </button>
          <div class="faq-answer px-6 pb-5">
            <p class="text-gray-500 text-sm leading-relaxed"><?= $faq[1] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- TRUSTED BRANDS -->
<section class="bg-gray-50 py-16 border-t border-gray-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <p class="text-xs text-gray-400 uppercase tracking-widest font-semibold mb-8">Trusted by teams at</p>
    <div class="flex flex-wrap items-center justify-center gap-8 opacity-50">
      <?php $brands = ['Google','Adidas','Tele2','Ericsson','Facebook','Shopify','Capital','Antler','Disney']; ?>
      <?php foreach ($brands as $b): ?>
        <span class="text-gray-600 font-bold text-sm tracking-tight"><?= $b ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="bg-gradient-to-br from-blue-800 via-blue-700 to-blue-500 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight mb-4">Ready to Migrate to<br>Microsoft 365?</h2>
    <p class="text-blue-100 text-base mb-10 max-w-xl mx-auto">Tell us about your environment and we'll provide a fixed-fee proposal with a clear migration plan within 48 hours.</p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="contact" class="bg-white text-blue-700 font-bold px-8 py-4 rounded-xl hover:bg-blue-50 transition-colors shadow-lg">Request Migration Assessment</a>
      <a href="how-it-works" class="border border-white border-opacity-40 text-white font-semibold px-8 py-4 rounded-xl hover:bg-white hover:bg-opacity-10 transition-colors">See How It Works</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/layout-bottom.php'; ?>

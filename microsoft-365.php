<?php
$page = [
    'title'       => 'Microsoft 365 Migration Services | Email, Files & Teams Migration',
    'description' => 'Microsoft 365 migration services for email, files, Teams, and SharePoint with structured planning, validation, and smooth cutover.',
    'canonical'   => 'https://itmigrationservices.com/microsoft-365',
    'active'      => 'm365',
];
require __DIR__ . '/partials/layout-top.php';
?>

<!-- ══════════════════════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gradient-to-br from-blue-800 via-blue-700 to-cyan-500 text-white pt-20 pb-28 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <div class="flex flex-wrap gap-2 mb-6">
          <span class="bg-blue-400/20 border border-blue-300/40 text-blue-100 text-xs font-semibold px-3 py-1.5 rounded-full">Never Renew Contracts For Migration Anymore</span>
          <span class="bg-cyan-400/20 border border-cyan-400/40 text-cyan-200 text-xs font-semibold px-3 py-1.5 rounded-full">Email, Files, Teams &amp; Teams Transfers</span>
        </div>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight tracking-tight">
          Microsoft 365 Migration Services
        </h1>
        <p class="mt-5 text-blue-100 text-lg leading-relaxed max-w-xl">
          We help teams move email, files, Teams, SharePoint, identities, and collaboration settings into Microsoft 365 with clearer planning, lower disruption, and better user readiness.
        </p>
        <div class="mt-8 flex flex-wrap gap-3">
          <a href="contact"
             class="inline-flex items-center gap-2 bg-white text-blue-700 font-bold px-6 py-3.5 rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all text-sm">
            Get a Migration Assessment
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
          <a href="how-it-works"
             class="inline-flex items-center gap-2 bg-white/10 border border-white/25 text-white font-semibold px-6 py-3.5 rounded-xl hover:bg-white/20 transition-all text-sm">
            See How Delivery Works
          </a>
        </div>
      </div>

      <!-- Card -->
      <div class="animate-float">
        <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-3xl p-6 shadow-2xl">
          <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=900&auto=format&fit=crop"
               alt="Microsoft 365 migration planning"
               class="w-full h-52 object-cover rounded-2xl mb-5">
          <div class="grid grid-cols-2 gap-3">
            <div class="bg-white/10 rounded-2xl p-4">
              <p class="text-xs text-blue-200 uppercase tracking-widest font-semibold mb-1">Migration Areas</p>
              <p class="text-white text-sm font-semibold">Mail, files, Teams, SharePoint, and identity.</p>
            </div>
            <div class="bg-blue-600/50 border border-blue-400/30 rounded-2xl p-4">
              <p class="text-xs text-blue-200 uppercase tracking-widest font-semibold mb-1">Outcome</p>
              <p class="text-white text-sm font-semibold">A more organized tenant and a smoother user transition.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     PLATFORM TAGS
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gray-900 text-white py-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-wrap items-center justify-center gap-4">
      <?php foreach(['Microsoft 365','Exchange','SharePoint','Teams','OneDrive','Azure AD'] as $t): ?>
        <span class="bg-gray-800 border border-gray-700 text-gray-300 text-xs font-semibold px-4 py-2 rounded-full"><?= $t ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     SERVICES COVERED — dark
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gray-900 text-white pb-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <p class="text-blue-400 text-xs uppercase tracking-widest font-semibold mb-3">Full Coverage</p>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">What We Migrate</h2>
      <p class="mt-4 text-gray-400 max-w-2xl mx-auto">Migration routes we plan, validate, and execute for organizations moving to or within Microsoft 365.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php
      $m365Services = [
        ['icon'=>'mail',       'label'=>'Google Workspace to Microsoft 365 Migration', 'desc'=>'Full mailbox, Drive, and collaboration migration from Google Workspace into the right M365 structure.'],
        ['icon'=>'at-sign',    'label'=>'Exchange to Microsoft 365 Migration',          'desc'=>'On-premises Exchange cutover with domain validation, alias handling, and minimal mail flow disruption.'],
        ['icon'=>'users',      'label'=>'Tenant to Tenant Migration',                   'desc'=>'Move users, mailboxes, and content between two Microsoft 365 tenants with sequenced wave delivery.'],
        ['icon'=>'message-square','label'=>'Slack to Teams Migration',                  'desc'=>'Migrate channels, history, and workflows from Slack into Microsoft Teams with structure.'],
        ['icon'=>'video',      'label'=>'Zoom to Teams Migration',                      'desc'=>'Transition meetings, recordings, and calling from Zoom to Microsoft Teams with minimal disruption.'],
        ['icon'=>'cloud',      'label'=>'Dropbox to Microsoft 365 Migration',           'desc'=>'Migrate files, folders, and shared content from Dropbox to OneDrive and SharePoint.'],
        ['icon'=>'box',        'label'=>'Box to Microsoft 365 Migration',               'desc'=>'Content migration from Box into OneDrive and SharePoint with permission mapping and structure.'],
        ['icon'=>'folder',     'label'=>'File Server to SharePoint Migration',          'desc'=>'Lift file shares, network drives, and departmental content into a structured SharePoint environment.'],
        ['icon'=>'globe-2',    'label'=>'SharePoint On-Prem to SharePoint Online',      'desc'=>'Modernize on-premises SharePoint farms into SharePoint Online with content validation and cleanup.'],
      ];
      foreach ($m365Services as $s):
      ?>
        <div class="bg-gray-800 border border-gray-700 rounded-2xl p-6 hover:border-blue-500/50 hover:-translate-y-1 transition-all">
          <div class="w-12 h-12 bg-blue-600/20 rounded-xl flex items-center justify-center mb-4">
            <i data-lucide="<?= $s['icon'] ?>" class="w-6 h-6 text-blue-400"></i>
          </div>
          <h3 class="font-bold text-white text-sm leading-snug mb-2"><?= $s['label'] ?></h3>
          <p class="text-gray-400 text-sm leading-relaxed"><?= $s['desc'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     MIGRATION SERVICES BUILT FOR GROWTH — split
══════════════════════════════════════════════════════════════════ -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div>
        <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">Microsoft 365 Migration</p>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight">
          Migration Services Built for Secure, Scalable Growth
        </h2>
        <p class="mt-4 text-gray-500 leading-relaxed">
          Your organization is planning a Microsoft 365 migration, and we have been doing migrations like yours for years. Our team builds a smooth road for you and your users, planning a smooth transition for you, and delivers an exceptional experience for the users and teams involved.
        </p>
        <p class="mt-4 text-gray-500 leading-relaxed">
          Whether you are starting a new Microsoft 365 Exchange migration, managing a Google Workspace migration, or starting a tenant-to-tenant migration, our specialized migration experts will complete the process with minimal disruption and validated results.
        </p>
        <div class="mt-8 grid sm:grid-cols-2 gap-4">
          <div class="bg-gray-50 rounded-2xl p-5 border border-gray-200">
            <i data-lucide="layout-grid" class="w-6 h-6 text-blue-600 mb-3"></i>
            <h3 class="font-semibold text-gray-900 text-sm mb-1">Tenant Cleanup</h3>
            <p class="text-gray-500 text-sm leading-relaxed">Reduce sprawl and design the new Microsoft 365 structure before content starts moving.</p>
          </div>
          <div class="bg-gray-50 rounded-2xl p-5 border border-gray-200">
            <i data-lucide="users" class="w-6 h-6 text-blue-600 mb-3"></i>
            <h3 class="font-semibold text-gray-900 text-sm mb-1">User Readiness</h3>
            <p class="text-gray-500 text-sm leading-relaxed">Communication, onboarding, and support flows are built into the migration plan.</p>
          </div>
        </div>
      </div>
      <div class="rounded-3xl overflow-hidden shadow-2xl">
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=900&auto=format&fit=crop"
             alt="Microsoft 365 migration team"
             class="w-full h-[440px] object-cover">
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     MIGRATION PROCESS — 4 steps
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">Delivery Framework</p>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Our Migration Process</h2>
      <p class="mt-4 text-gray-500">A proven four-phase framework that makes Microsoft 365 migration easier to manage, track, and communicate to stakeholders.</p>
    </div>

    <!-- Timeline -->
    <div class="relative">
      <div class="hidden lg:block absolute top-8 left-[12.5%] right-[12.5%] h-0.5 bg-blue-200"></div>
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php
        $process = [
          ['n'=>'01','title'=>'Assess',    'icon'=>'search',      'desc'=>'Review source systems, licensing, domains, content volumes, and identity dependencies.'],
          ['n'=>'02','title'=>'Design',    'icon'=>'pencil-ruler', 'desc'=>'Build the target tenant model, wave sequencing, and validation checkpoints.'],
          ['n'=>'03','title'=>'Migrate',   'icon'=>'arrow-right-circle','desc'=>'Run pilot moves and production migration waves for mail, files, Teams, and SharePoint.'],
          ['n'=>'04','title'=>'Stabilize', 'icon'=>'shield-check', 'desc'=>'Support the new environment, resolve issues, and guide users into the new workflow.'],
        ];
        foreach ($process as $step):
        ?>
          <div class="bg-white rounded-2xl p-6 border border-gray-200 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all text-center relative">
            <div class="w-14 h-14 bg-blue-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-md">
              <i data-lucide="<?= $step['icon'] ?>" class="w-6 h-6"></i>
            </div>
            <span class="text-xs text-blue-600 font-black uppercase tracking-widest"><?= $step['n'] ?></span>
            <h3 class="font-extrabold text-gray-900 text-xl mt-1 mb-2"><?= $step['title'] ?></h3>
            <p class="text-gray-500 text-sm leading-relaxed"><?= $step['desc'] ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     MIGRATION COST — split
══════════════════════════════════════════════════════════════════ -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div>
        <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">Pricing Transparency</p>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight">
          Microsoft 365 Migration Cost
        </h2>
        <p class="mt-4 text-gray-500 leading-relaxed">Transparent pricing to help you Plan Your Fees. System pricing parameters.</p>

        <div class="mt-8 space-y-4">
          <?php
          $costFactors = [
            ['title'=>'System of pricing ranges',    'desc'=>'We offer modular pricing options depending on size, complexity, and scope of the migration. Pricing depends on the scope of your migration needs.'],
            ['title'=>'Transition to Ownership',     'desc'=>'All of our migrations are sized to ensure you are provided with the right level of support based on your organization size.'],
            ['title'=>'Distribution packages migration projects', 'desc'=>'Our structured delivery packages are designed to cover the end-to-end migration lifecycle, from discovery to post-go-live support.'],
          ];
          foreach ($costFactors as $cf):
          ?>
            <div class="bg-gray-50 rounded-2xl p-5 border border-gray-200">
              <h3 class="font-semibold text-gray-900 text-sm mb-1"><?= $cf['title'] ?></h3>
              <p class="text-gray-500 text-sm leading-relaxed"><?= $cf['desc'] ?></p>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="mt-6">
          <a href="contact"
             class="inline-flex items-center gap-2 bg-blue-600 text-white font-bold px-6 py-3.5 rounded-xl shadow-md hover:bg-blue-700 transition-all text-sm">
            Get a Project Review <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>
      <div class="rounded-3xl overflow-hidden shadow-2xl">
        <img src="https://images.unsplash.com/photo-1573496773905-f5b17e717f05?q=80&w=900&auto=format&fit=crop"
             alt="Microsoft 365 migration cost planning"
             class="w-full h-[440px] object-cover">
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     WHY CHOOSE US
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div class="rounded-3xl overflow-hidden shadow-xl">
        <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=900&auto=format&fit=crop"
             alt="Why choose our Microsoft 365 migration service"
             class="w-full h-[420px] object-cover">
      </div>
      <div>
        <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">Our Advantage</p>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight mb-4">
          Why Organizations Choose Our Migration Service
        </h2>
        <div class="space-y-3">
          <?php
          $reasons = [
            'Zero data loss guarantee with validation checkpoints',
            'Minimal downtime with staged rollout planning',
            'Full user communication and onboarding support',
            'Side-by-side coexistence during transition',
            'Post-migration stability and environment optimization',
            'Expert delivery across the full Microsoft ecosystem',
            'Experience deploying migrations with enterprise-level governance',
          ];
          foreach ($reasons as $r):
          ?>
            <div class="flex items-center gap-3 bg-white rounded-xl px-4 py-3 border border-gray-100 shadow-sm">
              <i data-lucide="check-circle" class="w-5 h-5 text-blue-600 shrink-0"></i>
              <span class="text-gray-700 text-sm"><?= $r ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     FAQ
══════════════════════════════════════════════════════════════════ -->
<section class="bg-white py-20">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">Common Questions</p>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">FAQ's About Microsoft 365 Migration Services</h2>
    </div>
    <div class="space-y-3">
      <?php
      $faqs = [
        ['q'=>'How long does it take?',                    'a'=>'Timeline depends on user count, content volume, and source system complexity. Most migrations range from a few weeks to several months depending on scope.'],
        ['q'=>'Can you migrate during business hours?',    'a'=>'Yes. We design migration waves to minimize impact during business hours, with cutover scheduled during low-activity windows.'],
        ['q'=>'Do we need additional licenses to tenant?', 'a'=>'Licensing requirements depend on the source system and features in scope. We review this during the discovery phase.'],
        ['q'=>'What does cost look like?',                 'a'=>'Costs are scoped based on user count, systems involved, and level of support needed. Contact us for a tailored estimate.'],
      ];
      foreach ($faqs as $faq):
      ?>
        <div class="faq-item border border-gray-200 rounded-2xl overflow-hidden">
          <button class="faq-toggle w-full flex items-center justify-between px-6 py-5 text-left hover:bg-gray-50 transition-colors">
            <span class="font-semibold text-gray-900 text-sm pr-4"><?= $faq['q'] ?></span>
            <i data-lucide="chevron-down" class="faq-chevron w-5 h-5 text-gray-400 shrink-0"></i>
          </button>
          <div class="faq-answer px-6 pb-5">
            <p class="text-gray-500 text-sm leading-relaxed"><?= $faq['a'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     BUILT FOR IT TEAMS — highlight panel
══════════════════════════════════════════════════════════════════ -->
<section class="bg-amber-50 py-20 border-y border-amber-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div>
        <div class="w-14 h-14 bg-amber-200 rounded-2xl flex items-center justify-center mb-5">
          <i data-lucide="users-round" class="w-7 h-7 text-amber-700"></i>
        </div>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900 leading-tight mb-4">Built for IT Teams and Business Leaders</h2>
        <p class="text-gray-600 leading-relaxed">
          The project plan needs to work for engineers, operations teams, and executives at the same time. That is why we structure migration work around visibility, ownership, and continuity.
        </p>
      </div>
      <div class="grid grid-cols-2 gap-3">
        <?php
        $itBenefits = [
          'Office 365 business accounts','Microsoft Teams migration','SharePoint Online migration',
          'Endpoint management with Intune','Dropbox to OneDrive migration','Identity &amp; Access Management',
        ];
        foreach ($itBenefits as $b):
        ?>
          <div class="bg-white border border-amber-200 rounded-xl px-4 py-3 shadow-sm flex items-center gap-2">
            <i data-lucide="check" class="w-4 h-4 text-blue-600 shrink-0"></i>
            <span class="text-sm font-medium text-gray-700"><?= $b ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     TRUSTED BRANDS
══════════════════════════════════════════════════════════════════ -->
<section class="bg-white py-14 border-t border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <p class="text-center text-xs text-gray-400 uppercase tracking-widest font-semibold mb-8">Trusted By Leading Brands Around The World</p>
    <div class="flex flex-wrap items-center justify-center gap-8 lg:gap-12">
      <?php foreach(['Google','Adidas','Tele2','Facebook','Shopify','proxy','Capital','Disney'] as $b): ?>
        <span class="text-gray-400 font-bold text-base tracking-tight hover:text-gray-600 transition-colors cursor-default"><?= $b ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     CTA
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gradient-to-br from-blue-800 via-blue-700 to-blue-500 py-20 text-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <p class="text-blue-200 text-xs uppercase tracking-widest font-semibold mb-3">Start Today</p>
    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight">
      Start Your Microsoft 365 Migration Project
    </h2>
    <p class="mt-4 text-blue-100 leading-relaxed max-w-xl mx-auto">
      Start with a migration team that plans carefully, executes cleanly, and keeps your users supported throughout.
    </p>
    <div class="mt-8">
      <a href="contact"
         class="inline-flex items-center gap-2 bg-white text-blue-700 font-bold px-8 py-4 rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all text-sm">
        Start Your Migration Today <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/layout-bottom.php'; ?>

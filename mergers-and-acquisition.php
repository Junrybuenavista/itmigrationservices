<?php
$page = [
    'title'       => 'M&A IT Migration Services | Post-Merger IT Integration',
    'description' => 'M&A IT migration services for tenant consolidation, identity alignment, and post-merger technology integration with less disruption.',
    'canonical'   => 'https://itmigrationservices.com/mergers-and-acquisition',
    'active'      => 'ma',
];
require __DIR__ . '/partials/layout-top.php';
?>

<!-- ══════════════════════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gradient-to-br from-violet-800 via-blue-700 to-blue-500 text-white pt-20 pb-28 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <div class="flex flex-wrap gap-2 mb-6">
          <span class="bg-pink-400/20 border border-pink-400/40 text-pink-200 text-xs font-semibold px-3 py-1.5 rounded-full">Post-Merger Integration</span>
          <span class="bg-green-400/20 border border-green-400/40 text-green-200 text-xs font-semibold px-3 py-1.5 rounded-full">Tenant Consolidation</span>
          <span class="bg-purple-400/20 border border-purple-400/40 text-purple-200 text-xs font-semibold px-3 py-1.5 rounded-full">Identity Alignment</span>
        </div>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight tracking-tight">
          M&amp;A IT Migration Services
        </h1>
        <p class="mt-5 text-blue-100 text-lg leading-relaxed max-w-xl">
          Mergers &amp; Acquisitions create new IT realities overnight. IT must move fast without breaking business operations.
        </p>
        <div class="mt-8 flex flex-wrap gap-3">
          <a href="contact"
             class="inline-flex items-center gap-2 bg-white text-blue-700 font-bold px-6 py-3.5 rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all text-sm">
            Get M&amp;A Migration Assessment
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
          <a href="how-it-works"
             class="inline-flex items-center gap-2 bg-white/10 border border-white/25 text-white font-semibold px-6 py-3.5 rounded-xl hover:bg-white/20 transition-all text-sm">
            See Our Process
          </a>
        </div>
      </div>

      <!-- Card -->
      <div class="animate-float">
        <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-3xl p-6 shadow-2xl">
          <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=900&auto=format&fit=crop"
               alt="Post-merger IT integration"
               class="w-full h-52 object-cover rounded-2xl mb-5">
          <div class="grid grid-cols-2 gap-3">
            <div class="bg-white/10 rounded-2xl p-4">
              <p class="text-xs text-blue-200 uppercase tracking-widest font-semibold mb-1">Integration Scope</p>
              <p class="text-white text-sm font-semibold">Mail, files, identity, collaboration, and coexistence planning.</p>
            </div>
            <div class="bg-blue-600/50 border border-blue-400/30 rounded-2xl p-4">
              <p class="text-xs text-blue-200 uppercase tracking-widest font-semibold mb-1">Outcome</p>
              <p class="text-white text-sm font-semibold">A cleaner target environment and controlled integration path.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     TECH PLATFORMS (logo bar)
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gray-900 text-white py-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-wrap items-center justify-center gap-8">
      <?php foreach (['Microsoft 365','Azure AD','Exchange','Teams','SharePoint','Identity'] as $t): ?>
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
      <p class="text-blue-400 text-xs uppercase tracking-widest font-semibold mb-3">What We Cover</p>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Our Mergers &amp; Acquisition IT Services Cover</h2>
      <p class="mt-4 text-gray-400 max-w-2xl mx-auto">We structure every M&amp;A digital transition to provide continuity, align with the milestones, and keep business operations running.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php
      $maServices = [
        ['icon'=>'building-2',    'label'=>'IT Carve Out Migration',          'desc'=>'Cleanly separate systems, data, and identities from the parent company to the carved-out entity.'],
        ['icon'=>'merge',         'label'=>'Post-Merger IT Integration',       'desc'=>'Unify two technology environments after an acquisition with structured planning and wave sequencing.'],
        ['icon'=>'users',         'label'=>'Tenant Consolidation Migration',   'desc'=>'Combine Microsoft 365 environments into a cleaner target architecture with a practical coexistence plan.'],
        ['icon'=>'globe-2',       'label'=>'Domain &amp; Identity Separation', 'desc'=>'Align domains, SSO, permissions, groups, and governance controls across both organizations.'],
        ['icon'=>'mail',          'label'=>'Cross-Tenant Mailbox Migration',   'desc'=>'Move email, shared mailboxes, distribution lists, and calendar data between tenants without disruption.'],
        ['icon'=>'share-2',       'label'=>'Cross-Tenant SharePoint Migration','desc'=>'Migrate SharePoint sites, libraries, permissions, and content between tenants with structure.'],
      ];
      foreach ($maServices as $s):
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
     BUILT FOR DAY 5 — split
══════════════════════════════════════════════════════════════════ -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div>
        <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">Post-Merger Readiness</p>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight">
          Built for Day 5 Readiness and Post-Merger Integration
        </h2>
        <p class="mt-4 text-gray-500 leading-relaxed">
          Our M&amp;A IT migration services are designed to meet close date deadlines — moving into a Microsoft Cloud environment with minimal disruption. We recommend validated migration processes to identify conflicts and dependencies, eliminating guesswork.
        </p>
        <div class="mt-8 grid sm:grid-cols-2 gap-4">
          <div class="bg-gray-50 rounded-2xl p-5 border border-gray-200">
            <i data-lucide="git-merge" class="w-6 h-6 text-blue-600 mb-3"></i>
            <h3 class="font-semibold text-gray-900 text-sm mb-1">Coexistence Planning</h3>
            <p class="text-gray-500 text-sm leading-relaxed">Support temporary operating states while the combined environment is being shaped.</p>
          </div>
          <div class="bg-gray-50 rounded-2xl p-5 border border-gray-200">
            <i data-lucide="users" class="w-6 h-6 text-blue-600 mb-3"></i>
            <h3 class="font-semibold text-gray-900 text-sm mb-1">User Transition Clarity</h3>
            <p class="text-gray-500 text-sm leading-relaxed">Reduce confusion around new access, collaboration spaces, and changing identities.</p>
          </div>
        </div>
        <div class="mt-6">
          <a href="contact"
             class="inline-flex items-center gap-2 bg-blue-600 text-white font-bold px-6 py-3.5 rounded-xl shadow-md hover:bg-blue-700 transition-all text-sm">
            Plan Your Integration <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>
      <div class="rounded-3xl overflow-hidden shadow-2xl">
        <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=900&auto=format&fit=crop"
             alt="Post-merger IT planning session"
             class="w-full h-[440px] object-cover">
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     EXECUTION MODEL — 4 phases
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">Delivery Framework</p>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Our M&amp;A Migration Execution Model</h2>
      <p class="mt-4 text-gray-500">Start to deploy, delivering results at every milestone.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-12">
      <?php
      $phases = [
        ['n'=>'01','title'=>'Assess',    'icon'=>'search',       'desc'=>'Audit tenants, domains, access models, collaboration platforms, and business-critical dependencies.'],
        ['n'=>'02','title'=>'Design',    'icon'=>'pencil-ruler', 'desc'=>'Define the target operating model, wave sequencing, and coexistence period for both organizations.'],
        ['n'=>'03','title'=>'Integrate', 'icon'=>'git-merge',    'desc'=>'Run controlled migration waves for mail, files, Teams, identity, and collaboration systems.'],
        ['n'=>'04','title'=>'Stabilize', 'icon'=>'shield-check', 'desc'=>'Support users, resolve access issues, and reinforce adoption inside the combined environment.'],
      ];
      foreach ($phases as $phase):
      ?>
        <div class="bg-white rounded-2xl p-6 border border-gray-200 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
          <div class="flex items-center justify-between mb-4">
            <span class="text-blue-600 text-xs font-black uppercase tracking-widest">Phase <?= $phase['n'] ?></span>
            <div class="w-9 h-9 bg-blue-50 rounded-xl flex items-center justify-center">
              <i data-lucide="<?= $phase['icon'] ?>" class="w-4.5 h-4.5 text-blue-600"></i>
            </div>
          </div>
          <h3 class="font-extrabold text-gray-900 text-xl mb-2"><?= $phase['title'] ?></h3>
          <p class="text-gray-500 text-sm leading-relaxed"><?= $phase['desc'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Phase 4 spotlight -->
    <div class="bg-white border border-blue-200 rounded-3xl p-8 shadow-lg max-w-2xl mx-auto text-center">
      <span class="text-blue-600 text-xs font-black uppercase tracking-widest">Phase 4 — Stabilization &amp; Post-Merger Integration</span>
      <h3 class="text-xl font-bold text-gray-900 mt-3 mb-4">We support users from go-live through adoption.</h3>
      <div class="grid sm:grid-cols-3 gap-3 text-sm text-left">
        <?php foreach(['Enable business continuity','Stabilize key operations','Enable full operations'] as $it): ?>
          <div class="flex items-center gap-2 bg-blue-50 rounded-xl px-3 py-2">
            <i data-lucide="check-circle" class="w-4 h-4 text-blue-600 shrink-0"></i>
            <span class="text-gray-700 text-xs font-medium"><?= $it ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     MICROSOFT ECOSYSTEM STACK
══════════════════════════════════════════════════════════════════ -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">Technology Stack</p>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Our Microsoft Ecosystem Execution Stack</h2>
    </div>

    <div class="grid sm:grid-cols-3 gap-6">
      <?php
      $stack = [
        ['name'=>'Microsoft',  'icon'=>'layout-grid', 'color'=>'bg-blue-100 text-blue-600',   'features'=>['Microsoft Native Cross-Tenant Capabilities','Exchange Online migration','SharePoint cross-tenant sync','Identity permissions']],
        ['name'=>'ShareGate',  'icon'=>'share-2',     'color'=>'bg-green-100 text-green-600',  'features'=>['ShareGate','Tenant consolidation','Teams migration','Site data synchronization']],
        ['name'=>'BitTitan',   'icon'=>'zap',         'color'=>'bg-orange-100 text-orange-600','features'=>['BitTitan','Large-scale mailbox migration','Cross-tenant transfers','User scheduling']],
      ];
      foreach ($stack as $tool):
      ?>
        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 hover:border-blue-300 hover:shadow-md transition-all">
          <div class="flex items-center gap-3 mb-5">
            <div class="w-11 h-11 <?= $tool['color'] ?> rounded-xl flex items-center justify-center">
              <i data-lucide="<?= $tool['icon'] ?>" class="w-5 h-5"></i>
            </div>
            <span class="font-bold text-gray-900"><?= $tool['name'] ?></span>
          </div>
          <ul class="space-y-2">
            <?php foreach($tool['features'] as $f): ?>
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <i data-lucide="check" class="w-4 h-4 text-blue-500 shrink-0"></i>
                <?= $f ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
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
        <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=900&auto=format&fit=crop"
             alt="IT teams working on M&A migration"
             class="w-full h-[420px] object-cover">
      </div>
      <div>
        <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">Competitive Advantage</p>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight mb-4">
          Why IT Teams Choose Us for M&amp;A Migration
        </h2>
        <p class="text-gray-500 leading-relaxed mb-8">
          Successful M&amp;A migrations depend on business continuity, decision timing, access control, and the human side of change. We design around all of it.
        </p>
        <div class="space-y-3">
          <?php
          $reasons = [
            ['icon'=>'check-circle','text'=>'Assess the threat before every delivery'],
            ['icon'=>'check-circle','text'=>'Manage to enterprise SLAs and migration objectives'],
            ['icon'=>'check-circle','text'=>'Reduce disruption to user productivity with wave management'],
            ['icon'=>'check-circle','text'=>'Synchronize calendars with their associated tenants'],
            ['icon'=>'check-circle','text'=>'Side-by-side support and migration and on-target integration'],
            ['icon'=>'check-circle','text'=>'Orchestrated permissions with expert scope-of-key change'],
            ['icon'=>'check-circle','text'=>'Experience delivering migration projects at global scale'],
          ];
          foreach ($reasons as $r):
          ?>
            <div class="flex items-center gap-3">
              <i data-lucide="<?= $r['icon'] ?>" class="w-5 h-5 text-blue-600 shrink-0"></i>
              <span class="text-gray-700 text-sm"><?= $r['text'] ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     ENGAGEMENT MODEL
══════════════════════════════════════════════════════════════════ -->
<section class="bg-amber-50 py-20 border-y border-amber-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div>
        <div class="w-14 h-14 bg-amber-200 rounded-2xl flex items-center justify-center mb-5">
          <i data-lucide="handshake" class="w-7 h-7 text-amber-700"></i>
        </div>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900 leading-tight mb-4">Engagement Model</h2>
        <p class="text-gray-600 leading-relaxed mb-6">
          Every engagement includes planning, discovery, execution, and targeted sessions. Different sessions include access to different services and support depending on your organizational needs.
        </p>
        <p class="text-gray-600 leading-relaxed">
          Every engagement includes planning, discovery, execution, and post-migration support across all service areas.
        </p>
      </div>
      <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
        <?php
        $engagements = ['Merger planning','Tenant consolidation','Identity alignment','Coexistence strategy','Post-go-live support','User readiness'];
        foreach ($engagements as $e):
        ?>
          <div class="bg-white border border-amber-200 rounded-xl px-4 py-3 text-center shadow-sm">
            <span class="text-sm font-medium text-gray-700"><?= $e ?></span>
          </div>
        <?php endforeach; ?>
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
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Frequently Asked Questions</h2>
    </div>
    <div class="space-y-3">
      <?php
      $faqs = [
        ['q'=>'How do you prevent data loss during M&A migration?',     'a'=>'We implement a structured validation process with pilot waves, checkpoints, and rollback protocols. Every migration is tested before production cutover.'],
        ['q'=>'Can you work with multiple source tenants simultaneously?','a'=>'Yes. We have experience managing complex multi-tenant consolidations across different geographic regions and compliance jurisdictions.'],
        ['q'=>'How do you maintain compliance during migration?',        'a'=>'Compliance controls, data residency requirements, and access governance are mapped at the discovery phase and maintained throughout execution.'],
        ['q'=>'Can you ensure identity continuity in mixed platforms?',  'a'=>'Yes. We align identities, permissions, and governance controls across both organizations to ensure seamless access after cutover.'],
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
     TRUSTED BRANDS
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gray-50 py-14 border-t border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <p class="text-center text-xs text-gray-400 uppercase tracking-widest font-semibold mb-8">Trusted By Leading Brands Around The World</p>
    <div class="flex flex-wrap items-center justify-center gap-8 lg:gap-12">
      <?php foreach(['Google','Adidas','Tele2','Ericsson','Facebook','Shopify','proxy','Capital','Antler','Disney'] as $b): ?>
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
      Start Your M&amp;A IT Migration
    </h2>
    <p class="mt-4 text-blue-100 leading-relaxed max-w-xl mx-auto">
      When we are onboarding you as a trusted partner, we work as a team to ensure that your merger integration succeeds.
    </p>
    <div class="mt-8">
      <a href="contact"
         class="inline-flex items-center gap-2 bg-white text-blue-700 font-bold px-8 py-4 rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all text-sm">
        Start Your M&amp;A Migration <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/layout-bottom.php'; ?>

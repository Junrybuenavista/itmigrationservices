<?php
$page = [
    'title'       => 'M&A IT Migration Services | Post-Merger IT Integration',
    'description' => 'M&A IT migration services for tenant consolidation, identity alignment, and post-merger technology integration with less disruption.',
    'canonical'   => 'https://itmigrationservices.com/mergers-and-acquisition',
    'active'      => 'ma',
];
require __DIR__ . '/partials/layout-top.php';
?>

<!-- HERO -->
<section class="bg-gradient-to-br from-blue-800 via-blue-700 to-blue-500">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <div class="flex flex-wrap gap-2 mb-6">
          <span class="bg-pink-500/20 border border-pink-400/40 text-pink-200 text-xs font-semibold px-3 py-1.5 rounded-full">Post-Merger Integration</span>
          <span class="bg-green-500/20 border border-green-400/40 text-green-200 text-xs font-semibold px-3 py-1.5 rounded-full">Tenant Consolidation</span>
          <span class="bg-purple-500/20 border border-purple-400/40 text-purple-200 text-xs font-semibold px-3 py-1.5 rounded-full">Identity Alignment</span>
        </div>
        <h1 class="text-4xl sm:text-5xl font-extrabold text-white leading-tight tracking-tight">M&amp;A IT Migration Services</h1>
        <p class="mt-5 text-blue-100 text-base leading-relaxed">Mergers &amp; Acquisitions create new IT realities overnight. IT must move fast without breaking business operations.</p>
        <div class="mt-8">
          <a href="contact" class="inline-flex items-center gap-2 bg-white text-blue-700 font-bold px-6 py-3.5 rounded-xl shadow hover:shadow-lg transition text-sm">Get M&amp;A Migration Assessment <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
        </div>
      </div>
      <div class="float">
        <div class="bg-white/10 backdrop-blur border border-white/20 rounded-3xl p-5 shadow-2xl">
          <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=900&auto=format&fit=crop" alt="M&A IT integration" class="w-full h-52 object-cover rounded-2xl mb-4">
          <div class="grid grid-cols-2 gap-3">
            <div class="bg-white/10 rounded-2xl p-4">
              <p class="text-xs text-blue-200 font-semibold mb-1">Integration Scope</p>
              <p class="text-white text-sm font-medium">Mail, files, identity, collaboration, and coexistence planning.</p>
            </div>
            <div class="bg-blue-500/50 border border-blue-400/30 rounded-2xl p-4">
              <p class="text-xs text-blue-200 font-semibold mb-1">Outcome</p>
              <p class="text-white text-sm font-medium">A cleaner target environment and controlled integration path.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PLATFORM TAGS -->
<section class="bg-gray-950 py-6">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-wrap items-center justify-center gap-3">
    <?php foreach(['Microsoft 365','Azure AD','Exchange','Teams','SharePoint','Identity'] as $t): ?>
      <span class="bg-gray-800 border border-gray-700 text-gray-300 text-xs font-semibold px-4 py-2 rounded-full"><?= $t ?></span>
    <?php endforeach; ?>
  </div>
</section>

<!-- SERVICES COVERED (dark) -->
<section class="bg-gray-950 pb-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <p class="text-gray-400 text-sm mb-2">We structure every M&amp;A digital transition to provide continuity, align with the milestones, and keep business operations running.</p>
      <h2 class="text-3xl font-extrabold text-white">Our Mergers &amp; Acquisition IT Services Cover</h2>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php
      $maServices = [
        ['icon'=>'scissors',    'title'=>'IT Carve Out Migration',           'desc'=>'Cleanly separate systems, data, and identities from the parent company to the carved-out entity.'],
        ['icon'=>'merge',       'title'=>'Post-Merger IT Integration',        'desc'=>'Unify two technology environments after an acquisition with structured planning and wave sequencing.'],
        ['icon'=>'users',       'title'=>'Tenant Consolidation Migration',    'desc'=>'Combine Microsoft 365 environments into a cleaner target architecture with a practical coexistence plan.'],
        ['icon'=>'globe-2',     'title'=>'Domain &amp; Identity Separation',  'desc'=>'Align domains, SSO, permissions, groups, and governance controls across both organizations.'],
        ['icon'=>'mail',        'title'=>'Cross-Tenant Mailbox Migration',    'desc'=>'Move email, shared mailboxes, distribution lists, and calendar data between tenants without disruption.'],
        ['icon'=>'share-2',     'title'=>'Cross-Tenant SharePoint Migration', 'desc'=>'Migrate SharePoint sites, libraries, permissions, and content between tenants with full structure.'],
      ];
      foreach ($maServices as $s): ?>
        <div class="bg-gray-900 border border-gray-800 rounded-2xl p-7 hover:border-blue-500/50 hover:-translate-y-1 transition-all flex flex-col items-center text-center">
          <div class="w-14 h-14 bg-blue-600/20 rounded-2xl flex items-center justify-center mb-4">
            <i data-lucide="<?= $s['icon'] ?>" class="w-7 h-7 text-blue-400"></i>
          </div>
          <h3 class="text-white font-semibold text-sm leading-snug mb-2"><?= $s['title'] ?></h3>
          <p class="text-gray-400 text-xs leading-relaxed"><?= $s['desc'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- BUILT FOR DAY 5 -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight text-gray-900">Built for Day 5 Readiness and Post-Merger Integration</h2>
        <p class="mt-4 text-gray-500 text-sm leading-relaxed">Our M&amp;A IT migration services are designed to meet close date deadlines — moving into a Microsoft Cloud environment with minimal disruption. We recommend validated migration processes to identify conflicts and dependencies, eliminating guesswork.</p>
        <div class="mt-8 space-y-3">
          <?php foreach(['Microsoft Native Cross-Tenant capabilities for mail, Teams, SharePoint, and identity','SharePoint tenant-to-tenant migration with full content and permission mapping','Teams and collaboration structure rebuilt around the new combined entity'] as $item): ?>
            <div class="flex items-start gap-3">
              <i data-lucide="check-circle" class="w-4 h-4 text-blue-600 shrink-0 mt-0.5"></i>
              <span class="text-gray-700 text-sm"><?= $item ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div>
        <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=900&auto=format&fit=crop" alt="Post-merger IT planning" class="w-full h-[440px] object-cover rounded-3xl shadow-2xl">
      </div>
    </div>
  </div>
</section>

<!-- EXECUTION MODEL VIDEO AREA -->
<section class="bg-gray-50 py-20">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-3xl border border-gray-200 shadow-lg overflow-hidden mb-12">
      <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1200&auto=format&fit=crop" alt="Migration execution dashboard" class="w-full h-72 object-cover">
    </div>
    <div class="text-center mb-12">
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900">Our M&amp;A Migration Execution Model</h2>
      <p class="mt-3 text-gray-500 text-sm">Start to deploy, delivering results at every milestone.</p>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-8">
      <?php foreach([
        ['01','Assess',   'search',      'Audit tenants, domains, access models, collaboration platforms, and business-critical dependencies.'],
        ['02','Design',   'pencil-ruler','Define the target operating model, wave sequencing, and coexistence period for both organizations.'],
        ['03','Integrate','git-merge',   'Run controlled migration waves for mail, files, Teams, identity, and collaboration systems.'],
        ['04','Stabilize','shield-check','Support users, resolve access issues, and reinforce adoption inside the combined environment.'],
      ] as [$n,$title,$icon,$desc]): ?>
        <div class="bg-white border border-gray-200 rounded-2xl p-5 hover:shadow-md hover:-translate-y-0.5 transition-all">
          <div class="flex items-center justify-between mb-3">
            <span class="text-blue-600 text-xs font-black uppercase tracking-widest">Phase <?= $n ?></span>
            <div class="w-8 h-8 bg-blue-50 rounded-xl flex items-center justify-center">
              <i data-lucide="<?= $icon ?>" class="w-4 h-4 text-blue-600"></i>
            </div>
          </div>
          <h3 class="font-extrabold text-gray-900 text-lg mb-2"><?= $title ?></h3>
          <p class="text-gray-500 text-xs leading-relaxed"><?= $desc ?></p>
        </div>
      <?php endforeach; ?>
    </div>
    <!-- Phase 4 spotlight -->
    <div class="bg-white border border-blue-200 rounded-2xl p-6 shadow">
      <p class="text-blue-600 text-xs font-bold uppercase tracking-widest mb-2">Phase 4 – Stabilization &amp; Post-Merger Integration</p>
      <div class="grid sm:grid-cols-3 gap-3">
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

<!-- MICROSOFT ECOSYSTEM STACK -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900">Our Microsoft Ecosystem Execution Stack</h2>
    </div>
    <div class="grid sm:grid-cols-3 gap-6">
      <?php foreach([
        ['Microsoft','layout-grid','bg-blue-100 text-blue-700',['Microsoft Native Cross-Tenant Capabilities','Exchange Online migration','SharePoint cross-tenant sync','Identity permissions']],
        ['ShareGate', 'share-2',   'bg-green-100 text-green-700',['Tenant consolidation','Teams migration','Site data synchronization']],
        ['BitTitan',  'zap',       'bg-orange-100 text-orange-700',['Large-scale mailbox migration','Cross-tenant transfers','User scheduling']],
      ] as [$name,$icon,$color,$feats]): ?>
        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 hover:border-blue-300 hover:shadow-md transition-all">
          <div class="flex items-center gap-3 mb-5">
            <div class="w-11 h-11 <?= $color ?> rounded-xl flex items-center justify-center">
              <i data-lucide="<?= $icon ?>" class="w-5 h-5"></i>
            </div>
            <span class="font-bold text-gray-900"><?= $name ?></span>
          </div>
          <ul class="space-y-2">
            <?php foreach($feats as $f): ?>
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <i data-lucide="check" class="w-4 h-4 text-blue-500 shrink-0"></i><?= $f ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- WHY CHOOSE US -->
<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div>
        <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=900&auto=format&fit=crop" alt="Why choose us" class="w-full h-[420px] object-cover rounded-3xl shadow-xl">
      </div>
      <div>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight text-gray-900 mb-6">Why IT Teams Choose Us for M&amp;A Migration</h2>
        <div class="space-y-3">
          <?php foreach([
            'Assess the threat before every delivery',
            'Manage to enterprise SLAs and migration objectives',
            'Reduce disruption to user productivity with wave management',
            'Synchronize calendars with their associated tenants',
            'Side-by-side support and migration and on-target integration',
            'Orchestrated permissions with expert scope-of-key change',
            'Experience delivering migration projects at global scale',
          ] as $r): ?>
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

<!-- ENGAGEMENT MODEL -->
<section class="bg-amber-50 py-20 border-y border-amber-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div>
        <div class="w-14 h-14 bg-amber-200 rounded-2xl flex items-center justify-center mb-5">
          <i data-lucide="handshake" class="w-7 h-7 text-amber-700"></i>
        </div>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900 leading-tight mb-4">Engagement Model</h2>
        <p class="text-gray-600 text-sm leading-relaxed mb-3">Every engagement includes planning, discovery, execution, and targeted sessions. Different sessions include access to different services and support depending on your organizational needs.</p>
        <p class="text-gray-600 text-sm leading-relaxed">Every engagement includes planning, discovery, execution, and post-migration support across all service areas.</p>
      </div>
      <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
        <?php foreach(['Merger planning','Tenant consolidation','Identity alignment','Coexistence strategy','Post-go-live support','User readiness'] as $e): ?>
          <div class="bg-white border border-amber-200 rounded-xl px-4 py-3 text-center shadow-sm">
            <span class="text-sm font-medium text-gray-700"><?= $e ?></span>
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
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900">Frequently Asked Questions</h2>
    </div>
    <div class="space-y-3">
      <?php foreach([
        ['How do you prevent data loss during M&A migration?',      'We implement a structured validation process with pilot waves, checkpoints, and rollback protocols. Every migration is tested before production cutover.'],
        ['Can you work with multiple source tenants simultaneously?','Yes. We have experience managing complex multi-tenant consolidations across different geographic regions and compliance jurisdictions.'],
        ['How do you maintain compliance during migration?',        'Compliance controls, data residency requirements, and access governance are mapped at the discovery phase and maintained throughout execution.'],
        ['Can you ensure identity continuity in mixed platforms?',  'Yes. We align identities, permissions, and governance controls across both organizations to ensure seamless access after cutover.'],
      ] as [$q,$a]): ?>
        <div class="faq-item border border-gray-200 rounded-2xl overflow-hidden">
          <button class="faq-toggle w-full flex items-center justify-between px-6 py-5 text-left hover:bg-gray-50 transition-colors">
            <span class="font-semibold text-gray-900 text-sm pr-4"><?= $q ?></span>
            <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-blue-600 shrink-0"></i>
          </button>
          <div class="faq-answer px-6 pb-5 border-t border-gray-100 pt-4">
            <p class="text-gray-500 text-sm leading-relaxed"><?= $a ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- TRUSTED BRANDS -->
<section class="bg-gray-50 py-14 border-t border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <p class="text-center text-xs text-gray-400 uppercase tracking-widest font-semibold mb-8">Trusted By Leading Brands Around The World</p>
    <div class="flex flex-wrap items-center justify-center gap-8 lg:gap-14">
      <?php foreach(['Google','Adidas','Tele2','Ericsson','Facebook','Shopify','proxy','Capital','Antler','Disney'] as $b): ?>
        <span class="text-gray-400 font-bold text-base tracking-tight"><?= $b ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="bg-gradient-to-br from-blue-800 via-blue-700 to-blue-500 py-20">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight">Start Your M&amp;A IT Migration</h2>
    <p class="mt-4 text-blue-100 text-sm leading-relaxed max-w-xl mx-auto">When we are onboarding you as a trusted partner, we work as a team to ensure that your merger integration succeeds.</p>
    <div class="mt-8">
      <a href="contact" class="inline-flex items-center gap-2 bg-white text-blue-700 font-bold px-8 py-4 rounded-xl shadow hover:shadow-lg transition text-sm">Start Your M&amp;A Migration <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/layout-bottom.php'; ?>

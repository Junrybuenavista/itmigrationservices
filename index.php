<?php
$page = [
    'title'       => 'IT Migration Services | Cloud, Microsoft 365 & M&A Migration',
    'description' => 'IT migration services for Microsoft 365, cloud, data, and M&A transitions with planning, validation, and business continuity.',
    'canonical'   => 'https://itmigrationservices.com/',
    'active'      => 'home',
];
require __DIR__ . '/partials/layout-top.php';
?>

<!-- ══════════════════════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gradient-to-br from-blue-800 via-blue-700 to-blue-500 text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28">
    <div class="grid lg:grid-cols-2 gap-12 items-center">

      <!-- Copy -->
      <div>
        <span class="inline-flex items-center gap-2 bg-white/10 border border-white/20 text-white/90 text-xs font-semibold px-4 py-2 rounded-full mb-6 backdrop-blur-sm">
          <i data-lucide="shield-check" class="w-4 h-4"></i>
          Migration Services Built for Continuity
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight tracking-tight">
          IT Migration Services Built for Secure Growth and Minimal Downtime
        </h1>
        <p class="mt-6 text-blue-100 text-lg leading-relaxed max-w-xl">
          Whether you are moving from on-premises infrastructure, consolidating after acquisition, or executing a full cloud migration strategy, we handle the entire journey end to end.
        </p>
        <div class="mt-8 flex flex-wrap gap-3">
          <a href="contact"
             class="inline-flex items-center gap-2 bg-white text-blue-700 font-bold px-6 py-3.5 rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all text-sm">
            Request an IT Migration Assessment
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
          <a href="how-it-works"
             class="inline-flex items-center gap-2 bg-white/10 border border-white/25 text-white font-semibold px-6 py-3.5 rounded-xl hover:bg-white/20 transition-all text-sm backdrop-blur-sm">
            Explore Our Process
          </a>
        </div>
      </div>

      <!-- Dashboard card -->
      <div class="animate-float">
        <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-3xl p-5 shadow-2xl">
          <div class="flex items-center justify-between mb-4">
            <div>
              <p class="text-xs text-blue-200 uppercase tracking-widest font-semibold">Migration Control Center</p>
              <h2 class="text-lg font-bold text-white mt-0.5">A migration dashboard your team can trust</h2>
            </div>
            <span class="bg-green-400/20 border border-green-400/40 text-green-300 text-xs font-semibold px-2.5 py-1 rounded-full">Live</span>
          </div>
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=900&auto=format&fit=crop"
               alt="IT migration dashboard"
               class="w-full h-52 object-cover rounded-2xl">
          <div class="grid grid-cols-2 gap-3 mt-4">
            <div class="bg-white/10 rounded-2xl p-4">
              <div class="flex items-center gap-2 mb-2">
                <div class="w-7 h-7 bg-blue-400/30 rounded-lg flex items-center justify-center">
                  <i data-lucide="server" class="w-3.5 h-3.5 text-blue-200"></i>
                </div>
                <span class="text-xs text-blue-200 font-semibold">Infrastructure</span>
              </div>
              <p class="text-xs text-white/70">Move workloads with clear dependencies and staged rollout.</p>
            </div>
            <div class="bg-blue-600/40 rounded-2xl p-4 border border-blue-400/30">
              <div class="flex items-center gap-2 mb-2">
                <div class="w-7 h-7 bg-blue-300/30 rounded-lg flex items-center justify-center">
                  <i data-lucide="shield" class="w-3.5 h-3.5 text-blue-200"></i>
                </div>
                <span class="text-xs text-blue-200 font-semibold">Security</span>
              </div>
              <p class="text-xs text-white/70">Governance, identity, and access controls aligned from day one.</p>
            </div>
            <div class="bg-white/10 rounded-2xl p-4">
              <div class="flex items-center gap-2 mb-2">
                <div class="w-7 h-7 bg-blue-400/30 rounded-lg flex items-center justify-center">
                  <i data-lucide="users" class="w-3.5 h-3.5 text-blue-200"></i>
                </div>
                <span class="text-xs text-blue-200 font-semibold">Users</span>
              </div>
              <p class="text-xs text-white/70">Minimize confusion with communication, onboarding, and support.</p>
            </div>
            <div class="bg-white/10 rounded-2xl p-4">
              <div class="flex items-center gap-2 mb-2">
                <div class="w-7 h-7 bg-blue-400/30 rounded-lg flex items-center justify-center">
                  <i data-lucide="database" class="w-3.5 h-3.5 text-blue-200"></i>
                </div>
                <span class="text-xs text-blue-200 font-semibold">Data</span>
              </div>
              <p class="text-xs text-white/70">Files, permissions, and business content preserved with validation.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     LOGO BAR
══════════════════════════════════════════════════════════════════ -->
<section class="bg-white border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <p class="text-center text-xs text-gray-400 uppercase tracking-widest font-semibold mb-6">Trusted by teams at leading organizations</p>
    <div class="flex flex-wrap items-center justify-center gap-8 lg:gap-14">
      <?php
      $brands = ['Google','FedEx','Skype','Slack','Payoneer','Shopify'];
      foreach ($brands as $b):
      ?>
        <span class="text-gray-400 font-bold text-lg tracking-tight hover:text-gray-600 transition-colors cursor-default"><?= $b ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     EXPLORE OUR SERVICES — dark section
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gray-900 text-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-14">
      <p class="text-blue-400 text-xs uppercase tracking-widest font-semibold mb-3">What We Offer</p>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Explore Our IT Migration Services</h2>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php
      $services = [
        ['icon'=>'layout-grid',  'label'=>'Microsoft 365 Migration Services', 'href'=>'microsoft-365',          'desc'=>'Email, Teams, SharePoint, OneDrive, and identity migration with structured planning.'],
        ['icon'=>'handshake',    'label'=>'M&A IT Migration Services',        'href'=>'mergers-and-acquisition', 'desc'=>'Tenant consolidation, identity alignment, and post-merger integration at scale.'],
        ['icon'=>'cloud',        'label'=>'Cloud Migration Services',         'href'=>'contact',                 'desc'=>'Move workloads to Azure, AWS, or Google Cloud with validated sequencing.'],
        ['icon'=>'database',     'label'=>'Data Migration Services',          'href'=>'contact',                 'desc'=>'Structured data migration with validation, compliance, and zero data loss.'],
        ['icon'=>'app-window',   'label'=>'Application Migration Services',   'href'=>'contact',                 'desc'=>'Re-host, re-platform, or modernize applications with business continuity.'],
        ['icon'=>'shield-check', 'label'=>'Identity & Security Migration',    'href'=>'contact',                 'desc'=>'Domain, SSO, permissions, and governance controls realigned to target state.'],
      ];
      foreach ($services as $s):
      ?>
        <a href="<?= $s['href'] ?>"
           class="group bg-gray-800 border border-gray-700 rounded-2xl p-6 hover:bg-gray-750 hover:border-blue-500/50 hover:-translate-y-1 transition-all">
          <div class="w-12 h-12 bg-blue-600/20 rounded-xl flex items-center justify-center mb-4 group-hover:bg-blue-600/30 transition-colors">
            <i data-lucide="<?= $s['icon'] ?>" class="w-6 h-6 text-blue-400"></i>
          </div>
          <h3 class="font-bold text-white text-base leading-snug mb-2"><?= $s['label'] ?></h3>
          <p class="text-gray-400 text-sm leading-relaxed"><?= $s['desc'] ?></p>
          <div class="mt-4 flex items-center gap-1 text-blue-400 text-xs font-semibold group-hover:gap-2 transition-all">
            Learn more <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     END TO END — split section
══════════════════════════════════════════════════════════════════ -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-center">

      <!-- Copy -->
      <div>
        <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">Full-Lifecycle Coverage</p>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight">
          End to End IT Migration Services That Reduce Risk and Drive Innovation
        </h2>
        <p class="mt-4 text-gray-500 leading-relaxed">
          We don't just move systems. We reduce risk, map dependencies, preserve access, and adapt as the migration becomes a controlled transition instead of an operational shock.
        </p>
        <div class="mt-8 space-y-3">
          <?php
          $features = [
            ['icon'=>'layout-grid', 'title'=>'Microsoft Azure',         'desc'=>'Full cloud migration strategy and execution on Microsoft Azure with compliance and uptime built in.'],
            ['icon'=>'server',      'title'=>'Secure Old Servers',      'desc'=>'Decommission legacy Windows Server environments without disrupting dependent applications.'],
            ['icon'=>'cloud',       'title'=>'Google Cloud Platform',   'desc'=>'Migrate workloads, data, and applications into GCP with validated cutover planning.'],
            ['icon'=>'database',    'title'=>'IBM Cloud',               'desc'=>'Enterprise-grade IBM Cloud migration with performance validation and post-migration support.'],
          ];
          foreach ($features as $f):
          ?>
            <div class="flex items-start gap-4 bg-gray-50 rounded-xl p-4 hover:bg-blue-50 transition-colors">
              <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center shrink-0">
                <i data-lucide="<?= $f['icon'] ?>" class="w-5 h-5 text-blue-600"></i>
              </div>
              <div>
                <p class="font-semibold text-gray-900 text-sm"><?= $f['title'] ?></p>
                <p class="text-gray-500 text-sm mt-0.5 leading-relaxed"><?= $f['desc'] ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Image -->
      <div class="relative">
        <div class="rounded-3xl overflow-hidden shadow-2xl">
          <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=900&auto=format&fit=crop"
               alt="IT migration planning team"
               class="w-full h-[480px] object-cover">
        </div>
        <div class="absolute -bottom-6 -left-6 bg-blue-600 text-white rounded-2xl px-6 py-4 shadow-xl">
          <p class="text-3xl font-black">10k+</p>
          <p class="text-blue-200 text-xs mt-0.5">Accounts migrated</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     SERVICES + ILLUSTRATION — split section
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-center">

      <!-- Image -->
      <div class="relative">
        <div class="rounded-3xl overflow-hidden shadow-xl">
          <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=900&auto=format&fit=crop"
               alt="Cloud migration infrastructure"
               class="w-full h-[420px] object-cover">
        </div>
      </div>

      <!-- Copy -->
      <div>
        <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">IT Migration Services Built Around Real Business Needs</p>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight">
          Cloud migration that fits your business, not a vendor template
        </h2>
        <p class="mt-4 text-gray-500 leading-relaxed">Our cloud migration project managers help organizations navigate the full migration life cycle with structured planning and risk reduction.</p>

        <div class="mt-8 space-y-3">
          <?php
          $caps = [
            ['icon'=>'server',         'label'=>'Migrate Windows Server Workloads to Cloud Services'],
            ['icon'=>'building-2',     'label'=>'Consolidate Premises Data Centers Into Public or Private Cloud'],
            ['icon'=>'bar-chart-2',    'label'=>'Data Warehouse Migration and Data Lake Optimization'],
            ['icon'=>'app-window',     'label'=>'Application Modernization and Infrastructure Optimization'],
          ];
          foreach ($caps as $c):
          ?>
            <div class="flex items-center gap-3 bg-white rounded-xl px-4 py-3 shadow-sm border border-gray-100 hover:border-blue-200 hover:shadow-md transition-all">
              <div class="w-8 h-8 bg-blue-50 rounded-lg flex items-center justify-center shrink-0">
                <i data-lucide="<?= $c['icon'] ?>" class="w-4 h-4 text-blue-600"></i>
              </div>
              <p class="text-sm font-medium text-gray-700"><?= $c['label'] ?></p>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="mt-8">
          <a href="contact"
             class="inline-flex items-center gap-2 bg-blue-600 text-white font-bold px-6 py-3.5 rounded-xl shadow-md hover:bg-blue-700 hover:shadow-lg hover:-translate-y-0.5 transition-all text-sm">
            Explore More
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     CLOUD MIGRATION PROCESS
══════════════════════════════════════════════════════════════════ -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">How We Work</p>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Cloud Migration Process</h2>
      <p class="mt-4 text-gray-500">A proven migration framework for reducing surprises, coordinating teams, and moving systems with more confidence.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php
      $steps = [
        ['n'=>'1','title'=>'Cloud Migration Strategy And Planning',      'desc'=>'We evaluate existing infrastructure, define cloud readiness, and design a migration roadmap aligned to your business goals and timeline.'],
        ['n'=>'2','title'=>'Architecture And Readiness Assessment',       'desc'=>'We audit technical dependencies, workload configurations, security controls, and compliance requirements before any migration moves begin.'],
        ['n'=>'3','title'=>'Migration Execution And Data Transfer',       'desc'=>'Controlled migration waves with validation checkpoints ensure your data, applications, and workloads move without disruption.'],
        ['n'=>'4','title'=>'Validation And Knowledge Transfer',           'desc'=>'We verify every migrated system performs correctly and equip your internal teams with the documentation and training to operate confidently.'],
        ['n'=>'5','title'=>'Ongoing Managed Services And Optimization',   'desc'=>'Post-migration support covers performance tuning, cost optimization, and cloud governance as your environment stabilizes and scales.'],
        ['n'=>'6','title'=>'Governance, Security, And Business Continuity Assurance', 'desc'=>'End-to-end compliance, access controls, and disaster recovery are built into the migration plan from the start.'],
      ];
      foreach ($steps as $step):
      ?>
        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 hover:border-blue-300 hover:shadow-md transition-all">
          <div class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center font-black text-sm mb-4">
            <?= $step['n'] ?>
          </div>
          <h3 class="font-bold text-gray-900 text-base mb-2"><?= $step['title'] ?></h3>
          <p class="text-gray-500 text-sm leading-relaxed"><?= $step['desc'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-10">
      <a href="contact"
         class="inline-flex items-center gap-2 bg-blue-600 text-white font-bold px-6 py-3.5 rounded-xl shadow-md hover:bg-blue-700 transition-all text-sm">
        Talk to a Migration Expert
        <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     PLATFORMS WE SUPPORT
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">Multi-Cloud Expertise</p>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Platforms We Support &amp; Cloud Ecosystem</h2>
      <p class="mt-4 text-gray-500">Cloud Migration Services Across Leading Cloud Providers</p>
    </div>

    <div class="grid lg:grid-cols-2 gap-12 items-center">

      <!-- Platforms list -->
      <div class="space-y-4">
        <?php
        $platforms = [
          ['name'=>'Microsoft Azure',     'pct'=>92, 'color'=>'bg-blue-500'],
          ['name'=>'Mobile Web Services', 'pct'=>84, 'color'=>'bg-orange-400'],
          ['name'=>'Google Cloud Platform','pct'=>78, 'color'=>'bg-yellow-400'],
          ['name'=>'IBM Cloud',           'pct'=>67, 'color'=>'bg-blue-900'],
        ];
        foreach ($platforms as $p):
        ?>
          <div class="bg-white rounded-2xl p-5 border border-gray-200 shadow-sm">
            <div class="flex items-center justify-between mb-3">
              <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-gray-100 rounded-xl flex items-center justify-center">
                  <i data-lucide="cloud" class="w-4 h-4 text-gray-500"></i>
                </div>
                <span class="font-semibold text-gray-800 text-sm"><?= $p['name'] ?></span>
              </div>
              <span class="text-blue-600 font-bold text-sm"><?= $p['pct'] ?>%</span>
            </div>
            <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
              <div class="h-full <?= $p['color'] ?> rounded-full" style="width:<?= $p['pct'] ?>%"></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Stats -->
      <div class="relative">
        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=900&auto=format&fit=crop"
             alt="Cloud infrastructure"
             class="w-full h-72 object-cover rounded-3xl shadow-xl mb-6">
        <div class="grid grid-cols-3 gap-4">
          <div class="bg-white rounded-2xl p-4 text-center border border-gray-100 shadow-sm">
            <p class="text-2xl font-black text-blue-600">30+</p>
            <p class="text-xs text-gray-500 mt-1">Migration programs</p>
          </div>
          <div class="bg-white rounded-2xl p-4 text-center border border-gray-100 shadow-sm">
            <p class="text-2xl font-black text-blue-600">10k+</p>
            <p class="text-xs text-gray-500 mt-1">Accounts transitioned</p>
          </div>
          <div class="bg-blue-600 rounded-2xl p-4 text-center shadow-md">
            <p class="text-2xl font-black text-white">Zero</p>
            <p class="text-xs text-blue-200 mt-1">Guesswork</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     CASE STUDY
══════════════════════════════════════════════════════════════════ -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">Real Results</p>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Case Study</h2>
      <p class="mt-4 text-gray-500">A simple view of how a better plan turns migration into a controlled business project.</p>
    </div>

    <div class="bg-gray-50 border border-gray-200 rounded-3xl overflow-hidden shadow-lg">
      <div class="grid lg:grid-cols-3 gap-0">
        <div class="lg:col-span-2 p-8 lg:p-10">
          <div class="flex items-center justify-between mb-6">
            <div>
              <p class="text-xs text-gray-400 uppercase tracking-widest font-semibold mb-1">Scenario</p>
              <h3 class="text-2xl font-extrabold text-gray-900">Multi-region infrastructure and collaboration migration</h3>
            </div>
            <span class="bg-green-100 text-green-700 text-xs font-bold px-3 py-1.5 rounded-full border border-green-200 shrink-0 ml-4">Completed</span>
          </div>
          <p class="text-gray-600 leading-relaxed mb-6">
            The client needed to migrate users, file stores, and productivity systems while preserving access and minimizing operational disruption across three regions.
          </p>
          <div class="grid grid-cols-3 gap-4 mb-8">
            <div class="bg-white rounded-xl p-4 text-center border border-gray-200">
              <p class="text-3xl font-black text-blue-600">3</p>
              <p class="text-xs text-gray-500 mt-1">Migration waves</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center border border-gray-200">
              <p class="text-3xl font-black text-green-600">0</p>
              <p class="text-xs text-gray-500 mt-1">Critical outages</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center border border-gray-200">
              <p class="text-3xl font-black text-blue-600">100%</p>
              <p class="text-xs text-gray-500 mt-1">Validation coverage</p>
            </div>
          </div>
          <div class="grid sm:grid-cols-4 gap-3">
            <?php
            $phases = [
              ['icon'=>'search',       'title'=>'Discovery',    'desc'=>'Audited systems, stakeholders, and sequencing.'],
              ['icon'=>'pencil-ruler', 'title'=>'Planning',     'desc'=>'Migration model shaped around business continuity.'],
              ['icon'=>'play-circle',  'title'=>'Execution',    'desc'=>'Migration waves with monitoring and validation.'],
              ['icon'=>'settings',     'title'=>'Optimization', 'desc'=>'Post-cutover support to validate the platform.'],
            ];
            foreach ($phases as $ph):
            ?>
              <div class="bg-white rounded-xl p-3 border border-gray-200 text-center">
                <div class="w-8 h-8 bg-blue-50 rounded-lg flex items-center justify-center mx-auto mb-2">
                  <i data-lucide="<?= $ph['icon'] ?>" class="w-4 h-4 text-blue-600"></i>
                </div>
                <p class="text-xs font-bold text-gray-800"><?= $ph['title'] ?></p>
                <p class="text-xs text-gray-500 mt-1 leading-tight"><?= $ph['desc'] ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="bg-blue-600 p-8 lg:p-10 flex flex-col justify-center text-white">
          <p class="text-blue-200 text-xs uppercase tracking-widest font-semibold mb-4">Client Outcome</p>
          <div class="space-y-4">
            <?php
            $outcomes = [
              'Tiny cloud migration project executed with real-time monitoring, structured analytics, and clear governance for all transitions.',
              'Fury IT migration services are designed for organizations that cannot afford downtime, data risk, or operational disruption.',
            ];
            foreach ($outcomes as $o):
            ?>
              <div class="flex items-start gap-3">
                <i data-lucide="check-circle" class="w-5 h-5 text-green-400 shrink-0 mt-0.5"></i>
                <p class="text-blue-100 text-sm leading-relaxed"><?= $o ?></p>
              </div>
            <?php endforeach; ?>
          </div>
          <a href="contact"
             class="mt-8 inline-flex items-center justify-center gap-2 bg-white text-blue-700 font-bold px-5 py-3 rounded-xl text-sm hover:bg-blue-50 transition-colors">
            Start Your Project <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     STATS / WHY CHOOSE US
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid sm:grid-cols-3 gap-8">
      <?php
      $stats = [
        ['icon'=>'clock',       'color'=>'bg-blue-100 text-blue-600',   'title'=>'Minimal Downtime Execution',       'desc'=>'Your operations stay live. We execute migrations with precision sequencing and live monitoring so disruption stays minimal throughout.'],
        ['icon'=>'briefcase',   'color'=>'bg-purple-100 text-purple-600','title'=>'Business Continuity First',         'desc'=>'Migration is not a technical task — it is a business decision. We protect your workflows, revenue, and customer experience at every stage.'],
        ['icon'=>'shield-check','color'=>'bg-green-100 text-green-600',  'title'=>'Security and Compliance Built In',  'desc'=>'Governance, identity controls, and compliance checkpoints are designed into the migration plan, not added as an afterthought.'],
      ];
      foreach ($stats as $s):
      ?>
        <div class="text-center px-4">
          <div class="w-16 h-16 <?= $s['color'] ?> rounded-2xl flex items-center justify-center mx-auto mb-5">
            <i data-lucide="<?= $s['icon'] ?>" class="w-8 h-8"></i>
          </div>
          <h3 class="font-bold text-gray-900 text-lg mb-3"><?= $s['title'] ?></h3>
          <p class="text-gray-500 text-sm leading-relaxed"><?= $s['desc'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     FAQ
══════════════════════════════════════════════════════════════════ -->
<section class="bg-white py-20">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">Got Questions?</p>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Frequently Asked Questions</h2>
      <p class="mt-4 text-gray-500">Answers to the migration questions we hear most often from IT leaders and operations teams.</p>
    </div>

    <div class="space-y-3">
      <?php
      $faqs = [
        ['q'=>'What types of migration do you support?',
         'a'=>'We support Microsoft 365 migration, M&A integration, cloud migration, data migration, infrastructure modernization, and identity transition work.'],
        ['q'=>'How do you reduce migration risk?',
         'a'=>'Through discovery, dependency mapping, pilot execution, validation checkpoints, communication planning, and structured cutover support.'],
        ['q'=>'Can you help after the migration is complete?',
         'a'=>'Yes. We support post-migration stabilization, user onboarding, issue resolution, and environment optimization after go-live.'],
        ['q'=>'How long does a typical cloud migration take?',
         'a'=>'Timeline depends on scope, system complexity, and user count. We provide a detailed migration schedule during the assessment phase.'],
      ];
      foreach ($faqs as $i => $faq):
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
     CTA BANNER
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gradient-to-br from-blue-800 via-blue-700 to-blue-500 py-20 text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <p class="text-blue-200 text-xs uppercase tracking-widest font-semibold mb-3">Start Today</p>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight">
          Ready To Start Your Cloud Migration Journey?
        </h2>
        <p class="mt-4 text-blue-100 leading-relaxed">
          Start with a migration team that plans carefully, executes cleanly, and keeps your users supported throughout the entire transition.
        </p>
        <div class="mt-8 flex flex-wrap gap-3">
          <a href="contact"
             class="inline-flex items-center gap-2 bg-white text-blue-700 font-bold px-6 py-3.5 rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all text-sm">
            Request an IT Migration Assessment
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>
      <div class="hidden lg:flex items-center justify-center">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1573496773905-f5b17e717f05?q=80&w=700&auto=format&fit=crop"
               alt="Migration specialist"
               class="w-80 h-72 object-cover rounded-3xl shadow-2xl opacity-80">
          <div class="absolute -top-4 -right-4 bg-white text-blue-700 rounded-2xl px-5 py-3 shadow-xl">
            <p class="font-black text-xl">PB-scale</p>
            <p class="text-xs text-gray-500 mt-0.5">File &amp; content migration</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/layout-bottom.php'; ?>

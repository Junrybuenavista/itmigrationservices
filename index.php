<?php
$page = [
    'title'       => 'IT Migration Services | Cloud, Microsoft 365 & M&A Migration',
    'description' => 'IT migration services for Microsoft 365, cloud, data, and M&A transitions.',
    'canonical'   => 'https://itmigrationservices.com/',
    'active'      => 'home',
];
require __DIR__ . '/partials/layout-top.php';
?>

<!-- HERO -->
<section class="bg-gradient-to-br from-blue-800 via-blue-700 to-blue-500">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <h1 class="text-4xl sm:text-5xl font-extrabold text-white leading-tight tracking-tight">IT Migration Services Built for Secure Growth and Minimal Downtime</h1>
        <p class="mt-5 text-blue-100 text-base leading-relaxed">Whether you are moving from on-premises infrastructure, consolidating environments after acquisition, or executing a full cloud migration strategy, we handle the entire journey end to end.</p>
        <div class="mt-8">
          <a href="contact" class="inline-flex items-center gap-2 bg-white text-blue-700 font-bold px-6 py-3.5 rounded-xl shadow hover:shadow-lg transition text-sm">Request an IT Migration Assessment <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
        </div>
      </div>
      <div class="float">
        <div class="bg-white/10 backdrop-blur border border-white/20 rounded-3xl p-4 shadow-2xl">
          <div class="flex items-center justify-between mb-3 bg-white/10 rounded-2xl px-4 py-3">
            <div>
              <p class="text-blue-200 text-[10px] uppercase tracking-widest font-bold">Migration Control Center</p>
              <p class="text-white font-semibold text-sm mt-0.5">A migration dashboard your team can trust</p>
            </div>
            <span class="bg-green-400 text-green-900 text-[10px] font-bold px-2 py-0.5 rounded-full">Live</span>
          </div>
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=900&auto=format&fit=crop" alt="Migration dashboard" class="w-full h-44 object-cover rounded-2xl">
          <div class="grid grid-cols-2 gap-2 mt-3">
            <div class="bg-white/10 rounded-xl p-3"><p class="text-xs text-blue-200 font-semibold mb-1">Infrastructure</p><p class="text-[11px] text-white/70">Move workloads with clear dependencies.</p></div>
            <div class="bg-white/10 rounded-xl p-3"><p class="text-xs text-blue-200 font-semibold mb-1">Data</p><p class="text-[11px] text-white/70">Files and business content preserved.</p></div>
            <div class="bg-white/10 rounded-xl p-3"><p class="text-xs text-blue-200 font-semibold mb-1">Users</p><p class="text-[11px] text-white/70">Minimize confusion with support.</p></div>
            <div class="bg-blue-500/50 rounded-xl p-3 border border-blue-400/40"><p class="text-xs text-blue-200 font-semibold mb-1">Security</p><p class="text-[11px] text-white/70">Identity and access aligned.</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- LOGO BAR -->
<section class="bg-white border-b border-gray-100 py-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <p class="text-center text-xs text-gray-400 uppercase tracking-widest font-semibold mb-5">Trusted by teams at leading organizations</p>
    <div class="flex flex-wrap items-center justify-center gap-10 lg:gap-16">
      <?php foreach(['Google','FedEx','Skype','Slack','Payoneer'] as $b): ?>
        <span class="text-gray-400 font-bold text-xl tracking-tight"><?= $b ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- EXPLORE SERVICES (dark) -->
<section class="bg-gray-950 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-extrabold text-white">Explore Our IT Migration Services</h2>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php
      $services = [
        ['icon'=>'layout-grid',  'title'=>'Microsoft 365 Migration Services', 'href'=>'microsoft-365'],
        ['icon'=>'handshake',    'title'=>'M&A IT Migration Services',        'href'=>'mergers-and-acquisition'],
        ['icon'=>'cloud',        'title'=>'Cloud Migration Services',         'href'=>'contact'],
        ['icon'=>'database',     'title'=>'Data Migration Services',          'href'=>'contact'],
        ['icon'=>'app-window',   'title'=>'Application Migration Services',   'href'=>'contact'],
        ['icon'=>'shield-check', 'title'=>'Identity &amp; Security Migration Services','href'=>'contact'],
      ];
      foreach ($services as $s): ?>
        <a href="<?= $s['href'] ?>" class="group bg-gray-900 border border-gray-800 rounded-2xl p-7 hover:border-blue-500/50 hover:-translate-y-1 transition-all flex flex-col items-center text-center">
          <div class="w-14 h-14 bg-blue-600/20 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-blue-600/30 transition-colors">
            <i data-lucide="<?= $s['icon'] ?>" class="w-7 h-7 text-blue-400"></i>
          </div>
          <h3 class="text-white font-semibold text-sm leading-snug"><?= $s['title'] ?></h3>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- END TO END -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight text-gray-900">End to End IT Migration Services That Reduce Risk and Drive Innovation</h2>
        <p class="mt-4 text-gray-500 text-sm leading-relaxed">We don't just move systems. We reduce risk, map dependencies, preserve access, and adapt as the migration becomes a controlled transition instead of an operational shock.</p>
        <div class="mt-8 space-y-3">
          <?php
          $feats = [
            ['icon'=>'layout-grid','title'=>'Microsoft Azure',       'desc'=>'Full cloud migration strategy and execution on Microsoft Azure with compliance built in.'],
            ['icon'=>'server',     'title'=>'Secure Old Servers',    'desc'=>'Decommission legacy Windows Server environments without disrupting dependent applications.'],
            ['icon'=>'cloud',      'title'=>'Google Cloud Platform', 'desc'=>'Migrate workloads, data, and applications into GCP with validated cutover planning.'],
            ['icon'=>'database',   'title'=>'IBM Cloud',             'desc'=>'Enterprise-grade IBM Cloud migration with performance validation and post-migration support.'],
          ];
          foreach ($feats as $f): ?>
            <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition-colors">
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
      <div>
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=900&auto=format&fit=crop" alt="IT migration team" class="w-full h-[480px] object-cover rounded-3xl shadow-2xl">
      </div>
    </div>
  </div>
</section>

<!-- BUILT AROUND BUSINESS NEEDS -->
<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div>
        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=900&auto=format&fit=crop" alt="Cloud infrastructure" class="w-full h-[420px] object-cover rounded-3xl shadow-xl">
      </div>
      <div>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight text-gray-900">IT Migration Services Built Around Real Business Needs</h2>
        <p class="mt-4 text-gray-500 text-sm leading-relaxed">Our cloud migration project managers help organizations navigate the full migration life cycle with structured planning and risk reduction.</p>
        <div class="mt-7 space-y-3">
          <?php foreach(['Migrate Windows Server Workloads To Cloud Services','Consolidate Premises Data Centers Into Public or Private Cloud','Data Warehouse Migration And Data Lake Optimization','Application Modernization And Infrastructure Optimization'] as $c): ?>
            <div class="flex items-center gap-3 bg-white rounded-xl px-4 py-3.5 border border-gray-200 shadow-sm">
              <i data-lucide="check-circle" class="w-4 h-4 text-blue-600 shrink-0"></i>
              <span class="text-sm text-gray-700"><?= $c ?></span>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="mt-7">
          <a href="contact" class="inline-flex items-center gap-2 bg-blue-600 text-white font-bold px-6 py-3.5 rounded-xl shadow hover:bg-blue-700 transition text-sm">Explore More <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CLOUD MIGRATION PROCESS -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-12">
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900">Cloud Migration Process</h2>
      <p class="mt-3 text-gray-500 text-sm">A proven migration framework for reducing surprises and moving systems with confidence.</p>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php
      $steps = [
        [1,'Cloud Migration Strategy And Planning',              'We evaluate existing infrastructure, define cloud readiness, and design a migration roadmap aligned to business goals.'],
        [2,'Architecture And Readiness Preparation',            'We audit technical dependencies, workload configurations, security controls, and compliance requirements.'],
        [3,'Migration Execution And Data Transfer',             'Controlled migration waves with validation checkpoints ensure data and applications move without disruption.'],
        [4,'Validation And Knowledge Transfer',                 'We verify every migrated system performs correctly and equip internal teams with documentation and training.'],
        [5,'Ongoing Managed Services And Optimization',         'Post-migration support covers performance tuning, cost optimization, and cloud governance as your environment scales.'],
        [6,'Governance, Security, And Business Continuity Assurance','End-to-end compliance, access controls, and disaster recovery are built into the migration plan from the start.'],
      ];
      foreach ($steps as [$n,$title,$desc]): ?>
        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 hover:shadow-md hover:-translate-y-0.5 transition-all">
          <div class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center font-black text-sm mb-4"><?= $n ?></div>
          <h3 class="font-bold text-gray-900 text-sm mb-2"><?= $title ?></h3>
          <p class="text-gray-500 text-sm leading-relaxed"><?= $desc ?></p>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-10">
      <a href="contact" class="inline-flex items-center gap-2 bg-blue-600 text-white font-bold px-6 py-3.5 rounded-xl shadow hover:bg-blue-700 transition text-sm">Talk to a Migration Expert <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
    </div>
  </div>
</section>

<!-- PLATFORMS WE SUPPORT -->
<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900">Platforms We Support &amp; Cloud Ecosystem</h2>
      <p class="mt-3 text-gray-500 text-sm">Cloud Migration Services Across Leading Cloud Providers</p>
    </div>
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div class="space-y-4">
        <?php foreach([['Microsoft Azure',92,'bg-blue-600'],['Mobile Web Services',84,'bg-orange-500'],['Google Cloud Platform',78,'bg-yellow-400'],['IBM Cloud',67,'bg-indigo-700']] as [$name,$pct,$color]): ?>
          <div class="bg-white rounded-2xl p-5 border border-gray-200 shadow-sm">
            <div class="flex justify-between items-center mb-3">
              <span class="font-semibold text-gray-800 text-sm"><?= $name ?></span>
              <span class="text-blue-600 font-bold text-sm"><?= $pct ?>%</span>
            </div>
            <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
              <div class="h-full <?= $color ?> rounded-full" style="width:<?= $pct ?>%"></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div>
        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=900&auto=format&fit=crop" alt="Cloud platforms" class="w-full h-56 object-cover rounded-3xl shadow-xl mb-5">
        <div class="grid grid-cols-3 gap-3">
          <div class="bg-white rounded-2xl p-4 text-center border border-gray-100 shadow-sm"><p class="text-2xl font-black text-blue-600">30+</p><p class="text-xs text-gray-500 mt-1">Migration programs</p></div>
          <div class="bg-white rounded-2xl p-4 text-center border border-gray-100 shadow-sm"><p class="text-2xl font-black text-blue-600">10k+</p><p class="text-xs text-gray-500 mt-1">Accounts transitioned</p></div>
          <div class="bg-blue-600 rounded-2xl p-4 text-center shadow"><p class="text-2xl font-black text-white">Zero</p><p class="text-xs text-blue-200 mt-1">Guesswork</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CASE STUDY -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900">Case Study</h2>
      <p class="mt-3 text-gray-500 text-sm max-w-xl mx-auto">A simple view of how a better plan turns migration into a controlled business project.</p>
    </div>
    <div class="bg-gray-50 border border-gray-200 rounded-3xl overflow-hidden shadow-lg max-w-5xl mx-auto">
      <div class="grid lg:grid-cols-3">
        <div class="lg:col-span-2 p-8 lg:p-10">
          <div class="flex items-start justify-between mb-5">
            <div>
              <p class="text-xs text-gray-400 uppercase tracking-widest font-semibold mb-1">Client</p>
              <h3 class="text-2xl font-extrabold text-gray-900">Shopify</h3>
            </div>
            <span class="bg-green-100 text-green-700 text-xs font-bold px-3 py-1.5 rounded-full border border-green-200 ml-4 shrink-0">Completed</span>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed mb-7">Tiny cloud migration project executed with real time monitoring, structured analytics, and clear governance for all transitions. Fury IT migration services are designed for organizations that cannot afford downtime, data risk, or operational disruption.</p>
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mb-7">
            <?php foreach([['search','Discovery','Audited systems.'],['pencil-ruler','Planning','Business continuity model.'],['play-circle','Execution','Waves with validation.'],['settings','Optimization','Post-cutover support.']] as [$ico,$lab,$dsc]): ?>
              <div class="bg-white border border-gray-200 rounded-2xl p-3 text-center">
                <div class="w-8 h-8 bg-blue-50 rounded-xl flex items-center justify-center mx-auto mb-2"><i data-lucide="<?= $ico ?>" class="w-4 h-4 text-blue-600"></i></div>
                <p class="font-bold text-gray-800 text-xs"><?= $lab ?></p>
                <p class="text-gray-500 text-[11px] mt-1 leading-tight"><?= $dsc ?></p>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="grid grid-cols-3 gap-3">
            <div class="bg-blue-50 border border-blue-200 rounded-xl p-3 text-center"><p class="text-2xl font-black text-blue-600">3</p><p class="text-xs text-gray-600 mt-1">Migration waves</p></div>
            <div class="bg-green-50 border border-green-200 rounded-xl p-3 text-center"><p class="text-2xl font-black text-green-600">0</p><p class="text-xs text-gray-600 mt-1">Critical outages</p></div>
            <div class="bg-blue-50 border border-blue-200 rounded-xl p-3 text-center"><p class="text-2xl font-black text-blue-600">100%</p><p class="text-xs text-gray-600 mt-1">Validation before cutover</p></div>
          </div>
        </div>
        <div class="bg-blue-600 p-8 flex flex-col justify-center text-white">
          <p class="text-blue-200 text-xs uppercase tracking-widest font-semibold mb-4">Outcome</p>
          <div class="space-y-4">
            <?php foreach(['Tiny cloud migration project executed with real time monitoring and structured analytics.','IT migration services designed for organizations that cannot afford downtime, data risk, or operational disruption.'] as $o): ?>
              <div class="flex items-start gap-2">
                <i data-lucide="check-circle" class="w-4 h-4 text-green-400 shrink-0 mt-0.5"></i>
                <p class="text-blue-100 text-xs leading-relaxed"><?= $o ?></p>
              </div>
            <?php endforeach; ?>
          </div>
          <a href="contact" class="mt-7 inline-flex items-center justify-center gap-2 bg-white text-blue-700 font-bold px-4 py-2.5 rounded-xl text-xs hover:bg-blue-50 transition">Start Your Project <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
<section class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid sm:grid-cols-3 gap-10">
      <?php foreach([['clock','bg-blue-100','text-blue-600','Minimal Downtime Execution','Your operations stay live. We execute migrations with precision sequencing and live monitoring.'],['briefcase','bg-purple-100','text-purple-600','Business Continuity First','We protect your workflows, revenue, and customer experience at every stage of the migration.'],['shield-check','bg-green-100','text-green-600','Security &amp; Compliance Built In','Governance, identity controls, and compliance checkpoints designed into the plan from the start.']] as [$ic,$bg,$col,$title,$desc]): ?>
        <div class="text-center">
          <div class="w-16 h-16 <?= $bg ?> rounded-2xl flex items-center justify-center mx-auto mb-5">
            <i data-lucide="<?= $ic ?>" class="w-8 h-8 <?= $col ?>"></i>
          </div>
          <h3 class="font-bold text-gray-900 text-base mb-2"><?= $title ?></h3>
          <p class="text-gray-500 text-sm leading-relaxed"><?= $desc ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="bg-white py-20">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900">Frequently Asked Questions</h2>
      <p class="mt-3 text-gray-500 text-sm">Answers to the questions we hear most from IT leaders and operations teams.</p>
    </div>
    <div class="space-y-3">
      <?php foreach([
        ['How long does it typically take to complete an IT migration?','Timeline depends on scope, system complexity, and user count. We provide a detailed migration schedule during the assessment phase, typically ranging from a few weeks to several months.'],
        ['Will IT migration impact business operations significantly?','Our structured approach minimizes disruption. We use pilot waves, validation checkpoints, and scheduled cutover windows to keep your operations running throughout.'],
        ['Do you provide migration support after go-live?','Yes. Post-migration support, user onboarding, issue resolution, and environment optimization are all part of our standard engagement.'],
        ['Can you migrate structured and unstructured data simultaneously?','Yes. We handle mailboxes, files, databases, and collaboration content in coordinated migration waves to preserve access and structure.'],
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

<!-- CTA -->
<section class="bg-gradient-to-br from-blue-800 via-blue-700 to-blue-500 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-10 items-center">
      <div>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight">Ready To Start Your Cloud Migration Journey?</h2>
        <p class="mt-4 text-blue-100 text-sm leading-relaxed max-w-lg">Start with a migration team that plans carefully, executes cleanly, and keeps your users supported throughout the entire transition.</p>
        <div class="mt-8">
          <a href="contact" class="inline-flex items-center gap-2 bg-white text-blue-700 font-bold px-6 py-3.5 rounded-xl shadow hover:shadow-lg transition text-sm">Request an IT Migration Assessment <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
        </div>
      </div>
      <div class="hidden lg:flex justify-end">
        <img src="https://images.unsplash.com/photo-1573496773905-f5b17e717f05?q=80&w=700&auto=format&fit=crop" alt="Migration specialist" class="w-72 h-64 object-cover rounded-3xl shadow-2xl opacity-80">
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/layout-bottom.php'; ?>

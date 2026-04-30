<?php
$page = [
    'title'       => 'How Our IT Migration Process Works | Planning to Cutover',
    'description' => 'See how our IT migration process moves from discovery and planning to cutover, validation, and post-migration support.',
    'canonical'   => 'https://itmigrationservices.com/how-it-works',
    'active'      => 'how',
];
require __DIR__ . '/partials/layout-top.php';
?>

<!-- ══════════════════════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gradient-to-br from-blue-800 via-blue-700 to-blue-500 text-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <span class="inline-flex items-center gap-2 bg-white/10 border border-white/20 text-white/90 text-xs font-semibold px-4 py-2 rounded-full mb-6">
          <i data-lucide="workflow" class="w-4 h-4"></i>
          Structured Migration Delivery
        </span>
        <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight tracking-tight">
          A Clearer Path From Discovery to Stable Cutover
        </h1>
        <p class="mt-5 text-blue-100 text-lg leading-relaxed max-w-xl">
          Our migration process is built to make planning visible, execution deliberate, and post-go-live support part of the strategy from the start.
        </p>
        <div class="mt-8 flex flex-wrap gap-3">
          <a href="contact"
             class="inline-flex items-center gap-2 bg-white text-blue-700 font-bold px-6 py-3.5 rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all text-sm">
            Talk to Our Team
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>
      <div class="animate-float">
        <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-3xl p-5 shadow-2xl">
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=900&auto=format&fit=crop"
               alt="Migration workflow dashboard"
               class="w-full h-64 object-cover rounded-2xl">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     4-STAGE PROCESS
══════════════════════════════════════════════════════════════════ -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">Our Process</p>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">A Four-Stage Migration Framework Designed for Lower Risk</h2>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php
      $stages = [
        ['n'=>'01','title'=>'Discover',  'icon'=>'search',         'color'=>'bg-blue-600',   'desc'=>'We assess users, content, dependencies, systems, and risks that affect the migration design.'],
        ['n'=>'02','title'=>'Prepare',   'icon'=>'pencil-ruler',   'color'=>'bg-violet-600', 'desc'=>'We set up the target environment, security model, sequencing, and communication plan.'],
        ['n'=>'03','title'=>'Execute',   'icon'=>'play-circle',    'color'=>'bg-green-600',  'desc'=>'Pilot waves, validation, and controlled production migration keep delivery measurable.'],
        ['n'=>'04','title'=>'Stabilize', 'icon'=>'shield-check',   'color'=>'bg-orange-500', 'desc'=>'Post-cutover support, adoption guidance, and issue resolution close the transition cleanly.'],
      ];
      foreach ($stages as $stage):
      ?>
        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 hover:border-blue-300 hover:shadow-lg hover:-translate-y-1 transition-all">
          <div class="w-12 h-12 <?= $stage['color'] ?> text-white rounded-2xl flex items-center justify-center mb-4 shadow-md">
            <i data-lucide="<?= $stage['icon'] ?>" class="w-5 h-5"></i>
          </div>
          <span class="text-xs text-gray-400 font-black uppercase tracking-widest"><?= $stage['n'] ?></span>
          <h3 class="font-extrabold text-gray-900 text-2xl mt-1 mb-2"><?= $stage['title'] ?></h3>
          <p class="text-gray-500 text-sm leading-relaxed"><?= $stage['desc'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     WHAT CHANGES — split
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div class="rounded-3xl overflow-hidden shadow-2xl">
        <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=900&auto=format&fit=crop"
             alt="Migration planning workshop"
             class="w-full h-[440px] object-cover">
      </div>
      <div>
        <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">What Changes With Us</p>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight mb-4">
          We Reduce Confusion by Making the Work Visible
        </h2>
        <p class="text-gray-500 leading-relaxed mb-8">
          Technical teams need sequencing. Leadership needs clarity. Users need confidence. Our process is designed to serve all three, not just the migration tool.
        </p>
        <div class="grid sm:grid-cols-2 gap-4">
          <div class="bg-white rounded-2xl p-5 border border-gray-200 shadow-sm">
            <i data-lucide="milestone" class="w-6 h-6 text-blue-600 mb-3"></i>
            <h3 class="font-semibold text-gray-900 text-sm mb-1">Clear Decision Points</h3>
            <p class="text-gray-500 text-sm leading-relaxed">Stakeholders know what is happening and what needs approval at every stage.</p>
          </div>
          <div class="bg-white rounded-2xl p-5 border border-gray-200 shadow-sm">
            <i data-lucide="users" class="w-6 h-6 text-blue-600 mb-3"></i>
            <h3 class="font-semibold text-gray-900 text-sm mb-1">Better User Readiness</h3>
            <p class="text-gray-500 text-sm leading-relaxed">Communication and onboarding are built into the delivery model from day one.</p>
          </div>
          <div class="bg-white rounded-2xl p-5 border border-gray-200 shadow-sm">
            <i data-lucide="bar-chart-2" class="w-6 h-6 text-blue-600 mb-3"></i>
            <h3 class="font-semibold text-gray-900 text-sm mb-1">Real-Time Monitoring</h3>
            <p class="text-gray-500 text-sm leading-relaxed">We track every stage of the migration in real time to ensure a successful outcome.</p>
          </div>
          <div class="bg-white rounded-2xl p-5 border border-gray-200 shadow-sm">
            <i data-lucide="shield-check" class="w-6 h-6 text-blue-600 mb-3"></i>
            <h3 class="font-semibold text-gray-900 text-sm mb-1">Validation First</h3>
            <p class="text-gray-500 text-sm leading-relaxed">Pilot waves and validation checkpoints reduce avoidable rollout issues.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     PLATFORM FIT
══════════════════════════════════════════════════════════════════ -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div>
        <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">Platform Coverage</p>
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight mb-4">
          Platform Fit for Any Cloud Environment
        </h2>
        <p class="text-gray-500 leading-relaxed mb-6">
          We support migrations across collaboration suites, cloud platforms, storage systems, and identity layers. The goal is not only to move systems, but to make the new environment cleaner than the old one.
        </p>
        <div class="space-y-3 mb-8">
          <?php foreach(['Microsoft 365 &amp; Google Workspace','SharePoint, OneDrive, file servers, and drive consolidation','Identity, governance, and policy alignment for the target platform'] as $item): ?>
            <div class="flex items-start gap-3">
              <i data-lucide="check-circle" class="w-5 h-5 text-blue-600 shrink-0 mt-0.5"></i>
              <span class="text-gray-700 text-sm"><?= $item ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="grid grid-cols-2 gap-4">
        <div class="bg-gray-50 rounded-2xl p-5 border border-gray-200">
          <p class="text-xs text-gray-400 uppercase tracking-widest font-semibold mb-3">Source Platforms</p>
          <div class="space-y-2">
            <?php foreach(['Google Workspace','On-prem servers','Legacy file shares'] as $p): ?>
              <div class="bg-white rounded-xl px-3 py-2 border border-gray-200 text-sm text-gray-700"><?= $p ?></div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="bg-blue-600 rounded-2xl p-5 text-white">
          <p class="text-xs text-blue-200 uppercase tracking-widest font-semibold mb-3">Target Platforms</p>
          <div class="space-y-2">
            <?php foreach(['Microsoft 365','Azure and cloud storage','Modern collaboration stacks'] as $p): ?>
              <div class="bg-white/10 rounded-xl px-3 py-2 border border-white/20 text-sm text-white"><?= $p ?></div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-span-2 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-2xl p-5 text-white text-center">
          <p class="text-xs text-blue-200 uppercase tracking-widest font-semibold mb-2">Migration Fit</p>
          <p class="font-bold text-sm">Built for hybrid, cloud, and collaboration-centric environments.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     SIMPLE CASE STUDY
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">Proof It Works</p>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Case Study</h2>
      <p class="mt-4 text-gray-500">A simple view of how a better plan turns migration into a controlled business project.</p>
    </div>

    <div class="bg-white border border-gray-200 rounded-3xl p-8 lg:p-12 shadow-lg max-w-4xl mx-auto">
      <div class="flex items-start justify-between mb-6">
        <div>
          <p class="text-xs text-gray-400 uppercase tracking-widest font-semibold mb-1">Scenario</p>
          <h3 class="text-2xl font-extrabold text-gray-900">Multi-region infrastructure and collaboration migration</h3>
        </div>
        <span class="bg-green-100 text-green-700 text-xs font-bold px-3 py-1.5 rounded-full border border-green-200 ml-4 shrink-0">Completed</span>
      </div>

      <div class="grid sm:grid-cols-4 gap-4 mb-8">
        <?php
        $phases = [
          ['icon'=>'search','title'=>'Discovery','desc'=>'Audit systems, stakeholders, and sequencing needs.'],
          ['icon'=>'pencil-ruler','title'=>'Planning','desc'=>'Migration model shaped around business continuity.'],
          ['icon'=>'play-circle','title'=>'Execution','desc'=>'Migration waves with monitoring and validation.'],
          ['icon'=>'settings','title'=>'Optimization','desc'=>'Post-cutover support to validate and optimize.'],
        ];
        foreach ($phases as $ph):
        ?>
          <div class="bg-gray-50 border border-gray-200 rounded-2xl p-4 text-center">
            <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-2">
              <i data-lucide="<?= $ph['icon'] ?>" class="w-5 h-5 text-blue-600"></i>
            </div>
            <p class="font-bold text-gray-800 text-sm"><?= $ph['title'] ?></p>
            <p class="text-xs text-gray-500 mt-1 leading-tight"><?= $ph['desc'] ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="grid sm:grid-cols-3 gap-4">
        <div class="bg-blue-50 border border-blue-200 rounded-2xl p-5 text-center">
          <p class="text-3xl font-black text-blue-600">3</p>
          <p class="text-sm text-gray-600 mt-1">Migration waves</p>
        </div>
        <div class="bg-green-50 border border-green-200 rounded-2xl p-5 text-center">
          <p class="text-3xl font-black text-green-600">0</p>
          <p class="text-sm text-gray-600 mt-1">Critical outages</p>
        </div>
        <div class="bg-blue-50 border border-blue-200 rounded-2xl p-5 text-center">
          <p class="text-3xl font-black text-blue-600">100%</p>
          <p class="text-sm text-gray-600 mt-1">Validation coverage before final cutover</p>
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
      <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-3">Got Questions?</p>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Frequently Asked Questions</h2>
    </div>
    <div class="space-y-3">
      <?php
      $faqs = [
        ['q'=>'What types of migration do you support?',          'a'=>'We support Microsoft 365, M&A integration, cloud, data, infrastructure, and identity migrations across all major platforms.'],
        ['q'=>'How do you reduce migration risk?',                'a'=>'Through discovery, dependency mapping, pilot execution, validation checkpoints, communication planning, and structured cutover support.'],
        ['q'=>'Can you help after the migration is complete?',    'a'=>'Yes. We support post-migration stabilization, user onboarding, issue resolution, and environment optimization after go-live.'],
        ['q'=>'Can you migrate structured and unstructured data?','a'=>'Yes. We handle both structured data (databases, records) and unstructured data (files, documents, emails) with full validation.'],
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
     CTA
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gradient-to-br from-blue-800 via-blue-700 to-blue-500 py-20 text-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <p class="text-blue-200 text-xs uppercase tracking-widest font-semibold mb-3">Ready to Start?</p>
    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight">
      Ready to Start Your Cloud Migration Journey?
    </h2>
    <p class="mt-4 text-blue-100 leading-relaxed max-w-xl mx-auto">
      Start with a migration team that plans carefully, executes cleanly, and keeps your users supported throughout the entire transition.
    </p>
    <div class="mt-8 flex flex-wrap gap-3 justify-center">
      <a href="contact"
         class="inline-flex items-center gap-2 bg-white text-blue-700 font-bold px-8 py-4 rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all text-sm">
        Schedule a Discovery Call <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/layout-bottom.php'; ?>

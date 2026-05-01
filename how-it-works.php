<?php
$page = [
    'title'       => 'How Our IT Migration Process Works | Planning to Cutover',
    'description' => 'See how our IT migration process moves from discovery and planning to cutover, validation, and post-migration support.',
    'canonical'   => 'https://itmigrationservices.com/how-it-works',
    'active'      => 'how',
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
        <span class="inline-block bg-blue-500 bg-opacity-40 text-blue-100 text-xs font-semibold px-3 py-1.5 rounded-full border border-blue-400 border-opacity-40 mb-6">Our Migration Methodology</span>
        <h1 class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight mb-6">
          How Our IT<br>Migration Process Works
        </h1>
        <p class="text-blue-100 text-lg leading-relaxed mb-8">
          A structured four-stage methodology that moves your organization from where you are to where you need to be — with minimal risk, zero data loss, and full transparency at every step.
        </p>
        <div class="flex flex-wrap gap-3">
          <a href="contact" class="bg-white text-blue-700 font-bold px-6 py-3 rounded-xl hover:bg-blue-50 transition-colors shadow-lg">Start Your Migration</a>
          <a href="microsoft-365" class="border border-white border-opacity-40 text-white font-semibold px-6 py-3 rounded-xl hover:bg-white hover:bg-opacity-10 transition-colors">See Services</a>
        </div>
      </div>
      <div class="float">
        <div class="bg-white bg-opacity-10 border border-white border-opacity-20 rounded-3xl p-6 backdrop-blur-sm">
          <p class="text-white text-xs font-semibold uppercase tracking-widest mb-4 opacity-70">Migration Framework</p>
          <div class="space-y-3">
            <?php $stages = [['1','Discover','Environment audit &amp; risk assessment'],['2','Prepare','Runbook, wave plan &amp; pilot group'],['3','Execute','Phased migration with checkpoints'],['4','Stabilise','Validation, cutover &amp; hypercare']]; ?>
            <?php foreach ($stages as $st): ?>
              <div class="flex items-center gap-3 bg-white bg-opacity-10 rounded-xl px-4 py-3">
                <div class="w-7 h-7 bg-blue-500 rounded-lg flex items-center justify-center text-white font-bold text-xs shrink-0"><?= $st[0] ?></div>
                <div>
                  <p class="text-white text-xs font-semibold"><?= $st[1] ?></p>
                  <p class="text-blue-200 text-xs"><?= $st[2] ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4 STAGE CARDS -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-14">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-4">The Four-Stage<br>Migration Framework</h2>
      <p class="text-gray-500 text-base max-w-2xl mx-auto">Every IT migration we deliver follows the same proven structure — adapted to your environment, timeline, and business requirements.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php $framework = [
        ['search','Discover','We audit your current infrastructure — servers, users, applications, data volumes, integrations, and compliance requirements. You get a full environment report before any migration planning begins.',
          ['Infrastructure &amp; data audit','Dependency mapping','Risk &amp; compliance assessment','Stakeholder interviews']],
        ['clipboard-list','Prepare','We design your migration architecture, create a detailed runbook, define wave groups, schedule cutover windows, and run a pilot group to validate the approach before full rollout.',
          ['Migration runbook creation','Wave &amp; group planning','Pilot group validation','Rollback procedures defined']],
        ['play-circle','Execute','Migration runs in structured waves with daily progress reports, rollback checkpoints at each stage, and direct access to your assigned migration engineer throughout.',
          ['Phased wave migration','Daily status reporting','Rollback checkpoints','Real-time issue resolution']],
        ['check-square','Stabilise','We validate every migrated item, run user acceptance testing, execute the final DNS/mail flow cutover, and provide 30-day hypercare with a dedicated engineer on call.',
          ['UAT &amp; validation testing','DNS &amp; mail flow cutover','Post-migration sign-off','30-day hypercare support']],
      ]; ?>
      <?php foreach ($framework as $i => $f): ?>
        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 hover:shadow-md transition-shadow">
          <div class="flex items-center gap-3 mb-5">
            <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center">
              <i data-lucide="<?= $f[0] ?>" class="w-5 h-5 text-white"></i>
            </div>
            <div>
              <p class="text-xs text-gray-400 font-semibold uppercase tracking-widest">Stage <?= $i+1 ?></p>
              <h3 class="font-extrabold text-gray-900 text-base"><?= $f[1] ?></h3>
            </div>
          </div>
          <p class="text-gray-500 text-xs leading-relaxed mb-4"><?= $f[2] ?></p>
          <ul class="space-y-2">
            <?php foreach ($f[3] as $item): ?>
              <li class="flex items-center gap-2 text-xs text-gray-600">
                <i data-lucide="check" class="w-3.5 h-3.5 text-blue-500 shrink-0"></i>
                <?= $item ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- WHAT CHANGES SPLIT -->
<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <div>
        <span class="inline-block bg-blue-50 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full mb-4">What Changes</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-6">What You Get at<br>Every Stage</h2>
        <p class="text-gray-500 text-sm leading-relaxed mb-8">We give you full transparency across the entire project — not just a status call at the end. You'll have access to real-time migration logs, wave-by-wave progress, and direct contact with your engineer throughout.</p>
        <div class="space-y-4">
          <?php $deliverables = [
            ['file-text','Environment Assessment Report','A full audit of your current infrastructure with risk ratings, dependency maps, and compliance flags.'],
            ['map','Migration Runbook','Step-by-step project runbook covering every phase, wave, rollback procedure, and cutover window.'],
            ['bar-chart','Daily Progress Dashboard','Live migration tracking with mailbox/file counts, completion rates, and error logs updated daily.'],
            ['shield-check','Post-Migration Sign-Off','Formal validation report covering every migrated item, UAT outcomes, and final sign-off documentation.'],
          ]; ?>
          <?php foreach ($deliverables as $d): ?>
            <div class="flex gap-4">
              <div class="w-9 h-9 bg-blue-50 rounded-xl flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="<?= $d[0] ?>" class="w-5 h-5 text-blue-600"></i>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900 text-sm mb-1"><?= $d[1] ?></h4>
                <p class="text-gray-500 text-xs leading-relaxed"><?= $d[2] ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="space-y-4">
        <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
          <h3 class="font-bold text-gray-900 text-sm mb-3">Before migration starts</h3>
          <ul class="space-y-2">
            <?php foreach (['Environment audit report delivered','Migration runbook reviewed &amp; approved','Pilot group defined and agreed','Rollback plan signed off','Cutover window scheduled'] as $b): ?>
              <li class="flex gap-2 text-xs text-gray-600"><i data-lucide="check-circle" class="w-4 h-4 text-green-500 shrink-0 mt-0.5"></i><?= $b ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
          <h3 class="font-bold text-gray-900 text-sm mb-3">During migration</h3>
          <ul class="space-y-2">
            <?php foreach (['Daily progress updates sent','Live migration dashboard access','Dedicated engineer on direct line','Issues resolved same business day','Wave sign-off at each stage'] as $b): ?>
              <li class="flex gap-2 text-xs text-gray-600"><i data-lucide="check-circle" class="w-4 h-4 text-blue-500 shrink-0 mt-0.5"></i><?= $b ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
          <h3 class="font-bold text-gray-900 text-sm mb-3">After migration (30-day hypercare)</h3>
          <ul class="space-y-2">
            <?php foreach (['Validation report delivered','UAT support provided','Post-migration issues resolved','Handover documentation complete','30-day dedicated support line'] as $b): ?>
              <li class="flex gap-2 text-xs text-gray-600"><i data-lucide="check-circle" class="w-4 h-4 text-purple-500 shrink-0 mt-0.5"></i><?= $b ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PLATFORM FIT -->
<section class="bg-gray-950 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-14">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight mb-4">Migration Types We Handle</h2>
      <p class="text-gray-400 text-base max-w-2xl mx-auto">The same proven framework applied across every migration type we deliver.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php $types = [
        ['mail','Microsoft 365 Migration','Email, Teams, SharePoint, OneDrive, and tenant-to-tenant migrations for organizations of all sizes.','microsoft-365'],
        ['building-2','M&amp;A IT Migration','Day-1-ready infrastructure integration for mergers, acquisitions, and divestitures.','mergers-and-acquisition'],
        ['cloud','Cloud Migration','Lift-and-shift, replatform, and refactor migrations to AWS, Azure, or Google Cloud.','contact'],
        ['database','Data Migration','Structured and unstructured data migrations with validation and lineage tracking.','contact'],
        ['cpu','Infrastructure Migration','Server, network, storage, and data center consolidation and exit projects.','contact'],
        ['app-window','Application Modernization','Legacy application rehosting, replatforming, and refactoring to modern stacks.','contact'],
      ]; ?>
      <?php foreach ($types as $t): ?>
        <a href="<?= $t[3] ?>" class="bg-gray-900 border border-gray-800 rounded-2xl p-6 flex flex-col items-center text-center hover:border-blue-700 transition-colors group">
          <div class="w-12 h-12 bg-blue-600 bg-opacity-20 rounded-xl flex items-center justify-center mb-4 group-hover:bg-opacity-30 transition-colors">
            <i data-lucide="<?= $t[0] ?>" class="w-6 h-6 text-blue-400"></i>
          </div>
          <h3 class="font-semibold text-white text-sm mb-2"><?= $t[1] ?></h3>
          <p class="text-gray-400 text-xs leading-relaxed"><?= $t[2] ?></p>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CASE STUDY -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-14">
      <span class="inline-block bg-blue-50 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full mb-4">Case Study</span>
      <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-4">Enterprise M365 Migration:<br>1,200 Mailboxes in 6 Weeks</h2>
      <p class="text-gray-500 text-base max-w-xl mx-auto">A global SaaS company needed to migrate from an acquired company's M365 tenant post-acquisition — with zero disruption to daily operations.</p>
    </div>
    <div class="grid lg:grid-cols-3 gap-8">
      <div class="lg:col-span-2 space-y-5">
        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200">
          <h3 class="font-bold text-gray-900 text-sm mb-3">The Challenge</h3>
          <p class="text-gray-500 text-sm leading-relaxed">Following an acquisition, the client needed to migrate 1,200 mailboxes, 450 GB of SharePoint data, and 80 Teams environments from the acquired tenant into their primary M365 tenant — within a 6-week board-mandated timeline, with no disruption to customer-facing teams.</p>
        </div>
        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200">
          <h3 class="font-bold text-gray-900 text-sm mb-3">Our Approach</h3>
          <p class="text-gray-500 text-sm leading-relaxed">We ran a full environment discovery in Week 1, delivering an audit report that identified 12 high-risk mailboxes and 3 Teams environments with compliance holds. Migration was executed in 4 waves across Weeks 2–5, with a 15-minute Saturday-morning cutover. Week 6 was dedicated to UAT, validation, and hypercare handover.</p>
        </div>
        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200">
          <h3 class="font-bold text-gray-900 text-sm mb-3">The Result</h3>
          <p class="text-gray-500 text-sm leading-relaxed">All 1,200 mailboxes migrated with zero data loss. SharePoint and Teams migrated with full permission fidelity. Cutover completed in 15 minutes on Saturday morning. Users were productive from Monday 8am with no reported migration issues.</p>
        </div>
      </div>
      <div class="bg-blue-600 rounded-2xl p-8 text-white flex flex-col justify-between">
        <div>
          <p class="text-blue-200 text-xs font-semibold uppercase tracking-widest mb-6">Outcomes</p>
          <div class="space-y-6">
            <div>
              <p class="text-4xl font-extrabold">1,200</p>
              <p class="text-blue-200 text-sm mt-1">Mailboxes migrated</p>
            </div>
            <div>
              <p class="text-4xl font-extrabold">0%</p>
              <p class="text-blue-200 text-sm mt-1">Data loss</p>
            </div>
            <div>
              <p class="text-4xl font-extrabold">6 wks</p>
              <p class="text-blue-200 text-sm mt-1">End-to-end delivery</p>
            </div>
            <div>
              <p class="text-4xl font-extrabold">15 min</p>
              <p class="text-blue-200 text-sm mt-1">Cutover window</p>
            </div>
          </div>
        </div>
        <div class="mt-8 pt-6 border-t border-blue-500">
          <a href="contact" class="block w-full text-center bg-white text-blue-700 font-bold py-3 rounded-xl text-sm hover:bg-blue-50 transition-colors">Plan Your Migration</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="bg-gray-50 py-20">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-4">Process FAQ</h2>
      <p class="text-gray-500 text-base">Common questions about how our migration process works.</p>
    </div>
    <div class="space-y-3">
      <?php $faqs = [
        ['How quickly can you start a migration project?','We can typically begin discovery within 5–7 business days of engagement. Full migration timelines depend on scope but most mid-size projects (100–500 users) run 4–8 weeks end-to-end.'],
        ['Do you work with our internal IT team or replace them?','We work alongside your internal IT team. We bring the methodology, tooling, and execution capacity — your team provides environment access, stakeholder coordination, and approvals. All decisions stay with you.'],
        ['What if we need to pause or roll back the migration?','Every migration has defined rollback procedures built into the runbook. Rollback points are established at each wave. We can pause, roll back, or reschedule any phase with minimal notice.'],
        ['How do you handle compliance and data sensitivity?','We operate within your data sovereignty requirements. Migration tooling is configured to maintain all compliance holds, retention policies, and encryption settings throughout the process.'],
        ['What does the 30-day hypercare period cover?','Hypercare covers post-migration issues: mail flow problems, permission errors, Teams access issues, SharePoint item discrepancies. You have direct access to your assigned engineer by email and phone.'],
        ['Can you migrate hybrid on-premises and cloud environments?','Yes. Hybrid coexistence is a common scenario we handle — including Exchange Hybrid, Azure AD Connect sync, and mixed cloud/on-prem SharePoint estates.'],
      ]; ?>
      <?php foreach ($faqs as $faq): ?>
        <div class="faq-item border border-gray-200 rounded-2xl overflow-hidden bg-white">
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

<!-- CTA -->
<section class="bg-gradient-to-br from-blue-800 via-blue-700 to-blue-500 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight mb-4">Ready to Start Your<br>IT Migration?</h2>
    <p class="text-blue-100 text-base mb-10 max-w-xl mx-auto">Tell us about your environment and migration goals. We'll provide a clear, fixed-fee proposal within 48 hours.</p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="contact" class="bg-white text-blue-700 font-bold px-8 py-4 rounded-xl hover:bg-blue-50 transition-colors shadow-lg">Request a Migration Consultation</a>
      <a href="mergers-and-acquisition" class="border border-white border-opacity-40 text-white font-semibold px-8 py-4 rounded-xl hover:bg-white hover:bg-opacity-10 transition-colors">See M&amp;A Migration</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/layout-bottom.php'; ?>

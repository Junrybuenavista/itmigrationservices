<?php
$page = [
    'title' => 'Contact IT Migration Specialists | Request a Migration Consultation',
    'description' => 'Contact our IT migration specialists to discuss Microsoft 365, cloud, M&A, and infrastructure migration projects.',
    'canonical' => 'https://itmigrationservices.com/contact',
    'active' => 'contact',
    'body_class' => 'site-shell',
];
require __DIR__ . '/partials/layout-top.php';
?>
<section class="hero-shell">
  <div class="site-container">
    <div class="section-head">
      <p class="section-kicker">Contact</p>
      <h1 class="section-title">Start your migration conversation with a clearer brief.</h1>
      <p class="section-copy">Tell us what you are migrating, what systems are involved, and what kind of transition pressure you are dealing with. We’ll help shape the right next step.</p>
    </div>

    <div class="split-grid" style="align-items:start;">
      <div class="panel-card panel-pad">
        <div class="media-frame" style="height:280px;">
          <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=1200&auto=format&fit=crop" alt="Consultants planning an IT migration engagement">
        </div>
        <div class="section-grid-2" style="margin-top:1.5rem;">
          <div class="glass-card panel-pad">
            <p class="text-xl font-semibold">What to include</p>
            <p class="mt-2 muted">Current environment, target platform, user count, timeline, and the main risks you want to avoid.</p>
          </div>
          <div class="glass-card panel-pad">
            <p class="text-xl font-semibold">Typical response</p>
            <p class="mt-2 muted">A practical recommendation on the likely migration path, scope considerations, and next-step review.</p>
          </div>
        </div>
      </div>

      <div class="glass-card panel-pad">
        <p class="section-kicker">Request A Consultation</p>
        <form style="margin-top:1.5rem;display:grid;gap:1rem;">
          <div class="form-grid two">
            <input type="text" placeholder="First name" class="field">
            <input type="text" placeholder="Last name" class="field">
          </div>
          <input type="email" placeholder="Business email" class="field">
          <input type="text" placeholder="Company name" class="field">
          <select class="select-field">
            <option>Type of migration</option>
            <option>Microsoft 365 Migration</option>
            <option>M&amp;A IT Migration</option>
            <option>Cloud Migration</option>
            <option>Data Migration</option>
          </select>
          <textarea rows="6" placeholder="Tell us about your migration project" class="textarea-field"></textarea>
          <button type="button" class="button-primary">Request migration consultation <i data-lucide="send" class="h-4 w-4"></i></button>
        </form>
      </div>
    </div>
  </div>
</section>
<?php require __DIR__ . '/partials/layout-bottom.php';

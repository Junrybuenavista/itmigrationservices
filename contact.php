<?php
$page = [
    'title'       => 'Contact IT Migration Specialists | Request a Migration Consultation',
    'description' => 'Contact our IT migration specialists to discuss Microsoft 365, cloud, M&A, and infrastructure migration projects.',
    'canonical'   => 'https://itmigrationservices.com/contact',
    'active'      => 'contact',
];
require __DIR__ . '/partials/layout-top.php';
?>

<!-- PAGE TITLE -->
<section class="bg-gray-50 py-16 border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 tracking-tight leading-tight">Start Your IT Migration With Confidence</h1>
  </div>
</section>

<!-- FORM + SIDEBAR -->
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-start">

      <!-- Left -->
      <div class="relative">
        <!-- decorative blob -->
        <div class="absolute -top-10 -left-10 w-64 h-64 bg-blue-50 rounded-full blur-3xl opacity-60 pointer-events-none"></div>
        <div class="relative">
          <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight leading-tight mb-4">Speak With Our IT<br>Migration Specialists</h2>
          <p class="text-gray-500 text-sm leading-relaxed mb-2">Planning an IT migration requires clarity and control.</p>
          <p class="text-gray-500 text-sm leading-relaxed">Our specialists assess your infrastructure and provide a clear path forward aligned to your business goals.</p>

          <div class="mt-10 grid sm:grid-cols-2 gap-4">
            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-5">
              <div class="w-9 h-9 bg-blue-100 rounded-xl flex items-center justify-center mb-3">
                <i data-lucide="list-checks" class="w-5 h-5 text-blue-600"></i>
              </div>
              <h3 class="font-semibold text-gray-900 text-sm mb-1">What to Include</h3>
              <p class="text-gray-500 text-xs leading-relaxed">Current environment, target platform, user count, timeline, and the main risks you want to avoid.</p>
            </div>
            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-5">
              <div class="w-9 h-9 bg-green-100 rounded-xl flex items-center justify-center mb-3">
                <i data-lucide="message-circle" class="w-5 h-5 text-green-600"></i>
              </div>
              <h3 class="font-semibold text-gray-900 text-sm mb-1">Typical Response</h3>
              <p class="text-gray-500 text-xs leading-relaxed">A practical recommendation on the migration path, scope considerations, and next-step review.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right — form -->
      <div class="bg-white border border-gray-200 rounded-3xl shadow-xl p-8 lg:p-10">
        <form action="#" method="post" class="space-y-4">
          <div class="grid sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-semibold text-gray-700 mb-1.5">First Name</label>
              <input type="text" name="first_name" placeholder="First Name"
                     class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            <div>
              <label class="block text-xs font-semibold text-gray-700 mb-1.5">Last Name</label>
              <input type="text" name="last_name" placeholder="Last Name"
                     class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
          </div>

          <div>
            <label class="block text-xs font-semibold text-gray-700 mb-1.5">Business Email</label>
            <input type="email" name="email" placeholder="Business Email"
                   class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
          </div>

          <div>
            <label class="block text-xs font-semibold text-gray-700 mb-1.5">Company Name</label>
            <input type="text" name="company" placeholder="Company Name"
                   class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
          </div>

          <div>
            <label class="block text-xs font-semibold text-gray-700 mb-1.5">Type of Migration</label>
            <select name="migration_type"
                    class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white">
              <option value="">- Type of Migration -</option>
              <option>Microsoft 365 Migration</option>
              <option>M&amp;A IT Migration</option>
              <option>Cloud Migration</option>
              <option>Data Migration</option>
              <option>Infrastructure Migration</option>
              <option>Application Modernization</option>
              <option>Identity &amp; Security</option>
            </select>
          </div>

          <div>
            <label class="block text-xs font-semibold text-gray-700 mb-1.5">Your Message</label>
            <textarea name="message" rows="5" placeholder="Tell us about your migration project..."
                      class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"></textarea>
          </div>

          <!-- reCAPTCHA placeholder -->
          <div class="bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 flex items-center gap-3">
            <div class="w-5 h-5 border-2 border-gray-400 rounded"></div>
            <span class="text-sm text-gray-600">I'm not a robot</span>
            <div class="ml-auto text-right">
              <p class="text-[10px] text-gray-400 font-semibold">reCAPTCHA</p>
              <p class="text-[9px] text-gray-400">Privacy - Terms</p>
            </div>
          </div>

          <button type="submit"
                  class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-xl shadow hover:shadow-lg transition text-sm">
            Request Migration Consultation
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/layout-bottom.php'; ?>

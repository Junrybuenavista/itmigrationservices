<?php
$page = [
    'title'       => 'Contact IT Migration Specialists | Request a Migration Consultation',
    'description' => 'Contact our IT migration specialists to discuss Microsoft 365, cloud, M&A, and infrastructure migration projects.',
    'canonical'   => 'https://itmigrationservices.com/contact',
    'active'      => 'contact',
];
require __DIR__ . '/partials/layout-top.php';
?>

<!-- ══════════════════════════════════════════════════════════════════
     PAGE HERO
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gradient-to-br from-blue-800 via-blue-700 to-blue-500 text-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <p class="text-blue-200 text-xs uppercase tracking-widest font-semibold mb-3">Get In Touch</p>
    <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight leading-tight">
      Start Your IT Migration<br class="hidden sm:block"> With Confidence
    </h1>
    <p class="mt-5 text-blue-100 text-lg leading-relaxed max-w-xl mx-auto">
      Planning an IT migration requires clarity and control. Our specialists assess your infrastructure and provide a clear path forward aligned to your business goals.
    </p>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     CONTACT FORM + SIDEBAR
══════════════════════════════════════════════════════════════════ -->
<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-12 items-start">

      <!-- Left — info cards -->
      <div>
        <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight mb-2">Speak With Our IT<br>Migration Specialists</h2>
        <p class="text-gray-500 mb-8 leading-relaxed">
          Planning an IT migration requires clarity and control.<br>
          Our specialists assess your infrastructure and provide a clear path forward aligned to your business goals.
        </p>

        <!-- Image -->
        <div class="rounded-3xl overflow-hidden shadow-xl mb-8">
          <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=900&auto=format&fit=crop"
               alt="IT migration specialist team"
               class="w-full h-64 object-cover">
        </div>

        <!-- Info cards -->
        <div class="grid sm:grid-cols-2 gap-4">
          <div class="bg-white rounded-2xl p-5 border border-gray-200 shadow-sm">
            <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center mb-3">
              <i data-lucide="list-checks" class="w-5 h-5 text-blue-600"></i>
            </div>
            <h3 class="font-semibold text-gray-900 text-sm mb-1">What to Include</h3>
            <p class="text-gray-500 text-sm leading-relaxed">Current environment, target platform, user count, timeline, and the main risks you want to avoid.</p>
          </div>
          <div class="bg-white rounded-2xl p-5 border border-gray-200 shadow-sm">
            <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center mb-3">
              <i data-lucide="message-circle" class="w-5 h-5 text-green-600"></i>
            </div>
            <h3 class="font-semibold text-gray-900 text-sm mb-1">Typical Response</h3>
            <p class="text-gray-500 text-sm leading-relaxed">A practical recommendation on the likely migration path, scope considerations, and next-step review.</p>
          </div>
          <div class="bg-blue-50 rounded-2xl p-5 border border-blue-100 sm:col-span-2">
            <div class="flex items-start gap-3">
              <i data-lucide="clock" class="w-5 h-5 text-blue-600 mt-0.5 shrink-0"></i>
              <div>
                <p class="font-semibold text-gray-900 text-sm">Fast Turnaround</p>
                <p class="text-gray-500 text-sm mt-1">We typically respond within one business day with a structured assessment and recommended next steps tailored to your environment.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right — form -->
      <div class="bg-white rounded-3xl border border-gray-200 shadow-xl p-8 lg:p-10">
        <p class="text-blue-600 text-xs uppercase tracking-widest font-semibold mb-2">Request A Consultation</p>
        <h2 class="text-2xl font-extrabold text-gray-900 mb-6">Request Migration Consultation</h2>

        <form action="#" method="post" class="space-y-4">
          <div class="grid sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-semibold text-gray-600 mb-1.5">First Name</label>
              <input type="text" name="first_name" placeholder="First Name"
                     class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-shadow">
            </div>
            <div>
              <label class="block text-xs font-semibold text-gray-600 mb-1.5">Last Name</label>
              <input type="text" name="last_name" placeholder="Last Name"
                     class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-shadow">
            </div>
          </div>

          <div>
            <label class="block text-xs font-semibold text-gray-600 mb-1.5">Business Email</label>
            <input type="email" name="email" placeholder="Business Email"
                   class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-shadow">
          </div>

          <div>
            <label class="block text-xs font-semibold text-gray-600 mb-1.5">Company Name</label>
            <input type="text" name="company" placeholder="Company Name"
                   class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-shadow">
          </div>

          <div>
            <label class="block text-xs font-semibold text-gray-600 mb-1.5">Type of Migration</label>
            <select name="migration_type"
                    class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-shadow bg-white">
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
            <label class="block text-xs font-semibold text-gray-600 mb-1.5">Your Message</label>
            <textarea name="message" rows="5" placeholder="Tell us about your migration project — current environment, systems involved, user count, and timeline."
                      class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-shadow resize-none"></textarea>
          </div>

          <!-- reCAPTCHA placeholder -->
          <div class="bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 flex items-center gap-3">
            <div class="w-5 h-5 border-2 border-gray-400 rounded flex items-center justify-center">
              <i data-lucide="check" class="w-3 h-3 text-transparent"></i>
            </div>
            <span class="text-sm text-gray-600">I'm not a robot</span>
            <div class="ml-auto text-right">
              <p class="text-[10px] text-gray-400 font-semibold">reCAPTCHA</p>
              <p class="text-[9px] text-gray-400">Privacy - Terms</p>
            </div>
          </div>

          <button type="submit"
                  class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-xl shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all text-sm">
            Request Migration Consultation
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════════
     CONTACT INFO STRIP
══════════════════════════════════════════════════════════════════ -->
<section class="bg-white border-t border-gray-100 py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid sm:grid-cols-3 gap-8 text-center">
      <div>
        <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
          <i data-lucide="mail" class="w-6 h-6 text-blue-600"></i>
        </div>
        <h3 class="font-semibold text-gray-900 text-sm mb-1">Email Us</h3>
        <a href="mailto:hello@itmigrationservices.com" class="text-blue-600 text-sm hover:underline">hello@itmigrationservices.com</a>
      </div>
      <div>
        <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
          <i data-lucide="phone" class="w-6 h-6 text-blue-600"></i>
        </div>
        <h3 class="font-semibold text-gray-900 text-sm mb-1">Call Us</h3>
        <a href="tel:+639000000000" class="text-blue-600 text-sm hover:underline">+63 900 000 0000</a>
      </div>
      <div>
        <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
          <i data-lucide="globe" class="w-6 h-6 text-blue-600"></i>
        </div>
        <h3 class="font-semibold text-gray-900 text-sm mb-1">Remote Delivery</h3>
        <p class="text-gray-500 text-sm">Serving global organizations and fast-moving IT teams worldwide.</p>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/layout-bottom.php'; ?>

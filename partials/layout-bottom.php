</main>

<!-- ── Footer ─────────────────────────────────────────────────────── -->
<footer class="bg-gray-900 text-gray-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-10">

      <!-- Brand col -->
      <div class="lg:col-span-2">
        <a href="./" class="inline-flex items-center gap-2.5">
          <div class="w-9 h-9 bg-blue-600 rounded-xl flex items-center justify-center shadow-md">
            <i data-lucide="waypoints" class="w-4 h-4 text-white"></i>
          </div>
          <span class="font-bold text-white text-sm tracking-tight">IT Migration Services</span>
        </a>
        <p class="mt-4 text-sm text-gray-400 leading-relaxed max-w-xs">
          Enterprise infrastructure modernization specialists. We deliver structured IT migration services across Microsoft 365, cloud platforms, and M&amp;A transitions.
        </p>
        <div class="mt-6 flex gap-3">
          <a href="#" class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-gray-700 transition-colors">
            <i data-lucide="twitter" class="w-3.5 h-3.5 text-gray-400"></i>
          </a>
          <a href="#" class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-gray-700 transition-colors">
            <i data-lucide="linkedin" class="w-3.5 h-3.5 text-gray-400"></i>
          </a>
        </div>
      </div>

      <!-- About -->
      <div>
        <h3 class="text-white font-semibold text-sm mb-4">About Us</h3>
        <p class="text-sm text-gray-400 leading-relaxed">
          We deliver structured IT migration services across infrastructure, data, applications, and cloud platforms. Our approach focuses on risk reduction, minimal downtime, and long-term business continuity.
        </p>
      </div>

      <!-- Links -->
      <div>
        <h3 class="text-white font-semibold text-sm mb-4">Links</h3>
        <ul class="space-y-2.5">
          <li><a href="how-it-works" class="text-sm text-gray-400 hover:text-white transition-colors">How It Works</a></li>
          <li><a href="#"            class="text-sm text-gray-400 hover:text-white transition-colors">FAQ's</a></li>
          <li><a href="contact"      class="text-sm text-gray-400 hover:text-white transition-colors">Contact</a></li>
          <li><a href="#"            class="text-sm text-gray-400 hover:text-white transition-colors">Privacy Policy</a></li>
          <li><a href="#"            class="text-sm text-gray-400 hover:text-white transition-colors">Terms of Service</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div>
        <h3 class="text-white font-semibold text-sm mb-4">Services</h3>
        <ul class="space-y-2.5">
          <li><a href="mergers-and-acquisition" class="text-sm text-gray-400 hover:text-white transition-colors">IT M&amp;A Migration</a></li>
          <li><a href="contact" class="text-sm text-gray-400 hover:text-white transition-colors">Data Center Exit &amp; Consolidation</a></li>
          <li><a href="contact" class="text-sm text-gray-400 hover:text-white transition-colors">Infrastructure Migration</a></li>
          <li><a href="contact" class="text-sm text-gray-400 hover:text-white transition-colors">Data Migration Services</a></li>
          <li><a href="contact" class="text-sm text-gray-400 hover:text-white transition-colors">Application Modernization</a></li>
          <li><a href="contact" class="text-sm text-gray-400 hover:text-white transition-colors">Cloud Platform Migration</a></li>
        </ul>
      </div>
    </div>

    <!-- Bottom bar -->
    <div class="mt-12 pt-6 border-t border-gray-800 flex flex-col sm:flex-row items-center justify-between gap-4">
      <p class="text-sm text-gray-500">&copy; <?= date('Y') ?> IT Migration Services. All rights reserved.</p>
      <div class="flex gap-5">
        <a href="#" class="text-sm text-gray-500 hover:text-gray-300 transition-colors">Privacy Policy</a>
        <a href="#" class="text-sm text-gray-500 hover:text-gray-300 transition-colors">Terms</a>
      </div>
    </div>
  </div>
</footer>

<script>
  lucide.createIcons();

  /* Mobile menu */
  const mobBtn  = document.getElementById('mob-btn');
  const mobMenu = document.getElementById('mob-menu');
  if (mobBtn && mobMenu) {
    mobBtn.addEventListener('click', () => {
      mobMenu.classList.toggle('hidden');
    });
  }

  /* FAQ accordion */
  document.querySelectorAll('.faq-item').forEach(item => {
    const toggle = item.querySelector('.faq-toggle');
    if (toggle) {
      toggle.addEventListener('click', () => {
        const isOpen = item.classList.contains('faq-open');
        document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('faq-open'));
        if (!isOpen) item.classList.add('faq-open');
      });
    }
  });
</script>
</body>
</html>

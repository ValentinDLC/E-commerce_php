<header id="header" class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm border-b border-ink/5 transition-all duration-300">
  <div class="container-custom flex justify-between items-center h-[72px] md:h-20">
    <a href="{{ url('/') }}" class="font-heading font-extrabold text-xl md:text-2xl tracking-tighter text-ink">
      DIMA<span class="text-crimson">.</span>
    </a>

    <nav class="hidden md:flex gap-10">
      <a href="{{ url('/collection') }}" data-i18n="nav_coll" class="text-[0.7rem] font-cta font-bold uppercase tracking-[0.15em] text-ink hover:text-crimson transition-colors">Collection</a>
      <a href="{{ url('/') }}#why" data-i18n="nav_design" class="text-[0.7rem] font-cta font-bold uppercase tracking-[0.15em] text-ink hover:text-crimson transition-colors">Design</a>
      <a href="{{ url('/') }}#waitlist" data-i18n="nav_join" class="text-[0.7rem] font-cta font-bold uppercase tracking-[0.15em] text-ink hover:text-crimson transition-colors">Rejoindre</a>
    </nav>

    <div class="flex items-center gap-3">
      <div class="relative">
        <button id="lang-toggle" aria-haspopup="true" aria-expanded="false" class="flex items-center gap-1 text-[0.7rem] font-cta font-bold uppercase tracking-wider text-ink px-3 py-2 rounded-sm hover:bg-[#F5F5F0] transition-colors">
          <span id="current-lang">FR</span>
          <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div id="lang-menu" class="hidden absolute right-0 mt-2 w-40 bg-white shadow-xl border border-ink/5 py-2 z-50">
          <button data-lang="fr" class="lang-option w-full text-left px-4 py-2 text-sm hover:bg-[#F5F5F0]">🇫🇷 Français</button>
          <button data-lang="en" class="lang-option w-full text-left px-4 py-2 text-sm hover:bg-[#F5F5F0]">🇬🇧 English</button>
          <button data-lang="ar" class="lang-option w-full text-left px-4 py-2 text-sm hover:bg-[#F5F5F0]">🇲🇦 العربية</button>
          <button data-lang="tz" class="lang-option w-full text-left px-4 py-2 text-sm hover:bg-[#F5F5F0]">ⵣ ⵜⴰⵎⴰⵣⵉⵖⵜ</button>
        </div>
      </div>

      <button id="mobile-menu-btn" aria-label="Ouvrir le menu" class="md:hidden p-2">
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>
    </div>
  </div>

  <nav id="mobile-menu" class="hidden md:hidden bg-white border-t border-ink/5 px-6 py-4 space-y-3">
    <a href="{{ url('/collection') }}" data-i18n="nav_coll" class="block font-medium py-2 text-ink">Collection</a>
    <a href="{{ url('/') }}#why" data-i18n="nav_design" class="block font-medium py-2 text-ink">Design</a>
    <a href="{{ url('/') }}#waitlist" data-i18n="nav_join" class="block font-medium py-2 text-ink">Rejoindre</a>
  </nav>
</header>

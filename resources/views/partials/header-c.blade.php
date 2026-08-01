<header id="header" class="fixed top-0 left-0 right-0 z-50 bg-forest-dark/95 backdrop-blur-sm border-b border-gold/40 transition-all duration-300">
    <div class="container-custom flex items-center justify-between h-[72px]">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center gap-2">
            <span class="font-heading font-extrabold text-xl md:text-2xl tracking-tight text-white">
                DIMA<span class="text-gold">DIMA</span>
            </span>
        </a>

        <!-- Nav -->
        <nav class="hidden md:flex items-center gap-8">
            <a href="#why" data-i18n="nav_why" class="font-medium text-sm text-white/80 hover:text-gold transition-colors">Pourquoi nous</a>
            <a href="#designs" data-i18n="nav_designs" class="font-medium text-sm text-white/80 hover:text-gold transition-colors">Designs</a>
            <a href="#community" data-i18n="nav_community" class="font-medium text-sm text-white/80 hover:text-gold transition-colors">Communauté</a>
            <a href="#faq" data-i18n="nav_faq" class="font-medium text-sm text-white/80 hover:text-gold transition-colors">FAQ</a>
        </nav>

        <div class="flex items-center gap-4">
            <!-- Lang -->
            <div class="relative">
                <button id="lang-toggle" aria-haspopup="true" aria-expanded="false" class="flex items-center gap-1 text-xs font-cta font-bold uppercase tracking-wider text-white/70 hover:text-gold px-3 py-2 rounded-lg hover:bg-white/5 transition-all">
                    <span id="current-lang">FR</span>
                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div id="lang-menu" class="hidden absolute right-0 mt-2 w-44 bg-ink border border-gold/30 rounded-xl shadow-2xl shadow-black/40 py-2 z-50">
                    <button data-lang="en" class="lang-option block w-full text-left px-4 py-2.5 text-sm text-white/90 hover:bg-gold/10 hover:text-gold transition-colors">🇬🇧 English</button>
                    <button data-lang="fr" class="lang-option block w-full text-left px-4 py-2.5 text-sm text-white/90 hover:bg-gold/10 hover:text-gold transition-colors">🇫🇷 Français</button>
                    <button data-lang="ar" class="lang-option block w-full text-left px-4 py-2.5 text-sm text-white/90 hover:bg-gold/10 hover:text-gold transition-colors">🇲🇦 العربية</button>
                    <button data-lang="tz" class="lang-option block w-full text-left px-4 py-2.5 text-sm text-white/90 hover:bg-gold/10 hover:text-gold transition-colors">ⵣ Tamazight</button>
                </div>
            </div>

            <!-- CTA -->
            <a href="#waitlist" class="hidden sm:inline-block bg-crimson text-white font-cta text-xs uppercase tracking-widest px-5 py-2.5 rounded-lg hover:bg-crimson-dark transition-all shadow-lg shadow-crimson/30">
                Rejoindre
            </a>

            <!-- Mobile -->
            <button id="mobile-menu-btn" aria-label="Menu" class="md:hidden p-2 text-white">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </div>

    <!-- Mobile menu -->
    <nav id="mobile-menu" class="hidden md:hidden bg-forest-dark border-t border-gold/30 px-4 py-6 space-y-4">
        <a href="#why" class="block text-white font-medium py-2">Pourquoi nous</a>
        <a href="#designs" class="block text-white font-medium py-2">Designs</a>
        <a href="#community" class="block text-white font-medium py-2">Communauté</a>
        <a href="#faq" class="block text-white font-medium py-2">FAQ</a>
        <a href="#waitlist" class="block text-center bg-crimson text-white font-cta uppercase text-xs tracking-wide px-5 py-3 rounded-lg mt-4">Rejoindre</a>
    </nav>

    <!-- Ligne dorée -->
    <div class="absolute bottom-0 left-1/4 right-1/4 h-px bg-gradient-to-r from-transparent via-gold to-transparent opacity-40"></div>
</header>

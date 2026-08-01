<header id="header" class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm border-b border-gray-100 transition-all duration-300">
    <div class="container-custom flex items-center justify-between h-16 md:h-20">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center gap-2">
            <span class="font-heading font-extrabold text-xl md:text-2xl tracking-tight">
                DIMA<span class="text-crimson">DIMA</span>
            </span>
        </a>

        <!-- Nav Desktop -->
        <nav class="hidden md:flex items-center gap-8">
            <a href="#why" data-i18n="nav_why" class="font-medium text-sm hover:text-crimson transition-colors">Why Us</a>
            <a href="#designs" data-i18n="nav_designs" class="font-medium text-sm hover:text-crimson transition-colors">Designs</a>
            <a href="#community" data-i18n="nav_community" class="font-medium text-sm hover:text-crimson transition-colors">Community</a>
            <a href="#faq" data-i18n="nav_faq" class="font-medium text-sm hover:text-crimson transition-colors">FAQ</a>
        </nav>

        <div class="flex items-center gap-3">
            <!-- Language Switcher -->
            <div class="relative">
                <button id="lang-toggle" aria-haspopup="true" aria-expanded="false" class="flex items-center gap-1 text-sm font-medium px-3 py-2 rounded-lg hover:bg-gray-100 transition-colors">
                    <span id="current-lang">EN</span>
                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div id="lang-menu" class="hidden absolute right-0 mt-2 w-40 bg-white rounded-xl shadow-xl border border-gray-100 py-2 z-50">
                    <button data-lang="en" class="lang-option w-full text-left px-4 py-2 text-sm hover:bg-gray-50">🇬🇧 English</button>
                    <button data-lang="fr" class="lang-option w-full text-left px-4 py-2 text-sm hover:bg-gray-50">🇫🇷 Français</button>
                    <button data-lang="ar" class="lang-option w-full text-left px-4 py-2 text-sm hover:bg-gray-50">🇲🇦 العربية</button>
                    <button data-lang="tz" class="lang-option w-full text-left px-4 py-2 text-sm hover:bg-gray-50">ⵣ ⵜⴰⵎⴰⵣⵉⵖⵜ</button>
                </div>
            </div>

            <!-- CTA -->
            <a href="#waitlist" data-i18n="nav_cta" class="hidden sm:inline-block bg-crimson text-white font-cta text-xs uppercase tracking-wide px-5 py-2.5 rounded-lg hover:bg-crimson-dark transition-all duration-300 shadow-md">
                Join Waitlist
            </a>

            <!-- Mobile menu button -->
            <button id="mobile-menu-btn" aria-label="Open menu" class="md:hidden p-2">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </div>

    <!-- Mobile Nav -->
    <nav id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-4 py-4 space-y-3">
        <a href="#why" data-i18n="nav_why" class="block font-medium py-2">Why Us</a>
        <a href="#designs" data-i18n="nav_designs" class="block font-medium py-2">Designs</a>
        <a href="#community" data-i18n="nav_community" class="block font-medium py-2">Community</a>
        <a href="#faq" data-i18n="nav_faq" class="block font-medium py-2">FAQ</a>
        <a href="#waitlist" data-i18n="nav_cta" class="block text-center bg-crimson text-white font-cta text-xs uppercase tracking-wide px-5 py-3 rounded-lg mt-4">Join Waitlist</a>
    </nav>
</header>

@extends('layouts.app')

@section('content')

<!-- ============ HERO ============ -->
<section class="relative pt-32 pb-20 md:pt-44 md:pb-28 overflow-hidden bg-gradient-to-b from-gray-50 to-white">
    <div class="absolute top-0 right-0 w-96 h-96 bg-crimson/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-forest/5 rounded-full blur-3xl"></div>

    <div class="container-custom relative">
        <div class="max-w-3xl mx-auto text-center animate-fade-in">

            <span data-i18n="hero_badge" class="inline-flex items-center gap-2 bg-gold/10 text-gold-dark border border-gold/30 text-xs font-cta uppercase tracking-wide px-4 py-2 rounded-full mb-6">
                🇲🇦 Coming Soon — Limited Drop
            </span>

            <h1 class="font-heading font-extrabold text-4xl sm:text-5xl md:text-6xl leading-tight mb-6">
                <span data-i18n="hero_title_1" class="block">One People, One Heart,</span>
                <span data-i18n="hero_title_2" class="block text-crimson">One Homeland.</span>
            </h1>

            <p data-i18n="hero_subtitle" class="text-lg md:text-xl text-gray-600 mb-10 max-w-xl mx-auto leading-relaxed">
                Streetwear jerseys celebrating every region of Morocco. Premium quality, authentic story, real community.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#waitlist" data-i18n="hero_cta_primary" class="btn-primary w-full sm:w-auto text-center">
                    Join The Movement
                </a>
                <a href="#designs" data-i18n="hero_cta_secondary" class="btn-ghost w-full sm:w-auto text-center">
                    See The Designs
                </a>
            </div>

            <p data-i18n="hero_social_proof" class="text-sm text-gray-500 mt-6">
                🔥 Join <span class="font-bold text-gray-800" id="waitlist-count">{{ $waitlistCount ?? 347 }}+</span> people already on the waitlist
            </p>
        </div>

        <div class="mt-16 md:mt-20 relative">
            <div class="grid grid-cols-3 gap-3 md:gap-6 max-w-3xl mx-auto">
                <img src="https://placehold.co/400x500/DC143C/FFFFFF?text=DIMA+DIMA" alt="Casablanca-Settat jersey design" loading="lazy" class="rounded-2xl shadow-xl w-full h-full object-cover translate-y-6">
                <img src="https://placehold.co/400x500/2E7D32/FFFFFF?text=DIMA+DIMA" alt="Marrakech-Safi jersey design" loading="lazy" class="rounded-2xl shadow-xl w-full h-full object-cover -translate-y-3">
                <img src="https://placehold.co/400x500/1a1a1a/FFD700?text=DIMA+DIMA" alt="Fès-Meknès jersey design" loading="lazy" class="rounded-2xl shadow-xl w-full h-full object-cover translate-y-6">
            </div>
        </div>
    </div>
</section>

<!-- ============ WHY DIMA DIMA ============ -->
<section id="why" class="py-20 md:py-28 bg-white">
    <div class="container-custom">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span data-i18n="why_label" class="text-crimson font-cta text-xs uppercase tracking-widest font-bold">Why DIMA DIMA</span>
            <h2 data-i18n="why_title" class="font-heading font-bold text-3xl md:text-4xl mt-3 mb-4">
                Celebrate Your Region, Your Culture, Your Nation
            </h2>
            <p data-i18n="why_subtitle" class="text-gray-600 text-lg">
                This isn't just a t-shirt store. It's a movement.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="group p-8 rounded-2xl border border-gray-100 hover:border-crimson/30 hover:shadow-xl transition-all duration-300">
                <div class="w-14 h-14 rounded-xl bg-crimson/10 flex items-center justify-center mb-6 group-hover:bg-crimson group-hover:scale-110 transition-all duration-300">
                    <svg class="w-7 h-7 text-crimson group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 data-i18n="why_1_title" class="font-heading font-bold text-xl mb-3">Premium Quality</h3>
                <p data-i18n="why_1_desc" class="text-gray-600 leading-relaxed">
                    High-grade fabrics, real craftsmanship. Not cheap streetwear — built to last and to make you proud.
                </p>
            </div>

            <div class="group p-8 rounded-2xl border border-gray-100 hover:border-forest/30 hover:shadow-xl transition-all duration-300">
                <div class="w-14 h-14 rounded-xl bg-forest/10 flex items-center justify-center mb-6 group-hover:bg-forest group-hover:scale-110 transition-all duration-300">
                    <svg class="w-7 h-7 text-forest group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                </div>
                <h3 data-i18n="why_2_title" class="font-heading font-bold text-xl mb-3">Authentic Story</h3>
                <p data-i18n="why_2_desc" class="text-gray-600 leading-relaxed">
                    Every design honors a real Moroccan region — its identity, its history, its people.
                </p>
            </div>

            <div class="group p-8 rounded-2xl border border-gray-100 hover:border-gold/40 hover:shadow-xl transition-all duration-300">
                <div class="w-14 h-14 rounded-xl bg-gold/10 flex items-center justify-center mb-6 group-hover:bg-gold group-hover:scale-110 transition-all duration-300">
                    <svg class="w-7 h-7 text-gold-dark transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m6-1.13a4 4 0 10-8 0 4 4 0 008 0zm6 0a4 4 0 10-8 0"/></svg>
                </div>
                <h3 data-i18n="why_3_title" class="font-heading font-bold text-xl mb-3">Real Community</h3>
                <p data-i18n="why_3_desc" class="text-gray-600 leading-relaxed">
                    Built with Moroccans, for Moroccans — at home and across the diaspora. One people, united.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ============ DESIGNS SHOWCASE ============ -->
<section id="designs" class="py-20 md:py-28 bg-gray-50">
    <div class="container-custom">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span data-i18n="designs_label" class="text-forest font-cta text-xs uppercase tracking-widest font-bold">The Collection</span>
            <h2 data-i18n="designs_title" class="font-heading font-bold text-3xl md:text-4xl mt-3 mb-4">
                One Jersey Per Region
            </h2>
            <p data-i18n="designs_subtitle" class="text-gray-600 text-lg">
                Five designs. Five stories. Which one is yours?
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach([
                ['id' => '01', 'name' => 'Casablanca-Settat', 'bg' => 'DC143C'],
                ['id' => '02', 'name' => 'Marrakech-Safi', 'bg' => '2E7D32'],
                ['id' => '03', 'name' => 'Fès-Meknès', 'bg' => '1a1a1a'],
                ['id' => '04', 'name' => 'Tanger-Tétouan-Al Hoceïma', 'bg' => 'B01030'],
                ['id' => '05', 'name' => 'Rabat-Salé-Kénitra', 'bg' => '1B5E20'],
            ] as $design)
            <div class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300">
                <span class="absolute top-4 left-4 z-10 bg-white/90 backdrop-blur-sm text-xs font-cta font-bold px-3 py-1 rounded-full">#{{ $design['id'] }}</span>
                <span data-i18n="badge_soon" class="absolute top-4 right-4 z-10 bg-crimson text-white text-xs font-cta uppercase px-3 py-1 rounded-full">Soon</span>
                <img src="https://placehold.co/500x600/{{ $design['bg'] }}/FFFFFF?text={{ urlencode($design['name']) }}" alt="{{ $design['name'] }} jersey" loading="lazy" class="w-full aspect-[5/6] object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="p-5">
                    <h3 class="font-heading font-bold text-lg">{{ $design['name'] }}</h3>
                    <p data-i18n="designs_soon" class="text-sm text-gray-500 mt-1">Notify me when available</p>
                </div>
            </div>
            @endforeach

            <div class="flex flex-col items-center justify-center text-center bg-gray-900 rounded-2xl p-8 text-white">
                <p data-i18n="designs_more_1" class="font-heading font-bold text-xl mb-2">+ 7 more regions</p>
                <p data-i18n="designs_more_2" class="text-gray-300 text-sm mb-6">Full collection revealed at launch</p>
                <a href="#waitlist" data-i18n="designs_more_cta" class="btn-primary text-sm">Get Early Access</a>
            </div>

        </div>
    </div>
</section>

<!-- ============ SOCIAL PROOF ============ -->
<section id="community" class="py-20 md:py-28 bg-white">
    <div class="container-custom">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span data-i18n="social_label" class="text-gold-dark font-cta text-xs uppercase tracking-widest font-bold">Join The Movement</span>
            <h2 data-i18n="social_title" class="font-heading font-bold text-3xl md:text-4xl mt-3">
                A Growing Community
            </h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto text-center">
            <div class="p-6">
                <p class="font-heading font-extrabold text-3xl md:text-4xl text-crimson">{{ $waitlistCount ?? 347 }}+</p>
                <p data-i18n="stat_waitlist" class="text-sm text-gray-600 mt-2">On the waitlist</p>
            </div>
            <div class="p-6">
                <p class="font-heading font-extrabold text-3xl md:text-4xl text-forest">12,500+</p>
                <p data-i18n="stat_followers" class="text-sm text-gray-600 mt-2">Instagram followers</p>
            </div>
            <div class="p-6">
                <p class="font-heading font-extrabold text-3xl md:text-4xl text-gold-dark">12</p>
                <p data-i18n="stat_regions" class="text-sm text-gray-600 mt-2">Regions represented</p>
            </div>
            <div class="p-6">
                <p class="font-heading font-extrabold text-3xl md:text-4xl text-gray-800">25+</p>
                <p data-i18n="stat_countries" class="text-sm text-gray-600 mt-2">Countries in the diaspora</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ WAITLIST CTA ============ -->
<section id="waitlist" class="py-20 md:py-28 bg-gray-900 relative overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-crimson/10 rounded-full blur-3xl"></div>

    <div class="container-custom relative">
        <div class="max-w-xl mx-auto text-center">
            <h2 data-i18n="waitlist_title" class="font-heading font-bold text-3xl md:text-4xl text-white mb-4">
                Join The Movement
            </h2>
            <p data-i18n="waitlist_subtitle" class="text-gray-300 text-lg mb-10">
                Be the first to know when we launch. Early members get exclusive access and special pricing.
            </p>

            <form id="waitlist-form" class="flex flex-col sm:flex-row gap-3" novalidate>
                <div class="flex-1 text-left">
                    <label for="email" class="sr-only" data-i18n="waitlist_email_label">Email address</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                        data-i18n-placeholder="waitlist_placeholder"
                        placeholder="your@email.com"
                        class="w-full px-5 py-4 rounded-lg bg-white text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-crimson/30"
                        aria-describedby="email-error"
                    >
                    <p id="email-error" class="hidden text-crimson-light text-sm mt-2 text-left" role="alert"></p>
                </div>
                <button type="submit" data-i18n="waitlist_submit" class="btn-primary whitespace-nowrap">
                    Join Waitlist
                </button>
            </form>

            <p id="form-success" class="hidden text-forest-light font-medium mt-4" role="status"></p>

            <p data-i18n="waitlist_privacy" class="text-gray-500 text-sm mt-6">
                🔒 No spam. Unsubscribe anytime.
            </p>
        </div>
    </div>
</section>

<!-- ============ FAQ ============ -->
<section id="faq" class="py-20 md:py-28 bg-white">
    <div class="container-custom max-w-3xl">
        <div class="text-center mb-14">
            <span data-i18n="faq_label" class="text-crimson font-cta text-xs uppercase tracking-widest font-bold">FAQ</span>
            <h2 data-i18n="faq_title" class="font-heading font-bold text-3xl md:text-4xl mt-3">
                Frequently Asked Questions
            </h2>
        </div>

        <div class="space-y-4">
            @foreach([
                ['q' => 'faq_q1', 'a' => 'faq_a1'],
                ['q' => 'faq_q2', 'a' => 'faq_a2'],
                ['q' => 'faq_q3', 'a' => 'faq_a3'],
                ['q' => 'faq_q4', 'a' => 'faq_a4'],
                ['q' => 'faq_q5', 'a' => 'faq_a5'],
            ] as $faq)
            <details class="group border border-gray-200 rounded-xl px-6 py-4 open:shadow-md transition-all">
                <summary class="flex items-center justify-between cursor-pointer list-none font-heading font-semibold">
                    <span data-i18n="{{ $faq['q'] }}">Question</span>
                    <svg class="w-5 h-5 flex-shrink-0 group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </summary>
                <p data-i18n="{{ $faq['a'] }}" class="text-gray-600 mt-3 leading-relaxed">
                    Answer
                </p>
            </details>
            @endforeach
        </div>
    </div>
</section>

@endsection

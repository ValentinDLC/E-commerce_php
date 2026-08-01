@extends('layouts.app')

@section('content')

<!-- ============ HERO ============ -->
<section class="hero relative min-h-screen flex items-center overflow-hidden bg-ivory pt-[72px]">

    <!-- Zellige pattern -->
    <div class="absolute inset-0 pointer-events-none opacity-[0.035]"
         style="background-image: repeating-linear-gradient(45deg, transparent, transparent 50px, #D4AF37 50px, #D4AF37 51px), repeating-linear-gradient(-45deg, transparent, transparent 50px, #C1272D 50px, #C1272D 51px);">
    </div>

    <!-- Lumière -->
    <div class="absolute top-0 left-0 right-0 h-[70vh] bg-gradient-to-b from-gold/10 via-transparent to-transparent pointer-events-none"></div>

    <!-- ARCHES PRINCIPALES -->
    <div class="absolute top-[72px] left-1/2 -translate-x-1/2 w-[900px] h-[90vh] pointer-events-none z-0">
        <!-- Arche extérieure -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-[85%] border border-gold/30 rounded-[50%_50%_0_0/18%_18%_0_0]"></div>
        <!-- Arche milieu -->
        <div class="absolute top-5 left-1/2 -translate-x-1/2 w-[84%] h-[80%] border border-gold/20 rounded-[50%_50%_0_0/18%_18%_0_0]"></div>
        <!-- Arche intérieure -->
        <div class="absolute top-10 left-1/2 -translate-x-1/2 w-[68%] h-[75%] border border-gold/10 rounded-[50%_50%_0_0/18%_18%_0_0]"></div>
        <!-- Point sommet -->
        <div class="absolute top-[-5px] left-1/2 -translate-x-1/2 w-[10px] h-[10px] bg-gold rounded-full opacity-60"></div>
        <!-- Colonnes -->
        <div class="absolute bottom-0 left-0 w-[1.5px] h-[15%] bg-gradient-to-b from-gold/30 to-transparent"></div>
        <div class="absolute bottom-0 right-0 w-[1.5px] h-[15%] bg-gradient-to-b from-gold/30 to-transparent"></div>
    </div>

    <!-- Coins décoratifs -->
    <div class="absolute top-[90px] left-6 w-20 h-20 border-t-[1.5px] border-l-[1.5px] border-gold/50 rounded-tl-xl pointer-events-none"></div>
    <div class="absolute top-[90px] right-6 w-20 h-20 border-t-[1.5px] border-r-[1.5px] border-gold/50 rounded-tr-xl pointer-events-none"></div>
    <div class="absolute bottom-6 left-6 w-20 h-20 border-b-[1.5px] border-l-[1.5px] border-gold/50 rounded-bl-xl pointer-events-none"></div>
    <div class="absolute bottom-6 right-6 w-20 h-20 border-b-[1.5px] border-r-[1.5px] border-gold/50 rounded-br-xl pointer-events-none"></div>

    <div class="container-custom relative z-10">
        <div class="grid md:grid-cols-2 gap-12 items-center py-16">

            <!-- CONTENU -->
            <div>
                <!-- Ornement -->
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-px bg-gradient-to-r from-transparent to-gold"></div>
                    <span class="text-gold text-xs font-cta font-bold uppercase tracking-[0.2em]">data-i18n="label_collection">Collection 2025</span>
                </div>

                <div class="inline-flex items-center gap-2 bg-gold/10 border border-gold/30 text-gold text-[0.7rem] font-cta font-bold uppercase tracking-[0.12em] px-4 py-1.5 rounded-full mb-6">
                    🇲🇦 data-i18n="hero_badge">🇲🇦 Bientôt disponible — Édition limitée
                </div>

                <h1 class="font-heading font-extrabold text-4xl sm:text-5xl md:text-[3.5rem] leading-[1.05] mb-4 text-ink">
                    <span class="block">data-i18n="hero_line1">Un seul peuple,</span>
                    <span class="block text-crimson relative">
                        data-i18n="hero_line2">Un seul cœur,
                        <span class="absolute bottom-1 left-0 w-[55%] h-[2px] bg-gradient-to-r from-gold to-transparent rounded-full"></span>
                    </span>
                    <span class="block text-forest">data-i18n="hero_line3">Une seule patrie.</span>
                </h1>

                <!-- Diviseur -->
                <div class="flex items-center gap-2 my-6">
                    <div class="w-[50px] h-px bg-gradient-to-r from-gold to-transparent"></div>
                    <div class="w-[7px] h-[7px] bg-gold rotate-45 flex-shrink-0"></div>
                    <div class="w-3 h-3 bg-gold/40 rotate-45 flex-shrink-0"></div>
                    <div class="w-[50px] h-px bg-gradient-to-r from-transparent to-gold"></div>
                </div>

                <p class="text-ink/60 text-base md:text-lg leading-relaxed mb-8 max-w-md">
                    data-i18n="hero_subtitle">Maillots streetwear qui célèbrent chaque région du Maroc. Qualité premium, histoire authentique, vraie communauté.
                </p>

                <div class="flex flex-wrap gap-3 mb-8">
                    <a href="#waitlist" class="btn-primary">
                        data-i18n="cta_join">data-i18n="btn_join">Rejoindre le data-i18n="waitlist_title_b">mouvement <span>→</span>
                    </a>
                    <a href="#designs" class="btn-ghost-gold">data-i18n="cta_view">Voir les designs</a>
                </div>

                <div class="flex items-center gap-3 text-sm text-ink/40">
                    <div class="flex -space-x-2">
                        <div class="w-8 h-8 rounded-full bg-crimson/20 border-2 border-ink flex items-center justify-center text-[0.6rem] font-bold text-crimson">M</div>
                        <div class="w-8 h-8 rounded-full bg-forest/20 border-2 border-ink flex items-center justify-center text-[0.6rem] font-bold text-forest">K</div>
                        <div class="w-8 h-8 rounded-full bg-gold/20 border-2 border-ink flex items-center justify-center text-[0.6rem] font-bold text-gold-dark">Y</div>
                    </div>
                    <span>🔥 <strong class="text-ink">347+</strong> déjà inscrits</span>
                </div>
            </div>

            <!-- IMAGES -->
            <div class="relative h-[520px]">
                <!-- Badge flottant -->
                <div class="absolute top-4 right-[-8px] z-20 bg-crimson text-ink text-[0.6rem] font-cta font-bold uppercase tracking-[0.08em] px-3 py-1 rounded-full shadow-xl shadow-crimson/30">
                    Bientôt
                </div>

                <!-- Image principale -->
                <div class="absolute left-0 top-5 w-[55%] h-[480px] rounded-[999px_999px_20px_20px] overflow-hidden shadow-2xl shadow-black/50 border border-gold/20">
                    <img src="https://placehold.co/420x500/C1272D/FAF9F6?text=DIMA+DIMA" alt="Jersey Casablanca" class="w-full h-full object-cover hover:scale-[1.04] transition-transform duration-700">
                    <div class="absolute bottom-3 left-3 bg-ivory/95 backdrop-blur-md px-3 py-1.5 rounded-full text-[0.65rem] font-cta font-bold text-ink tracking-wide border-l-[3px] border-gold">
                        <span class="text-crimson">#01</span> Casablanca
                    </div>
                </div>

                <!-- Image haut droite -->
                <div class="absolute right-0 top-0 w-[42%] h-[220px] rounded-[999px_999px_14px_14px] overflow-hidden shadow-xl shadow-black/40 border border-gold/15">
                    <img src="https://placehold.co/320x230/006233/FAF9F6?text=DIMA+DIMA" alt="Jersey Marrakech" class="w-full h-full object-cover hover:scale-[1.04] transition-transform duration-700">
                    <div class="absolute bottom-2 left-2 bg-ivory/95 backdrop-blur-md px-2.5 py-1 rounded-full text-[0.6rem] font-cta font-bold text-ink tracking-wide border-l-[3px] border-gold">
                        <span class="text-crimson">#02</span> Marrakech
                    </div>
                </div>

                <!-- Image bas droite -->
                <div class="absolute right-0 bottom-0 w-[42%] h-[220px] rounded-[999px_999px_14px_14px] overflow-hidden shadow-xl shadow-black/40 border border-gold/15">
                    <img src="https://placehold.co/320x230/1A1A1A/D4AF37?text=DIMA+DIMA" alt="Jersey Fès" class="w-full h-full object-cover hover:scale-[1.04] transition-transform duration-700">
                    <div class="absolute bottom-2 left-2 bg-ivory/95 backdrop-blur-md px-2.5 py-1 rounded-full text-[0.6rem] font-cta font-bold text-ink tracking-wide border-l-[3px] border-gold">
                        <span class="text-crimson">#03</span> Fès
                    </div>
                </div>

                <!-- Compteur flottant -->
                <div class="absolute -bottom-4 left-1/2 -translate-x-1/2 bg-ivory border border-gold/30 rounded-full px-5 py-2 flex items-center gap-2 shadow-xl shadow-black/10 z-20">
                    <div class="w-2 h-2 bg-forest rounded-full animate-pulse"></div>
                    <span class="text-[0.7rem] font-cta font-bold text-ink"><strong class="text-crimson">347+</strong> déjà inscrits</span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============ WHY ============ -->
<section id="why" class="py-28 md:py-36 bg-ivory">
    <div class="container-custom text-center max-w-3xl mx-auto mb-20">
        <span class="text-gold font-cta text-[0.7rem] uppercase tracking-[0.2em] font-bold">Pourquoi DIMA DIMA</span>
        <h2 class="font-heading font-extrabold text-3xl md:text-[3.5rem] text-ink mt-4 mb-5 leading-[1.05]">
            Une marque qui célèbre <span class="text-gold">chaque région</span>.
        </h2>
        <p class="text-ink/40 text-lg">Pas juste un magasin. Un data-i18n="waitlist_title_b">mouvement.</p>
    </div>

    <div class="container-custom grid md:grid-cols-3 gap-8">
        <!-- Card -->
        <div class="group p-8 md:p-10 rounded-3xl border border-white/5 bg-gradient-to-b from-white/[0.03] to-transparent hover:border-gold/30 hover:shadow-2xl hover:shadow-gold/5 transition-all duration-300">
            <div class="w-16 h-16 rounded-2xl bg-crimson/10 flex items-center justify-center mb-8 group-hover:bg-crimson group-hover:scale-110 transition-all duration-300">
                <svg class="w-8 h-8 text-crimson group-hover:text-ink transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </div>
            <h3 class="font-heading font-bold text-xl text-ink mb-4">Qualité Premium</h3>
            <p class="text-ink/50 leading-relaxed">Tissus haut de gamme, savoir-faire authentique. Des maillots conçus pour durer et te rendre fier.</p>
        </div>

        <div class="group p-8 md:p-10 rounded-3xl border border-white/5 bg-gradient-to-b from-white/[0.03] to-transparent hover:border-forest/50 hover:shadow-2xl hover:shadow-forest/5 transition-all duration-300">
            <div class="w-16 h-16 rounded-2xl bg-forest/10 flex items-center justify-center mb-8 group-hover:bg-forest group-hover:scale-110 transition-all duration-300">
                <svg class="w-8 h-8 text-forest group-hover:text-ink transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
            </div>
            <h3 class="font-heading font-bold text-xl text-ink mb-4">Histoire Authentique</h3>
            <p class="text-ink/50 leading-relaxed">Chaque design honore une vraie région — son identité, son histoire, son peuple.</p>
        </div>

        <div class="group p-8 md:p-10 rounded-3xl border border-white/5 bg-gradient-to-b from-white/[0.03] to-transparent hover:border-gold/40 hover:shadow-2xl hover:shadow-gold/5 transition-all duration-300">
            <div class="w-16 h-16 rounded-2xl bg-gold/10 flex items-center justify-center mb-8 group-hover:bg-gold group-hover:scale-110 transition-all duration-300">
                <svg class="w-8 h-8 text-gold-dark group-hover:text-ink transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m6-1.13a4 4 0 10-8 0 4 4 0 008 0zm6 0a4 4 0 10-8 0"/></svg>
            </div>
            <h3 class="font-heading font-bold text-xl text-ink mb-4">Communauté Réelle</h3>
            <p class="text-ink/50 leading-relaxed">Conçu avec des Marocains, pour des Marocains — au pays et dans la diaspora.</p>
        </div>
    </div>
</section>

<!-- ============ DESIGNS ============ -->
<section id="designs" class="py-28 md:py-36 bg-gradient-to-b from-ivory to-[#0f0f11]">
    <div class="container-custom">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-forest font-cta text-[0.7rem] uppercase tracking-[0.2em] font-bold">Collection</span>
            <h2 class="font-heading font-extrabold text-3xl md:text-[3.5rem] text-ink mt-3 mb-4 leading-[1.1]">
                Un maillot <span class="text-gold">par région</span>
            </h2>
            <p class="text-ink/40 text-lg">Cinq designs. Cinq histoires. Lequel est le tien ?</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
            $designs = [
                ['id'=>'01','name'=>'Casablanca-Settat','bg'=>'C1272D','text'=>'FAF9F6'],
                ['id'=>'02','name'=>'Marrakech-Safi','bg'=>'006233','text'=>'FAF9F6'],
                ['id'=>'03','name'=>'Fès-Meknès','bg'=>'1A1A1A','text'=>'D4AF37'],
                ['id'=>'04','name'=>'Tanger-Tétouan','bg'=>'8B1A1F','text'=>'FAF9F6'],
                ['id'=>'05','name'=>'Rabat-Salé','bg'=>'003D20','text'=>'D4AF37'],
            ];
            @endphp

            @foreach($designs as $d)
            <div class="group relative bg-gradient-to-b from-white/[0.06] to-transparent rounded-3xl overflow-hidden border border-white/[0.08] hover:border-gold/40 hover:shadow-2xl hover:shadow-gold/5 transition-all duration-500">
                <span class="absolute top-4 left-4 z-10 bg-ivory/80 backdrop-blur-md text-[0.65rem] font-cta font-bold px-3 py-1 rounded-full text-ink">#{{ $d['id'] }}</span>
                <span class="absolute top-4 right-4 z-10 bg-crimson text-ink text-[0.6rem] font-cta font-bold uppercase px-3 py-1 rounded-full">Bientôt</span>
                <img src="https://placehold.co/500x600/{{ $d['bg'] }}/{{ $d['text'] }}?text={{ urlencode('+'.$d['name']) }}" alt="{{ $d['name'] }}" loading="lazy" class="w-full aspect-[5/6] object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="p-6">
                    <h3 class="font-heading font-bold text-xl text-ink">{{ $d['name'] }}</h3>
                    <p class="text-sm text-ink/30 mt-1">Me notifier à la sortie</p>
                </div>
            </div>
            @endforeach

            <!-- Card CTA -->
            <div class="flex flex-col items-center justify-center bg-gradient-to-b from-white/[0.02] to-transparent rounded-3xl border border-white/[0.06] p-10 text-center">
                <p class="font-heading font-bold text-2xl text-ink mb-2">data-i18n="more_regions">+ 7 régions</p>
                <p class="text-ink/40 text-sm mb-6">data-i18n="full_soon">Collection complète au lancement</p>
                <a href="#waitlist" class="btn-primary">data-i18n="early_access">Accès anticipé</a>
            </div>
        </div>
    </div>
</section>

<!-- ============ COMMUNITY ============ -->
<section id="community" class="py-28 md:py-36 bg-ivory">
    <div class="container-custom">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="text-gold font-cta text-[0.7rem] uppercase tracking-[0.2em] font-bold">Communauté</span>
            <h2 class="font-heading font-extrabold text-3xl md:text-[3.5rem] text-ink mt-3">data-i18n="community_title">Le data-i18n="waitlist_title_b">mouvement grandit</h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto text-center">
            <div class="p-6">
                <p class="font-heading font-extrabold text-4xl text-crimson">347+</p>
                <p class="text-sm text-ink/40 mt-2">data-i18n="stat_waitlist">Sur la liste</p>
            </div>
            <div class="p-6">
                <p class="font-heading font-extrabold text-4xl text-forest">12 500+</p>
                <p class="text-sm text-ink/40 mt-2">data-i18n="stat_followers">Abonnés</p>
            </div>
            <div class="p-6">
                <p class="font-heading font-extrabold text-4xl text-gold">12</p>
                <p class="text-sm text-ink/40 mt-2">data-i18n="stat_regions">Régions</p>
            </div>
            <div class="p-6">
                <p class="font-heading font-extrabold text-4xl text-ink">25+</p>
                <p class="text-sm text-ink/40 mt-2">data-i18n="stat_countries">Pays</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ WAITLIST ============ -->
<section id="waitlist" class="py-28 md:py-36 bg-gradient-to-b from-ivory to-[#0f0f11] relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-crimson/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="container-custom relative z-10">
        <div class="max-w-xl mx-auto text-center">
            <h2 class="font-heading font-extrabold text-3xl md:text-[3.5rem] text-ink mb-4 leading-[1.1]">
                data-i18n="waitlist_title">Rejoins le <span class="text-gold">data-i18n="waitlist_title_b">mouvement</span>
            </h2>
            <p class="text-ink/40 text-lg mb-10">
                data-i18n="waitlist_sub">Sois le premier informé du lancement. Les premiers membres bénéficient d'un accès exclusif et d'offres spéciales.
            </p>

            <form id="waitlist-form" class="flex flex-col sm:flex-row gap-3" novalidate>
                <div class="flex-1 text-left">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" id="email" name="email" required placeholder="data-i18n-placeholder="placeholder_email">ton@email.com" class="w-full px-5 py-4 rounded-xl bg-white text-ink placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-gold/50" aria-describedby="email-error">
                    <p id="email-error" class="hidden text-crimson-light text-sm mt-2 text-left" role="alert"></p>
                </div>
                <button type="submit" class="btn-primary whitespace-nowrap">data-i18n="btn_join">Rejoindre</button>
            </form>

            <p id="form-success" class="hidden text-gold font-medium mt-4" role="status"></p>
            <p class="text-ink/20 text-xs mt-6">🔒 data-i18n="privacy_note">Pas de spam. Désabonnement à tout moment.</p>
        </div>
    </div>
</section>

<!-- ============ FAQ ============ -->
<section id="faq" class="py-28 md:py-36 bg-ivory">
    <div class="container-custom max-w-3xl">
        <div class="text-center mb-14">
            <span class="text-crimson font-cta text-[0.7rem] uppercase tracking-[0.2em] font-bold">FAQ</span>
            <h2 class="font-heading font-extrabold text-3xl md:text-[3.5rem] text-ink mt-3">data-i18n="faq_title">Questions fréquentes</h2>
        </div>

        <div class="space-y-4">
            @foreach([
                ['q'=>'data-i18n="faq_q1">Quand sortent les maillots ?','a'=>'data-i18n="faq_a1">Dans les prochaines semaines. Inscris-toi pour être notifié dès le lancement.'],
                ['q'=>'data-i18n="faq_q2">En quoi DIMA DIMA est différent ?','a'=>'Chaque maillot raconte l\'histoire d\'une vraie région marocaine. Qualité premium, design authentique.'],
                ['q'=>'data-i18n="faq_q3">Y aura-t-il toutes les régions ?','a'=>'Oui ! Nous lançons 5 régions d\'abord, puis les 7 autres progressivement selon la demande.'],
                ['q'=>'Que gagne-t-on en s\'inscrivant ?','a'=>'data-i18n="early_access">data-i18n="faq_a4">Accès anticipé, prix exclusifs et priorité sur les éditions limitées de ta région.'],
                ['q'=>'data-i18n="faq_q5">Livraison internationale ?','a'=>'data-i18n="faq_a5">Oui. DIMA DIMA est pour chaque Marocain — au pays et dans la diaspora mondiale.'],
            ] as $faq)
            <details class="group border border-white/10 rounded-2xl px-6 py-5 bg-gradient-to-r from-white/[0.02] to-transparent open:border-gold/30 open:shadow-xl open:shadow-gold/5 transition-all">
                <summary class="flex items-center justify-between cursor-pointer list-none font-heading font-bold text-ink text-base">
                    <span>{{ $faq['q'] }}</span>
                    <svg class="w-5 h-5 flex-shrink-0 group-open:rotate-180 transition-transform text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </summary>
                <p class="text-ink/40 mt-3 leading-relaxed">{{ $faq['a'] }}</p>
            </details>
            @endforeach
        </div>
    </div>
</section>

@endsection

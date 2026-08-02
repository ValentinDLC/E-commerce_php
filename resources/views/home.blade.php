@extends('layouts.app')

@section('content')

<!-- ============ HERO ARCHITECTURAL ============ -->
<section class="relative min-h-screen bg-white pt-[80px] overflow-hidden">

  <!-- Hero Grid pleine largeur -->
  <div class="grid grid-cols-1 lg:grid-cols-12 min-h-[92vh]">

    <!-- Texte : 5 colonnes -->
    <div class="lg:col-span-5 flex flex-col justify-center px-8 md:px-16 lg:px-20 py-24 lg:py-0 order-2 lg:order-1">
      <div class="max-w-lg">
        <p data-i18n="hero_tag" class="text-[0.7rem] font-cta font-extrabold uppercase tracking-[0.25em] text-crimson mb-6">
          Collection Printemps 2025
        </p>

        <h1 class="text-[3.5rem] md:text-[4.5rem] lg:text-[5.5rem] font-extrabold leading-[0.9] text-ink mb-8">
          <span data-i18n="hero_line1" class="block">UN SEUL</span>
          <span data-i18n="hero_line2" class="block text-forest">PEUPLE.</span>
          <span data-i18n="hero_line3" class="block">UN SEUL CŒUR.</span>
          <span data-i18n="hero_line4" class="block text-crimson">UNE SEULE PATRIE.</span>
        </h1>

        <p data-i18n="hero_sub" class="text-base md:text-lg text-ink/50 font-medium leading-relaxed mb-10 max-w-md">
          Maillots streetwear célébrant chaque région du Maroc. Performance, authenticité, unité.
        </p>

        <div class="flex gap-4">
          <a href="#waitlist" data-i18n="cta_join" class="btn-cta">Rejoindre le mouvement</a>
          <a href="{{ url('/collection') }}" data-i18n="cta_discover" class="btn-out">Découvrir</a>
        </div>

        <div class="mt-16 flex items-center gap-6 text-[0.75rem] font-cta font-bold uppercase tracking-[0.1em] text-ink/30">
          <span data-i18n="stat_1">500+ Inscrits</span>
          <span class="w-8 h-px bg-ink/20"></span>
          <span data-i18n="stat_2">12 Régions</span>
          <span class="w-8 h-px bg-ink/20"></span>
          <span data-i18n="stat_3">Premium</span>
        </div>
      </div>
    </div>

    <!-- Image : 7 colonnes -->
    <div class="lg:col-span-7 relative bg-[#F5F5F0] order-1 lg:order-2 min-h-[50vh] lg:min-h-[92vh]">
      <img src="https://placehold.co/800x900/C1272D/FAF9F6?text=DIMA+DIMA" alt="Dima Dima Jersey" class="w-full h-full object-cover object-center">
      <!-- Badge architectural -->
      <div class="absolute bottom-8 left-8 bg-white px-6 py-4 shadow-2xl shadow-black/10">
        <p class="text-[0.6rem] font-cta font-extrabold uppercase tracking-[0.2em] text-ink/30">Collection</p>
        <p class="text-xl font-heading font-extrabold text-ink leading-tight">RÉGION #01</p>
        <p class="text-sm font-medium text-crimson">Casablanca-Settat</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ COLLECTION (Nike Grid) ============ -->
<section id="designs" class="py-32 bg-white">
  <div class="container-custom">
    <div class="flex justify-between items-end mb-16">
      <div>
        <h2 class="text-5xl md:text-7xl font-extrabold text-ink leading-[0.9] tracking-tighter">
          <span data-i18n="section_design_1">LA</span><br>
          <span data-i18n="section_design_2" class="text-forest">COLLECTION</span>
        </h2>
        <p data-i18n="section_sub" class="text-lg text-ink/40 mt-4 font-medium">Chaque maillot = une région marocaine.</p>
      </div>
      <a href="{{ url('/collection') }}" data-i18n="link_all" class="hidden md:inline-block text-sm font-cta font-bold uppercase tracking-[0.15em] text-crimson hover:underline">Voir tout</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @php
      $items = array_slice(\App\Support\Products::all(), 0, 6);
      @endphp

      @foreach($items as $item)
      <a href="{{ url('/produit/'.$item['slug']) }}" class="group block">
        <div class="relative overflow-hidden bg-[#F5F5F0] aspect-[4/5]">
          <img src="https://placehold.co/500x625/{{ $item['color'] }}?text=DIMA+DIMA" alt="{{ $item['name'] }}" class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-700">
          <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60 via-black/20 to-transparent">
            <span class="text-[0.6rem] font-cta font-extrabold text-white/70 uppercase tracking-[0.2em]">{{ $item['num'] }}</span>
            <h3 class="text-xl font-heading font-extrabold text-white">{{ $item['name'] }}</h3>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</section>

<!-- ============ WHY (Nike Style — Minimal) ============ -->
<section id="why" class="py-24 bg-[#F5F5F0]">
  <div class="container-custom grid lg:grid-cols-3 gap-16">
    <div>
      <h3 data-i18n="feat_1" class="text-3xl font-heading font-extrabold text-ink mb-4">Performance.</h3>
      <p data-i18n="feat_1_d" class="text-ink/50 leading-relaxed">Tissus techniques, coupes aérodynamiques, finitions premium.</p>
    </div>
    <div>
      <h3 data-i18n="feat_2" class="text-3xl font-heading font-extrabold text-ink mb-4">Identité.</h3>
      <p data-i18n="feat_2_d" class="text-ink/50 leading-relaxed">Chaque maillot célèbre une région du Maroc avec authenticité.</p>
    </div>
    <div>
      <h3 data-i18n="feat_3" class="text-3xl font-heading font-extrabold text-ink mb-4">Unité.</h3>
      <p data-i18n="feat_3_d" class="text-ink/50 leading-relaxed">Un seul peuple. Un seul maillot. Une seule patrie.</p>
    </div>
  </div>
</section>

<!-- ============ COMMUNITY ============ -->
<section id="community" class="py-32 bg-ink">
  <div class="container-custom text-center">
    <h2 class="text-6xl md:text-8xl font-extrabold text-white tracking-tighter leading-[0.85] mb-12">
      <span data-i18n="social_title_1">REJOINS</span><br>
      <span data-i18n="social_title_2" class="text-gold">LE MOUVEMENT</span>
    </h2>
    <div class="flex justify-center gap-20 text-white">
      <div>
        <p class="text-5xl font-heading font-extrabold">347+</p>
        <p data-i18n="stat_wait" class="text-sm text-white/40 font-cta uppercase tracking-[0.15em] mt-2">Inscrits</p>
      </div>
      <div>
        <p class="text-5xl font-heading font-extrabold">12</p>
        <p data-i18n="stat_reg" class="text-sm text-white/40 font-cta uppercase tracking-[0.15em] mt-2">Régions</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ WAITLIST ============ -->
<section id="waitlist" class="py-32 bg-white">
  <div class="container-custom max-w-2xl mx-auto text-center">
    <h2 class="text-5xl md:text-7xl font-extrabold text-ink tracking-tighter leading-[0.9] mb-6">
      <span data-i18n="wait_title_1">SOIS LE</span><br>
      <span data-i18n="wait_title_2" class="text-crimson">PREMIER</span>
    </h2>
    <p data-i18n="wait_sub" class="text-ink/40 text-lg mb-10 font-medium">Accès anticipé, prix exclusifs, priorité sur ton maillot.</p>

    <form id="waitlist-form" class="flex flex-col sm:flex-row gap-4" novalidate>
      <input type="email" id="email" required placeholder="ton@email.com" data-i18n-placeholder="ph_email" class="flex-1 px-6 py-5 bg-[#F5F5F0] border-2 border-transparent rounded-sm text-ink placeholder:text-ink/40 font-medium text-base focus:outline-none focus:border-crimson transition-colors">
      <button type="submit" data-i18n="btn_submit" class="btn-cta">S'INSCRIRE</button>
    </form>
    <p id="email-error" class="hidden text-crimson text-sm mt-3 text-left" role="alert"></p>
    <p id="form-success" class="hidden text-forest font-bold mt-4" role="status"></p>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section id="faq" class="py-24 bg-[#F5F5F0]">
  <div class="container-custom max-w-4xl">
    <h2 data-i18n="faq_title" class="text-4xl md:text-6xl font-extrabold text-ink tracking-tighter mb-16">QUESTIONS.</h2>
    <div class="space-y-6">
      @php $faqs = [
        ['t'=>'Quand sort la collection ?','d'=>'Prochainement. Inscris-toi pour être notifié.'],
        ['t'=>'Toutes les régions ?','d'=>'Oui. 5 au lancement, 7 après selon la demande.'],
        ['t'=>'Livraison internationale ?','d'=>'Oui. Mondiale dès le premier jour.'],
      ]; @endphp
      @foreach($faqs as $f)
      <div class="border-b border-ink/10 pb-6">
        <h3 class="text-xl font-heading font-extrabold text-ink mb-2">{{ $f['t'] }}</h3>
        <p class="text-ink/50 font-medium">{{ $f['d'] }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection

@extends('layouts.app')

@section('content')
<section class="pt-[112px] md:pt-[140px] pb-32 bg-white min-h-screen">
  <div class="container-custom">

    @include('partials.breadcrumb', ['crumbs' => [['label' => 'Collection']]])

    <div class="mb-12">
      <p class="text-[0.7rem] font-cta font-extrabold uppercase tracking-[0.25em] text-crimson mb-3">12 Régions</p>
      <h1 class="text-5xl md:text-7xl font-extrabold text-ink tracking-tighter leading-[0.9]">LA COLLECTION</h1>
    </div>

    <div class="flex flex-col lg:flex-row gap-4 justify-between items-stretch lg:items-center mb-12 pb-6 border-b border-ink/10">
      <input id="search-input" type="text" placeholder="Rechercher une région..." class="w-full lg:w-64 px-5 py-3 bg-[#F5F5F0] border-2 border-transparent rounded-sm text-sm font-medium text-ink placeholder:text-ink/40 focus:outline-none focus:border-crimson">

      <select id="region-select" class="px-5 py-3 bg-[#F5F5F0] border-2 border-transparent rounded-sm text-sm font-cta font-bold uppercase tracking-wide text-ink focus:outline-none focus:border-crimson">
        <option value="">Toutes les régions</option>
        @foreach($products as $p)
        <option value="{{ $p['name'] }}">{{ $p['name'] }}</option>
        @endforeach
      </select>

      <select id="price-select" class="px-5 py-3 bg-[#F5F5F0] border-2 border-transparent rounded-sm text-sm font-cta font-bold uppercase tracking-wide text-ink focus:outline-none focus:border-crimson">
        <option value="">Tous les prix</option>
        <option value="0-69">≤ 69 €</option>
        <option value="70-72">70 € – 72 €</option>
      </select>

      <select id="sort-select" class="px-5 py-3 bg-[#F5F5F0] border-2 border-transparent rounded-sm text-sm font-cta font-bold uppercase tracking-wide text-ink focus:outline-none focus:border-crimson">
        <option value="default">Trier : Défaut</option>
        <option value="price-asc">Prix croissant</option>
        <option value="price-desc">Prix décroissant</option>
        <option value="name-asc">Nom A-Z</option>
      </select>
    </div>

    <div id="product-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach($products as $p)
      <div class="product-card group block relative" data-name="{{ $p['name'] }}" data-price="{{ $p['price'] }}">
        <button type="button" class="wishlist-btn absolute top-3 right-3 z-10 w-9 h-9 bg-white/90 flex items-center justify-center hover:bg-white"
                data-slug="{{ $p['slug'] }}" data-name="{{ $p['name'] }}" data-price="{{ $p['price'] }}"
                data-image="https://placehold.co/500x625/{{ $p['color'] }}?text=DIMA+DIMA" aria-label="Ajouter aux favoris">
          <svg class="w-4 h-4 wishlist-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
        </button>
        <a href="{{ url('/produit/'.$p['slug']) }}">
        <div class="relative overflow-hidden bg-[#F5F5F0] aspect-[4/5]">
          <img src="https://placehold.co/500x625/{{ $p['color'] }}?text=DIMA+DIMA" alt="{{ $p['name'] }}" class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-700">
          <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60 via-black/20 to-transparent">
            <span class="text-[0.6rem] font-cta font-extrabold text-white/70 uppercase tracking-[0.2em]">{{ $p['num'] }}</span>
            <h3 class="text-xl font-heading font-extrabold text-white">{{ $p['name'] }}</h3>
            <p class="text-white/80 font-bold mt-1">{{ $p['price'] }} €</p>
          </div>
        </div>
        </a>
      </div>
      @endforeach
    </div>

    <p id="no-results" class="hidden text-center text-ink/40 font-medium py-20">Aucun résultat.</p>
  </div>
</section>
@endsection

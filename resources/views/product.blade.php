@extends('layouts.app')

@section('content')
<section class="pt-[112px] md:pt-[140px] pb-32 bg-white">
  <div class="container-custom">

@include('partials.breadcrumb', ['crumbs' => [['label' => 'Collection', 'url' => url('/collection')], ['label' => \$product['name']]]])

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

      <div>
        <div class="bg-[#F5F5F0] aspect-[4/5] mb-4">
          <img id="main-image" src="https://placehold.co/800x1000/{{ $product['color'] }}?text=DIMA+DIMA" alt="{{ $product['name'] }}" class="w-full h-full object-cover">
        </div>
        <div class="grid grid-cols-4 gap-3">
          @for($i = 1; $i <= 4; $i++)
          <button type="button" class="thumb-btn bg-[#F5F5F0] aspect-square overflow-hidden border-2 border-transparent hover:border-crimson" data-src="https://placehold.co/800x1000/{{ $product['color'] }}?text=DIMA+{{ $i }}">
            <img src="https://placehold.co/200x250/{{ $product['color'] }}?text=DIMA+{{ $i }}" alt="Vue {{ $i }}" class="w-full h-full object-cover">
          </button>
          @endfor
        </div>
      </div>

      <div>
        <p class="text-[0.7rem] font-cta font-extrabold uppercase tracking-[0.2em] text-crimson mb-3">{{ $product['num'] }} — <span data-i18n="prod_edition">Édition Région</span></p>
        <h1 class="text-4xl md:text-5xl font-extrabold text-ink tracking-tighter leading-[0.95] mb-4">{{ strtoupper($product['name']) }}</h1>
        <p class="text-2xl font-heading font-extrabold text-ink mb-8">{{ $product['price'] }} €</p>
        <p class="text-ink/50 font-medium leading-relaxed mb-10">{{ $product['desc'] }}</p>

        <form id="add-to-cart-form"
              data-slug="{{ $product['slug'] }}"
              data-name="{{ $product['name'] }}"
              data-price="{{ $product['price'] }}"
              data-image="https://placehold.co/500x625/{{ $product['color'] }}?text=DIMA+DIMA">

          <p data-i18n="label_size" class="text-[0.7rem] font-cta font-extrabold uppercase tracking-[0.15em] text-ink mb-3">Taille</p>
          <div class="flex flex-wrap gap-3 mb-8">
            @foreach(['S','M','L','XL','XXL'] as $size)
            <button type="button" class="size-btn px-5 py-3 border-2 border-ink/15 text-sm font-cta font-bold hover:border-ink transition-colors" data-size="{{ $size }}">{{ $size }}</button>
            @endforeach
          </div>
          <p id="size-error" data-i18n="size_error" class="hidden text-crimson text-sm mb-6" role="alert">Choisis une taille.</p>

          <p data-i18n="label_qty" class="text-[0.7rem] font-cta font-extrabold uppercase tracking-[0.15em] text-ink mb-3">Quantité</p>
          <div class="flex items-center gap-4 mb-10">
            <button type="button" id="qty-minus" class="w-11 h-11 border-2 border-ink/15 font-bold text-lg hover:border-ink">−</button>
            <span id="qty-value" class="font-heading font-extrabold text-lg w-8 text-center">1</span>
            <button type="button" id="qty-plus" class="w-11 h-11 border-2 border-ink/15 font-bold text-lg hover:border-ink">+</button>
          </div>

          <div class="flex flex-col sm:flex-row gap-4">
            <button type="submit" data-i18n="btn_add_cart" class="btn-cta w-full sm:w-auto">Ajouter au panier</button>
            <button type="button" id="wishlist-toggle-btn"
                    data-slug="{{ $product['slug'] }}" data-name="{{ $product['name'] }}" data-price="{{ $product['price'] }}"
                    data-image="https://placehold.co/500x625/{{ $product['color'] }}?text=DIMA+DIMA"
                    class="btn-out w-full sm:w-auto flex items-center justify-center gap-2">
              <svg class="w-4 h-4 wishlist-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
              <span data-i18n="btn_wishlist">Favoris</span>
            </button>
          </div>
        </form>

        <div class="mt-12 pt-8 border-t border-ink/10 text-sm text-ink/40 font-medium space-y-2">
          <p><span data-i18n="perk_1">✓ Livraison mondiale</span></p>
          <p><span data-i18n="perk_2">✓ Retours sous 30 jours</span></p>
          <p><span data-i18n="perk_3">✓ Tissu technique respirant</span></p>
        </div>
      </div>
    </div>

    @if(count($related))
    <div class="mt-32">
      <h2 data-i18n="other_regions" class="text-3xl md:text-4xl font-extrabold text-ink tracking-tighter mb-10">AUTRES RÉGIONS</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach($related as $r)
        <a href="{{ url('/produit/'.$r['slug']) }}" class="group block">
          <div class="relative overflow-hidden bg-[#F5F5F0] aspect-[4/5]">
            <img src="https://placehold.co/500x625/{{ $r['color'] }}?text=DIMA+DIMA" alt="{{ $r['name'] }}" class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-700">
            <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60 via-black/20 to-transparent">
              <span class="text-[0.6rem] font-cta font-extrabold text-white/70 uppercase tracking-[0.2em]">{{ $r['num'] }}</span>
              <h3 class="text-xl font-heading font-extrabold text-white">{{ $r['name'] }}</h3>
            </div>
          </div>
        </a>
        @endforeach
      </div>
    </div>
    @endif

  </div>
</section>
@endsection

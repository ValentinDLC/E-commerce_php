@extends('layouts.app')

@section('content')
<section class="pt-[112px] md:pt-[140px] pb-32 bg-white min-h-screen">
  <div class="container-custom">
    @include('partials.breadcrumb', ['crumbs' => [['label' => 'Favoris']]])

    <h1 data-i18n="wishlist_title" class="text-4xl md:text-6xl font-extrabold text-ink tracking-tighter mb-16">MES FAVORIS</h1>

    <div id="wishlist-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"></div>
    <p id="wishlist-empty" class="hidden text-center text-ink/40 font-medium py-20">
      <span data-i18n="wishlist_empty">Aucun favori.</span> <a href="{{ url('/collection') }}" data-i18n="wishlist_view_collection" class="text-crimson underline">Voir la collection</a>.
    </p>
  </div>
</section>
@endsection

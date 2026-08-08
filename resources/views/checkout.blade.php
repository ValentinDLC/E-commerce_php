@extends('layouts.app')

@section('content')
<section class="pt-[112px] md:pt-[140px] pb-32 bg-white min-h-screen">
  <div class="container-custom">
    @include('partials.breadcrumb', ['crumbs' => [['label' => 'Commande']]])

    <h1 data-i18n="checkout_title" class="text-4xl md:text-6xl font-extrabold text-ink tracking-tighter mb-16">COMMANDE</h1>

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-16">

      <form id="checkout-form" class="lg:col-span-3 space-y-6">
        <div>
          <h2 data-i18n="label_contact" class="text-sm font-cta font-extrabold uppercase tracking-[0.15em] text-ink/40 mb-4">Contact</h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <input required type="text" data-i18n-placeholder="ph_firstname" placeholder="Prénom" class="px-5 py-4 bg-[#F5F5F0] border-2 border-transparent rounded-sm text-sm font-medium text-ink placeholder:text-ink/40 focus:outline-none focus:border-crimson">
            <input required type="text" data-i18n-placeholder="ph_lastname" placeholder="Nom" class="px-5 py-4 bg-[#F5F5F0] border-2 border-transparent rounded-sm text-sm font-medium text-ink placeholder:text-ink/40 focus:outline-none focus:border-crimson">
            <input required type="email" placeholder="Email" class="sm:col-span-2 px-5 py-4 bg-[#F5F5F0] border-2 border-transparent rounded-sm text-sm font-medium text-ink placeholder:text-ink/40 focus:outline-none focus:border-crimson">
            <input required type="tel" data-i18n-placeholder="ph_phone" placeholder="Téléphone" class="sm:col-span-2 px-5 py-4 bg-[#F5F5F0] border-2 border-transparent rounded-sm text-sm font-medium text-ink placeholder:text-ink/40 focus:outline-none focus:border-crimson">
          </div>
        </div>

        <div>
          <h2 data-i18n="label_shipping" class="text-sm font-cta font-extrabold uppercase tracking-[0.15em] text-ink/40 mb-4 mt-6">Livraison</h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <input required type="text" data-i18n-placeholder="ph_address" placeholder="Adresse" class="sm:col-span-2 px-5 py-4 bg-[#F5F5F0] border-2 border-transparent rounded-sm text-sm font-medium text-ink placeholder:text-ink/40 focus:outline-none focus:border-crimson">
            <input required type="text" data-i18n-placeholder="ph_city" placeholder="Ville" class="px-5 py-4 bg-[#F5F5F0] border-2 border-transparent rounded-sm text-sm font-medium text-ink placeholder:text-ink/40 focus:outline-none focus:border-crimson">
            <input required type="text" data-i18n-placeholder="ph_zip" placeholder="Code postal" class="px-5 py-4 bg-[#F5F5F0] border-2 border-transparent rounded-sm text-sm font-medium text-ink placeholder:text-ink/40 focus:outline-none focus:border-crimson">
            <input required type="text" data-i18n-placeholder="ph_country" placeholder="Pays" class="sm:col-span-2 px-5 py-4 bg-[#F5F5F0] border-2 border-transparent rounded-sm text-sm font-medium text-ink placeholder:text-ink/40 focus:outline-none focus:border-crimson">
          </div>
        </div>

        <button type="submit" data-i18n="btn_confirm" class="btn-cta w-full mt-4">Confirmer la commande</button>
        <p id="checkout-message" class="hidden text-forest font-bold text-center mt-4" role="status"></p>
      </form>

      <div class="lg:col-span-2">
        <div class="bg-[#F5F5F0] p-8">
          <h2 data-i18n="label_summary" class="text-sm font-cta font-extrabold uppercase tracking-[0.15em] text-ink/40 mb-6">Résumé</h2>
          <div id="checkout-items" class="space-y-4 mb-6"></div>
          <p id="checkout-empty" class="hidden text-ink/40 font-medium text-sm"><span data-i18n="checkout_empty">Panier vide.</span> <a href="{{ url('/collection') }}" data-i18n="checkout_view_collection" class="text-crimson underline">Voir la collection</a>.</p>
          <div class="border-t border-ink/10 pt-6 flex justify-between">
            <span data-i18n="label_total" class="font-cta font-bold uppercase text-sm text-ink/60">Total</span>
            <span id="checkout-total" class="font-heading font-extrabold text-2xl text-ink">0 €</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection

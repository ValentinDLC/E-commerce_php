@extends('layouts.app')

@section('content')
<section class="pt-[112px] md:pt-[140px] pb-32 bg-white min-h-screen">
  <div class="container-custom max-w-3xl">
    @include('partials.breadcrumb', ['crumbs' => [['label' => 'CGV']]])
    <h1 class="text-4xl md:text-5xl font-extrabold text-ink tracking-tighter mb-12">CONDITIONS GÉNÉRALES DE VENTE</h1>

    <div class="space-y-8 text-ink/60 font-medium leading-relaxed">
      <div>
        <h2 class="text-lg font-heading font-extrabold text-ink mb-2">Produits</h2>
        <p>Les maillots DIMA DIMA sont proposés en précommande. Les visuels du site sont indicatifs, les couleurs définitives seront confirmées avant production.</p>
      </div>
      <div>
        <h2 class="text-lg font-heading font-extrabold text-ink mb-2">Prix</h2>
        <p>Les prix sont indiqués en euros, toutes taxes comprises. DIMA DIMA se réserve le droit de modifier ses prix à tout moment.</p>
      </div>
      <div>
        <h2 class="text-lg font-heading font-extrabold text-ink mb-2">Livraison</h2>
        <p>Livraison mondiale. Les délais seront communiqués lors de la confirmation de commande.</p>
      </div>
      <div>
        <h2 class="text-lg font-heading font-extrabold text-ink mb-2">Retours</h2>
        <p>Retours acceptés sous 30 jours après réception, produit non porté et dans son emballage d'origine.</p>
      </div>
      <div>
        <h2 class="text-lg font-heading font-extrabold text-ink mb-2">Paiement</h2>
        <p>Modalités de paiement à venir — module de paiement non encore connecté sur ce site.</p>
      </div>
    </div>
  </div>
</section>
@endsection

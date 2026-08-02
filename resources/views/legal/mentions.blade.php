@extends('layouts.app')

@section('content')
<section class="pt-[112px] md:pt-[140px] pb-32 bg-white min-h-screen">
  <div class="container-custom max-w-3xl">
    @include('partials.breadcrumb', ['crumbs' => [['label' => 'Mentions légales']]])
    <h1 class="text-4xl md:text-5xl font-extrabold text-ink tracking-tighter mb-12">MENTIONS LÉGALES</h1>

    <div class="space-y-8 text-ink/60 font-medium leading-relaxed">
      <div>
        <h2 class="text-lg font-heading font-extrabold text-ink mb-2">Éditeur du site</h2>
        <p>DIMA DIMA — Auto-entrepreneur. Contact : contact@dimadima.ma.</p>
      </div>
      <div>
        <h2 class="text-lg font-heading font-extrabold text-ink mb-2">Hébergement</h2>
        <p>Informations d'hébergement à compléter avant mise en production.</p>
      </div>
      <div>
        <h2 class="text-lg font-heading font-extrabold text-ink mb-2">Propriété intellectuelle</h2>
        <p>L'ensemble des contenus (textes, visuels, logo) présents sur ce site sont la propriété de DIMA DIMA, sauf mention contraire.</p>
      </div>
      <div>
        <h2 class="text-lg font-heading font-extrabold text-ink mb-2">Données personnelles</h2>
        <p>Les données collectées via le formulaire d'inscription sont utilisées uniquement pour informer du lancement de la marque. Aucune revente à des tiers.</p>
      </div>
    </div>
  </div>
</section>
@endsection

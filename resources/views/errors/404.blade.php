@extends('layouts.app')

@section('content')
<section class="pt-[112px] md:pt-[140px] pb-32 bg-white min-h-[80vh] flex items-center">
  <div class="container-custom text-center">
    <p class="text-[8rem] md:text-[12rem] font-extrabold text-ink/10 leading-none tracking-tighter">404</p>
    <h1 class="text-3xl md:text-4xl font-extrabold text-ink tracking-tighter mt-[-2rem] mb-6">PAGE INTROUVABLE</h1>
    <p class="text-ink/40 font-medium mb-10">Cette page n'existe pas ou plus.</p>
    <a href="{{ url('/') }}" class="btn-cta">Retour à l'accueil</a>
  </div>
</section>
@endsection

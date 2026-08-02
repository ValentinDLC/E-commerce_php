<footer class="bg-ink text-white pt-20 pb-10">
  <div class="container-custom grid grid-cols-2 md:grid-cols-4 gap-10 mb-16">
    <div class="col-span-2 md:col-span-1">
      <span class="font-heading font-extrabold text-2xl">DIMA<span class="text-crimson">.</span></span>
      <p class="text-white/40 text-sm mt-4 leading-relaxed">Un seul peuple, un seul cœur, une seule patrie.</p>
    </div>

    <div>
      <p class="text-[0.65rem] font-cta font-extrabold uppercase tracking-[0.2em] text-white/30 mb-4">Boutique</p>
      <div class="flex flex-col gap-3 text-sm text-white/60">
        <a href="{{ url('/collection') }}" class="hover:text-white transition-colors">Collection</a>
        <a href="{{ url('/favoris') }}" class="hover:text-white transition-colors">Favoris</a>
        <a href="{{ url('/checkout') }}" class="hover:text-white transition-colors">Panier</a>
      </div>
    </div>

    <div>
      <p class="text-[0.65rem] font-cta font-extrabold uppercase tracking-[0.2em] text-white/30 mb-4">À propos</p>
      <div class="flex flex-col gap-3 text-sm text-white/60">
        <a href="{{ url('/') }}#why" class="hover:text-white transition-colors">Notre mission</a>
        <a href="{{ url('/') }}#faq" class="hover:text-white transition-colors">FAQ</a>
        <a href="{{ url('/') }}#waitlist" class="hover:text-white transition-colors">Rejoindre</a>
      </div>
    </div>

    <div>
      <p class="text-[0.65rem] font-cta font-extrabold uppercase tracking-[0.2em] text-white/30 mb-4">Contact</p>
      <div class="flex flex-col gap-3 text-sm text-white/60">
        <a href="mailto:contact@dimadima.ma" class="hover:text-white transition-colors">contact@dimadima.ma</a>
      </div>
    </div>

    <div class="col-span-2 md:col-span-1">
      <p class="text-[0.65rem] font-cta font-extrabold uppercase tracking-[0.2em] text-white/30 mb-4">Légal</p>
      <div class="flex flex-col gap-3 text-sm text-white/60">
        <a href="{{ url('/mentions-legales') }}" class="hover:text-white transition-colors">Mentions légales</a>
        <a href="{{ url('/cgv') }}" class="hover:text-white transition-colors">CGV</a>
      </div>
    </div>
  </div>

  <div class="container-custom pt-8 border-t border-white/10 flex flex-col sm:flex-row justify-between items-center gap-4">
    <p class="text-xs text-white/30 font-cta uppercase tracking-[0.2em]">© 2025 DIMA DIMA</p>
    <a href="{{ url('/') }}" class="text-xs text-white/30 font-cta uppercase tracking-[0.2em] hover:text-white">Retour à l'accueil</a>
  </div>
</footer>

<div id="cart-overlay" class="hidden fixed inset-0 bg-black/50 z-[60]"></div>
<aside id="cart-drawer" class="fixed top-0 right-0 h-full w-full sm:w-[420px] bg-white z-[70] translate-x-full transition-transform duration-300 flex flex-col shadow-2xl">
  <div class="flex justify-between items-center px-6 py-5 border-b border-ink/10">
    <h2 data-i18n="cart_title" class="font-heading font-extrabold text-xl text-ink uppercase tracking-tight">Panier</h2>
    <button id="cart-close" aria-label="Fermer le panier" class="p-2 text-ink hover:text-crimson text-2xl leading-none">&times;</button>
  </div>
  <div id="cart-items" class="flex-1 overflow-y-auto px-6 py-4 space-y-5"></div>
  <p id="cart-empty" data-i18n="cart_empty" class="hidden text-center text-ink/40 font-medium px-6 py-10">Ton panier est vide.</p>
  <div id="cart-footer" class="border-t border-ink/10 px-6 py-6">
    <div class="flex justify-between mb-4">
      <span data-i18n="cart_total" class="font-cta font-bold uppercase text-sm text-ink/60">Total</span>
      <span id="cart-total" class="font-heading font-extrabold text-xl text-ink">0 €</span>
    </div>
    <a href="{{ url('/checkout') }}" data-i18n="cart_checkout_btn" class="btn-cta w-full text-center block">Commander</a>
  </div>
</aside>

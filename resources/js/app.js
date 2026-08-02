import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
  initMobileMenu();
  initLanguageSwitcher();
  initWaitlistForm();
  initActiveNav();
  initCartDrawer();
  initProductPage();
  initCollectionPage();
  initCheckoutPage();
  initWishlist();
  renderWishlistPage();
});

function initMobileMenu() {
  const btn = document.getElementById('mobile-menu-btn');
  const menu = document.getElementById('mobile-menu');
  if (!btn || !menu) return;
  btn.addEventListener('click', () => menu.classList.toggle('hidden'));
  menu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => menu.classList.add('hidden'));
  });
}

const translations = {
  fr: {
    nav_coll: "Collection", nav_design: "Design", nav_join: "Rejoindre",
    hero_tag: "Collection Printemps 2025",
    hero_line1: "UN SEUL", hero_line2: "PEUPLE.", hero_line3: "UN SEUL CŒUR.", hero_line4: "UNE SEULE PATRIE.",
    hero_sub: "Maillots streetwear célébrant chaque région du Maroc. Performance, authenticité, unité.",
    cta_join: "Rejoindre le mouvement", cta_discover: "Découvrir",
    stat_1: "500+ Inscrits", stat_2: "12 Régions", stat_3: "Premium",
    section_design_1: "LA", section_design_2: "COLLECTION",
    section_sub: "Chaque maillot = une région marocaine.",
    link_all: "Voir tout",
    feat_1: "Performance.", feat_1_d: "Tissus techniques, coupes aérodynamiques, finitions premium.",
    feat_2: "Identité.", feat_2_d: "Chaque maillot célèbre une région du Maroc avec authenticité.",
    feat_3: "Unité.", feat_3_d: "Un seul peuple. Un seul maillot. Une seule patrie.",
    social_title_1: "REJOINS", social_title_2: "LE MOUVEMENT",
    stat_wait: "Inscrits", stat_reg: "Régions",
    wait_title_1: "SOIS LE", wait_title_2: "PREMIER",
    wait_sub: "Accès anticipé, prix exclusifs, priorité sur ton maillot.",
    ph_email: "ton@email.com", btn_submit: "S'INSCRIRE",
    faq_title: "QUESTIONS."
  },
  en: {
    nav_coll: "Collection", nav_design: "Design", nav_join: "Join",
    hero_tag: "Spring 2025 Collection",
    hero_line1: "ONE", hero_line2: "PEOPLE.", hero_line3: "ONE HEART.", hero_line4: "ONE HOMELAND.",
    hero_sub: "Streetwear jerseys celebrating every region of Morocco. Performance, authenticity, unity.",
    cta_join: "Join The Movement", cta_discover: "Discover",
    stat_1: "500+ Signed Up", stat_2: "12 Regions", stat_3: "Premium",
    section_design_1: "THE", section_design_2: "COLLECTION",
    section_sub: "Every jersey = a Moroccan region.",
    link_all: "See all",
    feat_1: "Performance.", feat_1_d: "Technical fabrics, aero cuts, premium finish.",
    feat_2: "Identity.", feat_2_d: "Every jersey honors a Moroccan region, authentically.",
    feat_3: "Unity.", feat_3_d: "One people. One jersey. One homeland.",
    social_title_1: "JOIN", social_title_2: "THE MOVEMENT",
    stat_wait: "Signed up", stat_reg: "Regions",
    wait_title_1: "BE THE", wait_title_2: "FIRST",
    wait_sub: "Early access, exclusive pricing, priority on your jersey.",
    ph_email: "your@email.com", btn_submit: "SIGN UP",
    faq_title: "QUESTIONS."
  },
  ar: {
    nav_coll: "المجموعة", nav_design: "التصميم", nav_join: "انضم",
    hero_tag: "مجموعة ربيع 2025",
    hero_line1: "شعب", hero_line2: "واحد.", hero_line3: "قلب واحد.", hero_line4: "وطن واحد.",
    hero_sub: "قمصان تحتفي بكل جهة مغربية. أداء، أصالة، وحدة.",
    cta_join: "انضم إلى الحركة", cta_discover: "اكتشف",
    stat_1: "+500 مسجل", stat_2: "12 جهة", stat_3: "فاخر",
    section_design_1: "ال", section_design_2: "مجموعة",
    section_sub: "كل قميص = جهة مغربية.",
    link_all: "شاهد الكل",
    feat_1: "الأداء.", feat_1_d: "أقمشة تقنية، قصات فاخرة.",
    feat_2: "الهوية.", feat_2_d: "كل قميص يكرّم جهة مغربية بأصالة.",
    feat_3: "الوحدة.", feat_3_d: "شعب واحد. قميص واحد. وطن واحد.",
    social_title_1: "انضم", social_title_2: "إلى الحركة",
    stat_wait: "مسجل", stat_reg: "جهة",
    wait_title_1: "كن", wait_title_2: "الأول",
    wait_sub: "وصول مبكر، أسعار حصرية، أولوية على قميصك.",
    ph_email: "بريدك@الإلكتروني.com", btn_submit: "سجّل",
    faq_title: "أسئلة."
  },
  tz: {
    nav_coll: "Tagrumma", nav_design: "Asuɣ", nav_join: "Ddu yidneɣ",
    hero_tag: "Tagrumma n tafsut 2025",
    hero_line1: "YIWEN", hero_line2: "WEGDUD.", hero_line3: "YIWEN WUL.", hero_line4: "YIWEN WAMUR.",
    hero_sub: "Ijerra n streetwear i yesɛawaden yal tamnaḍt n Meṛṛuk.",
    cta_join: "Ddu ɣer umussu", cta_discover: "Wali",
    stat_1: "500+", stat_2: "12 Timnaḍin", stat_3: "Premium",
    section_design_1: "TA", section_design_2: "GRUMMA",
    section_sub: "Yal ajeṛṛi = tamnaḍt.",
    link_all: "Wali akk",
    feat_1: "Tazmert.", feat_1_d: "Icḍaḍen ifazen.",
    feat_2: "Talɣut.", feat_2_d: "Yal asuɣ yesɛawad tamnaḍt s tidet.",
    feat_3: "Adhem.", feat_3_d: "Yiwen wegdud. Yiwen ujeṛṛi. Yiwen wamur.",
    social_title_1: "DDU", social_title_2: "ƔER UMUSSU",
    stat_wait: "Ttwajerin", stat_reg: "Timnaḍin",
    wait_title_1: "ILI D", wait_title_2: "AMEZWARU",
    wait_sub: "Anekcum azwir, ssuma tazadaṛt.",
    ph_email: "imayl-ik@email.com", btn_submit: "JERI",
    faq_title: "ISTEQSIYEN."
  }
};

const rtlLangs = ['ar'];

function initLanguageSwitcher() {
  const toggle = document.getElementById('lang-toggle');
  const menu = document.getElementById('lang-menu');
  const currentLangLabel = document.getElementById('current-lang');
  if (!toggle || !menu || !currentLangLabel) return;

  toggle.addEventListener('click', () => {
    const isOpen = !menu.classList.contains('hidden');
    menu.classList.toggle('hidden');
    toggle.setAttribute('aria-expanded', String(!isOpen));
  });

  document.addEventListener('click', (e) => {
    if (!toggle.contains(e.target) && !menu.contains(e.target)) menu.classList.add('hidden');
  });

  document.querySelectorAll('.lang-option').forEach(btn => {
    btn.addEventListener('click', () => {
      const lang = btn.dataset.lang;
      setLanguage(lang);
      currentLangLabel.textContent = lang.toUpperCase();
      menu.classList.add('hidden');
    });
  });

  const savedLang = localStorage.getItem('dima_lang') || 'fr';
  setLanguage(savedLang);
  currentLangLabel.textContent = savedLang.toUpperCase();
}

function setLanguage(lang) {
  const dict = translations[lang];
  if (!dict) return;
  document.querySelectorAll('[data-i18n]').forEach(el => {
    const key = el.getAttribute('data-i18n');
    if (dict[key]) el.textContent = dict[key];
  });
  document.querySelectorAll('[data-i18n-placeholder]').forEach(el => {
    const key = el.getAttribute('data-i18n-placeholder');
    if (dict[key]) el.setAttribute('placeholder', dict[key]);
  });
  document.documentElement.lang = lang;
  document.documentElement.dir = rtlLangs.includes(lang) ? 'rtl' : 'ltr';
  localStorage.setItem('dima_lang', lang);
}

function initWaitlistForm() {
  const form = document.getElementById('waitlist-form');
  const emailInput = document.getElementById('email');
  const emailError = document.getElementById('email-error');
  const successMsg = document.getElementById('form-success');
  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const email = emailInput.value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {
      emailError.textContent = 'Adresse email invalide.';
      emailError.classList.remove('hidden');
      emailInput.classList.add('ring-4', 'ring-crimson/40');
      return;
    }

    emailError.classList.add('hidden');
    emailInput.classList.remove('ring-4', 'ring-crimson/40');

    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    submitBtn.textContent = '...';
    submitBtn.disabled = true;

    try {
      const response = await fetch('/api/waitlist', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '',
        },
        body: JSON.stringify({ email }),
      });
      const data = await response.json();
      if (response.ok) {
        successMsg.textContent = 'Inscrit ! Vérifie ta boîte mail.';
        successMsg.classList.remove('hidden');
        form.reset();
      } else {
        throw new Error(data.message || 'Erreur.');
      }
    } catch (error) {
      emailError.textContent = error.message || 'Échec. Réessaie.';
      emailError.classList.remove('hidden');
    } finally {
      submitBtn.textContent = originalText;
      submitBtn.disabled = false;
    }
  });
}

function initActiveNav() {
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('nav a[href^="#"]');
  if (sections.length === 0 || navLinks.length === 0) return;

  window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
      if (window.scrollY >= section.offsetTop - 100) current = section.getAttribute('id');
    });
    navLinks.forEach(link => {
      link.classList.remove('text-crimson');
      if (link.getAttribute('href') === '#' + current) link.classList.add('text-crimson');
    });
  });
}

// ============ PANIER (localStorage, front-end only) ============

const CART_KEY = 'dima_cart';

function getCart() {
  try { return JSON.parse(localStorage.getItem(CART_KEY)) || []; }
  catch { return []; }
}

function saveCart(cart) {
  localStorage.setItem(CART_KEY, JSON.stringify(cart));
  updateCartBadge();
}

function addToCart(item) {
  const cart = getCart();
  const existing = cart.find(i => i.slug === item.slug && i.size === item.size);
  if (existing) existing.qty += item.qty;
  else cart.push(item);
  saveCart(cart);
  renderCartDrawer();
  openCartDrawer();
  toast('Ajouté au panier');
}

function removeFromCart(index) {
  const cart = getCart();
  cart.splice(index, 1);
  saveCart(cart);
  renderCartDrawer();
  renderCheckoutSummary();
}

function updateCartQty(index, delta) {
  const cart = getCart();
  if (!cart[index]) return;
  cart[index].qty = Math.max(1, cart[index].qty + delta);
  saveCart(cart);
  renderCartDrawer();
  renderCheckoutSummary();
}

function cartTotal(cart) {
  return cart.reduce((sum, i) => sum + i.price * i.qty, 0);
}

function updateCartBadge() {
  const badge = document.getElementById('cart-count');
  if (!badge) return;
  const cart = getCart();
  const count = cart.reduce((sum, i) => sum + i.qty, 0);
  badge.textContent = count;
  badge.classList.toggle('hidden', count === 0);
}

function renderCartDrawer() {
  const container = document.getElementById('cart-items');
  const emptyMsg = document.getElementById('cart-empty');
  const footer = document.getElementById('cart-footer');
  const totalEl = document.getElementById('cart-total');
  if (!container) return;

  const cart = getCart();
  container.innerHTML = '';

  if (cart.length === 0) {
    emptyMsg?.classList.remove('hidden');
    footer?.classList.add('hidden');
    return;
  }
  emptyMsg?.classList.add('hidden');
  footer?.classList.remove('hidden');

  cart.forEach((item, index) => {
    const row = document.createElement('div');
    row.className = 'flex gap-4';
    row.innerHTML = `
      <img src="${item.image}" alt="${item.name}" class="w-20 h-24 object-cover bg-[#F5F5F0]">
      <div class="flex-1">
        <p class="font-heading font-extrabold text-ink text-sm">${item.name}</p>
        <p class="text-ink/40 text-xs font-cta uppercase tracking-wide mt-1">Taille ${item.size}</p>
        <div class="flex items-center gap-3 mt-2">
          <button data-action="minus" data-index="${index}" class="cart-qty-btn w-6 h-6 border border-ink/15 text-xs font-bold">−</button>
          <span class="text-sm font-bold">${item.qty}</span>
          <button data-action="plus" data-index="${index}" class="cart-qty-btn w-6 h-6 border border-ink/15 text-xs font-bold">+</button>
          <button data-index="${index}" class="cart-remove-btn text-crimson text-xs font-cta font-bold uppercase ml-auto">Retirer</button>
        </div>
      </div>
      <p class="font-bold text-ink text-sm">${(item.price * item.qty).toFixed(0)} €</p>
    `;
    container.appendChild(row);
  });

  container.querySelectorAll('.cart-qty-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      updateCartQty(parseInt(btn.dataset.index), btn.dataset.action === 'plus' ? 1 : -1);
    });
  });
  container.querySelectorAll('.cart-remove-btn').forEach(btn => {
    btn.addEventListener('click', () => removeFromCart(parseInt(btn.dataset.index)));
  });

  if (totalEl) totalEl.textContent = cartTotal(cart).toFixed(0) + ' €';
}

function openCartDrawer() {
  document.getElementById('cart-drawer')?.classList.remove('translate-x-full');
  document.getElementById('cart-overlay')?.classList.remove('hidden');
}

function closeCartDrawer() {
  document.getElementById('cart-drawer')?.classList.add('translate-x-full');
  document.getElementById('cart-overlay')?.classList.add('hidden');
}

function initCartDrawer() {
  const toggle = document.getElementById('cart-toggle');
  const close = document.getElementById('cart-close');
  const overlay = document.getElementById('cart-overlay');

  toggle?.addEventListener('click', () => { renderCartDrawer(); openCartDrawer(); });
  close?.addEventListener('click', closeCartDrawer);
  overlay?.addEventListener('click', closeCartDrawer);

  updateCartBadge();
  renderCartDrawer();
}

function toast(message) {
  const el = document.createElement('div');
  el.className = 'fixed bottom-8 left-1/2 -translate-x-1/2 bg-ink text-white text-sm font-cta font-bold uppercase tracking-wide px-6 py-3 z-[100] shadow-xl';
  el.textContent = message;
  document.body.appendChild(el);
  setTimeout(() => el.remove(), 2500);
}

function initProductPage() {
  const form = document.getElementById('add-to-cart-form');
  if (!form) return;

  let selectedSize = null;
  let qty = 1;

  document.querySelectorAll('.size-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.size-btn').forEach(b => b.classList.remove('border-ink', 'bg-ink', 'text-white'));
      btn.classList.add('border-ink', 'bg-ink', 'text-white');
      selectedSize = btn.dataset.size;
      document.getElementById('size-error')?.classList.add('hidden');
    });
  });

  document.getElementById('qty-minus')?.addEventListener('click', () => {
    qty = Math.max(1, qty - 1);
    document.getElementById('qty-value').textContent = qty;
  });
  document.getElementById('qty-plus')?.addEventListener('click', () => {
    qty += 1;
    document.getElementById('qty-value').textContent = qty;
  });

  document.querySelectorAll('.thumb-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.getElementById('main-image').src = btn.dataset.src;
    });
  });

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    if (!selectedSize) {
      document.getElementById('size-error')?.classList.remove('hidden');
      return;
    }
    addToCart({
      slug: form.dataset.slug,
      name: form.dataset.name,
      price: parseFloat(form.dataset.price),
      image: form.dataset.image,
      size: selectedSize,
      qty
    });
  });
}

function initCollectionPage() {
  const grid = document.getElementById('product-grid');
  if (!grid) return;

  const searchInput = document.getElementById('search-input');
  const regionSelect = document.getElementById('region-select');
  const priceSelect = document.getElementById('price-select');
  const sortSelect = document.getElementById('sort-select');
  const cards = Array.from(grid.querySelectorAll('.product-card'));
  const noResults = document.getElementById('no-results');

  function inPriceRange(price, range) {
    if (!range) return true;
    const [min, max] = range.split('-').map(Number);
    return price >= min && price <= max;
  }

  function apply() {
    const query = (searchInput?.value || '').toLowerCase();
    const region = regionSelect?.value || '';
    const priceRange = priceSelect?.value || '';
    let visible = 0;

    cards.forEach(card => {
      const name = card.dataset.name;
      const price = parseFloat(card.dataset.price);
      const match = name.toLowerCase().includes(query)
        && (!region || name === region)
        && inPriceRange(price, priceRange);
      card.classList.toggle('hidden', !match);
      if (match) visible++;
    });
    noResults?.classList.toggle('hidden', visible > 0);

    const sort = sortSelect?.value;
    if (sort && sort !== 'default') {
      const sorted = [...cards].sort((a, b) => {
        if (sort === 'price-asc') return a.dataset.price - b.dataset.price;
        if (sort === 'price-desc') return b.dataset.price - a.dataset.price;
        if (sort === 'name-asc') return a.dataset.name.localeCompare(b.dataset.name);
        return 0;
      });
      sorted.forEach(card => grid.appendChild(card));
    }
  }

  searchInput?.addEventListener('input', apply);
  regionSelect?.addEventListener('change', apply);
  priceSelect?.addEventListener('change', apply);
  sortSelect?.addEventListener('change', apply);
}

function renderCheckoutSummary() {
  const container = document.getElementById('checkout-items');
  if (!container) return;

  const cart = getCart();
  const emptyMsg = document.getElementById('checkout-empty');
  const totalEl = document.getElementById('checkout-total');
  const submitBtn = document.querySelector('#checkout-form button[type="submit"]');

  container.innerHTML = '';

  if (cart.length === 0) {
    emptyMsg?.classList.remove('hidden');
    if (submitBtn) submitBtn.disabled = true;
  } else {
    emptyMsg?.classList.add('hidden');
    if (submitBtn) submitBtn.disabled = false;
  }

  cart.forEach(item => {
    const row = document.createElement('div');
    row.className = 'flex justify-between text-sm';
    row.innerHTML = `
      <span class="text-ink/70 font-medium">${item.name} — ${item.size} × ${item.qty}</span>
      <span class="font-bold text-ink">${(item.price * item.qty).toFixed(0)} €</span>
    `;
    container.appendChild(row);
  });

  if (totalEl) totalEl.textContent = cartTotal(cart).toFixed(0) + ' €';
}

function initCheckoutPage() {
  const form = document.getElementById('checkout-form');
  if (!form) return;

  renderCheckoutSummary();

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const msg = document.getElementById('checkout-message');
    if (msg) {
      msg.textContent = 'Commande simulée — backend à connecter.';
      msg.classList.remove('hidden');
    }
    localStorage.removeItem(CART_KEY);
    updateCartBadge();
    renderCheckoutSummary();
  });
}

// ============ WISHLIST (localStorage, front-end only) ============

const WISHLIST_KEY = 'dima_wishlist';

function getWishlist() {
  try { return JSON.parse(localStorage.getItem(WISHLIST_KEY)) || []; }
  catch { return []; }
}

function saveWishlist(list) {
  localStorage.setItem(WISHLIST_KEY, JSON.stringify(list));
  updateWishlistBadge();
}

function isInWishlist(slug) {
  return getWishlist().some(i => i.slug === slug);
}

function toggleWishlist(item) {
  let list = getWishlist();
  if (isInWishlist(item.slug)) {
    list = list.filter(i => i.slug !== item.slug);
  } else {
    list.push(item);
    toast('Ajouté aux favoris');
  }
  saveWishlist(list);
  refreshWishlistIcons();
}

function updateWishlistBadge() {
  const badge = document.getElementById('wishlist-count');
  if (!badge) return;
  const count = getWishlist().length;
  badge.textContent = count;
  badge.classList.toggle('hidden', count === 0);
}

function refreshWishlistIcons() {
  document.querySelectorAll('.wishlist-btn, #wishlist-toggle-btn').forEach(btn => {
    const slug = btn.dataset.slug;
    const icon = btn.querySelector('.wishlist-icon');
    if (!icon) return;
    if (isInWishlist(slug)) {
      icon.setAttribute('fill', 'currentColor');
      btn.classList.add('text-crimson');
    } else {
      icon.setAttribute('fill', 'none');
      btn.classList.remove('text-crimson');
    }
  });
}

function initWishlist() {
  updateWishlistBadge();
  refreshWishlistIcons();

  document.querySelectorAll('.wishlist-btn, #wishlist-toggle-btn').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      toggleWishlist({
        slug: btn.dataset.slug,
        name: btn.dataset.name,
        price: parseFloat(btn.dataset.price),
        image: btn.dataset.image
      });
    });
  });
}

function renderWishlistPage() {
  const grid = document.getElementById('wishlist-grid');
  if (!grid) return;

  const list = getWishlist();
  const emptyMsg = document.getElementById('wishlist-empty');

  if (list.length === 0) {
    emptyMsg?.classList.remove('hidden');
    return;
  }
  emptyMsg?.classList.add('hidden');

  list.forEach(item => {
    const card = document.createElement('div');
    card.className = 'relative';
    card.innerHTML = `
      <button data-slug="${item.slug}" class="wishlist-remove-btn absolute top-3 right-3 z-10 w-9 h-9 bg-white/90 flex items-center justify-center hover:bg-white text-crimson" aria-label="Retirer des favoris">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
      </button>
      <a href="/produit/${item.slug}" class="group block">
        <div class="relative overflow-hidden bg-[#F5F5F0] aspect-[4/5]">
          <img src="${item.image}" alt="${item.name}" class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-700">
          <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60 via-black/20 to-transparent">
            <h3 class="text-xl font-heading font-extrabold text-white">${item.name}</h3>
            <p class="text-white/80 font-bold mt-1">${item.price} €</p>
          </div>
        </div>
      </a>
    `;
    grid.appendChild(card);
  });

  grid.querySelectorAll('.wishlist-remove-btn').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const list2 = getWishlist().filter(i => i.slug !== btn.dataset.slug);
      saveWishlist(list2);
      renderWishlistPage();
      grid.innerHTML = '';
      renderWishlistPage();
    });
  });
}

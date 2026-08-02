# ============================================
# DIMA DIMA — ÉTAT DU PROJET & PROCHAINES ÉTAPES
# ============================================

## COMMENT TRAVAILLER (règles obligatoires pour l'IA qui reprend)

- Mac zsh. TOUJOURS demander à l'utilisateur de coller le contenu du/des fichiers concernés AVANT de proposer un edit (avec `cat fichier`). Ne jamais halluciner un contenu de fichier.
- Édition fichiers : uniquement `cat > fichier << 'EOF' ... EOF` (fichier neuf/écrasement complet) ou `python3 << 'PY' ... PY` avec `.replace()` sur ancien→nouveau (édition ciblée). JAMAIS `sed -i` (casse sur Mac).
- Dans les blocs python3, mettre `assert old in c, "message"` avant `.replace()` pour détecter un mismatch au lieu d'un edit silencieux qui ne fait rien.
- Après toute modif, dire à l'utilisateur de recharger (`npm run dev` doit tourner en continu, Terminal 2, séparé de `php artisan serve` Terminal 1).
- Si un bug est signalé vague ("ça marche pas") → demander précisions ciblées (quelle page, erreur console F12, capture) avant de proposer un fix. Ne jamais deviner à l'aveugle.
- Style de réponse : direct, minimal, sans blabla. Code d'abord, explication courte avant/après seulement si nécessaire.
- Toutes les couleurs/textes/traductions doivent rester cohérents avec le design system existant (voir plus bas). Ne pas introduire de nouvelles couleurs hors palette sans le demander.
- Le front est 100% statique/localStorage pour l'instant (pas de vraie DB, pas de vrai paiement). Ne pas inventer d'API qui n'existe pas.

## ENVIRONNEMENT

- Mac (Apple Silicon/Intel), zsh
- Projet : `~/dima-dima-laravel`
- Git : https://github.com/ValentinDLC/E-commerce_php.git
- Laravel 13.23.0 / PHP 8.5.9
- Tailwind CSS v4 (`@tailwindcss/postcss`, PAS le plugin PostCSS standard)
- Serveur : `php artisan serve` → http://127.0.0.1:8001 (Terminal 1, garder ouvert)
- Vite : `npm run dev` (Terminal 2, garder ouvert, watch CSS/JS)

## STACK

- Backend : Laravel 13 (mais AUCUNE DB connectée pour l'instant — tout est front)
- Frontend : Blade + Tailwind v4 + JS vanilla (`resources/js/app.js`)
- Data produits : statique en PHP (`app/Support/Products.php`), pas de table SQL
- Panier / Wishlist / Langue : localStorage uniquement, rien ne persiste côté serveur
- Images : placehold.co uniquement (pas d'images réelles)
- Email : non connecté (SendGrid prévu plus tard)

## DESIGN SYSTEM (ne pas dévier sans consigne)

- Couleurs (`resources/css/app.css` `@theme`) : `--color-crimson: #C1272D`, `--color-forest: #006233`, `--color-gold: #D4AF37`, `--color-ivory: #FAF9F6`, `--color-ink: #1A1A1A`, `--color-crimson-dark: #8B1A1F`
- Fonds neutres : blanc `#FFFFFF` + gris clair `#F5F5F0` (inputs/selects/cards)
- Fonts : `--font-heading: Poppins` (titres), `--font-body: Inter` (texte courant), `--font-cta: Montserrat` (boutons/nav, uppercase tracking large)
- Composants CSS (`app.css` `@layer components`) : `.btn-cta` (rouge plein), `.btn-out` (contour), `.container-custom` (max-width wrapper)
- Style visuel : architectural, géométrique, Nike/Adidas premium. Pas d'arches, pas d'ornements, gros titres bold uppercase tracking serré (`tracking-tighter`).
- `<body>` = `bg-white text-ink` (PAS `bg-ink text-ivory`, bug déjà corrigé une fois, ne pas réintroduire).

## STRUCTURE FICHIERS ACTUELLE

routes/web.php → toutes les routes (/, /collection, /produit/{slug}, /checkout, /favoris, /mentions-legales, /cgv)
app/Support/Products.php → data statique des 12 régions/produits (slug, num, name, price, color, desc)

resources/views/
layouts/app.blade.php → layout global, inclut header-c, footer-c, cart-drawer
home.blade.php → page d'accueil (hero, collection preview 6 items, why, community, waitlist, faq)
collection.blade.php → /collection — grid 12 produits, recherche, filtre région, filtre prix, tri
product.blade.php → /produit/{slug} — détail, galerie thumbs, tailles, qty, add-to-cart, wishlist, produits liés
checkout.blade.php → /checkout — formulaire contact+livraison (frontend only, pas de vrai paiement), résumé panier
wishlist.blade.php → /favoris — grid des favoris localStorage
legal/mentions.blade.php → /mentions-legales
legal/cgv.blade.php → /cgv
errors/404.blade.php → page 404 stylée (Laravel l'utilise automatiquement)
partials/header-c.blade.php → SEUL header actif (nav, lang switcher, icône panier, icône wishlist, mobile menu)
partials/header.blade.php → SUPPRIMÉ (était un doublon mort)
partials/footer-c.blade.php → SEUL footer actif (liens boutique/à propos/légal)
partials/footer.blade.php → fichier mort, jamais inclus nulle part, à supprimer si vu
partials/cart-drawer.blade.php → drawer panier (inclus globalement dans layout)
partials/breadcrumb.blade.php → composant réutilisable, prend $crumbs (array de ['label'=>..,'url'=>..])

resources/js/app.js → TOUT le JS : mobile menu, langue (i18n), waitlist form, nav active, panier, page produit, page collection (filtres/tri), checkout, wishlist
resources/css/app.css → theme Tailwind v4 + composants (.btn-cta, .btn-out, .container-custom)


## CE QUI EST FAIT

✅ Design architectural premium (rouge/vert/or/blanc) sur home
✅ Header unique (fix doublon), lang switcher FR/EN/AR/TZ fonctionnel (data-i18n aligné sur dict JS)
✅ Footer complet avec vrais liens (boutique, à propos, légal)
✅ Navigation reliée : home → /collection → /produit/{slug} → panier/checkout, plus d'ancres cassées inter-pages
✅ /collection : grid 12 régions, recherche texte, filtre région (select), filtre prix (select), tri (prix asc/desc, nom)
✅ /produit/{slug} : galerie 4 vignettes cliquables, sélection taille (S-XXL), quantité +/-, ajout panier, bouton wishlist, produits liés (3), breadcrumb
✅ Panier : drawer latéral (localStorage `dima_cart`), badge compteur header, +/- qty, suppression, total live
✅ Wishlist : localStorage `dima_wishlist`, cœur sur cards collection + page produit, badge header, page /favoris dédiée
✅ /checkout : formulaire contact+livraison, résumé commande live depuis panier, soumission simulée (vide le panier, message succès — AUCUN vrai paiement/backend)
✅ Pages légales /mentions-legales et /cgv (contenu placeholder à valider juridiquement avant prod)
✅ Breadcrumbs sur collection/produit/checkout/favoris/légal
✅ Page 404 stylée
✅ Bug corrigé : inputs/selects invisibles (texte blanc sur fond blanc, hérité du `<body>` bg-ink)

## CE QUI RESTE À FAIRE (prioriser dans cet ordre suggéré)

### Front-end restant
❌ Traductions EN/AR/TZ des nouvelles pages (collection, produit, checkout, favoris, légal) — actuellement FR uniquement, seule la home a les 4 langues
❌ Empty state stylé sur panier vide au clic direct sur `/checkout` sans passer par le drawer (actuellement basique)
❌ Validation formulaire checkout plus poussée (regex téléphone/CP, feedback par champ)
❌ Accessibilité WCAG AA (contraste, focus visible, aria sur drawer/menu mobile)
❌ SEO / meta tags par page (actuellement un seul <title> global dans layout)
❌ Responsive : re-tester mobile sur toutes les nouvelles pages (collection filtres, product galerie, checkout grid)
❌ Loading states (skeleton) si data devient dynamique plus tard

### Backend (non commencé, tout le front tourne sans lui actuellement)
❌ Migration + Modèle Waitlist (table emails) — route `/api/waitlist` déjà appelée par le JS mais n'existe pas côté serveur
❌ Controller API `/api/waitlist` (le form JS attend déjà ce endpoint, POST email, retour JSON)
❌ Connexion DB PostgreSQL (Railway/Heroku futur)
❌ Migration Products : passer de `app/Support/Products.php` (statique) à une vraie table + Eloquent model, une fois DB dispo
❌ Panier/Wishlist : migrer de localStorage vers session/DB si compte utilisateur ajouté plus tard
❌ Envoi email SendGrid (confirmation waitlist)
❌ Vrai système de commande (le checkout actuel ne fait QUE vider le panier localement, aucune commande n'est enregistrée nulle part)

### Autres
❌ Images réelles des maillots (remplacer placehold.co)
❌ Performance Lighthouse > 90
❌ Déploiement Railway / Heroku
❌ Stripe (phase future, après backend commande fonctionnel)

## PIÈGES CONNUS (déjà rencontrés, ne pas refaire)

- `sed -i` ne marche pas sur Mac avec ce setup → toujours python3
- `<body>` ne doit jamais être `bg-ink text-ivory` → casse tous les inputs/selects blancs
- Toujours vérifier qu'un header/footer n'est pas dupliqué avant d'ajouter un nouveau — `header-c.blade.php` est le seul actif, `header.blade.php` était un doublon mort supprimé
- Les clés `data-i18n` dans le Blade DOIVENT correspondre exactement aux clés du dict `translations` dans `app.js`, sinon changement de langue = silence (aucune erreur visible, juste rien ne change)
- Le JS attend des IDs précis pour fonctionner (`#lang-toggle`, `#lang-menu`, `#current-lang`, `.lang-option`, `#cart-toggle`, `#cart-drawer`, etc.) — ne pas renommer sans mettre à jour `app.js` en parallèle
- `npm run dev` ET `php artisan serve` doivent tourner EN MÊME TEMPS dans 2 terminaux séparés, sinon "rien ne fonctionne"

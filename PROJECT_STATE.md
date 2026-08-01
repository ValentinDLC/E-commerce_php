# ============================================
# DIMA DIMA — ÉTAT DU PROJET & PROCHAINES ÉTAPES
# ============================================

## ENVIRONNEMENT
- Mac (Apple Silicon / Intel) — zsh
- Terminal : toutes les commandes doivent être faites via `cat`, `python3`, `sed` (attention `sed -i` ne fonctionne pas avec stdin, utiliser `python3`)
- Projet : ~/dima-dima-laravel
- Git : https://github.com/ValentinDLC/E-commerce_php.git
- Laravel 13.23.0
- Tailwind CSS v4 (@tailwindcss/postcss — PAS le plugin PostCSS standard)
- Serveur : http://127.0.0.1:8001
- Vite : npm run dev (doit rester ouvert)

## STACK TECHNIQUE ACTUELLE
- Backend : Laravel 11+ (PHP 8.5.9)
- Frontend : Blade + Tailwind CSS v4
- Base de données : Non configurée encore (attente du modèle Waitlist)
- Email : Non connecté (attente SendGrid)
- Images : Placeholders via placehold.co

## CE QUI EST FAIT
✅ Structure Laravel complète
✅ Layout Blade (app.blade.php, header-c, footer-c)
✅ Page d'accueil (home.blade.php) avec :
    - Hero (texte gauche, images droite, arche marocaine, badges)
    - Section "Pourquoi" (3 cards)
    - Section Designs (grid 5 produits + CTA)
    - Section Communauté (stats)
    - Section Waitlist (formulaire)
    - Section FAQ (details/summary)
✅ Multi-langue (EN/FR/AR/TZ) via data-i18n + JavaScript
✅ CSS Tailwind v4 configuré (couleurs : crimson, forest, gold, ivory)
✅ JavaScript (interactions, mobile menu, langue, formulaire)
✅ Commit Git sur GitHub

## CE QUI RESTE À FAIRE
❌ Migration + Modèle Waitlist (table emails)
❌ Controller API pour le formulaire (route /api/waitlist)
❌ Connexion base de données PostgreSQL (Railway/Heroku futur)
❌ Envoi email via SendGrid (confirmation waitlist)
❌ Images réelles des maillots (pas placeholders)
❌ SEO / Meta tags avancés
❌ Tests accessibilité WCAG AA complets
❌ Performance Lighthouse > 90 (optimisation images)
❌ Déploiement Railway / Heroku
❌ Stripe (phase future)

## NOUVEAU DESIGN DEMANDÉ
Le design actuel (Version C — fond blanc, header vert, arche marocaine) doit être REMPLACÉ par un design architectural haut de gamme inspiré des marques sportives premium (Nike, Adidas, Puma).

Concept architectural e-commerce sportif haut de gamme :
- Structure rigide, géométrique, symétrique (comme un stade, une arène)
- Couleurs : Rouge vif (#C1272D), Vert foncé (#006233), Or (#D4AF37), Blanc
- Typographie : Très bold, uppercase, impact visuel fort
- Layout : Sections pleine largeur avec séparations nettes, pas d'arches décoratives
- Images : Grandes photos de produits dominantes, pas de badges flottants
- Navigation : Minimaliste, fonctionnelle, pas d'ornements
- Formulaire : Direct, sans fioritures

Le design doit communiquer : PERFORMANCE, PREMIUM, AUTHENTICITÉ MAROCAINE mais dans un langage visuel Nike/Adidas (clean, puissant, sportif).

## COMMANDES ESSENTIELLES (Mac Terminal)
# Vérifier
php --version
composer --version
node --version

# Lancer le projet
php artisan serve        # Terminal 1 (garder ouvert)
npm run dev             # Terminal 2 (garder ouvert, watch CSS/JS)

# Modifier fichiers (toujours via cat > ou python3, JAMAIS editeur graphique)
cat > fichier << 'EOF'
...contenu...

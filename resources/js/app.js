import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
  initHeaderScroll();
  initMobileMenu();
  initLanguageSwitcher();
  initWaitlistForm();
  initActiveNav();
});

function initHeaderScroll() {
  const header = document.getElementById('header');
  if (!header) return;
  window.addEventListener('scroll', () => {
    if (window.scrollY > 10) {
      header.classList.add('shadow-md');
    } else {
      header.classList.remove('shadow-md');
    }
  });
}

function initMobileMenu() {
  const btn = document.getElementById('mobile-menu-btn');
  const menu = document.getElementById('mobile-menu');
  if (!btn || !menu) return;

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });

  menu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => menu.classList.add('hidden'));
  });
}

const translations = {
  en: {
    nav_why: "Why Us", nav_designs: "Designs", nav_community: "Community", nav_faq: "FAQ", nav_cta: "Join Waitlist",
    hero_badge: "🇲🇦 Coming Soon — Limited Drop",
    hero_title_1: "One People, One Heart,", hero_title_2: "One Homeland.",
    hero_subtitle: "Streetwear jerseys celebrating every region of Morocco. Premium quality, authentic story, real community.",
    hero_cta_primary: "Join The Movement", hero_cta_secondary: "See The Designs",
    hero_social_proof: "🔥 Join 347+ people already on the waitlist",
    why_label: "Why DIMA DIMA", why_title: "Celebrate Your Region, Your Culture, Your Nation",
    why_subtitle: "This isn't just a t-shirt store. It's a movement.",
    why_1_title: "Premium Quality", why_1_desc: "High-grade fabrics, real craftsmanship. Not cheap streetwear — built to last and to make you proud.",
    why_2_title: "Authentic Story", why_2_desc: "Every design honors a real Moroccan region — its identity, its history, its people.",
    why_3_title: "Real Community", why_3_desc: "Built with Moroccans, for Moroccans — at home and across the diaspora. One people, united.",
    designs_label: "The Collection", designs_title: "One Jersey Per Region", designs_subtitle: "Five designs. Five stories. Which one is yours?",
    badge_soon: "Soon", designs_soon: "Notify me when available",
    designs_more_1: "+ 7 more regions", designs_more_2: "Full collection revealed at launch", designs_more_cta: "Get Early Access",
    social_label: "Join The Movement", social_title: "A Growing Community",
    stat_waitlist: "On the waitlist", stat_followers: "Instagram followers", stat_regions: "Regions represented", stat_countries: "Countries in the diaspora",
    waitlist_title: "Join The Movement", waitlist_subtitle: "Be the first to know when we launch. Early members get exclusive access and special pricing.",
    waitlist_email_label: "Email address", waitlist_placeholder: "your@email.com", waitlist_submit: "Join Waitlist",
    waitlist_privacy: "🔒 No spam. Unsubscribe anytime.",
    faq_label: "FAQ", faq_title: "Frequently Asked Questions",
    faq_q1: "When will DIMA DIMA jerseys be available?", faq_a1: "We're launching in the coming weeks. Join the waitlist to be notified the moment we go live — early members get priority access.",
    faq_q2: "What makes DIMA DIMA different?", faq_a2: "Every jersey tells the story of a real Moroccan region. Premium materials, authentic design, and a mission bigger than fashion — unity.",
    faq_q3: "Will there be jerseys for all regions?", faq_a3: "Yes! We're rolling out all 12 regions of Morocco progressively. The first 5 designs drop at launch, more follow based on demand.",
    faq_q4: "What do I get by joining the waitlist?", faq_a4: "Early access before public launch, exclusive launch pricing, and first pick on limited-run designs from your region.",
    faq_q5: "Do you ship internationally?", faq_a5: "Absolutely. DIMA DIMA is for every Moroccan, at home and abroad. We'll ship worldwide to the diaspora from day one.",
    footer_tagline: "One people, one heart, one homeland.", footer_rights: "© 2025 DIMA DIMA. All rights reserved."
  },
  fr: {
    nav_why: "Pourquoi Nous", nav_designs: "Designs", nav_community: "Communauté", nav_faq: "FAQ", nav_cta: "Rejoindre",
    hero_badge: "🇲🇦 Bientôt disponible — Édition limitée",
    hero_title_1: "Un seul peuple, un seul cœur,", hero_title_2: "Une seule patrie.",
    hero_subtitle: "Des maillots streetwear qui célèbrent chaque région du Maroc. Qualité premium, histoire authentique, vraie communauté.",
    hero_cta_primary: "Rejoindre le Mouvement", hero_cta_secondary: "Voir les Designs",
    hero_social_proof: "🔥 Rejoins les 347+ personnes déjà inscrites",
    why_label: "Pourquoi DIMA DIMA", why_title: "Célèbre ta région, ta culture, ta nation",
    why_subtitle: "Ce n'est pas juste une marque de t-shirts. C'est un mouvement.",
    why_1_title: "Qualité Premium", why_1_desc: "Tissus haut de gamme, vrai savoir-faire. Pas du streetwear bon marché — conçu pour durer et te rendre fier.",
    why_2_title: "Histoire Authentique", why_2_desc: "Chaque design honore une vraie région marocaine — son identité, son histoire, son peuple.",
    why_3_title: "Vraie Communauté", why_3_desc: "Construit avec des Marocains, pour des Marocains — au pays et dans la diaspora. Un seul peuple, uni.",
    designs_label: "La Collection", designs_title: "Un Maillot Par Région", designs_subtitle: "Cinq designs. Cinq histoires. Lequel est le tien ?",
    badge_soon: "Bientôt", designs_soon: "Me notifier à la sortie",
    designs_more_1: "+ 7 autres régions", designs_more_2: "Collection complète révélée au lancement", designs_more_cta: "Accès Anticipé",
    social_label: "Rejoins le Mouvement", social_title: "Une Communauté en Croissance",
    stat_waitlist: "Sur la liste d'attente", stat_followers: "Abonnés Instagram", stat_regions: "Régions représentées", stat_countries: "Pays dans la diaspora",
    waitlist_title: "Rejoins le Mouvement", waitlist_subtitle: "Sois le premier informé du lancement. Les premiers inscrits ont un accès exclusif et des prix spéciaux.",
    waitlist_email_label: "Adresse email", waitlist_placeholder: "ton@email.com", waitlist_submit: "Rejoindre",
    waitlist_privacy: "🔒 Pas de spam. Désabonnement à tout moment.",
    faq_label: "FAQ", faq_title: "Questions Fréquentes",
    faq_q1: "Quand les maillots DIMA DIMA seront-ils disponibles ?", faq_a1: "Nous lançons dans les prochaines semaines. Inscris-toi pour être notifié dès la sortie — les premiers inscrits ont un accès prioritaire.",
    faq_q2: "Qu'est-ce qui rend DIMA DIMA différent ?", faq_a2: "Chaque maillot raconte l'histoire d'une vraie région marocaine. Matériaux premium, design authentique, et une mission plus grande que la mode — l'unité.",
    faq_q3: "Y aura-t-il des maillots pour toutes les régions ?", faq_a3: "Oui ! Nous déployons progressivement les 12 régions du Maroc. Les 5 premiers designs sortent au lancement, d'autres suivront selon la demande.",
    faq_q4: "Qu'est-ce que j'obtiens en rejoignant la liste d'attente ?", faq_a4: "Un accès anticipé avant le lancement public, des prix exclusifs, et la priorité sur les designs en édition limitée de ta région.",
    faq_q5: "Livrez-vous à l'international ?", faq_a5: "Absolument. DIMA DIMA est pour chaque Marocain, au pays et à l'étranger. Nous livrerons dans le monde entier dès le premier jour.",
    footer_tagline: "Un seul peuple, un seul cœur, une seule patrie.", footer_rights: "© 2025 DIMA DIMA. Tous droits réservés."
  },
  ar: {
    nav_why: "لماذا نحن", nav_designs: "التصاميم", nav_community: "المجتمع", nav_faq: "الأسئلة", nav_cta: "انضم إلينا",
    hero_badge: "🇲🇦 قريباً — إصدار محدود",
    hero_title_1: "شعب واحد، قلب واحد،", hero_title_2: "وطن واحد.",
    hero_subtitle: "قمصان ستريتوير تحتفي بكل جهة من جهات المغرب. جودة فاخرة، قصة أصيلة، مجتمع حقيقي.",
    hero_cta_primary: "انضم إلى الحركة", hero_cta_secondary: "شاهد التصاميم",
    hero_social_proof: "🔥 انضم إلى أكثر من 347 شخص في قائمة الانتظار",
    why_label: "لماذا ديما ديما", why_title: "احتفل بجهتك، ثقافتك، وطنك",
    why_subtitle: "هذا ليس مجرد متجر تيشيرتات. إنها حركة.",
    why_1_title: "جودة فاخرة", why_1_desc: "أقمشة عالية الجودة وحرفية حقيقية. ليس ستريتوير رخيص — مصمم ليدوم ويجعلك فخوراً.",
    why_2_title: "قصة أصيلة", why_2_desc: "كل تصميم يكرّم جهة مغربية حقيقية — هويتها، تاريخها، شعبها.",
    why_3_title: "مجتمع حقيقي", why_3_desc: "صُنع مع المغاربة، من أجل المغاربة — في الوطن وفي الشتات. شعب واحد، متحد.",
    designs_label: "المجموعة", designs_title: "قميص لكل جهة", designs_subtitle: "خمسة تصاميم. خمس قصص. أيها لك؟",
    badge_soon: "قريباً", designs_soon: "أعلمني عند التوفر",
    designs_more_1: "+ 7 جهات أخرى", designs_more_2: "المجموعة الكاملة تُكشف عند الإطلاق", designs_more_cta: "احصل على وصول مبكر",
    social_label: "انضم إلى الحركة", social_title: "مجتمع متنامٍ",
    stat_waitlist: "في قائمة الانتظار", stat_followers: "متابع على إنستغرام", stat_regions: "جهة ممثَّلة", stat_countries: "دولة في الشتات",
    waitlist_title: "انضم إلى الحركة", waitlist_subtitle: "كن أول من يعلم عند الإطلاق. الأعضاء الأوائل يحصلون على وصول حصري وأسعار خاصة.",
    waitlist_email_label: "البريد الإلكتروني", waitlist_placeholder: "بريدك@الإلكتروني.com", waitlist_submit: "انضم إلينا",
    waitlist_privacy: "🔒 بدون رسائل مزعجة. يمكنك إلغاء الاشتراك في أي وقت.",
    faq_label: "الأسئلة الشائعة", faq_title: "الأسئلة المتكررة",
    faq_q1: "متى ستكون قمصان ديما ديما متوفرة؟", faq_a1: "سنطلق في الأسابيع القادمة. انضم لقائمة الانتظار لتُعلَم فور الإطلاق — الأعضاء الأوائل لهم أولوية الوصول.",
    faq_q2: "ما الذي يميز ديما ديما؟", faq_a2: "كل قميص يحكي قصة جهة مغربية حقيقية. مواد فاخرة، تصميم أصيل، ورسالة أكبر من الموضة — الوحدة.",
    faq_q3: "هل ستكون هناك قمصان لكل الجهات؟", faq_a3: "نعم! سنطلق 12 جهة مغربية تدريجياً. أول 5 تصاميم تُطلق عند البداية، والباقي حسب الطلب.",
    faq_q4: "ماذا أحصل عند الانضمام لقائمة الانتظار؟", faq_a4: "وصول مبكر قبل الإطلاق العام، أسعار حصرية، وأولوية في التصاميم محدودة الإصدار من جهتك.",
    faq_q5: "هل تشحنون دولياً؟", faq_a5: "بالتأكيد. ديما ديما لكل مغربي، في الوطن وفي الخارج. سنشحن عالمياً للشتات منذ اليوم الأول.",
    footer_tagline: "شعب واحد، قلب واحد، وطن واحد.", footer_rights: "© 2025 ديما ديما. جميع الحقوق محفوظة."
  },
  tz: {
    nav_why: "Mayelmed nneɣ", nav_designs: "Isuɣan", nav_community: "Agraw", nav_faq: "FAQ", nav_cta: "Ddu yidneɣ",
    hero_badge: "🇲🇦 Ad iqerreb — Amur imezṛan",
    hero_title_1: "Yiwen wegdud, yiwen wul,", hero_title_2: "Yiwen wamur.",
    hero_subtitle: "Ijerra n streetwear i yesɛawaden yal tamnaḍt n Meṛṛuk. Taɣara tameqqrant, tamacahut tidet, agraw n tidet.",
    hero_cta_primary: "Ddu ɣer umussu", hero_cta_secondary: "Wali isuɣan",
    hero_social_proof: "🔥 Ddu ɣer 347+ n medden i illan yakan",
    why_label: "Acuɣer DIMA DIMA", why_title: "Sɛiwed tamnaḍt-ik, adaz-ik, tamurt-ik",
    why_subtitle: "Mačči d ahanut n tricuten kan. D amussu.",
    why_1_title: "Taɣara tameqqrant", why_1_desc: "Icḍaḍen ifazen, tazmert tidet. Mačči streetwear irxisen — ittwaxdem ad idum, ad ak-yefk zzux.",
    why_2_title: "Tamacahut tidet", why_2_desc: "Yal asuɣ yesɛawad tamnaḍt n Meṛṛuk tidet — talɣut-ines, azamul-ines, agdud-ines.",
    why_3_title: "Agraw n tidet", why_3_desc: "Yettwabna d Imeṛṛukiyen, i Imeṛṛukiyen — di tmurt akked di lɣerba. Yiwen wegdud, yedhem.",
    designs_label: "Tagrumma", designs_title: "Ijeṛṛi i yal tamnaḍt", designs_subtitle: "Xemsa isuɣan. Xemsa tmucuha. Anwa i k-yellan?",
    badge_soon: "Ad iqerreb", designs_soon: "Ssekcem-iyi asexbar mi ara yili",
    designs_more_1: "+ 7 timnaḍin nniḍen", designs_more_2: "Tagrumma tugmirt ad d-tban deg usenker", designs_more_cta: "Awi anekcum azwir",
    social_label: "Ddu ɣer umussu", social_title: "Agraw yettimɣuren",
    stat_waitlist: "Deg umuɣ n uṛaǧu", stat_followers: "Imeḍfaṛen n Instagram", stat_regions: "Timnaḍin yettwasɛawaden", stat_countries: "Tamurin n lɣerba",
    waitlist_title: "Ddu ɣer umussu", waitlist_subtitle: "Ili d amezwaru ara yeẓren asenker. Iɛeggalen imezwura ad awin anekcum azwir d ssuma tazadaṛt.",
    waitlist_email_label: "Tansa n imayl", waitlist_placeholder: "imayl-ik@email.com", waitlist_submit: "Ddu yidneɣ",
    waitlist_privacy: "🔒 Ulac aẓru. Tzemreḍ ad teffɣeḍ melmi tebɣiḍ.",
    faq_label: "Isteqsiyen", faq_title: "Isteqsiyen yettuɛawaden aṭas",
    faq_q1: "Melmi ara ilin ijerra n DIMA DIMA?", faq_a1: "Ad nsenker deg dduṛt i d-iteddun. Ddu ɣer umuɣ n uṛaǧu akken ad theliḍ asenker — iɛeggalen imezwura ttwafernen.",
    faq_q2: "D acu i yesmenyifen DIMA DIMA?", faq_a2: "Yal ajeṛṛi yeqqaṛ tamacahut n tmnaḍt n Meṛṛuk tidet. Icḍaḍen ifazen, asuɣ n tidet, d lhedef meqqren nnig n tcemlit — adhem.",
    faq_q3: "Ad ilint ijerra i tmnaḍin meṛṛa?", faq_a3: "Ih! Ad d-nefk 12 n temnaḍin n Meṛṛuk s wudem asdawan. 5 isuɣan imezwura ad d-banen deg usenker, wiyaḍ ad d-asen s lḥaǧa.",
    faq_q4: "D acu ara awiɣ ma ddiɣ ɣer umuɣ n uṛaǧu?", faq_a4: "Anekcum azwir uqbel usenker azayez, ssuma tazadaṛt, d afran amezwaru deg isuɣan n tmnaḍt-ik.",
    faq_q5: "Tceggɛem ɣer umaḍal meṛṛa?", faq_a5: "Ih s tidet. DIMA DIMA i yal Ameṛṛuki, di tmurt neɣ di lɣerba. Ad nceggeɛ ɣer umaḍal seg wass amezwaru.",
    footer_tagline: "Yiwen wegdud, yiwen wul, yiwen wamur.", footer_rights: "© 2025 DIMA DIMA. Akk izerfan ttwaḥerzen."
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
    if (!toggle.contains(e.target) && !menu.contains(e.target)) {
      menu.classList.add('hidden');
    }
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
  if (savedLang !== 'en') {
    setLanguage(savedLang);
    currentLangLabel.textContent = savedLang.toUpperCase();
  }
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
      emailError.textContent = 'Please enter a valid email address.';
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
        successMsg.textContent = '🎉 You\'re on the list! Check your inbox for confirmation.';
        successMsg.classList.remove('hidden');
        form.reset();

        const counter = document.getElementById('waitlist-count');
        if (counter && data.total) {
          counter.textContent = data.total + '+';
        }
      } else {
        throw new Error(data.message || 'Something went wrong');
      }
    } catch (error) {
      emailError.textContent = error.message || 'Failed to join waitlist. Please try again.';
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
      const sectionTop = section.offsetTop - 100;
      if (window.scrollY >= sectionTop) {
        current = section.getAttribute('id');
      }
    });

    navLinks.forEach(link => {
      link.classList.remove('text-crimson');
      if (link.getAttribute('href') === '#' + current) {
        link.classList.add('text-crimson');
      }
    });
  });
}

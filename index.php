<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Entdecken Sie mit Churantatri köstliche Cake Recipes, Pastry Recipes und Macaron Rezepte. Lernen Sie Bäckerei-Stil zu Hause zu backen. Jetzt starten!">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Churantatri - Backvergnügen | Cake Recipe & Pastry Recipe">
  <meta property="og:description" content="Entdecken Sie mit Churantatri köstliche Cake Recipes, Pastry Recipes und Macaron Rezepte. Lernen Sie Bäckerei-Stil zu Hause zu backen. Jetzt starten!">
  <meta property="og:type" content="website">
  <title>Churantatri - Backvergnügen | Cake Recipe & Pastry Recipe</title>
  <link rel="canonical" href="https://churantatri-site.com">
  <link rel="icon" type="image/svg+xml" href="{{favicon_file}}">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#EF4444',
            'primary-dark': '#DC2626',
          }
        }
      }
    }
  </script>
  <style>
    html { scroll-behavior: smooth; }
    .btn-primary { background-color: #EF4444; }
    .btn-primary:hover { background-color: #DC2626; }
    .text-primary { color: #EF4444; }
    .bg-primary { background-color: #EF4444; }
    .border-primary { border-color: #EF4444; }
    .ring-primary { --tw-ring-color: #EF4444; }

    /* Nav underline animation */
    .nav-link {
      position: relative;
      padding-bottom: 2px;
    }
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: 0; left: 0;
      width: 0; height: 2px;
      background-color: #EF4444;
      transition: width 0.25s ease;
    }
    .nav-link:hover::after { width: 100%; }

    /* Browser mockup */
    .browser-frame {
      background: #f1f5f9;
      border-radius: 12px;
      box-shadow: 0 25px 60px -12px rgba(0,0,0,0.18), 0 4px 6px -2px rgba(0,0,0,0.06);
      overflow: hidden;
      border: 1px solid #e2e8f0;
    }
    .browser-bar {
      background: #e2e8f0;
      padding: 10px 14px;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .browser-dot {
      width: 10px; height: 10px;
      border-radius: 50%;
    }
    .browser-url {
      flex: 1;
      background: white;
      border-radius: 4px;
      height: 22px;
      margin-left: 10px;
    }

    /* FAQ chevron animation */
    .faq-chevron { transition: transform 0.3s ease; }
    .faq-chevron.open { transform: rotate(180deg); }
    .faq-body { display: none; }
    .faq-body.open { display: block; }

    /* Benefits alternating */
    .benefit-row:nth-child(even) { background-color: #f8fafc; }

    {{template_custom_css}}
  </style>
</head>
<body class="font-sans text-gray-800 antialiased bg-white">

<!-- Cookie Banner -->
<div id="cookie-banner" class="fixed bottom-0 left-0 right-0 z-50 bg-white border-t-2 border-primary p-4 shadow-2xl" style="display:none;">
  <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
    <p class="text-sm text-gray-600">
      Wir verwenden Cookies, um Ihnen die bestmögliche Erfahrung auf unserer Website zu bieten. Sie können wählen, welche Cookies Sie akzeptieren möchten. <a href="privacy-policy.html" class="text-primary font-semibold hover:underline">Cookie-Richtlinie</a>.
    </p>
    <div class="flex gap-3 shrink-0">
      <button onclick="acceptCookies('necessary')" class="px-4 py-2 text-sm border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50 transition">Nur notwendige</button>
      <button onclick="acceptCookies('all')" class="px-4 py-2 text-sm rounded-lg text-white font-semibold transition btn-primary">Alle akzeptieren</button>
    </div>
  </div>
</div>

<!-- Header -->
<header id="main-header" class="sticky top-0 z-40 bg-white border-b border-gray-100 shadow-sm">
  <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
    <!-- Logo with tech icon -->
    <a href="/" class="flex items-center gap-2">
      <div class="w-8 h-8 rounded-lg flex items-center justify-center bg-primary">
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2h-2"/></svg>
      </div>
      <span class="text-xl font-bold text-gray-900">Churantatri</span>
    </a>
    <nav class="hidden md:flex items-center gap-7 text-sm font-medium text-gray-600">
      <a href="#about" class="nav-link hover:text-gray-900 transition">Über uns</a>
      <a href="#services" class="nav-link hover:text-gray-900 transition">Angebote</a>
      <a href="#testimonials" class="nav-link hover:text-gray-900 transition">Bewertungen</a>
      <a href="#faq" class="nav-link hover:text-gray-900 transition">FAQ</a>
      <a href="contact.html" class="nav-link hover:text-gray-900 transition">Kontakt</a>
    </nav>
    <a href="#cta" class="hidden md:inline-flex items-center gap-2 px-5 py-2 text-sm font-semibold border-2 border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition">
      Jetzt Rezepte entdecken
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
    </a>
    <button id="menu-btn" class="md:hidden p-2 rounded-lg text-gray-600 hover:text-primary hover:bg-gray-50" onclick="toggleMenu()">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
  </div>
  <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-4 py-4 space-y-3 text-sm font-medium text-gray-600">
    <a href="#about" class="block py-2 hover:text-primary" onclick="toggleMenu()">Über uns</a>
    <a href="#services" class="block py-2 hover:text-primary" onclick="toggleMenu()">Angebote</a>
    <a href="#testimonials" class="block py-2 hover:text-primary" onclick="toggleMenu()">Bewertungen</a>
    <a href="#faq" class="block py-2 hover:text-primary" onclick="toggleMenu()">FAQ</a>
    <a href="contact.html" class="block py-2 hover:text-primary" onclick="toggleMenu()">Kontakt</a>
    <a href="#cta" class="block mt-2 px-4 py-2 text-white rounded-lg text-center btn-primary font-semibold" onclick="toggleMenu()">Jetzt Rezepte entdecken</a>
  </div>
</header>

<!-- Hero — split layout -->
<section class="bg-gradient-to-br from-slate-50 via-white to-blue-50 py-20 md:py-28 overflow-hidden">
  <div class="max-w-6xl mx-auto px-4 flex flex-col lg:flex-row items-center gap-14">
    <!-- Left: text + checklist -->
    <div class="flex-1 max-w-xl">
      <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full text-white mb-5 bg-primary">Backen lernen</span>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-5">Cake Recipe und Pastry Rezepte meisterhaft backen</h1>
      <p class="text-lg text-gray-500 mb-8 leading-relaxed">Entdecken Sie Schritt-für-Schritt Anleitungen für Kuchen, Gebäck und Macarons im Bäckerei-Stil – direkt aus Ihrer Heimküche.</p>
      <!-- Feature checklist -->
      <ul class="space-y-3 mb-10">
        <li class="flex items-center gap-3 text-gray-700 font-medium">
          <span class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center shrink-0">
            <svg class="w-3.5 h-3.5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
          </span>
          Schritt-für-Schritt Anleitungen
        </li>
        <li class="flex items-center gap-3 text-gray-700 font-medium">
          <span class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center shrink-0">
            <svg class="w-3.5 h-3.5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
          </span>
          Bäckerei-Qualität zu Hause
        </li>
        <li class="flex items-center gap-3 text-gray-700 font-medium">
          <span class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center shrink-0">
            <svg class="w-3.5 h-3.5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
          </span>
          Vielfältige Rezeptauswahl
        </li>
      </ul>
      <a href="#cta" class="inline-flex items-center gap-3 px-8 py-4 text-white font-bold rounded-xl shadow-lg btn-primary transition text-lg">
        Jetzt Rezepte entdecken
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="#about" class="inline-flex items-center gap-2 ml-4 text-sm text-gray-500 hover:text-gray-700 transition font-medium">Mehr erfahren</a>
    </div>
    <!-- Right: browser frame mockup -->
    <div class="flex-1 w-full max-w-lg">
      <div class="browser-frame">
        <div class="browser-bar">
          <div class="browser-dot bg-red-400"></div>
          <div class="browser-dot bg-yellow-400"></div>
          <div class="browser-dot bg-green-400"></div>
          <div class="browser-url"></div>
        </div>
        <img src="images/hero.jpg" alt="Frisch gebackene Torten und Gebäck im Bäckerei-Stil auf einem Holztisch" width="600" height="400" class="w-full object-cover block" loading="eager">
      </div>
    </div>
  </div>
</section>

<!-- About — stats bar + text + image -->
<section id="about" class="py-20 bg-white">
  <!-- Stats bar -->
  <div class="bg-gray-50 border-y border-gray-100 py-10 mb-16">
    <div class="max-w-5xl mx-auto px-4 grid grid-cols-3 gap-8 text-center">
      <div>
        <div class="text-4xl font-extrabold text-primary">10+</div>
        <div class="text-sm text-gray-500 mt-1 font-medium">Jahre Backerfahrung</div>
      </div>
      <div>
        <div class="text-4xl font-extrabold text-primary">5000+</div>
        <div class="text-sm text-gray-500 mt-1 font-medium">Zufriedene Hobbybäcker</div>
      </div>
      <div>
        <div class="text-4xl font-extrabold text-primary">98%</div>
        <div class="text-sm text-gray-500 mt-1 font-medium">Erfolgsquote der Rezepte</div>
      </div>
    </div>
  </div>
  <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row gap-12 items-center">
    <div class="flex-1">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Über Churantatri</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-6 leading-tight">Ihre Leidenschaft fürs Backen – unser Rezept zum Erfolg</h2>
      <p class="text-gray-500 leading-relaxed mb-4">Churantatri wurde mit der Vision gegründet, das Backen für jeden zugänglich und genussvoll zu gestalten. Wir glauben, dass jeder Mensch in der Lage ist, wunderbare Torten, Gebäck und Macarons herzustellen – unabhängig von Erfahrung oder Kenntnisstand. Unsere Plattform bietet einfach verständliche Anleitungen, die direkt zu Hause umgesetzt werden können.</p>
      <p class="text-gray-500 leading-relaxed mb-4">Unsere Rezeptsammlung umfasst hunderte erprobte Anleitungen für Cake Recipes, Pastry Recipes und Macaron Rezepte im Bäckerei-Stil. Jedes Rezept wurde von erfahrenen Konditoren entwickelt und getestet, damit Sie zuhause professionelle Ergebnisse erzielen. Mit unseren detaillierten Schritt-für-Schritt-Erklärungen wird Backen zum echten Vergnügen für die ganze Familie.</p>
      <p class="text-gray-500 leading-relaxed mb-6">Wir sind stolz auf unsere wachsende Gemeinschaft von Hobbybäckern in Deutschland, die täglich neue Kreationen ausprobieren und teilen. Bei Churantatri finden Sie nicht nur Rezepte, sondern auch Tipps, Techniken und Inspiration, um Ihre Backkünste kontinuierlich zu verbessern und immer neue Köstlichkeiten zu entdecken.</p>
      <a href="about.html" class="inline-flex items-center gap-2 font-semibold text-primary hover:underline">
        Unsere Geschichte lesen
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>
    <div class="flex-1">
      <img src="images/about.jpg" alt="Konditorin dekoriert eine Torte mit Crème im professionellen Stil" width="540" height="400" class="w-full rounded-2xl shadow-xl object-cover" loading="lazy">
    </div>
  </div>
</section>

<!-- Services — icon grid with hover lift -->
<section id="services" class="py-20 bg-slate-50">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Unsere Angebote</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Alles, was Sie zum Backen brauchen</h2>
      <p class="text-gray-500 mt-3 max-w-xl mx-auto">Von einfachen Cake Recipes bis zu kunstvollen Macaron Rezepten – wir begleiten Sie auf Ihrem Weg zum Hobbybäcker.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-primary">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V8h2v8zm4 0h-2V8h2v8z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Cake Recipe Kurse</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Lernen Sie klassische und moderne Tortenrezepte im Bäckerei-Stil. Unsere geführten Kurse führen Sie Schritt für Schritt durch jeden Backprozess, sodass Sie perfekte Ergebnisse erzielen.</p>
      </div>
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-blue-100">
          <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.6 6.62c-1.44 0-2.8.56-3.77 1.53L12 10.66 10.48 12h.01L7.8 14.39c-.64.64-1.49.99-2.4.99-1.87 0-3.39-1.51-3.39-3.38S3.53 8.62 5.4 8.62c.91 0 1.76.35 2.44 1.03l1.13 1 1.51-1.34L9.22 8.2C8.2 7.18 6.84 6.62 5.4 6.62 2.42 6.62 0 9.04 0 12s2.42 5.38 5.4 5.38c1.44 0 2.8-.56 3.77-1.53l8.43-8.6c.64-.64 1.49-.99 2.4-.99 1.87 0 3.39 1.51 3.39 3.38s-1.52 3.38-3.39 3.38c-.9 0-1.76-.35-2.44-1.03l-1.14-1.01-1.51 1.34 1.27 1.12C17.2 17.44 18.56 18 20 18c2.98 0 5.4-2.42 5.4-5.38s-2.42-5.38-5.4-5.38z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Pastry Recipe Workshops</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Entdecken Sie die Welt der feinen Gebäcke mit unseren Pastry Workshops. Von Blätterteig bis Croissant – wir zeigen Ihnen alle Techniken für professionelles Feingebäck zu Hause.</p>
      </div>
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-purple-100">
          <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a10 10 0 1 0 0 20A10 10 0 0 0 12 2zm0 3a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm0 14.2a7.2 7.2 0 0 1-6-3.22c.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08a7.2 7.2 0 0 1-6 3.22z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Macaron Rezepte</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Macarons gelten als Königsdisziplin des Backens. Unsere speziellen Macaron Rezepte führen Sie durch jeden Schritt – von der Mandelmasse bis zur perfekten Ganache-Füllung für beste Ergebnisse.</p>
      </div>
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-green-100">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Home Bake Tipps</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Profitieren Sie von unseren exklusiven Home Bake Tipps direkt aus der Profiküche. Erfahren Sie, wie Sie mit einfachen Mitteln zuhause Bäckerei-Qualität erzielen und häufige Fehler vermeiden.</p>
      </div>
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-orange-100">
          <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 14c-1.66 0-3 1.34-3 3 0 1.31-1.16 2-2 2 .92 1.22 2.49 2 4 2 2.21 0 4-1.79 4-4 0-1.66-1.34-3-3-3zm13.71-9.37l-1.34-1.34a1 1 0 0 0-1.41 0L9 12.25 11.75 15l8.96-8.96a1 1 0 0 0 0-1.41z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Bäckerei-Stil Dekorationen</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Lernen Sie professionelle Dekorationstechniken für Torten und Gebäck. Wir zeigen Ihnen, wie Sie Blumen aus Fondant, Schokoladendekorationen und Glasuren im Bäckerei-Stil kreieren.</p>
      </div>
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-pink-100">
          <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Rezept-Community</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Treten Sie unserer aktiven Backcommunity bei und teilen Sie Ihre eigenen Kreationen. Tauschen Sie Erfahrungen aus, erhalten Sie Feedback von Experten und inspirieren Sie andere Hobbybäcker in Deutschland.</p>
      </div>
    </div>
  </div>
</section>

<!-- Benefits — feature list with large checkmarks, alternating rows -->
<section class="py-20 bg-white">
  <div class="max-w-5xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Ihre Vorteile</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Warum Churantatri Ihr bester Backpartner ist</h2>
    </div>
    <div class="rounded-2xl overflow-hidden border border-gray-100 shadow-sm">
      <div class="benefit-row flex flex-col sm:flex-row items-start sm:items-center gap-5 px-8 py-7 bg-white">
        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center shrink-0">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div>
          <h3 class="font-bold text-gray-900 text-lg">Schritt-für-Schritt Anleitungen</h3>
          <p class="text-gray-500 text-sm mt-1 leading-relaxed">Jedes Cake Recipe und Pastry Recipe wird mit detaillierten, leicht verständlichen Schritten erklärt, die auch Anfänger problemlos nachvollziehen können.</p>
        </div>
      </div>
      <div class="benefit-row flex flex-col sm:flex-row items-start sm:items-center gap-5 px-8 py-7 bg-slate-50">
        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center shrink-0">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div>
          <h3 class="font-bold text-gray-900 text-lg">Bäckerei-Qualität zu Hause</h3>
          <p class="text-gray-500 text-sm mt-1 leading-relaxed">Mit unseren Tipps und Techniken backen Sie im echten Bäckerei-Stil – professionelle Ergebnisse direkt aus Ihrer Heimküche, ohne teure Ausrüstung.</p>
        </div>
      </div>
      <div class="benefit-row flex flex-col sm:flex-row items-start sm:items-center gap-5 px-8 py-7 bg-white">
        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center shrink-0">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div>
          <h3 class="font-bold text-gray-900 text-lg">Vielfältige Rezeptauswahl</h3>
          <p class="text-gray-500 text-sm mt-1 leading-relaxed">Von klassischen Cake Recipes über feine Pastry Rezepte bis zu eleganten Macaron Kreationen – unsere Sammlung wächst täglich mit neuen Inspirationen.</p>
        </div>
      </div>
      <div class="benefit-row flex flex-col sm:flex-row items-start sm:items-center gap-5 px-8 py-7 bg-slate-50">
        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center shrink-0">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div>
          <h3 class="font-bold text-gray-900 text-lg">Expertenunterstützung</h3>
          <p class="text-gray-500 text-sm mt-1 leading-relaxed">Unsere erfahrenen Konditoren stehen Ihnen mit Rat und Tat zur Seite. Bei Fragen zu Rezepten oder Techniken erhalten Sie schnelle und kompetente Hilfe.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials — avatar + stars + quote card, middle card accented -->
<section id="testimonials" class="py-20 bg-slate-50">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Kundenstimmen</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Was unsere Hobbybäcker sagen</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="bg-white rounded-2xl p-7 shadow-sm border border-gray-100">
        <div class="flex gap-1 mb-3">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed mb-6">"Dank Churantatri habe ich endlich gelernt, wie man Macarons richtig macht. Das Macaron Rezept war so verständlich erklärt, dass ich beim ersten Versuch bereits perfekte Ergebnisse erzielt habe. Die Community ist wunderbar und immer hilfsbereit. Ich bin begeistert!"</p>
        <div class="flex items-center gap-3">
          <img src="images/avatar1.jpg" alt="Sabine Müller" width="44" height="44" class="w-11 h-11 rounded-full object-cover ring-2 ring-gray-100" loading="lazy">
          <div>
            <div class="font-semibold text-sm text-gray-900">Sabine Müller</div>
            <div class="text-xs text-gray-400">Hobbybäckerin, München</div>
          </div>
        </div>
      </div>
      <!-- Card 2 — primary accent, active -->
      <div class="bg-primary rounded-2xl p-7 shadow-xl scale-105">
        <div class="flex gap-1 mb-3">
          <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-white text-sm leading-relaxed mb-6">"Ich habe mir immer gewünscht, Torten im Bäckerei-Stil zu backen. Mit den Cake Recipes von Churantatri ist das kein Traum mehr. Die Anleitungen sind präzise und die Ergebnisse beeindruckend. Meine Familie und Freunde sind jedes Mal begeistert von meinen Kreationen."</p>
        <div class="flex items-center gap-3">
          <img src="images/avatar2.jpg" alt="Thomas Becker" width="44" height="44" class="w-11 h-11 rounded-full object-cover ring-2 ring-white/30" loading="lazy">
          <div>
            <div class="font-semibold text-sm text-white">Thomas Becker</div>
            <div class="text-xs text-white/60">Freizeitbäcker, Hamburg</div>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="bg-white rounded-2xl p-7 shadow-sm border border-gray-100">
        <div class="flex gap-1 mb-3">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed mb-6">"Die Pastry Recipes auf Churantatri sind einfach unglaublich. Ich habe Croissants und Blätterteiggebäck ausprobiert und war von der Qualität der Anleitungen beeindruckt. Endlich kann ich meinen Gästen Backwaren anbieten, die wie vom Profi aussehen und schmecken."</p>
        <div class="flex items-center gap-3">
          <img src="images/avatar3.jpg" alt="Klara Hoffmann" width="44" height="44" class="w-11 h-11 rounded-full object-cover ring-2 ring-gray-100" loading="lazy">
          <div>
            <div class="font-semibold text-sm text-gray-900">Klara Hoffmann</div>
            <div class="text-xs text-gray-400">Kochbegeisterte, Berlin</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ — clean accordion with animated chevron -->
<section id="faq" class="py-20 bg-white">
  <div class="max-w-3xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Häufige Fragen</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Ihre Fragen – unsere Antworten</h2>
    </div>
    <div class="space-y-3">
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Für wen sind die Rezepte von Churantatri geeignet?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Unsere Rezepte sind für alle geeignet – von absoluten Anfängern bis zu erfahrenen Hobbybäckern. Jedes Cake Recipe und Pastry Recipe ist klar strukturiert mit verschiedenen Schwierigkeitsgraden, sodass Sie in Ihrem eigenen Tempo lernen und wachsen können.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Brauche ich spezielle Ausstattung zum Home Bake?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Die meisten unserer Rezepte benötigen nur Standardküchenmaterial. Wir geben bei jedem Rezept an, welche Geräte erforderlich sind und bieten Alternativen für spezielle Ausrüstung. Das Ziel ist, Bäckerei-Qualität mit alltäglichen Mitteln zu erreichen.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Wie schwierig ist es, Macarons nach Ihrem Rezept zu backen?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Macarons gelten als anspruchsvoll, aber mit unserem detaillierten Macaron Rezept und den Tipps unserer Experten ist der Erfolg gut erreichbar. Wir erklären jeden Schritt genau und geben Hinweise zu häufigen Fehlern, damit Ihr erster Versuch bereits gelingt.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Kann ich die Rezepte auch offline nutzen?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Ja, alle unsere Rezepte können gespeichert und ausgedruckt werden. Wir bieten auch eine Offline-Funktion in unserer App, sodass Sie auch ohne Internetverbindung auf Ihre Lieblingsrezepte zugreifen und bequem in der Küche backen können.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Wie oft werden neue Rezepte hinzugefügt?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Wir erweitern unsere Rezeptsammlung regelmäßig – mindestens mehrmals pro Woche kommen neue Cake Recipes, Pastry Recipes und weitere Backanleitungen hinzu. Als Mitglied unserer Community erhalten Sie Benachrichtigungen über neue Rezepte und saisonale Spezialitäten.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Sind die Rezepte für verschiedene Ernährungsweisen geeignet?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Wir bieten eine wachsende Auswahl an Rezepten für verschiedene Ernährungsbedürfnisse, darunter glutenfreie, laktosefreie und vegane Optionen. Jedes Rezept ist klar gekennzeichnet, sodass Sie leicht passende Backrezepte für Ihre Ernährungsweise finden.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Wie kann ich der Churantatri-Community beitreten?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Der Beitritt zu unserer Community ist kostenlos und unkompliziert. Registrieren Sie sich einfach auf unserer Website, erstellen Sie ein Profil und beginnen Sie sofort, Rezepte zu teilen, Fragen zu stellen und von anderen leidenschaftlichen Hobbybäckern in Deutschland zu lernen.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA — two-column: left headline + bullets, right form -->
<section id="cta" class="py-20 bg-slate-900">
  <div class="max-w-6xl mx-auto px-4">
    <div class="flex flex-col lg:flex-row gap-14 items-start">
      <!-- Left -->
      <div class="flex-1">
        <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4 leading-tight">Starten Sie Ihr Backvergnügen noch heute</h2>
        <p class="text-slate-400 text-lg mb-8 leading-relaxed">Melden Sie sich an und erhalten Sie sofortigen Zugang zu hunderten Cake Recipes, Pastry Recipes und Macaron Anleitungen im Bäckerei-Stil.</p>
        <ul class="space-y-4">
          <li class="flex items-start gap-3 text-slate-300">
            <svg class="w-6 h-6 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span>Schritt-für-Schritt Anleitungen — Jedes Cake Recipe und Pastry Recipe wird mit detaillierten, leicht verständlichen Schritten erklärt, die auch Anfänger problemlos nachvollziehen können.</span>
          </li>
          <li class="flex items-start gap-3 text-slate-300">
            <svg class="w-6 h-6 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span>Bäckerei-Qualität zu Hause — Mit unseren Tipps und Techniken backen Sie im echten Bäckerei-Stil – professionelle Ergebnisse direkt aus Ihrer Heimküche, ohne teure Ausrüstung.</span>
          </li>
          <li class="flex items-start gap-3 text-slate-300">
            <svg class="w-6 h-6 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span>Vielfältige Rezeptauswahl — Von klassischen Cake Recipes über feine Pastry Rezepte bis zu eleganten Macaron Kreationen – unsere Sammlung wächst täglich mit neuen Inspirationen.</span>
          </li>
        </ul>
      </div>
      <!-- Right: form -->
      <div class="flex-1 w-full max-w-md bg-white rounded-2xl p-8 shadow-2xl">
        <h3 class="text-xl font-bold text-gray-900 mb-6">Kostenlos anmelden</h3>
        <form class="space-y-4" onsubmit="return false;">
          <input type="text" placeholder="Ihr Name" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-gray-900 focus:outline-none focus:ring-2 focus:border-transparent transition" style="--tw-ring-color: #EF4444;" required>
          <input type="email" placeholder="Ihre E-Mail-Adresse" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-gray-900 focus:outline-none focus:ring-2 focus:border-transparent transition" required>
          <button type="submit" class="w-full px-6 py-4 text-white font-bold rounded-xl btn-primary transition text-base">Kostenlos anmelden</button>
        </form>
        <p class="text-gray-400 text-xs mt-4 text-center">Ihre Daten sind sicher. Wir respektieren Ihre Privatsphäre. <a href="privacy-policy.html" class="underline text-gray-500">Datenschutzerklärung lesen</a></p>
      </div>
    </div>
  </div>
</section>

<!-- Disclaimer -->


<!-- Footer -->
<footer id="main-footer" class="bg-white border-t border-gray-100 py-14">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-10">
      <div class="md:col-span-2">
        <div class="flex items-center gap-2 mb-4">
          <div class="w-8 h-8 rounded-lg flex items-center justify-center bg-primary">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2h-2"/></svg>
          </div>
          <span class="text-xl font-bold text-gray-900">Churantatri</span>
        </div>
        <p class="text-sm text-gray-500 leading-relaxed max-w-xs mb-5">Churantatri ist Ihre Plattform für köstliche Cake Recipes, Pastry Rezepte und Macarons im Bäckerei-Stil – backen Sie mit Leidenschaft.</p>
        <div class="text-sm text-gray-500 space-y-1.5">
          <div>Bäckerstraße 42, 10115 Berlin, Deutschland</div>
          <div>+49 30 12345678</div>
          <div>info@churantatri-site.com</div>
        </div>
      </div>
      <div>
        <div class="text-gray-900 font-semibold text-sm mb-4">Navigation</div>
        <ul class="space-y-2.5 text-sm text-gray-500">
          <li><a href="/" class="hover:text-primary transition">Startseite</a></li>
          <li><a href="about.html" class="hover:text-primary transition">Über uns</a></li>
          <li><a href="contact.html" class="hover:text-primary transition">Kontakt</a></li>
        </ul>
      </div>
      <div>
        <div class="text-gray-900 font-semibold text-sm mb-4">Rechtliches</div>
        <ul class="space-y-2.5 text-sm text-gray-500">
          <li><a href="privacy-policy.html" class="hover:text-primary transition">Datenschutz</a></li>
          <li><a href="terms.html" class="hover:text-primary transition">AGB</a></li>
        </ul>
      </div>
    </div>
    <div class="border-t border-gray-100 pt-6 flex flex-col md:flex-row items-center justify-between gap-2 text-xs text-gray-400">
      <span>© 2025 Churantatri. Alle Rechte vorbehalten.</span>
      <span>Made with care by Churantatri</span>
    </div>
  </div>
</footer>

<script>
  // Cookie banner
  function acceptCookies(type) {
    localStorage.setItem('cookies_accepted', type);
    document.getElementById('cookie-banner').style.display = 'none';
  }
  window.addEventListener('DOMContentLoaded', function() {
    if (!localStorage.getItem('cookies_accepted')) {
      document.getElementById('cookie-banner').style.display = 'block';
    }
  });

  // Mobile menu
  function toggleMenu() {
    var m = document.getElementById('mobile-menu');
    m.classList.toggle('hidden');
  }

  // FAQ accordion with animated chevron
  function toggleFaq(btn) {
    var body = btn.nextElementSibling;
    var chevron = btn.querySelector('.faq-chevron');
    // Close others
    document.querySelectorAll('.faq-body.open').forEach(function(el) {
      if (el !== body) {
        el.classList.remove('open');
        el.previousElementSibling.querySelector('.faq-chevron').classList.remove('open');
      }
    });
    body.classList.toggle('open');
    chevron.classList.toggle('open');
  }
</script>
</body>
</html>

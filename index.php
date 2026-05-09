<?php session_start(); ?>

<!doctype html>

<html class="dark" lang="en" style="scroll-behavior: smooth">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>DevPortfolio | Modern Web &amp; Mobile Developer</title>
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            background: "#14121a",
            "on-secondary": "#273500",
            "on-background": "#e6e0ec",
            "surface-container-lowest": "#0f0d15",
            error: "#ffb4ab",
            "on-surface": "#e6e0ec",
            "primary-container": "#4d28b9",
            "inverse-surface": "#e6e0ec",
            "on-error-container": "#ffdad6",
            "on-secondary-fixed-variant": "#3a4d00",
            "primary-fixed": "#e7deff",
            "on-secondary-fixed": "#151f00",
            "on-primary": "#340098",
            "surface-container": "#201e27",
            "on-tertiary-fixed-variant": "#793000",
            "tertiary-container": "#7d3200",
            "error-container": "#93000a",
            "on-primary-fixed-variant": "#4b25b7",
            "on-primary-container": "#bdadff",
            "on-error": "#690005",
            "tertiary-fixed-dim": "#ffb692",
            "inverse-primary": "#6343d0",
            "surface-dim": "#14121a",
            "on-tertiary-fixed": "#341100",
            "on-surface-variant": "#cac4d6",
            surface: "#14121a",
            secondary: "#acd53f",
            "tertiary-fixed": "#ffdbcb",
            "secondary-fixed": "#c8f259",
            "on-secondary-container": "#273500",
            "on-tertiary": "#562000",
            primary: "#cbbeff",
            "surface-container-low": "#1c1a23",
            "surface-variant": "#36333d",
            "primary-fixed-dim": "#cbbeff",
            "surface-container-highest": "#36333d",
            outline: "#938ea0",
            "inverse-on-surface": "#312f38",
            "outline-variant": "#484554",
            "surface-container-high": "#2b2932",
            "secondary-container": "#80a503",
            "surface-bright": "#3a3841",
            "secondary-fixed-dim": "#acd53f",
            "on-tertiary-container": "#ffa172",
            tertiary: "#ffb692",
            "surface-tint": "#cbbeff",
            "on-primary-fixed": "#1e0061",
          },
          borderRadius: {
            DEFAULT: "0.125rem",
            lg: "0.25rem",
            xl: "0.5rem",
            full: "0.75rem",
          },
          spacing: {
            sm: "8px",
            unit: "4px",
            xl: "40px",
            xs: "4px",
            "container-max": "1280px",
            margin: "32px",
            lg: "24px",
            gutter: "24px",
            xxl: "80px",
            md: "16px",
          },
          fontFamily: {
            "body-md": ["Inter"],
            "label-caps": ["Inter"],
            h2: ["Space Grotesk"],
            h1: ["Space Grotesk"],
            "body-lg": ["Inter"],
            h3: ["Space Grotesk"],
          },
          fontSize: {
            "body-md": [
              "16px",
              {
                lineHeight: "1.5",
                letterSpacing: "0em",
                fontWeight: "400"
              },
            ],
            "label-caps": [
              "12px",
              {
                lineHeight: "1.0",
                letterSpacing: "0.1em",
                fontWeight: "700",
              },
            ],
            h2: [
              "48px",
              {
                lineHeight: "1.2",
                letterSpacing: "-0.01em",
                fontWeight: "600",
              },
            ],
            h1: [
              "64px",
              {
                lineHeight: "1.1",
                letterSpacing: "-0.02em",
                fontWeight: "700",
              },
            ],
            "body-lg": [
              "18px",
              {
                lineHeight: "1.6",
                letterSpacing: "0em",
                fontWeight: "400"
              },
            ],
            h3: [
              "32px",
              {
                lineHeight: "1.3",
                letterSpacing: "0em",
                fontWeight: "600"
              },
            ],
          },
        },
      },
    };
  </script>
  <style>
    . {
      font-variation-settings:
        "FILL" 0,
        "wght" 400,
        "GRAD" 0,
        "opsz" 24;
    }

    .glass-card {
      background: rgba(32, 30, 39, 0.6);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .text-glow-primary {
      text-shadow: 0 0 15px rgba(203, 190, 255, 0.3);
    }
  </style>
</head>

<body
  class="relative bg-background text-on-background font-body-md overflow-x-hidden max-md:antialiased">
  <!-- TopNavBar -->
  <nav
    class="fixed top-0 w-full z-50 bg-neutral-950/80 backdrop-blur-xl border-b border-white/10"
    style="height: 12vh">
    <div
      class="flex justify-between items-center max-w-8lg mx-auto px-8 h-28">
      <div
        class="text-2xl flex flex-row gap-4 items-center justify-center font-bold tracking-tighter text-white font-['Space_Grotesk']">
        <div class="w-14 h-auto">
          <img
            src="/assets/images/logo.webp"
            class="w-full flter brightness-[0.5] saturate-[1.3]"
            alt="DEV WASFADE Logo" />
        </div>
        <span class="flex gap-0 leading-[1] flex-col justify-center gap-0">
          <span translate="no">DEV</span>
          <span>WASFADE</span>
        </span>
      </div>

      <!-- MENU PC-->
      <div
        class="hidden md:flex items-center gap-8 font-['Space_Grotesk'] font-medium tracking-tight">
        <a
          class="text-lime-400 lien border-lime-400 border-b-2 pb-1 active:scale-95 transform transition-all"
          href="#hero"
          translate="no">
          Home
        </a>

        <a
          class="text-neutral-400 border-transparent border-b-2 lien hover:text-violet-400 pb-1 transition-colors duration-200 active:scale-95 transform transition-all"
          href="#skills"
          translate="no">Skills</a>

        <a
          class="text-neutral-400 border-transparent border-b-2 lien hover:text-violet-400 pb-1 transition-colors duration-200 active:scale-95 transform transition-all"
          href="#services">Services</a>
        <a
          class="text-neutral-400 border-transparent border-b-2 lien hover:text-violet-400 pb-1 transition-colors duration-200 active:scale-95 transform transition-all"
          href="#contact">Contact</a>

        <button
          class="bg-primary-container text-white px-6 py-2 rounded-lg font-bold hover:shadow-[0_0_20px_rgba(77,40,185,0.4)] transition-all active:scale-95">
          Hire Me
        </button>
      </div>

      <button
        id="burger"
        class="md:hidden p-2 text-white active:scale-90 transition-transform">
        <span class="text-3xl"><i class="ri-menu-line"></i></span>
      </button>
    </div>
    <div
      class="navMobile absolute z-1000 bg-[#14121a] text-2xl px-4 pt-4 translate-x-[-100%] transition-alls duration-500 max-md:flex flex-row justify-between h-screen items-start top-0 w-[80%]">
      <ul
        class="mt-4 max-md:flex flex-col gap-4 text-3xl font-medium tracking-tight">
        <li>
          <a
            class="text-lime-400 lien border-lime-400 border-b-2 pb-1 active:scale-95 transform transition-all"
            href="#hero"
            translate="no">
            Home
          </a>
        </li>
        <li>
          <a
            class="text-neutral-400 border-transparent border-b-2 lien hover:text-violet-400 pb-1 transition-colors duration-200 active:scale-95 transform transition-all"
            href="#skills"
            translate="no">Skills</a>
        </li>
        <li>
          <a
            class="text-neutral-400 border-transparent border-b-2 lien hover:text-violet-400 pb-1 transition-colors duration-200 active:scale-95 transform transition-all"
            href="#services">
            Services
          </a>
        </li>
        <li>
          <a
            class="text-neutral-400 border-transparent border-b-2 lien hover:text-violet-400 pb-1 transition-colors duration-200 active:scale-95 transform transition-all"
            href="#contact" translate="no">
            Contact
          </a>
        </li>
      </ul>

      <button
        id="closer"
        class="md:hidden p-2 text-white active:scale-90 transition-transform">
        <i class="ri-close-large-fill"></i>
      </button>
    </div>
  </nav>
  <main>
    <!-- Hero Section -->
    <section
      id="hero"
      class="mt-5 relative min-h-screen flex items-center pt-20 max-md:pt-40 px-6 max-w-[1550px] mx-auto">
      <!-- Background Accents -->
      <div
        class="absolute top-1/4 -left-20 w-96 h-96 bg-primary-container/20 blur-[120px] rounded-full -z-10"></div>
      <div
        class="absolute bottom-1/4 -right-20 w-96 h-96 bg-secondary/10 blur-[120px] rounded-full -z-10"></div>
      <div class="grid md:grid-cols-2 grid-cols-1 gap-12 items-center w-full">
        <div class="space-y-8 max-md:order-2">
          <div
            class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container border border-outline-variant">
            <span
              class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
            <span class="text-label-caps text-secondary">Disponible pour de nouveaux projets</span>
          </div>
          <h1 class="font-h1 text-h1 text-white leading-tight max-md:text-h3">
            Concevoir des expériences numériques de
            <span class="text-primary italic">haute performance</span> 
          </h1>
          <p class="text-body-lg text-on-surface-variant max-w-lg">
            Je suis développeur Web &amp; Mobile senior, spécialisé dans la conception d'architectures robustes et d'interfaces utilisateur intuitives. Je transforme les problèmes complexes en solutions élégantes et évolutives.
          </p>
          <div
            class="flex gap-4 max-md:justify-between max-md:items-center max-md:text-sm">
            <button
              class="bg-primary-container text-white px-8 py-4 max-md:py-2 max-md:px-3 rounded-xl font-bold flex items-center gap-2 hover:scale-105 transition-transform active:scale-95 shadow-xl">
              Voir Projets
              <i class="ri-arrow-right-line"></i>
            </button>
            <button
              class="border border-secondary text-secondary px-8 py-4 max-md:py-2 max-md:px-3 rounded-xl font-bold hover:bg-secondary/10 transition-colors active:scale-95">
              Télécharger le CV
            </button>
          </div>
        </div>
        <div class="relative group max-md:order-1">
          <div
            class="absolute inset-0 bg-primary-container/20 blur-3xl rounded-full scale-75 group-hover:scale-100 transition-transform duration-700"></div>
          <div
            class="relative aspect-square rounded-3xl overflow-hidden glass-card p-2 border-white/10">
            <img
              class="w-full h-full object-cover rounded-2xl grayscale hover:grayscale-0 transition-all duration-500"
              data-alt="A professional portrait of a confident male software developer with a modern, high-tech aesthetic. He is wearing a dark, minimal outfit and standing in a studio environment with dramatic, low-key lighting. Subtle deep purple and lime green rim lights highlight his profile, reflecting the brand's primary color palette. The background consists of soft, out-of-focus digital interfaces and code textures, suggesting technical mastery."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeJ3CHVqQjTuJiWcNs5tU3n8mFTvrL7OJdZJVGGcJn2YlfhRegtZNQQUFUXJTYFVH5sk8oPW4-9C_gRWYVRgDgMJTLxaD4P2jUH1hjZeO3yNhAQ8IbKXGWwp5cxDmv993TzdZdkWjclGePa2RdAUaCvcDBAxAch28lMosy7o4r9GHQQ6YDVbE9FDMRfVSxGbwtHCJai3BuZUD1nOzTZcLWk_6lGh50BC-2ItCbnBsbdOEZf3Iu5mHeg5NVkR7X2Xmm8ZIt-8Jqsfw" />
          </div>
          <!-- Nombes pour faire genre-->
          <div
            class="absolute -bottom-6 -left-6 glass-card p-6 max-md:p-3 rounded-2xl border border-white/20 shadow-2xl">
            <div class="flex items-center gap-4">
              <div class="p-6 max-md:p-3 bg-secondary/20 rounded-lg">
                <i
                  class="ri-terminal-fill font-medium text-2xl max-md:text-xl"></i>
              </div>
              <div translate="no">
                <div class="text-white font-bold text-xl">25+</div>
                <div
                  class="text-on-surface-variant text-xs uppercase tracking-widest font-bold">
                  Commits/Month
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Compétences Section -->
    <section class="py-xxl pt-40 px-6 max-w-7xl mx-auto" id="skills">
      <div class="text-center mb-16">
        <h2 class="font-h2 text-h2 text-white mb-4">
          <span class="text-secondary">Compétences</span> Techniques
        </h2>
        <p class="text-on-surface-variant max-w-2xl mx-auto">
          Une liste suscinte de mes compétences dans le domaine de l'<b>Informatique</b>
        </p>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
        <!-- Expert Item -->
        <div
          class="glass-card p-6 rounded-xl border-l-4 flex flex-col items-center justify-center text-center group hover:bg-surface-container-high transition-colors">
          <i class="ri-css3-line text-3xl mb-3 text-[#2965f1]"></i>
          <span class="font-bold text-white">Tailwind CSS</span>
        </div>
        <!-- Standard Skills -->
        <div
          class="glass-card p-6 rounded-xl flex flex-col items-center justify-center text-center hover:border-primary/50 transition-all">
          <i class="ri-javascript-line text-3xl mb-3 text-[#F7DF1E]"></i>
          <span class="font-medium text-on-surface">JavaScrip</span>
        </div>
        <div
          class="glass-card p-6 rounded-xl flex flex-col items-center justify-center text-center hover:border-primary/50 transition-all">
          <span class="text-lg text-[#777BB4] mb-4">PHP</span>
          <span class="font-medium text-on-surface">PHP</span>
        </div>
        <div
          class="glass-card p-6 rounded-xl flex flex-col items-center justify-center text-center hover:border-primary/50 transition-all">
          <i class="ri-database-2-line text-3xl mb-3 text-[#00758F]"></i>
          <span class="font-medium text-on-surface">SQL</span>
        </div>
        <div
          class="glass-card p-6 rounded-xl flex flex-col items-center justify-center text-center hover:border-primary/50 transition-all">
          <i class="ri-cloud-windy-line text-3xl mb-3 text-[#00AEEF]"></i>
          <span class="font-medium text-on-surface" translate="no">Cloud Deploy</span>
        </div>
        <div
          class="glass-card p-6 rounded-xl flex flex-col items-center justify-center text-center hover:border-primary/50 transition-all">
          <span class="text-md mb-4 text-[#F05032]">GI</span>
          <span class="font-medium text-on-surface">Gi</span>
        </div>
        <div
          class="glass-card p-6 rounded-xl flex flex-col items-center justify-center text-center hover:border-primary/50 transition-all">
          <span class="text-md mb-4 text-[#1ABCFE]">FIGMA</span>
          <span class="font-medium text-on-surface">Figma</span>
        </div>
        <div
          class="glass-card p-6 rounded-xl flex flex-col items-center justify-center text-center hover:border-primary/50 transition-all">
          <i class="ri-settings-2-line text-3xl text-[#6366F1] mb-3"></i>
          <span class="font-medium text-on-surface" translate="no">Data Science</span>
        </div>
        <div
          class="glass-card p-6 rounded-xl flex flex-col items-center justify-center text-center hover:border-primary/50 transition-all">
          <i class="ri-webhook-fill text-3xl text-[#00BFFF] mb-3"></i>
          <span class="font-medium text-on-surface">REST APIs</span>
        </div>
        <div
          class="glass-card p-6 rounded-xl flex flex-col items-center justify-center text-center hover:border-primary/50 transition-all">
          <i
            class="ri-bar-chart-grouped-line text-3xl text-[#00AEEF] mb-3"></i>
          <span class="font-medium text-on-surface">Django</span>
        </div>
        <div
          class="glass-card p-6 rounded-xl flex flex-col items-center justify-center text-center hover:border-primary/50 transition-all">
          <span class="text-lg text-[#FF2D20] mb-4">PHP</span>
          <span class="font-medium text-on-surface">Laravel</span>
        </div>
        <div
          class="glass-card p-6 rounded-xl flex flex-col items-center justify-center text-center hover:border-primary/50 transition-all">
          <i class="ri-code-box-fill text-3xl text-[#ED8B00] mb-3"></i>
          <span class="font-medium text-on-surface">Java</span>
        </div>
      </div>
    </section>
    <!-- Services Section -->
    <section class="py-xxl pt-40 bg-surface-container-low px-6" id="services">
      <div class="max-w-[1550px] mx-auto">
        <div
          class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
          <div>
            <h2 class="font-h2 text-h2 text-white mb-4">
              <span class="text-primary">Services</span>
            </h2>
            <p class="text-on-surface-variant max-w-lg">
              Je conçois des solutions technologiques sur mesure, conçues pour
              l'évolutivité, la performance et l'impact.
            </p>
          </div>
          <div
            class="h-1 flex-1 bg-outline-variant/30 mb-4 mx-12 hidden md:block"></div>
          <div class="text-secondary font-bold text-h3 tracking-tighter">
            04 Pillers Majeures
          </div>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Web Dev -->
          <div
            class="glass-card p-8 rounded-3xl hover:bg-surface-container-highest transition-all group flex flex-col">
            <div
              class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
              <!-- <span
                  translate="no"
                  class="material-symbols-outlined text-primary text-4xl"
                  >web</span
                > -->
              <i class="ri-pages-line text-primary text-4xl"></i>
            </div>
            <h3 class="font-h3 text-h3 text-white mb-4">Web Dev</h3>
            <ul class="space-y-3 text-on-surface-variant flex-1">
              <li class="flex items-center gap-2">
                <span class="w-1 h-1 bg-secondary rounded-full"></span>
                PSites de Portfolio
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1 h-1 bg-secondary rounded-full"></span>
                Plateformes de démonstration
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1 h-1 bg-secondary rounded-full"></span>
                Applications Web dynamiques
              </li>
            </ul>
          </div>
          <!-- Mobile Dev -->
          <div
            class="glass-card p-8 rounded-3xl hover:bg-surface-container-highest transition-all group flex flex-col">
            <div
              class="w-16 h-16 bg-secondary/10 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
              <i class="ri-smartphone-line text-secondary text-4xl"></i>
            </div>
            <h3 class="font-h3 text-h3 text-white mb-4">
              Conception d'application
            </h3>
            <ul class="space-y-3 text-on-surface-variant flex-1">
              <li class="flex items-center gap-2">
                <span class="w-1 h-1 bg-primary rounded-full"></span>
                Conception d'application
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1 h-1 bg-primary rounded-full"></span>Design
                UI/UX Natif"
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1 h-1 bg-primary rounded-full"></span>
                Orchestration de projet
              </li>
            </ul>
          </div>
          <!-- Data Science & AI -->
          <div
            class="glass-card p-8 rounded-3xl hover:bg-surface-container-highest transition-all group flex flex-col">
            <div
              class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
              <i class="ri-psychotherapy-line text-primary text-4xl"></i>
            </div>
            <h3 class="font-h3 text-h3 text-white mb-4" translate="no">
              IA &amp; Datas
            </h3>
            <ul class="space-y-3 text-on-surface-variant flex-1">
              <li class="flex items-center gap-2">
                <span class="w-1 h-1 bg-secondary rounded-full"></span>Modèles
                de Random Forest
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1 h-1 bg-secondary rounded-full"></span> AI
                Assistants
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1 h-1 bg-secondary rounded-full"></span>
                Analyse Predictive
              </li>
            </ul>
          </div>
          <!-- Student Support -->
          <div
            class="glass-card p-8 rounded-3xl hover:bg-surface-container-highest transition-all group flex flex-col">
            <div
              class="w-16 h-16 bg-secondary/10 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
              <i class="ri-graduation-cap-line text-secondary text-4xl"></i>
            </div>
            <h3 class="font-h3 text-h3 text-white mb-4">Support</h3>
            <ul class="space-y-3 text-on-surface-variant flex-1">
              <li class="flex items-center gap-2">
                <span class="w-1 h-1 bg-primary rounded-full"></span>
                Tutorat Sciences (Maths/PCT)
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1 h-1 bg-primary rounded-full"></span>
                Orientation Universitaire
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1 h-1 bg-primary rounded-full"></span>
                Coaching Academique
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Projects / Stats Section -->
    <section class="py-xxl px-6" id="projects">
      <div class="max-w-[1550px] mx-auto">
        <div class="grid md:grid-cols-3 gap-8">
          <div
            class="p-12 glass-card rounded-[2rem] text-center border-b-4 border-primary">
            <div class="text-h1 font-h1 text-white mb-2">+15</div>
            <div class="text-label-caps text-primary tracking-[0.3em]">
              Applications Web
            </div>
          </div>
          <div
            class="p-12 glass-card rounded-[2rem] text-center border-b-4 border-secondary">
            <div class="text-h1 font-h1 text-white mb-2">+07</div>
            <div class="text-label-caps text-secondary tracking-[0.3em]">
              Projet d'Equipe
            </div>
          </div>
          <div
            class="p-12 glass-card rounded-[2rem] text-center border-b-4 border-primary">
            <div class="text-h1 font-h1 text-white mb-2">+47</div>
            <div class="text-label-caps text-primary tracking-[0.3em]">
              dépot Public Github
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="pb-xxl pt-40 px-6 max-w-[1550px] mx-auto" id="contact">
      <div class="grid md:grid-cols-2 gap-16 items-center">
        <div>
          <h2 class="font-h2 text-h2 text-white mb-6">
            <span class="text-primary">Collaborons!</span>
          </h2>
          <p
            class="text-body-lg text-on-surface-variant mb-12 max-md:text-[14px]">
            Projet, collaboration ou simple échange d'idées ? Discutons-en !
            Contactez-moi via mes réseaux ou directement via le formulaire
            ci-dessous.
          </p>
          <div class="space-y-8">
            <div class="flex items-center gap-6 group">
              <div
                class="w-14 h-14 bg-secondary/10 rounded-xl flex items-center justify-center border border-secondary/20 group-hover:bg-secondary group-hover:text-on-secondary transition-all">
                <i class="ri-mail-line"></i>
              </div>
              <div>
                <div
                  class="text-sm font-bold text-on-surface-variant uppercase tracking-widest">
                  Envoyez moi un Mail
                </div>
                <div class="text-xl max-md:text-lg font-bold text-white">
                  <a href="mailto:wafadetonoukoin@gmail.com">wafadetonoukoin@gmail.com</a>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-6 group">
              <div
                class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center border border-primary/20 group-hover:bg-primary group-hover:text-on-primary transition-all">
                <i class="ri-question-answer-line"></i>
              </div>
              <div>
                <div
                  class="text-sm font-bold text-on-surface-variant uppercase tracking-widest">
                  Whatsapp
                </div>
                <div class="text-xl max-md:text-lg font-bold text-white">
                  <a href="https://wa.me/2200194853019">+220 01 94 85 30 19</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <form class="glass-card p-10 rounded-[2rem] space-y-6" action="traitement/traitement.php" method = "POST">
          <?php if (isset($_SESSION["succes"])) { ?>

            <div class="text-center text-emerald-500 text-lg font-light"><?= $_SESSION["succes"] ?? "" ?></div>
          <?php } ?> <?php if (isset($_SESSION["error"]["send"])) { ?>

            <div class="text-center text-red-500 text-lg font-light"><?= $_SESSION["error"]["send"] ?? "" ?></div>
          <?php } ?>
          <div class="grid md:grid-cols-2 max-md:grid-cols-1 gap-6">
            <div class="space-y-2">
              <label
                for="prenom"
                class="text-xs font-bold text-on-surface-variant uppercase ml-1">First Name</label>
              <input
                id="prenom"
                name="prenom"
                class="w-full bg-[#111113] border-outline-variant text-white rounded-xl p-4 focus:ring-2 focus:ring-secondary focus:border-transparent outline-none transition-all"
                placeholder="Wasfade"
                value = "<?= @$_SESSION["prenom"] ?>"
                type="text" />
                <span class="text-red-500 font-medium text-xs"><?= @$_SESSION["error"]["prenom"] ?? "" ?></span>
            </div>
            <div class="space-y-2">
              <label
                for="nom"
                class="text-xs font-bold text-on-surface-variant uppercase ml-1">Last Name</label>
              <input
                id="nom"
                name="nom"
                class="w-full bg-[#111113] border-outline-variant text-white rounded-xl p-4 focus:ring-2 focus:ring-secondary focus:border-transparent outline-none transition-all"
                placeholder="Tonoukoin"
                value = "<?= @$_SESSION["nom"] ?>"
                type="text" />
                <span class="text-red-500 font-medium text-xs"><?= @$_SESSION["error"]["nom"] ?? "" ?></span>
            </div>
          </div>
          <div class="space-y-2">
            <label
              for="email"
              class="text-xs font-bold text-on-surface-variant uppercase ml-1">Adresse mail</label>
            <input
              id="email"
              name="email"
              class="w-full bg-[#111113] border-outline-variant text-white rounded-xl p-4 focus:ring-2 focus:ring-secondary focus:border-transparent outline-none transition-all"
              placeholder="wasfade@example.com"
              value="<?= @$_SESSION["email"] ?>"
              type="email" />
              <span class="text-red-500 font-medium text-xs"><?= @$_SESSION["error"]["email"] ?? "" ?></span>
          </div>          
          <div class="space-y-2">
            <label
              for="sujet"
              class="text-xs font-bold text-on-surface-variant uppercase ml-1">Sujet</label>
            <input
              id="subject"
              name="subject"
              class="w-full bg-[#111113] border-outline-variant text-white rounded-xl p-4 focus:ring-2 focus:ring-secondary focus:border-transparent outline-none transition-all"
              placeholder="Sujet du message"
              value="<?= @$_SESSION["subject"] ?>"
              type="text" />
              <span class="text-red-500 font-medium text-xs"><?= @$_SESSION["error"]["subject"] ?? "" ?></span>
          </div>
          <div class="space-y-2">
            <label
              for="message"
              class="text-xs font-bold text-on-surface-variant uppercase ml-1">Message</label>
            <textarea
              id="message"
              name="message"
              class="w-full resize-y bg-[#111113] border-outline-variant text-white rounded-xl p-4 focus:ring-2 focus:ring-secondary focus:border-transparent outline-none transition-all"
              placeholder="Comment pourrais-je vous aider?"
              rows="4"><?= @$_SESSION["message"] ?></textarea>
              <span class="text-red-500 font-medium text-xs"><?= @$_SESSION["error"]["message"] ?? "" ?></span>
          </div>
          <button
            class="w-full bg-primary-container text-white py-5 rounded-xl font-bold text-lg hover:shadow-[0_0_30px_rgba(77,40,185,0.5)] transition-all active:scale-95">
            Envoyer le message
          </button>
        </form>
      </div>
    </section>
  </main>
  <!-- Footer -->
  <footer
    class="bg-neutral-900 w-screen pt-16 pb-5 px-4 border-t border-white/5 md:px-[8%]">
    <div
      class="flex items-start gap-6 flex-row items-center md:px-8 max-md:px-4 justify-between">
      <div
        class="text-2xl flex flex-row gap-4 items-center justify-center font-bold tracking-tighter text-white font-['Space_Grotesk']">
        <div class="w-14 h-auto">
          <img
            src="/assets/images/logo.webp"
            class="w-full flter brightness-[0.5] saturate-[1.3]"
            alt="DEV WASFADE Logo" />
        </div>
        <span class="flex gap-0 leading-[1] flex-col justify-center gap-0">
          <span translate="no">DEV</span>
          <span>WASFADE</span>
        </span>
      </div>
      <div class="flex flex-col gap-2">
        <h3 class="mb-2 border-b-2 border-secondary/60 max-md:capitalize">NAVIGATION</h3>
        <ul class="nav-menu leading-relaxed text-on-surface-variant">
          <li>
            <a
              href="#hero"
              translate="no"
              class="hover:text-violet-400 pb-1 transition-colors duration-200 active:scale-95 transform transition-al">Home</a>
          </li>
          <li>
            <a
              href="#skills"
              class="hover:text-violet-400 pb-1 transition-colors duration-200 active:scale-95 transform transition-al"
              translate="no">Skills</a>
          </li>
          <li>
            <a
              href="#services"
              class="hover:text-violet-400 pb-1 transition-colors duration-200 active:scale-95 transform transition-al">Services</a>
          </li>
          <li>
            <a
              href="#contact"
              class="hover:text-violet-400 pb-1 transition-colors duration-200 active:scale-95 transform transition-al">Contact</a>
          </li>
        </ul>
      </div>
    </div>
    <div
      class="text-center mt-15 text-neutral-600 text-[10px] tracking-[0.2em] uppercase md:flex md:items-center md:flex-row md:justify-between">
      <p class="copyright mt-10">
        &copy; 2026 WASFADE TONOUKOIN| DÉVELOPPEMENT WEB & MOBILE. TOUS DROITS
        RÉSERVÉS.
      </p>
      <p class="author">WALFRECHERCHE LOWEEN</p>
    </div>
  </footer>

  <!-- Bouton de partage fixe -->
  <button
    id="partageBtn"
    class="fixed bottom-6 right-6 p-4 bg-indigo-600 hover:bg-indigo-700 text-white rounded-full shadow-lg transition-all duration-300 transform hover:scale-110 flex items-center justify-center z-50"
    title="Partager le site">
    <i class="ri-share-fill text-3xl"></i>
  </button>

  <!-- Partage zone -->
<div id="modalShare" class="hidden fixed inset-0 z-[100] flex items-center justify-center bg-black/60 backdrop-blur-md transition-all duration-300">
  
  <div class="p-8 h-auto rounded-3xl bg-[#1c1a23] border border-white/10 flex flex-col items-center shadow-2xl w-[90%] max-w-[500px] transform transition-all scale-100">
    
    <div class="w-full flex justify-between items-center mb-8">
      <h3 class="font-semibold text-xl text-white tracking-tight">Partager le lien via...</h3>
      <button onclick="closeModal()" class="text-gray-400 hover:text-white transition-colors">
        <i class="ri-close-line text-2xl"></i>
      </button>
    </div>

    <div class="grid grid-cols-4 gap-6 w-full">    
  <button class="group flex flex-col items-center gap-2 btnCopier" data-url="https://wa.me/moi">
        <div class="w-14 h-14 rounded-2xl bg-indigo-500/20 flex items-center justify-center text-indigo-400 group-hover:bg-indigo-500 group-hover:text-white transition-all duration-300 shadow-lg shadow-indigo-500/10">
          <i class="ri-file-copy-2-fill text-2xl"></i>
        </div>
        <span class="text-center font-light text-[11px] text-gray-400 group-hover:text-white">Copier</span>
      </button>
<button class="group flex flex-col items-center gap-2 btnFacebook" data-url="https://wa.me/moi">
  <div class="w-14 h-14 rounded-2xl bg-blue-600/10 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-lg group-hover:shadow-blue-600/20">
    <i class="ri-facebook-circle-fill text-2xl"></i>
  </div>
  
  <span class="text-center font-light text-[11px] text-gray-400 group-hover:text-white transition-colors">
    Facebook
  </span>
</button>  

      <button class="group flex flex-col items-center gap-2 btnWhatsapp" data-url="https://wa.me/moi">
        <div class="w-14 h-14 rounded-2xl bg-emerald-500/10 flex items-center justify-center text-emerald-500 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
          <i class="ri-whatsapp-fill text-2xl"></i>
        </div>
        <span class="text-center font-light text-[11px] text-gray-400 group-hover:text-white">WhatsApp</span>
      </button>

      <button class="group flex flex-col items-center gap-2 btnLinkedIn" data-url="https://wa.me/moi">
        <div class="w-14 h-14 rounded-2xl bg-blue-600/10 flex items-center justify-center text-blue-500 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
          <i class="ri-linkedin-box-fill text-2xl"></i>
        </div>
        <span class="text-center font-light text-[11px] text-gray-400 group-hover:text-white">LinkedIn</span>
      </button>

      <button class="group flex flex-col items-center gap-2 btnMessenger" data-url="https://wa.me/moi">
        <div class="w-14 h-14 rounded-2xl bg-blue-500/10 flex items-center justify-center text-blue-400 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300">
          <i class="ri-messenger-fill text-2xl"></i>
        </div>
        <span class="text-center font-light text-[11px] text-gray-400 group-hover:text-white">Messenger</span>
      </button>
    <button class="group flex flex-col items-center gap-2 btnInstagram" data-url="https://wa.me/moi">
      <div class="w-14 h-14 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-500 group-hover:bg-gradient-to-tr group-hover:from-[#f9ce34] group-hover:via-[#ee2a7b] group-hover:to-[#6228d7] group-hover:text-white transition-all duration-500 shadow-lg group-hover:shadow-pink-500/20">
        <i class="ri-instagram-fill text-2xl"></i>
      </div>
      
      <span class="text-center font-light text-[11px] text-gray-400 group-hover:text-white transition-colors">
        Instagram
      </span>
    </button> 
    <button class="group flex flex-col items-center gap-2 btnTiktok" data-url="https://wa.me/moi">
            <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/5 flex items-center justify-center text-gray-400 group-hover:bg-black group-hover:border-white/20 group-hover:text-white group-hover:shadow-[0_0_15px_rgba(255,255,255,0.15)] transition-all duration-300 ease-in-out">
              <i class="ri-tiktok-fill text-2xl"></i>
            </div>
      
          <span class="text-center font-light text-[11px] text-gray-400 group-hover:text-white transition-colors duration-300">
            TikTok
          </span>
    </button>    
    <button class="group flex flex-col items-center gap-2 btnX" data-url="https://wa.me/moi">
      <div class="w-14 h-14 rounded-2xl bg-black border border-white/10 flex items-center justify-center text-white 
                  group-hover:bg-white group-hover:text-black transition-all duration-300 
                  shadow-lg group-hover:shadow-white/10">
        <i class="ri-twitter-x-fill text-2xl"></i>
      </div>
      
      <span class="text-center font-light text-[11px] text-gray-400 group-hover:text-white transition-colors">
        X
      </span>
    </button>   

      </div>

    <p class="mt-8 text-gray-500 text-[10px] uppercase tracking-widest">Wasfade Tonoukoin • Portfolio</p>
  </div>
</div>


  <script>
    //mon Burger System
    let burger = document.getElementById("burger");
    let closer = document.getElementById("closer");

    burger.addEventListener("click", () => {
      document
        .querySelector(".navMobile")
        .classList.remove("translate-x-[-100%]");
    });

    closer.addEventListener("click", () => {
      document
        .querySelector(".navMobile")
        .classList.add("translate-x-[-100%]");
    });

    //changer le lien activé
    let liens = document.querySelectorAll(".lien");
    liens.forEach((lien) => {
      lien.addEventListener("click", () => {
        liens.forEach((l) => {
          l.classList.remove("text-lime-400", "border-lime-400");
          l.classList.add("text-neutral-400", "border-transparent");
        });
        lien.classList.remove("text-neutral-400", "border-transparent");
        lien.classList.add("text-lime-400", "border-lime-400");
      });
    });

    //share zone
    const partageBtn = document.getElementById("partageBtn");

    partageBtn.addEventListener("click",() => {
      document.getElementById("modalShare").classList.toggle("hidden");
      //le navigateur supporte le partage natif
    });

    function closeModal(){
      document.getElementById("modalShare").classList.add("hidden");
    }
    

  </script>

<?php 
    session_unset();
?>  
</body>

</html>
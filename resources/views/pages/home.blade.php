<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daus Photography | Professional Portfolio</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }

        .font-serif {
            font-family: 'Playfair Display', serif;
        }

        .glass {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .nav-transition {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hero-zoom {
            animation: zoom 20s infinite alternate;
        }

        @keyframes zoom {
            from {
                transform: scale(1);
            }

            to {
                transform: scale(1.1);
            }
        }
    </style>
</head>

<body class="bg-stone-50 text-stone-900">

    <!-- Navbar (Header) -->
    <x-nav-bar></x-nav-bar>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 bg-stone-950 z-[60] flex flex-col items-center justify-center gap-8 translate-x-full transition-transform duration-500">
        <button id="menu-close" class="absolute top-6 right-6 p-2 text-white">
            <i data-lucide="x" class="w-8 h-8"></i>
        </button>
        <a href="#" class="mobile-link text-3xl font-serif text-white hover:italic">Home</a>
        <a href="#gallery" class="mobile-link text-3xl font-serif text-white hover:italic">Gallery</a>
        <a href="#about" class="mobile-link text-3xl font-serif text-white hover:italic">About</a>
        <a href="#contact" class="mobile-link text-3xl font-serif text-white hover:italic">Contact</a>
        <div class="flex gap-6 mt-8">
            <i data-lucide="instagram" class="text-stone-400 hover:text-white cursor-pointer w-6 h-6"></i>
            <i data-lucide="facebook" class="text-stone-400 hover:text-white cursor-pointer w-6 h-6"></i>
            <i data-lucide="twitter" class="text-stone-400 hover:text-white cursor-pointer w-6 h-6"></i>
        </div>
    </div>

    <!-- Hero Section -->
    <!-- HERO SECTION -->
    <section class="relative min-h-screen w-full flex items-center justify-center overflow-hidden
         pt-24 md:pt-28">

        <div class="absolute inset-0 bg-stone-900">
            <div class="absolute inset-0 bg-cover bg-center hero-zoom opacity-60" style="background-image: url('{{ $heroImage }}');">
            </div>

            <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-stone-950/60"></div>
        </div>

        <div class="relative z-10 text-center px-4 max-w-4xl">
            <h1 class="text-5xl md:text-8xl font-serif text-white mb-6 leading-tight">
                Menangkap Momen <br>
                <span class="italic font-light">Abadi dalam Lensa</span>
            </h1>

            <p class="text-stone-200 text-lg md:text-xl font-light mb-10 max-w-2xl mx-auto">
                Fotografi profesional untuk arsitektur, editorial, dan portrait.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#gallery" class="px-8 py-4 bg-white text-stone-900 rounded-full font-semibold hover:bg-stone-100 transition">
                    Lihat Galeri
                </a>

                <a href="#contact" class="px-8 py-4 border border-white/40 text-white rounded-full hover:bg-white/10 transition">
                    Hubungi Saya
                </a>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-32 bg-stone-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-20 text-center">
                <h2 class="text-xs font-bold uppercase tracking-[0.5em] text-stone-400 mb-4">Koleksi Terpilih</h2>
                <h3 class="text-4xl md:text-5xl font-serif text-stone-900">Karya Terbaru</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 auto-rows-[300px]">
                <!-- Item 1 -->
                <div class="group relative overflow-hidden rounded-3xl bg-stone-200 cursor-pointer md:col-span-2 md:row-span-2">
                    <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&q=80&w=1200" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Landscape">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent opacity-0 group-hover:opacity-100 transition-opacity p-8 flex flex-col justify-end">
                        <span class="text-stone-300 text-xs uppercase tracking-widest mb-1">Landscape</span>
                        <h4 class="text-white text-2xl font-serif">Puncak Abadi</h4>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="group relative overflow-hidden rounded-3xl bg-stone-200 cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1511367461989-f85a21fda167?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Portrait">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent opacity-0 group-hover:opacity-100 transition-opacity p-6 flex flex-col justify-end">
                        <span class="text-stone-300 text-xs uppercase tracking-widest mb-1">Portrait</span>
                        <h4 class="text-white text-xl font-serif">Tatapan Jiwa</h4>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="group relative overflow-hidden rounded-3xl bg-stone-200 cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Architecture">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent opacity-0 group-hover:opacity-100 transition-opacity p-6 flex flex-col justify-end">
                        <span class="text-stone-300 text-xs uppercase tracking-widest mb-1">Architecture</span>
                        <h4 class="text-white text-xl font-serif">Garis Kota</h4>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="group relative overflow-hidden rounded-3xl bg-stone-200 cursor-pointer md:col-span-2">
                    <img src="https://images.unsplash.com/photo-1505144808419-1957a94ca61e?auto=format&fit=crop&q=80&w=1200" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Nature">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent opacity-0 group-hover:opacity-100 transition-opacity p-8 flex flex-col justify-end">
                        <span class="text-stone-300 text-xs uppercase tracking-widest mb-1">Nature</span>
                        <h4 class="text-white text-2xl font-serif">Aliran Hening</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact & Footer -->
    <x-footer></x-footer>
    <!-- Scripts -->
    <script type="importmap">
        {
  "imports": {
    "@google/genai": "https://esm.sh/@google/genai@^1.37.0",
    "react": "https://esm.sh/react@^19.2.3",
    "lucide-react": "https://esm.sh/lucide-react@^0.562.0",
    "react/": "https://esm.sh/react@^19.2.3/"
  }
}
</script>
    <script type="module">
        import {
            GoogleGenAI
        } from "@google/genai";

        // Initialize Icons
        lucide.createIcons();

        // Navbar Scroll Logic
        const nav = document.getElementById('main-nav');
        const logoIcon = document.getElementById('logo-icon');
        const logoText = document.getElementById('logo-text');
        const navLinks = document.querySelectorAll('.nav-link');
        const navCta = document.getElementById('nav-cta');
        const menuToggle = document.getElementById('menu-toggle');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.classList.add('glass', 'py-4');
                nav.classList.remove('py-5');
                logoIcon.classList.add('bg-stone-900', 'text-white');
                logoIcon.classList.remove('bg-white', 'text-stone-900');
                logoText.classList.add('text-stone-900');
                logoText.classList.remove('text-white', 'drop-shadow-md');
                navLinks.forEach(l => l.classList.add('text-stone-800'));
                navLinks.forEach(l => l.classList.remove('text-white'));
                navCta.classList.add('bg-stone-900', 'text-white');
                navCta.classList.remove('bg-white', 'text-stone-900');
                menuToggle.classList.add('text-stone-900');
                menuToggle.classList.remove('text-white');
            } else {
                nav.classList.remove('glass', 'py-4');
                nav.classList.add('py-5');
                logoIcon.classList.remove('bg-stone-900', 'text-white');
                logoIcon.classList.add('bg-white', 'text-stone-900');
                logoText.classList.remove('text-stone-900');
                logoText.classList.add('text-white', 'drop-shadow-md');
                navLinks.forEach(l => l.classList.remove('text-stone-800'));
                navLinks.forEach(l => l.classList.add('text-white'));
                navCta.classList.remove('bg-stone-900', 'text-white');
                navCta.classList.add('bg-white', 'text-stone-900');
                menuToggle.classList.remove('text-stone-900');
                menuToggle.classList.add('text-white');
            }
        });

        // Mobile Menu Logic
        const mobileMenu = document.getElementById('mobile-menu');
        const menuOpenBtn = document.getElementById('menu-toggle');
        const menuCloseBtn = document.getElementById('menu-close');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        const openMenu = () => mobileMenu.classList.remove('translate-x-full');
        const closeMenu = () => mobileMenu.classList.add('translate-x-full');

        menuOpenBtn.addEventListener('click', openMenu);
        menuCloseBtn.addEventListener('click', closeMenu);
        mobileLinks.forEach(link => link.addEventListener('click', closeMenu));

        // Gemini AI Integration
        const aiInput = document.getElementById('ai-input');
        const aiSubmit = document.getElementById('ai-submit');
        const aiContainer = document.getElementById('ai-response-container');
        const aiText = document.getElementById('ai-text');
        const aiLoading = document.getElementById('ai-loading');

        const askAI = async () => {
            const prompt = aiInput.value.trim();
            if (!prompt) return;

            // Show loading state
            aiContainer.classList.remove('hidden');
            aiText.innerText = '';
            aiLoading.classList.remove('hidden');
            aiInput.value = '';

            try {
                const ai = new GoogleGenAI({
                    apiKey: "API_KEY_PLACEHOLDER"
                }); // process.env.API_KEY is handled externally
                const response = await ai.models.generateContent({
                    model: 'gemini-3-flash-preview',
                    contents: prompt,
                    config: {
                        systemInstruction: "Anda adalah asisten AI profesional untuk fotografer bernama Daus. Jawab dengan nada puitis, elegan, namun informatif tentang teknik fotografi, gear, atau tips memotret. Maksimal 3 kalimat.",
                        maxOutputTokens: 150
                    }
                });

                aiLoading.classList.add('hidden');
                aiText.innerText = response.text || "Mohon maaf, lensa saya sedang berembun. Silakan tanya lagi nanti.";
            } catch (error) {
                console.error(error);
                aiLoading.classList.add('hidden');
                aiText.innerText = "Koneksi terputus. Silakan coba beberapa saat lagi.";
            }
        };

        aiSubmit.addEventListener('click', askAI);
        aiInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') askAI();
        });
    </script>
</body>

</html>
<header>
    <!-- NAVBAR -->
    <nav id="main-nav" class="fixed top-0 left-0 right-0 z-50 nav-transition px-6 py-5">
        <div class="max-w-7xl mx-auto flex items-center justify-between">

            <!-- Logo -->
            <a href="/" class="flex items-center gap-3 group">
                <div class="p-2 rounded-full bg-white text-stone-900 transition-colors">
                    <i data-lucide="camera" class="w-6 h-6"></i>
                </div>
                <span class="text-xl font-serif font-bold tracking-tight text-white drop-shadow-md">
                    Daus <span class="font-light italic">Photography</span>
                </span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                @php
                    $links = [
                        ['label' => 'Home', 'href' => '#'],
                        ['label' => 'Gallery', 'href' => '#gallery'],
                        ['label' => 'About', 'href' => '#about'],
                        ['label' => 'Contact', 'href' => '#contact'],
                    ];
                @endphp

                @foreach ($links as $link)
                    <a href="{{ $link['href'] }}"
                       class="text-sm font-medium uppercase tracking-widest text-white hover:opacity-70 transition">
                        {{ $link['label'] }}
                    </a>
                @endforeach

                <button class="px-6 py-2 rounded-full text-sm font-semibold bg-white text-stone-900 hover:bg-stone-100 transition">
                    Book Now
                </button>
            </div>

            <!-- Mobile Toggle -->
            <button id="menu-toggle" class="md:hidden p-2 text-white">
                <i data-lucide="menu" class="w-7 h-7"></i>
            </button>
        </div>
    </nav>

    <!-- MOBILE MENU OVERLAY -->
    <div id="mobile-menu"
         class="fixed inset-0 bg-stone-950 z-[60] flex flex-col items-center justify-center gap-8
                translate-x-full transition-transform duration-500 md:hidden">

        <button id="menu-close" class="absolute top-6 right-6 p-2 text-white">
            <i data-lucide="x" class="w-8 h-8"></i>
        </button>

        @foreach ($links as $link)
            <a href="{{ $link['href'] }}"
               class="text-3xl font-serif text-white hover:italic transition">
                {{ $link['label'] }}
            </a>
        @endforeach

        <div class="flex gap-6 mt-10">
            <i data-lucide="instagram" class="w-6 h-6 text-stone-400 hover:text-white cursor-pointer"></i>
            <i data-lucide="facebook" class="w-6 h-6 text-stone-400 hover:text-white cursor-pointer"></i>
            <i data-lucide="twitter" class="w-6 h-6 text-stone-400 hover:text-white cursor-pointer"></i>
        </div>
    </div>
</header>

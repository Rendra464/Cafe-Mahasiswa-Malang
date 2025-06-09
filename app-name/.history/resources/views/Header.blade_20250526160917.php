<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <header class="absolute top-6 left-1/2 transform -translate-x-1/2 z-50 w-[90%] max-w-6xl">
            <nav class="bg-white/10 backdrop-blur-md border border-white/20 px-6 py-3 rounded-full flex items-center justify-between text-white shadow-lg">
                <div class="text-xl font-extrabold tracking-wider"><img src="/Logo.png" alt="logo" class="w-full h-12 object-cover rounded-3xl"></div>
                <ul class="hidden md:flex gap-6 text-sm uppercase items-center">
                    <li><a href="/Menu-Coffee" class="hover:text-[#efebe2]">Menu</a></li>
                    <li><a href="/shop" class="hover:text-[#efebe2]">Shop</a></li>
                    <li><a href="/About" class="hover:text-[#efebe2]">About</a></li>
                    @if (Route::has('login'))
                        @auth
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="hover:text-[#efebe2]">Logout</button>
                            </form>
                        </li>
                        @else
                        <li><a href="{{ route('login') }}" class="hover:text-[#efebe2]">Log in</a></li>
                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}" class="hover:text-[#efebe2]">Register</a></li>
                            @endif
                        @endauth
                    @endif
                </ul>
                <div class="md:hidden">
                    <button id="menu-toggle" class="focus:outline-none">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </nav>
            <div id="mobile-menu" class="md:hidden mt-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl text-white shadow-lg px-6 py-4 hidden transition-all">
                <ul class="flex flex-col gap-4 text-sm font-semibold uppercase">
                    <li><a href="/Menu-Coffee" class="hover:text-[#efebe2]">Menu</a></li>
                    <li><a href="/shop" class="hover:text-[#efebe2]">Shop</a></li>
                    <li><a href="/About" class="hover:text-[#efebe2]">About</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="hover:text-[#efebe2]">Logout</button>
                                </form>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}" class="hover:text-[#efebe2]">Log in</a></li>
                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}" class="hover:text-[#efebe2]">Register</a></li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </header>
        <div class="relative z-10 flex items-center justify-center md:justify-start h-full text-white px-4 md:pl-[10rem]">
            <div class="text-center md:text-left">
                <h1 class="text-5xl md:text-3xl font-bold mb-4">Welcome!</h1>
                <h3 class="text-5xl md:text-5xl font-bold mb-4">Great Coffee.<br> No Compromise.</h3>
                <p class="text-lg md:text-xl mb-6 font-bold text-gray-200">From bean to cup — perfection in every sip, crafted with passion and precision.</p>
                <a href="#menu" class="inline-block bg-white hover:bg-gray-200 text-black px-4 py-2 rounded-[20px] font-semibold transition">
                    Menu
                </a>
            </div>
        </div>

    <script>
        const burgerIcon = document.getElementById('burger-icon');
        const fullscreenMenu = document.getElementById('fullscreen-menu');
        const closeBtn = document.getElementById('close-btn');
        const dropdown = document.querySelector('#fullscreen-menu .dropdown');
        const dropdownContent = dropdown.querySelector('.dropdown-content');
        const dropdownToggle = dropdown.querySelector('a');

        burgerIcon.addEventListener('click', () => {
            fullscreenMenu.classList.add('active');
        });

        closeBtn.addEventListener('click', () => {
            fullscreenMenu.classList.remove('active');
        });

        dropdown.addEventListener('click', (event) => {
            event.preventDefault();
            dropdown.classList.toggle('active');
        });

        dropdownContent.addEventListener('click', (event) => {
            event.stopPropagation();
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <section class="relative h-48 bg-cover bg-center">
        <div class="absolute inset-0 bg-white/40"></div>
        <header class="absolute top-6 left-1/2 transform -translate-x-1/2 z-50 w-[90%] max-w-6xl">
            <nav class="bg-[#073C21] backdrop-blur-md border border-white/20 px-6 py-3 rounded-full flex items-center justify-between text-white shadow-lg">
                <div class="text-xl font-extrabold tracking-wider"><img src="/Logo.png" alt="logo" class="w-full h-12 object-cover rounded-3xl"></div>
                <ul class="hidden md:flex gap-6 text-sm uppercase items-center">
                    <li class="relative">
                        <button id="menu-toggle" class="hover:text-[#efebe2] flex items-center gap-1">
                            Menu
                            <svg id="arrow-icon" class="w-4 h-4 transform transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <ul id="menu-dropdown" class="absolute left-0 mt-2 bg-white text-gray-800 rounded shadow-lg p-2 w-40 opacity-0 scale-95 transform transition-all duration-300 origin-top hidden z-50">
                            <li><a href="/Menu-Coffee" class="block px-4 py-2 hover:bg-gray-100">Coffee</a></li>
                            <li><a href="/Menu-Food" class="block px-4 py-2 hover:bg-gray-100">Food</a></li>
                        </ul>
                    </li>
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
                    <button id="menu-toggle-moile" class="focus:outline-none">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </nav>
            <div id="mobile-menu" class="md:hidden mt-2 bg-[#073C21] backdrop-blur-md border border-white/20 rounded-xl text-white shadow-lg px-6 py-4 hidden transition-all">
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
        </div>
    </section>

    <script>
        const toggleButton = document.getElementById('menu-toggle');
        const dropdown = document.getElementById('menu-dropdown');
        const arrowIcon = document.getElementById('arrow-icon');

        document.addEventListener('click', function (e) {
            const clickedInside = toggleButton.contains(e.target) || dropdown.contains(e.target);

            if (toggleButton.contains(e.target)) {
            const isOpen = !dropdown.classList.contains('hidden');
            dropdown.classList.toggle('hidden');

            if (!isOpen) {
                setTimeout(() => {
                dropdown.classList.remove('opacity-0', 'scale-95');
                dropdown.classList.add('opacity-100', 'scale-100');
                }, 10);
                arrowIcon.classList.add('rotate-180');
            } else {
                dropdown.classList.remove('opacity-100', 'scale-100');
                dropdown.classList.add('opacity-0', 'scale-95');
                arrowIcon.classList.remove('rotate-180');
            }
            } else if (!clickedInside) {
            dropdown.classList.add('hidden', 'opacity-0', 'scale-95');
            dropdown.classList.remove('opacity-100', 'scale-100');
            arrowIcon.classList.remove('rotate-180');
            }
        });

        document.getElementById('menu-toggle').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>

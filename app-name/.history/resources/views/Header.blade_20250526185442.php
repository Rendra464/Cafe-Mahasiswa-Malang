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
                    <li class="relative group">
                        <a href="#" class="hover:text-[#efebe2]">Menu</a>
                        <ul class="absolute left-0 mt-2 bg-white text-gray-800 rounded shadow-lg p-2 w-40 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition-all duration-300 scale-95 group-hover:scale-100 z-50">
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
                    <button id="menu-toggle" class="focus:outline-none">
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
        document.getElementById('menu-toggle').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

    </script>
</body>
</html>

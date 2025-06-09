<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <nav>
        
            @if (Route::has('login'))
                @auth
                    <a href="{{ route('logout') }}">Logout</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif
        </div>

        <div class="burger-icon" id="burger-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </div>
    </nav>

    <div id="fullscreen-menu">
        <div class="close-btn" id="close-btn">&times;</div>
        <a href="/Shop" class="font-bold text-[#FFFFFF] hover:text-[#444444]" style="font-family: Inter, sans-serif;">Shop Now</a>
        <a href="#" id="About-us" class="font-bold text-[#FFFFFF] hover:text-[#444444]" style="font-family: Inter, sans-serif;">About Us</a>
        <div class="dropdown">
            <a href="">Product</a>
            <div class="dropdown-content">
                <a href="/Menu-Coffee" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Coffee</a>
                <a href="/Menu-NonCoffee" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">NonCoffee</a>
                <a href="/Menu-ModernDrink" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">ModernDrink</a>
                <a href="/Menu-TraditionalDrink" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">TraditionalDrink</a>
                <a href="/Menu-Food" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Food</a>
                <a href="/Menu-Snack" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Snack</a>
            </div>
        </div>
        <a href="/Contact-Us" id="Contact-us" class="font-bold text-[#FFFFFF] hover:text-[#444444] mr-20" style="font-family: Inter, sans-serif;">Contact Us</a>
        @if (Route::has('login'))
            @auth
                <a href="{{ route('logout') }}">Logout</a>
            @else
                <a href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        @endif
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

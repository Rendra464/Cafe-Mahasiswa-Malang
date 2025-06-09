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

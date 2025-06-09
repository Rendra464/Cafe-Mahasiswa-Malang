<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <title>Cafe Mahasiswa Malang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans text-gray-900 bg-white">
    <section class="relative h-auto bg-cover bg-center" style="background-image: url('/LandingPage.JPEG');">
        <div class="absolute inset-0 bg-black/40"></div>
        <header class="absolute top-6 left-1/2 transform -translate-x-1/2 z-50 w-[90%] max-w-6xl">
            <nav class="bg-white/10 backdrop-blur-md border border-white/20 px-6 py-3 rounded-full flex items-center justify-between text-white shadow-lg">
                <div class="text-xl font-extrabold tracking-wider"><img src="/Logo.png" alt="logo" class="w-full h-12 object-cover rounded-3xl"></div>
                <ul class="hidden md:flex gap-6 text-sm uppercase items-center">
                    <li><a href="#" class="hover:text-[#efebe2]">Menu</a></li>
                    <li><a href="#" class="hover:text-[#efebe2]">Shop</a></li>
                    <li><a href="#" class="hover:text-[#efebe2]">About</a></li>
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
                <ul class="flex flex-col gap-4 text-sm uppercase">
                    <li><a href="#" class="hover:text-[#efebe2]">Menu</a></li>
                    <li><a href="#" class="hover:text-[#efebe2]">Shop</a></li>
                    <li><a href="#" class="hover:text-[#efebe2]">About</a></li>
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
                    Order Now
                </a>
            </div>
        </div>
    </section>

    <section class="bg-[#0B7941] py-20 text-white">
        <div class="max-w-screen-lg mx-auto grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="flex flex-col items-center p-6 rounded-lg transition duration-300 hover:scale-105 cursor-pointer" data-aos="fade-up">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-cup-hot" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M.5 6a.5.5 0 0 0-.488.608l1.652 7.434A2.5 2.5 0 0 0 4.104 16h5.792a2.5 2.5 0 0 0 2.44-1.958l.131-.59a3 3 0 0 0 1.3-5.854l.221-.99A.5.5 0 0 0 13.5 6zM13 12.5a2 2 0 0 1-.316-.025l.867-3.898A2.001 2.001 0 0 1 13 12.5M2.64 13.825 1.123 7h11.754l-1.517 6.825A1.5 1.5 0 0 1 9.896 15H4.104a1.5 1.5 0 0 1-1.464-1.175"/>
                    <path d="m4.4.8-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 3.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 3.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 3 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 4.4.8m3 0-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 6.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 6.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 6 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 7.4.8m3 0-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.252.382l-.019.025-.005.008-.002.002A.5.5 0 0 1 9.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 9.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 9 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 10.4.8"/>
                </svg>
                <p class="text-lg font-semibold pt-2">Coffee</p>
            </div>
            <div class="flex flex-col items-center p-6 rounded-lg transition duration-300 hover:scale-105 cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-cup-straw" viewBox="0 0 16 16">
                    <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82q0 .069-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87s-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A1 1 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278M9.768 4.607A14 14 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.3 3.3 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a6 6 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69s2.081-.441 2.438-.69c.042-.029.09-.094.102-.215l.852-8.03a6 6 0 0 1-.435.127 9 9 0 0 1-.89.17zM4.467 4.884s.003.002.005.006zm7.066 0-.005.006zM11.354 5a3 3 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222"/>
                </svg>
                <p class="text-lg font-semibold pt-2">Non Coffee</p>
            </div>
            <div class="flex flex-col items-center p-6 rounded-lg transition duration-300 hover:scale-105 cursor-pointer" data-aos="fade-up" data-aos-delay="300">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-fork-knife" viewBox="0 0 16 16">
                    <path d="M13 .5c0-.276-.226-.506-.498-.465-1.703.257-2.94 2.012-3 8.462a.5.5 0 0 0 .498.5c.56.01 1 .13 1 1.003v5.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5zM4.25 0a.25.25 0 0 1 .25.25v5.122a.128.128 0 0 0 .256.006l.233-5.14A.25.25 0 0 1 5.24 0h.522a.25.25 0 0 1 .25.238l.233 5.14a.128.128 0 0 0 .256-.006V.25A.25.25 0 0 1 6.75 0h.29a.5.5 0 0 1 .498.458l.423 5.07a1.69 1.69 0 0 1-1.059 1.711l-.053.022a.92.92 0 0 0-.58.884L6.47 15a.971.971 0 1 1-1.942 0l.202-6.855a.92.92 0 0 0-.58-.884l-.053-.022a1.69 1.69 0 0 1-1.059-1.712L3.462.458A.5.5 0 0 1 3.96 0z"/>
                </svg>
                <p class="text-lg font-semibold pt-2">Food</p>
            </div>
            <div class="flex flex-col items-center p-6 rounded-lg transition duration-300 hover:scale-105 cursor-pointer" data-aos="fade-up" data-aos-delay="400">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-egg-fried" viewBox="0 0 16 16">
                    <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    <path d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z"/>
                </svg>
                <p class="text-lg font-semibold pt-2">Snack</p>
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="max-w-screen-lg mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-[#0B7941] mb-10">Special Product</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="bg-[#efebe2] rounded-2xl shadow-lg p-6 text-center transition hover:scale-105 duration-300">
                    <img src="Menu-Items/Coffee/27 KSTG .png" alt="Espresso" class="w-full h-48 object-cover rounded-3xl">
                    <h3 class="text-xl font-semibold text-[#0B7941] mb-2 mt-2">KSTG</h3>
                    <p class="text-gray-600 text-sm font-semibold mb-4">Rp 8.000</p>
                    <button class="bg-[#0B7941] text-white px-4 py-2 rounded-full hover:bg-[#096636] transition duration-300">
                        Order Now
                    </button>
                </div>

                <div class="bg-[#efebe2] rounded-2xl shadow-lg p-6 text-center transition hover:scale-105 duration-300">
                    <img src="Menu-Items/Traditional-drink/40 wedang jahe gula aren.png" alt="Espresso" class="w-full h-48 object-cover rounded-3xl">
                    <h3 class="text-xl font-semibold text-[#0B7941] mb-2 mt-2">Ginger Tea with Palm Sugar</h3>
                    <p class="text-gray-600 text-sm font-semibold mb-4">Rp 10.000</p>
                    <button class="bg-[#0B7941] text-white px-4 py-2 rounded-full hover:bg-[#096636] transition duration-300">
                        Order Now
                    </button>
                </div>

                <div class="bg-[#efebe2] rounded-2xl shadow-lg p-6 text-center transition hover:scale-105 duration-300">
                    <img src="Menu-Items/Modern-Drink/62 vanilla latte ice.png" alt="Espresso" class="w-full h-48 object-cover rounded-3xl">
                    <h3 class="text-xl font-semibold text-[#0B7941] mb-2 mt-2">Vanilla Latte</h3>
                    <p class="text-gray-600 text-sm font-semibold mb-4">Rp 15.000</p>
                    <button class="bg-[#0B7941] text-white px-4 py-2 rounded-full hover:bg-[#096636] transition duration-300">
                        Order Now
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#0B7941] py-12 text-white text-center">
        <h2 class="text-2xl font-bold mb-8">Ready for Your Next Cup?</h2>
        <a href="#menu" class="bg-white text-[#0B7941] px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">Order Now</a>
    </section>

    <section class="bg-[#f5f5f5] text-gray-800 py-16 px-6">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Tentang Kami</h2>
            <p class="text-lg leading-relaxed">
                Kampung Mahasiswa Malang is a student-friendly platform designed to help you easily find meals, daily needs, and local products — all in one place. We aim to make student life in Malang easier, more convenient, and more connected.
            </p>
            <div class="mt-8 overflow-hidden rounded-xl shadow-md w-full max-w-xl mx-auto">
                <div id="carousel" class="flex transition-transform duration-300 ease-in-out w-full">
                    <img src="/LandingPage.JPEG" class="object-cover w-full shrink-0" alt="Campus 1">
                    <img src="https://source.unsplash.com/600x300/?students" class="object-cover w-full shrink-0" alt="Campus 2">
                    <img src="https://source.unsplash.com/600x300/?education" class="object-cover w-full shrink-0" alt="Campus 3">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 px-6">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4 text-gray-800">Our Location</h2>
            <p class="text-lg text-gray-600 mb-6">You can find us right in the heart of student activity in Malang. Tap the map below to get directions instantly.</p>
            <div class="overflow-hidden rounded-xl shadow-lg border border-gray-200">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d830.7511143213173!2d112.58358763164296!3d-7.922146438735385!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78810054622533%3A0x8bde03f6eace315!2sKAMPUNG%20MAHASISWA%20MALANG!5e0!3m2!1sid!2sid!4v1714199697951!5m2!1sid!2sid"
                    width="100%"
                    height="400"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>


    <footer class="bg-[#083d24] text-white py-10 text-center text-sm">
        <div class="max-w-screen-lg mx-auto px-4">
            <p class="font-medium">Kampung Mahasiswa Malang © 2025. All rights reserved.</p>
            <p class="mt-2 text-white/80">Follow us on our Social Media</p>

            <div class="grid grid-cols-3 md:grid-cols-3 gap-4 mt-6">
                <a href="#" class="flex flex-col items-center p-4 hover:scale-110 transition-transform duration-200 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                </a>
                <a href="#" class="flex flex-col items-center p-4 hover:scale-110 transition-transform duration-200 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                        <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                    </svg>
                </a>
                <a href="#" class="flex flex-col items-center p-4 hover:scale-110 transition-transform duration-200 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                    </svg>
                </a>
            </div>
        </div>
    </footer>

</body>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    const carousel = document.getElementById('carousel');
    const slides = carousel.children;
    let index = 0;

    setInterval(() => {
        index = (index + 1) % slides.length;
        carousel.style.transform = `translateX(-${index * 100}%)`;
    }, 500);

    AOS.init({
        duration: 1000,
        once: true
    });

    document.getElementById('menu-toggle').addEventListener('click', function () {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>


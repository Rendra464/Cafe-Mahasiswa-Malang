<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>Cafe Mahasiswa Malang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans text-gray-900 bg-white">
    <section class="relative h-auto bg-cover bg-center" style="background-image: url('/LandingPage.JPEG');">
        <div class="absolute inset-0 bg-black/40"></div>
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

    <section class="bg-[#0B7941] py-10 text-white">
        <div class="max-w-screen-lg mx-auto grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="flex flex-col items-center">
                
                <p class="text-lg font-semibold">Coffee</p>
            </div>
            <div class="flex flex-col items-center">
                <p class="text-lg font-semibold">Non Coffee</p>
            </div>
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-fork-knife" viewBox="0 0 16 16">
                    <path d="M13 .5c0-.276-.226-.506-.498-.465-1.703.257-2.94 2.012-3 8.462a.5.5 0 0 0 .498.5c.56.01 1 .13 1 1.003v5.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5zM4.25 0a.25.25 0 0 1 .25.25v5.122a.128.128 0 0 0 .256.006l.233-5.14A.25.25 0 0 1 5.24 0h.522a.25.25 0 0 1 .25.238l.233 5.14a.128.128 0 0 0 .256-.006V.25A.25.25 0 0 1 6.75 0h.29a.5.5 0 0 1 .498.458l.423 5.07a1.69 1.69 0 0 1-1.059 1.711l-.053.022a.92.92 0 0 0-.58.884L6.47 15a.971.971 0 1 1-1.942 0l.202-6.855a.92.92 0 0 0-.58-.884l-.053-.022a1.69 1.69 0 0 1-1.059-1.712L3.462.458A.5.5 0 0 1 3.96 0z"/>
                </svg>
                <p class="text-lg font-semibold">Food</p>
            </div>
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-egg-fried" viewBox="0 0 16 16">
                    <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    <path d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z"/>
                </svg>
                <p class="text-lg font-semibold">Snack</p>
            </div>
        </div>
    </section>

    <section id="menu" class="py-16 px-6 md:px-20 bg-gray-100">
        <h2 class="text-3xl font-bold text-center mb-10">Menu Favorit</h2>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach ([
                ['name' => 'Espresso', 'img' => 'https://images.unsplash.com/photo-1589308078056-f98c1c238d89?auto=format&fit=crop&w=500&q=80'],
                ['name' => 'Latte', 'img' => 'https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=500&q=80'],
                ['name' => 'Cappuccino', 'img' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=500&q=80'],
            ] as $item)
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <img src="{{ $item['img'] }}" alt="{{ $item['name'] }}" class="mx-auto mb-4 rounded-lg h-40 w-full object-cover">
                    <h3 class="text-xl font-semibold">{{ $item['name'] }}</h3>
                    <p class="text-gray-600 mt-2">Rp25.000</p>
                </div>
            @endforeach
        </div>
    </section>

</body>

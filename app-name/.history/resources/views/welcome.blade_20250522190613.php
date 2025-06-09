<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Mahasiswa Malang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-900 bg-white">
    <section class="relative h-auto bg-cover bg-center" style="background-image: url('/LandingPage.JPEG');">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 flex items-center justify-center md:justify-start h-full text-white px-4">
            <div class="text-center md:text-left">
                <h1 class="text-5xl md:text-4xl mb-4">Welcome!</h1>
                <h3 class="text-5xl md:text-5xl font-bold mb-4">Great Coffee.<br> No Compromise.</h3>
                <p class="text-lg md:text-xl mb-6 text-gray-200">From bean to cup — perfection in every sip, crafted with passion and precision.</p>
                <a href="#menu" class="inline-block bg-green-500 hover:bg-green-600 text-black px-6 py-3 rounded-lg font-semibold transition">
                    Order Now
                </a>
            </div>
        </div>
    </section>

    <section class="py-16 px-6 md:px-20 bg-white text-center">
        <h2 class="text-3xl font-bold mb-4">Tentang Kami</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
            Kami menyajikan kopi berkualitas tinggi dari petani lokal Indonesia. Dari biji ke cangkir, kami pastikan pengalaman kopi terbaik untukmu.
        </p>
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

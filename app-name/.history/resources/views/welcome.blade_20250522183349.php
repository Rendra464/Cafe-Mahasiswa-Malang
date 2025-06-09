<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Mahasiswa Malang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-900 bg-white">

    <!-- Hero Section -->
    <section class="bg-[url('https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=1500&q=80')] bg-cover bg-center h-screen text-white flex items-center justify-center">
        <div class="text-center backdrop-blur-sm bg-black/50 p-8 rounded-lg">
            <h1 class="text-5xl font-bold mb-4">Kopi Mantap</h1>
            <p class="text-lg mb-6">Cita rasa kopi terbaik dari biji pilihan</p>
            <a href="#menu" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg font-semibold transition">
                Lihat Menu
            </a>
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

    <section class="py-16 px-6 md:px-20 bg-yellow-500 text-white text-center">
        <h2 class="text-3xl font-bold mb-4">Hubungi Kami</h2>
        <p>📍 Jl. Kenangan No.10, Surabaya</p>
        <p>📞 0812-3456-7890</p>
        <p>📸 Instagram: @kopimantap</p>
    </section>

</body>

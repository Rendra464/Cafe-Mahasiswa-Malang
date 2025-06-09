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
                <i class="fa-solid fa-mug-hot"></i>
                <p class="text-lg font-semibold">Hot Coffee</p>
            </div>
            <div class="flex flex-col items-center">

            </div>
            <div class="flex flex-col items-center">

            </div>
            <div class="flex flex-col items-center">

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

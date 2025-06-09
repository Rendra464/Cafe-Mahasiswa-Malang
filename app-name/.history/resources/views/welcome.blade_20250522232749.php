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
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-cup-straw" viewBox="0 0 16 16">
                    <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82q0 .069-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87s-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A1 1 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278M9.768 4.607A14 14 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.3 3.3 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a6 6 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69s2.081-.441 2.438-.69c.042-.029.09-.094.102-.215l.852-8.03a6 6 0 0 1-.435.127 9 9 0 0 1-.89.17zM4.467 4.884s.003.002.005.006zm7.066 0-.005.006zM11.354 5a3 3 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222"/>
                </svg>
                <p class="text-lg font-semibold">Coffee</p>
            </div>
            <div class="flex flex-col items-center">
                <p class="text-lg font-semibold">Non Coffee</p>
            </div>
            <div class="flex flex-col items-center">
                <p class="text-lg font-semibold">Food</p>
            </div>
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-egg-fried" viewBox="0 0 16 16">
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

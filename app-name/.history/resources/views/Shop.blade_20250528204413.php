<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{asset('assets/js/product.js')}}"></script>
</head>

<body>
    @include('Header')
    <section class="py-16 px-6 bg-[#f9f9f9] min-h-screen">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-[#073C21] mb-10">Our Products</h2>
            <div id="product-list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8"></div>
        </div>
    </section>

    <div id="cart-icon" class="fixed bottom-5 right-5 z-50 bg-[#0B7941] text-white p-3 rounded-full shadow-lg">
        🛒 <span id="cart-count" class="text-sm ml-1">(0)</span>
    </div>

    <div id="mini-cart" class="fixed bottom-20 right-4 bg-white w-80 max-h-[80vh] overflow-y-auto rounded-xl shadow-lg p-4 border border-gray-200 z-50">
        <h3 class="text-lg font-bold text-[#073C21] mb-4">Your Cart <span id="cart-count" class="text-sm text-gray-600"></span></h3>
        <ul id="cart-items" class="space-y-4"></ul>
        <div class="mt-4 text-right font-semibold text-[#0B7941]">
            Total: <span id="cart-total">Rp 0</span>
        </div>
    </div>
</body>





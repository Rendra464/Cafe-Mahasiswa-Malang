<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{asset('assets/js/product.js')}}"></script>
</head>

<body>
    <section class="py-16 px-6 bg-[#f9f9f9] min-h-screen">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-[#073C21] mb-10">Our Products</h2>
            <div id="product-list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8"></div>
        </div>
    </section>

</body>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const productList = document.getElementById("product-list");

    products.dataproduct.forEach(product => {
        const card = document.createElement("div");
        card.className = "bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300";

        card.innerHTML = `
            <img src="${product.image}" alt="${product.productName}" class="w-full h-60 object-cover">
            <div class="p-4 flex flex-col justify-between h-full">
                <div>
                    <h3 class="text-xl font-semibold text-[#073C21] mb-1">${product.productName}</h3>
                    <p class="text-gray-600 text-sm mb-2">${product.category}</p>
                    <span class="text-lg font-bold text-[#0B7941]">${product.price} IDR</span>
                    <button class="bg-[#073C21] text-white px-4 py-1 rounded hover:bg-[#095e31] transition">Buy</button>
                </div>
                <div class="mt-4 flex justify-between items-center">

                </div>
            </div>
        `;

        productList.appendChild(card);
    });
});

</script>



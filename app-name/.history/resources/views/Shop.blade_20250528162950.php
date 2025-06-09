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

    <div id="cart-icon" class="fixed top-5 right-5 z-50 bg-[#0B7941] text-white p-3 rounded-full shadow-lg">
    🛒 <span id="cart-count" class="text-sm ml-1">(0)</span>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cartIcon = document.getElementById("cart-icon");
            const cartCount = document.getElementById("cart-count");

            // Update cart count on page load
            updateCartCount();

            // Function to update cart count
            function updateCartCount() {
                let cart = JSON.parse(localStorage.getItem("cart")) || [];
                cartCount.textContent = `(${cart.length})`;
            }

            // Add event listener to cart icon
            cartIcon.addEventListener("click", function () {
                alert("Cart clicked!"); // Placeholder for cart functionality
            });
        });
    </script>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const productList = document.getElementById("product-list");

    products.dataproduct.forEach(product => {
        const card = document.createElement("div");
        card.className = "bg-[#efebe2] rounded-2xl shadow-lg p-6 text-center transition hover:scale-105 duration-300";

        card.innerHTML = `
            <img src="${product.image}" alt="${product.productName}" class="w-full h-48 object-cover rounded-3xl">
            <h3 class="text-xl font-semibold text-[#0B7941] mb-2 mt-2">${product.productName}</h3>
            <p class="text-gray-600 text-sm font-semibold mb-4">${product.price}</p>
            <button class="bg-[#0B7941] text-white px-4 py-2 rounded-full hover:bg-[#096636] transition duration-300 order-btn">
                Order Now
            </button>
        `;

        const orderBtn = card.querySelector(".order-btn");
        orderBtn.addEventListener("click", () => addToCart(product));

        productList.appendChild(card);
    });

    function addToCart(product) {
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        cart.push(product);
        localStorage.setItem("cart", JSON.stringify(cart));
        alert(`${product.productName} added to cart!`);
    }
});

</script>



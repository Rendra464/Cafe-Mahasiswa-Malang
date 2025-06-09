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
        updateCartUI();

        const img = document.querySelector(`img[alt='${product.productName}']`);
        const clone = img.cloneNode(true);
        const cartIcon = document.getElementById("cart-icon");

        const imgRect = img.getBoundingClientRect();
        const cartRect = cartIcon.getBoundingClientRect();

        clone.style.position = "fixed";
        clone.style.left = imgRect.left + "px";
        clone.style.top = imgRect.top + "px";
        clone.style.width = imgRect.width + "px";
        clone.style.height = imgRect.height + "px";
        clone.style.transition = "all 0.8s ease-in-out";
        clone.style.zIndex = 9999;
        document.body.appendChild(clone);

        setTimeout(() => {
            clone.style.left = cartRect.left + "px";
            clone.style.top = cartRect.top + "px";
            clone.style.width = "30px";
            clone.style.height = "30px";
            clone.style.opacity = "0.5";
        }, 10);

        setTimeout(() => {
            document.body.removeChild(clone);
        }, 900);
    }

    function updateCartUI() {
        const cart = JSON.parse(localStorage.getItem("cart")) || [];
        const cartCount = document.getElementById("cart-count");
        const cartItems = document.getElementById("cart-items");
        const cartTotal = document.getElementById("cart-total");

  // Grouping product by name
    const productMap = new Map();
    cart.forEach(p => {
        const key = p.productName;
        if (productMap.has(key)) {
            productMap.get(key).qty += 1;
        } else {
            productMap.set(key, { ...p, qty: 1 });
        }
    });

  // Update UI
    cartCount.textContent = `(${cart.length})`;
    cartItems.innerHTML = "";
    let total = 0;

    productMap.forEach(product => {
        total += parseInt(product.price.replace('.', '')) * product.qty;

        const item = document.createElement("li");
        item.className = "flex gap-3 items-center border-b pb-3";

        item.innerHTML = `
        <img src="${product.image}" class="w-12 h-12 object-cover rounded">
        <div class="flex-1">
            <h4 class="text-sm font-semibold text-[#073C21]">${product.productName}</h4>
            <p class="text-xs text-gray-600">Rp ${product.price}</p>
            <div class="mt-1 flex items-center gap-2">
            <button class="qty-decrease bg-[#073C21] text-white w-6 h-6 rounded" data-name="${product.productName}">–</button>
            <span class="text-sm">${product.qty}</span>
            <button class="qty-increase bg-[#073C21] text-white w-6 h-6 rounded" data-name="${product.productName}">+</button>
            </div>
        </div>
        `;

        cartItems.appendChild(item);
    });

    cartTotal.textContent = `Rp ${total.toLocaleString('id-ID')}`;

  // Attach increase/decrease events
    document.querySelectorAll(".qty-increase").forEach(btn => {
        btn.addEventListener("click", () => {
        const name = btn.dataset.name;
        const p = cart.find(p => p.productName === name);
        if (p) cart.push(p);
        localStorage.setItem("cart", JSON.stringify(cart));
        updateCartUI();
        });
    });

    document.querySelectorAll(".qty-decrease").forEach(btn => {
        btn.addEventListener("click", () => {
        const name = btn.dataset.name;
        const index = cart.findIndex(p => p.productName === name);
        if (index !== -1) cart.splice(index, 1);
        localStorage.setItem("cart", JSON.stringify(cart));
        updateCartUI();
        });
    });
}


    document.getElementById("cart-icon").addEventListener("click", () => {
        const miniCart = document.getElementById("mini-cart");
        miniCart.classList.toggle("hidden");
        });
    });

    document.addEventListener("DOMContentLoaded", updateCartUI);
</script>



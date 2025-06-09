@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<style>
    .contact-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        position: relative;
    }

    .contact-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .contact-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .contact-card:hover::before {
        opacity: 1;
    }

    .contact-card .icon {
        font-size: 3rem;
        margin-bottom: 1rem;
        transition: transform 0.3s ease;
    }

    .contact-card:hover .icon {
        transform: scale(1.2);
    }

    .contact-card .btn {
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .contact-card .btn:hover {
        transform: scale(1.05);
    }
</style>
<nav class="flex items-center justify-between bg-[#0B7941] h-24 px-5">
    <div class="flex items-center">

        <img src="{{ URL('Logo.png') }}" alt="Logo" class="ml-5 w-12 h-12">
        <a href="/" class="ml-3 font-bold text-white text-xl" style="font-family: Inter, sans-serif;">Kampung Mahasiswa Malang</a>
    </div>


    <button class="block md:hidden focus:outline-none" id="menu-toggle">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </button>
</nav>

<div class="min-h-screen bg-gray-100 py-8">
    <div class="container mx-auto px-4">
    <div style="font-family: Inter, sans-serif; font-weight: bold;text-align:left;font-size:48px;margin-left: 100px;margin-top: -20px;background: -webkit-linear-gradient(#444444, #0B7941);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
        Product
    </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- WhatsApp Card -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <!-- WhatsApp Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" class="mx-auto mb-4">
                    <path fill="#25D366" d="M12 2a10 10 0 0 1 8.84 14.88l1.48 4.24-4.24-1.48A10 10 0 1 1 12 2zm0 2a8 8 0 0 0-6.82 12.16L3.16 20.84l4.68-1.56A8 8 0 1 0 12 4zm0 1.5a6.5 6.5 0 0 1 5.45 10.02l-1.07-3.07 2.24-2.24a6.5 6.5 0 1 1-6.62-4.71zm-1.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm3 0a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                </svg>
                <h2 class="text-xl font-semibold mb-2">WhatsApp</h2>
                <p class="text-gray-600 mb-4">Chat with us on WhatsApp for quick support.</p>
                <a href="https://wa.me/6282137453297" target="_blank" class="bg-green-500 text-white px-6 py-2 rounded-full hover:bg-green-600 transition duration-300">
                    Message Us
                </a>
            </div>

            <!-- Instagram Card -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <!-- Instagram Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" class="mx-auto mb-4">
                    <path fill="#E1306C" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
                <h2 class="text-xl font-semibold mb-2">Instagram</h2>
                <p class="text-gray-600 mb-4">Follow us on Instagram for updates and more.</p>
                <a href="https://www.instagram.com/kampungmahasiswamalang/" target="_blank" class="bg-pink-500 text-white px-6 py-2 rounded-full hover:bg-pink-600 transition duration-300">
                    Follow Us
                </a>
            </div>

            <!-- TikTok Card -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <!-- TikTok Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" class="mx-auto mb-4">
                    <path fill="#000000" d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
                </svg>
                <h2 class="text-xl font-semibold mb-2">TikTok</h2>
                <p class="text-gray-600 mb-4">Check out our TikTok for fun and engaging content.</p>
                <a href="https://www.tiktok.com/@kampungmahasiswamalang" target="_blank" class="bg-black text-white px-6 py-2 rounded-full hover:bg-gray-800 transition duration-300">
                    Follow Us
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.tailwindcss.com"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cards = document.querySelectorAll('.contact-card');

        cards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const tiltX = (y - rect.height / 2) / 10;
                const tiltY = (x - rect.width / 2) / 10;

                card.style.transform = `translateY(-10px) rotateX(${tiltX}deg) rotateY(${tiltY}deg)`;
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0) rotateX(0) rotateY(0)';
            });
        });
    });
</script>



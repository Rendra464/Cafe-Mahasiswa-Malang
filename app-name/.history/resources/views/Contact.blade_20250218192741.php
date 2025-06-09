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

<div class="min-h-screen bg-gray-100 py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-center mb-8">Contact Us</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <div class="text-4xl mb-4">📱</div>
                <h2 class="text-xl font-semibold mb-2">WhatsApp</h2>
                <p class="text-gray-600 mb-4">Chat with us on WhatsApp for quick support.</p>
                <a href="https://wa.me/yourwhatsappnumber" target="_blank" class="bg-green-500 text-white px-6 py-2 rounded-full hover:bg-green-600 transition duration-300">
                    Message Us
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <div class="text-4xl mb-4">📸</div>
                <h2 class="text-xl font-semibold mb-2">Instagram</h2>
                <p class="text-gray-600 mb-4">Follow us on Instagram for updates and more.</p>
                <a href="https://instagram.com/yourinstagramhandle" target="_blank" class="bg-pink-500 text-white px-6 py-2 rounded-full hover:bg-pink-600 transition duration-300">
                    Follow Us
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <div class="text-4xl mb-4">🎵</div>
                <h2 class="text-xl font-semibold mb-2">TikTok</h2>
                <p class="text-gray-600 mb-4">Check out our TikTok for fun and engaging content.</p>
                <a href="https://tiktok.com/@yourtiktokhandle" target="_blank" class="bg-black text-white px-6 py-2 rounded-full hover:bg-gray-800 transition duration-300">
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



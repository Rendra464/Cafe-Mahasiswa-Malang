@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<style>
    .contact-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        position: relative;
        padding: 20px;
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

    svg {
        transition: transform 0.3s ease, fill 0.3s ease;
    }

    svg:hover {
        transform: scale(1.1);
    }

    svg[fill="#25D366"]:hover {
        fill: #128C7E;
    }

    svg[fill="#E1306C"]:hover {
        fill: #C13584;
    }

    svg[fill="#000000"]:hover {
        fill: #333333;
    }

    @media (max-width: 1024px) {
        .grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .contact-card {
            width: 80%;
            margin: 0 auto;
        }
    }

    @media (max-width: 768px) {
        .grid {
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .contact-card {
            width: 90%;
            padding: 20px;
        }

        .contact-card .icon {
            font-size: 2.5rem;
        }

        .contact-card .btn {
            font-size: 1rem;
            padding: 12px 24px;
        }

        .contact-card h2 {
            font-size: 1.5rem;
        }

        .contact-card p {
            font-size: 1rem;
        }

        h1 {
            font-size: 2.5rem;
        }
    }

    @media (max-width: 480px) {
        .contact-card {
            width: 95%;
            padding: 15px;
        }

        .contact-card .icon {
            font-size: 2rem;
        }

        .contact-card h2 {
            font-size: 1.3rem;
        }

        .contact-card p {
            font-size: 0.95rem;
        }

        .contact-card .btn {
            font-size: 0.9rem;
            padding: 10px 20px;
        }

        h1 {
            font-size: 2rem;
        }
    }

</style>
<nav class="flex items-center justify-between bg-[#0B7941] h-20 px-5">
    <div class="flex items-center">
        <img src="{{ URL('Logo.png') }}" alt="Logo" class="w-12 h-12">
        <a href="/" class="ml-3 font-bold text-white text-xl" style="font-family: Inter, sans-serif;">Kampung Mahasiswa Malang</a>
    </div>
</nav>

<div class="min-h-screen bg-gray-100 py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-center mb-8">Contact Us</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- WhatsApp -->
            <div class="contact-card text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" class="mx-auto mb-4">
                    <path fill="#25D366" d="M12 2a10 10 0 0 1 8.84 14.88l1.48 4.24-4.24-1.48A10 10 0 1 1 12 2z"/>
                </svg>
                <h2 class="text-xl font-semibold mb-2">WhatsApp</h2>
                <p class="text-gray-600 mb-4">Chat with us on WhatsApp for quick support.</p>
                <a href="https://wa.me/6282137453297" target="_blank" class="bg-green-500 text-white px-6 py-2 rounded-full hover:bg-green-600 transition duration-300">
                    Message Us
                </a>
            </div>

            <!-- Instagram -->
            <div class="contact-card text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" class="mx-auto mb-4">
                    <path fill="#E1306C" d="M12 2.163c3.204 0 3.584.012 4.85.07..."/>
                </svg>
                <h2 class="text-xl font-semibold mb-2">Instagram</h2>
                <p class="text-gray-600 mb-4">Follow us on Instagram for updates and more.</p>
                <a href="https://www.instagram.com/kampungmahasiswamalang/" target="_blank" class="bg-pink-500 text-white px-6 py-2 rounded-full hover:bg-pink-600 transition duration-300">
                    Follow Us
                </a>
            </div>

            <!-- TikTok -->
            <div class="contact-card text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" class="mx-auto mb-4">
                    <path fill="#000000" d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45..."/>
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



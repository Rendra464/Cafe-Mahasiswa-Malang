@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<style>
    
</style>

@include('Header')

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

@include('Footer')

<script src="https://cdn.tailwindcss.com"></script>
<script>

</script>



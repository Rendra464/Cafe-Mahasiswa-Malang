<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@vite(['resources/sass/app.scss', 'resources/js/app.js'])


<style>
    #headercafe {
        display:block;
        width: 100%;
        height: 500px;
    }

    .custom-button {
        font-family: "Inter", sans-serif;
        background-color: #5F5D5E;
        border: none;
        width: 243px;
        height: 40px;
        color: white;
        /* padding: 10px 20px; */
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 20px;
        font-weight:Bold;
    }

    #Tittle{
        font-family: "Inter", sans-serif;
        color: #FFFFFF;
        font-size: 30px;
        text-align: center;
        font-weight: bold;
        cursor: pointer;
    }

    #Tittle:hover {
        color: #5F5D5E;
    }

    #TittleCafe{
        font-family: "Inter", sans-serif;
        color: #FFFFFF;
        font-size: 30px;
        text-align: center;
        font-weight: bold;
    }

    #TittlePage{
        font-family: "Inter", sans-serif;
        color: #5F5D5E;
        font-size: 30px;
        text-align: left;
        font-weight: bold;
        margin-left: 70px;
    }

    #Description{
        font-family: "Inter", sans-serif;
        font-size: 20px;
        text-align: center;
        color: #5F5D5E;
    }

    .custom-button {
        font-family: "Inter", sans-serif;
        background-color: #5F5D5E;
        border: none;
        width: 243px;
        height: 40px;
        color: white;
        /* padding: 10px 20px; */
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 20px;
        font-weight:Bold;
    }
    .custom-button:hover {
        background-color: #073C21;
    }

    .fa-brands{
        font-size:35px
    }

    .wrapper {
        display: flex;
        width: 100%;
        justify-content: space-evenly;
    }

    .card {
        width: 280px;
        height: 360px;
        border-radius: 15px !important;
        padding: 1.5rem;
        background: white;
        position: relative;
        display: flex;
        align-items: flex-end;
        transition: 0.4s ease-out;
        box-shadow: 0px 7px 10px rgba(0, 0, 0, 0.5);
    }

    .card:hover {
        transform: translateY(20px);
    }

    .card:hover::before {
        opacity: 1;
    }

    .card:hover .info {
        opacity: 1;
        transform: translateY(0px);
    }

    .card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        height: 100%;
        border-radius: 15px;
        background: rgba(0, 0, 0, 0.6);
        z-index: 2;
        transition: 0.5s;
        opacity: 0;
    }

    .card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        border-radius: 15px;
    }

    .info {
        margin-top:100px;
        position: relative;
        z-index: 3;
        color: white;
        opacity: 0;
        transform: translateY(30px);
        transition: 0.5s;
    }

    .info h1 {
        margin: 0px;
        font-weight: 700;
        font-size: 24px;
    }

    .info p {
        letter-spacing: 1px;
        font-size: 15px;
        margin-top: 8px;
    }

    .info button {
        padding: 0.6rem;
        outline: none;
        border: none;
        border-radius: 3px;
        background: white;
        color: black;
        font-weight: bold;
        cursor: pointer;
        transition: 0.4s ease;
    }

    .info button:hover {
        background: #0B7941;
        color: #FFFFFF;
    }

    .navbar {
        background-color: #f8f9fa;
    }
    .nav-link {
        color: #555;
    }
    .nav-link:hover {
        color: #000;
    }

    .ml-auto, .mx-auto {
        margin-left: auto !important;
    }

    .carousel-item img {
        width: 100%;
        height: auto;
    }

    .location-continer {
        display: flex;
        flex-wrap: wrap;
    }

    .image-container {
        width: 100%;
        max-width: 600px;
    }

    .map {
        width: 100%;
        max-width: 900px;
    }

    iframe{
        height: 220vh;
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(calc(-250px * 7))
        }
    }

    .cafe-slider {
        height: 170px;
        margin: auto;
        overflow: hidden;
        position: relative;
        width: auto;
        background-color: #F1F1F1;
        padding: 16px 0px;

        .slide-track {
            animation: scroll 40s linear infinite;
            display: flex;
            width: calc(250px * 14);
        }

        .slide {
            height: 100px;
            width: 250px;
            margin-left: 20px;
        }

        .slide:hover {
            filter: grayscale(0%);
        }
    }

    @media screen and (max-width: 900px){

        h1{
            font-size:20px;
        }
    }

    @media (max-width: 768px) {
        #TittleCafe {
            font-size: 1.5rem;
        }

        .wrapper {
            grid-template-columns: 1fr;
            padding: 0;
        }

        div[style*="display: flex;"] {
            flex-direction: column;
            align-items: center;
        }

        div[style*="width:40%"], div[style*="width:60%"] {
            width: 100% !important;
        }

        iframe {
            height: 300px;
        }
    }

    @media (max-width: 480px) {
        .custom-button {
            width: 100%;
            padding: 12px;
        }

        .card h1 {
            font-size: 18px;
        }

        .card p {
            font-size: 14px;
        }

        #about-section div {
            font-size: 16px !important;
        }
    }
</style>

@include('Header')
    <div class="relative w-full mx-auto" x-data="carousel()">
        <div class="relative overflow-hidden">
            <div class="flex transition-transform duration-500 ease-in-out" :style="{ transform: `translateX(-${currentIndex * 100}%)` }">
                <!-- Slide 1 -->
                <div class="w-full flex-shrink-0">
                    <img src="{{ URL('LandingPage.JPEG') }}" class="w-full object-cover" alt="First slide" id="headercafe">
                </div>
                <!-- Slide 2 -->
                <div class="w-full flex-shrink-0">
                    <img src="{{ URL('IMG_9792.JPEG') }}" class="w-full object-cover" alt="Second slide" id="headercafe">
                </div>
                <!-- Slide 3 -->
                <div class="w-full flex-shrink-0">
                    <img src="{{ URL('IMG_9793.JPEG') }}" class="w-full object-cover" alt="Third slide" id="headercafe">
                </div>
                <div class="w-full flex-shrink-0">
                    <img src="{{ URL('Header.png') }}" class="w-full object-cover" alt="Third slide" id="headercafe">
                </div>
                <div class="w-full flex-shrink-0">
                    <img src="{{ URL('IMG_9792.JPEG') }}" class="w-full object-cover" alt="Third slide" id="headercafe">
                </div>
            </div>

            <img src="{{ URL('Logo.png') }}" alt="Logo" class="absolute top-1/4 left-1/2 transform -translate-x-1/2 w-40 h-40">
            <div id="TittleCafe" class="absolute top-2/3 left-1/2 transform -translate-x-1/2 text-white text-2xl font-bold">KAMPUNG MAHASISWA MALANG</div>
        </div>

        <button @click="prevSlide" class="absolute top-1/3 left-5 transform -translate-y-1/2 bg-black bg-opacity-50 p-2 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
        <button @click="nextSlide" class="absolute top-1/3 right-5 transform -translate-y-1/2 bg-black bg-opacity-50 p-2 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </button>

        <div class="flex justify-center space-x-2 mt-4">
            <template x-for="(slide, index) in slides" :key="index">
                <button @click="goToSlide(index)" :class="{'bg-gray-800': currentIndex === index, 'bg-gray-400': currentIndex !== index}" class="w-3 h-3 rounded-full"></button>
            </template>
        </div>
    </div>

    <hr style="border: none; background-color: #0B7941; height: 5px; width: 20%; margin-top: 100px; margin-left: 50px;">
    <div style="font-family: Inter, sans-serif; font-weight: bold;text-align:left;font-size:48px; margin-left: 80px;background: -webkit-linear-gradient(#444444, #0B7941);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
        Our
    </div>
    <div style="font-family: Inter, sans-serif; font-weight: bold;text-align:left;font-size:48px;margin-left: 100px;margin-top: -20px;background: -webkit-linear-gradient(#444444, #0B7941);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
        Product
    </div>

    <div style="margin-bottom:80px"></div>

    <div class="wrapper">
        <div class="card">
            <img src="{{ URL('Coffee.jpg') }}" alt="">
            <div class="info">
                <h1>Coffee</h1>
                <p>Minuman yang mengandung kopi mencakup berbagai jenis</p>
                <button id="Coffee-button">Read More</button>
            </div>
        </div>

        <div class="card">
            <img src="{{ URL('NonCoffee.JPG') }}" alt="">
            <div class="info">
                <h1>Non Coffee</h1>
                <p>berbagai jenis minuman yang tidak mengandung kopi dan sering kali menawarkan rasa yang berbeda</p>
                <button id="NonCoffee-button">Read More</button>
            </div>
        </div>

        <div class="card">
            <img src="{{ URL('Modern Drink.jpg') }}" alt="">
            <div class="info">
                <h1>Modern Drink</h1>
                <p>berbagai jenis minuman yang sering kali inovatif dan trendi</p>
                <button id="Modern-button">Read More</button>
            </div>
        </div>
    </div>

    <div style="margin-top:100px"></div>

    <div class="wrapper">
        <div class="card">
            <img src="{{ URL('Traditional Drink.jpg') }}" alt="">
            <div class="info">
                <h1>Traditional Drink</h1>
                <p>minuman dengan campuran rempah yang khas dan bermanfaat</p>
                <button id="Traditional-button">Read More</button>
            </div>
        </div>

        <div class="card">
            <img src="{{ URL('Food.JPG') }}" alt="">
            <div class="info">
                <h1>Food</h1>
                <p> makanan ini mencakup pilihan-pilihan yang lebih substansial dan memuaskan</p>
                <button id="Food-button">Read More</button>
            </div>
        </div>

        <div class="card">
            <img src="{{ URL('Snack.jpg') }}" alt="">
            <div class="info">
                <h1>Snack</h1>
                <p>camilan ringan di antara jam makan utama</p>
                <button id="Snack-button">Read More</button>
            </div>
        </div>
    </div>

    <div style="margin-bottom:80px"></div>

    <section id="about-section">
        <div style="font-family: Inter, sans-serif; font-weight: bold;text-align:center;font-size:48px;background: -webkit-linear-gradient(#444444, #0B7941);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
            About Us
        </div>
        <div style="font-family:Josefin Sans;text-align:center;font-size:36px;color:#444444;font-weight: bold;font-style: italic;">
            Kampung Mahasiswa Malang
        </div>
        <div style="font-family:Josefin Sans;text-align:center;font-size:24px;color:#444444;margin: 20px 100px 0 100px;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        </div>
    </section>

    <div style="margin-bottom:80px"></div>

    <div class="cafe-slider">
        <div class="slide-track">
            <div class="slide">
                <img src="{{ URL('IMG_9793.JPEG') }}" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="{{ URL('IMG_9793.JPEG') }}" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="{{ URL('IMG_9793.JPEG') }}" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="{{ URL('IMG_9793.JPEG') }}" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="{{ URL('IMG_9793.JPEG') }}" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="{{ URL('IMG_9793.JPEG') }}" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="{{ URL('IMG_9793.JPEG') }}" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="{{ URL('IMG_9793.JPEG') }}" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="{{ URL('IMG_9793.JPEG') }}" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="{{ URL('IMG_9793.JPEG') }}" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="{{ URL('IMG_9793.JPEG') }}" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="{{ URL('IMG_9793.JPEG') }}" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="{{ URL('IMG_9793.JPEG') }}" height="100" width="250" alt="" />
            </div>
        </div>
    </div>

    <div style="margin-bottom:80px"></div>

    <div style="font-family: Inter, sans-serif; font-weight: bold;text-align:center;font-size:48px;background: -webkit-linear-gradient(#444444, #0B7941);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
        Location
    </div>

    <div style="margin-bottom:80px"></div>

    <div class="location-continer">
        <div class="image-container">
            <img src="{{ URL('IMG_9793.JPEG') }}" alt="Location Image" style="width: 100%; height: auto;">
            <div style="font-family: Josefin Sans; text-align: center; font-size: 32px; color: #444444; margin: 20px 0; font-weight: bold; font-style: italic;">
                Kampung Mahasiswa Malang
            </div>
            <div style="font-family: Josefin Sans; text-align: center; font-size: 24px; color: #444444; font-weight: bold;">
                Location Hours
            </div>
            <div style="font-family: Josefin Sans; text-align: center; font-size: 20px; color: #444444;">
                Sunday - Saturday
            </div>
            <div style="font-family: Josefin Sans; text-align: center; font-size: 20px; color: #444444;">
                11.00 - 23.00
            </div>
            <div style="font-family: Josefin Sans; text-align: center; font-size: 32px; color: #444444; margin: 20px 0; font-weight: bold; font-style: italic;">
                Address
            </div>
            <div style="font-family: Josefin Sans; text-align: center; font-size: 20px; color: #444444;">
                Jl. TPST, Jetak Lor, Mulyoagung,<br>Kec. Dau, Kabupaten Malang,<br>Jawa Timur 65151
            </div>
            <div style="font-family: Josefin Sans; text-align: center; font-size: 32px; color: #444444; margin: 20px 0; font-weight: bold; font-style: italic;">
                Phone Number
            </div>
            <div style="font-family: Josefin Sans; text-align: center; font-size: 24px; color: #444444;">
                +6221-3745-3297
            </div>
            <button class="custom-button" id="Maps-button" style="margin: 20px auto; display: block;">Visit Us</button>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d830.7511143213173!2d112.58358763164296!3d-7.922146438735385!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78810054622533%3A0x8bde03f6eace315!2sKAMPUNG%20MAHASISWA%20MALANG!5e0!3m2!1sid!2sid!4v1714199697951!5m2!1sid!2sid"
                width="100%" height="350" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div style="margin-bottom:200px"></div>

    @include('footer')


<script src="https://cdn.tailwindcss.com"></script>
<script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>

    <script>
        document.getElementById("Coffee-button").addEventListener("click", function() {
            window.location.href = "/Menu-Coffee";
        });

        document.getElementById("NonCoffee-button").addEventListener("click", function() {
            window.location.href = "/Menu-NonCoffee";
        });

        document.getElementById("Modern-button").addEventListener("click", function() {
            window.location.href = "/Menu-ModernDrink";
        });

        document.getElementById("Traditional-button").addEventListener("click", function() {
            window.location.href = "/Menu-TraditionalDrink";
        });

        document.getElementById("Food-button").addEventListener("click", function() {
            window.location.href = "/Menu-Food";
        });

        document.getElementById("Snack-button").addEventListener("click", function() {
            window.location.href = "/Menu-Snack";
        });


        function carousel() {
            return {
                currentIndex: 0,
                slides: [1, 2, 3, 4, 5],
                nextSlide() {
                    this.currentIndex = (this.currentIndex + 1) % this.slides.length;
                },
                prevSlide() {
                    this.currentIndex = (this.currentIndex - 1 + this.slides.length) % this.slides.length;
                },
                goToSlide(index) {
                    this.currentIndex = index;
                },
                startAutoSlide() {
                    setInterval(() => {
                        this.nextSlide();
                    }, 2000);
                }
            }
        }

        var mapsButton = document.getElementById("Maps-button");
        mapsButton.addEventListener("click", function() {
            window.location.href = "https://www.google.com/maps/place/KAMPUNG+MAHASISWA+MALANG/@-7.9219742,112.5813969,17z/data=!3m1!4b1!4m6!3m5!1s0x2e78810054622533:0x8bde03f6eace315!8m2!3d-7.9219742!4d112.5839718!16s%2Fg%2F11vqpc_p_4?entry=ttu";
        });
    </script>

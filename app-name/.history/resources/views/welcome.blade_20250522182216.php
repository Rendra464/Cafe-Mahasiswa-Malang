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

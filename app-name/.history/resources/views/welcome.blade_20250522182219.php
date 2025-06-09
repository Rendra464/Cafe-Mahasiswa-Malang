<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@vite(['resources/sass/app.scss', 'resources/js/app.js'])


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

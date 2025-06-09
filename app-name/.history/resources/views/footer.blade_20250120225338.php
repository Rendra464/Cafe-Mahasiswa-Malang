<style>
    
</style>

<div style="background-color: #073C21; padding: 20px 0;">
    <div style="display: flex; align-items: center; flex-wrap: wrap; gap: 20px; padding: 0 5%; max-width: 1200px; margin: auto;">
        <div style="display: flex; align-items: center; flex-grow: 1;">
            <img src="{{ URL('Logo.png') }}" alt="Logo" style="width: 80px; height: 80px;">
            <div id="TittleCafe" style="margin-left: 20px; color: white; font-size: 20px; font-weight: bold;">
                KAMPUNG<br>MAHASISWA MALANG
            </div>
        </div>
        <div id="TittleCafe" style="margin-left: auto; color: white; font-size: 18px; cursor: pointer;">About</div>
        <div id="TittleCafe" style="margin-left: 30px; color: white; font-size: 18px; cursor: pointer;">Support</div>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; padding: 40px 5%; max-width: 1200px; margin: auto;">
        <div style="color: white; font-size: 16px; line-height: 1.6; font-weight: 300;">
            Terima kasih telah singgah di sudut kecil kami yang penuh cerita dan aroma kopi dan minuman sederhana lainnya. Semoga nantinya setiap tegukan membawa kehangatan dan inspirasi. Sampai bertemu di momen-momen berikutnya.
        </div>
        <div style="display: flex; flex-direction: column; gap: 10px;">
            <a id="TittleCafe" class="about-us" style="color: white; font-size: 16px; cursor: pointer;">About Us</a>
            <a id="TittleCafe" class="Locations" style="color: white; font-size: 16px; cursor: pointer;">Locations</a>
            <a id="TittleCafe" class="Contact-us" style="color: white; font-size: 16px; cursor: pointer;">Contact Us</a>
        </div>
        <div style="display: flex; flex-direction: column; gap: 10px;">
            <a id="TittleCafe" style="color: white; font-size: 16px; cursor: pointer;">Privacy Policy</a>
            <a id="TittleCafe" style="color: white; font-size: 16px; cursor: pointer;">Terms</a>
        </div>
    </div>

    <div style="display: flex; align-items: center; justify-content: start; gap: 20px; padding: 10px 5%; max-width: 1200px; margin: auto;">
        <a href="https://www.instagram.com/kampungmahasiswamalang/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" style="fill: #FFFFFF;" viewBox="0 0 50 50">
                <path d="M16 3C8.832 3 3 8.832 3 16v18c0 7.168 5.832 13 13 13h18c7.168 0 13-5.832 13-13V16c0-7.168-5.832-13-13-13H16z"></path>
            </svg>
        </a>
        <a href="https://wa.me/6282137453297" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" style="fill: #FFFFFF;" viewBox="0 0 50 50">
                <path d="M25 2C12.318 2 2 12.318 2 25c0 3.96 1.023 7.854 2.963 11.29L2.037 46.73c-0.096 0.343-0.003 0.711 0.245 0.966 0.191 0.198 0.451 0.305 0.718 0.305 0.08 0 0.161-0.01 0.24-0.029l10.896-2.699C17.463 47.058 21.21 48 25 48c12.682 0 23-10.318 23-23S37.682 2 25 2z"></path>
            </svg>
        </a>
        <a href="https://www.tiktok.com/@kampungmahasiswamalang" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" style="fill: #FFFFFF;" viewBox="0 0 16 16">
                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"></path>
            </svg>
        </a>
    </div>
</div>


<script>
    var aboutUsElements = document.getElementsByClassName("about-us");
    for (var j = 0; j < aboutUsElements.length; j++) {
        aboutUsElements[j].addEventListener("click", function() {
            window.scrollTo({
                top: 1350,
                behavior: "smooth"
            });
        });
    }

    var aboutUsElements = document.getElementsByClassName("Locations");
    for (var j = 0; j < aboutUsElements.length; j++) {
        aboutUsElements[j].addEventListener("click", function() {
            window.scrollTo({
                top: 2000,
                behavior: "smooth"
            });
        });
    }

    var aboutUsElements = document.getElementsByClassName("Contact-us");
    for (var j = 0; j < aboutUsElements.length; j++) {
        aboutUsElements[j].addEventListener("click", function() {
            window.scrollTo({
                top: 1800,
                behavior: "smooth"
            });
        });
    }
</script>

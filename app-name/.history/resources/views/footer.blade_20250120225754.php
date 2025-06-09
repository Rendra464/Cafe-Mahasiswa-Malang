<style>
@media (max-width: 768px) {
    #TittleCafe {
        font-size: 14px;
    }

    svg {
        width: 24px;
        height: 24px;
    }

    div[style*="grid-template-columns"] {
        grid-template-columns: 1fr;
        text-align: center;
    }
}
</style>

<div style="background-color:#073C21;height:571px">
    <div style="display:flex;align-items: End;">
        <img src="{{ URL('Logo.png') }}" alt="Logo" class="ml-20 w-20 h-20" style=:margin-left:80px>
        <div id="TittleCafe" style="margin-left:20px;text-align:left;padding-top: 10%">KAMPUNG<br>MAHASISWA MALANG</div>
        <div id="TittleCafe" style="margin-left:30%">About</div>
        <div id="TittleCafe" style="margin-left:10.5%">Support</div>
    </div>

    <div style="display:flex;align-items: start;">
        <div id="TittleCafe" style="margin-left:5%;padding-top: 2%;font-weight:300; font-size:16px;text-align:left;width:34%">Terima kasih telah singgah di sudut kecil kami yang penuh cerita dan aroma kopi dan minuman sederhana lainnya. Semoga nantinya setiap tegukan membawa kehangatan dan inspirasi. Sampai bertemu di momen-momen berikutnya.</div>
        <div style="margin-left:25%; display: flex; flex-direction: column; gap: 20px;">
            <a id="TittleCafe" class="about-us" style="padding-top: 40%;font-weight:300; font-size:16px;text-align:left;width:100%;">About Us</a>
            <a id="TittleCafe" class="Locations" style="padding-top: 40%;font-weight:300; font-size:16px;text-align:left;width:100%;">Locations</a>
            <a id="TittleCafe" class="Contact-us" style="padding-top: 40%;font-weight:300; font-size:16px;text-align:left;width:100%;">Contact Us</a>
        </div>
        <div style="margin-left:11%; display: flex; flex-direction: column; gap: 20px;">
            <a id="TittleCafe" style="padding-top: 40%;font-weight:300; font-size:16px;text-align:left;width:100%;">Privacy Policy</a>
            <a id="TittleCafe" style="padding-top: 40%;font-weight:300; font-size:16px;text-align:left;width:100%;">Terms</a>
        </div>
    </div>
    <div class="desktop"></div>
    <div class="responsive"></div>
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

<style>
    .desktop {
        display:block;
    }

    .responsive {
        display:none;
    }
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

    .desktop {
        display:none !important;
    }

    .responsive {
        display:block !important;
    }
}
</style>
<div class="desktop">

</div>
<div class="responsive">

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

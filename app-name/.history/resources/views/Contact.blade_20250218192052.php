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

    .DesktopView{
        display:block !important;
    }

    .ResponsiveView{
        display:none !important;
    }

    .wrapper {
        display: flex;
        width: 100%;
        justify-content: space-evenly;
    }

    .card {
        width: 280px;
        height: 360px;
        border-radius: 15px;
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
        .Desktop{
            display:none !important;
        }

        .Responsive{
            display:block !important;
            width:100%;
            overflow-x: hidden;
        }

        h1{
            font-size:20px;
        }
    }
</style>


</div>

@include('Footer')

<script src="https://cdn.tailwindcss.com"></script>
<script>

</script>



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        /* CSS styles */
        #headercafe {
            width: 102%;
            height: 450px; /* Specify unit for height */
            margin-left:-10px;
            margin-top:-10px;
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
            padding: 10px 20px;
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

        .desktop{
            display:block !important;
        }

        .mobile900{
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

        @media screen and (max-width: 900px){
            .desktop{
                display:none !important;
            }

            .mobile900{
                display:block !important;
            }
        }


    </style>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <div style="text-align: center; position: relative;">
        <img src="{{ URL('Header.png') }}" alt="" id="headercafe">
        <img src="{{ URL('Logo.png') }}" alt="" style="position: absolute; top: 20%; left: 45%; width: 150px; height: 150px;">
        <div id="TittleCafe" style="position: absolute; top: 60%; left: 51%; transform: translate(-50%, 0%);">KAMPUNG MAHASISWA MALANG</div>

    </div>

    <div style="margin-top:50px"></div>
    <div id="Description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>

    <div style="margin-top:100px"></div>


    <div id="TittlePage" style="margin-left:10%">Menu</div>

    <div style="margin-top:50px"></div>
    <!-- <div style="text-align: center; position: relative;">
        <img src="{{ URL('Coffee.jpg') }}" alt="" style="width:300px;height:400px;border-radius:15px">
        <img src="{{ URL('Menu-Items/Modern-Drink/91 Ice Taro.png') }}" alt="" style="margin-left:150px;width:300px;height:400px;border-radius:15px">
        <img src="{{ URL('Modern Drink.jpg') }}" alt="" style="margin-left:150px;width:300px;height:400px;border-radius:15px">

        <button class="custom-button" id="Coffee-button" style="position: absolute; top: 94%; left: 12%;">Coffee</button>
        <button class="custom-button" id="NonCoffee-button" style="position: absolute; top: 94%; left: 42%;">Non-Coffee</button>
        <button class="custom-button" id="Modern-button" style="position: absolute; top: 94%; left: 72%;">Modern Drink</button>
    </div>

    <div style="text-align: center; position: relative; margin-top:100px">
        <img src="{{ URL('Traditional Drink.jpg') }}" alt="" style="width:300px;height:400px;border-radius:15px">
        <img src="{{ URL('Food.jpeg') }}" alt="" style="margin-left:150px;width:300px;height:400px;border-radius:15px">
        <img src="{{ URL('Snack.jpg') }}" alt="" style="margin-left:150px;width:300px;height:400px;border-radius:15px">

        <button class="custom-button" id="Traditional-button" style="position: absolute; top: 94%; left: 12%;">Traditional Drink</button>
        <button class="custom-button" id="Food-button" style="position: absolute; top: 94%; left: 42%;">Food</button>
        <button class="custom-button" id="Snack-button" style="position: absolute; top: 94%; left: 72%;">Snack</button>
    </div> -->

    <!-- <div style="justify-content:center;display:flex">

    </div> -->

    <div class="wrapper">
        <div class="card">
            <img src="{{ URL('Coffee.jpg') }}" alt="">
            <div class="info">
                <h1>Coffee</h1>
                <p>Lorem Ipsum is simply dummy text from the printing and typeseting industry</p>
                <button id="Coffee-button">Read More</button>
            </div>
        </div>

        <div class="card">
            <img src="{{ URL('Menu-Items/Modern-Drink/91 Ice Taro.png') }}" alt="">
            <div class="info">
                <h1>Non Coffee</h1>
                <p>Lorem Ipsum is simply dummy text from the printing and typeseting industry</p>
                <button id="NonCoffee-button">Read More</button>
            </div>
        </div>

        <div class="card">
            <img src="{{ URL('Modern Drink.jpg') }}" alt="">
            <div class="info">
                <h1>Modern Drink</h1>
                <p>Lorem Ipsum is simply dummy text from the printing and typeseting industry</p>
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
                <p>Lorem Ipsum is simply dummy text from the printing and typeseting industry</p>
                <button id="Traditional-button">Read More</button>
            </div>
        </div>

        <div class="card">
            <img src="{{ URL('Food.jpeg') }}" alt="">
            <div class="info">
                <h1>Food</h1>
                <p>Lorem Ipsum is simply dummy text from the printing and typeseting industry</p>
                <button id="Food-button">Read More</button>
            </div>
        </div>

        <div class="card">
            <img src="{{ URL('Snack.jpg') }}" alt="">
            <div class="info">
                <h1>Snack</h1>
                <p>Lorem Ipsum is simply dummy text from the printing and typeseting industry</p>
                <button id="Snack-button">Read More</button>
            </div>
        </div>
    </div>

    <div style="margin-top:200px"></div>
    <div style="border-bottom: 5px solid #0B7941; width:100%"></div>
    <div style="margin-top:100px"></div>

    <div id="TittlePage" style="margin-left:10%">About Us</div>

    <div style="text-align: center; position: relative;">
        <div style="text-align: left; display: flex; align-items: flex-start;margin-top:50px">
            <img src="{{ URL('Header.png') }}" alt="" style="margin-left:148px; margin-top: 50px;width:563px;height:400px;border-radius:15px">
            <div id="Description" style="margin-left:110px; margin-top:80px;text-align:right; width:563px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
        </div>

        <div style="text-align: left; display: flex; align-items: flex-start;">
            <div id="Description" style="margin-left:150px; margin-top:150px;margin-right:180px;width:560px;text-align:left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d830.7511143213173!2d112.58358763164296!3d-7.922146438735385!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78810054622533%3A0x8bde03f6eace315!2sKAMPUNG%20MAHASISWA%20MALANG!5e0!3m2!1sid!2sid!4v1714199697951!5m2!1sid!2sid" width="500" height="410" style="border:0;border-radius:15px;margin-top:70px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <button class="custom-button" id="Maps-button" style="position: absolute; top: 95%; left: 10%;">Visit Us</button>

    </div>

    <div style="margin-top:200px"></div>
    <div style="border-bottom: 5px solid #0B7941; width:100%"></div>
    <div style="margin-top:100px"></div>

    <div id="TittlePage" style="text-align: center">Contact Us</div>
    <div style="margin-top:200px"></div>

    <div style="background-color:#073C21;height:671px">
        <div style="display:flex;align-items: End;">
            <div id="TittleCafe" style="margin-left:5%;text-align:left;padding-top: 10%">KAMPUNG MAHASISWA MALANG</div>
            <div id="TittleCafe" style="margin-left:10%">About</div>
            <div id="TittleCafe" style="margin-left:10%">FAQ</div>
            <div id="TittleCafe" style="margin-left:10%">Contact Us</div>
        </div>

        <div style="display:flex;align-items: start;">
            <div id="TittleCafe" style="margin-left:5%;padding-top: 1%;font-weight:300; font-size:16px;text-align:left;width:50%">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            <div style="margin-left:15%">
                <div id="TittleCafe" class="menu" style="padding-top: 40%;font-weight:300; font-size:16px;text-align:left;width:100%">Menu</div>
                <div id="TittleCafe" class="about-us" style="padding-top: 40%;font-weight:300; font-size:16px;text-align:left;width:100%">About Us</div>
            </div>
            <div style="margin-left:13%">
                <div id="TittleCafe" style="padding-top: 70%;font-weight:300; font-size:16px;text-align:left;width:100%">FAQ</div>
            </div>
            <div style="margin-left:12%">
                <div id="TittleCafe" style="padding-top: 7%;font-weight:300; font-size:16px;text-align:left;width:100%">Buka: 11.00 - 23.00</div>
                <div id="TittleCafe" style="padding-top: 7%;font-weight:300; font-size:16px;text-align:left;width:100%">082137453297</div>
                <div id="TittleCafe" style="padding-top: 7%;font-weight:300; font-size:16px;text-align:left;width:100%">NiagaHoster</div>
                <div id="TittleCafe" style="padding-top: 7%;font-weight:300; font-size:16px;text-align:left;width:100%">Jl. TPST, Jetak Lor, Mulyoagung, Kec. Dau, Kabupaten Malang, Jawa Timur 65151</div>
            </div>
        </div>
        <!-- <div id="TittleCafe" style="margin-left:5%;text-align:left;padding-top: 10%">KAMPUNG MAHASISWA MALANG</div> -->
        <!-- <div id="TittleCafe" style="margin-left:5%;padding-top: 1%;font-weight:300; font-size:16px;text-align:left;width:35%">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div> -->
        <div style="margin-left:5%;text-align:left;padding-top: 2%;display:flex">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="33" height="33" style="fill:#FFFFFF" viewBox="0 0 30 30">
                <path d="M15,3C8.373,3,3,8.373,3,15c0,6.016,4.432,10.984,10.206,11.852V18.18h-2.969v-3.154h2.969v-2.099c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L19.73,18.18h-3.106v8.697 C22.481,26.083,27,21.075,27,15C27,8.373,21.627,3,15,3z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="33" height="33" style="fill:#FFFFFF;margin-left:20px" viewBox="0 0 50 50">
                <path d="M 5.9199219 6 L 20.582031 27.375 L 6.2304688 44 L 9.4101562 44 L 21.986328 29.421875 L 31.986328 44 L 44 44 L 28.681641 21.669922 L 42.199219 6 L 39.029297 6 L 27.275391 19.617188 L 17.933594 6 L 5.9199219 6 z M 9.7167969 8 L 16.880859 8 L 40.203125 42 L 33.039062 42 L 9.7167969 8 z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="33" height="33" style="fill:#FFFFFF;margin-left:20px" viewBox="0 0 50 50">
                <path d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="33" height="33" style="fill:#FFFFFF;margin-left:20px" viewBox="0 0 50 50">
                <path d="M25,2C12.318,2,2,12.318,2,25c0,3.96,1.023,7.854,2.963,11.29L2.037,46.73c-0.096,0.343-0.003,0.711,0.245,0.966 C2.473,47.893,2.733,48,3,48c0.08,0,0.161-0.01,0.24-0.029l10.896-2.699C17.463,47.058,21.21,48,25,48c12.682,0,23-10.318,23-23 S37.682,2,25,2z M36.57,33.116c-0.492,1.362-2.852,2.605-3.986,2.772c-1.018,0.149-2.306,0.213-3.72-0.231 c-0.857-0.27-1.957-0.628-3.366-1.229c-5.923-2.526-9.791-8.415-10.087-8.804C15.116,25.235,13,22.463,13,19.594 s1.525-4.28,2.067-4.864c0.542-0.584,1.181-0.73,1.575-0.73s0.787,0.005,1.132,0.021c0.363,0.018,0.85-0.137,1.329,1.001 c0.492,1.168,1.673,4.037,1.819,4.33c0.148,0.292,0.246,0.633,0.05,1.022c-0.196,0.389-0.294,0.632-0.59,0.973 s-0.62,0.76-0.886,1.022c-0.296,0.291-0.603,0.606-0.259,1.19c0.344,0.584,1.529,2.493,3.285,4.039 c2.255,1.986,4.158,2.602,4.748,2.894c0.59,0.292,0.935,0.243,1.279-0.146c0.344-0.39,1.476-1.703,1.869-2.286 s0.787-0.487,1.329-0.292c0.542,0.194,3.445,1.604,4.035,1.896c0.59,0.292,0.984,0.438,1.132,0.681 C37.062,30.587,37.062,31.755,36.57,33.116z"></path>
            </svg>
        </div>
        <!-- <button class="custom-button" id="Login-button" style="margin-top:40px;margin-left:5%;background-color:#FFFFFF; color:#5F5D5E">Login</button> -->
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <li class="nav-item dropdown" style="list-style: none;">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>

                    @else

                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif

                    @endauth
                </div>
            @endif
        </div>
    </div>
</body>




    <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
    <script src="https://mediafiles.botpress.cloud/b7d9a70e-1984-46c9-88e3-4905d3fb00ec/webchat/config.js" defer></script>
    <script>
        document.getElementById("Coffee-button").addEventListener("click", function() {
            window.location.href = "/Menu-Coffee";
        });

        document.getElementById("NonCoffee-button").addEventListener("click", function() {
            window.location.href = "/Menu-NonCoffee";
        });

        document.getElementById("Modern-button").addEventListener("click", function() {
            window.location.href = "/ModernDrink";
        });

        document.getElementById("Traditional-button").addEventListener("click", function() {
            window.location.href = "/TraditionalDrink";
        });

        document.getElementById("Food-button").addEventListener("click", function() {
            window.location.href = "/Food";
        });

        document.getElementById("Snack-button").addEventListener("click", function() {
            window.location.href = "/Snack";
        });


        var menuElements = document.getElementsByClassName("menu");
        for (var i = 0; i < menuElements.length; i++) {
            menuElements[i].addEventListener("click", function() {
                window.scrollTo({
                    top: 600,
                    behavior: "smooth"
                });
            });
        }

        var aboutUsElements = document.getElementsByClassName("about-us");
        for (var j = 0; j < aboutUsElements.length; j++) {
            aboutUsElements[j].addEventListener("click", function() {
                window.scrollTo({
                    top: 1800,
                    behavior: "smooth"
                });
            });
        }

        var mapsButton = document.getElementById("Maps-button");

        mapsButton.addEventListener("click", function() {

            window.location.href = "https://www.google.com/maps/place/KAMPUNG+MAHASISWA+MALANG/@-7.9219742,112.5813969,17z/data=!3m1!4b1!4m6!3m5!1s0x2e78810054622533:0x8bde03f6eace315!8m2!3d-7.9219742!4d112.5839718!16s%2Fg%2F11vqpc_p_4?entry=ttu";
        });
    </script>
</html>

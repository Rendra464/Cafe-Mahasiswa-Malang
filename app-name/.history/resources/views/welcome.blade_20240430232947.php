<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            background-color: #855C20;
        }

        .fa-brands{
            font-size:35px
        }

    </style>
</head>
<body>

    <div style="text-align: center; position: relative;">
        <img src="{{ URL('Header.png') }}" alt="" id="headercafe">
        <img src="{{ URL('Logo.png') }}" alt="" style="position: absolute; top: 20%; left: 45%; width: 150px; height: 150px;">
        <div id="TittleCafe" style="position: absolute; top: 60%; left: 51%; transform: translate(-50%, 0%);">KAMPUNG MAHASISWA MALANG</div>

    </div>
    <!-- <div style="text-align: center;">
        <img src="{{ URL('Header.png') }}" alt="" id="headercafe">
            <div class="col-sm-4 text-right custom-col">
                <img src="{{ URL('image 3.png') }}" alt="" style="margin-top:-150px;width:150px;height:150px;">
            </div>
        </img>
        <img src="{{ URL('image 3.png') }}" alt="" style="margin-top:-150px;width:150px;height:150px;">
    </div> -->

    <div style="margin-top:50px"></div>
    <div id="Description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>

    <div style="margin-top:100px"></div>

    <div style="text-align: center; position: relative;">
        <img src="{{ URL('Coffee.jpg') }}" alt="" style="width:300px;height:400px;border-radius:15px">
        <img src="{{ URL('Non Coffee.jpg') }}" alt="" style="margin-left:150px;width:300px;height:400px;border-radius:15px">
        <img src="{{ URL('Modern Drink.jpg') }}" alt="" style="margin-left:150px;width:300px;height:400px;border-radius:15px">

        <button class="custom-button" style="position: absolute; top: 94%; left: 12%;">Coffee</button>
        <button class="custom-button" style="position: absolute; top: 94%; left: 42%;">Non-Coffee</button>
        <button class="custom-button" style="position: absolute; top: 94%; left: 72%;">Modern Drink</button>
    </div>

    <div style="text-align: center; position: relative; margin-top:100px">
        <img src="{{ URL('Traditional Drink.jpg') }}" alt="" style="width:300px;height:400px;border-radius:15px">
        <img src="{{ URL('Food.jpeg') }}" alt="" style="margin-left:150px;width:300px;height:400px;border-radius:15px">
        <img src="{{ URL('Snack.jpg') }}" alt="" style="margin-left:150px;width:300px;height:400px;border-radius:15px">

        <button class="custom-button" style="position: absolute; top: 94%; left: 12%;">Traditional Drink</button>
        <button class="custom-button" style="position: absolute; top: 94%; left: 42%;">Food</button>
        <button class="custom-button" style="position: absolute; top: 94%; left: 72%;">Snack</button>
    </div>

    <div style="margin-top:200px"></div>
    <div style="border-bottom: 5px solid #0B7941; width:100%"></div>
    <div style="margin-top:100px"></div>

    <div id="TittlePage">About Us</div>

    <div style="text-align: center; position: relative;">
        <div style="text-align: left; display: flex; align-items: flex-start;">
            <img src="{{ URL('Header.png') }}" alt="" style="margin-left:148px; margin-top: 50px;width:563px;height:400px">
            <div id="Description" style="margin-left:110px; margin-top:150px;text-align:right; width:563px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
        </div>

        <!-- <div style="text-align: left">
            <img src="{{ URL('sam huget.png') }}" alt="" style="margin-left:50px; margin-top: 50px;width:650px">
            <div id="Description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
        </div> -->
        <!-- <div id="Description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div> -->
        <div style="text-align: left; display: flex; align-items: flex-start;">
            <div id="Description" style="margin-left:150px; margin-top:150px;margin-right:180px;width:560px;text-align:left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d830.7511143213173!2d112.58358763164296!3d-7.922146438735385!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78810054622533%3A0x8bde03f6eace315!2sKAMPUNG%20MAHASISWA%20MALANG!5e0!3m2!1sid!2sid!4v1714199697951!5m2!1sid!2sid" width="500" height="410" style="border:0;border-radius:15px;margin-top:70px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <button class="custom-button" style="position: absolute; top: 90%; left: 10%;">Visit Us</button>

    </div>

    <div style="margin-top:200px"></div>
    <div style="border-bottom: 5px solid #0B7941; width:100%"></div>
    <div style="margin-top:100px"></div>

    <div id="TittlePage" style="text-align: center">Contact Us</div>
    <div style="margin-top:200px"></div>

    <div style="background-color:#073C21;height:671px">
        <div id="TittleCafe" style="position: absolute; top: 740%; left: 5%;">KAMPUNG MAHASISWA MALANG</div>
        <div id="TittleCafe" style="position: absolute; top: 750%; left: 5%;font-weight:300; font-size:16px;text-align:left;width:40%">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
    </div>


</body>
    <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
    <script src="https://mediafiles.botpress.cloud/b7d9a70e-1984-46c9-88e3-4905d3fb00ec/webchat/config.js" defer></script>

</html>




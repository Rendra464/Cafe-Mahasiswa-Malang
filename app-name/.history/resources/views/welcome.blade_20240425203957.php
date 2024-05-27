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
            color: #632C17;
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
            color: #632C17;
            font-size: 30px;
            text-align: left;
            font-weight: bold;
            margin-left: 70px;
        }

        #Description{
            font-family: "Inter", sans-serif;
            font-size: 20px;
            text-align: center;
            color: #632C17;
        }

        .custom-button {
            font-family: "Inter", sans-serif;
            background-color: #632C17;
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

        }
        
    </style>
</head>
<body>

    <div style="text-align: center; position: relative;">
        <img src="{{ URL('Header.png') }}" alt="" id="headercafe">
        <div id="Tittle" style="position: absolute; top: 35%; left: 15%; transform: translate(-50%, 0%); font-size:24px">Home</div>
        <div id="Tittle" style="position: absolute; top: 35%; left: 30%; transform: translate(-50%, 0%); font-size:24px">Menu</div>
        <div id="Tittle" style="position: absolute; top: 35%; left: 65%; transform: translate(-50%, 0%); font-size:24px">Contact us</div>
        <div id="Tittle" style="position: absolute; top: 35%; left: 85%; transform: translate(-50%, 0%); font-size:24px">About us</div>
        <img src="{{ URL('image 3.png') }}" alt="" style="position: absolute; top: 20%; left: 45%; width: 150px; height: 150px;">
        <div id="TittleCafe" style="position: absolute; top: 60%; left: 51%; transform: translate(-50%, 0%);">SAM HUGET - KOPI OMAHAN</div>
        <button class="custom-button" style="position: absolute; top: 75%; left: 42%;">Lets Talk</button>
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
        <img src="{{ URL('hot.png') }}" alt="" style="margin-left:50px">
        <img src="{{ URL('food.png') }}" alt="" style="margin-left:150px">
        <img src="{{ URL('ice.png') }}" alt="" style="margin-left:150px">

        <button class="custom-button" style="position: absolute; top: 94%; left: 13%;">Hot</button>
        <button class="custom-button" style="position: absolute; top: 94%; left: 44%;">food</button>
        <button class="custom-button" style="position: absolute; top: 94%; left: 74%;">ice</button>
    </div>

    <div style="margin-top:200px"></div>
    <div style="border-bottom: 5px solid #632C17; width:100%"></div>
    <div style="margin-top:100px"></div>

    <div id="TittlePage">About Us</div>

    <div style="text-align: center; position: relative;">
        <div style="text-align: left; display: flex; align-items: flex-start;">
            <img src="{{ URL('sam huget.png') }}" alt="" style="margin-left:50px; margin-top: 50px;width:650px">
            <div id="Description" style="margin-left:50px; margin-top:150px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
        </div>

        <!-- <div style="text-align: left">
            <img src="{{ URL('sam huget.png') }}" alt="" style="margin-left:50px; margin-top: 50px;width:650px">
            <div id="Description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
        </div> -->
        <!-- <div id="Description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div> -->
        <div style="text-align: left; display: flex; align-items: flex-start;">
            <div id="Description" style="margin-left:150px; margin-top:150px;width:560px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.6533802862928!2d112.57717787476992!3d-8.136724991893203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e789faf6a34a83f%3A0x9314b04e867633de!2sSAM%20HUGET%20Kopi%20Omahan!5e0!3m2!1sid!2sid!4v1714044390272!5m2!1sid!2sid" width="400" height="300" style="border:1px;margin-top:100px;margin-left:200px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <button class="custom-button" style="position: absolute; top: 100%; left: 10%;">Visit Us</button>

    </div>

    <div style="margin-top:200px"></div>
    <div style="border-bottom: 5px solid #632C17; width:100%"></div>
    <div style="margin-top:100px"></div>

    <div id="TittlePage" style="text-align: center">Contact Us</div>
    <div style="margin-top:200px"></div>

    <div style="background-color:#632C17;height:671px">
        <i class="fa-brands fa-facebook" style="color:#FFFFFF"></i>
        <i class="fa-brands fa-whatsapp" style="color:#FFFFFF"></i>
        <i class="fa-brands fa-instagram" style="color:#FFFFFF"></i>
        <i class="fa-brands fa-twitter" style="color:#FFFFFF"></i>
    </div>


</body>
</html>

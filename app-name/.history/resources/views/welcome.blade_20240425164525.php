<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
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
        <div id="Tittle" style="position: absolute; top: 60%; left: 51%; transform: translate(-50%, 0%);">SAM HUGET - KOPI OMAHAN</div>
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

    <img src="{{ URL('hot.png') }}" alt="" style="margin-left:100px">
    <img src="{{ URL('food.png') }}" alt="" style="margin-left:200px">
    <img src="{{ URL('ice.png') }}" alt="" style="margin-left:200px">

    <button class="custom-button" style="position: absolute; top: 100%; left: 20%;">Hot</button>
    <button class="custom-button" style="position: absolute; top: 100%; left: 50%;">food</button>
    <button class="custom-button" style="position: absolute; top: 100%; left: 70%;">ice</button>

    <div style="margin-top:100px"></div>
</body>
</html>

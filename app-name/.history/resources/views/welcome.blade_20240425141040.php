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
        }

        #Description{
            font-family: "Inter", sans-serif;
            font-size: 20px;
            text-align: center;
            color: #632C17;
        }

        .custom-button {
            background-color: #632C17;
            border: none;
            width: 243px;
            height: 50px;
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
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div style="text-align: center; position: relative;">
        <img src="{{ URL('Header.png') }}" alt="" id="headercafe">
        <img src="{{ URL('image 3.png') }}" alt="" style="position: absolute; top: 20%; left: 45%; width: 150px; height: 150px;">
        <div id="Tittle" style="position: absolute; top: 60%; left: 51%; transform: translate(-50%, 0%);">SAM HUGET</div>
        <button class="custom-button" style="position: absolute; top: 70%; left: 47%;">Lets Talk</button>
    </div>
    <!-- <div style="text-align: center;">
        <img src="{{ URL('Header.png') }}" alt="" id="headercafe">
            <div class="col-sm-4 text-right custom-col">
                <img src="{{ URL('image 3.png') }}" alt="" style="margin-top:-150px;width:150px;height:150px;">
            </div>
        </img>
        <img src="{{ URL('image 3.png') }}" alt="" style="margin-top:-150px;width:150px;height:150px;">
    </div> -->

    <div id="Description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>

</body>
</html>

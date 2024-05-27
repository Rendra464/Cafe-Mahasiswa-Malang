<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* CSS styles */
        #headercafe {
            width: 102%;
            height: 450px; /* Specify unit for height */
            margin-left:-10px;
            margin-top:-10px;
        }

        #Tittle{
            /* font-family:Bold; */
            color: Black;
            font-size: 30px;
            text-align: center;
        }

        #Description{
            /* font-family: */
            font-size: 20px;
            text-align: center;
            color: #632C17;
        }
    </style>
</head>
<body>
    <!-- HTML markup -->
    <div style="position:relative;">
    <img src="{{ URL('Header.png') }}" alt="" id="headercafe">
    <img src="{{ URL('image3.png') }}" alt="" style="display: inline-block;">
</div>
    <div id="Tittle">SAM HUGET</div>
    <div id="Description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
</body>
</html>

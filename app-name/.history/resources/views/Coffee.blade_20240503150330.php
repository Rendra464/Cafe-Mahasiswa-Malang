<link rel = "stylesheet" href = "app.css">
<style>
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
</style>

<div id="Tittle" style="color: #5F5D5E;margin-top:50px">KAMPUNG MAHASISWA MALANG</div>
<div id="Description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
    <body>
        <div class="wrapper">
        <div id="search-container">
            <input
            type="search"
            id="search-input"
            placeholder="Search product name here.."
            />
            <button id="search">Search</button>
        </div>
        <div id="buttons">
            <button class="button-value" onclick="filterProduct('all')">All</button>
            <button class="button-value" onclick="filterProduct('Topwear')">
            Topwear
            </button>
            <button class="button-value" onclick="filterProduct('Bottomwear')">
            Bottomwear
            </button>
            <button class="button-value" onclick="filterProduct('Jacket')">
            Jacket
            </button>
            <button class="button-value" onclick="filterProduct('Watch')">
            Watch
            </button>
        </div>
        <div id="products"></div>
        </div>
        <!-- Script -->
    </body>

<script src="app.js"></script>
<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/b7d9a70e-1984-46c9-88e3-4905d3fb00ec/webchat/config.js" defer></script>

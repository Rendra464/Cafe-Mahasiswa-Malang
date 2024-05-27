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

        /* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

* {
  font-family: "Poppins", sans-serif;
}

body {
  background: #f1f1f1 !important;
}

body .container {
  max-width: 1100px;
}

#filter-buttons button {
  border-radius: 3px;
  background: #fff;
  border-color: transparent;
}

#filter-buttons button:hover {
  background: #ddd;
}

#filter-buttons button.active {
  color: #fff;
  background: #6c757d;
}

#filterable-cards .card {
  width: 15rem;
  border: 2px solid transparent;
}

#filterable-cards .card.hide {
  display: none;
}

@media (max-width: 600px) {
  #filterable-cards {
    justify-content: center;
  }

  #filterable-cards .card {
    width: calc(100% / 2 - 10px);
  }
}
</style>

<div id="Tittle" style="color: #5F5D5E;margin-top:50px">KAMPUNG MAHASISWA MALANG</div>
<div id="Description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Filterable Image Gallery Bootstrap | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="script.js" defer></script>
  </head>
  <body>
    <div class="container">
      <!-- Images Filter Buttons Section -->
      <div class="row mt-5" id="filter-buttons">
        <div class="col-12">
          <button class="btn mb-2 me-1 active" data-filter="all">Show all</button>
          <button class="btn mb-2 mx-1" data-filter="nature">Nature</button>
          <button class="btn mb-2 mx-1" data-filter="cars">Cars</button>
          <button class="btn mb-2 mx-1" data-filter="people">People</button>
        </div>
      </div>

      <!-- Filterable Images / Cards Section -->
      <div class="row px-2 mt-4 gap-3" id="filterable-cards">
        <div class="card p-0" data-name="nature">
          <!-- <img src="images/nature-1.jpg" alt="img"> -->
          <div class="card-body">
            <h6 class="card-title">Mountains</h6>
            <p class="card-text">Lorem ipsum dolor..</p>
          </div>
        </div>
        <div class="card p-0" data-name="nature">
          <!-- <img src="images/nature-2.jpg" alt="img"> -->
          <div class="card-body">
            <h6 class="card-title">Lights</h6>
            <p class="card-text">Lorem ipsum dolor..</p>
          </div>
        </div>
        <div class="card p-0" data-name="nature">
          <!-- <img src="images/nature-3.jpg" alt="img"> -->
          <div class="card-body">
            <h6 class="card-title">Nature</h6>
            <p class="card-text">Lorem ipsum dolor..</p>
          </div>
        </div>
        <div class="card p-0" data-name="cars">
          <!-- <img src="images/car-1.jpg" alt="img"> -->
          <div class="card-body">
            <h6 class="card-title">Retro</h6>
            <p class="card-text">Lorem ipsum dolor..</p>
          </div>
        </div>
        <div class="card p-0" data-name="cars">
          <!-- <img src="images/car-2.jpg" alt="img"> -->
          <div class="card-body">
            <h6 class="card-title">Fast</h6>
            <p class="card-text">Lorem ipsum dolor..</p>
          </div>
        </div>
        <div class="card p-0" data-name="cars">
          <!-- <img src="images/car-3.jpg" alt="img"> -->
          <div class="card-body">
            <h6 class="card-title">Classic</h6>
            <p class="card-text">Lorem ipsum dolor..</p>
          </div>
        </div>
        <div class="card p-0" data-name="people">
          <!-- <img src="images/people-1.jpg" alt="img"> -->
          <div class="card-body">
            <h6 class="card-title">Men</h6>
            <p class="card-text">Lorem ipsum dolor..</p>
          </div>
        </div>
        <div class="card p-0" data-name="people">
            <div></div>
          <!-- <img src="images/people-2.jpg" alt="img"> -->
          <div class="card-body">
            <h6 class="card-title">Girl</h6>
            <p class="card-text">Lorem ipsum dolor..</p>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>



<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/b7d9a70e-1984-46c9-88e3-4905d3fb00ec/webchat/config.js" defer></script>

<script>
    // Select relevant HTML elements
const filterButtons = document.querySelectorAll("#filter-buttons button");
const filterableCards = document.querySelectorAll("#filterable-cards .card");

// Function to filter cards based on filter buttons
const filterCards = (e) => {
    document.querySelector("#filter-buttons .active").classList.remove("active");
    e.target.classList.add("active");

    filterableCards.forEach(card => {
        // show the card if it matches the clicked filter or show all cards if "all" filter is clicked
        if(card.dataset.name === e.target.dataset.filter || e.target.dataset.filter === "all") {
            return card.classList.replace("hide", "show");
        }
        card.classList.add("hide");
    });
}

filterButtons.forEach(button => button.addEventListener("click", filterCards));
</script>

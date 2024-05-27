let products = {
    dataSnack:[
    {
        productName: "Kentang Goreng",
        category: "Snack",
        price: "10.000",
        image: "Menu-Items/Snack/80 kentang goreng.png",
    },
    {
        productName: "Pisang Nugget",
        category: "Snack",
        price: "10.000",
        image: "Menu-Items/Snack/81 pisang nugget .png",
    },
    {
        productName: "Pentol",
        category: "Snack",
        price: "10.000",
        image: "Menu-Items/Snack/82 pentol.png",
    },
    {
        productName: "Nugget",
        category: "Snack",
        price: "10.000",
        image: "Menu-Items/Snack/83 nugget.png",
    },
    {
        productName: "Sosis",
        category: "Snack",
        price: "10.000",
        image: "Menu-Items/Snack/84 sosis.png",
    },
    {
        productName: "Tahu Walik",
        category: "Snack",
        price: "10.000",
        image: "Menu-Items/Snack/85 tahu walik.png",
    },
    {
        productName: "Roti Bakar",
        category: "Snack",
        price: "10.000",
        image: "Menu-Items/Snack/86 roti bakar.png",
    },
    {
        productName: "Cireng",
        category: "Snack",
        price: "10.000",
        image: "Menu-Items/Snack/87 cireng.png",
    },
    {
        productName: "Tahu Bakso",
        category: "Snack",
        price: "10.000",
        image: "Menu-Items/Snack/88 tahu bakso.png",
    },
    {
        productName: "Tempura",
        category: "Snack",
        price: "10.000",
        image: "Menu-Items/Snack/89 tempura.png",
    },
    {
        productName: "Pisang Goreng Ori",
        category: "Snack",
        price: "10.000",
        image: "Menu-Items/Snack/80 kentang goreng.png",
    },
    {
        productName: "Telur",
        category: "Topping",
        price: "10.000",
        image: "Menu-Items/Snack/80 kentang goreng.png",
    },
    {
        productName: "Keju",
        category: "Topping",
        price: "10.000",
        image: "Menu-Items/Snack/80 kentang goreng.png",
    },
    ],
};


for (let i of products.dataSnack) {
    //Create Card
    let card = document.createElement("div");
    //Card should have category and should stay hidden initially
    card.classList.add("card", i.category, "hide");
    card.addEventListener('click', function(){
        // debugger
        let productName = i.productName.toLowerCase();
        let cards = document.querySelectorAll('.card');
        for(let card of cards){
            let cardProductName = card.querySelector('.product-name').innerText.toLowerCase();
            if (cardProductName === productName) {
                let overlays = document.getElementsByClassName('overlay');
                for (let overlay of overlays) {
                    overlay.style.visibility = "visible";
                    let popup = document.getElementsByClassName('popup');
                    for (let showpopup of popup){
                        showpopup.style.visibility = "visible";
                        showpopup.style.opacity = 1;
                        showpopup.querySelector('.ProductName').innerText = cardProductName;
                    }
                }
                let imageMenuDiv = document.querySelector('.ImageMenu');
                imageMenuDiv.innerHTML = '';

                // Append new image to ImageMenu
                let imgContainer = document.createElement("div");
                let image = document.createElement("img");
                image.setAttribute("src", i.image);
                imgContainer.appendChild(image);
                imageMenuDiv.appendChild(imgContainer);
                break;
            }

        }

        let closeButton = document.querySelector('.popup .x');

        // Add a click event listener to the close button
        closeButton.addEventListener('click', function(event) {
            // Prevent the default behavior of the anchor tag (page refresh)
            event.preventDefault();

            // Find the closest popup element and hide it
            let popup = this.closest('.popup');
            popup.style.visibility = "hidden";
            popup.style.opacity = 0;

            let overlays = document.getElementsByClassName('overlay');
            for (let overlay of overlays) {
                overlay.style.visibility = "hidden";
            }
        });
    });

    //image div
    let imgContainer = document.createElement("div");
    imgContainer.classList.add("image-container");
    //img tag
    let image = document.createElement("img");
    image.setAttribute("src", i.image);
    imgContainer.appendChild(image);
    card.appendChild(imgContainer);
    //container
    let container = document.createElement("div");
    container.classList.add("container");
    //product name
    let name = document.createElement("h5");
    name.classList.add("product-name");
    name.id = "Description";
    // name.style.textAlign = "left";
    name.innerText = i.productName.toUpperCase();
    container.appendChild(name);
    //price
    let price = document.createElement("h6");
    price.id = "Description";
    // price.style.textAlign = "left"
    price.innerText = "Rp. " + i.price;
    container.appendChild(price);

    card.appendChild(container);
    document.getElementById("products").appendChild(card);
}


//parameter passed from button (Parameter same as category)
function filterProduct(value) {
    // console.log(value);
    // console.log(products);
    //Button class code
    let buttons = document.querySelectorAll(".button-value");
    buttons.forEach((button) => {
    //check if value equals innerText
    if (value.toUpperCase() == button.innerText.toUpperCase()) {
        button.classList.add("active");
    } else {
        button.classList.remove("active");
    }
    });

    //select all cards
    let elements = document.querySelectorAll(".card");
    //loop through all cards
    elements.forEach((element) => {
    //display all cards on 'all' button click
    if (value == "all") {
        element.classList.remove("hide");
    } else {
            //Check if element contains category class
        if (element.classList.contains(value)) {
            //display element based on category
            element.classList.remove("hide");
        } else {
            //hide other elements
            element.classList.add("hide");
        }
    }
    });
}

//Search button click
document.getElementById("search").addEventListener("click", () => {
    //initializations
    let searchInput = document.getElementById("search-input").value;
    let elements = document.querySelectorAll(".product-name");
    let cards = document.querySelectorAll(".card");

    //loop through all elements
    elements.forEach((element, index) => {
    //check if text includes the search value
    if (element.innerText.includes(searchInput.toUpperCase())) {
        //display matching card
        cards[index].classList.remove("hide");
    } else {
        //hide others
        cards[index].classList.add("hide");
    }
    });
});

//Initially display all products
window.onload = () => {
    filterProduct("all");
};

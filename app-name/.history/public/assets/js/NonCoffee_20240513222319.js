let products = {
    datanonkopi:[
    {
        productName: "Strawberry Milkshake",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/32 milkshake strawberry.png",
    },
    {
        productName: "Chocolate Milkshake",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/33 milkshake coklat.png",
    },
    {
        productName: "Vanilla Milkshake",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/34 milkshake vanilla.png",
    },
    {
        productName: "Avocado Milkshake",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/35 milkshake avocado.png",
    },
    {
        productName: "Soda Gembira",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/13 soda gembira.png",
    },
    {
        productName: "Extrajoss Susu",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/12 extrajoss susu.png",
    },
    {
        productName: "Es Susu",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/7 es susu putih.png",
    },
    {
        productName: "Es Milo",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/3. Es milopng.png",
    },
    {
        productName: "Es Milo Susu",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/5 es milo susu.png",
    },
    {
        productName: "Ice Greentea",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Menu-Items/Modern-Drink/52 greentea ice.png",
    },
    {
        productName: "Ice Red Velvet",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Menu-Items/Modern-Drink/54 redvelvet ice.png",
    },
    {
        productName: "Ice Chocolate",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Menu-Items/Modern-Drink/56 chocolate ice.png",
    },
    {
        productName: "Ice Thai Tea",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Menu-Items/Modern-Drink/58 thaitea ice.png",
    },
    {
        productName: "Ice Taro",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Menu-Items/Modern-Drink/91 Ice Taro.png",
    },
    {
        productName: "Kombucha",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Menu-Items/Traditional-Drink/45 kombuca.png",
    },
    {
        productName: "Ice Tea",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/92 Ice Tea.png",
    },
    {
        productName: "STMJ",
        category: "NonCoffeeHot",
        price: "10.000",
        image: "Menu-Items/Traditional-Drink/41 STMJ.png",
    },
    {
        productName: "Jahe",
        category: "NonCoffeeHot",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/92 Ice Tea.png",
    },
    {
        productName: "Jahe Susu",
        category: "NonCoffeeHot",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/92 Ice Tea.png",
    },
    {
        productName: "Jahe Gula Aren",
        category: "NonCoffeeHot",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/92 Ice Tea.png",
    },
    {
        productName: "Wedang Uwuh",
        category: "NonCoffeeHot",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/92 Ice Tea.png",
    },
    {
        productName: "Milo",
        category: "NonCoffeeHot",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/2. Milo panas.png",
    },
    {
        productName: "Teh Panas",
        category: "NonCoffeeHot",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/8 teh panas.png",
    },
    {
        productName: "Lemontea",
        category: "NonCoffeeHot",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/9 hot lemontea.png",
    },
    {
        productName: "Greentea",
        category: "NonCoffeeHot",
        price: "10.000",
        image: "Menu-Items/Modern-Drink/53 green tea hot.png",
    },
    {
        productName: "RedVelvet",
        category: "NonCoffeeHot",
        price: "10.000",
        image: "Menu-Items/Modern-Drink/55 red velvet hot.png",
    },
    {
        productName: "Chocolate",
        category: "NonCoffeeHot",
        price: "10.000",
        image: "Menu-Items/Modern-Drink/57 chocolate hot.png",
    },
    {
        productName: "Thai Tea",
        category: "NonCoffeeHot",
        price: "10.000",
        image: "Menu-Items/Modern-Drink/59 thaitea hot.png",
    },
    {
        productName: "Taro",
        category: "NonCoffeeHot",
        price: "10.000",
        image: "Menu-Items/Modern-Drink/91 Ice Taro.png",
    },
    {
        productName: "Jeruk Hangat",
        category: "NonCoffeeHot",
        price: "10.000",
        image: "Menu-Items/Traditional-Drink/44 jeruk anget.png",
    },
    {
        productName: "Susu Milo",
        category: "NonCoffeeHot",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/5 es milo susu.png",
    },
    {
        productName: "Susu Putih",
        category: "NonCoffeeHot",
        price: "10.000",
        image: "Menu-Items/Non-Coffee/32 milkshake strawberry.png",
    },
    ],
};


for (let i of products.datanonkopi) {
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
    console.log(value);
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

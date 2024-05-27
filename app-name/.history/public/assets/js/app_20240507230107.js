let products = {
    datakopi: [
    {
        productName: "Ice Coffee ori",
        category: "Cold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Americano",
        category: "Cold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Ice Coffee Hazel",
        category: "Cold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Ice Kopi Vanilla",
        category: "Cold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Ice Kopi Gula Aren",
        category: "Cold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Ice Kopi Banana",
        category: "Cold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Ice Cappucino",
        category: "Cold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Ice Vanila Latte",
        category: "Cold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "v-drip",
        category: "Hot",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Tubruk Susu",
        category: "Hot",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Kopi Coklat",
        category: "Hot",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Kopi Susu",
        category: "Hot",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Kopi Tutup Susu",
        category: "Hot",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Hot Cappucino",
        category: "Hot",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Hot Vanila Latte",
        category: "Hot",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Espresso",
        category: "Hot",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Double Espresso",
        category: "Hot",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Kopi Hitam",
        category: "Hot",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Kopi Tubruk",
        category: "Hot",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "KSTG",
        category: "Hot",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Kopi Tutup",
        category: "Hot",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Kopi Espresso Susu",
        category: "Hot",
        price: "10.000",
        image: "Coffee.jpg",
    },
    ],
    datanonkopi:[
    {
        productName: "Strawberry Milkshake",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Chocolate Milkshake",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Vanilla Milkshake",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Avocado Durian",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Soda Gembira",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Es Milo Susu",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Extrajoss Susu",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Es Susu",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Es Milo",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Es Milo Susu",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Ice Greentea",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Ice Red Velvet",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Ice Chocolate",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Ice Thai Tea",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Ice Taro",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Kombucha",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    {
        productName: "Ice Tea",
        category: "NonCoffeeCold",
        price: "10.000",
        image: "Coffee.jpg",
    },
    ],
    datamoderndrink:[

    ],
    datatraditionaldrink:[

    ],
    food:[

    ],
    snack:[

    ]
};

for (let i of products.datakopi) {
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

for (let i of products.datamoderndrink) {
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

for (let i of products.datatraditionaldrink) {
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

for (let i of products.food) {
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

for (let i of products.snack) {
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
    console.log(products)
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

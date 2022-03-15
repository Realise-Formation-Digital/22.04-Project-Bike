
// $(document).ready(function (){
//    $("#click").click(function (){
//       $('html, body').animate({
//          scrollTop: $("#about").offset().top
//       }, 2000);
//    });
// });



// $(document).ready(function (){
// $("#click1").click(function (){
//    $('html, body').animate({
//       scrollTop: $("#work").offset().top
//    }, 2000);
// });
// });



// $(document).ready(function (){
// $("#click2").click(function (){
//    $('html, body').animate({
//       scrollTop: $("#shop").offset().top
//    }, 2000);
// });
// });



// $(document).ready(function (){
// $("#click3").click(function (){
//    $('html, body').animate({
//       scrollTop: $("#contact").offset().top
//    }, 2000);
// });
// });

let about = document.getElementById("click")

about.addEventListener('click', function (event){
    console.log("click")

    let destination = document.getElementById("about")

    destination.scrollIntoView({behavior: "smooth"})
})

let work = document.getElementById("click1")

work.addEventListener('click', function (event){
    console.log("click")

    let destination = document.getElementById("work")

    destination.scrollIntoView({behavior: "smooth"})
})

let shop = document.getElementById("click2")

shop.addEventListener('click', function (event){
    // console.log("click")

    let destination = document.getElementById("shop")

    destination.scrollIntoView({behavior: "smooth"})
})

let contact = document.getElementById("click3")

contact.addEventListener('click', function (event){
    console.log("click")

    let destination = document.getElementById("contact")

    destination.scrollIntoView({behavior: "smooth"})
})

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    //SUPPRIMER 1 ELEMENT DU PANIER
    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }
    //QUANTITER A DECLARER
    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }
    //AJOUTER AU PANIER
    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }
    //BOUTON ACHAT(PAYER)
    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked);
}
//FONCTION ACHAT PAYER
function purchaseClicked() {
    alert('Tu vas pas vraiment payé tout ça ?')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild)
    }
    updateCartTotal()
}
//FONCTION SUPPR + ELEMENT
function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}
//FONCTION INPUT QUANTITER
function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}
//FONCTION AJOUTER AU PANIER
function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src
    addItemToCart(title, price, imageSrc)
    updateCartTotal()
}

//FONCTION QUI CREE UN PANIER

function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('deja')
            return
        }
    }
    //VARIABLE QUI CREE LA (DIV)
    var cartRowContents = `
        <div class="cart-item cart-column border-star border-black">
         <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column border-star border-black">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger rounded-circle" type="button">x</button>
        </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
}

//TOTAL PANIER

function updateCartTotal(){
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('CHF', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = total + 'CHF'
}
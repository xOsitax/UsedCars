if(document.readyState == "loading"){
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}

function ready(){
   var removeCartItemButtons = document.getElementsByClassName("btn-danger");
    console.log(removeCartItemButtons);

    // Loop through the buttons inside the cart
    for(var i = 0; i < removeCartItemButtons.length; i++){
        var button = removeCartItemButtons[i];
        //Add the remove button event listener to each remove button
        button.addEventListener("click", removeCartItem);
    }

    var quantityInputs = document.getElementsByClassName("cart-quantity-input");
    for(var i = 0; i < quantityInputs.length; i++){
        var input = quantityInputs[i];
        input.addEventListener('change', quantityChanged);
    }


    var addToCartButtons = document.getElementsByClassName("shop-item-button");
    for(var i = 0; i < addToCartButtons.length; i++){
        var button = addToCartButtons[i];
        button.addEventListener('click', addToCartClicked);
    }

    document.getElementsByClassName("btn-purchase")[0].addEventListener('click', purchaseClicked);

    //JQuery Function to show item has been added message
    $(".shop-item-button").click(function() {
        console.log("Add to Cart Button has been clicked");
        $(".message-box").finish().fadeIn("fast").delay(3000).fadeOut("slow");
    });

}

function purchaseClicked(){
    var alertOutput = "Thank you for your purchase.\n Appreciate Your Time \n\nRECEIPT:";
    var cartItems = document.getElementsByClassName("cart-items")[0];

    while(cartItems.hasChildNodes()) {
        var itemName = cartItems.firstChild.getElementsByClassName("cart-item-title")[0].innerText;
        var itemPrice = cartItems.firstChild.getElementsByClassName("cart-price")[0].innerText;
        var itemQuantity = cartItems.firstChild.getElementsByClassName("cart-quantity-input")[0].value;
        var itemInfo = `\nItem: ${itemName} - Price: ${itemPrice} - Quantity: ${itemQuantity}`;
        alertOutput += itemInfo;
        cartItems.removeChild(cartItems.firstChild);
    }
    var cartTotal = `\nTotal: ${document.getElementsByClassName("cart-total-price")[0].innerText}`;
    alertOutput += cartTotal;
    alert(alertOutput);
    updateCartTotal();


}

function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    updateCartTotal();
}

function quantityChanged(event) {
    var input = event.target
    if(isNaN(input.value) || input.value <= 0){
        input.value = 1;
    }
    updateCartTotal();
}

function addToCartClicked(event) {
    var button = event.target;
    var shopItem = button.parentElement.parentElement;
    var title = shopItem.getElementsByClassName("shop-item-title")[0].innerText;
    var price = shopItem.getElementsByClassName("shop-item-price")[0].innerText;
    var imageSource = shopItem.getElementsByClassName("shop-item-image")[0].src;
    console.log(title);
    addItemToCart(title, price, imageSource);
    updateCartTotal();
}

function addItemToCart(title, price, imageSource) {
    var cartRow = document.createElement('div');
    cartRow.classList.add("cart-row");
    var cartItems = document.getElementsByClassName('cart-items')[0];
    var cartItemNames = cartItems.getElementsByClassName("cart-item-title");
    for (var i =0; i < cartItemNames.length; i++){
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart');
          
        }
    }

    var cartRowContents = `
        <div class="cart-item cart-column">
            <img
              class="cart-item-image"
              src="${imageSource}"
              width="100"
              height="100"
            />
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1" />
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`
    cartRow.innerHTML = cartRowContents;
    cartItems.append(cartRow);
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem);
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged);
}

function updateCartTotal(){
    var cartItemContainer = document.getElementsByClassName("cart-items")[0];
    var cartRows = cartItemContainer.getElementsByClassName("cart-row");
    var total = 0;
    for(var i = 0; i < cartRows.length; i++){
        var cartRow = cartRows[i];
        var priceElement = cartRow.getElementsByClassName("cart-price")[0];
        var quantityElement = cartRow.getElementsByClassName("cart-quantity-input")[0];
        var price = parseFloat(priceElement.innerText.replace("$", ""));
        var quantity = quantityElement.value;
        total += (price * quantity);
    }

    total = Math.round(total * 100) / 100; //round total to nearest 2 decimal places
    document.getElementsByClassName("cart-total-price")[0].innerText = "$" + total;
}


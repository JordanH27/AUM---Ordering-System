var quantity = 0;
var subtotal = 0;
var stock;

function getQuantity(){
    quantity1 = quantity;
    return quantity1;
}

    

function setQuantity(cartQuantity){
    quantity = cartQuantity;
}

function addToPrice(productPrice){
    subtotal = subtotal + (productPrice*quantity); 
}

function getPrice(){
    return subtotal;
}

function setStock(sentStock){
    if (sentStock == 1){
        stock = "in stock";
    }else if (sentStock == 0){
        stock = "out of stock";
    }
}

function getStock(){
    return stock;
}

function validate1(){
                var email = document.getElementById("email").value;
                var password = document.getElementById("password").value;
                if (email == null || email == "") {
                    alert("Please enter the username.");
                }
                if (password == null || password == "") {
                    alert("Please enter the password.");
                }
                
            } 
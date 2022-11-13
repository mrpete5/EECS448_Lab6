function validateInput(input) {
    return input !== "" && input >= 0;
}
function validateTotalInput(input) {
    return input !== "" && input >= 1;
}
function validateEmail(email) {
    return email !== "" && email.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/);
}

function validatePassword(password) {
    return password !== "" && password.length >= 8;
}

function reset() {
    document.getElementById("email").value = "";
    document.getElementById("password").value = "";
    document.getElementById("shipping").value = "";
    document.getElementById("quantity").value = "";
    document.getElementById("total").innerHTML = "";
}

function validateForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var shipping = document.querySelector('input[name="shipping"]:checked')?.value;
    var footballQuantity = document.getElementById("football").value;
    var bananaQuantity = document.getElementById("banana").value;
    var toothpasteQuantity = document.getElementById("toothpaste").value;
    var totalQuantity = footballQuantity + bananaQuantity + toothpasteQuantity;

    if (!validateEmail(email)) {
        alert("Must provide a valid email address");
        return false;
    }

    if (!validatePassword(password)) {
        alert("Password must be at least 8 characters");
        return false;
    }

    if (shipping === undefined) {
        alert("Select a shipping option");
        return false;
    }

    if (!validateInput(footballQuantity)) {
        alert("Football quantity must be at least 0");
        return false;
    }

    if (!validateInput(bananaQuantity)) {
        alert("Banana quantity must be at least 0");
        return false;
    }

    if (!validateInput(toothpasteQuantity)) {
        alert("Toothpaste quantity must be at least 0");
        return false;
    }

    if (!validateTotalInput(totalQuantity)) {
        alert("Must select at least 1 item");
        return false;
    }

    return true;
}
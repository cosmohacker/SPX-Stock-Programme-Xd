function toggleAddProduct() {
    var addProduct = document.getElementById("products-add");
    if (addProduct.style.display === "none") {
        addProduct.classList.remove("hide");
        setTimeout(function () {
            addProduct.style.display = "block";
        }, 1000);
    } else {
        addProduct.classList.add("hide");
        setTimeout(function () {
            addProduct.style.display = "none";
        }, 1000);
    }
}

function focusSearch() {
    document.getElementById("search-products").focus();
}
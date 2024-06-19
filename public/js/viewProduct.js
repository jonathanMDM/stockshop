function showProduct(id) {
    $.ajax({
        url: url + "productController/dataProduct",
        type: "post",
        dataType: "json",
        data: { 'id': id }
    }).done(function(response) {
        var product = response[0];
        $('#productImage').attr('src', 'data:image/jpg;base64,' + product.productImg);
        $('#productName').text(product.ProductName);
        $('#productDescription').text(product.Description);
        $('#productPrice').text(product.Price + '$');
        $('#productModal').modal('show');
    }).fail(function(error) {
        console.log(error);
    });
}

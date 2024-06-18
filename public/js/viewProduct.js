function dataProduct(id) {
    $.ajax({
        url: url + "productController/shopCarUser",
        type: "post",
        dataType: "json",
        data: { 'id': id }
    }).done(function(answer) {
        console.log(answer); // Verificar los datos recibidos
        $.each(answer, function(index, value) {
            $('#txtIdProduct').val(value.idProduct);
            $('#txtProductNameView').val(value.ProductName);
            $('#txtDescriptionView').val(value.Description);
            $('#txtPriceView').val(value.Price);
            $('#txtStockView').val(value.Stock);
            $('#selCategory').val(value.idCategory);
        });
    }).fail(function(error) {
        console.log(error);
    });
}
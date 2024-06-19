function showProduct(id) {
    $.ajax({
        url: url + "productController/shopCarUser",
        type: "post",
        dataType: "json",
        data: { 'id': id }
    }).done(function(answer) {
        console.log(answer); // Verificar los datos recibidos
        $.each(answer, function(index, value) {
            $('#txtProductImgView').val(value.ProductName);
            $('#txtProductNameView').val(value.ProductName);
            $('#txtDescriptionView').val(value.Description);
            $('#txtPriceView').val(value.Price);
            $('#txtStockView').val(value.Stock);
            $('#txtIdCategoryView').val(value.idCategory);
            $('#txtIdProductView').val(value.idProduct);
        });
    }).fail(function(error) {
        console.log(error);
    });
}
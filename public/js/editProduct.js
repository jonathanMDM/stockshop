
function dataProduct(id) {
    $.ajax({
        url: url + "productController/dataProduct",
        type: "post",
        dataType: "json",
        data: { 'id': id }
    }).done(function(answer) {
        console.log(answer); // Verificar los datos recibidos
        $.each(answer, function(index, value) {
            $('#txtIdProduct').val(value.idProduct);
            $('#txtProductNameEdit').val(value.ProductName);
            $('#txtDescriptionEdit').val(value.Description);
            $('#txtPriceEdit').val(value.Price);
            $('#txtStockEdit').val(value.Stock);
            $('#selCategory').val(value.idCategory);
        });
    }).fail(function(error) {
        console.log(error);
    });
}



function deleteProduct(id){
    Swal.fire({
        title:'Would you like to delete user?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it',
    }).then((result) =>{
        if (result.isConfirmed) {
            Swal.fire({
                position: "",
                icon: "success",
                title: "Status delete",
                confirmButtonText: "OK",
                timer: 2000
            }).then((result) =>{
                if (result.isConfirmed) {
                    $.ajax({
                        type: "post",
                        url: url + "productController/deleteProduct",
                        data: {'id':id,}
                    }).done(function(answer){
                        if (answer == 1) {
                            window.location = url + "productController/index";
                            window.reload();
                        }else{
                            Swal.fire('Wrong to delte users', '', 'error');
                        }
                    }).fail(function(error){
                        console.log(error);
                    });
                }
            });
        }
    });
}

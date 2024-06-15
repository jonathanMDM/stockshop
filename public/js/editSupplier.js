
function dataSupplier(id) {
    alert(id);
    $.ajax({
        url: url + "suppliersController/dataSupplier",
        type: "post",
        dataType: "json",
        data: { 'id': id }
    }).done(function(answer) {
        console.log(answer); // Verificar los datos recibidos
        $.each(answer, function(index, value) {
            $('#txtidSupplier').val(value.idSupplier);
            $('#txtSupplierName').val(value.SupplierName);
            $('#txtContactName').val(value.ContactName);
            $('#txtContactPhone').val(value.ContactPhone);
            $('#txtContactEmail').val(value.ContactEmail);
            $('#Address').val(value.Address);
        });
    }).fail(function(error) {
        console.log(error);
    });
}



function deleteSupplier(id){
    alert(id);
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
                        url: url + "suppliersController/deleteSupplier",
                        data: {'id':id,}
                    }).done(function(answer){
                        if (answer == 1) {
                            window.location = url + "suppliersController/index";
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

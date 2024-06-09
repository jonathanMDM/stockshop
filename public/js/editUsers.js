// Funcion para moditicar el estado
function changeStatus(id){
    Swal.fire({
        title:'Would you like to change Status?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, change it',
    }).then((result) =>{
        if (result.isConfirmed) {
            Swal.fire({
                position: "",
                icon: "success",
                title: "Status changed",
                confirmButtonText: "OK",
                timer: 2000
            }).then((result) =>{
                if (result.isConfirmed) {
                    $.ajax({
                        type: "post",
                        url: url + "userController/changeStatus",
                        data: {'id':id,}
                    }).done(function(answer){
                        if (answer == 1) {
                            window.location = url + "userController/getUsers";
                            window.reload();
                        }else{
                            Swal.fire('Wrong to change status', '', 'error');
                        }
                    }).fail(function(error){
                        console.log(error);
                    });
                }
            });
        }
    });
}
//funcion para eliminar usuarios
function deleteUser(id){
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
                        url: url + "userController/deleteUser",
                        data: {'id':id,}
                    }).done(function(answer){
                        if (answer == 1) {
                            window.location = url + "userController/getUsers";
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


function dataUser(id){
    $.ajax({
        url: url + "userController/dataUser",
        type: "post",
        dataType: "json",
        data: {'id':id,}
    }).done(function(answer){
        $.each(answer, function(index, value){
            $('#txtIdUser').val(value.idUser);
            $('#selDocType').val(value.idTypeDocument);
            $('#txtDocument').val(value.Document);
            $('#txtNames').val(value.Names);
            $('#txtLastnames').val(value.Lastname);
            $('#txtEmail').val(value.Email);
            $('#txtPhone').val(value.Phone);
            $('#txtAddress').val(value.Address);
            $('#txtUser').val(value.Username);
            $('#txtPassword').val(value.Password);
        })
    }).fail(function(error){
        console.log(error);
    })
}

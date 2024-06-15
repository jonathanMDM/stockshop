<?php
        //crear la clase 
    class userController extends Controller{
        //atributo se encargara de hacer el llamdo al archivo modelo 
            // se crean cuantos ean necesarios 
        private $modelU;
        private $modelR;

        //crear el constructor para llamar los modelos 
        public function __construct(){
            //instanciar los modelos
            $this->modelU = $this->loadModel("mdlUsers");
            $this->modelR = $this->loadModel("mdlRoles");
        }

        //metodo para llamr el lopgin y poder hacer sesion
        public function login(){
            //para llamar al login uso la constante APP y la función reuire de php
            //esta variable nos va a permiritr captuarar todos los errores
            $error = false;

            //vamos a validar los datos que venga del modelo y del formulario
            if(isset($_POST['btnLogin'])){
                $this->modelU->__SET('username', $_POST['txtUser']);
                $this->modelU->__SET('password', $_POST['txtpassword']);
                //guardar en un arreglo vacio
                $_POST=[];

                //con una variable vamos a llamar el metodo de validación del modelo
                $validate = $this->modelU->validateUser();

                if($validate == true){
                $_SESSION['SESSION_START'] = true;

                $error = false;

                //comunicamos modelo con formulario
                $_SESSION['Names'] = $validate['Names'];
                $_SESSION['idUser'] = $validate['idUser'];
                $_SESSION['Lastname'] = $validate['Lastname'];
                $_SESSION['Document'] = $validate['Document'];
                $_SESSION['Username'] = $validate['Username'];
                $_SESSION['RolDescription'] = $validate['RolDescription'];

                //despues de la validacion cargar la vista del admin
                header("Location:" . URL ."userController/main");
            }else{
                $error = true;
            }
            
        }
        require APP . 'view/users/login.php';
    }

    //metodo para cargar el main y el admin diseños
    public function main(){
        require APP .'view/_templates/header.php';
        require APP .'view/users/main.php';
        require APP .'view/_templates/footer.php';
    }

    public function mainUsers(){
        require APP .'view/_templates/headerUsers.php';
        require APP .'view/products/viewProducts.php';
        require APP .'view/_templates/footer.php';
    }

    //metodo para cerra la session
    public function closeSession(){
        if(isset($_SESSION['SESSION_START'])){
            session_destroy();
    }
    header("Location:" .URL. "Home/index");
    }

    //metodo para registar usuario
    public function userRegister(){
        //con condicional para el modelo y formulario

        if(isset($_POST["btnRegister"])){
            //comunicción modelo y formulario
            $this->modelU->__SET('idTypeDocument', $_POST['selDocType']);
            $this->modelU->__SET('document', $_POST['txtDocument']);
            $this->modelU->__SET('names', $_POST['txtNames']);
            $this->modelU->__SET('lastname', $_POST['txtLastnames']);
            $this->modelU->__SET('email', $_POST['txtEmail']);
            $this->modelU->__SET('phone', $_POST['txtPhone']);
            $this->modelU->__SET('birthdate', $_POST['txtBirthdate']);
            $this->modelU->__SET('address', $_POST['txtAddress']);
            $this->modelU->__SET('gender', $_POST['txtGender']);

            //vamosa crear una variable que llamara al metodo del modelo para poder registrar los datos
            $person = $this->modelU->registerPeople();

            //validamos que registre desde la ultima persona registrada
            if($person == true){
                $lasId = $this->modelU->lastPersonId();
                //vamos a recorrer y tomar el dato
                foreach($lasId as $value){
                    $lastIdValue = $value['lastPersonId'];
                }
            }
            //datos para la tabla usuarios
            $this->modelU->__SET('idPerson', $lastIdValue);
            $this->modelU->__SET('username', $_POST['txtUser']);
            $this->modelU->__SET('password', $_POST['txtPassword']);
            $this->modelU->__SET('idRol', $_POST['selRol']);


            $user = $this->modelU->userResgister();

            //aquí ira el sweetalert
            if($person == true && $user == true){
                $_SESSION['alert']= "Swal.fire({
                    position: '',
                    icon: 'success',
                    title: 'Done',
                    showConfirmButton: false,
                    timer: 1500})";   
                    header("Location:" .URL. "userController/getUsers"); 
                    exit();   
            }else{
                $_SESSION['alert']= "Swal.fire({
                    position: '',
                    icon: 'error',
                    title: 'Error',
                    showConfirmButton: false,
                    timer: 1500})";   
                    header("Location:" .URL. "userController/getUsers"); 
                    exit();
            }
        }

        //metodos para ver los datos necesarios
        $typeDocument = $this->modelU->getTypeDocument();
        $roles = $this->modelR->getRoles();

        require APP .'view/_templates/header.php';
        require APP .'view/users/userRegister.php';
        require APP .'view/_templates/footer.php';
    }


    //metodo para obtener los datos de usuarios
    public function getUsers(){
        //vamos a tener el conficional para cuando sea el momento de editar los usuarios
        if(isset($_POST['btnUpdate'])){
            $this->modelU->__SET('idTypeDocument', $_POST['selDocType']);
            $this->modelU->__SET('document', $_POST['txtDocument']);
            $this->modelU->__SET('names', $_POST['txtNames']);
            $this->modelU->__SET('lastname', $_POST['txtLastnames']);
            $this->modelU->__SET('email', $_POST['txtEmail']);
            $this->modelU->__SET('phone', $_POST['txtPhone']);
            $this->modelU->__SET('address', $_POST['txtAddress']);
            $this->modelU->__SET('username', $_POST['txtUser']);
            $this->modelU->__SET('password', $_POST['txtPassword']);
            $this->modelU->__SET('idUser', $_POST['txtIdUser']);
            
            //variable para actualizar
            $update = $this->modelU->updateUser();

            if($update == true){
                $_SESSION['alert']= "Swal.fire({
                    position: '',
                    icon: 'success',
                    title: 'Done',
                    showConfirmButton: false,
                    timer: 1500})";   
                    header("Location:" .URL. "userController/getUsers"); 
                    exit();   
            }else{
                $_SESSION['alert']= "Swal.fire({
                    position: '',
                    icon: 'error',
                    title: 'Error',
                    showConfirmButton: false,
                    timer: 1500})";   
                    header("Location:" .URL. "userController/getUsers"); 
                    exit();
            }
        }

        //crear las variables para llamar a los metos de los modelos
        $user = $this->modelU->getUsers();
        $roles = $this->modelR->getRoles();
        $typeDocument = $this->modelU->getTypeDocument();

        require APP .'view/_templates/header.php';
        require APP .'view/users/getUsers.php';
        require APP .'view/_templates/footer.php';
    }
    
    //funcion para traer el ID del modelo
    public function dataUser(){
        //crear una variable para controlar el dato
        $dateUser = $this->modelU->userId($_POST['id']);
        echo json_encode($dateUser);
    }

    public function changeStatus(){
        //crear una variable para controlar el dato
        $Stat = $this->modelU->changeStatus($_POST['id']);
        echo 1;
    }

    public function deleteUser(){
        //crear una variable para controlar el dato
        $Stat = $this->modelU->deleteUser($_POST['id']);
        echo 1;
    }

    public function loginUserOnly(){
        //para llamar al login uso la constante APP y la función reuire de php
        //esta variable nos va a permiritr captuarar todos los errores
        $error = false;

        //vamos a validar los datos que venga del modelo y del formulario
        if(isset($_POST['btnLogin'])){
            $this->modelU->__SET('username', $_POST['txtUser']);
            $this->modelU->__SET('password', $_POST['txtpassword']);
            //guardar en un arreglo vacio
            $_POST=[];

            //con una variable vamos a llamar el metodo de validación del modelo
            $validate = $this->modelU->validateUserOnly();

            if($validate == true){
            $_SESSION['SESSION_START'] = true;

            $error = false;

            //comunicamos modelo con formulario
            $_SESSION['Names'] = $validate['Names'];
            $_SESSION['idUser'] = $validate['idUser'];
            $_SESSION['Lastname'] = $validate['Lastname'];
            $_SESSION['Document'] = $validate['Document'];
            $_SESSION['Username'] = $validate['Username'];
            $_SESSION['RolDescription'] = $validate['RolDescription'];

            //despues de la validacion cargar la vista del admin
            header("Location:" . URL ."productController/viewProductsUsers");
        }else{
            $error = true;
        }
        
    }
    require APP . 'view/users/login.php';
}
}
<?php

class suppliersController extends Controller
{
    private $modelSupplier;
    private $modelCategory;

    public function __construct()
    {
        // Instanciar los modelos
        $this->modelSupplier = $this->loadModel("mdlSuppliers");
        $this->modelCategory = $this->loadModel("mdlCategories");
    }

    // Método para mostrar todos los proveedores
    public function index()
    {
        $suppliers = $this->modelSupplier->getSupplier();
        $categories = $this->modelCategory->getCategories();
        require APP . 'view/_templates/header.php';
        require APP . 'view/suppliers/getSupplier.php';
        require APP . 'view/_templates/footer.php';
    }

    // Método para mostrar el formulario de creación de proveedor
    public function create()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/suppliers/supplierRegister.php';
        require APP . 'view/_templates/footer.php';
    }

    // Método para almacenar un nuevo proveedor
    public function store()
    {
        if (isset($_POST["btnSave"])) {
            $this->modelSupplier->__SET('SupplierName', $_POST['txtSupplierName']);
            $this->modelSupplier->__SET('ContactName', $_POST['txtContactName']);
            $this->modelSupplier->__SET('ContactPhone', $_POST['txtContactPhone']);
            $this->modelSupplier->__SET('ContactEmail', $_POST['txtContactEmail']);
            $this->modelSupplier->__SET('Address', $_POST['Address']);

            $result = $this->modelSupplier->saveSupplier();

            if ($result) {
                $_SESSION['alert'] = "Swal.fire({
                    position: '',
                    icon: 'success',
                    title: 'Done',
                    showConfirmButton: false,
                    timer: 1500
                })";
            } else {
                $_SESSION['alert'] = "Swal.fire({
                    position: '',
                    icon: 'error',
                    title: 'Error',
                    showConfirmButton: false,
                    timer: 1500
                })";
            }

            header("Location: " . URL . "suppliersController/index");
            exit();
        }
    }

    // Método para mostrar el formulario de edición de proveedor
    public function edit($id)
    {
        $supplier = $this->modelSupplier->getSupplierId($id);
        require APP . 'view/_templates/header.php';
        require APP . 'view/suppliers/getSupplier.php';
        require APP . 'view/_templates/footer.php';
    }

    // Método para actualizar un proveedor
    public function updateSupplier()
    
    {

        if (isset($_POST["btnUpdate"])) {
            $this->modelSupplier->__SET('idSupplier', $_POST['txtidSupplier']);
            $this->modelSupplier->__SET('SupplierName', $_POST['txtSupplierName']);
            $this->modelSupplier->__SET('ContactName', $_POST['txtContactName']);
            $this->modelSupplier->__SET('ContactPhone', $_POST['txtContactPhone']);
            $this->modelSupplier->__SET('ContactEmail', $_POST['txtContactEmail']);
            $this->modelSupplier->__SET('Address', $_POST['Address']);

            $result = $this->modelSupplier->updateSupplier();

            if ($result) {
                $_SESSION['alert'] = "Swal.fire({
                    position: '',
                    icon: 'success',
                    title: 'Done',
                    showConfirmButton: false,
                    timer: 1500
                })";
            } else {
                $_SESSION['alert'] = "Swal.fire({
                    position: '',
                    icon: 'error',
                    title: 'Error',
                    showConfirmButton: false,
                    timer: 1500
                })";
            }

            header("Location: " . URL . "suppliersController/index");
            exit();
        }
    }

    // Método para eliminar un proveedor
    public function deleteSupplier(){
        //crear una variable para controlar el dato
        $result = $this->modelSupplier->deleteSupplier($_POST['id']);
        echo 1;
    }

    public function dataSupplier(){
        //crear una variable para controlar el dato
        $data = $this->modelSupplier->getSupplierId($_POST['id']);
        echo json_encode($data);
    }
}

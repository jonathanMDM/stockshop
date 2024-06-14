<?php

class ProductController extends Controller
{
    private $modelProduct;
    private $modelCategory;

    public function __construct()
    {
        // Instanciar los modelos
        $this->modelProduct = $this->loadModel("mdlProducts");
        $this->modelCategory = $this->loadModel("mdlCategories");
    }

    // Método para mostrar todos los productos
    public function index()
    {
        $products = $this->modelProduct->getProducts();
        $categories = $this->modelCategory->getCategories();
        require APP . 'view/_templates/header.php';
        require APP . 'view/products/index.php';
        require APP . 'view/_templates/footer.php';
    }

    // Método para mostrar el formulario de creación de producto
    public function create()
    {
        $categories = $this->modelCategory->getCategories();
        require APP . 'view/_templates/header.php';
        require APP . 'view/products/create.php';
        require APP . 'view/_templates/footer.php';
    }

    // Método para almacenar un nuevo producto
    public function store()
    {
        if (isset($_POST["btnSave"])) {
            $this->modelProduct->__SET('ProductName', $_POST['txtProductName']);
            $this->modelProduct->__SET('Description', $_POST['txtDescription']);
            $this->modelProduct->__SET('Price', $_POST['txtPrice']);
            $this->modelProduct->__SET('Stock', $_POST['txtStock']);
            $this->modelProduct->__SET('idCategory', $_POST['selCategory']);

            $result = $this->modelProduct->saveProduct();

            if ($result) {
                $_SESSION['alert'] = "Swal.fire({
                    position: '',
                    icon: 'success',
                    title: 'Producto guardado',
                    showConfirmButton: false,
                    timer: 1500
                })";
            } else {
                $_SESSION['alert'] = "Swal.fire({
                    position: '',
                    icon: 'error',
                    title: 'Error al guardar producto',
                    showConfirmButton: false,
                    timer: 1500
                })";
            }

            header("Location: " . URL . "ProductController/index");
            exit();
        }
    }

    public function updateProduct(){
        //vamos a tener el conficional para cuando sea el momento de editar los usuarios
        if(isset($_POST['btnUpdate'])){
            $this->modelProduct->__SET('idProduct', $_POST['txtIdProduct']);
            $this->modelProduct->__SET('ProductName', $_POST['txtProductNameEdit']);
            $this->modelProduct->__SET('Description', $_POST['txtDescriptionEdit']);
            $this->modelProduct->__SET('Price', $_POST['txtPriceEdit']);
            $this->modelProduct->__SET('Stock', $_POST['txtStockEdit']);
            $this->modelProduct->__SET('idCategory', $_POST['selCategory']);
            
            //variable para actualizar
            $update = $this->modelProduct->updateProduct();
        }

        //crear las variables para llamar a los metos de los modelos
        $user = $this->modelProduct->getProductId();
        $roles = $this->modelCategory->getCategories();

        require APP .'view/_templates/header.php';
        require APP .'view/products/index.php';
        require APP .'view/_templates/footer.php';
    }
    
    // Método para eliminar un producto
    public function deleteProduct(){
        //crear una variable para controlar el dato
        $result = $this->modelProduct->deleteProduct($_POST['id']);
        echo 1;
    }

    public function dataProduct(){
        //crear una variable para controlar el dato
        $data = $this->modelProduct->getProductId($_POST['id']);
        echo json_encode($data);
    }
}

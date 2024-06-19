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
                    title: 'Donne',
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

            header("Location: " . URL . "ProductController/index");
            exit();
        }
    }


    public function updateProduct(){

        if(isset($_POST['btnUpdate'])){
            $this->modelProduct->__SET('ProductName', $_POST['txtProductNameEdit']);
            $this->modelProduct->__SET('Description', $_POST['txtDescriptionEdit']);
            $this->modelProduct->__SET('Price', $_POST['txtPriceEdit']);
            $this->modelProduct->__SET('Stock', $_POST['txtStockEdit']);
            $this->modelProduct->__SET('idCategory', $_POST['selCategory']);
            $this->modelProduct->__SET('idProduct', $_POST['txtIdProduct']);
        
            $result = $this->modelProduct->updateProduct();

            if($result == true){
                $_SESSION['alert']= "Swal.fire({
                    position: '',
                    icon: 'success',
                    title: 'Done',
                    showConfirmButton: false,
                    timer: 1500})";   
                    header("Location:" .URL. "productController/index"); 
                    exit();   
            }else{
                $_SESSION['alert']= "Swal.fire({
                    position: '',
                    icon: 'error',
                    title: 'Error',
                    showConfirmButton: false,
                    timer: 1500})";   
                    header("Location:" .URL. "productController/index"); 
                    exit();
            }
        }
    
        $product = $this->modelProduct->getProductId($_POST['id']);
        $categories = $this->modelCategory->getCategories();
    
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

    public function viewProducts(){
        $products = $this->modelProduct->getProducts();
        require APP .'view/_templates/header.php';
        require APP .'view/sells/viewProducts.php';
        require APP .'view/_templates/footer.php';
    }

    public function shopCar(){
        $products = $this->modelProduct->getProducts();
        require APP .'view/_templates/header.php';
        require APP .'view/sells/shopCar.php';
        require APP .'view/_templates/footer.php'; 
    }

    public function viewProductsUsers()
    {
        $products = $this->modelProduct->getProducts();
        $categories = $this->modelCategory->getCategories();
        require APP . 'view/sells/viewProductsUsers.php';
        require APP . 'view/sells/shopCarUsers.php';
    }
        
    
    public function shopCarUser() {
        if (isset($_POST['id'])) {
            $product = $this->modelProduct->getProductId($_POST['id']);
            echo json_encode($product[0]);  // Asegúrate de devolver solo el primer elemento, ya que getProductId devuelve un array.
            return;
        }    
        $products = $this->modelProduct->getProducts();
        require APP . 'view/sells/shopCarUsers.php';
    }
    
}

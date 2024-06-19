<?php

class mdlProducts
{
    private $db;
    private $ProductName;
    private $Description;
    private $Price;
    private $Stock;
    private $idCategory;
    private $idProduct;
    private $productImg;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function __SET($attribute, $value)
    {
        $this->$attribute = $value;
    }

    public function __GET($attribute)
    {
        return $this->$attribute;
    }

    // Para obtener todos los productos
    public function getProducts()
    {
        $sql = "SELECT PR.*, CT.* FROM products AS PR INNER JOIN categories AS CT ON PR.idCategory = CT.idCategory ORDER BY idProduct ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // obtener un producto por su id
    public function getProductId($id)
    {
        $sql = "SELECT PR.*, CT.* FROM products AS PR INNER JOIN categories AS CT ON PR.idCategory = CT.idCategory WHERE idProduct = ?";
        $query = $this->db->prepare($sql);
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    //Guardar un nuevo producto
    public function saveProduct()
    {
        $sql = "INSERT INTO products (ProductName, Description, Price, Stock, idCategory, productImg ) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $this->ProductName);
        $stmt->bindParam(2, $this->Description);
        $stmt->bindParam(3, $this->Price);
        $stmt->bindParam(4, $this->Stock);
        $stmt->bindParam(5, $this->idCategory);
        $stmt->bindParam(6, $this->productImg);
        return $stmt->execute();
    }

    // actualizar un producto
    public function updateProduct()
    {
        $sql = "UPDATE products SET ProductName = ?, Description = ?, Price = ?, Stock = ?, idCategory = ? WHERE idProduct = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $this->ProductName,
            $this->Description,
            $this->Price,
            $this->Stock,
            $this->idCategory,
            $this->idProduct
        ]);
    }


    // Eliminar un producto
    public function deleteProduct($id)
    {
        $sql = "DELETE  FROM products  WHERE idProduct = ?;
        ALTER TABLE products AUTO_INCREMENT = 1;
        ALTER TABLE products AUTO_INCREMENT = 1";
        $query = $this->db->prepare($sql);
        $query->bindParam(1, $id);
        return $query->execute();
    }

    public function showProduct()
    {
        $sql = "SELECT products SET productImg = ?, ProductName = ?, Description = ?, Price = ?, Stock = ?, idCategory = ? WHERE idProduct = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $this->productImg,
            $this->ProductName,
            $this->Description,
            $this->Price,
            $this->Stock,
            $this->idCategory,
            $this->idProduct
        ]);
    }
}

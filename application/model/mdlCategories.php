<?php

class mdlCategories
{
    private $db;
    private $idCategory;
    private $CategoryName;
    private $Description;

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
        return $this->$$attribute;
    }

    // obtener todas las categorías
    public function getCategories()
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // obtener una categoría por su ID
    public function getCategoryId($id)
    {
        $sql = "SELECT * FROM categories WHERE idCategory = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // guardar una nueva categoría
    public function saveCategory()
    {
        $sql = "INSERT INTO categories (CategoryName, Description) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $this->CategoryName, 
            $this->Description]);
    }

    //  eliminar una categoría
    public function deleteCategory()
    {
        $sql = "DELETE FROM categories WHERE idCategory = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute();
    }
}

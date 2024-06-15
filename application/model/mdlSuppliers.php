<?php

class mdlSuppliers{

    private $db;
    private $idSupplier;
    private $SupplierName;
    private $ContactName;
    private $ContactPhone;
    private $ContactEmail;
    private $Address;

    public function __construct($db){
        $this->db = $db;
    }

    public funCtion __SET ($attribute, $value){
        $this->$attribute = $value;
    }

    public function __GET( $attribute ){
        return $this->$attribute;
    }

    //Obtener todos los proveedores
    public function getSupplier(){
        $sql = "SELECT * FROM suppliers ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    //Obtener proveedores por el ID
    public function getSupplierId($id){
        $sql = "SELECT * FROM suppliers  WHERE idSupplier = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    //guardar un nuevo proveedor
    public function saveSupplier(){
        $sql = "INSERT INTO suppliers (SupplierName, ContactName, ContactPhone, ContactEmail, Address) VALUES (?,?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([

            $this->SupplierName,
            $this->ContactName,
            $this->ContactPhone,
            $this->ContactEmail,
            $this->Address]);
    }

    //Actualizar un proveedor
    public function updateSupplier(){
        $sql = "UPDATE suppliers SET SupplierName = ?, ContactName = ?, ContactPhone = ?, ContactEmail = ?, Address = ? WHERE idSupplier = ? ";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $this->SupplierName,
            $this->ContactName,
            $this->ContactPhone,
            $this->ContactEmail,
            $this->Address,
            $this->idSupplier
        ]);
    }

    //eliminar un proveedor
    public function deleteSupplier($id){
        $sql = "DELETE FROM suppliers WHERE idSupplier = ?;
        ALTER TABLE suppliers AUTO_INCREMENT = 1;
        ALTER TABLE suppliers AUTO_INCREMENT = 1";
        $query = $this->db->prepare($sql);
        $query->bindParam(1, $id);
        return $query->execute();
    }
}
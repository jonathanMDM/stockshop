<?php
    //creart la clase nortmalmente se le pone el mismo nombre del archivo
    class mdlPeople{
        //agregamos los atributos
        public $idPerson;
        public $document;
        public $idTypeDocument;
        public $names;
        public $lastname;
        public $phone;
        public $address;
        public $email;
        public $birthdate;
        public $gender;
        public $db;
    
    //crear metodo para fijar los datos en la db
    public function __SET($attribute, $value){
        //instanciar los atributos
        $this->$attribute = $value;
    }

    // crear metodo para reclamar los datos cuando sean necesarios 
    public function __GET($attribute){
        // regresa los atributos
        return $this->$attribute;
    }

    // crear la conexion este es el constructor 
    public function __construct($db){
        // intentamos la conexion 
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit("Error al conectar a la base de datos");
        }
    }
    //metodo para registrar a las personas 
    public function registerPeople()
    {
            // crear una consulta 
            $sql = "INSERT INTO people(idTypeDocument,Document,Names,Lastname,Email,Phone,Birthdate,Address,Gender) VALUES(?,?,?,?,?,?,?,?,?)";
            // crear la variable para preparar la consulta y enviarla 
            $stm = $this->db->prepare($sql);
            $stm->bindParam(1, $this->idTypeDocument);
            $stm->bindParam(2, $this->document);
            $stm->bindParam(3, $this->names);
            $stm->bindParam(4, $this->lastname);
            $stm->bindParam(5, $this->email);
            $stm->bindParam(6, $this->phone);
            $stm->bindParam(7, $this->birthdate);
            $stm->bindParam(8, $this->address);
            $stm->bindParam(9, $this->gender);
            //Respuesta
            $result = $stm->execute();
            return $result;
            }

    // este metodo nos permite tomar el ultimo id de la persona registrada y ponerlo de ultimo 
    public function lastPersonId()
    {
        //consulta
        $sql = "SELECT MAX(idPerson) as lastPersonId From people";
        $query = $this->db->prepare($sql);
        $query->execute();
        $lastId = $query->fetchAll(PDO::FETCH_ASSOC);
        return $lastId;
    }

    // metodo para optener los datos de la tabla documentos 
    public function getTypeDocument()
    {
        //consulta 
        $sql = "SELECT idTypeDocument,Description as doc FROM typedocuments";
        $query = $this->db->prepare($sql);
        $query->execute();
        $lastId = $query->fetchAll(PDO::FETCH_ASSOC);
        return $lastId;
    }
}

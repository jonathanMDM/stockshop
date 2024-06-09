<?php

    class mdlRoles {
        //atributos
        public $idRol;
        public $rolDescription;
        public $stat;
        public $db;

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


        //metodo para ver u obtener los roles
        public function getRoles(){
            //consulta
            $sql = "SELECT * FROM  roles ORDER BY RolDescription ASC";
            $stm = $this->db->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        }
    }
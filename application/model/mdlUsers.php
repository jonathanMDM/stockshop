<?php
    require_once('mdlPeople.php');

    //crera la clase
    class mdlUsers extends mdlPeople{
        
    //atributos
    private $idUser;
    private $username;
    private $password;
    private $idRol;
    private $status;

    // crear metodo para fijar los datos ne la db 

    public function __SET($attribute, $value)
    {
        //instanciar los atributos
        $this->$attribute = $value;
    }

    // crear metodo para reclamar los datos cuando sean necesarios 
    public function __GET($attribute)
    {
        // regresa los atributos
        return $this->$attribute;
    }
    // metodo par avalidar y loguear con el usuario 
    public function validateUser(){
        //consulta
        $sql = "SELECT P.Document,P.Names,p.Lastname,U.idUser,U.Username,U.PASSWORD,R.RolDescription FROM people P 
        inner join typeDocuments TD on P.idTypeDocument=TD.idTypeDocument
        inner join users U on P.idPerson = U.idPerson 
        inner join roles R on U.idRol = R.idRol WHERE U.Username = ? and U.PASSWORD = ? and U.stat = 1";


        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->username);
        $stm->bindParam(2, $this->password);
        $stm->execute();

       //retornar datos 
        $user = $stm->fetch(PDO::FETCH_ASSOC);
        return $user;
        }

        //metodo para registar usuario
        public function userResgister(){
            //consulta
            $sql = "INSERT INTO users(Username,PASSWORD,idPerson,idRol,Stat) VALUES (?,?,?,?,?)";

            // vamos a enviar el estado activo por defecto
            $status = 1;

            //vamos a enviar los aparametros
            $smt = $this->db->prepare($sql);
            $smt->bindParam(1, $this->username);
            $smt->bindParam(2, $this->password);
            $smt->bindParam(3, $this->idPerson);
            $smt->bindParam(4, $this->idRol);
            $smt->bindParam(5, $status);

            //respuesta
            $result = $smt->execute();
            return $result;
        }

        //metodo para ver los usuarios
        public function getUsers(){
            //consulta
            $sql = "SELECT P.*, U.idUser, U.Username, U.Stat, R.RolDescription, TD.Description FROM people AS P INNER JOIN users AS U ON P.idPerson = U.idPerson INNER JOIN roles AS R ON R.idRol = U.idRol INNER JOIN typeDocuments AS TD ON P.idTypeDocument = TD.idTypeDocument ORDER BY idUser ASC";

            //Vamos a preparar la consulta y ejecutar
            $stm = $this->db->prepare($sql);
            $stm->execute();

            //vamos a crear la variable para retornar los datos

            //fetchAll = estraer todos los datos
            $user = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $user;
        }

        //metodo para tomar el ID, filtrar, editar , eliminar y cambiar estado
        public function userId($id){
            $sql = "SELECT P.*, U.*, R.idRol, R.RolDescription AS rol, TD.Description AS typeDoc FROM people AS P INNER JOIN users AS U ON P.idPerson =U.idPerson INNER JOIN roles AS R ON R.idRol = U.idRol INNER JOIN typedocuments AS TD ON P.idTypeDocument = TD.idTypeDocument WHERE U.idUser = ?";

            $query = $this->db->prepare($sql);
            $query->bindParam(1, $id);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        //metodo para cambiar el estado
        public function changeStatus($id){
            //consulta
            $sql = "UPDATE users SET Stat =( CASE WHEN Stat = 1 THEN 0 ELSE 1 END ) WHERE idUser = ?";
            $query = $this->db->prepare($sql);
            $query->bindParam(1, $id);
            return $query->execute();

        }

        public function deleteUser($id){
            //consulta
            $sql = "DELETE U, P FROM users AS U INNER JOIN people AS P WHERE P.idPerson = U.idPerson AND U.idUser = ?;
            ALTER TABLE users AUTO_INCREMENT = 1;
            ALTER TABLE users AUTO_INCREMENT = 1";

            $query = $this->db->prepare($sql);
            $query->bindParam(1, $id);
            return $query->execute();

        }

        //metodo para actualizar
        public function updateUser(){
            //consulta
            $sql = "UPDATE people AS P INNER JOIN users AS U ON P.idPerson = U.idPerson SET P.idTypeDocument = ?, P.Document = ?, P.Names = ?, P.Lastname = ?, P.Email = ?, P.Phone = ?, P.Address = ?, U.Username = ?,U.Password = ? WHERE U.idUser =?";
            // crear la variable para preparar la consulta y enviarla 
            $stm = $this->db->prepare($sql);
            $stm->bindParam(1, $this->idTypeDocument);
            $stm->bindParam(2, $this->document);
            $stm->bindParam(3, $this->names);
            $stm->bindParam(4, $this->lastname);
            $stm->bindParam(5, $this->email);
            $stm->bindParam(6, $this->phone);
            $stm->bindParam(7, $this->address);
            $stm->bindParam(8, $this->username);
            $stm->bindParam(9, $this->password);
            $stm->bindParam(10, $this->idUser);
            //Respuesta
            $result = $stm->execute();
            return $result;
        }

        public function validateUserOnly(){
            //consulta
            $sql = "SELECT P.Document,P.Names,p.Lastname,U.idUser,U.Username,U.PASSWORD,R.RolDescription FROM people P 
            inner join typeDocuments TD on P.idTypeDocument=TD.idTypeDocument
            inner join users U on P.idPerson = U.idPerson 
            inner join roles R on U.idRol = R.idRol WHERE U.Username = ? and U.PASSWORD = ? and U.stat = 1 and R.idRol = 2";
    
    
            $stm = $this->db->prepare($sql);
            $stm->bindParam(1, $this->username);
            $stm->bindParam(2, $this->password);
            $stm->execute();
    
           //retornar datos 
            $user = $stm->fetch(PDO::FETCH_ASSOC);
            return $user;
            }
}
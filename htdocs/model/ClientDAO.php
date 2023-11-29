<?php 
include_once "../DBAcess/db.php";

class ClientDAO{


    public function insert_user(Client $client){
        
        $con = conectaDB();
        //verificar se email é único
        $sql = "insert into usr (name, email, password)value(:name, :email, :password);";
        $statment = $con -> prepare($sql);
        $name = $client->getName();
        $email =$client->getEmail();
        $password = $client->getPassword();
        
        $statment-> bindParam(":name",$name);
        $statment-> bindParam(":email",$email);
        $statment-> bindParam(":password",$password);
       
        $statment->execute();
        
    }
    public function update_user(Client $client){
        
        $con = conectaDB();
        
        $sql = "UPDATE usr SET name = :name, email = :email, password = :password WHERE id = :id";
        $statment = $con -> prepare($sql);
        $name = $client->getName();
        $email =$client->getEmail();
        $password = $client->getPassword();
        $id = $client->getId();
        $statment-> bindParam(":name",$name);
        $statment-> bindParam(":email",$email);
        $statment-> bindParam(":password",$password);
        $statment-> bindParam(":id",$id);
        $statment->execute();
 
}
    public function list_users(){
        try {
            $con = conectaDB();

            $stmt = $con->query("SELECT * FROM usr");

            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $users;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return false; 
        }
    }
    public function delete_user($id){
        
        $con = conectaDB();
        
        $sql = "DELETE FROM usr WHERE id = :id";
        $statment = $con -> prepare($sql);
        $statment-> bindParam(":id",$id);
        $statment->execute();
    }
    public function login(String $email, String $password){

        $con = conectaDB();
        
        $sql = "select * from usr WHERE email = :email AND password = :password";
        $statment = $con -> prepare($sql);
        $statment-> bindParam(":email",$email);
        $statment-> bindParam(":password",$password);
        $condicion = $statment->execute();
        if ($condicion){
            session_start();
            header("Location: http://localhost/home.php");
            return $_SESSION["login"]=$_GET['login'];
        }
        else{
            return $message="senha e/ou login inválidos";
        }
    }
    public function logout(){
        session_destroy();
    return  $message = "Sessão destruida";
    }
}
?>
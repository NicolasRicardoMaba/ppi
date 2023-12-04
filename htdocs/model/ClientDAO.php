<?php 
include_once "../DBAcess/db.php";

class ClientDAO{


    public function insert_user(Client $client){
        
        $con = conectaDB();

        $sql = "insert into usr (name, email, password)value(:name, :email, :password);";
        $statment = $con -> prepare($sql);
        $name = $client->getName();
        $email =$client->getEmail();
        $password = $client->getPassword();
        
        $statment-> bindParam(":name",$name);
        $statment-> bindParam(":email",$email);
        $statment-> bindParam(":password",$password);
       
        $statment->execute();
        if ($statment->rowCount() > 0) {
            header("Location: ../view/TelaHome.php");
        } else {
            header("Location: ../view/TelaCadastro.php");
            echo "<script>alert('Erro: Cadastro Mal-sucedido.');</script>";
        }
        
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
    
            if ($statment->rowCount() > 0) {
                header("Location: ../view/TelaHome.php");
            } else {
                header("Location: ../view/TelaHome.php");
                echo "<script>alert('Erro: Nenhum registro foi atualizado.');</script>";

            }
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
        if ($condicion) {
            $user = $statment->fetch(PDO::FETCH_ASSOC);
    
            if ($user) {
                session_start();    
                $_SESSION["email"] = $user['email'];
                header("Location: http://localhost/view/TelaHome.php");
                exit();
        }
        else{
            header("Location: http://localhost/view/TelaLogin.php");
        }
    }
}
    public function logout(){
        session_destroy();
    return  $message = "Sessão destruida";
    }
}
?>
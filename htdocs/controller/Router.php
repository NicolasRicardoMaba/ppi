<?php 
include_once "../controller/ClientController.php";
include_once "../model/Client.php";






$clientController = new ClientController();

if (!isset($_POST['op'])) {
    echo "n ta indo";
    exit();
}

$op = $_POST['op'];
echo $op;
switch ($op) {
    case "insert_user":
        if (
            isset($_POST['name']) &&
            isset($_POST['password']) &&
            isset($_POST['email'])
        ) {
            $client = new Client();
            $name =$_POST['name'];
            $password =$_POST['password'];
            $email = $_POST['email'];
            $client = new Client($name, $password, $email);

            $clientController->insert_user($client);
        }
        break;

    case "update_user":
        if (
            isset($_POST['name']) &&
            isset($_POST['password']) &&
            isset($_POST['email']) &&
            isset($_POST['id'])
        ) {
            $client = new Client();
            $name =$_POST['name'];
            $password =$_POST['password'];  
            $email = $_POST['email'];
            $id =($_POST['id']);
            $client = new Client($name, $password, $email,$id);
            $clientController->update_user($client);
        }
        break;

    case "delete_user":
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $clientController->delete_user($id);
            header("Location: ../view/TelaHome.php");

        }
        break;
    case "list_users":
    
        header("Location: ../view/TelaHome.php");
    
        break;


    case "login":
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $client = new Client();
            $email=($_POST['email']);
            $password =($_POST['password']);
            
            $clientController->login($email,$password);
            
        }
        break;

    case "logout":
        $clientController->logout();
        header("Location: ../view/TelaLogin.php");

        break;
}




?>


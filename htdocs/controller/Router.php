<?php 
include_once "../controller/ClientController.php";
include_once "../model/Client.php";

<<<<<<< HEAD





$clientController = new ClientController();

if (!isset($_POST['op'])) {
    echo "a";
    exit();
}

$op = $_POST['op'];

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
            $this->client = new Client();
            $name =$_POST['name'];
            $password =$_POST['password'];
            $email = $_POST['email'];
            $id =($_POST['id']);
            $client = new Client($name, $password, $email,$id);
            $clientController->update_user($this->client);
        }
        break;

    case "delete_user":
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $clientController->delete_user($id);
        }
        break;

    case "list_user":
        $clientController->list_users();
        break;

    case "login":
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $this->client = new Client();
            $email=($_POST['email']);
            $password =($_POST['password']);

            $clientController->login($email,$password);
        }
        break;

    case "logout":
        $clientController->logout();
        break;
}
?>
=======
    $this->clientController= new ClientController();
if (!isset($_POST['op'])){
echo("a");
exit();
}
$op= $_POST['op'];
switch($op){



    case("insert_user"):
        if((!isset($_POST['name']))
        ||  !isset($_POST['password'])
        ||  !isset($_POST['email'])){
            $this->client = new Client();
            $this->client = isset($_POST['name']);
            $this->client = isset($_POST['password']);
            $this->client = isset($_POST['email']);
            
            $this->clientController->insert_user($this->client);
        }
        case("update_user"):
            if((!isset($_POST['name']))
            ||  !isset($_POST['password'])
            ||  !isset($_POST['email'])
            ||  !isset($_POST['email'])){
                $this->client = new Client();
                $this->client = isset($_POST['name']);
                $this->client = isset($_POST['password']);
                $this->client = isset($_POST['email']);
                $this->client = isset($_POST['id']);

                $this->clientController->update_user($this->client);
            }
            case("delete_user"):
                if(!isset($_POST['id'])){
                $id = isset($_POST['id']);
                $this->clientController->delete_user($id);
}
            case("list_user"):
                $this->clientController->list_users(); 

            case("login"):
                if(!isset($_POST['email'])||!isset($_POST['password'])){
                    $this->client = new Client();
                    $email = isset($_POST['email']);
                    $password = isset($_POST['password']);
                     
                    $this->clientController->login($email, $password);
    }

            case("logout"):
            $this->clientController->logout(); 
}




?>
>>>>>>> 5efdf98c6ba5bef416ad7408be0c8469b5eca813

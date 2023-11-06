<?php 

    if(isset($_GET["login"]) && isset($_GET["senha"])){

        $login = $_GET["login"];
        $senha = $_GET["senha"];
        if($login == "admin" && $senha=="1234"){
            
            session_start();

$_SESSION["login"]=$_GET['login'];
header("Location: http://localhost/home.php");
            
            exit;
        }
    }
    else{
        echo "informe login e/ou senha";
    }


?>
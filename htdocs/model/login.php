<?php
    include_once "ClientDAO";
    if(isset($_GET["login"]) && isset($_GET["senha"])){

        $login = $_GET["login"];
        $senha = $_GET["senha"];
        if($login == "" && $senha=="1234"){
            
      
////
            
            exit;
        }
    }
    else{
        echo "informe login e/ou senha";
    }


?>
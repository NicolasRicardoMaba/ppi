<?php 
    function conectaDB(){
        $user = "root";
        $password = "root";
        $host = "localhost";
        $db="crud";


        $con = new PDO("mysql:host=$host;dbname=$db",$user,$password);
        return $con;
    }
?>
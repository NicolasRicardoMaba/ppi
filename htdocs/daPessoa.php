<?php 
include_once "db.php";
function cadastrarPessoa($nome,$email,$senha){
    $con = conectaDB();
    $sql = "insert into usr (nome, email, senha)value(:nome, :email,:senha);";
    $statment = $con -> prepare($sql);
    $statment-> bindParam(":nome",$nome);
    $statment-> bindParam(":nome",$email);
    $statment-> bindParam(":nome",$senha);
    $statment->execute();
}







?>
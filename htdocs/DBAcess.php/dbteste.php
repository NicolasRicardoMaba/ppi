<?php 
include_once "db.php";

if(conectaDB()){
    echo"Conected";
}else{
    echo"Error, Connection Failed";  
}
?>

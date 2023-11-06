<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php  
    
    echo("Teste");
    
        session_start();
        echo$_SESSION['login'];
     
    
    ?>
    <form action="logout.php">
        <input type="submit" value="Clicar" name="botao">
   </form>

</body>
</html>
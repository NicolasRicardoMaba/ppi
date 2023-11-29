<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controller/Router.php" method="post">
    <label for="id">Id</label>
    <input type="text" name="id">

    <label for="email">Email</label>
    <input type="email" name="email">
    
    <label for="name">Name</label>
    <input type="text" name="name">

    <label for="password">Password</label>
    <input type="password" name="password">
    <input type="hidden" name="op" value="update_user">
    <input type="submit" value="Enviar">    
</form>
<br>
<form action="../controller/Router.php" method="post">
    <label for="id">Id</label>
    <input type="text" name="id">
    <input type="hidden" name="op" value="delete_user">
    <input type="submit" value="Enviar">    
</form>
<br>
<p>dsaasddas</p>
<form action="../controller/Router.php" method="post">
   
    <input type="hidden" name="op" value="list_users">
    <input type="submit" value="Enviar">    

</body>
</html>
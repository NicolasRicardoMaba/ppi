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
    
    <label for="email">Email</label>
    <input type="email" name="email">

    <label for="password">Password</label>
    <input type="password" name="password">
    <input type="hidden" name="op" value="login">
    <input type="submit" value="Enviar">    
</form>
<form action="../controller/Router.php" method="post">
    
    
    <input type="hidden" name="op" value="logout">
    <input type="submit" value="logout">    
</form>
</body>
</html>
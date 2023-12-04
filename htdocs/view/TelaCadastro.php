<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css"> 
<style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}
</style>
</head>
<body>
<div class="login-container">
    <h1>Cadastro</h1>
    <form action="../controller/Router.php" method="post">
    
    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="name">Name</label>
    <input type="text" name="name" required>

    <label for="password">Password</label>
    <input style="margin-bottom:20px;" type="password" name="password" required>
    <input type="hidden" name="op" value="insert_user">
    
    <button type="submit">Enviar</button>
    </div>
</form>

</body>
</html>
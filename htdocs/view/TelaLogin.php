<?php
session_start();

if (!isset($_SESSION['email'])) {
}
else{
    header("Location: ../view/TelaHome.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login</title>
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
    <h1>Login</h1>
    <form action="../controller/Router.php" method="post">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" required>
      </div>

       <input type="hidden" name="op" value="login">
        <button type="submit">Enviar</button>
    </form>
    <a href="../view/TelaCadastro.php">cadastre-se</a>
  </div>    

</body>
</html>
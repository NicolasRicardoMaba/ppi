
<?php 
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ../view/TelaLogin.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css"> 
  <title>Meu Site</title>
</head>
<body>

  <header>
    <h1>Meu Site</h1>
  </header>

  <nav>
    <a href="#">Home</a>
    <a href="#">Sobre</a>
    <a href="#">Contato</a>
  </nav>

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
    <input type="submit" value="Atualizar">    
  </form>
  <br>

  <form action="../controller/Router.php" method="post">
    <label for="id">Id</label>
    <input type="text" name="id">
    <input type="hidden" name="op" value="delete_user">
    <input type="submit" value="Excluir">    
  </form>
  <br>

  <h2 style="text-align:center;">Lista de Usuários</h2>
  <div class="user-list">

  <?php 
    include_once "../controller/ClientController.php";
    $clientController = new ClientController();
  
    $users = $clientController->list_users();
  
    foreach ($users as $user) { 
        echo "<div class='user-item'>";
        echo "<span class='user-id'>User ID: " . $user['id'] . "</span><br>";
        echo "<span class='user-name'>Name: " . $user['name'] . "</span><br>";
        echo "<span class='user-email'>Email: " . $user['email'] . "</span><br>";
        echo "<button class='action-button' onclick='editUser(" . $user['id'] . ")'>Editar</button>";
        echo "</div><hr>";
    }
    ?>

    <script>
         function editUser(userId) {
        var allEditForms = document.querySelectorAll('.edit-form');
        allEditForms.forEach(function(form) {
          form.style.display = 'none';
        });

        var editForm = document.getElementById('edit-form-' + userId);
        editForm.style.display = 'block';
      }
    </script>
  
    
</body>
</html>

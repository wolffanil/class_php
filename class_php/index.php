<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <form action="./vendor/login.php" method="post">
      <label>Логин</label>
      <input type="text" required name="name" />

      <label>Пароль</label>
      <input type="password" required name="password" />

      <button type="submit">Войти</button>

      <?php
        if(isset($_SESSION['error_auth'])) {
            echo '<h1>' .$_SESSION['error_auth']. '</h1>';
        }

        unset($_SESSION['error_auth']);
      ?>
    </form>
  </body>
</html>

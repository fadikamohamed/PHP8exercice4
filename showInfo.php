<?php
if (!empty($_POST['login']) AND !empty($_POST['password'])) {
  setCookie('login', $_POST['login'], time() + 800, null, null, false, true);
  setCookie('password', $_POST['password'], time() + 800, null, null, false, true);
}
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <p>
      <?php
        if (!empty($_POST['login']) && !empty($_POST['password'])) {
          echo $_COOKIE['login'] . ' ' . $_COOKIE['password'];
        }
       ?>
    </p>
  </body>
</html>

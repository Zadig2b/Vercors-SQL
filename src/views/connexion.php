<?php
require_once 'header.php'; 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion Admin</title>
  <link rel="stylesheet" href="./../../public/assets/style.css">
</head>
<body>
  <h1>Connexion</h1>
  <?php if (isset($error)) { ?>
    <p style="color: red;"><?php echo $error; ?></p>
  <?php } ?>
  <form action="index.php?action=login" method="post">
    <label for="email">Adresse Email :</label>
    <input type="email" name="email" id="email" required>
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" required>
    <button type="submit">Connexion</button>
  </form>
</body>
</html>

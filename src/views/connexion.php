<?php
include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
  <link rel="stylesheet" href="<?= HOME_URL ?>assets/css/style.css">
</head>
<body>
  <h1>Connexion</h1>
  <?php if (isset($error)) { ?>
    <p style="color: red;"><?php echo $error; ?></p>
  <?php } ?>
  <form action="<?php echo HOME_URL; ?>connexion" method="post">
    <label for="email">Adresse Email :</label>
    <input type="email" name="email" id="email" required>
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" required>
    <button type="submit">Connexion</button>
  </form>
</body>
</html>

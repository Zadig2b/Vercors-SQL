<?php
$url = $_SERVER['REQUEST_URI'];
switch ($url) {
  case str_contains($url, 'tableau-de-bord'):
    $url = 'tableau-de-bord';
  break 1;
  case str_contains($url, 'tableau-admin'):
    $url = 'tableau-admin';
  break 1;

  default:
    $url = 'form';
  break 1;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activité 4 - Formulaire inscription</title>
  <link rel="stylesheet" href="../../public/assets/main.css">
  <?php if ($url == 'tableau-de-bord') { ?>
    <link rel="stylesheet" href="../../public/assets/dashboard.css">
  <?php } else if ($url == 'tableau-admin') { ?>
    <link rel="stylesheet" href="../../public/assets/dashboard.css">
    <link rel="stylesheet" href="../../public/assets/admin.css">
  <?php } else {?>
    <link rel="stylesheet" href="../../public/assets/form.css">
  <?php } ?>
  <script src="./../../public/assets/script2.js" defer></script>
</head>
<body>

  <div id="header">
    <div class="logo">Vercors Music Festival</div>
    <div>
      <?php if (isset($_SESSION['connecté'])) { ?>
        <a href="deconnexion.php">Déconnexion</a>
      <?php } else { ?>
        <a href="./../../index.php">Réservation</a>
        <a href="./src/views/admin.php">Admin</a>
        <a href="./src/views/inscription.php">Inscription</a>
      <?php } ?>
    </div>
  </div>
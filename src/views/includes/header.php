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
  <title>Vercors Music Festival</title>
  <link rel="stylesheet" href="<?= HOME_URL ?>assets/css/main.css">
  <?php if ($url == 'tableau-de-bord') { ?>
    <link rel="stylesheet" href="<?= HOME_URL ?>assets/css/dashboard.css">
  <?php } else if ($url == 'tableau-admin') { ?>
    <link rel="stylesheet" href="<?= HOME_URL ?>assets/css/dashboard.css">
    <link rel="stylesheet" href="<?= HOME_URL ?>assets/css/admin.css">
  <?php } else {?>
    <link rel="stylesheet" href="<?= HOME_URL ?>assets/css/form.css">
  <?php } ?>
  <script src="<?= HOME_URL ?>assets/js/script2.js" defer></script>
</head>
<body>

<div id="header">
  <div class="logo">Vercors Music Festival</div>
  <div>
    <?php if (isset($_SESSION['connected'])) { ?>
      <a href="<?php echo HOME_URL; ?>">Réservation</a>
      <a href="<?php echo HOME_URL; ?>deconnexion">Déconnexion</a>
      <a href="<?php echo HOME_URL; ?>dashboard">Tableau de Bord</a>


    <?php } else { ?>
      <!-- <a href="<?php echo HOME_URL; ?>">Réservation</a> -->
      <a href="<?php echo HOME_URL; ?>connexion">Connexion</a>
      <a href="<?php echo HOME_URL; ?>registration">Inscription</a>
    <?php } ?>
  </div>
</div>


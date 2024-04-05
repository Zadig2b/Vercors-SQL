<?php
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des réservations - Page Utilisateur</title>
  <link rel="stylesheet" href="<?= HOME_URL ?>assets/css/style.css">
</head>
<body>
<h1>Bienvenue, <?php echo $_SESSION['name']; ?> !</h1>

<?php if (!empty($reservations)) : ?>
    <h2>Vos Réservations:</h2>
    <ul>
        <?php foreach ($reservations as $reservation) : ?>
            <li id=liResa>
            <?php if (!empty($reservation['id'])) echo "Reservation ID: " . $reservation['id'] . "<br>"; ?>
<?php if (!empty($reservation['nombrePlaces'])) echo "Nombre de place(s): " . $reservation['nombrePlaces'] . "<br>"; ?>
<?php if (!empty($reservation['tarifReduit'])) echo "Tarif Reduit: " . $reservation['tarifReduit'] . "<br>"; ?>
<?php if (!empty($reservation['passSelection'])) echo  $reservation['passSelection'] . "<br>"; ?>
<?php if (!empty($reservation['prix'])) echo "Prix: " . $reservation['prix'] . "€" . "<br>"; ?>
<?php if (!empty($reservation['choixJour'])) echo  $reservation['choixJour'] . "<br>"; ?>
<?php if (!empty($reservation['emplacementTente'])) echo "Emplacement Tente: " . $reservation['emplacementTente'] . "<br>"; ?>
<?php if (!empty($reservation['emplacementCamion'])) echo "Emplacement Camion: " . $reservation['emplacementCamion'] . "<br>"; ?>
<?php if (!empty($reservation['enfants'])) echo $reservation['enfants'] . "<br>"; ?>
<?php if (!empty($reservation['nombreCasquesEnfants'])) echo "Nombre Casques Enfants: " . $reservation['nombreCasquesEnfants'] . "<br>"; ?>
<?php if (!empty($reservation['NombreLugesEte'])) echo "Nombre Luges Ete: " . $reservation['NombreLugesEte'] . "<br>"; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p>No reservations found.</p>
<?php endif; ?>

</body>
</html>

<?php
?>

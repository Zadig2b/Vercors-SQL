<?php
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des réservations - Page Utilisateur</title>
  <link rel="stylesheet" href="./../../public/assets/style.css">
</head>
<body>
  <h1>Liste des réservations - Page Utilisateur</h1>
  <table border="1">
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>E-mail</th>
      <th>Téléphone</th>
      <th>Adresse</th>
      <th>Nombre de résérvations</th>
      <th>Tarif</th>
      <th>Pass</th>
      <th>Prix</th>
      <th>Date(s)</th>
      <!-- Ajoutez d'autres en-têtes de colonnes si nécessaire -->
    </tr>
    <?php
                // Debug: Check if user ID is correctly retrieved
                echo "User ID: " . $_SESSION['userId']; // Output the user ID
                
    ?>
  </table>
</body>
</html>

<?php
?>

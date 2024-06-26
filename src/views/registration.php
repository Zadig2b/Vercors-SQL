<?php
require_once 'includes/header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= HOME_URL ?>assets/css/style.css">

    <title>Registration</title>
</head>
<body>
    <h1>Inscription</h1>
    <form action="<?php echo HOME_URL; ?>registration" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" required><br>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <label for="role" hidden=true>Role:</label>
        <input type="text" id="role" name="role" hidden=true><br>
        <label for="RGPD">RGPD:</label>
        <input type="checkbox" id="RGPD" name="RGPD" required><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>

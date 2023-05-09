<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book'in - Booking</title>
    <link rel="stylesheet" href="../public/css/reset.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Book'in</h1>
            <nav>
                <ul class="main-nav">
                    <li><a href="../../public/index.php">Accueil</a></li>
                    <li><a href="hotels.php">Hôtels</a></li>
                </ul>
            </nav>
        </header>
        <div class="page-preview">
            <h2>Réservez une chambre d'hôtel rapidement</h2>
            <p>Remplissez le formulaire avec quelque informations et validez votre réservation en toute simplicité.</p>
        </div>
        <main>
            <form action="" method="post">
                <div>
                    <label for="name">Votre nom : </label>
                    <input type="text" name="name" id="name">
                </div>
                <div>
                    <label for="name">Votre email : </label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="hotel">Hôtel : </label>
                    <input type="text" name="hotel" id="hotel">
                </div>
            </form>
        </main>
<?php include "templates/footer.php" ?>
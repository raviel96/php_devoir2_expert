<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Nom du site</h1>
            <nav>
                <ul class="main-nav">
                    <li><a href="#hotels">Hôtels</a></li>
                    <li><a href="#booking">Réservation</a></li>
                </ul>
            </nav>
        </header>
        <div class="page-preview">
            <p></p>
        </div>
        <main>
            <section id="hotels" class="hotels">
                <div class="hotels-preview">
                    <h2>Cherchez l'hôtel qui vous correspond</h2>
                    <p>Découvrez la liste des différents hôtels disponibles sélectionnée par nos soins</p>
                    <a href="../views/booking.php">Voir plus</a>
                </div>
            </section>
            <section id="booking" class="booking">
                <div class="booking-preview">
                    <h2>Réservez une chambre d'hôtel rapidement</h2>
                    <p>Effectuez votre réservation en quelque clicks seulement. Replissez un formulaire avec les informations nécessaires et le tour est joué !</p>
                    <a href="../views/booking.php">Voir plus</a>
                </div>
            </section>
        </main>
<?php include "../views/templates/footer.php"?>
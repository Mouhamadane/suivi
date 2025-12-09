<?php
    session_start();
    if (!isset($_SESSION['logged'])) {
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liens DPISE</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header class="header">
        <br><br><br><br><br><br><br>
        <div class="logout-container">
            <a href="logout.php" class="logout-btn">Déconnexion</a>
        </div>
    </header>
    

    <main class="container">
        <!-- GFDI -->
        <section class="guichet-card gfdilogo">
            <div class="links">
                <a href="https://ee.kobotoolbox.org/x/HBoeqjHk" class="btn">Formulaire de Supervision</a>
                <a href="https://ee.kobotoolbox.org/x/170Ofymu" class="btn">Formulaire d'Évaluation&nbsp&nbsp&nbsp&nbsp</a>
            </div>
        </section>

        <!-- GFEOP -->
        <section class="guichet-card gfeoplogo">
            <div class="links">
                <a href="https://ee.kobotoolbox.org/x/nLKCO2sJ" class="btn">Formulaire de Supervision</a>
                <a href="https://ee.kobotoolbox.org/x/Mwtwij3G" class="btn">Formulaire d'Évaluation&nbsp&nbsp&nbsp&nbsp</a>
            </div>
        </section>

        <!-- GFET -->
        <section class="guichet-card gfetlogo">
            <div class="links">
                <a href="https://ee.kobotoolbox.org/x/sEwksJ46" class="btn">Formulaire de Supervision</a>
                <a href="#" class="btn">Formulaire d'Evaluation&nbsp&nbsp&nbsp&nbsp </a>
                <br>
            </div>
        </section>
    <br>
    </main>

    <footer class="footer">
        <h4>DPISE © 3FPT - Fonds de Financement de la Formation Professionnelle et Technique</h4>
    </footer>

</body>
</html>

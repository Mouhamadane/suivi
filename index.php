<?php
session_start();

if(isset($_POST['username']) && $_POST['password']){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Identifiants fixés 
    $valid_user = "suivi@3fpt.sn";
    $valid_pass = "3fpt2025";

    // Vérification
    if ($username === $valid_user && $password === $valid_pass) {
        $_SESSION['logged'] = true;
        header("Location: ./home.php");
        exit();
    }
    // Sinon erreur
    header("Location: index.php?error=1");
    exit();
}



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - 3FPT</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- ===== HEADER / BANNIÈRE ===== -->
    <header class="header"> </header>
    <div class="header-subtitle"> Dispositif de suivi – DPISE </div>
    <!-- ===== CONTENU PRINCIPAL ===== -->
    <div class="login-container">
        <div class="login-title">Authentification</div>

        <!-- MESSAGE ERREUR DYNAMIQUE -->
        <?php if (isset($_GET['error'])): ?>
            <div class="error-msg">Identifiant ou mot de passe incorrect.</div>
        <?php endif; ?>

        <form method="POST">
            <input type="text" name="username" placeholder="Identifiant" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button class="login-btn" type="submit">Se connecter</button>
        </form>
    </div>

    <!-- ===== FOOTER ===== -->
     <footer class="footer">
        <h4>DPISE © 3FPT - Fonds de Financement de la Formation Professionnelle et Technique</h4>
    </footer>


</body>
</html>

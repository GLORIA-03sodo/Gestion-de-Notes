<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/connexion.css">
</head>
<body>
     <nav>
        <div class="logo">
            <div class="logo-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <span class="logo-text">EduNotes</span>
        </div>
        <div class="nav-links">
            <a href="../indes.php">Accueil</a>
            <a href="../indes.php#features">Fonctionnalités</a>
            <a href="../indes.php#contact">Contact</a>
        </div>
        <a href="connexion.php" class="connexion-btn">
            <i class="fas fa-sign-in-alt"></i> Connexion
        </a>
    </nav>

    <form action="" class="form-container">
        <h1>Connexion</h1>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Se connecter</button>
        <p class="texte">Pas encore de compte ? Inscrivez-vous</p>
        <div class="compte">
            <p><a href="inscriptionProf.php">Espace Professeur</a></p> 
            <p><a href="inscriptionEtudiant.php">Espace Étudiant</a></p>
        </div>
    </form>
   <footer id="contact">
        <p>&copy; 2026 EduNotes - Plateforme de Gestion et Consultation de Notes | Tous droits réservés</p>
</footer>
</body>
</html>
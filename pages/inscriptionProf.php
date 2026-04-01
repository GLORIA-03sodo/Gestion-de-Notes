<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Professeur</title>
    <link rel="stylesheet" href="../styles/inscriptionProf.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Barre de Navigation -->
    <nav>
        <div class="logo">
            <div class="logo-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <span class="logo-text">EduNotes</span>
        </div>
        <div class="nav-links">
            <a href="../indes.php#accueil">Accueil</a> 
            <a href="../indes.php#features">Fonctionnalités</a>
            <a href="../indes.php#contact">Contact</a>
        </div>
        <a href="../pages/connexion.php" class="connexion-btn">
            <i class="fas fa-sign-in-alt"></i> Connexion
        </a>
    </nav>
    <div class="form-container">
        <h1>Inscription Professeur</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="firstname">Prénom *</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>

            <div class="form-group">
                <label for="lastname">Nom de famille *</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>

            <div class="form-group">
                <label for="email">Adresse email *</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Numéro de téléphone</label>
                <input type="tel" id="phone" name="phone">
            </div>

            <div class="form-group">
                <label for="specialty">Spécialité *</label>
                <input type="text" id="specialty" name="specialty" placeholder="Ex: Mathématiques, Français..." required>
            </div>

            <div class="form-group">
                <label for="diplome">Diplôme *</label>
                <input type="text" id="diplome" name="diplome" placeholder="Ex: Master, Licence..." required>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe *</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirmer le mot de passe *</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <button type="submit">S'inscrire</button>

            <div class="form-footer">
                <p>Vous avez déjà un compte ? <a href="login.php">Se connecter</a></p>
            </div>
        </form>
    </div>
    <!-- Pied de page -->
    <footer id="contact">
        <p>&copy; 2026 EduNotes - Plateforme de Gestion et Consultation de Notes | Tous droits réservés</p>
    </footer>
</body>
</html>
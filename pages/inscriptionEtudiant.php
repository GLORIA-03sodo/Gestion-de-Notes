<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Étudiant</title>
    <link rel="stylesheet" href="../styles/inscriptionEtudiant.css">
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
    <div class="container">
        <h1>Inscription Étudiant</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="dateNaissance">Date de Naissance:</label>
                <input type="date" id="dateNaissance" name="dateNaissance" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="motDePasse">Mot de Passe:</label>
                <input type="password" id="motDePasse" name="motDePasse" required>
            </div>
            <div class="form-group">
                <label for="filiere">Filière:</label>
                <select id="filiere" name="filiere" required>
                    <option value="">Sélectionnez une filière</option>
                    <option value="informatique">Informatique</option>
                    <option value="gestion">Gestion</option>
                    <option value="ingenierie">Ingénierie</option>
                    <option value="commerce">Commerce</option>
                </select>
            </div>
            <div class="form-group">
                <label for="niveau">Niveau:</label>
                <select id="niveau" name="niveau" required>
                    <option value="">Sélectionnez un niveau</option>
                    <option value="l1">Licence 1</option>
                    <option value="l2">Licence 2</option>
                    <option value="l3">Licence 3</option>
                    <option value="m1">Master 1</option>
                    <option value="m2">Master 2</option>
                </select>
            </div>
            <button type="submit">S'inscrire</button>
        </form>
    </div>
     <!-- Pied de page -->
    <footer id="contact">
        <p>&copy; 2026 EduNotes - Plateforme de Gestion et Consultation de Notes | Tous droits réservés</p>
    </footer>
</body>
</html>
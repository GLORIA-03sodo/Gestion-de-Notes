<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduNotes - Gestion & Consultation</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/index.css">
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
            <a href="#accueil">Accueil</a>
            <a href="#features">Fonctionnalités</a>
            <a href="#contact">Contact</a>
        </div>
        <a href="./pages/connexion.php" class="connexion-btn">
            <i class="fas fa-sign-in-alt"></i> Connexion
        </a>
    </nav>

    <!-- Section Principale -->
    <main>
        <div class="hero-section" id="accueil">
            <h1>La réussite universitaire, <span class="highlight">simplifiée.</span></h1>
            <p class="hero-description">
                Une plateforme moderne et intuitive pour la gestion des notes par les professeurs, l'administration et le suivi en temps réel pour les étudiants.
            </p>
        </div>

        <!-- Cartes de Sélection de Portail -->
        <div class="cards-container" id="features">
            
            <!-- Espace Administration -->
            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-chalkboard-user"></i>
                </div>
                <h2>Espace Professeurs</h2>
                <p>Saisissez et gérez facilement les notes de vos étudiants, suivez les performances et générez des rapports détaillés.</p>
                <a href="./pages/connexion.php" class="card-btn">Accéder <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Espace Administration -->
            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-cogs"></i>
                </div>
                <h2>Espace Administration</h2>
                <p>Gérez les classes, les utilisateurs, configurez le système et consultez les statistiques complètes de l'établissement.</p>
                <a href="./pages/connexion.php" class="card-btn">Accéder <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Espace Étudiants -->
            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h2>Espace Étudiant</h2>
                <p>Consultez vos résultats, suivez vos moyennes, analysez votre progression et téléchargez vos bulletins.</p>
                <a href="./pages/connexion.php" class="card-btn">Voir mes Notes <i class="fas fa-arrow-right"></i></a>
            </div>
            
        </div>
    </main>

    <!-- Pied de page -->
    <footer id="contact">
        <p>&copy; 2026 EduNotes - Plateforme de Gestion et Consultation de Notes | Tous droits réservés</p>
    </footer>

</body>
</html>
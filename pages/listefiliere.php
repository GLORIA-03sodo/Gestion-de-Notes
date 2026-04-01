<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Universitaire - Secrétariat</title>
    <link rel="stylesheet" href="../styles/secretaire.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<header>
    <nav>
        <a href="secretaire.etudiants.php">Étudiants</a>
        <a href="secretaire.notes.php">Notes</a>
        <a href="secretaire.matiere.php">Matière</a>    
        <a href="listefiliere.php">Filière</a>
        <a href="listeProf.php">Professeurs</a>
    </nav>
</header>
<main class="container-principal">
    <div class="left-container">
        <div class="profile-etudiant">

        </div>
        <ul class="nav-menu">
            <li><a href="secretaire.php" class="nav-link"><i class="fas fa-home"></i> Accueil</a></li>
            <li><a href="secretaire.etudiants.php" class="nav-link"><i class="fas fa-users"></i> Étudiants</a></li>
            <li><a href="secretaire.notes.php" class="nav-link"><i class="fas fa-file-alt"></i> Notes</a></li>
            <li><a href="secretaire.matiere.php" class="nav-link"><i class="fas fa-book"></i> Matière</a></li>
            <li><a href="listefiliere.php" class="nav-link"><i class="fas fa-layer-group"></i> Filière</a></li>
            <li><a href="listeProf.php" class="nav-link"><i class="fas fa-chalkboard-user"></i> Professeurs</a></li>
            <li><a href="" class="nav-link"><i class="fas fa-cog"></i> Paramètres</a></li>
            <li><a href="" class="nav-link"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
        </ul>
    </div>
    <div class="right-container">
        <h2>Tableau de Bord</h2>
        <div class="dashboard-grid">
            <div class="card">
                <div class="card-icon"><i class="fas fa-users"></i></div>
                <div class="card-title">Total Étudiants</div>
                <div class="card-value">245</div>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fas fa-book"></i></div>
                <div class="card-title">Total Matières</div>
                <div class="card-value">18</div>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fas fa-chalkboard-user"></i></div>
                <div class="card-title">Total Professeurs</div>
                <div class="card-value">32</div>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fas fa-graduation-cap"></i></div>
                <div class="card-title">Total Filières</div>
                <div class="card-value">6</div>
            </div>
        </div>

        <div class="table-container">
            <h2>Listes des Filières</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Filière</th>
                        <th>Date d'Inscription</th>
                    </tr>
                </thead>
                <tbody>
                   <!-- Les données des étudiants récents seront affichées ici -->
                </tbody>
            </table>
        </div>
    </div>
</main>



</body>
</html>
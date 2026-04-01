<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Universitaire - Secrétariat</title>
    <link rel="stylesheet" href="../styles/secretaire.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
    .left-container{
            background-color: #2c3e50;
            width: 20%;
            height: 80vh;
            position: fixed;
            top: 80px;
            padding: 20px 0;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .container-principal{
            background-color: #f5f7fa;
            display: flex;
            margin-top: 80px;
            min-height: 80vh;
        }
        .right-container{
            width: 80%;
            margin-left: 20%;
            padding: 30px;
        }
        .dashboard-grid{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .card{
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-left: 4px solid #3498db;
        }
        .card-title{
            font-size: 14px;
            color: #7f8c8d;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        .card-value{
            font-size: 32px;
            font-weight: bold;
            color: #2c3e50;
        }
        .card-icon{
            font-size: 24px;
            color: #3498db;
            margin-bottom: 10px;
        }
        .table-container{
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
        table{
            width: 100%;
            border-collapse: collapse;
        }
        th{
            background-color: #34495e;
            color: white;
            padding: 12px;
            text-align: left;
        }
        td{
            padding: 12px;
            border-bottom: 1px solid #ecf0f1;
        }
        tr:hover{
            background-color: #f9f9f9;
        }
        h2{
            color: #2c3e50;
            margin-bottom: 20px;
        }
        .profile-etudiant{
            padding: 20px;
            border-bottom: 1px solid #34495e;
            margin-bottom: 20px;
            text-align: center;
        }
        .nav-menu{
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .nav-menu li{
            margin: 0;
        }
        .nav-link{
            display: flex;
            align-items: center;
            padding: 15px 20px;
            color: #ecf0f1;
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        .nav-link:hover{
            background-color: #34495e;
            border-left-color: #3498db;
            color: #3498db;
            padding-left: 25px;
        }
        .nav-link i{
            margin-right: 12px;
            font-size: 18px;
        }
</style>
<body>

<header>
    <nav>
        <a href="secretaire.etudiants.php">Étudiants</a>
        <a href="secretaire.notes.php">Notes</a>
        <a href="secretaire.matiere.php">Matière</a>
        <a href="#">Moyenne</a>
        <a href="#">Filière</a>
        <a href="#">Professeurs</a>
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
            <h2>Liste des Professeurs</h2>
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
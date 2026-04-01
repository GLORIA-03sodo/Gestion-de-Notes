

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - EduNotes</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }

        .container {
            text-align: center;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 90%;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 10px;
            font-size: 2.5em;
        }

        h2 {
            color: #7f8c8d;
            font-weight: 400;
            margin-bottom: 40px;
            font-size: 1.2em;
        }

        .button-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .btn {
            padding: 15px;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, background-color 0.2s;
            text-decoration: none;
            color: white;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-etudiant { background-color: #1abc9c; } /* Turquoise comme votre bouton "Notes" */
        .btn-professeur { background-color: #3498db; } /* Bleu comme votre bouton "Portail" */
        .btn-secretaire { background-color: #34495e; } /* Gris foncé pro */

    </style>
</head>
<body>

    <div class="container">
        <h1>Bienvenue sur EduNotes</h1>
        <h2>Vous souhaitez vous connecter en tant que :</h2>

        <div class="button-group">
            <div class="button-group">
    <a href="interface_etudiant.php" class="btn btn-etudiant">Je suis Étudiant</a>
    <a href="interface_professeur.php" class="btn btn-professeur">Je suis Professeur</a>
    <a href="interface_secretaire.php" class="btn btn-secretaire">Je suis Secrétaire</a>
</div>
           
            <a href="Index.php">Retour</a>
        </div>
    </div>

</body>
</html>
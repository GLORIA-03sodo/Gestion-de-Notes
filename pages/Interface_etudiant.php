<?php
include("../config/db.php");
$req_fi= $conn->prepare("SELECT * FROM filieres ORDER BY libelle_fi");
$req_fi->execute();

$req_niv= $conn->prepare("SELECT * FROM niveau ORDER BY libelle_niv");
$req_niv->execute();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface Étudiant/Parents - EduNotes</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fdf6e9; /* Fond beige clair comme sur votre image */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .form-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            width: 100%;
            max-width: 500px;
        }

        h1 {
            color: #1a2b48;
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #555;
        }

        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box; /* Évite que l'input dépasse */
            font-size: 1rem;
        }

        .row {
            display: flex;
            gap: 15px;
        }

        .btn-next {
            width: 100%;
            padding: 15px;
            background-color: #9cd4a5; /* Vert doux comme sur votre bouton "Étudiant" */
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
            transition: opacity 0.3s;
        }

        .btn-next:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <div class="form-card">
        <h1>Veuillez remplir tous les champs</h1>
        
        <form action="../logique/etudiant.php" method="POST">
            

            <div class="row">
                <div class="form-group" style="flex:1">
                    <label>Nom(s)</label>
                    <input type="text" name="nom" required>
                </div>
                <div class="form-group" style="flex:1">
                    <label>Prénom(s)</label>
                    <input type="text" name="prenom" required>
                </div>
            </div>
            <div class="row">
                <div>
                    <label>Date de naissance</label>
                    <input type="date" name="dnaiss" placeholder="Ex: jj/mm/aaaa" required>
                </div>
                <div>
                    <label>Sexe</label>
                    <select name="sexe" id="">
                        <option value="">Choisie le sexe</option>
                        <option value="M">Masculin</option>
                        <option value="F">Féminin</option>
                    </select>
            
                </div>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="exemple@ecole.com" required>
            </div>

            <div class="form-group">
                <label>Filière</label>
                <select name="filiere" required>
                    <option value="">Sélectionnez votre filièree</option>
                    <?php
                    while($fi=$req_fi->fetch()){?>
                        <option value="<?= $fi["Code_fi"]?>"><?= $fi["libelle_fi"]?></option>
                    <?php
                    }
                    ?>
                    
                </select>
            </div>

            <div class="form-group">
                <label>Niveau </label>
                <select name="niveau" required>
                    <option value="">Sélectionnez votre niveau</option>
                    <?php
                    while($niv=$req_niv->fetch()){?>
                        <option value="<?= $niv["Code_niv"]?>"><?= $niv["libelle_niv"]?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
    <label>Créez votre mot de passe</label>
    <input type="password" name="mdp" placeholder="Minimum 6 caractères" required>
</div>

<a href="relevé.etudiant.php">
    
</a><button type="submit" class="btn-inscription">S'inscrire</button>
            
        </form>
    </div>

</body>
</html>
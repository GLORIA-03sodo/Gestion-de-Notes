<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace Secrétariat - EduNotes</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #fdf6e9; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .form-card { background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); width: 100%; max-width: 500px; text-align: center; }
        .form-group { margin-bottom: 15px; text-align: left; }
        label { display: block; margin-bottom: 5px; font-weight: 600; color: #555; }
        input, select { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box; }
        /* Couleur spécifique : Gris / Bleu foncé */
        .btn-next { width: 100%; padding: 15px; background-color: #95a5a6; border: none; border-radius: 10px; color: white; font-size: 1.1rem; font-weight: bold; cursor: pointer; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="form-card">
        <img src="https://img.icons8.com" width="60" alt="icon">
        <h1>Espace Secrétariat</h1>
        <form>
            <div class="form-group">
                <label>Identifiant Administrateur</label>
                <input type="text" placeholder="AdminID-00" required>
            </div>
            <div class="form-group">
                <label>Nom(s) Administateur</label>
                <input type="text" required>
            </div>
             <div class="form-group">
                <label>Prénom(s) Administateur</label>
                <input type="text" required>
                
            </div>
            <div class="form-group">
                <label>Email professionnel</label>
                <input type="email" placeholder="nom.prenom@edunotes.edu" required>
            </div>
            <div class="form-group">
    <label>Créez votre mot de passe</label>
    <input type="password" name="password" placeholder="Minimum 6 caractères" required>
</div>
            <a href="secretaire.php"><button type="submit" class="btn-next">Suivant</button></a>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace Professeur - EduNotes</title>
    <style>
        /* Style identique à l'étudiant pour la cohérence */
        body { font-family: 'Segoe UI', sans-serif; background-color: #fdf6e9; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .form-card { background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); width: 100%; max-width: 500px; text-align: center; }
        .form-group { margin-bottom: 15px; text-align: left; }
        label { display: block; margin-bottom: 5px; font-weight: 600; color: #555; }
        input, select { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box; }
        /* Couleur spécifique : Bleu */
        .btn-next { width: 100%; padding: 15px; background-color: #7fb3d5; border: none; border-radius: 10px; color: white; font-size: 1.1rem; font-weight: bold; cursor: pointer; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="form-card">
        <img src="https://img.icons8.com" width="60" alt="icon">
        <h1>Espace Professeur</h1>
        <form>
            <div class="form-group">
                <label>Matricule Enseignant</label>
                <input type="text" placeholder="Ex: PROF-2024-001" required>
            </div>
            <div class="form-group">
                <label>Nom complet</label>
                <input type="text" required>
            </div>
            <div class="form-group">
                <label>Matière(s) ensegnée(s)</label>
                <input type="text" placeholder="Mathématiques, Physique..." required>
            </div>
            <div class="form-group">
                <label>Département</label>
                  <input type="text" placeholder="Sciences, Economie..." required>
              
            </div>
            <div class="form-group">
    <label>Créez votre mot de passe</label>
    <input type="password" name="password" placeholder="Minimum 6 caractères" required>
</div>
            <button type="submit" class="btn-next">Suivant</button>
        </form>
    </div>
</body>
</html>
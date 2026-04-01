<?php
// get_donnees.php - Récupérer les données
function getDonnees() {
    // À remplacer par vos requêtes de base de données
    $donnees = array(
        '1' => array(
            '1' => array(
                array('id' => 101, 'nom' => 'Ali Ahmed', 'email' => 'ali@example.com'),
                array('id' => 102, 'nom' => 'Fatima Said', 'email' => 'fatima@example.com')
            ),
            '2' => array(
                array('id' => 101, 'nom' => 'Ali Ahmed', 'email' => 'ali@example.com')
            )
        )
    );
    return $donnees;
}

$filiere = isset($_POST['filiere']) ? $_POST['filiere'] : '';
$matiere = isset($_POST['matiere']) ? $_POST['matiere'] : '';
$etudiants = array();
$message = '';
$errors = array();

if (!empty($_POST['submit'])) {
    if (empty($_POST['filiere']) || empty($_POST['matiere'])) {
        $errors[] = 'Veuillez sélectionner une filière et une matière.';
    } else {
        // Récupérer les étudiants
        $donnees = getDonnees();
        if (isset($donnees[$filiere]) && isset($donnees[$filiere][$matiere])) {
            $etudiants = $donnees[$filiere][$matiere];
        }
        
        // Traiter l'enregistrement des notes
        if (!empty($_POST['notes'])) {
            $valide = true;
            $notesAEnregistrer = array();
            
            foreach ($_POST['notes'] as $index => $note) {
                if ($note === '') {
                    $errors[] = 'Veuillez saisir une note pour l\'étudiant à l\'index ' . $index;
                    $valide = false;
                } elseif (!is_numeric($note) || $note < 0 || $note > 20) {
                    $errors[] = 'Note invalide (' . htmlspecialchars($note) . '). La note doit être entre 0 et 20.';
                    $valide = false;
                } else {
                    $notesAEnregistrer[] = array(
                        'etudiant_id' => $etudiants[$index]['id'],
                        'filiere_id' => $filiere,
                        'matiere_id' => $matiere,
                        'note' => floatval($note)
                    );
                }
            }
            
            if ($valide && count($notesAEnregistrer) > 0) {
                // Ici ajouter le code pour enregistrer les notes en base de données
                $message = '✅ Notes enregistrées avec succès!';
            }
        }
    }
}

$donnees = getDonnees();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Professeur</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 30px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid #3498db;
            padding-bottom: 20px;
        }
        
        .header h1 {
            color: #2c3e50;
            font-size: 28px;
            margin-bottom: 10px;
        }
        
        .header p {
            color: #7f8c8d;
            font-size: 14px;
        }
        
        .filters {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }
        
        .filter-group {
            flex: 1;
            min-width: 250px;
        }
        
        .filter-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
            font-size: 14px;
        }
        
        .filter-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
            font-size: 14px;
            background-color: white;
            cursor: pointer;
            transition: border-color 0.3s;
        }
        
        .filter-group select:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
        }
        
        .table-wrapper {
            overflow-x: auto;
            border-radius: 5px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        thead {
            background-color: #34495e;
            color: white;
        }
        
        th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
            font-size: 14px;
        }
        
        tbody tr {
            border-bottom: 1px solid #ecf0f1;
        }
        
        tbody tr:hover {
            background-color: #f9f9f9;
        }
        
        td {
            padding: 15px;
            font-size: 14px;
            color: #2c3e50;
        }
        
        .input-note {
            width: 80px;
            padding: 8px;
            border: 1px solid #bdc3c7;
            border-radius: 4px;
            text-align: center;
            font-size: 14px;
        }
        
        .input-note:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 3px rgba(52, 152, 219, 0.3);
        }
        
        .actions {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 30px;
        }
        
        .btn {
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .btn-save {
            background-color: #27ae60;
            color: white;
        }
        
        .btn-save:hover {
            background-color: #229954;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        
        .btn-reset {
            background-color: #95a5a6;
            color: white;
        }
        
        .btn-reset:hover {
            background-color: #7f8c8d;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        
        .empty-message {
            text-align: center;
            padding: 40px;
            color: #7f8c8d;
        }
        
        .info-box {
            background-color: #ecf0f1;
            border-left: 4px solid #3498db;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
            font-size: 13px;
            color: #34495e;
        }
        
        .success-message {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 12px 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 12px 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📊 Tableau de Bord Professeur</h1>
            <p>Saisie des notes des étudiants par filière</p>
        </div>
        
        <?php if (!empty($message)): ?>
            <div class="success-message"><?php echo $message; ?></div>
        <?php endif; ?>
        
        <?php if (!empty($errors)): ?>
            <div class="error-message">
                <?php foreach ($errors as $error): ?>
                    <p><?php echo htmlspecialchars($error); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <div class="info-box">
            <strong>ℹ️ Instructions :</strong> Sélectionnez une filière et une matière, puis saisissez les notes des étudiants. Les notes doivent être comprises entre 0 et 20.
        </div>
        
        <form method="POST">
            <div class="filters">
                <div class="filter-group">
                    <label for="filiere">Sélectionner une Filière :</label>
                    <select id="filiere" name="filiere" required>
                        <option value="">-- Choisir une filière --</option>
                        <option value="1" <?php echo ($filiere === '1') ? 'selected' : ''; ?>>Informatique</option>
                        <option value="2" <?php echo ($filiere === '2') ? 'selected' : ''; ?>>Génie Civil</option>
                        <option value="3" <?php echo ($filiere === '3') ? 'selected' : ''; ?>>Électronique</option>
                        <option value="4" <?php echo ($filiere === '4') ? 'selected' : ''; ?>>Mécanique</option>
                        <option value="5" <?php echo ($filiere === '5') ? 'selected' : ''; ?>>Chimie</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <label for="matiere">Sélectionner une Matière :</label>
                    <select id="matiere" name="matiere" required>
                        <option value="">-- Choisir une matière --</option>
                        <option value="1" <?php echo ($matiere === '1') ? 'selected' : ''; ?>>Mathématiques</option>
                        <option value="2" <?php echo ($matiere === '2') ? 'selected' : ''; ?>>Physique</option>
                        <option value="3" <?php echo ($matiere === '3') ? 'selected' : ''; ?>>Français</option>
                        <option value="4" <?php echo ($matiere === '4') ? 'selected' : ''; ?>>Anglais</option>
                    </select>
                </div>
            </div>
            
            <button type="submit" name="submit" class="btn btn-save" style="margin-bottom: 20px;">📋 Charger les Étudiants</button>
            
            <div class="table-wrapper">
                <table id="tableNotes">
                    <thead>
                        <tr>
                            <th>Numéro Étudiant</th>
                            <th>Nom Complet</th>
                            <th>Email</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <?php if (empty($etudiants)): ?>
                            <tr>
                                <td colspan="4" class="empty-message">Veuillez sélectionner une filière et une matière pour afficher les étudiants.</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($etudiants as $index => $etudiant): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($etudiant['id']); ?></td>
                                    <td><?php echo htmlspecialchars($etudiant['nom']); ?></td>
                                    <td><?php echo htmlspecialchars($etudiant['email']); ?></td>
                                    <td>
                                        <input type="number" class="input-note" name="notes[<?php echo $index; ?>]" 
                                               min="0" max="20" step="0.5" placeholder="0-20">
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            
            <div class="actions">
                <button type="submit" name="submit" class="btn btn-save">💾 Enregistrer les Notes</button>
            </div>
        </form>
    </div>
</body>
</html>
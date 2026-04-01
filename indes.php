<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduNotes - Gestion & Consultation</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">

    <!-- Barre de Navigation -->
    <nav class="bg-white shadow-sm py-4 px-8 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <div class="bg-indigo-600 p-2 rounded-lg">
                <i class="fas fa-graduation-cap text-white text-xl"></i>
            </div>
            <span class="text-2xl font-bold text-gray-800 tracking-tight">EduNotes</span>
        </div>
        <div class="hidden md:flex gap-8 text-gray-600 font-medium">
            <a href="#" class="hover:text-indigo-600 transition">Accueil</a>
            <a href="#" class="hover:text-indigo-600 transition">Aide</a>
            <a href="#" class="hover:text-indigo-600 transition">Contact</a>
        </div>
        <a href="./pages/connexion.php">Connexion

        </a>
        
    </nav>

    <!-- Section Principale  -->
    <main class="max-w-6xl mx-auto px-6 py-16 text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 mb-6">
            La réussite universitaire, <span class="text-indigo-600">simplifiée.</span>
        </h1>
        <p class="text-xl text-gray-600 mb-12 max-w-2xl mx-auto">
            Une plateforme unique pour la saisie des notes par les professeurs et Administration et le suivi en temps réel pour les étudiants.
        </p>

        <!-- Cartes de Sélection de Portail -->
        <div class="grid md:grid-cols-2 gap-8 mt-12">
            
            <!-- Espace Administration (Profs/Secrétaires) -->
            <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-100 hover:scale-105 transition transform duration-300 text-center">
                <div class="bg-indigo-100 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-chalkboard-teacher text-indigo-600 text-3xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Espace Administration</h2>
                <p class="text-gray-500 mb-8">Saisissez les notes, gérez les classes et générez les bulletins en quelques clics.</p>
                <a href="#" class="inline-block w-full py-3 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 shadow-lg">Accéder au Portail</a>
            </div>

            <!-- Espace Étudiants -->
            <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-100 hover:scale-105 transition transform duration-300 text-center">
                <div class="bg-emerald-100 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-user-graduate text-emerald-600 text-3xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Espace Étudiant</h2>
                <p class="text-gray-500 mb-8">Consultez vos résultats, vos moyennes et votre progression tout au long de l'année.</p>
                <a href="#" class="inline-block w-full py-3 bg-emerald-500 text-white rounded-xl font-bold hover:bg-emerald-600 shadow-lg">Voir mes Notes</a>
            </div>
            
        </div>
    </main>

    <!-- Pied de page  -->
    <footer class="bg-gray-900 text-white py-12 mt-12">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-3 text-center">
              <p>© 2026 - Gestion de Notes - Consultation de Notes</p>
        </div>
    </footer>

</body>
</html>
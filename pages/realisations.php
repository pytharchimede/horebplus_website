<?php

$link_prefixe = '../';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Réalisations - BTP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/custom_style.css">
</head>

<body class="bg-gray-100 font-montserrat text-gray-900">
    <?php include $link_prefixe . 'inc/header.php'; ?>

    <section class="py-12 px-6">
        <div class="max-w-5xl mx-auto bg-white p-8 shadow-lg rounded-xl text-center">
            <h2 class="text-4xl font-bold text-blue-700 mb-8">Nos Réalisations</h2>
            <p class="text-lg text-gray-700 mb-6">Découvrez nos projets réalisés dans le secteur du BTP.</p>
        </div>
    </section>

    <section class="py-12 px-6">
        <div class="max-w-5xl mx-auto bg-white p-8 shadow-lg rounded-lg">
            <!-- Onglets (Tabs) -->
            <div class="border-b border-gray-300">
                <ul class="flex space-x-4">
                    <li class="py-2 px-4 text-lg font-semibold cursor-pointer hover:text-blue-600" onclick="showTab('construction')">Construction</li>
                    <li class="py-2 px-4 text-lg font-semibold cursor-pointer hover:text-blue-600" onclick="showTab('renovation')">Rénovation</li>
                    <li class="py-2 px-4 text-lg font-semibold cursor-pointer hover:text-blue-600" onclick="showTab('infrastructure')">Infrastructures</li>
                </ul>
            </div>

            <!-- Contenu des Onglets -->
            <div id="construction" class="tab-content mt-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Projets de Construction</h3>
                <ul class="list-disc pl-5">
                    <li class="text-gray-600 mb-3">Construction d'un immeuble de bureaux à Abidjan</li>
                    <li class="text-gray-600 mb-3">Construction de logements sociaux à Yamoussoukro</li>
                    <li class="text-gray-600 mb-3">Construction d'un complexe commercial à San Pedro</li>
                </ul>
            </div>

            <div id="renovation" class="tab-content mt-6 hidden">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Projets de Rénovation</h3>
                <ul class="list-disc pl-5">
                    <li class="text-gray-600 mb-3">Rénovation de l'Hôpital de Treichville</li>
                    <li class="text-gray-600 mb-3">Rénovation de la salle de conférence du Ministère des Infrastructures</li>
                    <li class="text-gray-600 mb-3">Rénovation des bureaux de la Chambre de Commerce</li>
                </ul>
            </div>

            <div id="infrastructure" class="tab-content mt-6 hidden">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Projets d'Infrastructures</h3>
                <ul class="list-disc pl-5">
                    <li class="text-gray-600 mb-3">Construction de routes à l'intérieur du pays</li>
                    <li class="text-gray-600 mb-3">Aménagement d'un port industriel à Abidjan</li>
                    <li class="text-gray-600 mb-3">Réhabilitation d'une voie ferrée entre Abidjan et San Pedro</li>
                </ul>
            </div>
        </div>
    </section>

    <?php include '../inc/footer.php'; ?>

    <script>
        // Fonction pour changer d'onglet
        function showTab(tabId) {
            const tabs = document.querySelectorAll('.tab-content');
            tabs.forEach(tab => {
                tab.classList.add('hidden');
            });

            const selectedTab = document.getElementById(tabId);
            selectedTab.classList.remove('hidden');
        }
    </script>
</body>

</html>
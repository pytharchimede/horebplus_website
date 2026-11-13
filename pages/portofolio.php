<?php
$link_prefixe = '../';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <?php include $link_prefixe . 'inc/meta.php'; ?>
    <title>Notre Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/custom_style.css">
    <style>
        /* Personnalisation des cartes du portfolio */
        .portfolio-item {
            position: relative;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .portfolio-item:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        /* Style du titre */
        .portfolio-item h3 {
            font-size: 1.75rem;
            color: #1a202c;
            font-weight: 700;
            margin-bottom: 10px;
        }

        /* Détails du projet */
        .portfolio-item p {
            font-size: 1rem;
            color: #4a5568;
            margin-bottom: 20px;
        }

        /* Description cachée */
        .portfolio-item .details {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .portfolio-item:hover .details {
            opacity: 1;
            transform: translateY(0);
        }

        /* Bouton avec transition */
        .portfolio-item .button {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background-color: #3490dc;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 600;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .portfolio-item:hover .button {
            opacity: 1;
            visibility: visible;
        }

        iframe {
            border-radius: 10px;
        }

        /* Amélioration de l'espacement général */
        section {
            padding: 60px 20px;
        }

        /* Animation de l'entrée des éléments */
        .portfolio-item {
            opacity: 0;
            transform: translateY(30px);
        }

        .portfolio-item.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body class="bg-gray-100 font-montserrat text-gray-900">

    <?php include $link_prefixe . 'inc/header.php'; ?>

    <section class="py-12 px-6">
        <div class="max-w-5xl mx-auto text-center mb-8">
            <h2 class="text-4xl font-bold text-blue-700 mb-8">Notre Portfolio</h2>
            <p class="text-lg text-gray-700 mb-6">Découvrez mes projets récents en développement web et applications.</p>
        </div>

        <div class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Exemple de projet -->
            <div class="portfolio-item">
                <h3>Projet 1: Site Web de FIDEST</h3>
                <p>Entreprise de BTP opérant dans la fourniture industrielle.</p>
                <div class="relative mb-6">
                    <iframe class="w-full h-60" src="https://fidest.org" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="details">
                    <p>Ce site est conçu pour gérer les informations et services de l'entreprise FIDEST.</p>
                </div>
                <a href="https://fidest.org" target="_blank" class="button">Voir le site</a>
            </div>

            <div class="portfolio-item">
                <h3>Projet 2: BANAMUR INDUSTRIES</h3>
                <p>Entreprise spécialisée en BTP, menuiserie et urbanisme.</p>
                <div class="relative mb-6">
                    <iframe class="w-full h-60" src="http://banamur.com" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="details">
                    <p>Une entreprise dynamique fournissant des services variés dans le secteur de la construction.</p>
                </div>
                <a href="http://banamur.com" target="_blank" class="button">Voir l'application</a>
            </div>


            <div class="portfolio-item">
                <h3>Projet 3: Site Web E-commerce</h3>
                <p>Plateforme de vente en ligne d'aliments et articles culinaires.</p>
                <div class="relative mb-6">
                    <iframe class="w-full h-60" src="https://world-imex.org" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="details">
                    <p>Une plateforme interactive dédiée à la vente d'articles culinaires et alimentaires.</p>
                </div>
                <a href="https://world-imex.org" target="_blank" class="button">Voir le site</a>
            </div>

            <div class="portfolio-item">
                <h3>Projet 4: Entreprise de Transit</h3>
                <p>STTCI, spécialiste en transit, transport et VTC.</p>
                <div class="relative mb-6">
                    <iframe class="w-full h-60" src="https://www.sttci.com/" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="details">
                    <p>Entreprise de transit avec des solutions de transport et de VTC.</p>
                </div>
                <a href="https://sttci.com" target="_blank" class="button">Voir le site</a>
            </div>

            <div class="portfolio-item">
                <h3>Projet 5: Outils d'Analyse</h3>
                <p>Evaluation de la maturité digitale d'une entreprise.</p>
                <div class="relative mb-6">
                    <iframe class="w-full h-60" src="https://digimat.yadecdigital.ci/" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="details">
                    <p>Outil interactif pour évaluer la maturité digitale des entreprises.</p>
                </div>
                <a href="https://digimat.yadecdigital.ci/" target="_blank" class="button">Voir l'outil</a>
            </div>

            <!-- Projet DIGIMAT -->
            <div class="portfolio-item">
                <h3>Projet 5: Outils d'Analyse - DIGIMAT</h3>
                <p>Evaluation de la maturité digitale d'une entreprise.</p>
                <div class="relative mb-6">
                    <iframe class="w-full h-60" src="https://digimat.yadecdigital.ci/" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="details">
                    <p>Outil interactif pour évaluer la maturité digitale des entreprises.</p>
                </div>
                <a href="https://digimat.yadecdigital.ci/" target="_blank" class="button">Voir l'outil</a>
            </div>

            <!-- Projet SMARK -->
            <div class="portfolio-item">
                <h3>Projet 6: Application Smark</h3>
                <p>Application de gestion pour les petites entreprises.</p>
                <div class="relative mb-6">
                    <iframe class="w-full h-60" src="https://smark.yadecdigital.ci" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="details">
                    <p>Smark est un outil de diagnostique.</p>
                </div>
                <a href="https://smark.yadecdigital.ci" target="_blank" class="button">Voir l'application</a>
            </div>

            <!-- Projet SMARK -->
            <div class="portfolio-item">
                <h3>Projet 6: Application Enquête bancaire</h3>
                <p>Application de collecte de données secteur bancaire.</p>
                <div class="relative mb-6">
                    <iframe class="w-full h-60" src="https://enquete.yadecdigital.ci" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="details">
                    <p>Etude de la relation client dans le secteur bancaire en CI.</p>
                </div>
                <a href="https://enquete.yadecdigital.ci" target="_blank" class="button">Voir l'application</a>
            </div>

            <div class="portfolio-item">
                <h3>Projet 6: Application de gestion de stock</h3>
                <p>Application de gestion de stock.</p>
                <div class="relative mb-6">
                    <iframe class="w-full h-60" src="https://stock.fidest.ci" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="details">
                    <p>Gestion de stock.</p>
                </div>
                <a href="https://stock.fidest.ci" target="_blank" class="button">Voir l'application</a>
            </div>

        </div>
    </section>

    <?php include '../inc/footer.php'; ?>

    <script>
        // GSAP Animation pour rendre les éléments visibles en entrant dans la vue
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        window.addEventListener('scroll', () => {
            portfolioItems.forEach(item => {
                if (item.getBoundingClientRect().top < window.innerHeight) {
                    item.classList.add('visible');
                }
            });
        });
    </script>

</body>

</html>
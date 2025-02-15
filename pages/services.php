<?php

$link_prefixe = '../';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/custom_style.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body class="bg-gradient-to-r from-blue-700 via-white to-red-600 min-h-screen font-montserrat text-gray-900">

    <?php include $link_prefixe . 'inc/header.php'; ?>

    <section class="py-12 px-6">
        <div class="max-w-6xl mx-auto bg-white p-10 shadow-lg rounded-xl">
            <h2 class="text-4xl font-bold text-center text-blue-700 mb-8">Nos Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Services BTP -->
                <div class="text-center p-6 bg-gray-100 rounded-lg shadow-md">
                    <i class="ph ph-buildings text-6xl text-blue-700"></i>
                    <h3 class="text-2xl font-semibold mt-4">Bâtiment et Travaux Publiques (BTP)</h3>
                    <p class="text-gray-700 mt-2">Conception, construction et rénovation de bâtiments.</p>
                </div>

                <!-- Service Digital -->
                <div class="text-center p-6 bg-gray-100 rounded-lg shadow-md">
                    <i class="ph ph-device-mobile text-6xl text-blue-700"></i>
                    <h3 class="text-2xl font-semibold mt-4">Services Digitaux</h3>
                    <p class="text-gray-700 mt-2">Solutions numériques adaptées pour améliorer votre présence en ligne.</p>
                </div>

                <!-- Communication & Marketing -->
                <div class="text-center p-6 bg-gray-100 rounded-lg shadow-md">
                    <i class="ph ph-megaphone text-6xl text-blue-700"></i>
                    <h3 class="text-2xl font-semibold mt-4">Communication & Marketing</h3>
                    <p class="text-gray-700 mt-2">Stratégies innovantes pour booster votre visibilité et notoriété.</p>
                </div>

                <!-- Développement d'Applications -->
                <div class="text-center p-6 bg-gray-100 rounded-lg shadow-md">
                    <i class="ph ph-code text-6xl text-blue-700"></i>
                    <h3 class="text-2xl font-semibold mt-4">Développement d'Applications</h3>
                    <p class="text-gray-700 mt-2">Création d’applications web et mobiles sur mesure.</p>
                </div>

                <!-- Transformation Digitale -->
                <div class="text-center p-6 bg-gray-100 rounded-lg shadow-md">
                    <i class="ph ph-cloud text-6xl text-blue-700"></i>
                    <h3 class="text-2xl font-semibold mt-4">Transformation Digitale</h3>
                    <p class="text-gray-700 mt-2">Accompagnement dans la modernisation et digitalisation de vos processus.</p>
                </div>

                <!-- Conseil & Accompagnement -->
                <div class="text-center p-6 bg-gray-100 rounded-lg shadow-md">
                    <i class="ph ph-lightbulb text-6xl text-blue-700"></i>
                    <h3 class="text-2xl font-semibold mt-4">Conseil & Accompagnement</h3>
                    <p class="text-gray-700 mt-2">Expertise pour optimiser votre projet et votre stratégie d’entreprise.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include '../inc/footer.php'; ?>
    <script src="<?php echo $link_prefixe; ?>assets/js/all_script.js"></script>
</body>

</html>
<?php

$link_prefixe = '../';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/custom_style.css">
</head>

<body class="bg-gray-100 font-montserrat text-gray-900">
    <?php include $link_prefixe . 'inc/header.php'; ?>

    <section class="py-12 px-6">
        <div class="max-w-5xl mx-auto bg-white p-8 shadow-lg rounded-xl text-center">
            <h2 class="text-4xl font-bold text-blue-700 mb-8">À Propos de Nous</h2>
            <p class="text-lg text-gray-700 mb-6">Nous sommes une entreprise engagée dans l'innovation et la transformation digitale.</p>
        </div>
    </section>

    <section class="py-12 px-6">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Mission -->
            <div class="bg-white p-8 shadow-md rounded-lg text-center">
                <i class="fas fa-bullseye text-6xl text-blue-700 mb-4"></i>
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Notre Mission</h3>
                <p class="text-gray-600">Offrir des solutions innovantes adaptées aux besoins de nos clients.</p>
            </div>
            <!-- Vision -->
            <div class="bg-white p-8 shadow-md rounded-lg text-center">
                <i class="fas fa-eye text-6xl text-red-600 mb-4"></i>
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Notre Vision</h3>
                <p class="text-gray-600">Devenir un acteur incontournable de la transformation numérique en Afrique.</p>
            </div>
            <!-- Valeurs -->
            <div class="bg-white p-8 shadow-md rounded-lg text-center">
                <i class="fas fa-handshake text-6xl text-green-600 mb-4"></i>
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Nos Valeurs</h3>
                <p class="text-gray-600">Innovation, Engagement, Intégrité et Satisfaction client.</p>
            </div>
        </div>
    </section>

    <?php include '../inc/footer.php'; ?>
</body>

</html>
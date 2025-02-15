<?php

$link_prefixe = '';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HorebPlus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/custom_style.css">
</head>

<body class="bg-gradient-to-r from-blue-700 via-white to-red-600 min-h-screen text-gray-900">

    <?php include $link_prefixe . 'inc/header.php'; ?>

    <!-- Hero Section -->
    <section class="text-center py-20 bg-white">
        <h2 class="text-5xl font-bold text-blue-700">Innovation & Expertise</h2>
        <p class="text-xl mt-4 text-gray-700">HorebPlus : BTP, marketing et IT pour des solutions modernes et performantes.</p>
        <button class="mt-6 bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl">Découvrir</button>
    </section>

    <!-- Services -->
    <section id="services" class="grid md:grid-cols-3 gap-8 p-10">
        <div class="bg-blue-700 text-white p-6 rounded-xl text-center">
            <h3 class="text-2xl font-bold">BTP</h3>
            <p>Construction, rénovation et aménagement de qualité.</p>
        </div>
        <div class="bg-red-600 text-white p-6 rounded-xl text-center">
            <h3 class="text-2xl font-bold">Marketing</h3>
            <p>Stratégies de communication et branding digital.</p>
        </div>
        <div class="bg-white text-blue-700 shadow-lg p-6 rounded-xl text-center">
            <h3 class="text-2xl font-bold">Informatique</h3>
            <p>Maintenance physique et logicielle avancée.</p>
        </div>
    </section>

    <!-- Nos Réalisations -->
    <section id="realisations" class="py-20 bg-gray-100">
        <h2 class="text-4xl font-bold text-center text-blue-700">Nos Réalisations en BTP</h2>
        <div class="grid md:grid-cols-3 gap-8 p-10">
            <div class="bg-white shadow-lg p-6 rounded-xl text-center">
                <h3 class="text-2xl font-bold">Construction</h3>
                <p>Projets de construction moderne, respectant les normes les plus strictes.</p>
            </div>
            <div class="bg-white shadow-lg p-6 rounded-xl text-center">
                <h3 class="text-2xl font-bold">Rénovation</h3>
                <p>Réaménagement et rénovation d'infrastructures existantes.</p>
            </div>
            <div class="bg-white shadow-lg p-6 rounded-xl text-center">
                <h3 class="text-2xl font-bold">Aménagement</h3>
                <p>Design d'espaces intérieurs et extérieurs pour un confort optimal.</p>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="py-20">
        <h2 class="text-4xl font-bold text-center text-blue-700">Notre Portfolio Digital</h2>
        <div class="grid md:grid-cols-3 gap-8 p-10">
            <div class="bg-white shadow-lg p-6 rounded-xl text-center">
                <h3 class="text-2xl font-bold">Web Design</h3>
                <p>Création de sites web modernes et réactifs pour diverses entreprises.</p>
            </div>
            <div class="bg-white shadow-lg p-6 rounded-xl text-center">
                <h3 class="text-2xl font-bold">Marketing Digital</h3>
                <p>Stratégies de communication digitale sur les réseaux sociaux.</p>
            </div>
            <div class="bg-white shadow-lg p-6 rounded-xl text-center">
                <h3 class="text-2xl font-bold">Développement IT</h3>
                <p>Solutions logicielles adaptées aux besoins spécifiques de chaque client.</p>
            </div>
        </div>
    </section>

    <!-- Demande de Devis -->
    <section id="contact" class="py-20 bg-gray-100">
        <h2 class="text-4xl font-bold text-center text-blue-700">Demande de Devis</h2>
        <div class="max-w-lg mx-auto bg-white p-6 rounded-xl shadow-lg">
            <p class="text-lg text-gray-700 mb-4">
                Vous avez besoin d'un devis pour un service ou un produit spécifique ? Cliquez sur le lien ci-dessous pour soumettre votre demande et recevoir une estimation détaillée.
            </p>
            <a href="pages/demande_devis.php" class="w-full text-center bg-blue-700 hover:bg-blue-800 text-white p-3 rounded-xl block text-lg font-semibold">
                Accéder à la page de demande de devis
            </a>
        </div>
    </section>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/+225123456789" target="_blank" class="fixed bottom-6 right-6 bg-green-500 p-4 rounded-full shadow-lg hover:bg-green-600">
        <img src="assets/icon/social/whatsapp.png" alt="WhatsApp" class="w-10 h-10">
    </a>

    <?php include 'inc/footer.php'; ?>

    <script>
        // Toggle mobile menu
        document.getElementById('hamburger').addEventListener('click', function() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });
    </script>

</body>

</html>
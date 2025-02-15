<?php

$link_prefixe = '../';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/custom_style.css">
</head>

<body class="bg-gray-100 font-montserrat text-gray-900">
    <?php include $link_prefixe . 'inc/header.php'; ?>

    <section class="py-12 px-6">
        <div class="max-w-5xl mx-auto bg-white p-8 shadow-lg rounded-xl text-center">
            <h2 class="text-4xl font-bold text-blue-700 mb-8">Contactez-Nous</h2>
            <p class="text-lg text-gray-700 mb-6">Nous serions ravis de recevoir vos questions ou suggestions. N'hésitez pas à nous contacter.</p>
        </div>
    </section>

    <section class="py-12 px-6">
        <div class="max-w-5xl mx-auto bg-white p-8 shadow-lg rounded-lg">
            <form action="votre_script_de_traitement.php" method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nom -->
                    <div class="flex flex-col">
                        <label for="nom" class="text-gray-700 font-semibold mb-2">Nom</label>
                        <input type="text" id="nom" name="nom" class="p-3 border border-gray-300 rounded-lg" required>
                    </div>

                    <!-- Email -->
                    <div class="flex flex-col">
                        <label for="email" class="text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="p-3 border border-gray-300 rounded-lg" required>
                    </div>
                </div>

                <!-- Message -->
                <div class="flex flex-col mt-6">
                    <label for="message" class="text-gray-700 font-semibold mb-2">Message</label>
                    <textarea id="message" name="message" rows="6" class="p-3 border border-gray-300 rounded-lg" required></textarea>
                </div>

                <!-- Bouton envoyer -->
                <div class="mt-6 text-center">
                    <button type="submit" class="bg-blue-700 text-white px-6 py-3 rounded-lg hover:bg-blue-800 focus:outline-none">Envoyer</button>
                </div>
            </form>
        </div>
    </section>

    <?php include '../inc/footer.php'; ?>
</body>

</html>
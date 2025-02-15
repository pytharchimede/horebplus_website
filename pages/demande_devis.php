<?php

$link_prefixe = '../';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de Devis</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tiny.cloud/1/nnulrq1kf87s5l81ekcl51y5tzua6sdxolk9wz0rab17fg8j/tinymce/5/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#request-text',
            plugins: 'advlist autolink lists link image charmap print preview anchor',
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image',
        });
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/custom_style.css">
</head>

<body class="bg-gradient-to-r from-blue-700 via-white to-red-600 min-h-screen font-montserrat text-gray-900">

    <?php include $link_prefixe . 'inc/header.php'; ?>

    <!-- Formulaire de Demande de Devis -->
    <section class="py-12 px-6">
        <div class="max-w-3xl mx-auto bg-white p-8 shadow-lg rounded-xl">
            <h2 class="text-4xl font-bold text-center text-blue-700 mb-8">Demande de Devis</h2>

            <form action="submit_devis.php" method="POST" enctype="multipart/form-data">
                <!-- Nom de l'entreprise -->
                <div class="mb-6">
                    <label for="company-name" class="block text-lg font-semibold text-blue-700">Nom de l'Entreprise</label>
                    <input type="text" id="company-name" name="company-name" required class="w-full p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Entrez le nom de votre entreprise">
                </div>

                <!-- Poste occupé par le demandeur -->
                <div class="mb-6">
                    <label for="job-title" class="block text-lg font-semibold text-blue-700">Poste Occupé</label>
                    <input type="text" id="job-title" name="job-title" required class="w-full p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Entrez votre poste dans l'entreprise">
                </div>

                <!-- Délai de rendu -->
                <div class="mb-6">
                    <label for="delivery-time" class="block text-lg font-semibold text-blue-700">Délai de Rendu</label>
                    <input type="text" id="delivery-time" name="delivery-time" required class="w-full p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Indiquez le délai souhaité">
                </div>

                <!-- Possibilité de joindre des images -->
                <div class="mb-6">
                    <label for="attachment" class="block text-lg font-semibold text-blue-700">Joindre des Images</label>
                    <input type="file" id="attachment" name="attachment[]" accept="image/*" multiple class="w-full p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>

                <!-- Contact WhatsApp -->
                <div class="mb-6">
                    <label for="whatsapp" class="block text-lg font-semibold text-blue-700">Contact WhatsApp</label>
                    <input type="text" id="whatsapp" name="whatsapp" required class="w-full p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Entrez votre numéro WhatsApp">
                </div>

                <!-- Téléphone -->
                <div class="mb-6">
                    <label for="phone" class="block text-lg font-semibold text-blue-700">Téléphone</label>
                    <input type="tel" id="phone" name="phone" required class="w-full p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Entrez votre numéro de téléphone">
                </div>

                <!-- Email -->
                <div class="mb-6">
                    <label for="email" class="block text-lg font-semibold text-blue-700">Email</label>
                    <input type="email" id="email" name="email" required class="w-full p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Entrez votre email">
                </div>

                <!-- Texte de la demande -->
                <div class="mb-6">
                    <label for="request-text" class="block text-lg font-semibold text-blue-700">Texte de la Demande</label>
                    <textarea id="request-text" name="request-text" rows="6" class="w-full p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Décrivez votre demande ici..."></textarea>
                </div>

                <!-- Bouton de soumission -->
                <div class="text-center">
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-full text-xl transition-colors duration-300">Envoyer la Demande</button>
                </div>
            </form>
        </div>
    </section>

    <?php include '../inc/footer.php'; ?>
    <script>
        // Toggle mobile menu
        document.getElementById('hamburger').addEventListener('click', function() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
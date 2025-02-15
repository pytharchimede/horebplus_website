<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HorebPlus</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-blue-700 via-white to-red-600 min-h-screen text-gray-900">

    <!-- Header -->
    <header class="flex justify-between items-center p-6 bg-white shadow-md">
        <h1 class="text-3xl font-bold text-blue-700">HorebPlus</h1>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="#services" class="hover:text-red-600">Services</a></li>
                <li><a href="#about" class="hover:text-red-600">À propos</a></li>
                <li><a href="#contact" class="hover:text-red-600">Contact</a></li>
            </ul>
        </nav>
    </header>

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

    <!-- Footer -->
    <footer class="text-center py-6 bg-gray-900 text-white">
        <p>&copy; <?php echo date('Y'); ?> HorebPlus. Tous droits réservés.</p>
    </footer>

</body>

</html>
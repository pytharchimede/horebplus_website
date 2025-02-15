    <!-- Header -->
    <header class="flex justify-between items-center p-6 bg-white shadow-md">
        <!-- Lien vers la page d'accueil -->
        <a href="<?php echo $link_prefixe ?>index.php" class="flex items-center space-x-2">
            <img src="<?php echo $link_prefixe ?>assets/logo/logo.png" alt="Logo" class="w-8 h-8"> <!-- Ajustez la taille de l'icône -->
            <h1 class="horeb">Horeb<span class="plus">Plus</span></h1>
        </a>

        <nav class="hidden md:block">
            <ul class="flex space-x-6">
                <li><a href="pages/services.php" class="hover:text-red-600">Services</a></li>
                <li><a href="pages/about.php" class="hover:text-red-600">À propos</a></li>
                <li><a href="pages/contact.php" class="hover:text-red-600">Contact</a></li>
                <li><a href="pages/realisations.php" class="hover:text-red-600">Nos Réalisations</a></li>
                <li><a href="pages/portofolio.php" class="hover:text-red-600">Portfolio</a></li>
            </ul>
        </nav>

        <!-- Hamburger Icon for Mobile -->
        <div class="md:hidden">
            <button id="hamburger" class="text-blue-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </header>

    <!-- Mobile Menu -->
    <nav id="mobileMenu" class="md:hidden hidden bg-white shadow-md p-4 absolute top-20 left-0 right-0 z-10">
        <ul class="space-y-4">
            <li><a href="#services" class="block hover:text-red-600">Services</a></li>
            <li><a href="#about" class="block hover:text-red-600">À propos</a></li>
            <li><a href="#contact" class="block hover:text-red-600">Contact</a></li>
            <li><a href="#realisations" class="block hover:text-red-600">Nos Réalisations</a></li>
            <li><a href="#portfolio" class="block hover:text-red-600">Portfolio</a></li>
        </ul>
    </nav>
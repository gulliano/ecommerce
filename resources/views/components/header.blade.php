 <!-- En-tête (Header) -->
    <header class="bg-white shadow-sm py-4 px-6 md:px-12 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="text-2xl font-bold text-indigo-600 rounded-md p-2 hover:bg-indigo-50 transition-colors">MaBoutique</a>

            <!-- Barre de recherche -->
            <div class="flex-grow max-w-md mx-4 hidden md:block">
                <div class="relative">
                    <input type="text" placeholder="Rechercher des produits..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>

            <!-- Menu de navigation et icônes utilisateur -->
            <nav class="flex items-center space-x-6">
                <!-- Menu principal (visible sur grand écran) -->
                <ul class="hidden md:flex space-x-6 font-medium">
                    <li><a href="#" class="text-gray-700 hover:text-indigo-600 transition-colors">Nouveautés</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-indigo-600 transition-colors">Vêtements</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-indigo-600 transition-colors">Accessoires</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-indigo-600 transition-colors">Soldes</a></li>
                </ul>

                <!-- Icônes utilisateur -->
                <div class="flex items-center space-x-4">
                    <!-- Icône Compte -->
                    <a href="#" class="text-gray-700 hover:text-indigo-600 transition-colors relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span class="sr-only">Mon Compte</span>
                    </a>
                    <!-- Icône Liste de souhaits -->
                    <a href="#" class="text-gray-700 hover:text-indigo-600 transition-colors relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                        <span class="sr-only">Liste de souhaits</span>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs font-bold rounded-full h-4 w-4 flex items-center justify-center">3</span>
                    </a>
                    <!-- Icône Panier -->
                    <a href="#" class="text-gray-700 hover:text-indigo-600 transition-colors relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        <span class="sr-only">Panier</span>
                        <span class="absolute -top-1 -right-1 bg-indigo-600 text-white text-xs font-bold rounded-full h-4 w-4 flex items-center justify-center">5</span>
                    </a>
                </div>

                <!-- Menu hamburger pour mobile -->
                <button class="md:hidden text-gray-700 hover:text-indigo-600 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                    <span class="sr-only">Ouvrir le menu</span>
                </button>
            </nav>
        </div>
    </header>
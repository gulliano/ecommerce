@extends('layouts.product')
@section('content')

    <x-category />

        <section class="container mx-auto px-4 py-12 md:py-16">
        <div class="lg:flex lg:space-x-12">
            {{-- Galerie d'images du produit --}}
            <div class="lg:w-1/2 mb-8 lg:mb-0">
                <div class="relative rounded-xl overflow-hidden shadow-lg">
                    {{-- Image principale (grande) --}}
                    <img src="https://placehold.co/800x800/fca5a5/ffffff?text=Image+Produit+Principale" alt="Image principale du produit" class="w-full h-auto object-cover rounded-xl">
                </div>
                {{-- Miniatures d'images --}}
                <div class="flex space-x-4 mt-4 justify-center">
                    <img src="https://placehold.co/100x100/fca5a5/ffffff?text=Mini+1" alt="Miniature 1" class="w-24 h-24 object-cover rounded-md border-2 border-indigo-200 cursor-pointer hover:border-indigo-500 transition-colors">
                    <img src="https://placehold.co/100x100/fcd34d/ffffff?text=Mini+2" alt="Miniature 2" class="w-24 h-24 object-cover rounded-md border-2 border-gray-200 cursor-pointer hover:border-indigo-500 transition-colors">
                    <img src="https://placehold.co/100x100/a78bfa/ffffff?text=Mini+3" alt="Miniature 3" class="w-24 h-24 object-cover rounded-md border-2 border-gray-200 cursor-pointer hover:border-indigo-500 transition-colors">
                    <img src="https://placehold.co/100x100/fdbb7a/ffffff?text=Mini+4" alt="Miniature 4" class="w-24 h-24 object-cover rounded-md border-2 border-gray-200 cursor-pointer hover:border-indigo-500 transition-colors">
                </div>
            </div>

            {{-- Informations et actions du produit --}}
            <div class="lg:w-1/2 bg-white p-8 rounded-xl shadow-lg">
                {{-- Nom du produit --}}
                <h1 class="text-4xl font-extrabold text-gray-900 mb-4">{{ $product->name }}</h1>

                {{-- Prix du produit --}}
                <p class="text-5xl font-bold text-indigo-600 mb-6">{{ number_format($product->price ?? 99.99, 2, ',', ' ') }} €</p>

                {{-- Description courte --}}
                <p class="text-gray-700 leading-relaxed mb-8">
                    {{ $product->description ?? 'Ce produit est un incontournable pour votre garde-robe. Fabriqué avec des matériaux de haute qualité, il offre un confort exceptionnel et un style intemporel. Parfait pour toutes les occasions, il s\'adaptera à votre quotidien avec élégance.' }}
                </p>

                {{-- Options du produit (taille, couleur, etc.) --}}
                <div class="mb-8">
                    <div class="mb-6">
                        <label for="size" class="block text-gray-800 font-semibold mb-2">Taille :</label>
                        <select id="size" class="w-full md:w-1/2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all">
                            <option value="">Sélectionner une taille</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="color" class="block text-gray-800 font-semibold mb-2">Couleur :</label>
                        <div class="flex space-x-3">
                            <button class="w-10 h-10 rounded-full bg-blue-600 border-2 border-transparent hover:border-indigo-500 focus:outline-none focus:border-indigo-500 transition-all" aria-label="Couleur Bleue"></button>
                            <button class="w-10 h-10 rounded-full bg-red-600 border-2 border-transparent hover:border-indigo-500 focus:outline-none focus:border-indigo-500 transition-all" aria-label="Couleur Rouge"></button>
                            <button class="w-10 h-10 rounded-full bg-green-600 border-2 border-transparent hover:border-indigo-500 focus:outline-none focus:border-indigo-500 transition-all" aria-label="Couleur Verte"></button>
                            <button class="w-10 h-10 rounded-full bg-gray-600 border-2 border-transparent hover:border-indigo-500 focus:outline-none focus:border-indigo-500 transition-all" aria-label="Couleur Grise"></button>
                        </div>
                    </div>
                </div>

                {{-- Quantité et bouton Ajouter au panier --}}
                <div class="flex items-center space-x-4 mb-6">
                    <label for="quantity" class="text-gray-800 font-semibold">Quantité :</label>
                    <input type="number" id="quantity" value="1" min="1" class="w-20 p-3 border border-gray-300 rounded-lg text-center focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all">
                    <button class="bg-indigo-600 text-white font-bold py-3 px-8 rounded-full shadow-md hover:bg-indigo-700 transform hover:scale-105 transition-all duration-300 flex-grow">
                        Ajouter au panier
                    </button>
                </div>

                {{-- Informations supplémentaires (SKU, Stock) --}}
                <div class="text-sm text-gray-600 mb-6">
                    <p>SKU: <span class="font-medium">{{ $product->sku ?? 'PROD12345' }}</span></p>
                    <p>Disponibilité:
                        @if(($product->stock ?? 10) > 0)
                            <span class="text-green-600 font-medium">En stock ({{ $product->stock ?? 10 }} articles)</span>
                        @else
                            <span class="text-red-600 font-medium">Hors stock</span>
                        @endif
                    </p>
                </div>

                {{-- Bouton "Conseil de Style" avec LLM --}}
                <button class="generate-style-tip-btn w-full bg-purple-500 text-white py-3 rounded-lg hover:bg-purple-600 transition-colors duration-200 font-medium flex items-center justify-center space-x-2">
                    <span>Conseil de Style ✨</span>
                    <div class="spinner hidden"></div>
                </button>
                <div class="style-tip-output text-sm text-gray-700 mt-3 p-2 bg-gray-100 rounded-md hidden"></div>

            </div>
        </div>

        {{-- Onglets pour Description Détaillée, Spécifications --}}
        <div class="mt-16 bg-white p-8 rounded-xl shadow-lg">
            <div class="border-b border-gray-200">
                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                    <button class="tab-button text-indigo-600 whitespace-nowrap py-4 px-1 border-b-2 border-indigo-500 font-medium text-lg focus:outline-none" data-tab="description">Description</button>
                    <button class="tab-button text-gray-500 hover:text-gray-700 whitespace-nowrap py-4 px-1 border-b-2 border-transparent hover:border-gray-300 font-medium text-lg focus:outline-none" data-tab="specifications">Spécifications</button>
                </nav>
            </div>

            <div id="tab-content-description" class="tab-content mt-6 text-gray-700 leading-relaxed">
                <h3 class="text-2xl font-bold mb-4">Description Détaillée</h3>
                <p>
                    Ce {{ $product->name ?? 'produit' }} est conçu pour allier performance et esthétique. Sa coupe moderne et ses finitions impeccables en font un choix idéal pour ceux qui recherchent l'excellence. Fabriqué à partir de {{ $product->material ?? '100% coton biologique' }}, il assure une respirabilité optimale et une douceur incomparable.
                </p>
                <ul class="list-disc list-inside mt-4 space-y-2">
                    <li>Design ergonomique pour un confort maximal.</li>
                    <li>Matériaux durables et respectueux de l'environnement.</li>
                    <li>Facile à entretenir, résistant au lavage.</li>
                    <li>Disponible en plusieurs tailles et couleurs.</li>
                </ul>
            </div>

            <div id="tab-content-specifications" class="tab-content mt-6 text-gray-700 leading-relaxed hidden">
                <h3 class="text-2xl font-bold mb-4">Spécifications Techniques</h3>
                <table class="min-w-full divide-y divide-gray-200">
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">Matière</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->material ?? 'Coton, Polyester' }}</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">Poids</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->weight ?? '300g' }}</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">Dimensions</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->dimensions ?? 'S: 68x50cm, M: 70x52cm, L: 72x54cm' }}</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">Couleurs disponibles</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->available_colors ?? 'Bleu, Rouge, Vert, Gris' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    
@endsection
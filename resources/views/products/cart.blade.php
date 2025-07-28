@extends('layouts.product')
@section('content')

 <div class="flex flex-col lg:flex-row gap-8">
            <!-- Section des articles du panier -->
            <div class="lg:w-2/3 bg-white p-6 rounded-xl shadow-lg">
                <div id="cart-items-container" class="divide-y divide-gray-200">
                    <!-- Exemple d'article dans le panier (sera dupliqué par JS) -->
                    @forelse ($cartProducts as $item )
                        <x-item-cart :item="$item" />
                    @empty
                        Votre panier est vide
                    @endforelse
                    
                  

                </div>

                <div class="flex justify-end mt-6">
                    <a href="{{route('cart.clear')}}" id="clear-cart-btn" class="bg-red-100 text-red-700 font-semibold py-2 px-6 rounded-full hover:bg-red-200 transition-colors duration-200 shadow-sm">
                        Vider le panier
                    </a>
                </div>
            </div>

            <!-- Section Résumé du panier -->
            <div class="lg:w-1/3 bg-white p-6 rounded-xl shadow-lg h-fit">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Résumé de la commande</h2>
                <div class="space-y-4 text-lg">
                    <div class="flex justify-between">
                        <span>Sous-total :</span>
                        <span id="cart-subtotal" class="font-semibold">0.00 €</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Livraison estimée :</span>
                        <span id="cart-shipping" class="font-semibold">5.00 €</span>
                    </div>
                    <div class="flex justify-between border-t border-gray-200 pt-4 text-xl font-bold">
                        <span>Total :</span>
                        <span id="cart-total">0.00 €</span>
                    </div>
                </div>

                <div class="mt-8">
                    <button class="w-full bg-indigo-600 text-white font-bold py-3 px-8 rounded-full shadow-md hover:bg-indigo-700 transform hover:scale-105 transition-all duration-300">
                        Procéder au paiement
                    </button>
                </div>
            </div>
        </div>

@endsection
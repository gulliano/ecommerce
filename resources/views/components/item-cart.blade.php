@props(['item'])

<div class="cart-item flex items-center py-4" data-product-id="1" data-price="29.99">
                        <img src="https://placehold.co/100x100/fca5a5/ffffff?text=T-Shirt" alt="T-Shirt Basique Uni" class="w-24 h-24 object-cover rounded-lg mr-4 shadow-sm">
                        <div class="flex-grow">
                            <h2 class="text-lg font-semibold text-gray-800">{{$item->name}}</h2>

                            <p class="text-indigo-600 font-bold mt-1"><span class="item-price">{{$item->price}}</span> €</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <input type="number" value="1" min="1" class="item-quantity w-16 p-2 border border-gray-300 rounded-lg text-center focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all">
                            <a href="{{route('cart.remove' , $item->id )}}" class="remove-item-btn text-red-500 hover:text-red-700 transition-colors p-2 rounded-full hover:bg-red-50">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                              <span class="sr-only">Supprimer l'article</span>
                            </a>
                        </div>
                    </div>
   
@props(['product'])

   <!-- Carte Produit 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transform hover:scale-105 transition-transform duration-300">
                   <a href="{{route('products.show', $product->id)}}"><img src="https://placehold.co/400x400/fca5a5/ffffff?text=T-Shirt+Cool" alt="T-Shirt Basique Uni" class="w-full h-64 object-cover"></a>
                    <div class="p-5">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2" data-product-name="T-Shirt Basique Uni">{{$product->name}}</h3>
                        <p class="text-gray-600 text-sm mb-3">{{$product->description}}</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xl font-bold text-indigo-600">{{$product->price}} €</span>
                            <div class="flex items-center text-yellow-500">
                                <span class="text-lg">⭐</span><span class="text-lg">⭐</span><span class="text-lg">⭐</span><span class="text-lg">⭐</span><span class="text-lg">☆</span>
                                <span class="text-gray-500 text-sm ml-1">(120)</span>
                            </div>
                        </div>
                        <a href="{{route('cart.add' , $product )}}" class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition-colors duration-200 font-medium mb-2">
                            Ajouter au panier
                        </a>
                    
                        <div class="style-tip-output text-sm text-gray-700 mt-3 p-2 bg-gray-100 rounded-md hidden"></div>
                    </div>
                </div>
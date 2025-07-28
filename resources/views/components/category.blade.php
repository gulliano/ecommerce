    <!-- Section Catégories Populaires (modifiée en bulles) -->
     
    <section class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-10 text-gray-900">Nos Catégories Populaires</h2>
            <div class="flex flex-wrap justify-center gap-4">
                <!-- Bulle Catégorie 1 -->
                @forelse ($categories as $category )
                    <a href="#" class="inline-block bg-indigo-100 text-indigo-800 font-semibold px-6 py-3 rounded-full hover:bg-indigo-200 transition-colors duration-200 shadow-sm hover:shadow-md">
                        {{$category['name']}}
                    </a> 
                @empty
                     Pas de Catégorie
                @endforelse
               
                
            </div>
        </section>
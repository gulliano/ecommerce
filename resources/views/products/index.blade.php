@extends('layouts.product')
@section('content')

    <x-category />

    <section class="mb-16">
        <h2 class="text-3xl font-bold text-center mb-10 text-gray-900">Nos Nouveautés</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        

        @forelse ($products as $product )
            <x-product-card :product="$product"  />
        @empty
            Pas de produit
        @endforelse

        </div>
    </section>
    
@endsection
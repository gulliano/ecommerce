<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $user = auth()->user() ;
        // Récupérer les produits du panier de l'utilisateur connecté
        $cartProducts = $user->cartProducts()->get();   
    

        return view('products.cart',compact('cartProducts'));
    }

    /**
     * ajouter un produit au caddie à partir du produit sélectionné
     */
    public function addToCart(Product $product)
    {
        // Logique pour ajouter le produit au caddie
        $user = auth()->user(); // Récupérer l'utilisateur connecté
       
    // Vérifier si le produit existe dans le panier et l'ajouter s'il n'existe pas
        if (!$user->hasProductInCart($product)){

                 $cart = Cart::create(['user_id' => auth()->id() ,  // id user connecté
                                      'product_id' => $product->id, // id du produit
                                      'quantity' => 1, // quantité par défaut
                                      'price' => $product->price,// prix du produit
                                        ]);
        }

       
       
        // Par exemple, ajouter le produit à la session ou à la base de données
        return redirect()->route('cart.index')->with('success', 'Produit ajouté au caddie.');
    }   
   

    public function removeFromCart($id)
    {
        $user = auth()->user();
        // Logique pour supprimer le produit du caddie
        $user->cartProducts()->detach($id); // Détacher le produit du caddie
      
        return redirect()->route('cart.index')->with('success', 'Produit retiré du caddie.');
    }

    // vide le caddie
    public function clearCart()
    {
        $user = auth()->user();
        // Logique pour vider le caddie
        $user->cartProducts()->detach(); // Détacher tous les produits du caddie
        
        return redirect()->route('cart.index')->with('success', 'Caddie vidé.');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

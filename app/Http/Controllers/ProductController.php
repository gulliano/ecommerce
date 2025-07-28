<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //fonction to show a list of products
    public function index()
    {
        

        // récupération des 10 derniers produits avec le modèle Product
        $products = Product::latest()->take(10)->get();  
       
        return view('products.index' , compact('products'));  
    }

    //fonction to show a single product
    public function show($id)
    {
        // Here you would typically retrieve a product by its ID from a model
        // For now, we will return a simple view with the product ID

        $product = Product::find($id); // Récupère le produit par son ID, ou déclenche une 404

        return view('products.show', compact('product'));
    }
}

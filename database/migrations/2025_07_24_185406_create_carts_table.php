<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   // Create the carts table
        // user 0,n carts
        // products 0, n carts
        // cart_id, product_id, quantity, price

           Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Foreign key to products table
            $table->integer('quantity')->default(1); // Quantity of the product in the cart
            $table->decimal('price', 10, 2); // Price of the
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};

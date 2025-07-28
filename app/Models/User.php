<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Product;
use Filament\Panel; // Importez Panel
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Filament\Models\Contracts\FilamentUser; // Importez FilamentUser

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Protéger l'accès à filaments
   public function canAccessPanel(Panel $panel): bool
    {
        return $this->role === 'admin'; 
    }  
    
    
    /* gestion du panier */

    // les produits du panier
    public function cartProducts(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'carts' , 'user_id', 'product_id')
            ->withPivot(['quantity', 'price'])
            ->withTimestamps();     
    }

    //vérifier si le produit est dans le panier
    public function hasProductInCart(Product $product): bool
    {
        return $this->cartProducts()->where('product_id', $product->id)->exists();
    }


}

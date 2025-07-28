<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Category extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    { 
      // récupération des catégories depuis la base de données
        $categories = \App\Models\Category::all();
        return view('components.category' , compact('categories'));
    }
}

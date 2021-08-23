<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class CategoriesDropdown extends Component
{

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.categories-dropdown', [
            'categories' => Category::all(),
            'category' => Category::firstWhere('slug', request('category'))
        ]);
    }
}

<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $category, $remarks;

    public function tableOrder() {
        $query = Category::latest('created_at');

        $categories = $query->get();
        return compact('categories');
    }

    public function render()
    {
        return view('livewire.category.categories', $this->tableOrder());
    }

    public function store() {
        $validatedData = $this->validate([
            'category'  => 'required',
            'remarks'   => 'required'
        ]);

        Category::create($validatedData);

        session()->flash('message', 'Category has been added');

        return redirect('/categories');
    }
}

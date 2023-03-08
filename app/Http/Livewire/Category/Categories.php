<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $categories, $category, $remarks;

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.category.categories');
    }

    public function resetFields() {
        $this->category = '';
        $this->remarks  = '';
    }

    public function store() {
        $validatedData = $this->validate([
            'category'  => 'required',
            'remarks'   => 'required'
        ]);

        Category::create($validatedData);

        session()->flash('message', 'Category has been added');

        $this->resetFields();
    }
}

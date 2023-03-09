<?php

namespace App\Http\Livewire\Posts;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class Create extends Component
{
    public $categories, $category_id, $author, $title, $content, $posts;

    public function mount() {
        $this->categories = Category::get();
    }

    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.posts.create');
    }

    public function store() {
        $validatedData = $this->validate([
            'category_id'   => 'required',
            'author'        => 'required',
            'title'         => 'required',
            'content'       => 'required'
        ]);

        Post::create($validatedData);

        session()->flash('message', 'Post added');

        return redirect('/posts');
    }
}
